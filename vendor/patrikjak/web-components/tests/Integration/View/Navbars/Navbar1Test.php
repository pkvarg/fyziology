<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Navbars;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Navbar1Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::navbars.navbar-1>
    <x-slot:logo>
        <a href="/">
            <img src="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg" alt="Logo image" />
        </a>
    </x-slot:logo>

    <x-slot:items>
        <x-pjcomponents::navbars.simple-link text="Link One" link="#" />
        <x-pjcomponents::navbars.simple-link text="Link Two" link="#" />
        <x-pjcomponents::navbars.simple-link text="Link Three" link="#" />
        <x-pjcomponents::navbars.items-link text="Link Four">
            <x-pjcomponents::navbars.simple-link text="Sublink One" link="#" />
            <x-pjcomponents::navbars.simple-link text="Sublink Two" link="#" />
            <x-pjcomponents::navbars.simple-link text="Sublink Three" link="#" />
        </x-pjcomponents::navbars.items-link>

        <div class="actions">
            <x-pjcomponents::button type="secondary" label="Register" link="#" />
            <x-pjcomponents::button type="secondary" label="Log in" link="#" />
        </div>
    </x-slot:items>
</x-pjcomponents::navbars.navbar-1>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}