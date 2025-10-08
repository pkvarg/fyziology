<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Features;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Layout134Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::features.layout-134
    heading="Heading"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
>
    <x-slot:actions>
        <x-pjcomponents::button label="Button" link="https://google.com" />
        <x-pjcomponents::button
            type="secondary"
            label="Secondary button"
            link="https://google.com"
            target="_blank"
            :arrow="true"
            :border="false"
        />
    </x-slot:actions>
</x-pjcomponents::features.layout-134>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}