<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Features;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Layout231Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::features.layout-231>
    <x-slot:features>
        <x-pjcomponents::features.feature-231
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Primary button" link="#" />
                <x-pjcomponents::button type="secondary" label="Secondary button" link="#" :arrow="true" :border="false" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-231>

        <x-pjcomponents::features.feature-231
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Primary button" link="#" />
                <x-pjcomponents::button type="secondary" label="Secondary button" link="#" :arrow="true" :border="false" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-231>

        <x-pjcomponents::features.feature-231
            heading="Heading"
            tagline="Tagline"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Primary button" link="#" />
                <x-pjcomponents::button type="secondary" label="Secondary button" link="#" :arrow="true" :border="false" />
            </x-slot:actions>
        </x-pjcomponents::features.feature-231>
    </x-slot:features>
</x-pjcomponents::features.layout-231>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}