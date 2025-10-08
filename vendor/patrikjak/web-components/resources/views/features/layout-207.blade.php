<section {{ $attributes->merge(['class' => 'layout-207 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container">
        <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
            <div class="order-2 md:order-1">
                <div class="image-container">
                    {{ $image }}
                </div>
            </div>
            <div class="order-1 md:order-2">
                @isset($tagline)
                    <p class="tagline mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
                @endisset
                <h2 class="container-heading mb-5 text-5xl font-bold md:mb-6 md:text-7xl">{{ $heading }}</h2>
                @isset($text)
                    <p class="container-text mb-5 md:mb-6 md:text-md">{{ $text }}</p>
                @endisset

                @isset($features)
                    <div class="grid grid-cols-1 gap-4 py-2">
                        @foreach($features as $feature)
                            <div class="flex self-start">
                                @isset($featureIcon)
                                    <div class="item-icon mr-4 flex-none self-start">{{ $featureIcon }}</div>
                                @endisset
                                <p class="feature">{{ $feature }}</p>
                            </div>
                        @endforeach
                    </div>
                @endisset

                @isset($actions)
                    <div class="actions mt-6 flex flex-wrap gap-4 md:mt-8">
                        {{ $actions }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
</section>
