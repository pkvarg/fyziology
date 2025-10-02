<section {{ $attributes->merge(['class' => 'content-7 px-[5%] py-16 md:py-24 lg:py-28']) }}>
        <div class="mx-auto w-full max-w-lg lg:max-w-6xl">
            @isset($heading)
                <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>
            @endisset
            <div class="prose">
                {{ $text }}
            </div>
        </div>
</section>
