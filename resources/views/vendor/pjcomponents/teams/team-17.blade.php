<section {{ $attributes->merge(['class' => 'team-17 px-[5%] py-16 md:py-24 lg:py-28']) }}>
    <div class="container grid grid-cols-1 items-start md:grid-flow-row md:grid-cols-2 md:gap-x-12 lg:gap-x-20">
        <div class="rb-12 mb-12 max-w-lg md:mb-18 lg:mb-20">
            @isset($tagline)
                <p class="mb-3 font-semibold md:mb-4">{{ $tagline }}</p>
            @endisset

            <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-6xl">{{ $heading }}</h2>

            @isset($text)
                <p class="md:text-md">{{ $text }}</p>
            @endisset

            @isset($actions)
                <div class="actions mt-6 flex flex-wrap gap-4 md:mt-8">
                    {{ $actions }}
                </div>
            @endisset
        </div>
        <div class="team-members grid grid-cols-1 gap-y-12 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
            {{ $teamMembers }}
        </div>
    </div>
</section>
