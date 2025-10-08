<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\PortfolioHeaders;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Header2Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::portfolio-headers.header-2
    heading="Project name"
    text="Bear claw wafer gummi bears powder gingerbread donut danish macaroon chocolate bar. Muffin gummi bears muffin tootsie roll jelly beans tiramisu cookie caramels. Croissant fruitcake cake chocolate marzipan tart tiramisu cotton candy."
>
    <x-slot:image>
        <img src="{{ asset(\'images/placeholder-image.svg\') }}" alt="placeholder">
    </x-slot:image>

    <x-slot:tags>
        <x-pjcomponents::tag label="Without link" />
        <x-pjcomponents::tag label="With link" link="https://google.com" />
    </x-slot:tags>
</x-pjcomponents::portfolio-headers.header-2>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}