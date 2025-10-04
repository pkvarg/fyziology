@section('title', 'Služby')

<x-layout xmlns:x-slot="http://www.w3.org/1999/html">

    <div class="services">
        {{-- <x-pjcomponents::portfolio-headers.header-2
            heading="Naše služby"
            text="Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/sluzby.jpg') }}" alt="sluzby">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2> --}}

        <div class="px-[5%] py-16 md:py-24 lg:py-28 text-center">
            <h1 class="text-4xl md:text-6xl font-black mb-5 md:mb-6">Naše služby</h1>
            <p class="max-w-3xl mx-auto md:text-lg">Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie.</p>
        </div>

        <!-- <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div> -->

        <div class="px-[5%] pb-16 md:pb-24 lg:pb-28">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Mobilná a ambulantná fyzioterapia -->
                <div class="text-center flex flex-col">
                    <div class="mb-6">
                        <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="Mobilná a ambulantná fyzioterapia" class="w-full h-48 object-cover rounded-2xl">
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Mobilná a ambulantná<br>fyzioterapia</h3>
                    <a href="{{ route('page.services.ambulatory-physiotherapy') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>

                <!-- Bankovanie -->
                <div class="text-center flex flex-col">
                    <div class="mb-6">
                        <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="Bankovanie" class="w-full h-48 object-cover rounded-2xl">
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Bankovanie</h3>
                    <a href="{{ route('page.services.banking') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>

                <!-- Masáže -->
                <div class="text-center flex flex-col">
                    <div class="mb-6">
                        <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="Masáže" class="w-full h-48 object-cover rounded-2xl">
                    </div>
                    <h3 class="text-xl font-bold mb-4 min-h-[3.5rem]">Masáže</h3>
                    <a href="{{ route('page.services.massages') }}" class="bg-primary-color text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition-opacity mx-auto">Viac info</a>
                </div>
            </div>
        </div>

        <x-pjcomponents::pricing.pricing-18c1 heading="Cenník" id="cennik">
            <x-slot:text>
                <span class="primary-color font-bold">Vstupná konzultácia ZDARMA</span>
                <br>
                <br>
                Dohodnite si stretnutie s našim fyzioterapeutom a vstupnú konzultáciu máte zdarma. Ak nemáte čas na stretnutie, konzultovať vieme aj telefonicky.
                <br>
                <br>
                Využite náš výhodný balík mobilnej fyzioterapie priamo u Vás doma alebo balík ambulantnej fyzioterapie v priestoroch našej prevádzky.
            </x-slot:text>

            <x-slot:prices>
                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Mobilná fyzioterapia">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="25 min./ 35 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="50 min./ 60 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="font-bold">Balík mobilnej fyzioterapie</span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="10x 25 min./ 315 € (9+1)">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="10x 50 min./ 480 € (8+2)">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Ambulantná fyzioterapia">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="25 min./ 25 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="50 min./ 45 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="font-bold">Balík ambulantnej fyzioterapie</span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="10x 25 min./ 225 € (9+1)">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="10x 50 min./ 405 € (9+1)">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Bankovanie">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="25 min./ 25 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Masáže">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="25 min./ 30 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1 text="50 min./ 45 €">
                            <x-slot:icon><x-icons.tag /></x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>
            </x-slot:prices>
        </x-pjcomponents::pricing.pricing-18c1>

        <x-pjcomponents::ctas.cta-7
            heading="Získajte svoju konzultáciu"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Objednať sa" :link="route('page.contact')" />
            </x-slot:actions>
        </x-pjcomponents::ctas.cta-7>

        <x-footer />
    </div>

</x-layout>