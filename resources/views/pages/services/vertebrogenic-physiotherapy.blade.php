@section('title', 'Fyzioterapia pri ochoreniach chrbtice')

<x-layout>

    <div class="vertebrogenic-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pri ochoreniach chrbtice">
            <x-slot:image>
                <img src="{{ asset('assets/images/verte.jpg') }}" alt="Fyzioterapia pri ochoreniach chrbtice">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Ide o pacienta s charakteristickým príznakom- bolesťami chrbtice, obmedzenou hybnosťou, ktoré môžu byť doplnené o neurologické symptómy a majú rôznu príčinu:</p>
                <br>
                <p><span class="font-bold primary-color">Funkčné poruchy:</span> pri svalovej dysbalancii, zmene pohybových stereotypov, SI blokáde, SI posune, pri zošikmení panvy, hypermobilnom syndróme.</p>
                <br>
                <p><span class="font-bold primary-color">Ortopedické ochorenia:</span> vývojové chyby chrbtice, panvy a dolných končatín, degenaratívne zmeny či spondylolistézy.</p>
                <br>
                <p><span class="font-bold primary-color">Neurologické ochorenia:</span> protrúzia, extrúzia, sekvestrácia, hernia disku, segmentový syndróm, radikulárny syndróm, pseudoradikulárny syndróm či spinálna stenóza.</p>
                <br>
                <p>V rámci konzervatívnej liečby Vám poradíme ako nahradiť zlé pohybové programy správnymi, ukážeme a vysvetlíme relaxačné polohy pre Váš chrbát, vypracujeme individuálny rehabilitačný plán pre aktiváciu a budovanie chrbtových svalov a okolitých svalových skupín.</p>
                <br>
                <p>Ak chceme predchádzať bolestiam chrbtice, prevencia je najlepšou obranou. Začať môžeme zlepšením životosprávy, znížením telesnej hmotnosti, zvýšením aktívneho pohybu ako je chôdza a podobne.</p>
            </x-slot:content>
        </x-pjcomponents::long-form-contents.content-30>

           <section class="px-[5%] py-16 md:py-24 lg:py-16 relative">
                <!-- Gradient Circle - near CTA -->
            <div class="absolute hidden lg:inline lg:-top-[12.5rem] -right-56 lg:-right-[25rem] w-[100%] lg:w-[52.5%] h-auto pointer-events-none">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
         
            <div class="container mx-auto w-full max-w-4xl relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="hidden lg:inline absolute top-0 -left-32 w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-4xl font-black mb-6 md:mb-8">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-xl mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>
        </section>

        <x-footer />
    </div>

</x-layout>