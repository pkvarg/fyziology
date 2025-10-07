@section('title', 'Ambulantná fyzioterapia')

<x-layout>
    <div class="ambulatory-physiotherapy bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] py-16 md:py-20 lg:py-16 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Ambulantná fyzioterapia
                </h1>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">


                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-8 text-center ">Ambulantná fyzioterapia</h2>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
                    <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="Ambulantná fyzioterapia" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>


                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Je typ fyzioterapie, ktorý prebieha v rámci zdravotníckeho zariadenia, napríklad v ambulanciách alebo fyzioterapeutických klinikách, kde pacient dochádza na jednotlivé terapie. Liečba zvyčajne prebieha v intervaloch niekoľkých dní alebo týždňov, v závislosti od problému pacienta.
                    </p>
                </div>

                <!-- Content -->
                <div class="text-left space-y-4 mb-8 lg:px-[10%] relative">
                         <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] -lg:top-[40rem] lg:-left-[1rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-full h-20 lg:h-full object-contain" />
                </div>
                    <h3 class="text-2xl md:text-3xl font-black mb-6 ml-8 lg:ml-0 ">Cieľ ambulantnej fyzioterapie</h3>

                    <p class="mt-64 lg:mt-0">
                        <span class="font-bold primary-color">Cieľom ambulantnej fyzioterapie</span> je zlepšiť alebo obnoviť pohybové schopnosti, zmierniť bolesť, podporiť regeneráciu a zvýšiť kvalitu života. Využívajú sa rôzne metódy ako manuálna terapia, cvičenia, masáže.
                    </p>

                    <p>
                        Tento typ fyzioterapie je určený pre pacientov, ktorí nepotrebujú každodennú starostlivosť, ale majú zdravotné ťažkosti, ktoré si vyžadujú odbornú pomoc. Môže ísť o problémy, ako sú bolesti v oblasti chrbta, úrazy pohybového aparátu, neurologické poruchy alebo rehabilitácia po chirurgických zákrokoch.
                    </p>
                </div>
            </div>
        </section>



        <!-- Typy fyzioterapie Section -->
        <section class="px-[5%] py-8 lg:py-16 relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10 lg:px-[10%]">

                  <div class="max-w-6xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] lg:top-0 lg:-left-[8rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-full h-20 lg:h-full object-contain" />
                </div>


                <div class="flex flex-col gap-8 items-start mt-16">
           <div class="flex-1">
                        <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-6 ml-8 lg:ml-0">Typy fyzioterapie</h2>
                        <p class="text-lg md:text-xl text-gray-700 ml-8 lg:ml-0">
                            Naše fyzioterapie sú určené predovšetkým starším ľuďom s problémami pohybového aparátu, pacientom po operáciách alebo úrazoch, osobám so zníženou mobilitou, pracujúcim s časovým obmedzením, ľuďom trpiacim chronickými bolesťami & neurologickým pacientom, ktorým chceme uľahčiť a individuálne prispôsobiť fyzioterapiu.
                        </p>
                    </div>
                </div>

            </div>
     <!-- Gradient Circle - mobile only right side -->
           <div class="absolute md:hidden top-[61rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>
        </section>

        <!-- 6 Service Cards Section -->
        <section class="py-12 md:py-20 lg:py-4 relative overflow-hidden mx-4 lg:mx-0">
                     <!-- Gradient Circle - right side -->
           <div class="absolute hidden lg:inline top-[0rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
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

        <!-- CTA Section -->
        <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 px-[5%] lg:px-0 py-16">
            <!-- Gradient Half Circle CTA - left -->
            <div class="lg:flex absolute top-[4rem] -left-[2rem] lg:top-[3.6rem] lg:-left-[8rem] w-40 h-40 pointer-events-none px-[5%]">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-full h-20 lg:h-full object-contain" />
            </div>

            <h2 class="text-3xl md:text-3xl lg:text-3xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
            <p class="text-lg md:text-lg mb-8 md:mb-10 max-w-3xl text-gray-700">
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
