@section('title', 'Reflexná masáž')

<x-layout>

    <div class="reflex-massage">
        <x-pjcomponents::portfolio-headers.header-2 heading="Reflexná masáž">
            <x-slot:image>
                <img src="{{ asset('assets/images/masaze-2.jpg') }}" alt="Reflexná masáž">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Reflexnú masáž zaradzujeme do skupiny liečebných metód s cieľom odstrániť chorobné zmeny na koži a v tkanivách. Liečebný účinok dosahujeme prostredníctvom nervových spojov cez reflexné oblúky. Masáž pôsobí na nervový systém, ktorý je hlavným riadiacim systémom v organizme človeka.</p>
                <br>
                <p>Pri masáži sa dráždia receptory, a to sa prenáša dostredivými dráhami do mozgu. Tu sa spracúvajú a odtiaľ vychádzajú spätné reakcie do kože, podkožia, na svaly alebo do orgánov.</p>
                <br>
                <p><span class="primary-color font-bold">Cieľom masáže</span> je vyhmatať a masírovať zmeny na koži, podkoží, fascii, svaloch, perioste a určiť miesta so zmenenou kožnou citlivosťou. Reflexnou cestou dosiahneme liečivé účinky t.j. odstránime ťažkosti vyvolané ochorením.</p>
                <br>
                <div class="lg:flex lg:justify-between">
                    <div>
                        <p class="primary-color font-bold">Indikácie:</p>
                        <ul>
                            <li>- Funkčné a chronické ochorenia vnútorných orgánov</li>
                            <li>- Poruchy prekrvenia, hlavne dolných končatín</li>
                            <li>- Reumatické ochorenia kĺbov a chrbtice</li>
                            <li>- Poúrazové a pooperačné stavy</li>
                            <li>- Detoxikácia tela či podpora imunitného systému</li>
                            <li>- Problémy so stresom, spánkom</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <p class="primary-color font-bold">Kontraindikácie:</p>
                        <ul>
                            <li>- Akútne zápaly tkanív alebo orgánov</li>
                            <li>- Horúčkovité a infekčné ochorenia</li>
                            <li>- Akútne zápaly kože</li>
                            <li>- Embólia pľúc, infarkt myokardu</li>
                            <li>- Gravidita</li>
                            <li>- Oblasť nádorov a nad nádormi</li>
                        </ul>
                    </div>
                </div>
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