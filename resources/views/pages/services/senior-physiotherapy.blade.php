@section('title', 'Fyzioterapia pre seniorov')

<x-layout>

    <div class="senior-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pre seniorov">
            <x-slot:image>
                <img src="{{ asset('assets/images/fyzio-pre-seniorov.jpg') }}" alt="fyzioterapia pre seniorov">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Áno, venujeme sa aj starším vekovým skupinám, ktorí aj v pokročilejšom veku vďaka pohybu, chcú udržiavať svoje telo aktívne a v dobrej fyzickej kondícii.</p>
                <br>
                <p>Vek nehrá žiadnu rolu a keďže chápeme, že nie každý môže využívať ambulantnú fyzioterapiu, tak pre imobilnejších pacientov ponúkame možnosť fyzioterapie priamo u Vás doma!</p>
                <br>
                <p>Fyzioterapia pre dôchodcov je veľmi dôležitá, pretože pomáha udržiavať a zlepšovať fyzickú kondíciu, zmierňuje bolesti a zvyšuje kvalitu života. Tu je niekoľko kľúčových aspektov:</p>
                <br>
                <p><span class="font-bold primary-color">Individuálny prístup:</span> Každý dôchodca má svoje špecifické potreby a zdravotné problémy, preto je dôležité prispôsobiť fyzioterapeutické cvičenia.</p>
                <br>
                <p><span class="font-bold primary-color">Cvičenia na zlepšenie rovnováhy a koordinácie:</span> Pomáhajú predchádzať pádom a zraneniam.</p>
                <br>
                <p><span class="font-bold primary-color">Posilňovanie svalov:</span> Cvičenia na posilnenie svalov, najmä v oblasti jadra a dolných končatín, podporujú mobilitu a samostatnosť.</p>
                <br>
                <p><span class="font-bold primary-color">Flexibilita a rozsah pohybu:</span> Na zlepšenie flexibility a udržanie pohyblivosti kĺbov sú dôležité strečingové cvičenia.</p>
                <br>
                <p><span class="font-bold primary-color">Kardiovaskulárne zdravie:</span> Ľahké aeróbne cvičenia, ako je chôdza alebo plávanie, sú prospešné pre srdce a pľúca.</p>
                <br>
                <p><span class="font-bold primary-color">Rehabilitácia po úrazoch alebo operáciách:</span> Fyzioterapia pomáha pri zotavovaní sa z rôznych zranení alebo chirurgických zákrokov.</p>
                <br>
                <p><span class="font-bold primary-color">Bolesť a chronické ochorenia:</span> Fyzioterapeuti môžu pomôcť pri zmierňovaní bolesti ako sú artritída alebo neuropatia.</p>
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