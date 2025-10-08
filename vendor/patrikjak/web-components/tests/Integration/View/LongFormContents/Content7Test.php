<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\LongFormContents;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Content7Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::long-form-contents.content-7 heading="Heading">
    <x-slot:text>
        <p>
            Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est
            ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique
            consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.
        </p>
        <p>
            Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In
            tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et.
            Quis lobortis at sit dictum eget nibh tortor commodo cursus.
        </p>
        <p>
            Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum
            urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut
            id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc
            tortor. Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere
            cursus diam.
        </p>
    </x-slot:text>
</x-pjcomponents::long-form-contents.content-7>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}