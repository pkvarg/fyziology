@section('title', 'Masáže')

<x-layout>

    <div class="massages">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Masáže"
            text="Masáž je technika, ktorá zahŕňa manipuláciu s pokožkou, svalmi, šľachami a inými mäkkými tkanivami tela. Využíva sa na uvoľnenie napätia, zmiernenie bolesti, zlepšenie prekrvenia a podporu zdravia. Pomáha pri regenerácii po rôznych športových výkonoch. Vo Fyziology sa venujeme klasickej, reflexnej masáži či mäkkým technikám."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="masáže">
            </x-slot:image>

            <x-slot:tags>
                <x-pjcomponents::tag label="25 min./ 30 €" class="bg-primary-color rounded" />
                <x-pjcomponents::tag label="50 min./ 45 €" class="bg-primary-color rounded" />
            </x-slot:tags>
        </x-pjcomponents::portfolio-headers.header-2>

        <x-pjcomponents::features.layout-290>
            <x-slot:features>
                <x-pjcomponents::features.feature-290
                    heading="Klasická masáž"
                    text="Klasická masáž je terapeutická metóda, ktorá sa zameriava na zlepšenie zdravia prostredníctvom rôznych techník manipuláciou s mäkkými tkanivami ako sú svaly, väzy a šľachy."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/masaze-1.jpg') }}" alt="Klasická masáž">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.classic-massage')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Reflexná masáž"
                    text="Reflexnú masáž zaradzujeme do skupiny liečebných metód s cieľom odstrániť chorobné zmeny na koži a v tkanivách."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/masaze-2.jpg') }}" alt="Reflexná masáž">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.reflex-massage')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Mäkké techniky"
                    text="Mäkké techniky sú manuálna terapia, pri ktorej najskôr uvoľňujeme kožu, podkožie a následne účinky prenikajú do hlbšie úložených štruktúr, a to fascie a svalu."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/masaze-3.jpg') }}" alt="Mäkké techniky">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.soft-techniques')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>
            </x-slot:features>
        </x-pjcomponents::features.layout-290>

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