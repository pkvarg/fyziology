<section {{ $attributes->merge(['class' => 'layout-306 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mb-12 md:mb-18 lg:mb-20">
        <div class="max-w-4xl">
            @isset($tagline)
                <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
            @endisset
            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>
            @isset($text)
                <p class="md:text-md">{{ $text }}</p>
            @endisset
        </div>
    </div>

    <div class="grid grid-cols-1 gap-y-12 justify-center md:grid-cols-2 md:gap-x-8 md:gap-y-16 lg:grid-cols-4">
        {{ $features }}
    </div>

    @isset($actions)
        <div class="mt-12 flex flex-wrap items-center gap-4 md:mt-18 lg:mt-20">
            {{ $actions }}
        </div>
    @endisset
</section>
