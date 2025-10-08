<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Contacts;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

class Contact1Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::contacts.contact-1
    heading="Contact us"
    tagline="Tagline"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam."
>
    <x-slot:form>
        <form method="GET" action="#">
            <x-pjcomponents::form.input label="Name" name="name" />
            <x-pjcomponents::form.input type="email" label="Email" name="email" />
            <x-pjcomponents::form.textarea
                label="Message"
                name="message"
                placeholder="Type your message..."
            />

            <x-pjcomponents::form.checkbox name="terms">
                <x-slot:label>
                    I accept the <a class="text-link-primary underline" href="#">Terms</a>
                </x-slot:label>
            </x-pjcomponents::form.checkbox>

            <x-pjcomponents::form.submit label="Submit" />
        </form>
    </x-slot:form>
</x-pjcomponents::contacts.contact-1>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}