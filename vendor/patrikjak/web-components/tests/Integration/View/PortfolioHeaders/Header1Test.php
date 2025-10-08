<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\PortfolioHeaders;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Header1Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::portfolio-headers.header-1
    heading="Project name"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
>
    <x-slot:tags>
        <x-pjcomponents::tag label="Without link" />
        <x-pjcomponents::tag label="With link" link="https://google.com" />
    </x-slot:tags>
</x-pjcomponents::portfolio-headers.header-1>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}