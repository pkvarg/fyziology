@section('title', 'Cenník')

<x-layout xmlns:x-slot="http://www.w3.org/1999/html">

    <div class="pricing relative overflow-hidden">
        <div class="px-[5%] py-16 md:py-24 lg:py-8 text-center relative">
     <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>  

            <h1 class="text-4xl md:text-6xl font-black mb-5 md:mb-6 relative z-10">Cenník</h1>
            <div class="max-w-3xl mx-auto md:text-lg relative z-10 mt-12">
                <p>Dohodnite si stretnutie s našim fyzioterapeutom a vstupnú konzultáciu máte zdarma.<br>Ak nemáte čas na stretnutie, konzultovať vieme aj telefonicky.</p>
                <p class="mt-4">Využite náš výhodný balík mobilnej fyzioterapie priamo u Vás doma alebo balík<br>ambulantnej fyzioterapie v priestoroch našej prevádzky.</p>
            </div>
        </div>

        <div class="relative overflow-hidden">
            <x-pjcomponents::pricing.pricing-18c1 heading="" class="relative z-10">
                <x-slot:text>
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

                           <!-- Gradient Circle -  bottom rightnear CTA -->
         <div class="absolute md:hidden lg:inline top-[84rem] lg:top-[42rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>

        <section class="px-[5%] py-16 md:py-24 lg:py-16 relative">
    

            <div class="container mx-auto w-full max-w-4xl relative z-10">
     
                       <!-- Gradient Half Circle - bottom right -->
        <div class="lg:flex absolute top-[0rem] -left-[3rem] lg:top-0 lg:-left-[8rem] w-40 h-40  pointer-events-none">
            <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-28 lg:w-full h-28 lg:h-full object-contain" />
        </div>

                <h2 class="text-4xl md:text-5xl lg:text-4xl font-black mb-6 md:mb-8 ml-12 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-lg md:text-xl mb-8 md:mb-10 max-w-3xl text-gray-700">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <!-- <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity">
                    Vstupná konzultácia ZDARMA
                </a> -->
            </div>
                 <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:ml-[10rem] mt-4">
                    Vstupná konzultácia ZDARMA
                </a>
        </section>

        <x-footer />
    </div>

</x-layout>
