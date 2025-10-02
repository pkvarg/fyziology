@props(['label', 'name', 'name'])

<div class="input-wrapper grid w-full items-center">
    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2" for="{{ $name }}">{{ $label }}</label>
    <textarea
        {{ $attributes->merge(['class' => 'flex w-full border border-border-primary bg-neutral-white p-3 placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 min-h-[11.25rem] overflow-auto']) }}
        id="{{ $name }}"
        name="{{ $name }}"
    >@isset($value){{ $value }}@endisset</textarea>
</div>