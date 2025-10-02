<footer {{ $attributes->merge(['class' => 'footer-7 px-[5%] py-12 md:py-18 lg:py-20']) }}>
    <div class="flex flex-col items-center pb-12 md:pb-18 lg:pb-20">
        @isset($logo)
            <div class="logo-link">
                {{ $logo }}
            </div>
        @endisset
        <div class="links mb-8">
            <ul class="grid grid-flow-row grid-cols-1 items-start justify-center justify-items-center gap-6 md:grid-flow-col md:grid-cols-[max-content] md:justify-center md:justify-items-start">
                {{ $primaryLinks }}
            </ul>
        </div>
        @isset($text)
            <div class="custom-text text-center">
                {{ $text }}
            </div>
        @endisset
    </div>
    @if(isset($copyright) || isset($secondaryLinks))
        <div class="h-px w-full bg-black"></div>

        <div class="flex flex-col-reverse items-center justify-between pb-4 pt-6 text-center text-sm md:flex-row md:pb-0 md:pt-8">
            @isset($copyright)
                <p class="mt-8 md:mt-0">{{ $copyright }}</p>
            @endisset
            @isset($secondaryLinks)
                <ul class="secondary-links grid grid-flow-row grid-cols-[max-content] justify-center gap-y-4 text-sm md:grid-flow-col md:gap-x-6 md:gap-y-0">
                    {{ $secondaryLinks }}
                </ul>
            @endisset
        </div>
    @endif
</footer>
