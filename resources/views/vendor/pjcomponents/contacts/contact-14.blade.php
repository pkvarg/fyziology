<section {{ $attributes->merge(['class' => 'contact-14 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container">
        <div class="rb-12 mb-12 max-w-4xl md:mb-18 lg:mb-20">
            @isset($tagline)
                <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
            @endisset
            <h2 class="rb-5 mb-5 text-4xl font-black md:mb-6 md:text-6xl">{{ $heading }}</h2>
            @isset($text)
                <p class="md:text-md">{{ $text }}</p>
            @endisset
        </div>
        <div class="grid auto-cols-fr grid-cols-1 gap-x-12 gap-y-12 md:grid-cols-2 md:gap-x-20 md:gap-y-16">
            <div class="contact-items grid auto-cols-fr grid-cols-1 gap-x-4 gap-y-10">
                {{ $contactItems }}
            </div>
            <div class="contact-map lg:w-auto">
                {{ $map }}
            </div>
        </div>
    </div>
</section>
