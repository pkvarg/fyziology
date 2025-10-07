<section {{ $attributes->merge(['class' => 'contact-1 px-[5%] py-16 md:py-24 lg:pt-16 pb-8 relative overflow-hidden']) }}>
    <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>  
  

   

    <div class="container max-w-3xl mx-auto relative z-10">
        <div class="mx-auto mb-8 w-full text-center md:mb-10 lg:mb-12">
            @isset($tagline)
                <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
            @endisset
            <h1 class="rb-5 mb-5 text-5xl font-[800] md:mb-6 md:text-6xl lg:text-7xl">{{ $heading }}</h1>
            @isset($text)
                <p class="md:text-md mt-8">{{ $text }}</p>
            @endisset
        </div>
        <div class="form">
            {{ $form }}
        </div>
    </div>
</section>
