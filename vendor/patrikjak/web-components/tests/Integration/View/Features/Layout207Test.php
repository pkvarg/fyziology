<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Features;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Layout207Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::features.layout-207
    heading="Heading"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
    :features="[\'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\', \'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\', \'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\']"
>
    <x-slot:image>
        <img src="{{ asset(\'images/placeholder-image.svg\') }}" alt="placeholder">
    </x-slot:image>

    <x-slot:feature-icon>
        <img src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg" alt="icon">
    </x-slot:feature-icon>

    <x-slot:actions>
        <x-pjcomponents::button label="Primary button" type="primary" link="https://google.com" />
        <x-pjcomponents::button label="Secondary button" type="secondary" link="https://google.com" :arrow="true" :border="false" />
    </x-slot:actions>
</x-pjcomponents::features.layout-207>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}