@section('title', 'Mobilná fyzioterapia- Rehabilitácia priamo u Vás doma')

<x-layout>
    <div class="index">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Vitajte vo Fyziology!"
            text="Fyziology je moderná a dynamická firma zameraná na poskytovanie kvalitných fyzioterapeutických služieb a rehabilitácie v Bratislave a okolí. Našim cieľom je pomáhať klientom dosiahnuť ich maximálny potenciál v oblasti pohybu a zdravia, a to pomocou mobilnej fyzioterapie v domácom prostredí klientov."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="ambulance">
            </x-slot:image>
        </x-pjcomponents::portfolio-headers.header-2>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-207
            heading="Prečo si vybrať Fyziology?"
            :features="[
                'fyzioterapia priamo u Vás doma alebo na ambulancii',
                'kvalifikovaný a skúsený tím',
                'podpora a motivácia počas terapie',
                'profesionalita, ľudskosť a ochota'
            ]"
        >
            <x-slot:feature-icon>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#0c5eb6" d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
            </x-slot:feature-icon>

            <x-slot:image>
                <img src="{{ asset('assets/images/car.jpg') }}" alt="mobile physiotherapy" class="max-h-[80vh]">
            </x-slot:image>
        </x-pjcomponents::features.layout-207>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::features.layout-306 heading="Naše služby">
            <x-slot:tagline>
                <span class="primary-color">Služby</span>
            </x-slot:tagline>

            <x-slot:features>
                <x-pjcomponents::features.feature-306 text="Je moderný prístup poskytovania fyzioterapeutickej starostlivosti, ktorý prináša profesionálnu pomoc priamo k pacientovi, bez nutnosti návštevy fyzioterapeutickej ambulancie.">
                    <x-slot:heading>
                        <a href="{{ route('page.services.mobile-physiotherapy') }}">Mobilná fyzioterapia</a>
                    </x-slot:heading>

                    <x-slot:image>
                        <a href="{{ route('page.services.mobile-physiotherapy') }}" class="image-link">
                            <img src="{{ asset('assets/images/mobilna-fyzioterapia.jpg') }}" alt="mobilna fyzioterapia">
                        </a>
                    </x-slot:image>
                </x-pjcomponents::features.feature-306>

                <x-pjcomponents::features.feature-306 text="Je typ fyzioterapie, ktorý prebieha v rámci zdravotníckeho zariadenia, napríklad v ambulanciách alebo fyzioterapeutických klinikách, kde pacient dochádza na jednotlivé terapie.">
                    <x-slot:heading>
                        <a href="{{ route('page.services.ambulatory-physiotherapy') }}">Ambulantná fyzioterapia</a>
                    </x-slot:heading>

                    <x-slot:image>
                        <a href="{{ route('page.services.ambulatory-physiotherapy') }}" class="image-link">
                            <img src="{{ asset('assets/images/ambulance.jpg') }}" alt="ambulancia">
                        </a>
                    </x-slot:image>
                </x-pjcomponents::features.feature-306>

                <x-pjcomponents::features.feature-306 text="Bankovanie je terapeutická technika, ktorá sa používa na zlepšenie prietoku krvi, uvoľnenie svalového napätia a zmiernenie bolesti.">
                    <x-slot:heading>
                        <a href="{{ route('page.services.banking') }}">Bankovanie</a>
                    </x-slot:heading>

                    <x-slot:image>
                        <a href="{{ route('page.services.banking') }}" class="image-link">
                            <img src="{{ asset('assets/images/bankovanie.jpg') }}" alt="bankovanie">
                        </a>
                    </x-slot:image>
                </x-pjcomponents::features.feature-306>

                <x-pjcomponents::features.feature-306 text="Masáž je technika, ktorá zahŕňa manipuláciu s pokožkou, svalmi, šľachami a inými mäkkými tkanivami tela.">
                    <x-slot:heading>
                        <a href="{{ route('page.services.massages') }}">Masáže</a>
                    </x-slot:heading>

                    <x-slot:image>
                        <a href="{{ route('page.services.massages') }}" class="image-link">
                            <img src="{{ asset('assets/images/massages-cover.jpg') }}" alt="masáže">
                        </a>
                    </x-slot:image>
                </x-pjcomponents::features.feature-306>
            </x-slot:features>

            <x-slot:actions>
                <x-pjcomponents::button type="secondary-arrow" :link="route('page.services.index')" label="Viac" :arrow="true" :border="false" />
            </x-slot:actions>
        </x-pjcomponents::features.layout-306>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::benefits.layout-66
            heading="Objavte výhody našich služieb"
            text="Veríme, že každá terapia by mala byť prispôsobená konkrétnym potrebám jednotlivca. V našej firme sa pozeráme na pacienta ako na celok, nielen na konkrétny problém alebo symptóm."
            :benefits="[
                'fyzioterapeutické konzultácie',
                'individuálne rehabilitačné programy',
                'prevencia a poradenstvo v oblasti zdravého životného štýlu',
                'pomoc pri akútnej či chronickej bolesti',
            ]"
        >
            <x-slot:benefit-icon>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#0c5eb6" d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
            </x-slot:benefit-icon>
        </x-pjcomponents::benefits.layout-66>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::ctas.cta-7
            heading="Získajte svoju konzultáciu"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:actions>
                <x-pjcomponents::button label="Objednať sa" :link="route('page.contact')" />
                <x-pjcomponents::button type="secondary" label="Naše služby" :link="route('page.services.index')" />
            </x-slot:actions>
        </x-pjcomponents::ctas.cta-7>

        <div class="w-1/4 mx-auto my-8 h-[2px] bg-[#0c5eb6] md:my-10 lg:my-12 lg:w-1/12"></div>

        <x-pjcomponents::teams.team-17 heading="Náš tím">
            <x-slot:tagline>
                <span class="primary-color">Tím</span>
            </x-slot:tagline>

            <x-slot:team-members>
                <x-pjcomponents::teams.member-17
                    name="Mgr. Vladimír Chovanec"
                    role="Fyzioterapeut"
                >
                    <x-slot:text>
                        Bakalárske štúdium absolvoval na Slovenskej zdravotníckej univerzite v Bratislave. Počas štúdia nadobudol praktické skúsenosti a znalosti v rôznych nemocniciach a súkromných zdravotníckych zariadeniach. Magisterské štúdium ukončil na Univerzite sv. Cyrila a Metoda v Trnave, počas ktorého pracoval v súkromnom zariadení.
                        <br>
                        <br>
                        Tvrdí, že pohyb je medicína a vďaka nemu sa ľudia dokážu vrátiť po zdravotných problémoch do bežného života rýchlejšie. Svoje znalosti naďalej rozvíja, učí sa novým veciam a teší sa ďalším výzvam.
                    </x-slot:text>

                    <x-slot:avatar>
                        <img src="{{ asset('assets/images/vlado.jpg') }}" alt="avatar">
                    </x-slot:avatar>
                </x-pjcomponents::teams.member-17>
            </x-slot:team-members>
        </x-pjcomponents::teams.team-17>

        <x-pjcomponents::testimonials.testimonial-3 heading="Recenzie">
            <x-slot:testimonials>
                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Fyzioterapiu som vyhľadala kvôli bolestiam v chrbtici a s prístupom a liečbou som bola veľmi spokojná. Terapeut bol profesionálny, dôkladne vyhodnotil môj stav a prispôsobil terapiu mojim potrebám. Bolesť sa výrazne zmiernila a zlepšila sa aj pohyblivosť."
                    author="Sofia"
                />

                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Počas terapie som sa cítil príjemne, komunikáciu a prístup hodnotím kladne. Pán Vlado mi ukázal cvičenia, ktoré môžem vykonávať doma a nadobudnúť další pokrok. Celkovo hodnotím svoju skúsenosť pozitívne a odporúčam službu každému kto potrebuje pomoc pri rehabilitácii."
                    author="Daniel"
                />

                <x-pjcomponents::testimonials.testimonial-3-item
                    text="Vo Fyziology som dostala termín do 24 hodín a vďaka službe mobilnej fyzioterapie prišiel terapeut priamo ku mne domov. Absolvovala som operáciu kolena a keďže som bola do určitej miery imobilná, tak tento typ služby bol pre mňa veľmi prínosný!"
                    author="Martina"
                />
            </x-slot:testimonials>
        </x-pjcomponents::testimonials.testimonial-3>

        <x-contact-info />
        <x-footer />
    </div>
</x-layout>