@props(['label', 'name', 'id' => null])

<div class="input-wrapper checkbox-wrapper">
    <div class="group">
        <input type="checkbox" {{ $attributes->merge(['id' => $id ?? $name ?? '']) }} name="{{ $name }}">

        <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    </div>
</div>