<section {{ $attributes->merge(['class' => 'faq-7 px-[5%] py-16 md:py-24 lg:py-28 relative overflow-hidden']) }}>
    <!-- Gradient Circle - bottom left near FAQ -->
    <div class="absolute top-[30rem] lg:top-64 -right-56 lg:-right-96 w-[100%] lg:w-[52.5%] h-auto pointer-events-none">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>

    <div class="container mx-auto w-full max-w-lg lg:max-w-6xl relative z-10">
        <!-- Gradient Half Circle - bottom right -->
        <div class="hidden lg:flex absolute top-[155px] -left-[12%] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
        </div>

        <div class="rb-12 mb-12 text-left md:mb-18 lg:mb-20">
            <h2 class="rb-5 mb-5 text-4xl font-black md:mb-6 md:text-6xl">{{ $heading }}</h2>
            @isset($text)
                <p class="md:text-md">{{ $text }}</p>
            @endisset
        </div>
        <div class="grid grid-cols-1 gap-x-12 gap-y-10 md:gap-y-12">
            {{ $qa }}
        </div>
        @if(isset($secondaryHeading) || isset($secondaryText) || isset($actions))
            <div class="mx-auto mt-12 max-w-md text-center md:mt-18 lg:mt-20">
                @isset($secondaryHeading)
                    <h4 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">{{ $secondaryHeading }}</h4>
                @endisset

                @isset($secondaryText)
                    <p class="md:text-md">{{ $secondaryText }}</p>
                @endisset

                @isset($actions)
                    <div class="mt-6 md:mt-8">
                        {{ $actions }}
                    </div>
                @endisset
            </div>
        @endif
    </div>
</section>
