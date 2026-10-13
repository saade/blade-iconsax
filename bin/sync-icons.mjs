import { readFileSync, readdirSync, rmSync, writeFileSync } from "node:fs"
import { createRequire } from "node:module"
import { dirname, join } from "node:path"
import { fileURLToPath } from "node:url"
import { optimize } from "svgo"

const source = dirname(createRequire(import.meta.url).resolve("iconsax/manifest.json"))
const destination = fileURLToPath(new URL("../resources/svg", import.meta.url))

const PREFIXES = { bold: "bol", broken: "bro", bulk: "bul", linear: "lin", outline: "out", twotone: "two" }
const ALLOWED_ELEMENTS = new Set(["svg", "g", "path", "rect", "circle", "ellipse", "line", "polyline", "polygon"])

const slug = (name) => name.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-+|-+$/g, "")
const elements = (node) => node.children.filter((child) => child.type === "element")
const descendants = (node) => elements(node).flatMap((child) => [child, ...descendants(child)])

function assertViewportClip(clipPath, viewBox) {
  const [, , width, height] = viewBox.split(/\s+/).map(Number)
  const [rect, ...rest] = elements(clipPath)
  const covers =
    rect?.name === "rect" &&
    Math.abs(Number(rect.attributes.width) - width) < 1.1 &&
    Math.abs(Number(rect.attributes.height) - height) < 1.1

  if (!covers || rest.length) throw new Error("clipPath is not a plain viewport rectangle")
}

const normalize = {
  name: "iconsaxNormalize",
  fn: (root) => {
    const svg = elements(root)[0]
    const { xmlns, viewBox } = svg.attributes

    for (const node of [svg, ...descendants(svg)]) {
      for (const defs of elements(node).filter((child) => child.name === "defs")) {
        elements(defs).forEach((clipPath) => assertViewportClip(clipPath, viewBox))
      }
      node.children = node.children.filter((child) => child.name !== "defs")
      delete node.attributes["clip-path"]
    }

    const painted = (attribute) => descendants(svg).filter((node) => (node.attributes[attribute] ?? "none") !== "none")
    const fills = painted("fill")
    const strokes = painted("stroke")
    const colors = new Set([...fills.map((node) => node.attributes.fill), ...strokes.map((node) => node.attributes.stroke)])
    if (colors.size > 1) throw new Error(`more than one colour: ${[...colors].join(", ")}`)

    const mixed = fills.length > 0 && strokes.length > 0
    for (const node of fills) mixed ? (node.attributes.fill = "currentColor") : delete node.attributes.fill
    for (const node of strokes) mixed ? (node.attributes.stroke = "currentColor") : delete node.attributes.stroke

    svg.attributes = {
      xmlns,
      viewBox,
      fill: strokes.length ? "none" : "currentColor",
      ...(strokes.length && !mixed ? { stroke: "currentColor" } : {}),
      "aria-hidden": "true",
    }

    return null
  },
}

const orderRootAttributes = {
  name: "iconsaxOrderRootAttributes",
  fn: (root) => {
    const svg = elements(root)[0]
    const { xmlns, viewBox, fill, stroke, ...rest } = svg.attributes
    svg.attributes = { xmlns, viewBox, fill, ...(stroke ? { stroke } : {}), ...rest }

    return null
  },
}

function transform(svg) {
  // Kept out of the multipass run: a second pass would see the colours already
  // hoisted to the root and mistake a stroked icon for a filled one.
  const normalized = optimize(svg, { plugins: [normalize] }).data
  const { data } = optimize(normalized, {
    multipass: true,
    js2svg: { pretty: true, indent: 2 },
    plugins: ["preset-default", orderRootAttributes],
  })

  for (const [, tag] of data.matchAll(/<([a-zA-Z][\w:-]*)/g)) {
    if (!ALLOWED_ELEMENTS.has(tag)) throw new Error(`unexpected <${tag}>`)
  }
  if (/\sid=|url\(|href=|\son[a-z]+=|\sstyle=/.test(data)) throw new Error("unexpected reference, handler or inline style")
  for (const [, , value] of data.matchAll(/\s(fill|stroke)="([^"]*)"/g)) {
    if (value !== "none" && value !== "currentColor") throw new Error(`unexpected colour ${value}`)
  }

  return data
}

const manifest = JSON.parse(readFileSync(join(source, "manifest.json"), "utf8"))
const categories = new Map()
const category = (name) =>
  categories.get(name) ?? categories.set(name, JSON.parse(readFileSync(join(source, "data", `${name}.json`), "utf8"))).get(name)

const icons = new Map()
const skipped = []
const failed = []

for (const [name, entry] of Object.entries(manifest)) {
  const styles = category(entry.category)[name]

  for (const [key, svg] of Object.entries(styles)) {
    // Upstream 0.1.x exports the twotone variant of some icons under the key "null".
    const style = key === "null" && !styles.twotone ? "twotone" : key
    const file = PREFIXES[style] && `${PREFIXES[style]}-${slug(name)}.svg`

    if (!file || icons.has(file)) {
      skipped.push(`${name} (${key})`)
      continue
    }

    try {
      icons.set(file, transform(svg))
    } catch (error) {
      failed.push(`${name} (${key}): ${error.message}`)
    }
  }
}

if (failed.length) {
  console.error(`Nothing was written, ${failed.length} icons could not be converted:\n${failed.join("\n")}`)
  process.exit(1)
}

const current = new Map(
  readdirSync(destination)
    .filter((file) => file.endsWith(".svg"))
    .map((file) => [file, readFileSync(join(destination, file), "utf8")]),
)

const added = [...icons.keys()].filter((file) => !current.has(file))
const updated = [...icons.keys()].filter((file) => current.has(file) && current.get(file) !== icons.get(file))
const removed = [...current.keys()].filter((file) => !icons.has(file))

for (const file of [...added, ...updated]) writeFileSync(join(destination, file), icons.get(file))
for (const file of removed) rmSync(join(destination, file))

const { version } = JSON.parse(readFileSync(join(source, "..", "package.json"), "utf8"))
const names = (files) => files.map((file) => file.slice(0, -4))
const list = (title, items) => (items.length ? `\n### ${title} (${items.length})\n\n${items.map((item) => `- \`${item}\``).join("\n")}\n` : "")

console.log(`Synced ${icons.size} icons from iconsax@${version}: ${added.length} added, ${updated.length} updated, ${removed.length} removed.`)
console.log(list("Removed", names(removed)) + list("Added", names(added)) + list("Skipped upstream entries", skipped))
