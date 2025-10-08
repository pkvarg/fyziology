<section {{ $attributes->merge(['class' => 'contact-1 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container max-w-3xl mx-auto">
        <div class="mx-auto mb-8 w-full text-center md:mb-10 lg:mb-12">
            @isset($tagline)
                <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
            @endisset
            <h2 class="rb-5 mb-5 text-5xl font-bold md:mb-6 md:text-7xl lg:text-8xl">{{ $heading }}</h2>
            @isset($text)
                <p class="md:text-md">{{ $text }}</p>
            @endisset
        </div>
        <div class="form">
            {{ $form }}
        </div>
    </div>
</section>
