<div {{ $attributes->merge(['class' => 'pricing-18-item flex h-full flex-col justify-between border border-border-primary px-6 py-8 md:p-8']) }}>
    <div>
        <div class="rb-6 mb-6 text-center md:mb-8">
            @isset($tagline)
                <h6 class="text-md font-bold md:text-xl">{{ $tagline }}</h6>
            @endisset

            @isset($heading)
                <h1 class="heading my-2 text-6xl font-bold md:text-7xl">{{ $heading }}</h1>
            @endisset

            @isset($subheading)
                <p>{{ $subheading }}</p>
            @endisset
        </div>
        @isset($benefits)
            <div class="mb-8 grid grid-cols-1 gap-4 py-2">
                {{ $benefits }}
            </div>
        @endisset
    </div>
    @isset($actions)
        <div class="actions">
            {{ $actions }}
        </div>
    @endisset
</div>