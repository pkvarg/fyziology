<section {{ $attributes->merge(['class' => 'portfolio-header-1 px-[5%]']) }}>
    <div class="mx-auto max-w-2xl py-12 text-center md:py-16 lg:py-20">
        <h1 class="mb-5 text-center text-6xl font-bold md:mb-6 lg:text-7xl">{{ $heading }}</h1>
        <p class="md:text-md">{{ $text }}</p>
        <div class="tags">
            @isset($tags)
                <ul class="mt-5 flex flex-wrap justify-center gap-2 md:mt-6">
                    {{ $tags }}
                </ul>
            @endisset
        </div>
    </div>
</section>

