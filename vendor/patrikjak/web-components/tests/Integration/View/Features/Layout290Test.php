<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Features;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Layout290Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::features.layout-290>
    <x-slot:features>
        <x-pjcomponents::features.feature-290
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="placeholder image">
            </x-slot:image>

            <x-slot:actions>
                <x-pjcomponents::button label="Button" type="primary" href="#" />
                <x-pjcomponents::button label="Button" type="secondary" href="#" :border="false" :arrow="true" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-290>

        <x-pjcomponents::features.feature-290
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="placeholder image">
            </x-slot:image>

            <x-slot:actions>
                <x-pjcomponents::button label="Button" type="primary" href="#" />
                <x-pjcomponents::button label="Button" type="secondary" href="#" :border="false" :arrow="true" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-290>

        <x-pjcomponents::features.feature-290
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="placeholder image">
            </x-slot:image>

            <x-slot:actions>
                <x-pjcomponents::button label="Button" type="primary" href="#" />
                <x-pjcomponents::button label="Button" type="secondary" href="#" :border="false" :arrow="true" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-290>

        <x-pjcomponents::features.feature-290
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="placeholder image">
            </x-slot:image>

            <x-slot:actions>
                <x-pjcomponents::button label="Button" type="primary" href="#" />
                <x-pjcomponents::button label="Button" type="secondary" href="#" :border="false" :arrow="true" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-290>
    </x-slot:features>
</x-pjcomponents::features.layout-290>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}