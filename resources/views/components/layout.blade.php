<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="fyzioterapia, domaca fyzioterapia, fyzioterapia bratislava, masaze bratislava, bankovanie bratislava, mobilna fyzioterapia">
    <meta name="description" content="Fyziology je moderná a dynamická firma, ktorej cieľom je pomáhať klientom dosiahnuť ich maximálny potenciál v oblasti pohybu a zdravia, a to pomocou mobilnej fyzioterapie v Bratislave a okolí.">
    @stack('meta')
    <title>Fyziology | @yield('title')</title>
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Fyziology" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pjcomponents/assets/main.css') }}">
    @stack('styles')
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="page">
        <x-pjcomponents::navbars.navbar-1>
            <x-slot:logo>
                <a href="{{ route('page.index') }}" class="flex justify-center items-center text-2xl uppercase">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="mr-4" />
                    <span id="first">FYZIO</span><span id="second">logy</span>
                </a>
            </x-slot:logo>

            <x-slot:items>
                <x-pjcomponents::navbars.simple-link text="Domov" :link="route('page.index')" />

                <x-pjcomponents::navbars.items-link text="Naše služby">
                    <x-pjcomponents::navbars.simple-link text="Naše služby" :link="route('page.services.index')" />
                    <x-pjcomponents::navbars.simple-link text="Mobilná fyzioterapia" :link="route('page.services.mobile-physiotherapy')" />
                    <x-pjcomponents::navbars.simple-link text="Ambulantná fyzioterapia" :link="route('page.services.ambulatory-physiotherapy')" />
                    <x-pjcomponents::navbars.simple-link text="Bankovanie" :link="route('page.services.banking')" />
                    <x-pjcomponents::navbars.simple-link text="Masáže" :link="route('page.services.massages')" />
                </x-pjcomponents::navbars.items-link>

                <x-pjcomponents::navbars.simple-link text="Naši klienti" :link="route('page.clients')" />

                <x-pjcomponents::navbars.simple-link text="Cenník" :link="route('page.services.index') . '#cennik'" />

                <x-pjcomponents::navbars.simple-link text="Kontakt" :link="route('page.contact')" />
            </x-slot:items>
        </x-pjcomponents::navbars.navbar-1>

        {{ $slot }}
    </div>
</body>