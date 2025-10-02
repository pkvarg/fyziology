@section('title', 'Mäkké techniky')

<x-layout>

    <div class="reflex-massage">
        <x-pjcomponents::portfolio-headers.header-2 heading="Mäkké techniky">
            <x-slot:image>
                <img src="{{ asset('assets/images/masaze-3.jpg') }}" alt="Mäkké techniky">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>
                    Mäkké techniky sú manuálna terapia, pri ktorej najskôr uvoľňujeme kožu, podkožie a následne účinky prenikajú do hlbšie úložených štruktúr, a to fascie a svalu.
                    <br>
                    <br>
                    <span class="font-bold primary-color">Cieľom</span> je obnoviť pohyblivosť mäkkých tkanív v mieste patologickej bariéry a v smere obmedzenia. Využívame ich pri stuhnutí svalstva a na odstránenie napätia v tkanivách a sú vhodné pre každého s bolesťami pohybového aparátu. Daný segment sa prekrví a dôjde ku uvoľneniu. Využívajú sa aj po operáciách v mieste jazvy pre skorú rekonvalescenciu.
                </p>
                <br>
                <div class="lg:flex lg:justify-between">
                    <div>
                        <p class="primary-color font-bold">Účinky mäkkých techník:</p>
                        <ul>
                            <li>- Uvoľnenie kĺbových blokád</li>
                            <li>- Uvoľnenie svalových spazmov</li>
                            <li>- Tlmia bolesť</li>
                            <li>- Optimalizujú krvný tlak a činnosť srdca</li>
                            <li>- Posilňujú metabolizmus</li>
                            <li>- Zlepšujú fyzický a psychický stav pacienta</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <p class="primary-color font-bold">Indikácie:</p>
                        <ul>
                            <li>- Problémy s krčnou, hrudnou chrbticou</li>
                            <li>- Problémy s krížovou chrbticou</li>
                            <li>- Sedavé zamestnanie</li>
                            <li>- Nízka fyzická aktivita</li>
                            <li>- Migrény</li>
                            <li>- Zápal sedacieho svalu, nervu</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <p class="primary-color font-bold">Kontraindikácie:</p>
                        <ul>
                            <li>- Akútne zápaly</li>
                            <li>- Horúčkovité a infekčné ochorenia</li>
                            <li>- Nádorové ochorenia</li>
                            <li>- Krvácavé stavy</li>
                            <li>- Pri kŕčových žilách</li>
                            <li>- Gravidita</li>
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