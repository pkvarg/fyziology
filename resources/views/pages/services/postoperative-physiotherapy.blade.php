@section('title', 'Fyzioterapia pri poúrazových a pooperačných stavoch')

<x-layout>
    <div class="postoperative-physiotherapy bg-gray-50">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-16 md:py-20 lg:py-16 relative overflow-hidden">
           <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pri poúrazových a pooperačných stavoch
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
                    <img src="{{ asset('assets/images/pooperacne.jpg') }}" alt="Fyzioterapia pri poúrazových a pooperačných stavoch" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg md:text-xl text-gray-700 text-center">
                    <p>
                        Operačný zákrok je zásah do organizmu, pri ktorom dochádza k narušeniu kože, podkožia, fascie, svalov, ciev, lymfatického systému a nervov.
                    </p>
                    <p>
                        Fyzioterapia je veľmi dôležitou súčasťou liečebného procesu pred a po operácii, a preto je rozdelená na predoperačnú a pooperačnú.
                    </p>
                </div>
            </div>
        </section>

        <!-- Key Aspects Section with Gradient Circle -->
        <section class="px-[5%] py-16 md:py-20 lg:py-24 relative">
              <!-- Gradient Circle - right side -->
            <div class="absolute hidden lg:inline -top-[12rem] -right-[24rem] w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-[0rem] -left-[7rem] w-24 h-24 lg:w-32 lg:h-32 pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-4">Fyzioterapia pri poúrazových a pooperačných stavoch</h2>

                <div class="space-y-4 text-lg text-gray-700">
                    <p>
                        <span class="font-bold primary-color">Cieľom predoperačnej fyzioterapie</span> je pripraviť pacienta na operačný zákrok, edukovať pacienta o význame a potrebe fyzioterapie v pooperačnej fáze.
                    </p>

                    <p>
                        Cvičebná jednotka zahŕňa starostlivosť o dýchacie cesty, správny stereotyp dýchania, respiračnú fyzioterapiu, nácvik kašľania a vykašliavania, výdych proti odporu, kondičné cvičenie horných a dolných končatín či korekčné cvičenia.
                    </p>

                    <p>
                        Pri <span class="font-bold primary-color">pooperačnej fáze,</span> ktorá začína na lôžku, využívame respiračnú fyzioterapiu, kde sa optimalizuje činnosť svalov hrudníka a funkcie dýchania. Cieľom je odstrániť hlien z dýchacích ciest. Využiť môžeme aj polohové drenáže, pri ktorých sa využíva vplyv gravitácie na usmernenie toku hlienu za účelom odstránenia.
                    </p>

                    <p>
                        Súčasťou je taktiež starostlivosť o jazvu a jej mobilizácia či nácviku posturálnych funkcií ako je stoj, chôdza, korekčné cvičenia na ovplyvnenie držania tela.
                    </p>

                    <p class="font-bold primary-color">Venujeme sa:</p>
                    <p>1. Zlomeninám a úrazom horných končatín (ramenný kĺb, lakťový kĺb, zápästný kĺb, ruka)</p>
                    <p>2. Zlomeninám a úrazom dolných končatín (bedrový kĺb, kolenný kĺb, členkový kĺb, noha)</p>
                    <p>3. Poraneniam mäkkých štruktúr (svaly, väzy, šľachy, menisky)</p>
                    <p>4. ďalšie..</p>
                </div>
            </div>
        </section>

         <div class="container mx-auto w-full max-w-4xl relative z-10 px-[5%] lg:px-0">
                <!-- Gradient Half Circle - left -->
                <div class="hidden lg:inline absolute top-0 -left-28 lg:w-32 lg:h-32  pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-3xl font-black mb-6 md:mb-8">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-lg mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>

        <x-footer />
    </div>
</x-layout>
