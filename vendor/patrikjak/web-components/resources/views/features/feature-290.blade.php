<div {{ $attributes->merge(['class' => 'feature-290 w-full text-center']) }}>
    <div class="mb-5 md:mb-6">
        {{ $image }}
    </div>
    @isset($tagline)
        <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
    @endisset
    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">{{ $heading }}</h3>
    @isset($text)
        <p>{{ $text }}</p>
    @endisset

    @isset($actions)
        <div class="mt-6 flex flex-wrap items-center justify-center gap-4 md:mt-8">
            {{ $actions }}
        </div>
    @endisset
</div>