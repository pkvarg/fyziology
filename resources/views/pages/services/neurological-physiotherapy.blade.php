@section('title', 'Fyzioterapia pri neurologických ochoreniach')

<x-layout>

    <div class="neurological-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2 heading="Fyzioterapia pri neurologických ochoreniach">
            <x-slot:image>
                <img src="{{ asset('assets/images/neuro.jpg') }}" alt="fyzioterapia pri neurologických ochoreniach">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p>Vo Fyziology venujeme pozornosť aj odboru ako je neurológia a jej najčastejším ochoreniam. Starostlivosť o pacienta s <span class="font-bold primary-color">centrálnou parézou</span> po CMP (cievnej mozgovej príhode) či fyzioterapii pri <span class="font-bold primary-color">periférnych parézach</span> horných a dolných končatín.</p>
                <br>
                <p>V rámci fyzioterapie sa sústreďujeme na <span class="font-bold primary-color">Parkinsonov syndróm, skleróza multiplex</span> ale aj na <span class="font-bold primary-color">spinálne problémy</span>.</p>
                <br>
                <p>Starostlivosť o neurologického pacienta je komplexná a vyžaduje osobitný prístup, a preto v rámci fyzioterapie ponúkame:</p>
                <br>
                <p><span class="font-bold primary-color">1. Liečebný plán:</span> Vypracovanie individuálneho liečebného plánu v závislosti od diagnózy.</p>
                <br>
                <p><span class="font-bold primary-color">2. Vzdelávanie a podpora rodiny:</span> Vzdelávanie rodiny o stave pacienta a poskytovanie emocionálnej podpory, aby sa im pomohlo lepšie pochopiť a zvládať situáciu.</p>
                <br>
                <p><span class="font-bold primary-color">3. Psychologická podpora:</span> Zabezpečenie psychologickej podpory a poradenstva, keďže neurologické ochorenia môžu mať značný vplyv na psychické zdravie.</p>
                <br>
                <p>Včasná a pravidelná rehabilitácia je kľúčová a môže výrazne prispieť k obnoveniu funkcií a prevencii komplikácií. Fyzioterapeut pri práci s neurologickými pacientmi potrebuje detailne hodnotiť stav pacienta, prispôsobiť terapiu jeho individuálnym potrebám a cieľom, a neustále monitorovať pokrok počas liečby.</p>
                <br>
                <p>Našim hlavným cieľom je postaviť Vás opäť na nohy, zlepšiť každodenné činnosti (presuny, chôdza, obliekanie, hygiena..), motivovať pacienta a pomôcť k návratu do bežného života čo najskôr!</p>
            </x-slot:content>
        </x-pjcomponents::long-form-contents.content-30>

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