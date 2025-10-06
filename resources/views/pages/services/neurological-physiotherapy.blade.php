@section('title', 'Fyzioterapia pri neurologických ochoreniach')

<x-layout>
    <div class="neurological-physiotherapy bg-gray-50">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-16 md:py-20 lg:py-16 relative overflow-hidden">
           <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri neurologických ochoreniach
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
                    <img src="{{ asset('assets/images/neuro.jpg') }}" alt="Fyzioterapia pri neurologických ochoreniach" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg md:text-xl text-gray-700 text-center">
                    <p>
                        Vo Fyziology venujeme pozornosť aj odboru ako je neurológia a jej najčastejším ochoreniam. Starostlivosť o pacienta s <span class="font-bold primary-color">centrálnou parézou</span> po CMP (cievnej mozgovej príhode) či fyzioterapii pri <span class="font-bold primary-color">periférnych parézach</span> horných a dolných končatín.
                    </p>
                    <p>
                        V rámci fyzioterapie sa sústreďujeme na <span class="font-bold primary-color">Parkinsonov syndróm, skleróza multiplex</span> ale aj na <span class="font-bold primary-color">spinálne problémy</span>.
                    </p>
                    <p>
                        Starostlivosť o neurologického pacienta je komplexná a vyžaduje osobitný prístup, a preto v rámci fyzioterapie ponúkame:
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
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-4">Fyzioterapia pri neurologických ochoreniach</h2>

                <div class="space-y-4 text-lg text-gray-700">
                    <p>
                        <span class="font-bold primary-color">1. Liečebný plán:</span> Vypracovanie individuálneho liečebného plánu v závislosti od diagnózy.
                    </p>

                    <p>
                        <span class="font-bold primary-color">2. Vzdelávanie a podpora rodiny:</span> Vzdelávanie rodiny o stave pacienta a poskytovanie emocionálnej podpory, aby sa im pomohlo lepšie pochopiť a zvládať situáciu.
                    </p>

                    <p>
                        <span class="font-bold primary-color">3. Psychologická podpora:</span> Zabezpečenie psychologickej podpory a poradenstva, keďže neurologické ochorenia môžu mať značný vplyv na psychické zdravie.
                    </p>

                    <p>
                        Včasná a pravidelná rehabilitácia je kľúčová a môže výrazne prispieť k obnoveniu funkcií a prevencii komplikácií. Fyzioterapeut pri práci s neurologickými pacientmi potrebuje detailne hodnotiť stav pacienta, prispôsobiť terapiu jeho individuálnym potrebám a cieľom, a neustále monitorovať pokrok počas liečby.
                    </p>

                    <p>
                        Našim hlavným cieľom je postaviť Vás opäť na nohy, zlepšiť každodenné činnosti (presuny, chôdza, obliekanie, hygiena..), motivovať pacienta a pomôcť k návratu do bežného života čo najskôr!
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
