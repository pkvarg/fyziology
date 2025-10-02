<section {{ $attributes->merge(['class' => 'header-9 flex h-svh flex-col']) }}>
    <div class="relative flex-1">
        <div class="image-container absolute inset-0 -z-10">
            {{ $image }}
        </div>
    </div>
    <div class="px-[5%]">
        <div class="container">
            <div class="grid grid-rows-1 items-start gap-y-5 py-12 md:grid-cols-2 md:gap-x-12 md:gap-y-8 md:py-18 lg:gap-x-20 lg:gap-y-16 lg:py-20">
                <h1 class="text-6xl font-bold text-text-primary lg:text-7xl">{{ $heading }}</h1>
                @if(isset($text) || isset($actions))
                    <div>
                        @isset($text)
                            <p class="text-base text-text-primary md:text-md">{{ $text }}</p>
                        @endisset

                        @isset($actions)
                            <div class="actions mt-6 flex flex-wrap gap-4 md:mt-8">
                                {{ $actions }}
                            </div>
                        @endisset
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
