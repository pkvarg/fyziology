<div {{ $attributes->merge(['class' => 'member-17 grid auto-cols-fr grid-cols-1 items-start gap-5 sm:grid-cols-[max-content_1fr] sm:gap-x-8 sm:gap-y-4']) }}>
    <div class="avatar">
        {{ $avatar }}
    </div>
    <div class="flex flex-col justify-center">
        <div class="mb-3 md:mb-4">
            <h5 class="name text-md font-semibold md:text-lg">{{ $name }}</h5>
            @isset($role)
                <h6 class="role md:text-md">{{ $role }}</h6>
            @endisset
        </div>
        @isset($text)
            <p>{{ $text }}</p>
        @endisset
        @isset($socials)
            <div class="socials mt-6 grid grid-flow-col grid-cols-[max-content] gap-[0.875rem] self-start">
                {{ $socials }}
            </div>
        @endisset
    </div>
</div>