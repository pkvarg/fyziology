@section('title', 'Cookies')

<x-layout>

    <div class="text-page py-20">
        <div class="px-[5%]">
            <h1 class="mb-5 text-center text-5xl font-bold md:mb-6 md:text-7xl">Informácie o cookies</h1>
        </div>

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p class="font-bold primary-color">Čo sú cookies?</p>
                <br>
                <p>Cookies sú malé textové súbory, ktoré sa ukladajú do vášho zariadenia (počítač, tablet, telefón) pri návšteve webovej stránky. Umožňujú webovej stránke rozpoznať vaše zariadenie a zapamätať si určité informácie o vašej návšteve.</p>
                <br>

                <p class="font-bold primary-color">Aké cookies používame?</p>
                <br>
                <p>Naša webová stránka fyziology.sk používa výhradne <span class="font-bold">analytické cookies</span> na zlepšenie používateľského zážitku. Nepoužívame funkčné ani marketingové cookies.</p>
                <br>

                <p class="font-bold">Analytické cookies (vyžadujú súhlas)</p>
                <br>
                <p>Používame nástroj <span class="font-bold">Umami Analytics</span> na zber anonymných štatistických údajov o návštevnosti našej stránky. Tieto cookies nám pomáhajú pochopiť, ako návštevníci používajú našu stránku, aby sme ju mohli neustále vylepšovať.</p>
                <br>

                <p><span class="font-bold">Účel:</span> Meranie návštevnosti, analýza správania návštevníkov, zlepšenie obsahu a funkčnosti stránky</p>
                <p><span class="font-bold">Typ údajov:</span> Anonymné údaje o návštevách (počet návštev, navštívené stránky, dĺžka návštevy, typ zariadenia)</p>
                <p><span class="font-bold">Poskytovateľ:</span> Umami Analytics (vlastné riešenie s ochranou súkromia)</p>
                <p><span class="font-bold">Doba uchovávania:</span> 24 mesiacov</p>
                <p><span class="font-bold">Prenos do tretích krajín:</span> Nie</p>
                <br>

                <p class="font-bold primary-color">Prečo používame Umami Analytics?</p>
                <br>
                <p>Umami je open-source nástroj zameraný na ochranu súkromia, ktorý:</p>
                <p>- Nezbiera osobné údaje</p>
                <p>- Neposkytuje údaje tretím stranám</p>
                <p>- Rešpektuje súkromie návštevníkov</p>
                <p>- Je v súlade s GDPR</p>
                <p>- Nepoužíva cookies na sledovanie naprieč webovými stránkami</p>
                <br>

                <p class="font-bold primary-color">Aké sú vaše práva?</p>
                <br>
                <p><span class="font-bold">Právo odmietnuť cookies:</span> Môžete odmietnuť použitie analytických cookies priamo v našom cookie banneri, ktorý sa zobrazí pri prvej návšteve stránky.</p>
                <br>
                <p><span class="font-bold">Právo zmeniť svoje rozhodnutie:</span> Svoj súhlas môžete kedykoľvek odvolať vymazaním cookies vo vašom prehliadači alebo vymazaním údajov localStorage pre našu doménu.</p>
                <br>
                <p><span class="font-bold">Nastavenie v prehliadači:</span> Môžete nastaviť svoj webový prehliadač tak, aby blokoval cookies alebo vás upozorňoval, keď sú cookies odosielané. Väčšina prehliadačov má v menu "Pomoc" informácie o tom, ako to urobiť.</p>
                <br>

                <p class="font-bold primary-color">Ako spravovať cookies?</p>
                <br>
                <p>Cookies môžete spravovať a vymazať pomocou nastavení vášho webového prehliadača:</p>
                <br>
                <p><span class="font-bold">Google Chrome:</span> Nastavenia → Ochrana súkromia a zabezpečenie → Cookies a ďalšie údaje stránok</p>
                <p><span class="font-bold">Mozilla Firefox:</span> Možnosti → Ochrana súkromia a zabezpečenie → Cookies a údaje stránok</p>
                <p><span class="font-bold">Safari:</span> Predvoľby → Ochrana súkromia → Spravovať údaje webových stránok</p>
                <p><span class="font-bold">Microsoft Edge:</span> Nastavenia → Cookies a povolenia lokalít → Spravovať a odstrániť cookies</p>
                <br>

                <p class="font-bold primary-color">Nevyhnutné cookies</p>
                <br>
                <p>Naša stránka nevyužíva technické nevyhnutné cookies (tie, ktoré sú absolútne potrebné pre fungovanie stránky). Všetky funkcie stránky fungujú aj bez akceptovania cookies.</p>
                <br>

                <p class="font-bold primary-color">Marketingové a funkčné cookies</p>
                <br>
                <p>Nepoužívame žiadne marketingové, reklamné ani funkčné cookies tretích strán (ako napríklad Facebook Pixel, Google Ads, atď.).</p>
                <br>

                <p class="font-bold primary-color">Aktualizácia tejto politiky</p>
                <br>
                <p>Túto informáciu o cookies môžeme príležitostne aktualizovať. Odporúčame vám pravidelne kontrolovať túto stránku, aby ste boli informovaní o akýchkoľvek zmenách.</p>
                <br>
                <p><span class="font-bold">Posledná aktualizácia:</span> {{ date('d.m.Y') }}</p>
                <br>

                <p class="font-bold primary-color">Kontakt</p>
                <br>
                <p>Ak máte akékoliek otázky týkajúce sa našej politiky cookies, kontaktujte nás:</p>
                <br>
                <p class="font-bold">Mgr. Vladimír Chovanec</p>
                <p>Prevádzka Fyziology</p>
                <p>Námestie Martina Benku 12</p>
                <p>81107 Bratislava, Staré Mesto</p>
                <p>E-mail: info@fyziology.sk</p>
                <br>
                <p>Viac informácií o ochrane osobných údajov nájdete v našom <a href="{{ route('page.privacy') }}" class="primary-color font-bold underline">vyhlásení o ochrane osobných údajov</a>.</p>
            </x-slot:content>
        </x-pjcomponents::long-form-contents.content-30>

        <x-footer />
    </div>

</x-layout>
