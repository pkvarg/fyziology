<div {{ $attributes->merge(['class' => 'feature-122']) }}>
    @isset($tagline)
        <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
    @endisset
    <h3 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">{{ $heading }}</h3>
    @isset($text)
        <p class="mt-5 md:mt-6">{{ $text }}</p>
    @endisset
    @isset($actions)
        <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
            {{ $actions }}
        </div>
    @endisset
</div>