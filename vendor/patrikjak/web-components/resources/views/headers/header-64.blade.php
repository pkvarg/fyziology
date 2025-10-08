<section {{ $attributes->merge(['class' => 'header-64 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="text-center">
        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-8xl">{{ $heading }}</h1>
        @isset($text)
            <p class="md:text-md">{{ $text }}</p>
        @endisset
    </div>
</section>
