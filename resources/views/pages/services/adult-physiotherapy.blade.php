@section('title', 'Fyzioterapia pre dospelých')

<x-layout>
    <div class="adult-physiotherapy bg-gray-50">
        <!-- Hero Section with Gradient Circle -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
           <!-- Gradient Circle - left side -->
            <div class="absolute hidden lg:inline -top-32 -left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-center tracking-wider">
                    Fyzioterapia pre dospelých
                </h1>

                <!-- Hero Image -->
                <div class="mb-12 mt-16">
                    <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="Fyzioterapia pre dospelých" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg md:text-xl text-gray-700 text-center">
                    <p>
                        Je dôležitou súčasťou rehabilitácie a podpory zdravia. Zameriava sa na liečbu a prevenciu rôznych pohybových porúch, bolesti a funkčných obmedzení. Oblasti, na ktoré sa pri fyzioterapii pre dospelých sústreďujeme:
                    </p>
                </div>
            </div>
        </section>

        <!-- Key Aspects Section with Gradient Circle -->
        <section class="px-[5%] py-8 lg:py-8 relative">
              <!-- Gradient Circle - right side -->
            <div class="absolute hidden lg:inline -top-[12rem] -right-[24rem] w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>


            <div class="max-w-4xl mx-auto relative z-10">
                   <!-- Gradient Half Circle - left -->
            <div class="absolute hidden lg:inline top-[0rem] -left-[7rem] w-24 h-24 lg:w-32 lg:h-32 pointer-events-none opacity-60">
                <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
                <h2 class="text-3xl md:text-4xl lg:text-3xl font-black mb-4">Fyzioterapia pre dospelých</h2>

                <div class="space-y-4 text-lg text-gray-700">
                    <p>
                        <span class="font-bold primary-color">Rehabilitácia po úrazoch:</span> Pomoc pri zotavovaní sa z úrazov, operácií alebo zranení, ako sú zlomeniny, podvrtnutia alebo natiahnutia.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Rehabilitácia po operáciách:</span> Postupné zlepšovanie rozsahu pohyblivosti a sily po operáciách, ako sú výmeny kĺbov alebo operácie chrbtice.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Chronické bolesti:</span> Riešenie problémov ako sú bolesti chrbtice alebo kĺbov. Fyzioterapeuti používajú rôzne techniky na zmiernenie bolesti a zlepšenie pohyblivosti.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Zlepšenie funkčnosti:</span> Pomoc pacientom pri obnove pohybových schopností a funkčnosti, čo je obzvlášť dôležité pre starších dospelých alebo ľudí s chronickými ochoreniami.
                    </p>

                    <p>
                        <span class="font-bold primary-color">Prevencia:</span> Vzdelávanie o správnej ergonómii, cvičeniach a životnom štýle na prevenciu zranení a ochorení.
                    </p>

                    <p>
                        Fyzioterapia sa môže vykonávať rôznymi spôsobmi, vrátane manuálnych techník, cvičení, elektroterapie alebo použitia terapeutických pomôcok.
                    </p>
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
            
            </div>
               <div class="flex lg:justify-start
            justify-center">
   <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:ml-[15rem] mt-4">
                    Vstupná konzultácia ZDARMA
                </a>
            </div>

        <x-footer />
    </div>
</x-layout>
