@section('title', 'Reklamačné podmienky')

@push('meta')
    <meta name="description" content="Reklamačné podmienky Fyziology. Informácie o uplatnení reklamácie fyzioterapeutických služieb v Bratislave a postupe pri vybavovaní reklamácií.">
@endpush

<x-layout>

    <div class="complaints-page">
        <!-- Hero Section -->
        <section class="px-[5%] py-16 md:py-24 lg:py-20 relative overflow-hidden bg-gray-50">
            <!-- Gradient Circle - top left -->
            <div class="absolute top-[0rem] lg:-top-[10rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6">
                    Reklamačné podmienky <span class="primary-color">Fyziology</span>
                </h1>
            </div>
                 <!-- Content Section -->



        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p class="text-[18px] font-bold">Naša prevádzka kladie dôraz na kvalitu ponúkaných služieb a kvalifikáciu pracovníkov Fyziology na adrese: Námestie Martina Benku 12, 81107 Bratislava, Staré Mesto.</p>
                <br>
                <p class="text-[18px]">Pokiaľ sa aj napriek tomu vyskytne dôvod k reklamácii, odporúčame Klientovi, aby vo vlastnom záujme postupoval podľa týchto reklamačných podmienok:</p>
                <br>
                <p class="text-[20px] font-bold primary-color">Spôsob uplatnenia reklamácie:</p>
                <p class="text-[18px]">- ihneď po skončení terapie priamo v priestoroch prevádzky Poskytovateľa, kde Klient oznámi dôvod svojej nespokojnosti s poskytnutou službou/terapiou,</p>
                <p class="text-[18px]">- písomne na e-mail info@fyziology.sk</p>
                <p class="text-[18px]">- na telefónne číslo Poskytovateľa  +421 918 378 781.</p>
                <br>
                <p class="text-[20px] font-bold primary-color">Povinnosti Klienta pri uplatnení reklamácie</p>
                <p class="text-[18px]">- preukázať zakúpenie služby/terapie platným účtovným dokladom/faktúrou vydaným Poskytovateľom, nie starším ako 2 mesiace od jeho zakúpenia,</p>
                <p class="text-[18px]">- na recepcii prevádzky Poskytovateľa nechať svoj kontakt, resp. napísať svoju reklamáciu na vyššie uvedený kontaktný e-mail.</p>
                <br>
                <p class="text-[20px] font-bold primary-color">Posúdenie oprávnenosti podanej reklamácie</p>
                <p class="text-[18px]">- vykonáva Poskytovateľ osobne. Na zistenie skutočností ohľadom podanej reklamácie a vyjadrenie sa Poskytovateľa je stanovená lehota 30 dní odo dňa preukázateľného podania reklamácie.</p>
                <br>
                <p class="text-[20px] font-bold primary-color">Vybavenie oprávnenej reklamácie</p>
                <p class="text-[18px]">V prípade posúdenia oprávnenosti reklamácie je možné túto následne riešiť podľa dohody s Klientom nasledovne:</p>
                <p class="text-[18px]">- opakovaným poskytnutím služby/terapie,</p>
                <p class="text-[18px]">- primeranou zľavou z kúpnej ceny, pokiaľ nebola služba/terapia zakúpená v akcii,</p>
                <p class="text-[18px]">- v prípade reklamácie Balíka terapií z ponuky Poskytovateľa je Poskytovateľ oprávnený uplatniť si u Klienta storno poplatok vo výške 25% z ceny Balíka (pred zľavou), resp. storno poplatok za zrušený termín v deň poskytnutia služby/terapie (v prípade, že termín bol zrušený v deň konania terapie).</p>
                <br>
                <p class="text-[18px]">V prípade neúčinnosti Klienta počas riešenia reklamácie táto nebude Poskytovateľom akceptovaná.</p>
                <br>
                <p class="text-[18px]">Tieto reklamačné podmienky sú prílohou Všeobecných obchodných podmienok vydaných Poskytovateľom. a nadobúdajú platnosť a účinnosť dňom uverejnenia na webovej stránky spoločnosti, t.j. dňom(14.02.2025).</p>
            </x-slot:content>
        </x-pjcomponents::long-form-contents.content-30>
                 <!-- Gradient Circle - bottom right -->
            <div class="absolute bottom-[10rem] lg:top-[40rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
        </section>

        <x-footer />
    </div>

</x-layout>