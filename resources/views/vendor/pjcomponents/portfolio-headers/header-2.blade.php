<section {{ $attributes->merge(['class' => 'portfolio-header-2']) }}>
    <div class="flex flex-col ">
        <div class="relative flex-1">
            <div class="image-container">
                {{ $image }}
            </div>
        </div>
        <div class="px-[5%]">
            <div class="mx-auto max-w-5xl py-12 text-center md:py-16 lg:py-20">
                <h1 class="mb-5 text-center text-6xl font-bold md:mb-6 md:text-7xl">{{ $heading }}</h1>
                <p class="max-w-2xl mx-auto md:text-md">{{ $text }}</p>
                @isset($tags)
                    <ul class="mt-5 flex flex-wrap justify-center gap-2 md:mt-6">
                        {{ $tags }}
                    </ul>
                @endisset
            </div>
        </div>
    </div>
</section>
