<div {{ $attributes->merge(['class' => 'feature-306']) }}>
    <div class="mb-5 flex justify-center md:mb-6">
        {{ $image }}
    </div>
    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">{{ $heading }}</h3>
    @isset($text)
        <p>{{ $text }}</p>
    @endisset
</div>