<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Teams;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Team17Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::teams.team-17
    heading="Heading"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Sed nec nunc nec libero ultricies ultricies. Nullam nec purus ut felis fermentum aliquam. Sed nec nunc nec libero ultricies ultricies."
>
    <x-slot:actions>
        <x-pjcomponents::button label="Open positions" link="https://google.com" />
    </x-slot:actions>

    <x-slot:team-members>
        <x-pjcomponents::teams.member-17
            name="John Doe"
            role="CEO"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Sed nec nunc nec libero ultricies ultricies."
        >
            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>

            <x-slot:socials>
                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.facebook />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.instagram />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.linkedin />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.x />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.dribbble />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>
            </x-slot:socials>
        </x-pjcomponents::teams.member-17>

        <x-pjcomponents::teams.member-17
            name="John Doe"
            role="CEO"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Sed nec nunc nec libero ultricies ultricies."
        >
            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>
        </x-pjcomponents::teams.member-17>

        <x-pjcomponents::teams.member-17
            name="John Doe"
            role="CEO"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Sed nec nunc nec libero ultricies ultricies."
        >
            <x-slot:avatar>
                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" alt="avatar">
            </x-slot:avatar>

            <x-slot:socials>
                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.facebook />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.instagram />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.linkedin />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.x />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>

                <x-pjcomponents::teams.social-17 link="https://google.com" target="_blank">
                    <x-slot:icon>
                        <x-pjcomponents::icons.dribbble />
                    </x-slot:icon>
                </x-pjcomponents::teams.social-17>
            </x-slot:socials>
        </x-pjcomponents::teams.member-17>
    </x-slot:team-members>
</x-pjcomponents::teams.team-17>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}