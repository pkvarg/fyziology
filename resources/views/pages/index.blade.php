@section('title', 'Mobilná fyzioterapia- Rehabilitácia priamo u Vás doma')

<x-layout>
    <div class="index">
        <!-- Hero Section -->
        <section class="px-[5%] py-16 md:py-24 lg:py-16 relative overflow-hidden bg-gray-50">
             <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div> 

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 tracking-wider">
                    Vitajte vo <span class="primary-color">Fyziology</span>!
                </h1>
                <p class="text-lg md:text-xl max-w-6xl mx-auto mb-8 text-gray-700">
                    Fyziology je moderná a dynamická firma zameraná na poskytovanie kvalitných fyzioterapeutických služieb a rehabilitácie v Bratislave a okolí. Našim cieľom je pomáhať klientom dosiahnuť ich maximálny potenciál v oblasti pohybu a zdravia, a to pomocou mobilnej fyzioterapie v domácom prostredí klientov.
                </p>

                <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity mt-8">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>
        </section>

        <!-- Why Choose Fyziology Section -->
        <section class="px-[5%] lg:py-0 relative overflow-hidden">
         

            <div class="max-w-6xl mx-auto relative z-10">
        <!-- Gradient Half Circle - left Why choose -->
           <div class="lg:flex absolute top-[4px] -left-[2rem] lg:top-1 lg:left-[6.5rem] w-36 h-36  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
                <div class="flex flex-col gap-8 items-start lg:mx-[15%]">
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-2xl font-black mb-6 ml-8 lg:ml-0">Prečo si vybrať Fyziology?</h2>
                        <p class="text-lg md:text-xl mb-6 text-gray-700 md:ml-8 lg:ml-0 ml-8">
                            Ponúkame fyzioterapiu priamo u Vás doma alebo v našej ambulancii, ktorú zabezpečuje náš tím s odrazom na profesionalitu, ľudský prístup a ochotu, pričom počas celej terapie poskytujeme neustálu podporu a motiváciu.
                        </p>

                        <div class="flex flex-col lg:flex-row gap-8 ml-8 md:ml-0">
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
        <section class="px-[5%] py-12 md:py-20 lg:py-24 bg-gray-50 relative overflow-hidden">
            <!-- Gradient Circle - bottom right -->
            <div class="absolute md:hidden lg:inline -top-[7rem] lg:-top-[11rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
         

            <div class="max-w-6xl mx-auto relative z-10">
           <!-- Gradient Half Circle - left Types of -->
           <div class="lg:flex absolute top-[4px] -left-[2rem] lg:top-1 lg:left-[6.5rem] w-36 h-36  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
                 <div class="flex flex-col gap-8 items-start lg:mx-[15%]">
                    <div class="flex-1">
                        <h2 class="text-2xl font-black mb-6 ml-8 lg:ml-0">Typy fyzioterapie</h2>
                        <p class="text-lg md:text-xl text-gray-700 ml-8 lg:ml-0">
                            Naše fyzioterapie sú určené predovšetkým starším ľuďom s problémami pohybového aparátu, pacientom po operáciách alebo úrazoch, osobám so zníženou mobilitou, pracujúcim s časovým obmedzením, ľuďom trpiacim chronickými bolesťami & neurologickým pacientom, ktorým chceme uľahčiť a individuálne prispôsobiť fyzioterapii.
                        </p>
                    </div>
                </div>

                <!-- 6 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 lg:gap-8 max-w-5xl mx-auto mb-8 mt-8 lg:mt-24">
                    <!-- Fyzioterapia pre seniorov -->
                    <a href="{{ route('page.services.senior-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/fyzio-pre-seniorov.jpg') }}" alt="Fyzioterapia pre seniorov" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pre seniorov</h3>
                    </a>

                    <!-- Fyzioterapia pre dospelých -->
                    <a href="{{ route('page.services.adult-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="Fyzioterapia pre dospelých" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pre dospelých</h3>
                    </a>

                    <!-- Fyzioterapia pri ochoreniach chrbtice -->
                    <a href="{{ route('page.services.vertebrogenic-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/verte.jpg') }}" alt="Fyzioterapia pri ochoreniach chrbtice" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pri ochoreniach chrbtice</h3>
                    </a>

                    <!-- Fyzioterapia pri neurologických ochoreniach -->
                    <a href="{{ route('page.services.neurological-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/neuro.jpg') }}" alt="Fyzioterapia pri neurologických ochoreniach" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pri neurologických ochoreniach</h3>
                    </a>

                    <!-- Fyzioterapia pri imobilných pacientoch -->
                    <a href="{{ route('page.services.immobile-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/imobilny-pacienti.jpg') }}" alt="Fyzioterapia pri imobilných pacientoch" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pri imobilných pacientoch</h3>
                    </a>

                    <!-- Fyzioterapia pri poúrazových a pooperačných stavoch -->
                    <a href="{{ route('page.services.postoperative-physiotherapy') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/pooperacne.jpg') }}" alt="Fyzioterapia pri poúrazových a pooperačných stavoch" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Fyzioterapia pri poúrazových a pooperačných stavoch</h3>
                    </a>
                </div>

                <div class="text-center pt-10 lg:pt-16">
                    <a href="{{ route('page.services.index') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                        Všetky služby, ktoré ponúkame
                    </a>
                </div>
            </div>
        </section>

        

        <!-- Náš tím Section -->
         <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
  <section class="px-[5%] py-16 md:py-20 lg:py-8 relative overflow-hidden">
     

            <div class="max-w-6xl mx-auto relative z-10">
                <div class="flex flex-col gap-8 items-start lg:mx-[12.5%]">
        <!-- Gradient Half Circle - left Our team -->
           <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-[0.2rem] lg:left-[4.25rem] w-36 h-36  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
        </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-black mb-6 ml-8 lg:ml-0">Náš tím</h2>
                        <p class="text-lg md:text-xl text-gray-700 ml-8 lg:ml-0">
                            Za našimi službami stojí odborne pripravený fyzioterapeut, ktorý pristupuje ku každému klientovi s individuálne, s rešpektom a plným nasadením. Vďaka odbornému vzdelaniu, praxi a ľudskému prístupu vytvárame bezpečné a podporujúce prostredie, v ktorom sa klienti môžu sústrediť na svoje zdravie.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-8 items-center bg-gray-50 rounded-3xl lg:p-8 mt-12 lg:mx-[5%]">
                    <!-- Circular Avatar with Gradient Overlay -->
                    <div class="flex-shrink-0 relative">
                        <img src="{{ asset('assets/images/vlado.jpg') }}" alt="Mgr. Vladimír Chovanec" class="w-48 h-48 lg:w-64 lg:h-64 rounded-full object-cover shadow-lg">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-transparent via-blue-500/20 to-cyan-400/30"></div>
                    </div>

                    <!-- Bio Text -->
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold mb-2 text-center lg:text-justify">Mgr. Vladimír Chovanec</h3>
                        <p class="primary-color font-semibold mb-4 text-center lg:text-justify">Fyzioterapeut</p>
                        <p class="text-gray-700 leading-relaxed mb-4 text-center lg:text-justify">
                            Bakalárske štúdium absolvoval na Slovenskej zdravotníckej univerzite v Bratislave. Počas štúdia nadobudol praktické skúsenosti a znalosti v rôznych nemocniciach a súkromných zdravotníckych zariadeniach. Magisterské štúdium ukončil na Univerzite sv. Cyrila a Metoda v Trnave, počas ktorého pracoval v súkromnom zariadení.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-center lg:text-justify">
                            Tvrdí, že pohyb je medicína a vďaka nemu sa ľudia dokážu vrátiť po zdravotných problémoch do bežného života rýchlejšie. Svoje znalosti naďalej rozvíja, učí sa novým veciam a teší sa ďalším výzvam.
                        </p>
                    </div>
                </div>
            </div>
        </section>
         </div>
         
      

        <!-- Recenzie Section -->
         <section class="px-[5%] lg:py-16 md:py-20 py-8 relative overflow-hidden">
       
         

            <div class="max-w-5xl mx-auto relative z-10">
       
                 <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
             <!-- Gradient Half Circle - left -->
            <div class="absolute top-[0.3rem] lg:top-[0.2rem] -left-[2rem] lg:left-[2.25rem] w-32 h-32 lg:w-40 lg:h-40 pointer-events-none opacity-80">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
            </div>
                    <div class="flex-1">
                        <h2 class="text-[1.45rem] lg:text-2xl font-black mb-6 ml-8 lg:ml-0">Recenzie od našich zákazníkov</h2>
                        <p class="text-lg md:text-xl text-gray-700 ml-8 lg:ml-0">
                            Spokojnosť našich klientov je pre nás najlepšou spätnou väzbou a zároveň motiváciou neustále sa zlepšovať. Každá pozitívna skúsenosť, ktorú s nami zdieľate, je dôkazom, že individuálny prístup, odborná starostlivosť a ľudský kontakt majú skutočný význam.
                        </p>
                    </div>
                </div>

                <!-- Reviews Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                    <!-- Review 1: Sofia -->
                    <div class="bg-white rounded-2xl p-6 shadow-md relative">
                        <!-- Quote Icon -->
                        <div class="absolute -top-4 right-6 w-12 h-12 ">
                            <img src="{{ asset('assets/svg/Uvodzovky.svg') }}" alt="" class="w-full h-full object-contain" />
                        </div>

                        <!-- Avatar and Name -->
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-400 to-gray-500 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Sofia</h4>
                                <div class="flex gap-1 overflow-hidden">
                                    <img src="{{ asset('assets/svg/Review.svg') }}" alt="star" class="w-36">
                                </div>
                            </div>
                        </div>

                        <!-- Review Text -->
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Fyzioterapiu som vyhľadala kvôli bolestiam v chrbtici a s prístupom a liečbou som bola veľmi spokojná. Terapeut bol profesionálny, dôkladne vyhodnotil môj stav a prispôsobil terapiu mojim potrebám. Bolesť sa výrazne zmiernila a zlepšila sa aj pohyblivosť.
                        </p>
                    </div>

                    <!-- Review 2: Daniel -->
                    <div class="bg-white rounded-2xl p-6 shadow-md relative">
                        <!-- Quote Icon -->
                         <div class="absolute -top-4 right-6 w-12 h-12 ">
                            <img src="{{ asset('assets/svg/Uvodzovky.svg') }}" alt="" class="w-full h-full object-contain" />
                        </div>

                        <!-- Avatar and Name -->
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-400 to-gray-500 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Daniel</h4>
                                 <div class="flex gap-1 overflow-hidden">
                                    <img src="{{ asset('assets/svg/Review.svg') }}" alt="star" class="w-36">
                                </div>
                            </div>
                        </div>

                        <!-- Review Text -->
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Počas terapie som sa cítil príjemne, komunikáciu a prístup hodnotím kladne. Pán Vlado mi ukázal cvičenia, ktoré môžem vykonávať doma a nadobudnúť další pokrok. Celkovo hodnotím svoju skúsenosť pozitívne a odporúčam službu každému kto potrebuje pomoc pri rehabilitácii.
                        </p>
                    </div>

                    <!-- Review 3: Martina -->
                    <div class="bg-white rounded-2xl p-6 shadow-md relative">
                        <!-- Quote Icon -->
                        <div class="absolute -top-4 right-6 w-12 h-12 ">
                            <img src="{{ asset('assets/svg/Uvodzovky.svg') }}" alt="" class="w-full h-full object-contain" />
                        </div>

                        <!-- Avatar and Name -->
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-400 to-gray-500 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Martina</h4>
                                 <div class="flex gap-1 overflow-hidden">
                                    <img src="{{ asset('assets/svg/Review.svg') }}" alt="star" class="w-36">
                                </div>
                            </div>
                        </div>

                        <!-- Review Text -->
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Vo Fyziology som dostala termín do 24 hodín a vďaka službe mobilnej fyzioterapie prišiel terapeut priamo ku mne domov. Absolvovala som operáciu kolena a keďže som bola do určitej miery imobilná, tak tento typ služby bol pre mňa veľmi prínosný!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <x-footer />
    </div>
</x-layout>
