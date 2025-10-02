<section {{ $attributes->merge(['class' => 'gallery-3 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mb-12 text-center md:mb-18 lg:mb-20">
        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>
        @isset($text)
            <p class="md:text-md">{{ $text }}</p>
        @endisset
    </div>
    <div class="grid grid-cols-1 items-start justify-center gap-6 md:grid-cols-3 md:gap-8">
        {{ $images }}
    </div>
</section>
