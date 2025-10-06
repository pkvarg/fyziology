@section('title', 'Bankovanie')

<x-layout>

    <div class="banking">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Bankovanie"
            text="Bankovanie je terapeutická technika, ktorá sa používa na zlepšenie prietoku krvi, uvoľnenie svalového napätia a zmiernenie bolesti. V súvislosti s fyzioterapiou sa bankovanie často používa ako doplnková metóda pri liečbe rôznych muskuloskeletálnych problémov, ako sú bolesti chrbtice, svalov, zápaly a iné pohybové poruchy."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="bankovanie">
            </x-slot:image>

            <x-slot:tags>
                <x-pjcomponents::tag label="25 min./ 25 €" class="bg-primary-color rounded" />
            </x-slot:tags>
        </x-pjcomponents::portfolio-headers.header-2>

        <x-pjcomponents::long-form-contents.content-7 heading="Ako funguje bankovanie?">
            <x-slot:text>
                <p>Pri bankovaní sa na pokožku umiestnia špeciálne sklenené alebo plastové "banky", ktoré sa nasajú na pokožku pomocou tepla alebo vákuovej pumpy. Tento proces vytvára podtlak, ktorý má niekoľko účinkov:</p>
                <br>
                <p><span class="font-bold primary-color">Zvýšenie prietoku krvi:</span> Podtlak z banky zlepšuje cirkuláciu krvi v danom mieste, čo môže pomôcť pri regenerácii tkanív.</p>
                <br>
                <p><span class="font-bold primary-color">Uvoľnenie svalov:</span> Pomáha zmierniť svalové napätie a bolestivosť tým, že podporí uvoľnenie svalových tkanív.</p>
                <br>
                <p><span class="font-bold primary-color">Zmiernene bolesti:</span> Môže pomôcť pri liečbe bolesti v danom segmente.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie pohyblivosti:</span> Uvoľnenie svalového napätia môže viesť k zlepšeniu rozsahu pohybu, čo je dôležité pri rehabilitácii po zraneniach alebo operáciách.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie regenerácie tkanív</span></p>
                <br>
                <p><span class="font-bold primary-color">Pozitívne:</span> pôsobí na lymfatický, imunitný a nervový systém.</p>
                <br>
                <p><span class="font-bold primary-color">Pozitívne:</span> ovplyvňuje vnútorné orgány (obličky ,žalúdok, slezinu, pečeň, žlčník, vnútorné orgány).</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšuje:</span> krvný obeh, čistí krv a pozitívne vplýva na činnosť srdca.</p>
                <br>
                <p><span class="font-bold primary-color">Pomáha:</span> pri reumatizme či anémii.</p>
                <br>
                <h4 class="font-bold primary-color">Kontraindikácie:</h4>
                <ul>
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
            </x-slot:text>
        </x-pjcomponents::long-form-contents.content-7>

        <x-pjcomponents::galleries.gallery-3 heading="Fotogaléria">
            <x-slot:images>
                <img src="{{ asset('assets/images/bankovanie-1.jpg') }}" alt="photo 1">
                <img src="{{ asset('assets/images/bankovanie-8.jpg') }}" alt="photo 8">
                <img src="{{ asset('assets/images/bankovanie-7.jpg') }}" alt="photo 7">
            </x-slot:images>
        </x-pjcomponents::galleries.gallery-3>

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