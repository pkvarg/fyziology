@props(['label'])

<div class="submit-button-wrapper">
    <button
        class="submit-button focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-border-primary bg-background-alternative text-text-alternative px-6 py-3"
        type="submit"
    >
        {{ $label }}
    </button>
</div>