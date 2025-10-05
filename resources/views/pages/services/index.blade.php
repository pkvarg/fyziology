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
            <div class="absolute -top-[10rem] -left-[25rem] lg:-right-96 w-[100%] lg:w-[52.5%] h-auto pointer-events-none">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <h1 class="text-4xl md:text-6xl font-black mb-5 md:mb-6 relative z-10">Naše služby</h1>
            <p class="max-w-3xl mx-auto md:text-lg relative z-10">Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie.</p>
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

        <!-- Získajte prvú konzultáciu zdarma -->
        <section class="px-[5%] py-16 md:py-24 lg:py-16 relative overflow-hidden bg-gray-50">
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

        <div class="relative overflow-hidden">
            <!-- Gradient Circle - near pricing -->
            <div class="absolute top-[10rem] lg:top-32 -right-56 lg:-right-[25rem] w-[100%] lg:w-[52.5%] h-auto pointer-events-none">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <x-pjcomponents::pricing.pricing-18c1 heading="Cenník" id="cennik" class="relative z-10">
            <x-slot:text>
                <p>Dohodnite si stretnutie s našim fyzioterapeutom a vstupnú konzultáciu máte zdarma.<br>Ak nemáte čas na stretnutie, konzultovať vieme aj telefonicky.</p>
                <p>Využite náš výhodný balík mobilnej fyzioterapie priamo u Vás doma alebo balík<br>ambulantnej fyzioterapie v priestoroch našej prevádzky.</p>
            </x-slot:text>

            <x-slot:prices>
                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Mobilná fyzioterapia">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">25 min./ <span class="font-bold">35 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">50 min./ <span class="font-bold">60 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="font-bold text-primary-color">Balík mobilnej fyzioterapie</span>
                            </x-slot:text>
                            <x-slot:icon>
                                <img src="{{ asset('assets/svg/Discount.svg') }}" alt="" class="w-5 h-5">
                            </x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">10x 25 min./ <span class="font-bold">315 € (9+1)</span> </span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">10x 50 min./ <span class="font-bold">480 € (8+2)</span> </span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Ambulantná fyzioterapia">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">25 min./ <span class="font-bold">25 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">50 min./ <span class="font-bold">45 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="font-bold text-primary-color">Balík ambulantnej fyzioterapie</span>
                            </x-slot:text>
                            <x-slot:icon>
                                <img src="{{ asset('assets/svg/Discount.svg') }}" alt="" class="w-5 h-5">
                            </x-slot:icon>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">10x 25 min./ <span class="font-bold">225 € (9+1)</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">10x 50 min./ <span class="font-bold">405 € (9+1)</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Bankovanie">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">25 min./ <span class="font-bold">25 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>

                <x-pjcomponents::pricing.pricing-shared-item-1 tagline="Masáže">
                    <x-slot:benefits>
                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">25 min./ <span class="font-bold">30 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>

                        <x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                            <x-slot:text>
                                <span class="text-gray-700">50 min./ <span class="font-bold">45 €</span></span>
                            </x-slot:text>
                        </x-pjcomponents::pricing.pricing-shared-plan-benefit-1>
                    </x-slot:benefits>
                </x-pjcomponents::pricing.pricing-shared-item-1>
            </x-slot:prices>
        </x-pjcomponents::pricing.pricing-18c1>
        </div>

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