<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Faq;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Faq7Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::faq.faq-7
    heading="FAQ"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
    secondaryHeading="Still have questions?"
    secondaryText="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
>
    <x-slot:qa>
        <x-pjcomponents::faq.qa-7
            question="Question goes here"
            answer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
        />

        <x-pjcomponents::faq.qa-7
            question="Question goes here"
            answer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
        />

        <x-pjcomponents::faq.qa-7
            question="Question goes here"
            answer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
        />

        <x-pjcomponents::faq.qa-7
            question="Question goes here"
            answer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
        />

        <x-pjcomponents::faq.qa-7
            question="Question goes here"
            answer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere."
        />
    </x-slot:qa>

    <x-slot:actions>
        <x-pjcomponents::button label="Button" link="https://google.com" />
    </x-slot:actions>
</x-pjcomponents::faq.faq-7>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}