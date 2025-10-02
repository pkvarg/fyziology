@section('title', 'Mobilná fyzioterapia')

<x-layout>

    <div class="mobile-physiotherapy">
        <x-pjcomponents::portfolio-headers.header-2
            heading="Mobilná fyzioterapia"
            text="Je moderný prístup poskytovania fyzioterapeutickej starostlivosti, ktorý prináša profesionálnu pomoc priamo k pacientovi, bez nutnosti návštevy fyzioterapeutickej ambulancie. Tento typ fyzioterapie sa vykonáva priamo v bydlisku pacientov."
        >
            <x-slot:image>
                <img src="{{ asset('assets/images/mobilna-fyzioterapia.jpg') }}" alt="mobilna fyzioterapia">
            </x-slot:image>

            <x-slot:tags>
                <x-pjcomponents::tag label="25 min./ 35 €" class="bg-primary-color rounded" />
                <x-pjcomponents::tag label="50 min./ 60 €" class="bg-primary-color rounded" />
            </x-slot:tags>
        </x-pjcomponents::portfolio-headers.header-2>

        <x-pjcomponents::long-form-contents.content-7 heading="Aké sú výhody mobilnej fyzioterapie?">
            <x-slot:text>
                <p><span class="font-bold primary-color">Pohodlie a flexibilita:</span> Výhodou je, že pacienti nemusia cestovať mimo bydliska a hlavne pre tých, ktorí majú problémy s mobilitou, alebo pre starších ľudí a iných s chronickými zdravotnými problémami.</p>
                <br>
                <p><span class="font-bold primary-color">Individuálny prístup:</span> Fyzioterapeut môže prispôsobiť cvičenia a terapiu priamo prostrediu, v ktorom pacient žije. To umožňuje lepšiu adaptáciu na reálny život a každodenné aktivity pacienta.</p>
                <br>
                <p><span class="font-bold primary-color">Väčšia motivácia:</span> Pacienti sa často cítia pohodlnejšie a menej v strese v domácom prostredí, čo môže zlepšiť ich motiváciu k pravidelnému cvičeniu.</p>
                <br>
                <p><span class="font-bold primary-color">Rýchlejšia rekonvalescencia:</span> Vďaka pravidelným návštevám môže fyzioterapeut monitorovať pokrok a upravovať terapiu podľa aktuálneho stavu pacienta.</p>
                <br>
                <p class="font-bold primary-color">Kto môže využiť mobilnú fyzioterapiu?</p>
                <ul>
                    <li>- starší ľudia s problémami pohybového aparátu</li>
                    <li>- pacienti po operáciách alebo úrazoch</li>
                    <li>- osoby so zníženou mobilitou</li>
                    <li>- pracujúci ľudia s časovým obmedzením</li>
                    <li>- ľudia s chronickými bolesťami</li>
                    <li>- neurologickí pacienti</li>
                </ul>
            </x-slot:text>
        </x-pjcomponents::long-form-contents.content-7>

        <x-pjcomponents::features.layout-290>
            <x-slot:features>
                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pre seniorov"
                    text="Áno, venujeme sa aj starším vekovým skupinám, ktorí aj v pokročilejšom veku vďaka pohybu, chcú udržiavať svoje telo aktívne a v dobrej fyzickej kondícii."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/fyzio-pre-seniorov.jpg') }}" alt="fyzioterapia pre seniorov">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.senior-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pre dospelých"
                    text="Zameriava sa na liečbu a prevenciu rôznych pohybových porúch, bolesti a funkčných obmedzení."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/fyzio-pre-dospelych.jpg') }}" alt="fyzioterapia pre dospelych">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.adult-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri ochoreniach chrbtice"
                    text="Ide o pacienta s charakteristickým príznakom- bolesťami chrbtice, obmedzenou hybnosťou, ktoré môžu byť doplnené o neurologické symptómy a majú rôznu príčinu."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/verte.jpg') }}" alt="chrbat">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.vertebrogenic-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri neurologických ochoreniach"
                    text="V rámci fyzioterapie sa sústreďujeme na Parkinsonov syndróm, skleróza multiplex ale aj na spinálne problémy."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/neuro.jpg') }}" alt="neurologicke ochorenia">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.neurological-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri imobilných pacientoch"
                    text="Fyzioterapia pre imobilných pacientov sa zameriava na zlepšenie fyzickej funkcie, pohyblivosti a kvality života pacientov, ktorí sú obmedzení v pohybe."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/imobilny-pacienti.jpg') }}" alt="imobilita">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.immobile-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>

                <x-pjcomponents::features.feature-290
                    heading="Fyzioterapia pri poúrazových a pooperačných stavoch"
                    text="Fyzioterapia je veľmi dôležitou súčasťou liečebného procesu pred a po operácii, a preto je rozdelená na predoperačnú a pooperačnú."
                >
                    <x-slot:image>
                        <img src="{{ asset('assets/images/pooperacne.jpg') }}" alt="po operacii">
                    </x-slot:image>

                    <x-slot:actions>
                        <x-pjcomponents::button label="Detail" type="primary" :link="route('page.services.postoperative-physiotherapy')" />
                    </x-slot:actions>
                </x-pjcomponents::features.feature-290>
            </x-slot:features>
        </x-pjcomponents::features.layout-290>

        <x-pjcomponents::galleries.gallery-3 heading="Fotogaléria">
            <x-slot:images>
                <img src="{{ asset('assets/images/photo-5.jpg') }}" alt="photo 1">
                <img src="{{ asset('assets/images/photo-10.jpg') }}" alt="photo 2">
                <img src="{{ asset('assets/images/mobilna-4.jpg') }}" alt="photo 3">
                <img src="{{ asset('assets/images/mobilna-1.jpg') }}" alt="photo 4">
                <img src="{{ asset('assets/images/mobilna-2.jpg') }}" alt="photo 5">
                <img src="{{ asset('assets/images/photo-1.jpg') }}" alt="photo 6">
            </x-slot:images>
        </x-pjcomponents::galleries.gallery-3>

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