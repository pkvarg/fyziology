<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Ctas;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Cta7Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::ctas.cta-7
    heading="Heading"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet accumsan arcu. Sed sit amet accumsan arcu."
>
    <x-slot:actions>
        <x-pjcomponents::button label="Primary button" link="https://google.com" target="_blank" />

        <x-pjcomponents::button
            label="Secondary button"
            link="https://google.com"
            target="_blank"
        />
    </x-slot:actions>
</x-pjcomponents::ctas.cta-7>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}