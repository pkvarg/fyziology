<section {{ $attributes->merge(['class' => 'layout-66 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container">
        <div class="grid grid-cols-1 items-start justify-between gap-5 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:gap-x-20 lg:gap-y-16">
            <h3 class="text-4xl font-bold leading-[1.2] md:text-5xl lg:text-6xl">{{ $heading }}</h3>
            <div>
                @isset($text)
                    <p class="mb-5 md:mb-6 md:text-md">{{ $text }}</p>
                @endisset

                @isset($benefits)
                    <div class="grid grid-cols-1 gap-4 py-2">
                        @foreach($benefits as $benefit)
                            <div class="flex self-start">
                                @isset($benefitIcon)
                                    <div class="mr-4 flex-none self-start">
                                        <div class="item-icon flex-none self-start">{{ $benefitIcon }}</div>
                                    </div>
                                @endisset
                                <p>{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>
                @endisset
            </div>
        </div>
    </div>
</section>
