@section('title', 'Kontakt')

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/pjutils/assets/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pjutils/assets/inputs.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pjutils/assets/buttons.css') }}">
@endpush

<x-layout>

    <div class="contact">
           

        <x-pjcomponents::contacts.contact-1
            heading="Kontaktný formulár"
            text="Sme tu, aby sme Vám pomohli na ceste k lepšiemu zdraviu a pohybu. Tešíme sa na Vás!"
        >
            <x-slot:form>
                <x-pjutils::form method="POST" :action="route('contact.send')" action-label="Odoslať">
                    <x-pjutils::form.input label="Meno a Priezvisko" name="name" />
                    <x-pjutils::form.email label="E-mail" name="email" />
                    <x-pjutils::form.input label="Telefón" name="phone" type="tel" />
                    <x-pjutils::form.textarea label="Správa" name="message" />

                    <x-pjutils::form.wrapper>
                        <x-pjutils::form.checkbox name="gdpr" :checked="true">
                            <x-slot:label>
                                Súhlasím so&nbsp;<a class="underline" href="{{ route('page.privacy') }}"> spracovaním osobných údajov</a>.
                            </x-slot:label>
                        </x-pjutils::form.checkbox>
                    </x-pjutils::form.wrapper>
                </x-pjutils::form>
            </x-slot:form>
        </x-pjcomponents::contacts.contact-1>

        <x-pjcomponents::faq.faq-7
            heading="Často kladené otázky"
            text="V tejto časti nájdete prehľad najčastejších otázok, ktoré nám kladú naši klienti, spolu s jasnými a praktickými odpoveďami týkajúcimi sa našich fyzioterapeutických služieb – od priebehu terapie až po objednávanie či dostupnosť."
        >
            <x-slot:qa>
                <x-pjcomponents::faq.qa-7
                    class="active"
                    question="Aká je čakacia doba na fyzioterapiu?"
                    answer="Vo Fyziology dostanete termín ihneď ako zavoláte, takže na termín v podstate nečakáte."
                />

                <x-pjcomponents::faq.qa-7
                    question="Ako sa dostanem k Vám na ambulanciu?"
                    answer="Priestor ambulancie sa nachádza v obchodnej pasáži na prízemí a je bezbariérový. Ak cestujete električkou, tak vystúpite na zastávke Krížna a cesta trvá zhruba 2-3 minúty. Ak cestujete autom, parkovať môžete pred pasážou vo vnútrobloku, kde sa priestor nachádza."
                />

                <x-pjcomponents::faq.qa-7
                    question="Prijímate platby kartou?"
                    answer="Platby kartou momentálne neakceptujeme, avšak platiť môžete v hotovosti alebo na faktúru."
                />

                <x-pjcomponents::faq.qa-7
                    question="Som imobilný pacient a nemám možnosť sa k Vám dostaviť osobne, aké služby môžem využiť?"
                    answer="Pre imobilných pacientov ponúkame službu domácej fyzioterapie priamo u Vás doma. Vy nás kontaktujete a náš terapeut príde priamo k Vám domov."
                />

                <x-pjcomponents::faq.qa-7
                    question="Ak chcem využiť službu mobilnej terapie, doplácam niečo za dopravu?"
                    answer="V závislosti od km a času strávenej na ceste účtujeme doplatok za dopravu. Príklad: Staré Mesto 0 eur. Rovinka 15 eur. Stupava 20 eur."
                />

                <x-pjcomponents::faq.qa-7
                    question="Mám ležiaceho otca, ktorý má 93 rokov a chcel by som ho postaviť opäť na nohy, viete mi s tým pomôcť?"
                    answer="Áno, vo Fyziology sa venujeme aj pacientom vo vyššom veku a radi Vám pomôžeme či už ide o rodinného príslušníka, alebo kamaráta. Vek nehrá žiadnu rolu, ale keďže chápeme, že zo začiatku môžu mať pacienti isté obavy, tak pojmy ako ľudskosť, empatia a ochota sú pre nás kľúčové počas terapie."
                />

                <x-pjcomponents::faq.qa-7
                    question="Ako si môžem rezervovať termín?"
                    answer="Termín si viete rezervovať na webovej stránke, kde vyplníte formulár alebo na telefónnom čísle."
                />

                <x-pjcomponents::faq.qa-7
                    question="Potrebujem výmenný lístok od lekára?"
                    answer="Nie, výmenný lístok nepotrebujete od žiadneho lekára, vy sa len objednáte na terapiu a o zvyšok sa postaráme my."
                />
            </x-slot:qa>
        </x-pjcomponents::faq.faq-7>

        <x-contact-info />
        {{-- <x-footer /> --}}
    </div>

</x-layout>