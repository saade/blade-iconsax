<?php

declare(strict_types=1);

namespace Tests;

use Saade\BladeIconsax\BladeIconsaxServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('iconsax-bol-3d-cube-scan')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M22 9.75c-.41 0-.75-.34-.75-.75V7c0-2.58-1.67-4.25-4.25-4.25H7C4.42 2.75 2.75 4.42 2.75 7v2c0 .41-.34.75-.75.75s-.75-.34-.75-.75V7c0-3.44 2.31-5.75 5.75-5.75h10c3.44 0 5.75 2.31 5.75 5.75v2c0 .41-.34.75-.75.75zM17 22.75H7c-3.44 0-5.75-2.31-5.75-5.75v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 2.58 1.67 4.25 4.25 4.25h10c2.58 0 4.25-1.67 4.25-4.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 3.44-2.31 5.75-5.75 5.75z"/>
          <path d="M16.4 8.21l-3.76-2.03c-.4-.21-.87-.21-1.27 0L7.6 8.21c-.27.15-.44.44-.44.76 0 .33.17.62.44.77l3.76 2.03c.2.11.42.16.64.16.22 0 .44-.05.64-.16l3.76-2.03a.87.87 0 00.44-.77c0-.32-.17-.61-.44-.76zM10.74 12.469l-3.5-1.75a.867.867 0 00-.84.04.86.86 0 00-.4.73v3.31c0 .57.32 1.09.83 1.34l3.5 1.75c.12.06.25.09.39.09.16 0 .31-.04.45-.13.26-.16.41-.43.41-.73v-3.31c-.01-.57-.32-1.08-.84-1.34zM17.592 10.758a.867.867 0 00-.84-.04l-3.5 1.75a1.5 1.5 0 00-.83 1.34v3.31c0 .3.15.57.41.73.14.09.29.13.45.13.13 0 .26-.03.39-.09l3.5-1.75c.51-.26.83-.77.83-1.34v-3.31c0-.3-.15-.57-.41-.73z"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('iconsax-bol-3d-cube-scan', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M22 9.75c-.41 0-.75-.34-.75-.75V7c0-2.58-1.67-4.25-4.25-4.25H7C4.42 2.75 2.75 4.42 2.75 7v2c0 .41-.34.75-.75.75s-.75-.34-.75-.75V7c0-3.44 2.31-5.75 5.75-5.75h10c3.44 0 5.75 2.31 5.75 5.75v2c0 .41-.34.75-.75.75zM17 22.75H7c-3.44 0-5.75-2.31-5.75-5.75v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 2.58 1.67 4.25 4.25 4.25h10c2.58 0 4.25-1.67 4.25-4.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 3.44-2.31 5.75-5.75 5.75z"/>
          <path d="M16.4 8.21l-3.76-2.03c-.4-.21-.87-.21-1.27 0L7.6 8.21c-.27.15-.44.44-.44.76 0 .33.17.62.44.77l3.76 2.03c.2.11.42.16.64.16.22 0 .44-.05.64-.16l3.76-2.03a.87.87 0 00.44-.77c0-.32-.17-.61-.44-.76zM10.74 12.469l-3.5-1.75a.867.867 0 00-.84.04.86.86 0 00-.4.73v3.31c0 .57.32 1.09.83 1.34l3.5 1.75c.12.06.25.09.39.09.16 0 .31-.04.45-.13.26-.16.41-.43.41-.73v-3.31c-.01-.57-.32-1.08-.84-1.34zM17.592 10.758a.867.867 0 00-.84-.04l-3.5 1.75a1.5 1.5 0 00-.83 1.34v3.31c0 .3.15.57.41.73.14.09.29.13.45.13.13 0 .26-.03.39-.09l3.5-1.75c.51-.26.83-.77.83-1.34v-3.31c0-.3-.15-.57-.41-.73z"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('iconsax-bol-3d-cube-scan', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
        <svg style="color: #555" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M22 9.75c-.41 0-.75-.34-.75-.75V7c0-2.58-1.67-4.25-4.25-4.25H7C4.42 2.75 2.75 4.42 2.75 7v2c0 .41-.34.75-.75.75s-.75-.34-.75-.75V7c0-3.44 2.31-5.75 5.75-5.75h10c3.44 0 5.75 2.31 5.75 5.75v2c0 .41-.34.75-.75.75zM17 22.75H7c-3.44 0-5.75-2.31-5.75-5.75v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 2.58 1.67 4.25 4.25 4.25h10c2.58 0 4.25-1.67 4.25-4.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 3.44-2.31 5.75-5.75 5.75z"/>
          <path d="M16.4 8.21l-3.76-2.03c-.4-.21-.87-.21-1.27 0L7.6 8.21c-.27.15-.44.44-.44.76 0 .33.17.62.44.77l3.76 2.03c.2.11.42.16.64.16.22 0 .44-.05.64-.16l3.76-2.03a.87.87 0 00.44-.77c0-.32-.17-.61-.44-.76zM10.74 12.469l-3.5-1.75a.867.867 0 00-.84.04.86.86 0 00-.4.73v3.31c0 .57.32 1.09.83 1.34l3.5 1.75c.12.06.25.09.39.09.16 0 .31-.04.45-.13.26-.16.41-.43.41-.73v-3.31c-.01-.57-.32-1.08-.84-1.34zM17.592 10.758a.867.867 0 00-.84-.04l-3.5 1.75a1.5 1.5 0 00-.83 1.34v3.31c0 .3.15.57.41.73.14.09.29.13.45.13.13 0 .26-.03.39-.09l3.5-1.75c.51-.26.83-.77.83-1.34v-3.31c0-.3-.15-.57-.41-.73z"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeIconsaxServiceProvider::class,
        ];
    }
}
