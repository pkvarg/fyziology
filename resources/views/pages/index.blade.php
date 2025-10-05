@section('title', 'Mobilná fyzioterapia- Rehabilitácia priamo u Vás doma')

<x-layout>
    <div class="index">
        <!-- Hero Section -->
        <section class="px-[5%] py-16 md:py-24 lg:py-16 relative overflow-hidden bg-gray-50">
            <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6">
                    Vitajte vo <span class="primary-color">Fyziology</span>!
                </h1>
                <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8 text-gray-700">
                    Fyziology je moderná a dynamická firma zameraná na poskytovanie kvalitných fyzioterapeutických služieb a rehabilitácie v Bratislave a okolí. Našim cieľom je pomáhať klientom dosiahnuť ich maximálny potenciál v oblasti pohybu a zdravia, a to pomocou mobilnej fyzioterapie v domácom prostredí klientov.
                </p>

                <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity mt-8">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>
        </section>

        <!-- Why Choose Fyziology Section -->
        <section class="px-[5%] py-16 lg:py-0 relative overflow-hidden">
         

            <div class="max-w-6xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-0 -left-0 lg:w-36 lg:h-36 pointer-events-none opacity-80">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-3xl md:text-4xl lg:text-2xl font-black mb-6">Prečo si vybrať Fyziology?</h2>
                        <p class="text-lg md:text-xl mb-6 text-gray-700">
                            Ponúkame fyzioterapiu priamo u Vás doma alebo v našej ambulancii, ktorú zabezpečuje náš tím s odrazom na profesionalitu, ľudský prístup a ochotu, pričom počas celej terapie poskytujeme neustálu podporu a motiváciu.
                        </p>

                        <div class="flex flex-col lg:flex-row gap-8">
                            <div class="flex flex-col items-start gap-0">
                                <div class="primary-color font-black text-2xl">Mnoho</div>
                                <div class="text-gray-700">spokojných zákazníkov</div>
                            </div>
                            <div class="flex flex-col items-start gap-0">
                                <div class="primary-color font-black text-2xl">Profesionálna</div>
                                <div class="text-gray-700">starostlivosť o pacientov</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Large Ambulance Image -->
                <div class="mt-12">
                    <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="Ambulance" class="w-full max-w-5xl mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 500px;">
                </div>
            </div>
        </section>

        <!-- Typy fyzioterapie Section -->
        <section class="px-[5%] py-16 md:py-20 lg:py-24 bg-gray-50 relative overflow-hidden">
         

            <div class="max-w-6xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-0 -left-0 lg:w-36 lg:h-36 pointer-events-none opacity-80">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                 <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
                    <div class="flex-1">
                        <h2 class="text-3xl md:text-4xl lg:text-2xl font-black mb-6">Typy fyzioterapie</h2>
                        <p class="text-lg md:text-xl text-gray-700">
                            Naše fyzioterapie sú určené predovšetkým starším ľuďom s problémami pohybového aparátu, pacientom po operáciách alebo úrazoch, osobám so zníženou mobilitou, pracujúcim s časovým obmedzením, ľuďom trpiacim chronickými bolesťami & neurologickým pacientom, ktorým chceme uľahčiť a individuálne prispôsobiť fyzioterapii.
                        </p>
                    </div>
                </div>

                <!-- 6 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Card 1: Fyzioterapia pre seniorov -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/senior-physiotherapy.jpg') }}" alt="Fyzioterapia pre seniorov" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pre seniorov</h3>
                        </div>
                    </div>

                    <!-- Card 2: Fyzioterapia pre dospelých -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/adult-physiotherapy.jpg') }}" alt="Fyzioterapia pre dospelých" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pre dospelých</h3>
                        </div>
                    </div>

                    <!-- Card 3: Fyzioterapia pri ochoreniach chrbtice -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/vertebrogenic-physiotherapy.jpg') }}" alt="Fyzioterapia pri ochoreniach chrbtice" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pri ochoreniach chrbtice</h3>
                        </div>
                    </div>

                    <!-- Card 4: Fyzioterapia pri neurologických ochoreniach -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/neurological-physiotherapy.jpg') }}" alt="Fyzioterapia pri neurologických ochoreniach" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pri neurologických ochoreniach</h3>
                        </div>
                    </div>

                    <!-- Card 5: Fyzioterapia pri imobilných pacientoch -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/immobile-physiotherapy.jpg') }}" alt="Fyzioterapia pri imobilných pacientoch" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pri imobilných pacientoch</h3>
                        </div>
                    </div>

                    <!-- Card 6: Fyzioterapia pri poúrazových a pooperačných stavoch -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                        <img src="{{ asset('assets/images/postoperative-physiotherapy.jpg') }}" alt="Fyzioterapia pri poúrazových a pooperačných stavoch" class="w-full h-48 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-lg mb-2">Fyzioterapia pri poúrazových a pooperačných stavoch</h3>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('page.services.index') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                        Všetky služby, ktoré ponúkame
                    </a>
                </div>
            </div>
        </section>

        <!-- Náš tím Section -->
        <section class="px-[5%] py-16 md:py-20 lg:py-24">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black mb-6">Náš tím</h2>
                <p class="text-lg md:text-xl mb-12 text-gray-700 max-w-3xl">
                    Za našimi službami stojí odborne pripravený fyzioterapeut, ktorý pristupuje ku každému klientovi s individuálne, s rešpektom a plným nasadením. Vďaka odbornému vzdelaniu, praxi a ľudskému prístupu vytvárame bezpečné a podporujúce prostredie, v ktorom sa klienti môžu sústrediť na svoje zdravie.
                </p>

                <div class="flex flex-col lg:flex-row gap-8 items-center bg-gray-50 rounded-3xl p-8">
                    <!-- Circular Avatar -->
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/vlado.jpg') }}" alt="Mgr. Vladimír Chovanec" class="w-48 h-48 lg:w-64 lg:h-64 rounded-full object-cover shadow-lg">
                    </div>

                    <!-- Bio Text -->
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold mb-2">Mgr. Vladimír Chovanec</h3>
                        <p class="text-primary-color font-semibold mb-4">Fyzioterapeut</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Bakalárske štúdium absolvoval na Slovenskej zdravotníckej univerzite v Bratislave. Počas štúdia nadobudol praktické skúsenosti a znalosti v rôznych nemocniciach a súkromných zdravotníckych zariadeniach. Magisterské štúdium ukončil na Univerzite sv. Cyrila a Metoda v Trnave, počas ktorého pracoval v súkromnom zariadení.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Tvrdí, že pohyb je medicína a vďaka nemu sa ľudia dokážu vrátiť po zdravotných problémoch do bežného života rýchlejšie. Svoje znalosti naďalej rozvíja, učí sa novým veciam a teší sa ďalším výzvam.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <x-pjcomponents::testimonials.testimonial-3 heading="Recenzie">
            <x-slot:testimonials>
                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Fyzioterapiu som vyhľadala kvôli bolestiam v chrbtici a s prístupom a liečbou som bola veľmi spokojná. Terapeut bol profesionálny, dôkladne vyhodnotil môj stav a prispôsobil terapiu mojim potrebám. Bolesť sa výrazne zmiernila a zlepšila sa aj pohyblivosť."
                    author="Sofia"
                />

                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Počas terapie som sa cítil príjemne, komunikáciu a prístup hodnotím kladne. Pán Vlado mi ukázal cvičenia, ktoré môžem vykonávať doma a nadobudnúť další pokrok. Celkovo hodnotím svoju skúsenosť pozitívne a odporúčam službu každému kto potrebuje pomoc pri rehabilitácii."
                    author="Daniel"
                />

                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Vo Fyziology som dostala termín do 24 hodín a vďaka službe mobilnej fyzioterapie prišiel terapeut priamo ku mne domov. Absolvovala som operáciu kolena a keďže som bola do určitej miery imobilná, tak tento typ služby bol pre mňa veľmi prínosný!"
                    author="Martina"
                />
            </x-slot:testimonials>
        </x-pjcomponents::testimonials.testimonial-3>

        <x-contact-info />
        <x-footer />
    </div>
</x-layout>
