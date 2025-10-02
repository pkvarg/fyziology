@section('title', 'Fyzioterapia pre dospelých')

<x-layout>

    <div class="senior-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pre dospelých">
            <x-slot:image>
                <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="fyzioterapia pre seniorov">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Je dôležitou súčasťou rehabilitácie a podpory zdravia. Zameriava sa na liečbu a prevenciu rôznych pohybových porúch, bolesti a funkčných obmedzení. Oblasti, na ktoré sa pri fyzioterapii pre dospelých sústreďujeme:</p>
                <br>
                <p><span class="font-bold primary-color">Rehabilitácia po úrazoch:</span> Pomoc pri zotavovaní sa z úrazov, operácií alebo zranení, ako sú zlomeniny, podvrtnutia alebo natiahnutia.</p>
                <br>
                <p><span class="font-bold primary-color">Rehabilitácia po operáciách:</span> Postupné zlepšovanie rozsahu pohyblivosti a sily po operáciách, ako sú výmeny kĺbov alebo operácie chrbtice.</p>
                <br>
                <p><span class="font-bold primary-color">Chronické bolesti:</span> Riešenie problémov ako sú bolesti chrbtice alebo kĺbov. Fyzioterapeuti používajú rôzne techniky na zmiernenie bolesti a zlepšenie pohyblivosti.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie funkčnosti:</span> Pomoc pacientom pri obnove pohybových schopností a funkčnosti, čo je obzvlášť dôležité pre starších dospelých alebo ľudí s chronickými ochoreniami.</p>
                <br>
                <p><span class="font-bold primary-color">Prevencia:</span> Vzdelávanie o správnej ergonómii, cvičeniach a životnom štýle na prevenciu zranení a ochorení.</p>
                <br>
                <p>Fyzioterapia sa môže vykonávať rôznymi spôsobmi, vrátane manuálnych techník, cvičení, elektroterapie alebo použitia terapeutických pomôcok.</p>
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