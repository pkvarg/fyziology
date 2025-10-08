<div {{ $attributes->merge(['class' => 'feature-231 flex w-full flex-col']) }}>
    @isset($tagline)
        <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
    @endisset
    <h3 class="mb-5 text-2xl font-bold md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">{{ $heading }}</h3>
    @isset($text)
        <p class="mt-5 md:mt-6">{{ $text }}</p>
    @endisset
    @isset($actions)
        <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
            {{ $actions }}
        </div>
    @endisset
</div>