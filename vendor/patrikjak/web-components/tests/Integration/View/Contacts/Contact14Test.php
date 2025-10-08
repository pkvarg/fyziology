<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Contacts;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Contact14Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::contacts.contact-14
    heading="Contact us"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
>
    <x-slot:map>
        <img src="https://relume-assets.s3.us-east-1.amazonaws.com/placeholder-map-image.svg" alt="placeholder map image">
    </x-slot:map>

    {{--<x-slot:map>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.9547355262703!2d17.123215276987604!3d48.14967787124479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8bed12552451%3A0xa9a958598f00ea68!2sWebsupport%2C%20s.r.o.!5e0!3m2!1ssk!2ssk!4v1735574412099!5m2!1ssk!2ssk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </x-slot:map>--}}

    <x-slot:contact-items>
        <x-pjcomponents::contacts.contact-14-item heading="Email" text="Lorem ipsum dolor sit amet.">
            <x-slot:icon>
                <x-pjcomponents::icons.email />
            </x-slot:icon>

            <x-slot:link>
                <a href="#">hello@relume.io</a>
            </x-slot:link>
        </x-pjcomponents::contacts.contact-14-item>

        <x-pjcomponents::contacts.contact-14-item heading="Phone" text="Lorem ipsum dolor sit amet.">
            <x-slot:icon>
                <x-pjcomponents::icons.phone />
            </x-slot:icon>

            <x-slot:link>
                <a href="#">+1 (555) 000-0000</a>
            </x-slot:link>
        </x-pjcomponents::contacts.contact-14-item>

        <x-pjcomponents::contacts.contact-14-item heading="Office" text="Lorem ipsum dolor sit amet.">
            <x-slot:icon>
                <x-pjcomponents::icons.map-pin />
            </x-slot:icon>

            <x-slot:link>
                <a href="#">Get directions</a>
            </x-slot:link>
        </x-pjcomponents::contacts.contact-14-item>
    </x-slot:contact-items>
</x-pjcomponents::contacts.contact-14>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}