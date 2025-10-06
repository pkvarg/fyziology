@section('title', 'Ambulantná fyzioterapia')

<x-layout>

    <div class="ambulatory-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Ambulantná fyzioterapia"
            text="Je typ fyzioterapie, ktorý prebieha v rámci zdravotníckeho zariadenia, napríklad v ambulanciách alebo fyzioterapeutických klinikách, kde pacient dochádza na jednotlivé terapie. Liečba zvyčajne prebieha v intervaloch niekoľkých dní alebo týždňov, v závislosti od problému pacienta."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="ambulantna fyzioterapia">
            </x-slot:image>

            <x-slot:tags>
                <x-pjcomponents::tag label="25 min./ 25 €" class="bg-primary-color rounded" />
                <x-pjcomponents::tag label="50 min./ 45 €" class="bg-primary-color rounded" />
            </x-slot:tags>
        </x-pjcomponents::portfolio-headers.header-2>

        <x-pjcomponents::long-form-contents.content-7>
            <x-slot:text>
                <p><span class="font-bold primary-color">Cieľom ambulantnej fyzioterapie</span> je zlepšiť alebo obnoviť pohybové schopnosti, zmierniť bolesť, podporiť regeneráciu a zvýšiť kvalitu života. Využívajú sa rôzne metódy ako manuálna terapia, cvičenia, masáže.</p>
                <br>
                <p>Tento typ fyzioterapie je určený pre pacientov, ktorí nepotrebujú každodennú starostlivosť, ale majú zdravotné ťažkosti, ktoré si vyžadujú odbornú pomoc. Môže ísť o problémy, ako sú bolesti v oblasti chrbta, úrazy pohybového aparátu, neurologické poruchy alebo rehabilitácia po chirurgických zákrokoch.</p>
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
                <img src="{{ asset('assets/images/photo-3.jpg') }}" alt="photo 3">
                <img src="{{ asset('assets/images/photo-4.jpg') }}" alt="photo 4">
                <img src="{{ asset('assets/images/photo-7.jpg') }}" alt="photo 7">
                <img src="{{ asset('assets/images/photo-8.jpg') }}" alt="photo 8">
                <img src="{{ asset('assets/images/bankovanie-3.jpg') }}" alt="photo - 3 - bankovanie">
                <img src="{{ asset('assets/images/amb-1.jpg') }}" alt="photo 1">
            </x-slot:images>
        </x-pjcomponents::galleries.gallery-3>

        <x-pjcomponents::ctas.cta-7
            heading="Získajte svoju konzultáciu"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Objednať sa" :link="route('page.contact')" />
                <x-pjcomponents::button type="secondary" label="Naše služby" :link="route('page.services.index')" />
            </x-slot:actions>
        </x-pjcomponents::ctas.cta-7>

        <x-footer />
    </div>

</x-layout>