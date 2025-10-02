@section('title', 'Fyzioterapia pri imobilných pacientoch')

<x-layout>

    <div class="neurological-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pri imobilných pacientoch">
            <x-slot:image>
                <img src="{{ asset('assets/images/imobilny-pacienti.jpg') }}" alt="fyzioterapia pri imobilných pacientoch">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Fyzioterapia pre imobilných pacientov sa zameriava na zlepšenie fyzickej funkcie, pohyblivosti a kvality života pacientov, ktorí sú obmedzení v pohybe kvôli rôznym zdravotným problémom, ako sú ochrnutia, neurodegeneratívne ochorenia (napríklad Parkinsonova choroba) alebo po operáciách.</p>
                <br>
                <p>Ciele fyzioterapie pre imobilných pacientov:</p>
                <br>
                <p><span class="font-bold primary-color">Prevencia dekubitov a svalovej atrofie:</span> Pravidelné cvičenia na zvýšenie prekrvenia a udržiavanie svalovej hmoty, aj keď pacient nemôže vykonávať intenzívnu pohybovú aktivitu.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie dýchacích funkcií:</span> Pacienti, ktorí sú dlhodobo imobilní, môžu mať problémy s dýchaním. Fyzioterapia zahŕňa techniky, ako je respiračná fyzioterapia a posilňovanie dýchacích svalov.</p>
                <br>
                <p><span class="font-bold primary-color">Úľava od bolesti:</span> Fyzioterapeut môže pomôcť pri polohovaní pacienta a zmiernení bolesti.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie nezávislosti:</span> Pomoc pri učení sa základných pohybových vzorcov a adaptácií na udržiavanie mobility alebo sebaobsluhy.</p>
                <br>
                <p>Naši fyzioterapeuti Vám pomôžu pri:</p>
                <br>
                <p><span class="font-bold primary-color">Pasívne pohybové cvičenia:</span> Fyzioterapeut vykonáva pohyby za pacienta, aby udržal pohyblivosť kĺbov a zabraňoval kontraktúram (skráteniu svalov).</p>
                <br>
                <p><span class="font-bold primary-color">Aktívne asistované cvičenia:</span> Pacient vykonáva cvičenia s pomocou terapeuta, čo umožňuje postupne zlepšovať silu a rozsah pohybu.</p>
                <br>
                <p><span class="font-bold primary-color">Posilňovanie dýchacích svalov:</span> Techniky ako hlboké dýchanie alebo iné špecifické cvičenia pomáhajú zlepšiť funkciu pľúc a prevenciu respiračných problémov.</p>
                <br>
                <p><span class="font-bold primary-color">Cvičenia na stabilizáciu trupu:</span> Tieto cvičenia môžu pomôcť pacientom, ktorí majú obmedzenú mobilitu, udržať stabilitu a znížiť riziko pádov alebo zranení pri pokuse o pohyb.</p>
                <br>
                <p><span class="font-bold primary-color">Terapia v sede alebo na lôžku</span></p>
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