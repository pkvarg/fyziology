<x-pjcomponents::footers.footer-7>
    <x-slot:text>
        <span class="primary-color font-bold">Otváracie hodiny</span>
        <br>
        Pon-Pia: 8:00 - 12:00 a 13:00 - 16:00
    </x-slot:text>

    <x-slot:copyright>
        &copy;2025 Fyziology
    </x-slot:copyright>

    <x-slot:logo>
        <a href="{{ route('page.index') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="size-20">
        </a>
    </x-slot:logo>

    <x-slot:primary-links>
        <li><a href="{{ route('page.services.index') }}">Služby</a></li>
        <li><a href="{{ route('page.clients') }}">Naši klienti</a></li>
        <li><a href="{{ route('page.contact') }}">Kontakt</a></li>
    </x-slot:primary-links>

    <x-slot:secondary-links>
        <li><a href="{{ route('page.terms') }}">Všeobecné obchodné podmienky</a></li>
        <li><a href="{{ route('page.complaints') }}">Reklamačné podmienky</a></li>
        <li><a href="{{ route('page.privacy') }}">Ochrana osobných údajov</a></li>
    </x-slot:secondary-links>
</x-pjcomponents::footers.footer-7>