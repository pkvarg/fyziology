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

        <x-pjcomponents::ctas.cta-7
            heading="Získajte svoju konzultáciu"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Objednať sa" :link="route('page.contact')" />
                <x-pjcomponents::button type="secondary" label="Naše služby" :link="route('page.services.index')" />
            </x-slot:actions>
        </x-pjcomponents::ctas.cta-7>

        <x-footer />
    </div>

</x-layout>