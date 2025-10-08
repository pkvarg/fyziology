<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Footers;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Footer7Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::footers.footer-7
    copyright="© 2024 Relume. All rights reserved."
    text="Custom text here"
>
    <x-slot:logo>
        <a href="#">
            <img src="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg" alt="Logo">
        </a>
    </x-slot:logo>

    <x-slot:primary-links>
        <li><a href="#">Link One</a></li>
        <li><a href="#">Link Two</a></li>
        <li><a href="#">Link Three</a></li>
        <li><a href="#">Link Four</a></li>
        <li><a href="#">Link Five</a></li>
    </x-slot:primary-links>

    <x-slot:secondary-links>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Cookies Settings</a></li>
    </x-slot:secondary-links>
</x-pjcomponents::footers.footer-7>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}