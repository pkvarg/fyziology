@section('title', 'Klasická masáž')

<x-layout>

    <div class="classic-massage">
        <x-pjcomponents::portfolio-headers.header-2 heading="Klasická masáž">
            <x-slot:image>
                <img src="{{ asset('assets/images/masaze-1.jpg') }}" alt="Klasická masáž">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Klasická masáž je terapeutická metóda, ktorá sa zameriava na zlepšenie zdravia prostredníctvom rôznych techník manipuláciou s mäkkými tkanivami ako sú svaly, väzy a šľachy. Tento typ masáže je obľúbený vďaka schopnosti uvoľniť napätie v danom segmente, zlepšiť prekrvenie a podporiť regeneráciu svalov.</p>
                <br>
                <div class="lg:flex lg:justify-between">
                    <div>
                        <p class="primary-color font-bold">Účinky masáže:</p>
                        <ul>
                            <li>- Urýchľuje regeneráciu po zraneniach</li>
                            <li>- Podpora imunitného systému</li>
                            <li>- Zlepšenie pohyblivosti kĺbov</li>
                            <li>- Relaxácia a zníženie stresu</li>
                            <li>- Odbúrava odpadové látky z tela</li>
                            <li>- Zlepšuje svalovú činnosť</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <p class="primary-color font-bold">Indikácie:</p>
                        <ul>
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
                    <br>
                    <div>
                        <p class="primary-color font-bold">Kontraindikácie:</p>
                        <ul>
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