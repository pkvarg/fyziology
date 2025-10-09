@section('title', 'Naši klienti')

<x-layout>
    <div class="clients bg-gray-50 mt-8">
        <!-- Hero Section with Title -->
        <section class="px-[5%] pt-16 pb-8 relative">
            <!-- Gradient Circle - top left -->
            <div class="absolute -top-32 lg:-top-[12rem] -left-48 lg:-left-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-0">
                    Naši klienti
                </h1>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="px-[5%] py-4 lg:py-4 relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <!-- Hero Image -->
                <div class="mb-12">
                    <img src="{{ asset('assets/images/klienti.jpg') }}" alt="Naši klienti" class="w-full max-w-[65rem] mx-auto rounded-3xl shadow-lg object-cover" style="max-height: 400px;">
                </div>

                <!-- Introduction Text -->
                <div class="max-w-4xl mx-auto space-y-6 text-lg text-gray-700 text-center mb-12">
                    <p>
                        Radi by sme sa s Vami podelili o inšpiratívne príbehy niektorých našich klientov, ktorí na vlastnej koži zažili pozitívne zmeny vďaka individuálne nastavenej fyzioterapii a našej spoločnej práci na zlepšení ich zdravia a pohybu.
                    </p>
                </div>
            </div>
        </section>

        <!-- Client Story 1: Parkinsonova choroba -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.4rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[1.35rem] lg:text-2xl font-black mb-4 ml-8 lg:ml-0">Parkinsonova choroba</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                        <p>
                            Náš klient je dôchodca, ktorý trpí parkinsonovým ochorením a inými pridruženými ochoreniami ako neuropatia či reumatizmus. Celý príbeh začal, keď pán doma padol a bol prevezený do nemocnice, kde bol hospitalizovaný po dobu 2 mesiacov. Po návrate do domáceho prostredia sa začalo s fyzioterapiou a aktívnou domácou rehabilitáciou.
                        </p>
                        <p>
                            Ide o ležiaceho pacienta, ktorý na začiatku našej spolupráce bol imobilný a nedokázal takmer sedieť na posteli. Vďaka rehabilitácii po niekoľkých mesiacoch sme nadobudli progres v podobe domácich presunov, aktívnej samostatnej chôdzi o paličke, lepšej mobilite a pod.
                        </p>
                    </div>
            </div>
        </section>

        <!-- Client Story 2: Skleróza multiplex -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.4rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[1.35rem] lg:text-2xl  font-black mb-4 ml-8 lg:ml-0">Skleróza multiplex</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                        <p>
                            Náš klient Zdenko je mladý muž, ktorému v mladom veku bolo diagnostikované neurologické ochorenie SM (skleróza multiplex) s najvyšším stupňom postihnutia. Touto diagnózou trpí niekoľko rokov, avšak minulý rok v jeho živote nastala veľká zmena, keď mu transplantovali kmeňové bunky a zastavilo to progresiu jeho ochorenia. Zdenko bol viac ako 6 rokov ležiacim pacientom, bol imobilný a nemal žiaden pohyb.
                        </p>
                        <p>
                            Pred niekoľkými mesiacmi sme začali s intenzívnou pravidelnou domácou rehabilitáciou, kedy sme začali s aktívno-asistovanými cvičeniami na posteli a postupne ho vertikalizovali do sedu či stoja. Neskôr sme začali s chôdzou pomocou G aparátu, krok za krokom. Po šiestich rokoch kedy nemal žiaden pohyb a bol ležiacim pacientom sme za pár mesiacov dokázali súvisle prejsť takmer 40 metrov, dosiahnuť zmiernenie trasu končatín či zvýšenie svalovej sily!
                        </p>
                    </div>
            </div>
        </section>

        <!-- Client Story 3: Periférna paréza hornej končatiny -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.4rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[1.35rem] lg:text-2xl font-black mb-4 ml-8 lg:ml-0">Periférna paréza hornej končatiny</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                        <p>
                            Ide o čiastočnú stratu hybnosti hornej končatiny, konkrétne v našom prípade bol postihnutý jeden z nervov. Väčšia časť ľavej hornej končatiny bola motoricky slabšia oproti pravej, avšak najviac bola zasiahnutá oblasť zápästia a prsty ruky, ktoré boli doslova „mŕtve" a nehybné. Najväčší problém bolo dvihnúť zápästie smerom nahor, problémy s jemnou motorikou či uchopenie predmetov. Naša klientka prekonala pľúcnu embóliu.
                        </p>
                        <p>
                            Okrem vyššie spomínaných problémov, pociťovala celkovú slabosť a vyčerpanie. Začali sme s každodennou rehabilitáciou a výsledky sa postupne dostavili. Návrat sme nevideli len v podobe cvičenia hornej končatiny, ale taktiež sme sa venovali komplexne „full body" tréningu, čiže cvičeniu celého tela, kde sme začali s izolovanejšími a postupne prešli ku zložitejším cvikom. Po niekoľkých týždňoch sa začala pomaly obnovovať hybnosť zápästia, kedy pacientka začínala svojvoľne ovládať ruku a prsty. Behom niekoľkých mesiacov pravidelného cvičenia sme dokázali zabezpečiť samostatnosť, zlepšiť kvalitu život, zvýšiť svalovú silu a pomôcť pri návrate k bežnému životu.
                        </p>
                    </div>
            </div>
        </section>

        <!-- Client Story 4: Operácia bedrového kĺbu -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.4rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[1.35rem] lg:text-2xl font-black mb-4 ml-8 lg:ml-0">Operácia bedrového kĺbu</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                        <p>
                            Rád by som Vám predstavil 93 ročnú pani Máriu, ktorá je dialyzovaný pacient a pred pár mesiacmi musela podstúpiť operáciu bedra. Pani navštevuje už niekoľko rokov 3x týždenne dialýzu a zvyšné dni sa snaží aktívne hýbať a cvičiť. Keď sme začali s terapiou, bola imobilná, ležiaca a veľmi vyčerpaná vzhľadom k okolnostiam, veku a jej zdravotnému stavu.
                        </p>
                        <p>
                            Začali sme s ľahkými cvičeniami na posteli na zväčšenie rozsahu v jednotlivých kĺboch, zvýšenie svalovej sily a ľahké kondičné cvičenia. Zamerali sme sa aj na včasnú vertikalizáciu do sedu a následne do stoja. Do terapie sme postupne pridali aj chôdzu s G aparátom. Po pár mesiacoch cvičenia sme dosiahli u pacientky samostatnosť, zlepšenie presunov po dome, aktívnu chôdzu, schopnosť prejsť hore a dole schodmi.
                        </p>
                    </div>
            </div>
        </section>

        <!-- Client Story 5: Protrúzia platničky -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10">
                <!-- Gradient Half Circle - left -->
                <div class="lg:flex absolute top-[0.35rem] -left-[2rem] lg:top-[0.3rem] lg:-left-[4rem] w-40 h-40 pointer-events-none">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[1.35rem] lg:text-2xl font-black mb-4 ml-8 lg:ml-0">Protrúzia platničky</h2>

                <div class="py-[0.5rem] lg:py-[0.75rem] text-lg text-gray-700 ml-8 lg:ml-0">
                        <p>
                            Ide o vyklenutie platničky mimo tela stavca, ktoré je v dnešnej spoločnosti veľmi časté a to kvôli sedavému spôsobu života, nadváhe, zlej životospráve a nízkej fyzickej aktivite. Júlia je 25 ročná pacientka, ktorú tento problém postihol už v pomerne mladom veku. Trápila ju hlavne ostrá bolesť, ktorá bola lokalizovaná v oblasti driekovej chrbtice, obmedzená schopnosť predklonu či zdvihnutie predmetov zo zeme.
                        </p>
                        <p>
                            Jej problémy sme dokázali pomerne rýchlo odstrániť a vrátiť ju k bežnému životu bez bolesti. Začali sme s uvoľňujúcimi cvičeniami, ktoré boli doplnené o posilňujúce cvičenia na aktiváciu chrbtových a okolitých svalov. Taktiež sme si ukázali pohyby, ktoré sú kontraindikované a môžu spôsobovať bolesť. Zlé vytvorené pohybové vzorce sme nahradili správnymi a ukázali pacientke ako sa správne hýbať. Začali sme od ľahších a postupne sa dostali ku zložitejším cvikom. Vysvetlili sme si dôkladne techniky jednotlivých cvikov + na ktoré svaly sa upriamiť a zamerať.
                        </p>
                    </div>
            </div>
                <!-- Gradient Circle - bottom right -->
            <div class="absolute top-[30rem] lg:-top-[10rem] -right-48 lg:-right-96 w-[100%] lg:w-[50%] h-auto pointer-events-none opacity-60 md:hidden lg:inline 2xl:hidden">
                <img src="{{ asset('assets/svg/Gradient circle.svg') }}" alt="" class="w-full h-full object-contain" />
            </div>
        </section>

        <!-- CTA Section -->
        <section class="px-[5%] py-8 lg:py-8 relative overflow--hidden">
        

            <div class="container mx-auto w-full max-w-6xl lg:max-w-4xl relative z-10 py-8">
                <!-- Gradient Half Circle CTA - left -->
                <div class="lg:flex absolute top-[2.3rem] -left-[3rem] md:-left-[4.25rem] lg:top-[2.2rem] lg:-left-[6.5rem] w-40 h-40 pointer-events-none px-[5%]">
                    <img src="{{ asset('assets/svg/Gradient half circle.svg') }}" alt="" class="w-20 lg:w-20 h-20 lg:h-20 object-contain" />
                </div>

                <h2 class="text-[22px] md:text-xl font-black mb-6 md:mb-8 ml-8 lg:ml-0">Získajte prvú konzultáciu zdarma</h2>
                <p class="text-md md:text-md mb-8 md:mb-10 max-w-3xl text-gray-700 ml-8 lg:ml-0">
                    Sme tu pre Vás, pripravení sprevádzať Vás na ceste k lepšiemu zdraviu, väčšej pohyblivosti a celkovej pohode. Veríme, že každý krok smerom k uzdraveniu má zmysel – a tešíme sa, že môžeme byť jeho súčasťou.
                </p>
                <div class="flex lg:justify-start justify-center">
                    <a href="{{ route('page.contact') }}" class="inline-block bg-primary-color text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition-opacity lg:-ml-16 mt-4">
                        Vstupná konzultácia ZDARMA
                    </a>
                </div>
            </div>
        </section>

        <x-footer />
         
    </div>
</x-layout>
