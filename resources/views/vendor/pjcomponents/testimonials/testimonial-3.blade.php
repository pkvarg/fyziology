<section {{ $attributes->merge(['class' => 'testimonial-3 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>
        @isset($text)
            <p class="md:text-md">{{ $text }}</p>
        @endisset
    </div>
    <div class="testimonials grid grid-cols-1 gap-y-12 md:grid-cols-3 md:gap-x-8 lg:gap-x-12 lg:gap-y-16">
        {{ $testimonials }}
    </div>
</section>
