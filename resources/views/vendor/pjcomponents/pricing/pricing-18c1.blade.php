<section {{ $attributes->merge(['class' => 'pricing-18c1 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mx-auto mb-12 max-w-4xl text-center md:mb-14 lg:mb-16">
        @isset($tagline)
            <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
        @endisset
        <h2 class="mb-8 text-5xl font-black md:mb-10 md:text-6xl lg:text-7xl">{{ $heading }}</h2>
        @isset($text)
            <div class="text-base md:text-base text-gray-600 leading-relaxed max-w-3xl mx-auto space-y-4">{{ $text }}</div>
        @endisset
    </div>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 max-w-5xl mx-auto">
        {{ $prices }}
    </div>
</section>
