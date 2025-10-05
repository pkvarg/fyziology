<div {{ $attributes->merge(['class' => 'plan-benefit flex self-start items-center']) }}>
    @isset($icon)
        <div class="mr-3 flex-none self-start mt-1">
            {{ $icon }}
        </div>
    @endisset
    <p class="text-gray-700 text-base">{{ $text }}</p>
</div>