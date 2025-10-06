@section('title', 'Fyzioterapia pri imobilných pacientoch')

<x-layout>
    <div class="immobile-physiotherapy bg-gray-50">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-16 md:py-20 lg:py-16 relative overflow-hidden">
           <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri imobilných pacientoch
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
                    <img src="{{ asset('assets/images/imobilny-pacienti.jpg') }}" alt="Fyzioterapia pri imobilných pacientoch" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg md:text-xl text-gray-700 text-center">
                    <p>
                        Fyzioterapia pre imobilných pacientov sa zameriava na zlepšenie fyzickej funkcie, pohyblivosti a kvality života pacientov, ktorí sú obmedzení v pohybe kvôli rôznym zdravotným problémom, ako sú ochrnutia, neurodegeneratívne ochorenia (napríklad Parkinsonova choroba) alebo po operáciách.
                    </p>
                    <p>
                        Ciele fyzioterapie pre imobilných pacientov:
                    </p>
                </div>
            </div>
        </section>

        <!-- Key Aspects Section with Gradient Circle -->
        <section class="px-[5%] py-16 md:py-20 lg:py-24 relative">
              <!-- Gradient Circle - right side -->
            <div class="absolute hidden lg:inline -top-[12rem] -right-[24rem] w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-[0rem] -left-[7rem] w-24 h-24 lg:w-32 lg:h-32 pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-4">Fyzioterapia pri imobilných pacientoch</h2>

                <div class="space-y-4 text-lg text-gray-700">
                    <p>
                        <span class="font-bold primary-color">Prevencia dekubitov a svalovej atrofie:</span> Pravidelné cvičenia na zvýšenie prekrvenia a udržiavanie svalovej hmoty, aj keď pacient nemôže vykonávať intenzívnu pohybovú aktivitu.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Zlepšenie dýchacích funkcií:</span> Pacienti, ktorí sú dlhodobo imobilní, môžu mať problémy s dýchaním. Fyzioterapia zahŕňa techniky, ako je respiračná fyzioterapia a posilňovanie dýchacích svalov.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Úľava od bolesti:</span> Fyzioterapeut môže pomôcť pri polohovaní pacienta a zmiernení bolesti.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Zlepšenie nezávislosti:</span> Pomoc pri učení sa základných pohybových vzorcov a adaptácií na udržiavanie mobility alebo sebaobsluhy.
                    </p>

                    <p>
                        Naši fyzioterapeuti Vám pomôžu pri:
                    </p>

                    <p>
                        <span class="font-bold primary-color">Pasívne pohybové cvičenia:</span> Fyzioterapeut vykonáva pohyby za pacienta, aby udržal pohyblivosť kĺbov a zabraňoval kontraktúram (skráteniu svalov).
                    </p>

                    <p>
                        <span class="font-bold primary-color">Aktívne asistované cvičenia:</span> Pacient vykonáva cvičenia s pomocou terapeuta, čo umožňuje postupne zlepšovať silu a rozsah pohybu.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Posilňovanie dýchacích svalov:</span> Techniky ako hlboké dýchanie alebo iné špecifické cvičenia pomáhajú zlepšiť funkciu pľúc a prevenciu respiračných problémov.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Cvičenia na stabilizáciu trupu:</span> Tieto cvičenia môžu pomôcť pacientom, ktorí majú obmedzenú mobilitu, udržať stabilitu a znížiť riziko pádov alebo zranení pri pokuse o pohyb.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Terapia v sede alebo na lôžku</span>
                    </p>
                </div>
            </div>
        </section>

         <div class="container mx-auto w-full max-w-4xl relative z-10 px-[5%] lg:px-0">
                <!-- Gradient Half Circle - left -->
                <div class="hidden lg:inline absolute top-0 -left-28 lg:w-32 lg:h-32  pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-3xl font-black mb-6 md:mb-8">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-lg mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>

        <x-footer />
    </div>
</x-layout>
