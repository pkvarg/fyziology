@section('title', 'Mobilná fyzioterapia')

<x-layout>

    <div class="mobile-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Mobilná fyzioterapia"
            text="Je moderný prístup poskytovania fyzioterapeutickej starostlivosti, ktorý prináša profesionálnu pomoc priamo k pacientovi, bez nutnosti návštevy fyzioterapeutickej ambulancie. Tento typ fyzioterapie sa vykonáva priamo v bydlisku pacientov."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/mobilna-fyzioterapia.jpg') }}" alt="mobilna fyzioterapia">
            </x-slot:image>

            <x-slot:tags>
                <x-pjcomponents::tag label="25 min./ 35 €" class="bg-primary-color rounded" />
                <x-pjcomponents::tag label="50 min./ 60 €" class="bg-primary-color rounded" />
            </x-slot:tags>
        </x-pjcomponents::portfolio-headers.header-2>

        <x-pjcomponents::long-form-contents.content-7 heading="Aké sú výhody mobilnej fyzioterapie?">
            <x-slot:text>
                <p><span class="font-bold primary-color">Pohodlie a flexibilita:</span> Výhodou je, že pacienti nemusia cestovať mimo bydliska a hlavne pre tých, ktorí majú problémy s mobilitou, alebo pre starších ľudí a iných s chronickými zdravotnými problémami.</p>
                <br>
                <p><span class="font-bold primary-color">Individuálny prístup:</span> Fyzioterapeut môže prispôsobiť cvičenia a terapiu priamo prostrediu, v ktorom pacient žije. To umožňuje lepšiu adaptáciu na reálny život a každodenné aktivity pacienta.</p>
                <br>
                <p><span class="font-bold primary-color">Väčšia motivácia:</span> Pacienti sa často cítia pohodlnejšie a menej v strese v domácom prostredí, čo môže zlepšiť ich motiváciu k pravidelnému cvičeniu.</p>
                <br>
                <p><span class="font-bold primary-color">Rýchlejšia rekonvalescencia:</span> Vďaka pravidelným návštevám môže fyzioterapeut monitorovať pokrok a upravovať terapiu podľa aktuálneho stavu pacienta.</p>
                <br>
                <p class="font-bold primary-color">Kto môže využiť mobilnú fyzioterapiu?</p>
                <ul>
                    <li>- starší ľudia s problémami pohybového aparátu</li>
                    <li>- pacienti po operáciách alebo úrazoch</li>
                    <li>- osoby so zníženou mobilitou</li>
                    <li>- pracujúci ľudia s časovým obmedzením</li>
                    <li>- ľudia s chronickými bolesťami</li>
                    <li>- neurologickí pacienti</li>
                </ul>
            </x-slot:text>
        </x-pjcomponents::long-form-contents.content-7>

               <!-- 6 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto mb-8 mt-24">
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

        <!-- <x-pjcomponents::features.layout-290>
            <x-slot:features>
                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pre seniorov"
                    text="Áno, venujeme sa aj starším vekovým skupinám, ktorí aj v pokročilejšom veku vďaka pohybu, chcú udržiavať svoje telo aktívne a v dobrej fyzickej kondícii."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/fyzio-pre-seniorov.jpg') }}" alt="fyzioterapia pre seniorov">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.senior-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pre dospelých"
                    text="Zameriava sa na liečbu a prevenciu rôznych pohybových porúch, bolesti a funkčných obmedzení."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="fyzioterapia pre dospelych">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.adult-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri ochoreniach chrbtice"
                    text="Ide o pacienta s charakteristickým príznakom- bolesťami chrbtice, obmedzenou hybnosťou, ktoré môžu byť doplnené o neurologické symptómy a majú rôznu príčinu."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/verte.jpg') }}" alt="chrbat">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.vertebrogenic-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri neurologických ochoreniach"
                    text="V rámci fyzioterapie sa sústreďujeme na Parkinsonov syndróm, skleróza multiplex ale aj na spinálne problémy."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/neuro.jpg') }}" alt="neurologicke ochorenia">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.neurological-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri imobilných pacientoch"
                    text="Fyzioterapia pre imobilných pacientov sa zameriava na zlepšenie fyzickej funkcie, pohyblivosti a kvality života pacientov, ktorí sú obmedzení v pohybe."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/imobilny-pacienti.jpg') }}" alt="imobilita">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.immobile-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri poúrazových a pooperačných stavoch"
                    text="Fyzioterapia je veľmi dôležitou súčasťou liečebného procesu pred a po operácii, a preto je rozdelená na predoperačnú a pooperačnú."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/pooperacne.jpg') }}" alt="po operacii">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.postoperative-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>
            </x-slot:features>
        </x-pjcomponents::features.layout-290> -->

        <x-pjcomponents::galleries.gallery-3 heading="Fotogaléria">
            <x-slot:images>
                <img src="{{ asset('assets/images/photo-5.jpg') }}" alt="photo 1">
                <img src="{{ asset('assets/images/photo-10.jpg') }}" alt="photo 2">
                <img src="{{ asset('assets/images/mobilna-4.jpg') }}" alt="photo 3">
                <img src="{{ asset('assets/images/mobilna-1.jpg') }}" alt="photo 4">
                <img src="{{ asset('assets/images/mobilna-2.jpg') }}" alt="photo 5">
                <img src="{{ asset('assets/images/photo-1.jpg') }}" alt="photo 6">
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

        <!-- <x-pjcomponents::ctas.cta-7
            heading="Získajte svoju konzultáciu"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Objednať sa" :link="route('page.contact')" />
                <x-pjcomponents::button type="secondary" label="Naše služby" :link="route('page.services.index')" />
            </x-slot:actions>
        </x-pjcomponents::ctas.cta-7> -->

        <x-footer />
    </div>

</x-layout>