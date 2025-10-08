<section {{ $attributes->merge(['class' => 'content-30 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mx-auto max-w-6xl">
        @if(isset($breadcrumbs) || isset($socials))
            <div class="mb-14 flex flex-col gap-y-8 sm:flex-row sm:items-center sm:justify-between md:mb-16 md:gap-y-0">
                @isset($breadcrumbs)
                    {{ $breadcrumbs }}
                @endisset

                @isset($socials)
                    <div class="socials flex items-start gap-2">
                        {{ $socials }}
                    </div>
                @endisset
            </div>
        @endif

        <div class="prose mb-12 md:prose-md lg:prose-lg md:mb-16 lg:mb-20">
            {{ $content }}
        </div>

        @isset($footer)
            <div class="mb-8 text-center md:mb-10 lg:mb-12">
                {{ $footer }}
            </div>
        @endisset

        @isset($tags)
            <ul class="flex flex-wrap justify-center gap-2">
                {{ $tags }}
            </ul>
        @endisset

        @isset($author)
            <div class="my-8 h-px bg-black md:my-10 lg:my-12"></div>
            {{ $author }}
        @endisset
    </div>
</section>
