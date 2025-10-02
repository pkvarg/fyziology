<div {{ $attributes->merge(['class' => 'feature-292']) }}>
    @isset($tagline)
        <div class="mb-3 md:mb-4"><div class="font-semibold">{{ $tagline }}</div></div>
    @endisset
    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">{{ $heading }}</h3>
    @isset($text)
        <p>{{ $text }}</p>
    @endisset
    @isset($actions)
        <div class="actions mt-6 flex flex-wrap gap-4 md:mt-8">
            {{ $actions }}
        </div>
    @endisset
</div>