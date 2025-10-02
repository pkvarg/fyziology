<div {{ $attributes->merge(['class' => 'item']) }}>
    <div class="mb-3 md:mb-4">
        {{ $icon }}
    </div>

    <h3 class="mb-2 text-md font-bold leading-[1.4] md:text-xl">{{ $heading }}</h3>

    @isset($text)
        <p class="mb-2">{{ $text }}</p>
    @endisset

    @isset($link)
        {{ $link }}
    @endisset
</div>