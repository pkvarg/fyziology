<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\HeroHeaders;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Header9Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::hero-headers.header-9
    heading="Heading"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
>
    <x-slot:image>
        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="Image">
    </x-slot:image>

    <x-slot:actions>
        <x-pjcomponents::button label="Primary button" type="primary" link="https://google.com" />
        <x-pjcomponents::button label="Secondary button" type="secondary" link="https://google.com" />
    </x-slot:actions>
</x-pjcomponents::hero-headers.header-9>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}