@section('title', 'Masáže')

<x-layout>
    <div class="massages bg-gray-50 mt-8 overflow-x-hidden">
        <!-- Hero Section with Title -->
        <section class="px-[5%] !pb-8 md:py-20 !pt-16 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute md:hidden lg:inline 2xl:hidden -top-[6rem] lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Masáže
                </h1>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">

 <!-- Hero Image -->
                <div class="mb-12">
                    <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="Masáže" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>


                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Masáž je technika, ktorá zahŕňa manipuláciu s pokožkou, svalmi, šľachami a inými mäkkými tkanivami tela. Využíva sa na uvoľnenie napätia, zmiernenie bolesti, zlepšenie prekrvenia a podporu zdravia. Pomáha pri regenerácii po rôznych športových výkonoch. Vo Fyziology sa venujeme klasickej, reflexnej masáži či mäkkým technikám.
                    </p>
                </div>
            </div>
        </section>

        <!-- Typy masáží Section -->
        <section class="px-[5%] -pt-16 lg:-pt-16 lg:pb-8 relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10 lg:px-[10%]">

                  <div class="max-w-6xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="absolute top-[0.2rem] -left-[2rem] lg:top-[0.2rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>


                <div class="flex flex-col gap-8 items-start">
           <div class="flex-1">
                        <h2 class="text-2xl font-black mb-6 ml-8 lg:ml-0">Typy masáží</h2>
                        <p class="text-lg md:text-xl text-gray-700 ml-8 lg:ml-0">
                            Ponúkame široký výber masážnych techník, ktoré sú prispôsobené vašim individuálnym potrebám.
                        </p>
                    </div>
                </div>

            </div>

        </section>

       

  

        <!-- 3 Massage Cards Section -->
        <section class="py-12 md:py-20 lg:py-4 relative mx-4 lg:mx-0">
   <!-- 3 Massage Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-8 max-w-5xl mx-auto">
                    <!-- Klasická masáž -->
                    <a href="{{ route('page.services.classic-massage') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/masaze-1.jpg') }}" alt="Klasická masáž" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold lg:mb-4 min-h-[3.5rem]">Klasická masáž</h3>
                        <p class="hidden lg:flex text-gray-600 text-md px-4">Klasická masáž je terapeutická metóda, ktorá sa zameriava na zlepšenie zdravia prostredníctvom rôznych techník manipuláciou s mäkkými tkanivami ako sú svaly, väzy a šľachy.</p>
                    </a>

                    <!-- Reflexná masáž -->
                    <a href="{{ route('page.services.reflex-massage') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/masaze-2.jpg') }}" alt="Reflexná masáž" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold lg:mb-4 min-h-[3.5rem]">Reflexná masáž</h3>
                        <p class="hidden lg:flex text-gray-600 text-md px-4">Reflexnú masáž zaradzujeme do skupiny liečebných metód s cieľom odstrániť chorobné zmeny na koži a v tkanivách.</p>
                    </a>

                    <!-- Mäkké techniky -->
                    <a href="{{ route('page.services.soft-techniques') }}" class="text-center flex flex-col group cursor-pointer">
                        <div class="mb-6 overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('assets/images/masaze-3.jpg') }}" alt="Mäkké techniky" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary-color/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <h3 class="text-xl font-bold lg:mb-4 min-h-[3.5rem]">Mäkké techniky</h3>
                        <p class="hidden lg:flex text-gray-600 text-md px-4">Mäkké techniky sú manuálna terapia, pri ktorej najskôr uvoľňujeme kožu, podkožie a následne účinky prenikajú do hlbšie úložených štruktúr, a to fascie a svalu.</p>
                    </a>
                </div>
                     <!-- Gradient Circle - bottom right -->
       
            <div class="absolute top-[55rem] lg:top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

        </section>

   
    

       
   
        

   


  <!-- CTA Section -->
           
        <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 px-[5%] lg:px-0 py-16">
    
            <!-- Gradient Half Circle CTA - left -->
            <div class="lg:flex absolute top-[4.3rem] -left-[2rem] lg:top-[4.25rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
            </div>

            <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
            <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0">
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
