@props(['label', 'link' => null])

<li class="flex">
    <a @isset($link) href="{{ $link }}" @endisset {{ $attributes->merge(['class' => 'tag bg-background-primary px-2 py-1 text-sm font-semibold']) }}>{{ $label }}</a>
</li>