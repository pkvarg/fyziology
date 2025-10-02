<div {{ $attributes->merge(['class' => 'testimonial-3-item flex flex-col items-center justify-center text-center']) }}>
    @isset($logo)
        <div class="logo mb-6 md:mb-8">
            {{ $logo }}
        </div>
    @endisset
    <blockquote class="text-md font-bold leading-[1.4] md:text-xl">
        &quot;{{ $text }}&quot;
    </blockquote>
    @if(isset($avatar) || isset($author) || $company)
        <div class="mt-6 flex flex-col items-center justify-center md:mt-8">
            @isset($avatar)
                <div class="avatar mb-3 md:mb-4">
                    {{ $avatar }}
                </div>
            @endisset

            @isset($author)
                <p class="font-semibold">{{ $author }}</p>
            @endisset

            @isset($company)
                <p>{{ $company }}</p>
            @endisset
        </div>
    @endif
</div>