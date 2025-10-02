<section {{ $attributes->merge(['class' => 'pricing-18 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mx-auto mb-12 max-w-lg text-center md:mb-18 lg:mb-20">
        @isset($tagline)
            <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
        @endisset
        <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>
        @isset($text)
            <p class="md:text-md">{{ $text }}</p>
        @endisset
    </div>
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        {{ $prices }}
    </div>
</section>
