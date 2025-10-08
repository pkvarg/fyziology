@section('title', 'Bankovanie')

<x-layout>
    <div class="banking bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] pt-16 pb-8 md:py-20 lg:pt-16 lg:pb-8 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Bankovanie
                </h1>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
         <div class="max-w-6xl mx-auto relative z-10">
 <!-- Hero Image -->
                <div class="mb-12">
                    <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="Bankovanie" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>


                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Bankovanie je terapeutická technika, ktorá sa používa na zlepšenie prietoku krvi, uvoľnenie svalového napätia a zmiernenie bolesti. V súvislosti s fyzioterapiou sa bankovanie často používa ako doplnková metóda pri liečbe rôznych muskuloskeletálnych problémov, ako sú bolesti chrbtice, svalov, zápaly a iné pohybové poruchy.
                    </p>
                </div>

                <!-- Content -->
                <div class="text-left space-y-4 mb-8 lg:px-[10%] relative">
                         <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.2rem] -left-[2rem] -lg:top-[40rem] lg:-left-[1rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-full h-20 lg:h-full object-contain" />
                </div>
                    <h3 class="text-2xl md:text-3xl font-black mb-6 ml-8 lg:ml-0">Ako funguje bankovanie?</h3>

                    <p class="!mt-6 lg:mt-0 ml-8 lg:ml-0">
                        Pri bankovaní sa na pokožku umiestnia špeciálne sklenené alebo plastové "banky", ktoré sa nasajú na pokožku pomocou tepla alebo vákuovej pumpy. Tento proces vytvára podtlak, ktorý má niekoľko účinkov:
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Zvýšenie prietoku krvi:</span> Podtlak z banky zlepšuje cirkuláciu krvi v danom mieste, čo môže pomôcť pri regenerácii tkanív.
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Uvoľnenie svalov:</span> Pomáha zmierniť svalové napätie a bolestivosť tým, že podporí uvoľnenie svalových tkanív.
                    </p>

                     <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Zmiernene bolesti:</span> Môže pomôcť pri liečbe bolesti v danom segmente.
                    </p>

                      <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Zlepšenie pohyblivosti:</span> Uvoľnenie svalového napätia môže viesť k zlepšeniu rozsahu pohybu, čo je dôležité pri rehabilitácii po zraneniach alebo operáciách.
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Zlepšenie regenerácie tkanív</span>
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Pozitívne:</span> pôsobí na lymfatický, imunitný a nervový systém.
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Pozitívne:</span> ovplyvňuje vnútorné orgány (obličky ,žalúdok, slezinu, pečeň, žlčník, vnútorné orgány).
                    </p>

                    <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Zlepšuje:</span> krvný obeh, čistí krv a pozitívne vplýva na činnosť srdca.
                    </p>

                     <p class="ml-8 lg:ml-0">
                        <span class="font-bold primary-color">Pomáha:</span> pri reumatizme či anémii.
                    </p>

                    <h4 class="font-bold primary-color mt-8 ml-8 lg:ml-0">Kontraindikácie:</h4>
                    <ul class="list-none space-y-2 ml-8 lg:ml-0">
                        <li>- tehotenstvo</li>
                        <li>- čerstvé jazvy po operáciách</li>
                        <li>- aneuryzmy</li>
                        <li>- hlboká žilová trombóza</li>
                        <li>- psoriáza</li>
                        <li>- pásový opar</li>
                        <li>- kožné lézie a veľké červené znamienka</li>
                        <li>- akútne hematómy</li>
                        <li>- rakovina, zhubné nádory</li>
                        <li>- a ďalšie</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Fotogaléria Section -->
        <section class="px-[5%] py-12 md:py-20 lg:py-16 relative overflow-x-hidden">
                <!-- Gradient Circle - desktop only bottom right near Gallery -->
    <div class="absolute hidden lg:inline -top-[5rem] lg:-top-[6rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-8 text-center">Fotogaléria</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <img src="{{ asset('assets/images/bankovanie-1.jpg') }}" alt="photo 1" class="w-full h-64 object-cover rounded-3xl shadow-lg cursor-pointer hover:opacity-90 transition-opacity" onclick="openLightbox(this.src)">
                    <img src="{{ asset('assets/images/bankovanie-8.jpg') }}" alt="photo 8" class="w-full h-64 object-cover rounded-3xl shadow-lg cursor-pointer hover:opacity-90 transition-opacity" onclick="openLightbox(this.src)">
                    <img src="{{ asset('assets/images/bankovanie-7.jpg') }}" alt="photo 7" class="w-full h-64 object-cover rounded-3xl shadow-lg cursor-pointer hover:opacity-90 transition-opacity" onclick="openLightbox(this.src)">
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <!-- <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden items-center justify-center p-4" style="z-index: 9999;">
            <button id="close-btn" class="absolute top-4 right-4 md:top-8 md:right-8 text-white font-bold hover:text-gray-300 transition-colors w-16 h-16 md:w-20 md:h-20 flex items-center justify-center leading-none cursor-pointer bg-red-600 hover:bg-red-700 rounded-full" style="z-index: 10000; font-size: 3rem;">×</button>
            <img id="lightbox-img" src="" alt="Full size" class="max-w-full max-h-full object-contain rounded-lg">
        </div>

        <script>
            function openLightbox(src) {
                const lightbox = document.getElementById('lightbox');
                lightbox.style.display = 'flex';
                document.getElementById('lightbox-img').src = src;
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                const lightbox = document.getElementById('lightbox');
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Close on X button click
            document.getElementById('close-btn').addEventListener('click', function(e) {
                e.stopPropagation();
                closeLightbox();
            });

            // Close on background click
            document.getElementById('lightbox').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeLightbox();
                }
            });

            // Close lightbox on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeLightbox();
                }
            });
        </script> -->

        <!-- CTA Section -->
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
   
</x-layout>
