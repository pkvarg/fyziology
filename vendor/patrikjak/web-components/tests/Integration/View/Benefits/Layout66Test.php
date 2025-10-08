<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\Benefits;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

class Layout66Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::benefits.layout-66
    heading="Heading"
    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
     Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat."
    :benefits="[\'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\', \'Lorem ipsum dolor sit amet, consectetur
     adipiscing elit.\', \'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\']"
>
    <x-slot:benefit-icon>
        <img src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg" alt="icon">
    </x-slot:benefit-icon>
</x-pjcomponents::benefits.layout-66>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}