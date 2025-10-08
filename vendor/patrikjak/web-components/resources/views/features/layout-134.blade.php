<section {{ $attributes->merge(['class' => 'layout-134 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mx-auto max-w-screen-xl md:max-w-screen-md text-center">
        @isset($tagline)
            <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
        @endisset
        <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-7xl lg:text-8xl">{{ $heading }}</h2>
        @isset($text)
            <p class="md:text-md">{{ $text }}</p>
        @endisset
        @isset($actions)
            <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                {{ $actions }}
            </div>
        @endisset
    </div>
</section>
