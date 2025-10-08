<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Features;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Layout306Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::features.layout-306
    heading="Heading"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
>
    <x-slot:features>
        <x-pjcomponents::features.feature-306
            heading="Medium length section heading goes here"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="Placeholder image">
            </x-slot:image>
        </x-pjcomponents::features.feature-306>

        <x-pjcomponents::features.feature-306
            heading="Medium length section heading goes here"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="Placeholder image">
            </x-slot:image>
        </x-pjcomponents::features.feature-306>

        <x-pjcomponents::features.feature-306
            heading="Medium length section heading goes here"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="Placeholder image">
            </x-slot:image>
        </x-pjcomponents::features.feature-306>

        <x-pjcomponents::features.feature-306
            heading="Medium length section heading goes here"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
        >
            <x-slot:image>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" alt="Placeholder image">
            </x-slot:image>
        </x-pjcomponents::features.feature-306>
    </x-slot:features>

    <x-slot:actions>
        <x-pjcomponents::button label="Button" />
        <x-pjcomponents::button label="Button" :arrow="true" :border="false" />
    </x-slot:actions>
</x-pjcomponents::features.layout-306>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}