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
        <section class="px-[5%] lg:py-0 relative overflow-hidden">
         

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
        <section class="px-[5%] py-12 md:py-20 lg:py-24 bg-gray-50 relative">
                <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-64 -right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
         

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
            <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-8 left-[2rem] w-32 h-32 lg:w-40 lg:h-40 pointer-events-none opacity-80">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
                    <div class="flex-1">
                        <h2 class="text-3xl md:text-4xl lg:text-2xl font-black mb-6">Náš tím</h2>
                        <p class="text-lg md:text-xl text-gray-700">
                            Za našimi službami stojí odborne pripravený fyzioterapeut, ktorý pristupuje ku každému klientovi s individuálne, s rešpektom a plným nasadením. Vďaka odbornému vzdelaniu, praxi a ľudskému prístupu vytvárame bezpečné a podporujúce prostredie, v ktorom sa klienti môžu sústrediť na svoje zdravie.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-8 items-center bg-gray-50 rounded-3xl lg:p-8 mt-12">
                    <!-- Circular Avatar with Gradient Overlay -->
                    <div class="flex-shrink-0 relative">
                        <img src="{{ asset('assets/images/vlado.jpg') }}" alt="Mgr. Vladimír Chovanec" class="w-48 h-48 lg:w-64 lg:h-64 rounded-full object-cover shadow-lg">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-transparent via-blue-500/20 to-cyan-400/30"></div>
                    </div>

                    <!-- Bio Text -->
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold mb-2">Mgr. Vladimír Chovanec</h3>
                        <p class="primary-color font-semibold mb-4">Fyzioterapeut</p>
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
         </div>
         
      

        <!-- Recenzie Section -->
         <section class="px-[5%] lg:py-16 md:py-20 lg:py-8 relative overflow-hidden">
                        <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-[2rem] left-[10rem] w-32 h-32 lg:w-40 lg:h-40 pointer-events-none opacity-80">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
         

            <div class="max-w-6xl mx-auto relative z-10">
       
                 <div class="flex flex-col gap-8 items-start lg:mx-[10%]">
                    <div class="flex-1">
                        <h2 class="text-3xl md:text-4xl lg:text-2xl font-black mb-6">Recenzie od našich zákazníkov</h2>
                        <p class="text-lg md:text-xl text-gray-700">
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

        <!-- Contact & Footer Section - Blue Background -->
        <section class="bg-primary-color text-white px-[5%] py-16 md:py-20 lg:py-24">
            <div class="max-w-6xl mx-auto">
                <!-- Logo -->
                <div class="mb-12">
                    <a href="{{ route('page.index') }}" class="flex items-center text-2xl uppercase gap-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="h-16 w-auto brightness-0 invert" />
                        <div>
                            <span class="block font-normal
                            text-lg text-[#c5eaf4]" style=" font-family: 'Coustard', serif; letter-spacing: 5px;">FYZIO</span>
                            <span class="block text-[#c5eaf4] font-light -mt-2 ml-[3.2rem]" style="font-family: 'Charmonman', serif; text-transform: lowercase;">logy</span>
                        </div>
                    </a>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Left Column - Contact Info -->
                    <div>
                        <h2 class="text-3xl font-bold mb-8">Kontaktujte nás</h2>

                        <!-- Email -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/Email icon.svg') }}" alt="Email" class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Email</p>
                                <a href="mailto:info@fyziology.sk" class="text-lg hover:text-cyan-300 transition-colors text-[#c5eaf4]">info@fyziology.sk</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/Phone icon.svg') }}" alt="Phone" class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Telefón</p>
                                <a href="tel:+421918378781" class="text-lg hover:text-cyan-300 transition-colors text-[#c5eaf4]">+421 918 378 781</a>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/Pin icon.svg') }}" alt="Location" class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="text-sm opacity-80 ">Ambulancia</p>
                                <a href="https://maps.app.goo.gl/Kc8RaixEGxa46mCq6" class="text-lg text-[#c5eaf4] hover:text-cyan-300 transition-colors flex flex-col gap-0">
                                    <span>
 Námestie Martina Benku 12,
                                    </span>
                                   
                                    <span>
 811 07 Bratislava, Staré Mesto
                                    </span>
                                   
                                    <span class="text-sm opacity-80">(obchodná pasáž, prízemie)</span>
                                </a>
                            </div>
                        </div>

                        <!-- Company Info -->
                        <div class="flex items-start gap-4 mb-8">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/Card icon.svg') }}" alt="ID Card" class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Údaje</p>
                                <p class="text-lg text-[#c5eaf4] flex flex-col gap-0">
                                    <span>IČO: 56641605</span>
                                    <span>DIČ: 1127841165</span>
                                  
                                   
                                </p>
                            </div>
                        </div>

                        <!-- Opening Hours -->
                        <div class="pt-6 ">
                            <h3 class="text-2xl font-bold mb-1">Otváracie hodiny</h3>
                            <p class="text-lg text-[#c5eaf4]">Pon-Pia: 8:00 - 12:00 a 13:00 - 16:00</p>
                        </div>
                    </div>

                    <!-- Right Column - Map -->
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <iframe
                            title="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.7753978195897!2d17.120386276987766!3d48.15313517124525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89496c705da3%3A0x99c0081f3ae23f1c!2sN%C3%A1mestie%20Martina%20Benku%206302%2F12%2C%20811%2007%20Bratislava!5e0!3m2!1ssk!2ssk!4v1736283431680!5m2!1ssk!2ssk"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full min-h-[400px]"
                        ></iframe>
                    </div>
                </div>

                <!-- Footer Links -->
                <div class="mt-16 pt-8 border-t border-white/20">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#c5eaf4]">
                        <p>©2025 Fyziology</p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="{{ route('page.terms') }}" class="hover:text-cyan-300 transition-colors">Všeobecné obchodné podmienky</a>
                            <a href="{{ route('page.complaints') }}" class="hover:text-cyan-300 transition-colors">Reklamačné podmienky</a>
                            <a href="{{ route('page.privacy') }}" class="hover:text-cyan-300 transition-colors">Ochrana osobných údajov</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
