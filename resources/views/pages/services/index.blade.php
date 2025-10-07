@section('title', 'Služby')

<x-layout xmlns:x-slot="http://www.w3.org/1999/html">

    <div class="services relative overflow-hidden">
        {{-- <x-pjcomponents::portfolio-headers.header-2
            heading="Naše služby"
            text="Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/sluzby.jpg') }}" alt="sluzby">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2> --}}

        <div class="px-[5%] py-16 md:py-24 lg:py-28 text-center relative">
            <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div> 

            <h1 class="text-4xl md:text-6xl font-black mb-5 md:mb-6 relative z-10">Naše služby</h1>
            <p class="max-w-3xl mx-auto md:text-lg relative z-10">Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie.</p>
        </div>

       

        <div class="px-[5%] pb-16 md:pb-24 lg:pb-28">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Mobilná a ambulantná fyzioterapia -->
                <div class="text-center flex flex-col">
                    <div class="mb-6 overflow-hidden rounded-2xl group relative">
                        <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="Mobilná a ambulantná fyzioterapia" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Mobilná a ambulantná<br>fyzioterapia</h3>
                    <a href="{{ route('page.services.ambulatory-physiotherapy') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>

                <!-- Bankovanie -->
                <div class="text-center flex flex-col">
                    <div class="mb-6 overflow-hidden rounded-2xl group relative">
                        <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="Bankovanie" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Bankovanie</h3>
                    <a href="{{ route('page.services.banking') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>

                <!-- Masáže -->
                <div class="text-center flex flex-col">
                    <div class="mb-6 overflow-hidden rounded-2xl group relative">
                        <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="Masáže" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Masáže</h3>
                    <a href="{{ route('page.services.massages') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>
            </div>
        </div>

        <section class="px-[5%] py-16 md:py-24 lg:py-16 relative">
              <!-- Gradient Circle -  bottom right near CTA -->
         <div class="absolute md:hidden lg:inline -top-[4rem] lg:-top-[12rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>

            <div class="container mx-auto w-full max-w-4xl relative z-10">
          

      <!-- Gradient Half Circle - bottom leftt -->
        <div class="lg:flex absolute top-[0rem] -left-[3rem] lg:top-0 lg:-left-[8rem] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-32 lg:w-full h-32 lg:h-full object-contain" />
        </div>

                <h2 class="text-4xl md:text-6xl lg:text-4xl font-black mb-6 md:mb-8 ml-14 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-xl mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
            
            </div>
          
        </section>
  <div class="flex lg:justify-start
            justify-center">
   <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:ml-[15rem] -mt-8">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>

        
        <x-footer />
    </div>

</x-layout>