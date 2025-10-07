@php
    $isActive = request()->url() === $link;
@endphp
<a href="{{ $link }}" class="{{ $isActive ? 'active' : '' }}">{{ $text }}</a>