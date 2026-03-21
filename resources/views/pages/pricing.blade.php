@section('title', 'Cenník')

@section('meta_description', 'Cenník fyzioterapeutických služieb Fyziology v Bratislave. Transparentné ceny za mobilnú fyzioterapiu, ambulantnú fyzioterapiu a bankovanie. Vstupná konzultácia zdarma.')

<x-layout xmlns:x-slot="http://www.w3.org/1999/html">

    <div class="pricing relative overflow-hidden">
        <div class="px-[5%] py-16 md:py-24 lg:py-8 text-center relative">
     <!-- Gradient Circle - top left -->
    <div class="absolute md:hidden lg:inline 2xl:hidden -top-24 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
    </div>  

            <h1 class="text-4xl md:text-6xl font-black mb-5 md:mb-6 relative z-10">Cenník</h1>
            <div class="max-w-3xl mx-auto md:text-lg relative z-10 mt-12">
                <p>Dohodnite si stretnutie s naším fyzioterapeutom a vstupnú konzultáciu máte zdarma.<br>Ak nemáte čas na stretnutie, konzultovať vieme aj telefonicky.</p>
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

        <!-- Gradient Circle -  bottom right near CTA -->
         <div class="absolute md:hidden lg:inline 2xl:hidden top-[84rem] lg:top-[42rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60">
        <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
        </div>

        

         <div class="container w-full max-w-3xl lg:max-w-4xl relative z-10 py-16  lg:mx-auto">
                <!-- Gradient Half Circle CTA - left -->
                <div class="lg:flex absolute top-[4.3rem] -left-[2.75rem] md:-left-[4.25rem] lg:top-[4.2rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-10 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-sm md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-10 lg:ml-0">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <div class="flex lg:justify-start justify-center">
                    <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity ml-0 lg:-ml-16 mt-4">
                        Vstupná konzultácia ZDARMA
                    </a>
                </div>
            </div>

        <x-footer />
    </div>

</x-layout>
