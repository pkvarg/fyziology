@section('title', 'Naši klienti')

<x-layout>

    <div class="clients">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Naši klienti"
            text="Radi by sme Vám v krátkosti prerozprávali príbehy niektorých našich klientov."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/klienti.jpg') }}" alt="klienti">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-134 heading="Parkinsonova choroba">
            <x-slot:text>
                Náš klient je dôchodca, ktorý trpí parkinsonovým ochorením a inými pridruženými ochoreniami ako neuropatia či reumatizmus. Celý príbeh začal, keď pán doma padol a bol prevezený do nemocnice, kde bol hospitalizovaný po dobu 2 mesiacov. Po návrate do domáceho prostredia sa začalo s fyzioterapiou a aktívnou domácou rehabilitáciou.
                <br>
                <br>
                Ide o ležiaceho pacienta, ktorý na začiatku našej spolupráce bol imobilný a nedokázal takmer sedieť na posteli. Vďaka rehabilitácii po niekoľkých mesiacoch sme nadobudli progres v podobe domácich presunov, aktívnej samostatnej chôdzi o paličke, lepšej mobilite a pod.
            </x-slot:text>
        </x-pjcomponents::features.layout-134>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-134 heading="Skleróza multiplex">
            <x-slot:text>
                Náš klient Zdenko je mladý muž, ktorému v mladom veku bolo diagnostikované neurologické ochorenie SM (skleróza multiplex) s najvyšším  stupňom postihnutia. Touto diagnózou trpí niekoľko rokov, avšak minulý rok v jeho živote nastala veľká zmena, keď mu transplantovali kmeňové bunky a zastavilo to progresiu jeho ochorenia. Zdenko bol viac ako 6 rokov ležiacim pacientom, bol imobilný a nemal žiaden pohyb.
                <br>
                <br>
                Pred niekoľkými mesiacmi sme začali s intenzívnou pravidelnou domácou rehabilitáciou, kedy sme začali s aktívno-asistovanými cvičeniami na posteli a postupne ho vertikalizovali do sedu či stoja. Neskôr sme začali s chôdzou pomocou G aparátu, krok za krokom. Po šiestich rokoch kedy nemal žiaden pohyb a bol ležiacim pacientom sme za pár mesiacov dokázali súvisle prejsť takmer 40 metrov, dosiahli zmiernenie trasu končatín či zvýšenie svalovej sily!
            </x-slot:text>
        </x-pjcomponents::features.layout-134>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-134 heading="Periférna paréza hornej končatiny">
            <x-slot:text>
                Ide o čiastočnú stratu hybnosti hornej končatiny, konkrétne v našom prípade bol postihnutý jeden z nervov. Väčšia časť ľavej hornej končatiny bola motoricky slabšia oproti pravej, avšak najviac bola zasiahnutá oblasť zápästia a prsty ruky, ktoré boli doslova „mŕtve“ a nehybné. Najväčší problém bolo dvihnúť zápästie smerom nahor, problémy s jemnou motorikou či uchopenie predmetov. Naša klientka prekonala pľúcnu embóliu.
                <br>
                <br>
                Okrem vyššie spomínaných problémov, pociťovala celkovú slabosť a vyčerpanie. Začali sme s každodennou rehabilitáciou a výsledky sa postupne dostavili. Návrat sme nevideli len v podobe cvičenia hornej končatiny, ale taktiež sme sa venovali komplexne „full body“ tréningu, čiže cvičeniu celého tela, kde sme začali s izolovanejšími a postupne prešli ku zložitejším cvikom. Po niekoľkých týždňoch sa začala pomaly obnovovať hybnosť zápästia, kedy pacientka začínala svojvoľne ovládať ruku a prsty. Behom niekoľkých mesiacov pravidelného cvičenia sme dokázali zabezpečiť samostatnosť, zlepšiť kvalitu život, zvýšiť svalovú silu a pomôcť pri návrate k bežnému životu.
            </x-slot:text>
        </x-pjcomponents::features.layout-134>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-134 heading="Operácia bedrového kĺbu">
            <x-slot:text>
                Rád by som Vám predstavil 93 ročnú pani Máriu, ktorá je dialyzovaný pacient a pred pár mesiacmi musela podstúpiť operáciu bedra. Pani navštevuje už niekoľko rokov 3x týždenne dialýzu a zvyšné dni sa snaží aktívne hýbať a cvičiť. Keď sme začali s terapiou, bola imobilná, ležiaca a veľmi vyčerpaná vzhľadom k okolnostiam, veku a jej zdravotnému stavu.
                <br>
                <br>
                Začali sme s ľahkými cvičeniami na posteli na zväčšenie rozsahu v jednotlivých kĺboch, zvýšenie svalovej sily a ľahké kondičné cvičenia. Zamerali sme sa aj na včasnú vertikalizáciu do sedu a následne do stoja. Do terapie sme postupne pridali aj chôdzu s G aparátom. Po pár mesiacoch cvičenia sme dosiahli u pacientky samostatnosť, zlepšenie presunov po dome, aktívnu chôdzu, schopnosť prejsť hore a dole schodmi.
            </x-slot:text>
        </x-pjcomponents::features.layout-134>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-134 heading="Protrúzia platničky">
            <x-slot:text>
                Ide o vyklenutie platničky mimo tela stavca, ktoré je v dnešnej spoločnosti veľmi časté a to kvôli sedavému spôsobu života, nadváhe, zlej životospráve a nízkej fyzickej aktivite. Júlia je 25 ročná pacientka, ktorú tento problém postihol už v pomerne mladom veku. Trápila ju hlavne ostrá bolesť, ktorá bola lokalizovaná v oblasti driekovej chrbtice, obmedzená schopnosť predklonu či zdvihnutie predmetov zo zeme.
                <br>
                <br>
                Jej problémy sme dokázali pomerne rýchlo odstrániť a vrátiť ju k bežnému životu bez bolesti. Začali sme s uvoľňujúcimi cvičeniami, ktoré boli doplnené o posilňujúce cvičenia na aktiváciu chrbtových a okolitých svalov. Taktiež sme si ukázali pohyby, ktoré sú kontraindikované a môžu spôsobovať bolesť. Zlé vytvorené pohybové vzorce sme nahradili správnymi a ukázali pacientke ako sa správne hýbať. Začali sme od ľahších a postupne sa dostali ku zložitejším cvikom. Vysvetlili sme si dôkladne techniky jednotlivých cvikov + na ktoré svaly sa upriamiť a zamerať.
            </x-slot:text>
        </x-pjcomponents::features.layout-134>

        <p class="text-center font-bold primary-color">Trápi Vás podobný problém? Kontaktujte nás a my Vám radi pomôžeme!</p>

        <x-footer />
    </div>

</x-layout>