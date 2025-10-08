<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Pricing;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Pricing18Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::pricing.pricing-18
    heading="Pricing plan"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
>
    <x-slot:prices>
        <x-pjcomponents::pricing.pricing-shared-item-1
            heading="18€"
            tagline="Basic plan"
            subheading="or $199 yearly"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Get started" link="https://google.com" target="_blank" />
            </x-slot:actions>

            <x-slot:benefits>
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good" />
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good" />
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good" />
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good">
                    <x-slot:icon>
                        <x-pjcomponents::icons.tick />
                    </x-slot:icon>
                </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
            </x-slot:benefits>
        </x-pjcomponents::pricing.pricing-shared-item-1>

        <x-pjcomponents::pricing.pricing-shared-item-1
            tagline="Medium plan"
            subheading="or $299 yearly"
        >
            <x-slot:heading>
                $34
                <span class="subtitle">mesačne</span>
            </x-slot:heading>

            <x-slot:actions>
                <x-pjcomponents::button label="Get started" link="https://google.com" target="_blank" />
            </x-slot:actions>

            <x-slot:benefits>
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good" />
                <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="Very good">
                    <x-slot:icon>
                        <x-pjcomponents::icons.tick />
                    </x-slot:icon>
                </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
            </x-slot:benefits>
        </x-pjcomponents::pricing.pricing-shared-item-1>

        <x-pjcomponents::pricing.pricing-shared-item-1
            heading="$54"
            tagline="Business plan"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Get started" link="https://google.com" target="_blank" />
            </x-slot:actions>
        </x-pjcomponents::pricing.pricing-shared-item-1>
    </x-slot:prices>
</x-pjcomponents::pricing.pricing-18>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}