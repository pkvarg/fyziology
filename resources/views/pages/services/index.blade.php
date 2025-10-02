@section('title', 'Služby')

<x-layout xmlns:x-slot="http://www.w3.org/1999/html">

    <div class="services">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Naše služby"
            text="Vo Fyziology ponúkame na výber z viacerých  možností služieb ako je mobilná či ambulantná fyzioterapia, bankovanie a masáže. Našim cieľom je zlepšiť Váš zdravotný stav, dopriať Vám odpočinok či zabezpečiť pohodu počas terapie."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/sluzby.jpg') }}" alt="sluzby">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-290>
            <x-slot:features>
                <x-pjcomponents::features.feature-290
                    heading="Mobilná fyzioterapia"
                    text="Je moderný prístup poskytovania fyzioterapeutickej starostlivosti, ktorý prináša profesionálnu pomoc priamo k pacientovi, bez nutnosti návštevy fyzioterapeutickej ambulancie."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/mobilna-fyzioterapia.jpg') }}" alt="mobilna fyzioterapia">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.mobile-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Ambulantná fyzioterapia"
                    text="Je typ fyzioterapie, ktorý prebieha v rámci zdravotníckeho zariadenia, napríklad v ambulanciách alebo fyzioterapeutických klinikách, kde pacient dochádza na jednotlivé terapie."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="ambulancia">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.ambulatory-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Bankovanie"
                    text="Bankovanie je terapeutická technika, ktorá sa používa na zlepšenie prietoku krvi, uvoľnenie svalového napätia a zmiernenie bolesti."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="bankovanie">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.banking')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Masáže"
                    text="Masáž je technika, ktorá zahŕňa manipuláciu s pokožkou, svalmi, šľachami a inými mäkkými tkanivami tela."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="masáže">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.massages')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>
            </x-slot:features>
        </x-pjcomponents::features.layout-290>

        <x-pjcomponents::pricing.pricing-18c1 heading="Cenník">
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