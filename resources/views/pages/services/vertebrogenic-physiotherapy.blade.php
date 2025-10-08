@section('title', 'Fyzioterapia pri ochoreniach chrbtice')

<x-layout>
    <div class="vertebrogenic-physiotherapy bg-gray-50 mt-8">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
           <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri ochoreniach chrbtice
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-8">
                    <img src="{{ asset('assets/images/verte.jpg') }}" alt="Fyzioterapia pri ochoreniach chrbtice" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg md:text-xl text-gray-700 text-center">
                    <p>
                        Ide o pacienta s charakteristickým príznakom- bolesťami chrbtice, obmedzenou hybnosťou, ktoré môžu byť doplnené o neurologické symptómy a majú rôznu príčinu:
                    </p>
                </div>
            </div>
        </section>

        <!-- Key Aspects Section with Gradient Circle -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
     <!-- Gradient Circle - bottom right -->

  <div class="absolute md:hidden lg:inline -top-[6rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>


            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - Fyzio for Vertebrogenic -->
        <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
                <h2 class="text-2xl font-black mb-4 ml-8 lg:ml-0">Fyzioterapia pri ochoreniach chrbtice</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                    <p>
                        <span class="font-bold primary-color -mt-8">Funkčné poruchy:</span> pri svalovej dysbalancii, zmene pohybových stereotypov, SI blokáde, SI posune, pri zošikmení panvy, hypermobilnom syndróme.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Ortopedické ochorenia:</span> vývojové chyby chrbtice, panvy a dolných končatín, degenaratívne zmeny či spondylolistézy.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Neurologické ochorenia:</span> protrúzia, extrúzia, sekvestrácia, hernia disku, segmentový syndróm, radikulárny syndróm, pseudoradikulárny syndróm či spinálna stenóza.
                    </p>

                    <p>
                        V rámci konzervatívnej liečby Vám poradíme ako nahradiť zlé pohybové programy správnymi, ukážeme a vysvetlíme relaxačné polohy pre Váš chrbát, vypracujeme individuálny rehabilitačný plán pre aktiváciu a budovanie chrbtových svalov a okolitých svalových skupín.
                    </p>

                    <p>
                        Ak chceme predchádzať bolestiam chrbtice, prevencia je najlepšou obranou. Začať môžeme zlepšením životosprávy, znížením telesnej hmotnosti, zvýšením aktívneho pohybu ako je chôdza a podobne.
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
