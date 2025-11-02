@section('title', 'Fyzioterapia pri neurologických ochoreniach')

@section('meta_description', 'Vo Fyziology venujeme pozornosť aj odboru ako je neurológia a jej najčastejším ochoreniam. Starostlivosť o pacienta s centrálnou parézou po CMP či fyzioterapii pri periférnych parézach horných a dolných končatín.')

<x-layout>
    <div class="neurological-physiotherapy bg-gray-50 mt-8">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
           <!-- Gradient Circle - top left -->
    <div class="absolute -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri neurologických ochoreniach
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-8">
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
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
     <!-- Gradient Circle - bottom right -->

  <div class="absolute -top-[6rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>


            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - Fyzio for Neurological -->
        <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
                <h2 class="text-[1rem] lg:text-[22px] font-black mb-4 ml-8 lg:ml-0">Fyzioterapia pri neurologických ochoreniach</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-[1rem] text-lg text-gray-700 ml-8 lg:ml-0 mt-[1.4rem] lg:-mt-[0.25rem]">
                    <p>
                        <span class="font-bold primary-color -mt-8">1. Liečebný plán:</span> Vypracovanie individuálneho liečebného plánu v závislosti od diagnózy.
                    </p>

                       <p class="mt-4">
                        <span class="font-bold primary-color">2. Vzdelávanie a podpora rodiny:</span> Vzdelávanie rodiny o stave pacienta a poskytovanie emocionálnej podpory, aby sa im pomohlo lepšie pochopiť a zvládať situáciu.
                    </p>

                  <p class="mt-4">
                        <span class="font-bold primary-color">3. Psychologická podpora:</span> Zabezpečenie psychologickej podpory a poradenstva, keďže neurologické ochorenia môžu mať značný vplyv na psychické zdravie.
                    </p>

                 <p class="mt-4">
                        Včasná a pravidelná rehabilitácia je kľúčová a môže výrazne prispieť k obnoveniu funkcií a prevencii komplikácií. 
                     
                    </p>

                       <p class="pt-4 lg:pt-0">
                        Fyzioterapeut pri práci s neurologickými pacientmi potrebuje detailne hodnotiť stav pacienta, prispôsobiť terapiu jeho individuálnym potrebám a cieľom a neustále monitorovať pokrok počas liečby.

                        </p>

                    <p class="mt-4">
                        Naším hlavným cieľom je postaviť Vás opäť na nohy, zlepšiť každodenné činnosti (presuny, chôdza, obliekanie, hygiena..), motivovať pacienta a pomôcť k návratu do bežného života čo najskôr!
                    </p>
                </div>
            </div>
        </section>




             <!-- CTA Section -->
        <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 px-[5%] lg:px-0 py-16">
            <!-- Gradient Half Circle CTA - left -->
            <div class="lg:flex absolute top-[4.3rem] -left-[2rem] lg:top-[4.25rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
            </div>

            <h2 class="text-[1.2rem] lg:text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
            <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0 mt-[1.9rem] lg:mt-0">
                Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
            </p>
            <div class="flex lg:justify-start justify-center">
            <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:-ml-16 mt-4">
                Vstupná konzultácia ZDARMA
            </a>
        </div>
        </div>


        <x-footer />
    </div>
</x-layout>
