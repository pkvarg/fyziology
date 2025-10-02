<div {{ $attributes->merge(['class' => 'qa-7']) }} onclick="this.classList.toggle('active')">
    <h2 class="question mb-3 text-base font-black md:mb-4 md:text-md">{{ $question }}</h2>
    <p class="answer">{{ $answer }}</p>
</div>