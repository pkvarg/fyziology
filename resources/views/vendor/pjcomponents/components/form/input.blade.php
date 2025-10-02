@props(['label', 'name', 'type' => 'text', 'value' => null])

<div class="input-wrapper grid w-full items-center">
    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2" for="{{ $name }}">{{ $label }}</label>
    <div class="relative flex size-full items-center">
        <input
            {{ $attributes->merge(['class' => 'flex size-full min-h-11 border border-border-primary bg-background-primary py-2 align-middle file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 px-3']) }}
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            @isset($value) value="{{ $value }}" @endisset
        />
    </div>
</div>