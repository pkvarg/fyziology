<div {{ $attributes->merge(['class' => 'pricing-18-item flex h-full flex-col justify-start bg-white rounded-3xl px-8 py-8 md:px-10 md:py-10 shadow-sm relative overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-2']) }}>
    <!-- Blue gradient corner decoration -->
    <div class="absolute -top-[25rem] -right-[25rem] w-[50rem] h-[50rem] pointer-events-none opacity-50">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain">
    </div>

    <div class="relative z-10">
        <div class="mb-6 md:mb-6">
            @isset($tagline)
                <h3 class="text-xl font-black md:text-2xl text-[#2563A7] mb-6 text-left">{{ $tagline }}</h3>
            @endisset

            @isset($heading)
                <h1 class="heading my-2 text-6xl font-bold md:text-7xl text-left">{{ $heading }}</h1>
            @endisset

            @isset($subheading)
                <p class="text-left">{{ $subheading }}</p>
            @endisset
        </div>
        @isset($benefits)
            <div class="grid grid-cols-1 gap-2.5 text-left">
                {{ $benefits }}
            </div>
        @endisset
    </div>
    @isset($actions)
        <div class="actions relative z-10">
            {{ $actions }}
        </div>
    @endisset
</div>