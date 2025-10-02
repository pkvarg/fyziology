<div class="author flex flex-col items-center gap-4 text-center">
    @isset($avatar)
        <div class="avatar">
            {{ $avatar }}
        </div>
    @endisset

    <div class="grow">
        <p class="font-semibold md:text-md">{{ $name }}</p>
        @isset($position)
            <p>{{ $position }}</p>
        @endisset
    </div>
</div>