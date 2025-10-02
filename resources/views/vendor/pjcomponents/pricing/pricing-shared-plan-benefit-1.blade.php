<div {{ $attributes->merge(['class' => 'plan-benefit flex self-start']) }}>
    @isset($icon)
        <div class="mr-4 flex-none self-start">
            {{ $icon }}
        </div>
    @endisset
    <p>{{ $text }}</p>
</div>