<section {{ $attributes->merge(['class' => 'faq-7 px-[5%] pt-8 pb-4 lg:pt-0 lg:pb-16 relative overflow-hidden']) }}>
    <!-- Gradient Circle - bottom right near FAQ -->
    
  <div class="absolute md:hidden lg:inline 2xl:hidden top-[16rem] lg:top-[5rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>
    
  

    <div class="container mx-auto w-full max-w-lg lg:max-w-3xl relative z-10">
       

        <div class="mb-12 text-left md:mb-18 lg:mb-20">
             <!-- Gradient Half Circle - bottom right -->
        <div class="lg:flex absolute top-[0rem] -left-[2rem] lg:top-[0.5rem] lg:-left-[4rem] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
            <h2 class="mb-5 text-2xl font-black md:mb-6 md:text-4xl ml-8 lg:ml-0">{{ $heading }}</h2>
            @isset($text)
                <p class="md:text-md ml-8 lg:ml-0">{{ $text }}</p>
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
