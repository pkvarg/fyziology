@props(['label', 'link' => null, 'border' => true, 'arrow' => false, 'type' => 'primary'])

@php
    $classes = 'pjcomponents-button focus-visible:ring-border-primary inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';

    $classes .= sprintf(' pjcomponents-button-%s', $type);
    $classes .= sprintf(' text-text-%s', $type);
    $classes .= sprintf(' bg-background-%s', $type);
    $classes .= $border ? sprintf(' border border-border-%s px-6 py-3', $type) : ' border-0 p-0';

    if ($arrow) {
        $classes .= ' gap-2';
    }
@endphp

@isset($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge([
            'class' => $classes,
        ]) }}
    >
        {{ $label }}

        @if($arrow)
            <x-pjcomponents::arrow-right />
        @endif
    </a>
@else
    <button
        {{ $attributes->merge([
            'class' => $classes,
        ]) }}
    >
        {{ $label }}

        @if($arrow)
            <x-pjcomponents::arrow-right />
        @endif
    </button>
@endif