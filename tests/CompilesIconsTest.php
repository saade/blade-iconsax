<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use Saade\BladeIconsax\BladeIconsaxServiceProvider;

class CompilesIconsTest extends TestCase
{
    public function test_it_compiles_a_single_anonymous_component()
    {
        $result = svg('iconsax-bol-3d-cube-scan')->toHtml();

        $this->assertSame($this->source('bol-3d-cube-scan'), $result);
        $this->assertStringStartsWith('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">', $result);
    }

    public function test_it_can_add_classes_to_icons()
    {
        $result = svg('iconsax-bol-3d-cube-scan', 'w-6 h-6 text-gray-500')->toHtml();

        $this->assertSame($this->source('bol-3d-cube-scan', 'class="w-6 h-6 text-gray-500"'), $result);
    }

    public function test_it_can_add_styles_to_icons()
    {
        $result = svg('iconsax-bol-3d-cube-scan', ['style' => 'color: #555'])->toHtml();

        $this->assertSame($this->source('bol-3d-cube-scan', 'style="color: #555"'), $result);
    }

    public function test_it_compiles_every_style()
    {
        foreach (['bol', 'bro', 'bul', 'lin', 'out', 'two'] as $style) {
            $this->assertSame($this->source("{$style}-home"), svg("iconsax-{$style}-home")->toHtml());
        }
    }

    public function test_stroked_styles_inherit_the_current_color()
    {
        $this->assertStringStartsWith(
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">',
            svg('iconsax-lin-home')->toHtml()
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeIconsaxServiceProvider::class,
        ];
    }

    private function source(string $icon, string $attributes = ''): string
    {
        $svg = trim(file_get_contents(__DIR__."/../resources/svg/{$icon}.svg"));

        return $attributes === '' ? $svg : str_replace('<svg', "<svg {$attributes}", $svg);
    }
}
