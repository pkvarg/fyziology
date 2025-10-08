<nav {{ $attributes->merge(['class' => 'navbar-1']) }}>
    <div class="logo">
        {{ $logo }}
    </div>

    <div class="items">
        {{ $items }}
    </div>

    <div class="burger-menu size-6 grid flex-col cursor-pointer">
        <div class="my-[3px] h-0.5 w-6 bg-black"></div>
        <div class="my-[3px] h-0.5 w-6 bg-black"></div>
        <div class="my-[3px] h-0.5 w-6 bg-black"></div>
    </div>
</nav>
