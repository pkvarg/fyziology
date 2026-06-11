<!-- Contact & Footer Section - Blue Background -->
<section class="bg-primary-color text-white px-[5%] py-16 md:py-20 lg:py-24">
    <div class="max-w-6xl mx-auto">
        <!-- Logo -->
        <div class="mb-12">
            <a href="{{ route('page.index') }}" class="flex items-center text-2xl uppercase gap-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="h-16 w-auto brightness-0 invert" />
                <div>
                    <span class="block font-normal text-lg text-[#c5eaf4]" style="font-family: 'Coustard', serif; letter-spacing: 5px;">FYZIO</span>
                    <span class="block text-[#c5eaf4] font-light -mt-2 ml-[3.2rem]" style="font-family: 'Charmonman', serif; text-transform: lowercase;">logy</span>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column - Contact Info -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Kontaktujte nás</h2>

                <!-- Email -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/svg/Email icon.svg') }}" alt="Email" class="w-8 h-8" />
                    </div>
                    <div>
                        <p class="text-sm opacity-80">Email</p>
                        <a href="mailto:info@fyziology.sk" class="text-lg hover:text-cyan-300 transition-colors text-[#c5eaf4]">info@fyziology.sk</a>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/svg/Phone icon.svg') }}" alt="Phone" class="w-8 h-8" />
                    </div>
                    <div>
                        <p class="text-sm opacity-80">Telefón</p>
                        <a href="tel:+421918378781" class="text-lg hover:text-cyan-300 transition-colors text-[#c5eaf4]">+421 918 378 781</a>
                    </div>
                </div>

                <!-- Address -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/svg/Pin icon.svg') }}" alt="Location" class="w-8 h-8" />
                    </div>
                    <div>
                        <p class="text-sm opacity-80">Ambulancia</p>
                        <a href="https://maps.app.goo.gl/Kc8RaixEGxa46mCq6" class="text-lg text-[#c5eaf4] hover:text-cyan-300 transition-colors flex flex-col gap-0">
                            <span>Námestie Martina Benku 12,</span>
                            <span>811 07 Bratislava, Staré Mesto</span>
                            <span class="text-sm opacity-80">(obchodná pasáž, prízemie)</span>
                        </a>
                    </div>
                </div>

                <!-- Company Info -->
                <div class="flex items-start gap-4 mb-8">
                    <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/svg/Card icon.svg') }}" alt="ID Card" class="w-8 h-8" />
                    </div>
                    <div>
                        <p class="text-sm opacity-80">Údaje</p>
                        <p class="text-lg text-[#c5eaf4] flex flex-col gap-0">
                            <span>IČO: 56641605</span>
                            <span>DIČ: 1127841165</span>
                        </p>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="pt-6">
                    <h3 class="text-2xl font-bold mb-1">Otváracie hodiny</h3>
                    <p class="text-lg text-[#c5eaf4]">Pon-Pia: 8:00 - 12:00 a 13:00 - 16:00</p>
                </div>
            </div>

            <!-- Right Column - Map -->
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <iframe
                    title="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.7753978195897!2d17.120386276987766!3d48.15313517124525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89496c705da3%3A0x99c0081f3ae23f1c!2sN%C3%A1mestie%20Martina%20Benku%206302%2F12%2C%20811%2007%20Bratislava!5e0!3m2!1ssk!2ssk!4v1736283431680!5m2!1ssk!2ssk"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-full min-h-[400px]"
                ></iframe>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="mt-16 pt-8 border-t border-white/20">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#c5eaf4]">
                <div class="flex items-center gap-4">
                    <p>©2025 Fyziology</p>
                    {{-- Self-hosted Zlatá Firma badge: SVG is served from our own domain (downloaded once,
                         no live third-party asset/script), so the year/content changes only when we change it.
                         Link uses nofollow (don't pass SEO credit) + noopener (tab-hijack protection). --}}
                    <a href="https://www.zlatafirma.eu/company/fyziology-646367"
                       target="_blank" rel="nofollow noopener"
                       title="Fyziology – Zlatá Firma 2026">
                        <img src="{{ asset('assets/images/zlata-firma-2026.svg') }}"
                             alt="Fyziology – Zlatá Firma 2026" width="200" height="49"
                             class="w-[200px] h-auto hover:opacity-90 transition-opacity" loading="lazy" />
                    </a>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('page.terms') }}" class="hover:text-cyan-300 transition-colors">Všeobecné obchodné podmienky</a>
                    <a href="{{ route('page.complaints') }}" class="hover:text-cyan-300 transition-colors">Reklamačné podmienky</a>
                    <a href="{{ route('page.privacy') }}" class="hover:text-cyan-300 transition-colors">Ochrana osobných údajov</a>
                    <a href="{{ route('page.cookies') }}" class="hover:text-cyan-300 transition-colors">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</section>
