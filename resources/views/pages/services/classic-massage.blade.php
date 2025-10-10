@section('title', 'Klasická masáž')

@push('meta')
    <meta name="description" content="Klasická masáž je terapeutická metóda, ktorá sa zameriava na zlepšenie zdravia prostredníctvom rôznych techník manipuláciou s mäkkými tkanivami ako sú svaly, väzy a šľachy. Tento typ masáže je obľúbený vďaka schopnosti uvoľniť napätie, zlepšiť prekrvenie a podporiť regeneráciu.">
@endpush

<x-layout>
    <div class="classic-massage bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] pt-16 pb-8 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute -top-[8rem] lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Klasická masáž
                </h1>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">
<!-- Hero Image -->
                <div class="mb-12">
                    <img src="{{ asset('assets/images/masaze-1.jpg') }}" alt="Klasická masáž" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>


                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Klasická masáž je terapeutická metóda, ktorá sa zameriava na zlepšenie zdravia prostredníctvom rôznych techník manipuláciou s mäkkými tkanivami ako sú svaly, väzy a šľachy. Tento typ masáže je obľúbený vďaka schopnosti uvoľniť napätie v danom segmente, zlepšiť prekrvenie a podporiť regeneráciu svalov.
                    </p>
                </div>

                <!-- Content -->
                <div class="text-left space-y-4 mb-8 lg:px-[10%] relative">
                         <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] -lg:top-[40rem] lg:left-[3rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>
                    <h3 class="text-xl lg:text-2xl font-black mb-6 ml-8 lg:ml-0 ">Účinky, indikácie a kontraindikácie</h3>

                    <div class="!mt-[1.5rem] lg:flex lg:justify-between lg:gap-8 ml-8 lg:ml-0">
                        <div class="mb-8 lg:mb-0">
                            <p class="primary-color font-bold mb-4">Účinky masáže:</p>
                            <ul class="list-none space-y-2">
                                <li>- Urýchľuje regeneráciu po zraneniach</li>
                                <li>- Podpora imunitného systému</li>
                                <li>- Zlepšenie pohyblivosti kĺbov</li>
                                <li>- Relaxácia a zníženie stresu</li>
                                <li>- Odbúrava odpadové látky z tela</li>
                                <li>- Zlepšuje svalovú činnosť</li>
                            </ul>
                        </div>

                        <div class="mb-8 lg:mb-0">
                            <p class="primary-color font-bold mb-4">Indikácie:</p>
                            <ul class="list-none space-y-2">
                                <li>- Ochorenia pohybového systému</li>
                                <li>- Ochorenia väzov a šliach</li>
                                <li>- Ochorenia dýchacích ciest</li>
                                <li>- Poruchy metabolizmu</li>
                                <li>- Poruchy spánku</li>
                                <li>- Bolesť chrbta a šije</li>
                                <li>- Bolesť hlavy</li>
                                <li>- Svalová stuhnutosť</li>
                            </ul>
                        </div>

                        <div>
                            <p class="primary-color font-bold mb-4">Kontraindikácie:</p>
                            <ul class="list-none space-y-2">
                                <li>- Akútne zápalové ochorenia</li>
                                <li>- Nádorové ochorenia</li>
                                <li>- Krvácavé stavy</li>
                                <li>- Horúčkovité a infekčné ochorenia</li>
                                <li>- Tehotenstvo</li>
                                <li>- Zlyhávanie životne dôležitých funkcií</li>
                                <li>- Osteoporóza</li>
                                <li>- Gravidita, menštruácia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gradient Circle - desktop only bottom right -->
            <div class="absolute top-[70rem] lg:top-[20rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
        </section>

         <!-- CTA Section -->
           
        <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 px-[5%] lg:px-0 py-16">
            <!-- Gradient Half Circle CTA - left -->
            <div class="lg:flex absolute top-[4.3rem] -left-[2rem] lg:top-[4.25rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
            </div>

            <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
            <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0">
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
