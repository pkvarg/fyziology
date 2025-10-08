@section('title', 'Mäkké techniky')

<x-layout>
    <div class="soft-techniques bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] py-16 pb-8 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Mäkké techniky
                </h1>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">



                <!-- Hero Image -->
                <div class="mb-12">
                    <img src="{{ asset('assets/images/masaze-3.jpg') }}" alt="Mäkké techniky" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>


                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Mäkké techniky sú manuálna terapia, pri ktorej najskôr uvoľňujeme kožu, podkožie a následne účinky prenikajú do hlbšie úložených štruktúr, a to fascie a svalu.
                    </p>
                    <p>
                        <span class="font-bold primary-color">Cieľom</span> je obnoviť pohyblivosť mäkkých tkanív v mieste patologickej bariéry a v smere obmedzenia. Využívame ich pri stuhnutí svalstva a na odstránenie napätia v tkanivách a sú vhodné pre každého s bolesťami pohybového aparátu. Daný segment sa prekrví a dôjde ku uvoľneniu. Využívajú sa aj po operáciách v mieste jazvy pre skorú rekonvalescenciu.
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
                            <p class="primary-color font-bold mb-4">Účinky mäkkých techník:</p>
                            <ul class="list-none space-y-2">
                                <li>- Uvoľnenie kĺbových blokád</li>
                                <li>- Uvoľnenie svalových spazmov</li>
                                <li>- Tlmia bolesť</li>
                                <li>- Optimalizujú krvný tlak a činnosť srdca</li>
                                <li>- Posilňujú metabolizmus</li>
                                <li>- Zlepšujú fyzický a psychický stav pacienta</li>
                            </ul>
                        </div>

                        <div class="mb-8 lg:mb-0">
                            <p class="primary-color font-bold mb-4">Indikácie:</p>
                            <ul class="list-none space-y-2">
                                <li>- Problémy s krčnou, hrudnou chrbticou</li>
                                <li>- Problémy s krížovou chrbticou</li>
                                <li>- Sedavé zamestnanie</li>
                                <li>- Nízka fyzická aktivita</li>
                                <li>- Migrény</li>
                                <li>- Zápal sedacieho svalu, nervu</li>
                            </ul>
                        </div>

                        <div>
                            <p class="primary-color font-bold mb-4">Kontraindikácie:</p>
                            <ul class="list-none space-y-2">
                                <li>- Akútne zápaly</li>
                                <li>- Horúčkovité a infekčné ochorenia</li>
                                <li>- Nádorové ochorenia</li>
                                <li>- Krvácavé stavy</li>
                                <li>- Pri kŕčových žilách</li>
                                <li>- Gravidita</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gradient Circle - desktop only bottom right -->
            <div class="absolute hidden lg:inline lg:top-[20rem] lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
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
