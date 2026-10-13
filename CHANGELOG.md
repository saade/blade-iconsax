# Changelog

This changelog follows [the Keep a Changelog standard](https://keepachangelog.com).


## [Unreleased](https://github.com/saade/blade-iconsax/compare/v2.0.0...2.x)


## 2.0.0 (unreleased)

The major version of this package now follows the major version of Iconsax. This release replaces the Iconsax V1 set with the free Iconsax V2 set, generated from the official [`iconsax`](https://www.npmjs.com/package/iconsax) npm package (0.1.1).

It goes from 943 icons (5,396 SVGs) to 1,185 icons (6,918 SVGs). Iconsax V2 renamed, reshuffled and dropped icons, so **this is a breaking release**: an icon that no longer exists throws when it is rendered. Every 1.x icon that changed is listed below.

The lists use the icon name without its style prefix: `home` stands for `iconsax-bol-home`, `iconsax-lin-home` and so on. An entry applies to every style unless styles are listed next to it. The mapping was made by rendering every 1.x icon and looking for the identical drawing in the same style of 2.x.

### Changed

- Icons are generated from the `iconsax` npm package with `npm run sync`, and a scheduled workflow opens a pull request when a new version changes them.
- Every icon is drawn with `currentColor`. A few 1.x icons had hard-coded colours.

### Renamed (165)

The 1.x name is gone and the icon lives under a new name. A style marked with \* has no identical drawing in 2.x: the name given is where the other styles went, and its drawing differs.

| 1.x | 2.x |
| --- | --- |
| `additem` | `add-item` |
| `archive-2` | `archive` (bold\*, broken\*, bulk, outline\*) |
| `arrange-circle` | `arrow-swap-03` |
| `arrange-circle-2` | `swap-horizontal-03` |
| `arrange-square` | `swap-horizontal-02` |
| `arrange-square-2` | `arrow-swap-02` |
| `arrow-2` | `arrow-transfer-01` |
| `arrow-3` | `arrow-transfer-02` |
| `arrow-bottom` | `arrow-down-03` |
| `arrow-down` | `arrow-down-02` (bold, linear, twotone)<br>`arrow-down-04` (broken, bulk)<br>`arrow-down-01` (outline) |
| `arrow-down-1` | `arrow-down-01` (bold, broken, linear, twotone)<br>`arrow-down-02` (bulk, outline) |
| `arrow-down-2` | `arrow-down-04` (bold, linear, outline, twotone)<br>`arrow-down-02` (broken)<br>`arrow-down-01` (bulk) |
| `arrow-left` | `arrow-left-01` (linear, outline, twotone)<br>`arrow-left-04` (broken, bulk)<br>`arrow-left-03` (bold) |
| `arrow-left-1` | `arrow-left-01` (bold, broken)<br>`arrow-left-03` (bulk, outline)<br>`arrow-left-02` (linear, twotone) |
| `arrow-left-2` | `arrow-left-04` (bold, linear, twotone)<br>`arrow-left-02` (broken, outline)<br>`arrow-left-01` (bulk) |
| `arrow-left-3` | `arrow-left-03` (broken, linear, twotone)<br>`arrow-left-02` (bold, bulk)<br>`arrow-left-04` (outline) |
| `arrow-right` | `arrow-right-01` (broken, linear, twotone)<br>`arrow-right-04` (bold, bulk)<br>`arrow-square-right` (outline) |
| `arrow-right-1` | `arrow-right-03` (bold, broken, bulk)<br>`arrow-right-02` (linear, twotone)<br>`arrow-right-01` (outline) |
| `arrow-right-2` | `arrow-right-04` (broken, linear, outline, twotone)<br>`arrow-right-02` (bold)<br>`arrow-right-01` (bulk) |
| `arrow-right-3` | `arrow-right-02` (broken, bulk, outline)<br>`arrow-right-03` (linear, twotone)<br>`arrow-right-01` (bold) |
| `arrow-right-4` | `arrow-right-03` |
| `arrow-swap` | `arrow-swap-01` |
| `arrow-swap-horizontal` | `swap-horizontal-01` |
| `arrow-up` | `arrow-up-01` (broken, linear, twotone)<br>`arrow-up-04` (bold, bulk)<br>`arrow-up-03` (outline) |
| `arrow-up-1` | `arrow-up-02` (bold, linear, twotone)<br>`arrow-up-04` (broken, outline)<br>`arrow-up-01` (bulk) |
| `arrow-up-2` | `arrow-up-03` (bold, broken)<br>`arrow-up-02` (bulk, outline)<br>`arrow-up-04` (linear, twotone) |
| `arrow-up-3` | `arrow-up-03` (bulk, linear, twotone)<br>`arrow-up-01` (bold, outline)<br>`arrow-up-02` (broken) |
| `back-square` | `arrow-back` |
| `backward-item-1` | `backward-item` |
| `battery-3full` | `battery-2bars` |
| `bezier-1` | `bezier` |
| `blur-1` | `blur` |
| `book-1` | `book-open` (bold, linear, outline, twotone)<br>`book` (broken, bulk) |
| `box-1` | `box` (broken, bulk, linear, outline, twotone)<br>`3dcube` (bold) |
| `brush-1` | `brush-square` (broken, linear, outline)<br>`paint-roller` (bold)<br>`paint-brush` (bulk)<br>`brush` (twotone) |
| `brush-2` | `paint-brush-2` (broken, bulk, linear, outline)<br>`brush` (bold)<br>`brush-square` (twotone) |
| `brush-3` | `brush` (broken, bulk)<br>`brush-square` (bold)<br>`paint-roller` (linear)<br>`paint-brush` (outline)<br>`paint-brush-2` (twotone) |
| `brush-4` | `paint-roller` (broken, bulk, twotone)<br>`paint-brush-2` (bold)<br>`brush` (outline) |
| `bucket-circle-1` | `bucket-circle` |
| `bucket-square-1` | `bucket-square` |
| `buliding` | `building` |
| `chart-1` | `chart-3` (bold\*, broken\*, bulk\*, linear, outline, twotone\*) |
| `chart-21` | `chart-2` (bold, broken, linear\*, outline\*)<br>`chart-3` (bulk, twotone) |
| `clock-1` | `clock` (bold\*, broken\*, bulk, linear, outline\*, twotone\*) |
| `colors-square-1` | `colors-square` |
| `component-1` | `component` |
| `convert` | `convert-arrow` |
| `devices-1` | `devices` (bold\*, broken\*, bulk, linear, outline\*) |
| `discover-1` | `discover` (bold, broken\*, bulk, linear\*, outline\*) |
| `document-1` | `document` (bold\*, broken\*, bulk, linear\*, outline\*, twotone\*) |
| `document-text-1` | `document-text` (bold, broken, bulk)<br>`document-text-2` (linear, outline, twotone) |
| `element-1` | `left-bar-grid` |
| `element-2` | `left-bar-grid` (bold, broken, outline)<br>`left-sidebar-grid` (bulk, linear, twotone) |
| `element-3` | `grids-4` |
| `element-4` | `top-bottom-grid` |
| `element-equal` | `grid-equal` |
| `element-plus` | `grid-add` |
| `eraser-1` | `eraser` (bold\*, broken\*, bulk, linear\*, outline\*, twotone\*) |
| `export` | `export-arrow-01` (broken, linear, twotone)<br>`export-arrow-02` (bold, bulk)<br>`export-circle-01` (outline) |
| `export-1` | `export-circle-01` (bulk, linear, twotone)<br>`export-circle-02` (bold)<br>`export-arrow-02` (broken)<br>`export-arrow-01` (outline) |
| `export-2` | `export-circle-02` (broken, bulk, outline)<br>`export-arrow-02` (linear, twotone)<br>`export-circle-01` (bold) |
| `export-3` | `export-arrow-01` (bold, bulk)<br>`export-circle-02` (linear, twotone)<br>`export-circle-01` (broken)<br>`export-arrow-02` (outline) |
| `fatrows` | `align-left-2` |
| `finger-cricle` | `finger-circle` |
| `flash-1` | `flash` (bold\*, broken\*, bulk, linear\*, outline\*, twotone\*) |
| `flash-circle-1` | `flash-circle` (bold, broken, bulk\*, linear\*, outline, twotone) |
| `flash-circle-2` | `flash-circle` |
| `forward-item-1` | `forward-item` |
| `forward-square` | `arrow-forward` |
| `frame` | `arrow-circle-up` (linear, twotone)<br>`profile` (bold)<br>`dollar-circle` (broken)<br>`chart-fail` (bulk)<br>`import-circle-02` (outline) |
| `frame-1` | `arrow-swap-01` (linear, twotone)<br>`shield` (bold)<br>`import-circle-02` (broken)<br>`align-top-2` (bulk)<br>`profile` (outline) |
| `frame-2` | `import-arrow-01` (linear, twotone)<br>`notification-circle` (bold)<br>`profile` (broken)<br>`eye` (bulk)<br>`left-sidebar-grid` (outline) |
| `frame-3` | `align-top-2` (outline, twotone)<br>`left-sidebar-grid` (bold)<br>`align-top` (broken)<br>`import-arrow-01` (bulk)<br>`chart-fail` (linear) |
| `frame-4` | `align-top-2` (bold, linear\*, twotone\*)<br>`left-sidebar-grid` (broken)<br>`gallery-export` (bulk)<br>`shield-security` (outline) |
| `frame-5` | `align-top-2` (broken, linear)<br>`chart-fail` (twotone) |
| `frame-6` | `shield-security` |
| `frame-7` | `shield` |
| `glass-1` | `glass` (bold, broken, bulk\*, linear, outline, twotone) |
| `grammerly` | `happy` |
| `group` | `truck` (bulk)<br>`percentage-circle` (linear) |
| `group-1` | `truck-fast` (bulk)<br>`convert-card` (linear) |
| `group-2` | `bucket` |
| `group-3` | `paint-brush` |
| `group-4` | `bucket` |
| `group-5` | `paint-brush` |
| `group-6` | `truck` |
| `group-7` | `truck-fast` |
| `group-8` | `forbidden` |
| `group-9` | `forbidden-2` |
| `group-10` | `home-3` |
| `group-11` | `shuffle` |
| `hashtag-1` | `hashtag` (bold\*, broken\*, bulk, linear, outline\*, twotone\*) |
| `home-1` | `home` (bold, broken, bulk, twotone)<br>`home-3` (outline) |
| `icon` | `truck-time` (broken)<br>`drop` (outline)<br>`empty-wallet-time` (twotone) |
| `icon-1` | `truck-remove` (broken)<br>`empty-wallet-change` (twotone) |
| `icon-2` | `truck-time` |
| `icon-3` | `truck-remove` |
| `import` | `import-circle-02` (bold, linear, twotone)<br>`import-circle-01` (bulk, outline)<br>`import-arrow-01` (broken) |
| `import-1` | `import-arrow-02` (bold, broken, linear, twotone)<br>`import-circle-02` (bulk)<br>`import-arrow-01` (outline) |
| `import-2` | `import-circle-01` (broken, linear, twotone)<br>`import-arrow-02` (bulk, outline)<br>`import-arrow-01` (bold) |
| `import-3` | `import-circle-01` |
| `kanban` | `align-top` |
| `lamp-1` | `lamp` |
| `link-1` | `link` (bulk, linear, twotone)<br>`link-2` (bold, broken)<br>`link-4` (outline) |
| `link-21` | `link-3` (bold, broken, bulk, linear, twotone)<br>`link` (outline) |
| `lock-1` | `padlock` (broken, bulk, linear, twotone)<br>`lock` (bold, outline) |
| `login` | `login-02` (broken, linear, outline, twotone)<br>`login-01` (bold, bulk) |
| `login-1` | `login-01` (broken, linear, outline, twotone)<br>`login-02` (bold, bulk) |
| `logout` | `logout-02` |
| `logout-1` | `logout-01` (bold, broken\*, bulk, linear, outline, twotone) |
| `main-component-1` | `main-component` |
| `mask-3` | `mask-2` |
| `maximize-1` | `layout-adjust` (bold, broken, bulk\*, linear\*, outline, twotone\*) |
| `maximize-21` | `maximize-2` (bold\*, broken\*, linear, outline, twotone)<br>`maximize` (bulk) |
| `menu-1` | `menu` (bold\*, broken\*, bulk, linear, outline\*, twotone\*) |
| `message` | `chatbox` |
| `message-2` | `message-bubble` |
| `messages-1` | `conversation-box` (bold, broken, bulk, linear, twotone)<br>`messages-bubbles-2` (outline) |
| `messages-3` | `messages` |
| `microscope` | `telescope` |
| `mini-music-sqaure` | `mini-music-square` |
| `minus-cirlce` | `minus-circle` |
| `monitor-mobbile` | `monitor-mobile` |
| `more-2` | `more` |
| `mouse-1` | `mouse` |
| `note-21` | `note-1` (broken, outline, twotone)<br>`note` (bulk, linear)<br>`note-2` (bold) |
| `notification-1` | `notification-2` (bold, bulk, linear, outline, twotone)<br>`notification` (broken) |
| `omega-circle-1` | `omega-circle` |
| `omega-square-1` | `omega-square` |
| `pen-add-1` | `pen-add` |
| `pen-close-1` | `pen-close` |
| `pen-remove-1` | `pen-remove` |
| `pen-tool-1` | `pen-tool` |
| `pen-tool-2-1` | `pen-tool-2` |
| `play-cricle` | `play-circle` |
| `radar-1` | `radar` (bold\*, broken, bulk\*, linear, outline, twotone) |
| `ranking-1` | `ranking` (bold\*, broken\*, bulk, linear\*, outline\*, twotone\*) |
| `receive-square` | `receive-square-01` |
| `receive-square-2` | `receive-square-02` |
| `redo` | `redo-arrow` |
| `refresh` | `refresh-arrow-02` |
| `refresh-2` | `refresh-arrow-01` (bold, broken, bulk, linear, outline\*, twotone) |
| `refresh-left-square` | `refresh-left` |
| `refresh-right-square` | `refresh-right` |
| `refresh-square-2` | `refresh-square` (bold, broken, bulk, linear, outline\*, twotone) |
| `rotate-left-1` | `rotate-left` (bold, broken, bulk\*, linear, outline, twotone) |
| `rotate-right-1` | `rotate-right` (bold, broken, bulk\*, linear, outline, twotone) |
| `ruler&pen` | `ruler-pen` |
| `scissor-1` | `scissor` (bold\*, broken\*, bulk, linear\*, outline\*, twotone\*) |
| `scissor-2` | `scissor` |
| `search-normal-1` | `search` |
| `send-1` | `send` (bold, broken, bulk\*, linear, outline, twotone) |
| `send-sqaure-2` | `send-square-02` |
| `send-square` | `send-square-01` |
| `shapes-2` | `shapes-1` |
| `star-1` | `star` (bold, broken, bulk, linear, twotone)<br>`ranking-2` (outline) |
| `sun-1` | `sun` |
| `timer-1` | `timer` |
| `trush-square` | `trash-square` |
| `undo` | `undo-arrow` |
| `user-cirlce-add` | `user-circle-add` |
| `user-octagon` | `user-hexagon` |
| `voice-cricle` | `voice-circle` |
| `wallet-add-2` | `wallet-add` |
| `weight-1` | `weight` |

### Same name, different icon (49)

The name still exists in 2.x but now renders another icon. The second column is where the 1.x drawing went. Styles that are not listed are unchanged, or appear under [Redrawn](#redrawn-57).

| Name | The 1.x icon is now |
| --- | --- |
| `book` | `book-open` (broken, bulk) |
| `brush` | `paint-brush` (bold, broken, twotone)<br>`brush-square` (bulk)<br>`paint-roller` (outline) |
| `building` | `building-5` |
| `calendar` | `calendar-date` (outline) |
| `calendar-1` | `calendar-date` (bold, bulk)<br>`calendar` (outline) |
| `call-received` | `call-remove` (broken) |
| `card-tick` | `card-tick-1` (outline) |
| `card-tick-1` | `card-tick` (outline) |
| `chart-2` | `chart-3` (broken) |
| `chart-3` | `chart` (bulk, linear, outline, twotone) |
| `coin` | `coin-1` (outline) |
| `coin-1` | `coin` (outline) |
| `document-text` | `document-text-2` (bold, broken, bulk) |
| `home` | `home-3` (bold, broken, bulk, twotone) |
| `link` | `link-4` (bold, broken, bulk, linear, twotone)<br>`link-2` (outline) |
| `link-2` | `link` (bold, broken)<br>`link-3` (outline) |
| `lock` | `padlock` (bold, outline) |
| `mask` | `mask-2` (outline) |
| `mask-1` | `mask-2` (broken)<br>`mask` (outline) |
| `mask-2` | `mask-1` (broken, linear, outline) |
| `maximize` | `layout-adjust` (bulk) |
| `maximize-2` | `layout-adjust` (linear, twotone) |
| `messages` | `messages-bubbles-2` (bold, broken, bulk, linear, twotone)<br>`conversation-box` (outline) |
| `more` | `3-dots-more` |
| `note-2` | `note` (bold) |
| `notification` | `notification-2` (broken) |
| `pharagraphspacing` | `paragraphspacing` (broken, bulk, linear, outline, twotone) |
| `play-circle` | `play-circle-1` |
| `presention-chart` | `presentation-chart` (outline) |
| `receipt` | `receipt-1` (outline) |
| `receipt-1` | `receipt` (outline) |
| `repeat` | `repeat-arrow` (bold, broken, linear, outline, twotone) |
| `repeate-music` | `repeat-music` (broken, bulk, linear) |
| `search-status` | `search-status-1` (bold) |
| `search-zoom-in` | `search-zoom-in-1` (linear, outline, twotone) |
| `search-zoom-in-1` | `search-zoom-in` (linear, twotone) |
| `search-zoom-out` | `search-zoom-out-1` (bulk) |
| `setting` | `settings` (bold, twotone) |
| `shapes-1` | `shapes` (linear) |
| `slider-horizontal` | `slider-horizontal-1` (bulk, outline) |
| `slider-horizontal-1` | `slider-horizontal` (bulk, outline) |
| `slider-vertical` | `slider-vertical-1` (broken, bulk, outline) |
| `slider-vertical-1` | `slider-vertical` (broken, bulk, outline) |
| `star` | `ranking-2` (bold, broken, bulk, linear, twotone) |
| `sun` | `snowflake` |
| `timer` | `hourglass` |
| `wallet` | `wallet-1` (outline) |
| `wallet-1` | `wallet` (outline) |
| `wallet-add` | `wallet-add-1` (twotone) |

### Removed (2)

These icons have no identical drawing in 2.x.

`archive-1`, `eraser-2`

### Removed styles (5)

The icon still exists, without this style.

`two-cd`, `two-devices`, `two-map-1`, `bro-receipt-disscount`, `bul-setting`

### Redrawn (57)

Same name, new drawing, and the 1.x drawing is not available under another name.

`3d-square` (twotone), `archive` (bulk), `bezier` (bulk), `blend-2` (linear, twotone), `box` (broken, bulk, linear, outline, twotone), `calendar-1` (broken, linear, twotone), `card-coin` (bold), `cd` (linear), `chart` (bulk, linear, outline, twotone), `chart-2` (bold), `chart-3` (broken), `clock` (bulk, linear), `convert-card` (bold), `data-2` (outline), `devices` (bulk, linear), `discover` (bold, bulk), `document` (bulk), `document-copy` (twotone), `document-sketch` (twotone), `driver-refresh` (outline), `empty-wallet-add` (bold), `eraser` (bulk), `flash` (bulk), `flash-circle` (bold, broken, linear, outline, twotone), `glass` (bold, broken, linear, outline, twotone), `hashtag` (bulk, linear), `lamp`, `maximize-2` (outline), `maximize-circle` (twotone), `menu` (bulk, linear), `message-question` (broken), `mobile` (linear, twotone), `mouse`, `note` (bold, bulk, linear), `note-1` (broken, outline, twotone), `quote-down` (broken), `radar` (broken, linear, outline, twotone), `ranking` (bulk), `recovery-convert` (linear, twotone), `rotate-left` (bold, broken, linear, outline, twotone), `rotate-right` (bold, broken, linear, outline, twotone), `scissor` (bulk, linear), `search-favorite`, `search-favorite-1` (broken, linear, outline, twotone), `search-normal` (bold, broken, bulk, outline), `search-status` (broken, bulk, linear, outline, twotone), `search-status-1` (bold, broken, linear, outline, twotone), `search-zoom-in` (bold, broken, bulk), `search-zoom-in-1` (outline), `search-zoom-out` (bold, broken, outline), `search-zoom-out-1` (bulk), `send` (bold, broken, linear, outline, twotone), `settings` (bold, twotone), `user-square` (outline), `volume-cross` (twotone), `volume-slash` (twotone), `weight`

### Added (409)

<details>
<summary>New icon names</summary>

`3-dots-more`, `aave-aave`, `add-item`, `ai-ac`, `ai-add`, `ai-antenna`, `ai-commentary`, `ai-fuel-tank`, `ai-heart-square`, `ai-homepage`, `ai-hospital`, `ai-housing`, `ai-landscape`, `ai-loveletter`, `ai-record-video`, `ai-sand-timer`, `ai-send-message`, `ai-shape-triangle`, `ai-syringe`, `ai-tag-price`, `ai-tools`, `ai-users`, `ai-water-cycle`, `ai-weight`, `align-left-2`, `align-top`, `align-top-2`, `android`, `angel-1`, `angel-2`, `ankr-ankr`, `apple`, `arrow-back`, `arrow-down-01`, `arrow-down-02`, `arrow-down-03`, `arrow-down-04`, `arrow-forward`, `arrow-left-01`, `arrow-left-02`, `arrow-left-03`, `arrow-left-04`, `arrow-right-01`, `arrow-right-02`, `arrow-right-03`, `arrow-right-04`, `arrow-swap-01`, `arrow-swap-02`, `arrow-swap-03`, `arrow-transfer-01`, `arrow-transfer-02`, `arrow-up-01`, `arrow-up-02`, `arrow-up-03`, `arrow-up-04`, `augur-rep`, `autonio-niox`, `avalanche-avax`, `ball-2`, `ball-3`, `ball-4`, `ball-5`, `ball-6`, `ball-7`, `ball-8`, `ball-9`, `ball-10`, `ball-11`, `ball-12`, `ball-13`, `ball-14`, `ball-15`, `ball-16`, `ball-19`, `ball-20`, `ball-21`, `ball-22`, `ball-23`, `ball-25`, `ball-26`, `ball-27`, `ball-28`, `ball-29`, `balll-24`, `baloons-1`, `battery-2bars`, `behance`, `bell`, `bell-2`, `binance-coin-bnb`, `binance-usd-busd`, `birds`, `bitcoin-btc`, `blogger`, `book-open`, `booking-snow`, `bootstrap`, `brush-square`, `building-5`, `cake-4`, `calendar-3`, `calendar-4`, `calendar-christmas`, `calendar-date`, `calendar-tree`, `candy`, `candy-1`, `candy-2`, `candy-3`, `candy-cane`, `candy-cane-3`, `candy-cane-6`, `candy-cane-7`, `candy-cane-8`, `cardano-ada`, `celo-celo`, `celsius-cel`, `chainlink-link`, `chatbox`, `christmas-ball-05`, `christmas-bell`, `christmas-bow`, `christmas-card`, `christmas-house`, `christmas-shoes`, `christmas-sweater`, `christmas-tree`, `christmas-wreath`, `civic-cvc`, `clock-2`, `conversation-box`, `convert-arrow`, `dai-dai`, `dash-dash`, `dash-dash-navigation-control-speed-transportation-route`, `decor`, `decred-dcr`, `deer`, `dent-dent`, `dent-dental-care-oral-health-toothbrush-teeth-cleaning`, `dent-dental-care-tooth-health-hygiene-checkup`, `dent-dental-care-tooth-hygiene-oral-health-cleaning`, `dent-dental-care-toothbrush-oral-hygiene-checkup-smile`, `document-text-2`, `dribbble`, `dropbox`, `educare-ekt`, `email-snow`, `emercoin-emc`, `enhance-prize`, `enhance-user-ai`, `enjin-coin-enj`, `eos-eos`, `ethereum`, `ethereum-classic-etc`, `ethereum-eth`, `export-arrow-01`, `export-arrow-02`, `export-circle-01`, `export-circle-02`, `facebook`, `figma`, `figma-circle`, `finger-circle`, `fire`, `fire-9`, `fire-10`, `fire-11`, `fireworks`, `fireworks-2`, `fireworks-3`, `fireworks-7`, `fireworks-7celebration-festivity-event-party-display-explosions`, `framer`, `ftx-token-ftt`, `gift-2`, `gift-3`, `gift-4`, `gift-5`, `gift-6`, `gift-7`, `gift-9`, `gift-10`, `gift-11`, `gift-13`, `gift-14`, `gift-15`, `gift-16`, `gift-17`, `gift-18`, `gift-20`, `gift-21`, `gift-bag`, `gift-cupcake`, `google`, `google-drive`, `google-play`, `grid-add`, `grid-equal`, `grids-4`, `hanging-ornament`, `happy`, `harmony-one`, `hat`, `hat-2`, `hat-3`, `hedera-hashgraph-hbar`, `hex-hex`, `ho-ho-ho`, `holiday-icons`, `home-3`, `horseshoe`, `hourglass`, `html-3`, `html-5`, `huobi-token-ht`, `icon-icx`, `illustrator`, `import-arrow-01`, `import-arrow-02`, `import-circle-01`, `import-circle-02`, `iost-iost`, `javascript`, `js`, `kyber-network-knc`, `lamp-christmas`, `lantern-star`, `layout-adjust`, `left-bar-grid`, `left-sidebar-grid`, `link-3`, `link-4`, `litecoin`, `litecoin-ltc`, `login-01`, `login-02`, `logout-01`, `logout-02`, `lollipop`, `magic`, `magic-wand`, `maker-mkr`, `message-bubble`, `messages-bubbles-2`, `messenger`, `mini-music-square`, `minus-circle`, `mistletoe`, `mitten`, `mitten-2`, `monero-xmr`, `monitor-mobile`, `musical-note-ai`, `nebulas-nas`, `nem-xem`, `nexo-nexo`, `notification-2`, `ocean-protocol-ocean`, `ok-app`, `okb-okb`, `ontology-knowledge-structure-concept-map-relationship-data-model`, `ontology-knowledge-structure-concept-map-semantics-information`, `ontology-knowledge-structure-concept-mapping-semantic-relation-data-model`, `ontology-ont`, `ontology-ontology-knowledge-structure-concept-map-data-relationships`, `padlock`, `paint-brush`, `paint-brush-2`, `paint-roller`, `paper-1`, `paper-3`, `paragraphspacing`, `party-hat`, `party-popper`, `paypal`, `photoshop`, `play-circle-1`, `polkadot-dot`, `polygon-matic`, `polyswarm-nct`, `presentation-chart`, `python`, `quant-qnt`, `ranking-2`, `receive-square-01`, `receive-square-02`, `redo-arrow`, `refresh-arrow-01`, `refresh-arrow-02`, `refresh-left`, `refresh-right`, `refresh-square`, `reindeer-antlers`, `reindeer-arch`, `reindeer-face`, `repeat-arrow`, `repeat-music`, `ruler-pen`, `santa`, `santa-2`, `santa-face`, `santa-hat`, `santa-mouth`, `search`, `send-square-01`, `send-square-02`, `serving-dome`, `shop-gift`, `shop-snow`, `shutterstock`, `siacoin-sc`, `ski`, `slack`, `sleigh-2`, `sleigh-3`, `smart-bag`, `smart-cursor`, `smart-lock-ai`, `snapchat`, `snow`, `snow-2`, `snow-3`, `snow-4`, `snow-5`, `snow-8`, `snow-9`, `snow-10`, `snow-11`, `snow-12`, `snow-13`, `snow-14`, `snow-15`, `snow-16`, `snowflake`, `snowman`, `snowman-1`, `snowman-2`, `snowman-3`, `snowman-5`, `snowman-6`, `snowman-7`, `socks`, `socks-2`, `socks-3`, `solana-sol`, `sparkler`, `spotify`, `stacks-stx`, `star-2`, `star-3`, `star-4`, `star-6`, `star-garland`, `stars`, `stellar-xlm`, `stick`, `stick-2`, `stick-3`, `swap-horizontal-01`, `swap-horizontal-02`, `swap-horizontal-03`, `telescope`, `tenx-pay`, `tether-usdt`, `the-graph-grt`, `theta-theta`, `thorchain-rune`, `top-bottom-grid`, `toy-2`, `toy-3`, `toy-4`, `toy-5`, `toy-6`, `toy-9`, `trash-square`, `tree-2`, `tree-3`, `trello`, `trontron-trx`, `twitch`, `ui8`, `undo-arrow`, `usd-coin-usdc`, `user-circle-add`, `user-hexagon`, `velas-vlx`, `vibe-vibe`, `voice-circle`, `vuesax`, `wanchain-wan`, `wanchain-wan-1`, `whatsapp`, `windows`, `wing-wing`, `wing-wing-flight-aerodynamics-transportation-freedom-aviation`, `wing-wing-flight-aviation-aircraft-freedom-soar`, `wing-wing-fly-flight-aircraft-aerodynamics-wingspan`, `winter-boots`, `winter-mitten`, `winter-pattern`, `xd`, `xiaomi`, `xrp-xrp`, `xrp-xrp-cryptocurrency-digital-asset-blockchain-payment-transactions`, `youtube`, `zel-zel`, `zipline`, `zoom`

</details>


## 1.0.0 (20??-??-??)

Initial release.
