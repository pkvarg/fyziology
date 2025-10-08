<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Testimonials;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Testimonial3Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::testimonials.testimonial-3
    heading="Heading"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam."
>
    <x-slot:testimonials>
        <x-pjcomponents::testimonials.testimonial-3-item
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam."
            author="Name Surname"
            company="Position, Company name"
        >
            <x-slot:logo>
                <img src="https://d22po4pjz3o32e.cloudfront.net/webflow-logo.svg" alt="logo">
            </x-slot:logo>

            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>
        </x-pjcomponents::testimonials.testimonial-3-item>

        <x-pjcomponents::testimonials.testimonial-3-item
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam."
            author="Name Surname"
            company="Position, Company name"
        >
            <x-slot:logo>
                <img src="https://d22po4pjz3o32e.cloudfront.net/webflow-logo.svg" alt="logo">
            </x-slot:logo>

            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>
        </x-pjcomponents::testimonials.testimonial-3-item>

        <x-pjcomponents::testimonials.testimonial-3-item
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam."
            author="Name Surname"
            company="Position, Company name"
        >
            <x-slot:logo>
                <img src="https://d22po4pjz3o32e.cloudfront.net/webflow-logo.svg" alt="logo">
            </x-slot:logo>

            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>
        </x-pjcomponents::testimonials.testimonial-3-item>
    </x-slot:testimonials>
</x-pjcomponents::testimonials.testimonial-3>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}