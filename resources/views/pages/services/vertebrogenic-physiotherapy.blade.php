@section('title', 'Fyzioterapia pri ochoreniach chrbtice')

<x-layout>
    <div class="vertebrogenic-physiotherapy bg-gray-50">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
           <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri ochoreniach chrbtice
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
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
        <section class="px-[5%] py-8 lg:py-8 relative">
              <!-- Gradient Circle - right side -->
            <div class="absolute hidden lg:inline -top-[12rem] -right-[24rem] w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-[0rem] -left-[7rem] w-24 h-24 lg:w-32 lg:h-32 pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-4">Fyzioterapia pri ochoreniach chrbtice</h2>

                <div class="space-y-4 text-lg text-gray-700">
                    <p>
                        <span class="font-bold primary-color">Funkčné poruchy:</span> pri svalovej dysbalancii, zmene pohybových stereotypov, SI blokáde, SI posune, pri zošikmení panvy, hypermobilnom syndróme.
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

         <div class="container mx-auto w-full max-w-4xl relative z-10 px-[5%] lg:px-0">
                <!-- Gradient Half Circle - left -->
                <div class="hidden lg:inline absolute top-0 -left-28 lg:w-32 lg:h-32  pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-3xl font-black mb-6 md:mb-8">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-lg mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
             
            </div>
               <div class="flex lg:justify-start
            justify-center">
   <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:ml-[15rem] mt-4">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>

        <x-footer />
    </div>
</x-layout>
