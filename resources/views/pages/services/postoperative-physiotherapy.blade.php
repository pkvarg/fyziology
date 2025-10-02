@section('title', 'Fyzioterapia pri poúrazových a pooperačných stavoch')

<x-layout>

    <div class="vertebrogenic-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pri poúrazových a pooperačných stavoch">
            <x-slot:image>
                <img src="{{ asset('assets/images/pooperacne.jpg') }}" alt="fyzioterapia pri poúrazových a pooperačných stavoch">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Operačný zákrok je zásah do organizmu, pri ktorom dochádza k narušeniu kože, podkožia, fascie, svalov, ciev, lymfatického systému a nervov.</p>
                <br>
                <p>Fyzioterapia je veľmi dôležitou súčasťou liečebného procesu pred a po operácii, a preto je rozdelená na predoperačnú a pooperačnú.</p>
                <br>
                <p><span class="font-bold primary-color">Cieľom predoperačnej fyzioterapie</span> je pripraviť pacienta na operačný zákrok, edukovať pacienta o význame a potrebe fyzioterapie v pooperačnej fáze. </p>
                <br>
                <p>Cvičebná jednotka zahŕňa starostlivosť o dýchacie cesty, správny stereotyp dýchania, respiračnú fyzioterapiu, nácvik kašľania a vykašliavania, výdych proti odporu, kondičné cvičenie horných a dolných končatín či korekčné cvičenia.</p>
                <br>
                <p>Pri <span class="font-bold primary-color">pooperačnej fáze, </span> ktorá začína na lôžku, využívame respiračnú fyzioterapiu, kde sa optimalizuje činnosť svalov hrudníka a funkcie dýchania. Cieľom je odstrániť hlien z dýchacích ciest. Využiť môžeme aj polohové drenáže, pri ktorých sa využíva vplyv gravitácie na usmernenie toku hlienu za účelom odstránenia.</p>
                <br>
                <p>Súčasťou je taktiež starostlivosť o jazvu a jej mobilizácia či nácviku posturálnych funkcií ako je stoj, chôdza, korekčné cvičenia na ovplyvnenie držania tela.</p>
                <br>
                <p class="font-bold primary-color">Venujeme sa:</p>
                <p>1. Zlomeninám a úrazom horných končatín (ramenný kĺb, lakťový kĺb, zápästný kĺb, ruka)</p>
                <p>2. Zlomeninám a úrazom dolných končatín (bedrový kĺb, kolenný kĺb, členkový kĺb, noha)</p>
                <p>3. Poraneniam mäkkých štruktúr (svaly, väzy, šľachy, menisky)</p>
                <p>4. ďalšie..</p>
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