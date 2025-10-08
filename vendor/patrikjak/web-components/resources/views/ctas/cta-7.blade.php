<section {{ $attributes->merge(['class' => 'cta-7 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container grid w-full grid-cols-1 items-start justify-between gap-6 md:grid-cols-[1fr_max-content] md:gap-x-12 md:gap-y-8 lg:gap-x-20">
        <div class="md:mr-12 lg:mr-0">
            <div class="w-full max-w-2xl">
                <h2 class="mb-3 text-4xl font-bold leading-[1.2] md:mb-4 md:text-6xl lg:text-7xl">{{ $heading }}</h2>
                @isset($text)
                    <p class="md:text-md">{{ $text }}</p>
                @endisset
            </div>
        </div>
        <div class="actions flex items-start justify-start gap-4">
            {{ $actions }}
        </div>
    </div>
</section>
