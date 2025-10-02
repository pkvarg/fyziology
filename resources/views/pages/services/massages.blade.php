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