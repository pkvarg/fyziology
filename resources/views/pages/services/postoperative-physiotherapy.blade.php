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