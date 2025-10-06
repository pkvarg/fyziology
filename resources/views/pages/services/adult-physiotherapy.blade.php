@section('title', 'Fyzioterapia pre dospelých')

<x-layout>

    <div class="senior-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pre dospelých">
            <x-slot:image>
                <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="fyzioterapia pre seniorov">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Je dôležitou súčasťou rehabilitácie a podpory zdravia. Zameriava sa na liečbu a prevenciu rôznych pohybových porúch, bolesti a funkčných obmedzení. Oblasti, na ktoré sa pri fyzioterapii pre dospelých sústreďujeme:</p>
                <br>
                <p><span class="font-bold primary-color">Rehabilitácia po úrazoch:</span> Pomoc pri zotavovaní sa z úrazov, operácií alebo zranení, ako sú zlomeniny, podvrtnutia alebo natiahnutia.</p>
                <br>
                <p><span class="font-bold primary-color">Rehabilitácia po operáciách:</span> Postupné zlepšovanie rozsahu pohyblivosti a sily po operáciách, ako sú výmeny kĺbov alebo operácie chrbtice.</p>
                <br>
                <p><span class="font-bold primary-color">Chronické bolesti:</span> Riešenie problémov ako sú bolesti chrbtice alebo kĺbov. Fyzioterapeuti používajú rôzne techniky na zmiernenie bolesti a zlepšenie pohyblivosti.</p>
                <br>
                <p><span class="font-bold primary-color">Zlepšenie funkčnosti:</span> Pomoc pacientom pri obnove pohybových schopností a funkčnosti, čo je obzvlášť dôležité pre starších dospelých alebo ľudí s chronickými ochoreniami.</p>
                <br>
                <p><span class="font-bold primary-color">Prevencia:</span> Vzdelávanie o správnej ergonómii, cvičeniach a životnom štýle na prevenciu zranení a ochorení.</p>
                <br>
                <p>Fyzioterapia sa môže vykonávať rôznymi spôsobmi, vrátane manuálnych techník, cvičení, elektroterapie alebo použitia terapeutických pomôcok.</p>
            </x-slot:content>
        </x-pjcomponents::long-form-contents.content-30>

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