@section('title', 'Cookies')

@push('meta')
    <meta name="description" content="Informácie o používaní cookies na fyziology.sk. Používame analytické cookies Umami Analytics v súlade s GDPR pre zlepšenie našich služieb fyzioterapie v Bratislave.">
@endpush

<x-layout>

    <div class="cookies-page">
        <!-- Hero Section -->
        <section class="px-[5%] py-16 md:py-24 lg:py-20 relative overflow-hidden bg-gray-50">
            <!-- Gradient Circle - top left -->
            <div class="absolute top-[2rem] lg:-top-[10rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6">
                    Informácie o <span class="primary-color">cookies</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto">
                    Transparentné informácie o tom, ako používame cookies na našej webovej stránke
                </p>
            </div>
                 <!-- Content Section -->
       
        

        <x-pjcomponents::long-form-contents.content-30>
            <x-slot:content>
                <p class="text-[20px] font-bold primary-color">Čo sú cookies?</p>
                <br>
                <p class="text-[18px]">Cookies sú malé textové súbory, ktoré sa ukladajú do vášho zariadenia (počítač, tablet, telefón) pri návšteve webovej stránky. Umožňujú webovej stránke rozpoznať vaše zariadenie a zapamätať si určité informácie o vašej návšteve.</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Aké cookies používame?</p>
                <br>
                <p class="text-[18px]">Naša webová stránka fyziology.sk používa výhradne <span class="font-bold">analytické cookies</span> na zlepšenie používateľského zážitku. Nepoužívame funkčné ani marketingové cookies.</p>
                <br>

                <p class="text-[18px] font-bold">Analytické cookies (vyžadujú súhlas)</p>
                <br>
                <p class="text-[18px]">Používame nástroj <span class="font-bold">Umami Analytics</span> na zber anonymných štatistických údajov o návštevnosti našej stránky. Tieto cookies nám pomáhajú pochopiť, ako návštevníci používajú našu stránku, aby sme ju mohli neustále vylepšovať.</p>
                <br>

                <p class="text-[18px]"><span class="font-bold">Účel:</span> Meranie návštevnosti, analýza správania návštevníkov, zlepšenie obsahu a funkčnosti stránky</p>
                <p class="text-[18px]"><span class="font-bold">Typ údajov:</span> Anonymné údaje o návštevách (počet návštev, navštívené stránky, dĺžka návštevy, typ zariadenia)</p>
                
                <p class="text-[18px]"><span class="font-bold">Doba uchovávania:</span> 24 mesiacov</p>
                <p class="text-[18px]"><span class="font-bold">Prenos do tretích krajín:</span> Nie</p>
                <br>

             

                <p class="text-[20px] font-bold primary-color">Aké sú vaše práva?</p>
                <br>
                <p class="text-[18px]"><span class="font-bold">Právo odmietnuť cookies:</span> Môžete odmietnuť použitie analytických cookies priamo v našom cookie banneri, ktorý sa zobrazí pri prvej návšteve stránky.</p>
                <br>
                <p class="text-[18px]"><span class="font-bold">Právo zmeniť svoje rozhodnutie:</span> Svoj súhlas môžete kedykoľvek odvolať vymazaním cookies vo vašom prehliadači alebo vymazaním údajov localStorage pre našu doménu.</p>
                <br>
                <p class="text-[18px]"><span class="font-bold">Nastavenie v prehliadači:</span> Môžete nastaviť svoj webový prehliadač tak, aby blokoval cookies alebo vás upozorňoval, keď sú cookies odosielané. Väčšina prehliadačov má v menu "Pomoc" informácie o tom, ako to urobiť.</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Ako spravovať cookies?</p>
                <br>
                <p class="text-[18px]">Cookies môžete spravovať a vymazať pomocou nastavení vášho webového prehliadača:</p>
                <br>
                <p class="text-[18px]"><span class="font-bold">Google Chrome:</span> Nastavenia → Ochrana súkromia a zabezpečenie → Cookies a ďalšie údaje stránok</p>
                <p class="text-[18px]"><span class="font-bold">Mozilla Firefox:</span> Možnosti → Ochrana súkromia a zabezpečenie → Cookies a údaje stránok</p>
                <p class="text-[18px]"><span class="font-bold">Safari:</span> Predvoľby → Ochrana súkromia → Spravovať údaje webových stránok</p>
                <p class="text-[18px]"><span class="font-bold">Microsoft Edge:</span> Nastavenia → Cookies a povolenia lokalít → Spravovať a odstrániť cookies</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Nevyhnutné cookies</p>
                <br>
                <p class="text-[18px]">Naša stránka nevyužíva technické nevyhnutné cookies (tie, ktoré sú absolútne potrebné pre fungovanie stránky). Všetky funkcie stránky fungujú aj bez akceptovania cookies.</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Marketingové a funkčné cookies</p>
                <br>
                <p class="text-[18px]">Nepoužívame žiadne marketingové, reklamné ani funkčné cookies tretích strán (ako napríklad Facebook Pixel, Google Ads, atď.).</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Aktualizácia tejto politiky</p>
                <br>
                <p class="text-[18px]">Túto informáciu o cookies môžeme príležitostne aktualizovať. Odporúčame vám pravidelne kontrolovať túto stránku, aby ste boli informovaní o akýchkoľvek zmenách.</p>
                <br>
                <p class="text-[18px]"><span class="font-bold">Posledná aktualizácia:</span> 18.10.2025</p>
                <br>

                <p class="text-[20px] font-bold primary-color">Kontakt</p>
                <br>
                <p class="text-[18px]">Ak máte akékoľvek otázky týkajúce sa našej politiky cookies, kontaktujte nás:</p>
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
        

           <!-- CTA Section -->   
      
                <!-- Gradient Circle - bottom right -->
            <div class="absolute bottom-[8rem] lg:top-[70rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <!-- <div class="container mx-auto w-full relative z-10 px-[5%] lg:ml-16">
               
                <div class="lg:flex absolute top-[0.25rem] -left-[2rem] lg:-top-[0rem] lg:-left-[2.5rem] w-40 h-40 pointer-events-none px-[5%]">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Máte otázky o cookies?</h2>
                <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0 text-[18px] lg:-mt-2">
                    Ak máte akékoľvek otázky týkajúce sa našej politiky cookies alebo si želáte získať viac informácií o ochrane osobných údajov, neváhajte nás kontaktovať. Radi vám odpovieme.
                </p>
                <div class="flex lg:justify-start justify-center">
                    <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:-ml-10 mt-4">
                        Kontaktujte nás
                    </a>
                </div>
            </div> -->
        </section>

        <x-footer />
    </div>

</x-layout>
