<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests\Integration\View\LongFormContents;

use Illuminate\Support\Facades\Blade;
use Patrikjak\WebComponents\Tests\TestCase;

/**
 * @phpcs:disable SlevomatCodingStandard.Files.LineLength.LineTooLong
 */
class Content30Test extends TestCase
{
    public function testComponentCanBeRendered(): void
    {
        $view = Blade::render('<<<blade
<x-pjcomponents::long-form-contents.content-30>
    <x-slot:breadcrumbs>
        <x-pjcomponents::long-form-contents.content-30-breadcrumbs
            :breadcrumbs="[[\'url\' => \'https://google.com\', \'label\' => \'Blog\'], [\'url\' => \'https://google.com\', \'label\' => \'Category\']]"
        />
    </x-slot:breadcrumbs>

    <x-slot:socials>
        <a id="link"><x-pjcomponents::icons.link /></a>
        <a href="https://x.com"><x-pjcomponents::icons.x /></a>
        <a href="https://linkedin.com"><x-pjcomponents::icons.linkedin /></a>
        <a href="https://facebook.com"><x-pjcomponents::icons.facebook /></a>
    </x-slot:socials>

    <x-slot:content>
        <h3>Introduction</h3>
        <br>
        <p>
    Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend
            faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna,
            etiam. Mauris posuere vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien
            varius id.
        </p>
        <p>
    Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat
            lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant
            diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum
            molestie aliquet sodales id est ac volutpat.
        </p>
        <br>
        <figure>
            <img
                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                alt="Relume placeholder image"
                    />
            <figcaption>Image caption goes here</figcaption>
        </figure>
        <br>
        <h6>
    Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In
            aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam
            in vitae malesuada fringilla.
        </h6>
        <br>
        <p>
    Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur
            convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna.
    Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue
            convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies
            eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra,
            porttitor.
        </p>
        <blockquote>
            &quot;Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non
            pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam
            elit, orci, tincidunt aenean tempus.&quot;
        </blockquote>
        <p>
    Tristique odio senectus nam posuere ornare leo metus, ultricies. Blandit duis ultricies
            vulputate morbi feugiat cras placerat elit. Aliquam tellus lorem sed ac. Montes, sed
            mattis pellentesque suscipit accumsan. Cursus viverra aenean magna risus elementum
            faucibus molestie pellentesque. Arcu ultricies sed mauris vestibulum.
        </p>
        <br>
        <h4>Conclusion</h4>
        <br>
        <p>
    Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est
            ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique
            consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.
        </p>
        <br>
        <p>
    Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In
            tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis
            lobortis at sit dictum eget nibh tortor commodo cursus.
        </p>
        <p>
    Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna
            nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id
            eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc
            tortor.Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus
            diam.
        </p>
    </x-slot:content>

    <x-slot:footer>
        <p class="font-semibold md:text-md">Share this post</p>

        <div class="socials mb-8 mt-3 flex items-start justify-center gap-2 sm:mb-0 md:mt-4">
            <a id="link"><x-pjcomponents::icons.link /></a>
            <a href="https://x.com"><x-pjcomponents::icons.x /></a>
            <a href="https://linkedin.com"><x-pjcomponents::icons.linkedin /></a>
            <a href="https://facebook.com"><x-pjcomponents::icons.facebook /></a>
        </div>
    </x-slot:footer>

    <x-slot:tags>
        <x-pjcomponents::tag label="Tag one" />
        <x-pjcomponents::tag label="Tag two" />
        <x-pjcomponents::tag label="Tag three" />
        <x-pjcomponents::tag label="Tag four" />
    </x-slot:tags>

    <x-slot:author>
        <x-pjcomponents::long-form-contents.content-30-author
            name="Full Name"
            position="Job title, Company name"
                >
            <x-slot:avatar>
                <img
                    src="https://cdn.prod.website-files.com/624380709031623bfe4aee60/6243807090316203124aee66_placeholder-image.svg"
                    alt="Logo"
                        />
            </x-slot:avatar>
        </x-pjcomponents::long-form-contents.content-30-author>
    </x-slot:author>
</x-pjcomponents::long-form-contents.content-30>');

        $this->assertMatchesHtmlSnapshot($view);
    }
}