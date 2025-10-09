@section('title', 'Mobilná a ambulantná fyzioterapia')

<x-layout>
    <div class="mobile-physiotherapy bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] py-16 md:py-20 lg:py-16 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute md:hidden lg:inline 2xl:hidden -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Mobilná a ambulantná fyzioterapia
                </h1>
            </div>
        </section>

        <!-- Mobilná fyzioterapia Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">
           

                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-8 text-center ">Mobilná fyzioterapia</h2>

                <!-- Hero Image -->
                <div class="mb-8 mt-16 lg:mt-8">
                    <img src="{{ asset('assets/images/mobilna-fyzioterapia.jpg') }}" alt="Mobilná fyzioterapia" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>
                

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Je moderný prístup poskytovania fyzioterapeutickej starostlivosti, ktorý prináša profesionálnu pomoc priamo k pacientovi, bez nutnosti návštevy fyzioterapeutickej ambulancie.
                    </p>
                    <p>
                        Tento typ fyzioterapie sa vykonáva priamo v bydlisku pacientov.
                    </p>
                </div>

                <!-- Výhody mobilnej fyzioterapie -->
                <div class="text-left space-y-4 mb-8 lg:px-[10%] relative">

  <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] -lg:top-[40rem] lg:left-[3.25rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>
                    <h3 class="text-2xl md:text-xl font-black mb-6 ml-8 lg:ml-0 ">Výhody mobilnej fyzioterapie</h3>

                    <p class="!mt-[1.5rem] lg:mt-0 ml-[2.25rem] lg:ml-0">
                        <span class="font-bold primary-color">Pohodlie a flexibilita:</span> Výhodou je, že pacienti nemusia cestovať mimo bydliska a hlavne pre tých, ktorí majú problémy s mobilitou, alebo pre starších ľudí a iných s chronickými zdravotnými problémami.
                    </p>

                    <p class="ml-[2.25rem] lg:ml-0">
                        <span class="font-bold primary-color">Individuálny prístup:</span> Fyzioterapeut môže prispôsobiť cvičenia a terapiu priamo prostrediu, v ktorom pacient žije. To umožňuje lepšiu adaptáciu na reálny život a každodenné aktivity pacienta.
                    </p>

                    
                    <p class="ml-[2.25rem] lg:ml-0">
                        <span class="font-bold primary-color">Väčšia motivácia:</span> Pacienti sa často cítia pohodlnejšie a menej v strese v domácom prostredí, čo môže zlepšiť ich motiváciu k pravidelnému cvičeniu.
                    </p>

                   
                    <p class="ml-[2.25rem] lg:ml-0">
                        <span class="font-bold primary-color">Rýchlejšia rekonvalescencia:</span> Vďaka pravidelným návštevám môže fyzioterapeut monitorovať pokrok a upravovať terapiu podľa aktuálneho stavu pacienta.
                    </p>

                    <p class="font-bold primary-color mt-8 ml-[2.25rem] lg:ml-0">Kto môže využiť mobilnú fyzioterapiu?</p>
                    <ul class="list-none space-y-2 ml-[2.25rem] lg:ml-0">
                        <li>- starší ľudia s problémami pohybového aparátu</li>
                        <li>- pacienti po operáciách alebo úrazoch</li>
                        <li>- osoby so zníženou mobilitou</li>
                        <li>- pracujúci ľudia s časovým obmedzením</li>
                        <li>- ľudia s chronickými bolesťami</li>
                        <li>- neurologickí pacienti</li>
                    </ul>
                </div>
            </div>
        </section>

   

        <!-- Ambulantná fyzioterapia Section -->
        <section class="px-[5%] py-8 lg:py-16 relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10 lg:px-[10%]">
          

                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-8 text-center ">Ambulantná fyzioterapia</h2>

                <!-- Ambulance Image -->
                <div class="mb-8 mt-16 lg:mt-8">
                    <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="Ambulantná fyzioterapia" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Ambulance Description -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Je typ fyzioterapie, ktorý prebieha v rámci zdravotníckeho zariadenia, najčastejšie v ambulanciách alebo fyzioterapeutických centrách. Liečba zvyčajne prebieha v intervaloch niekoľkých dní alebo týždňov, v závislosti od problému pacienta.
                    </p>
                </div>

                <!-- Cieľ ambulantnej fyzioterapie -->
                <div class="text-left space-y-4 relative">
            <!-- Gradient Half Circle - left Goal of -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-[0.25rem] lg:-left-[4rem] w-40 h-40 pointer-events-none ">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>
                    <h3 class="text-2xl md:text-xl font-black mb-6 ml-8 lg:ml-0">Cieľ ambulantnej fyzioterapie</h3>

                    <p class="!mt-[1.5rem] lg:mt-0 ml-8 lg:ml-0">
                        Cieľom ambulantnej fyzioterapie je zlepšiť alebo obnoviť pohybové schopnosti, zmierniť bolesť, podporiť regeneráciu a zvýšiť kvalitu života. Využíva rôzne metódy ako manuálna terapia, cvičenia, masáže.
                    </p>

                    <p class="ml-8 lg:ml-0">
                        Tento typ fyzioterapie je určený pre pacientov, ktorí nepotrebujú každodennú starostlivosť alebo sú schopní dochádzať do ambulancie. Môže ísť o problémy ako sú bolesti v oblasti chrbta, úrazy pohybového aparátu, neurologické poruchy alebo rehabilitácia po chirurgických zákrokoch.
                    </p>
                </div>
                  <div class="max-w-6xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-[0.25rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>
    

                <div class="flex flex-col gap-8 items-start mt-16">
           <div class="flex-1">
                        <h2 class="text-2xl md:text-xl font-black mb-6 ml-8 lg:ml-0">Typy fyzioterapie</h2>
                        <p class="text-md md:text-md text-gray-700 ml-8 lg:ml-0">
                            Naše fyzioterapie sú určené predovšetkým starším ľuďom s problémami pohybového aparátu, pacientom po operáciách alebo úrazoch, osobám so zníženou mobilitou, pracujúcim s časovým obmedzením, ľuďom trpiacim chronickými bolesťami & neurologickým pacientom, ktorým chceme uľahčiť a individuálne prispôsobiť fyzioterapiu.
                        </p>
                    </div>
                </div>
        
            </div>
     <!-- Gradient Circle - mobile only right side -->
           <div class="absolute top-[61rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden 2xl:hidden">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>
        </section>

     

        <!-- 6 Service Cards Section -->
        <section class="py-12 md:py-20 lg:py-4 relative overflow-hidden mx-4 lg:mx-0">
                     <!-- Gradient Circle - right side -->
           <div class="absolute hidden lg:inline 2xl:hidden top-[0rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>
          
               <!-- 6 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-8 max-w-5xl mx-auto">
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

        <!-- Fotogaléria Section -->
        <section class="px-[5%] py-12 md:py-20 lg:py-16">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-8 text-center">Fotogaléria</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <img src="{{ asset('assets/images/photo-5.jpg') }}" alt="photo 1" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/photo-10.jpg') }}" alt="photo 2" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/mobilna-4.jpg') }}" alt="photo 3" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/mobilna-1.jpg') }}" alt="photo 4" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/mobilna-2.jpg') }}" alt="photo 5" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/photo-1.jpg') }}" alt="photo 6" class="w-full h-full rounded-3xl shadow-lg">
                </div>
                 <h2 class="text-3xl md:text-4xl lg:text-3xl font-black pt-8 text-center">Naše priestory</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mt-8">
                       
                    <img src="{{ asset('assets/images/photo-3.jpg') }}" alt="photo 3" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/photo-4.jpg') }}" alt="photo 4" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/photo-7.jpg') }}" alt="photo 7" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/photo-8.jpg') }}" alt="photo 8" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/bankovanie-3.jpg') }}" alt="photo - 3 - bankovanie" class="w-full h-full rounded-3xl shadow-lg">
                    <img src="{{ asset('assets/images/amb-1.jpg') }}" alt="photo 1" class="w-full h-full rounded-3xl shadow-lg">
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 px-[5%] lg:px-0 py-16">
            <!-- Gradient Half Circle CTA - left -->
            <div class="lg:flex absolute top-[4.3rem] -left-[2rem] lg:top-[4.25rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
            </div>

            <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
            <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0 lg:-mt-[0.2rem]">
                Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
            </p>
            <div class="flex lg:justify-start justify-center">
            <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:-ml-16 mt-4">
                Vstupná konzultácia ZDARMA
            </a>
        </div>
        </div>

     

        <x-footer />
    </div>
</x-layout>
