<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Galleries;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Gallery3Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::galleries.gallery-3
    heading="Heading"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra orn"
>
    <x-slot:images>
        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="Image 1">
        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="Image 2">
        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="Image 3">
    </x-slot:images>
</x-pjcomponents::galleries.gallery-3>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}