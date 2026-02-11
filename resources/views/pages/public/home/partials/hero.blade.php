<section class="relative bg-slate-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24
                grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        {{-- TEXT --}}
        <div class="text-center md:text-left">
            <span class="inline-block mb-4 px-4 py-1 text-xs sm:text-sm
                         bg-sky-500/20 text-sky-400 rounded-full">
                Aplikasi Digital Premium
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl
                       font-extrabold leading-tight mb-6">
                Solusi Aplikasi Premium <br>
                <span class="text-sky-400">
                    Untuk Kebutuhan Digital Anda
                </span>
            </h1>

            <p class="text-slate-300 mb-8 max-w-xl mx-auto md:mx-0
                      text-sm sm:text-base leading-relaxed">
                Kami menyediakan layanan penjualan dan aktivasi
                <strong>aplikasi premium</strong> seperti
                Netflix, Canva, CapCut, Spotify, dan lainnya.
                Cocok untuk hiburan, produktivitas, serta kreativitas digital
                dengan proses cepat dan support terpercaya.
            </p>

            {{-- CTA --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="{{ route('about') }}"
                   class="w-full sm:w-auto text-center
                          bg-sky-500 hover:bg-sky-600
                          px-6 py-3 rounded-xl font-semibold transition">
                    Tentang Kami
                </a>

                <a href="{{ route('product') }}"
                   class="w-full sm:w-auto text-center
                          border border-slate-500 hover:border-sky-400
                          px-6 py-3 rounded-xl font-semibold transition">
                    Produk Premium
                </a>
            </div>
        </div>

        {{-- PRODUK / VISUAL --}}
        <div class="relative mt-12 md:mt-0">
            <div class="absolute -top-10 -right-10 w-56 h-56 sm:w-72 sm:h-72
                        bg-sky-500/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-56 h-56 sm:w-72 sm:h-72
                        bg-indigo-500/20 rounded-full blur-3xl"></div>

            <div class="relative bg-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
                <h3 class="text-base sm:text-lg font-semibold mb-4 text-sky-400">
                    Produk Unggulan
                </h3>

                <ul class="space-y-3 text-slate-200 text-sm sm:text-base">
                    <li>✔ Netflix Premium</li>
                    <li>✔ CapCut Pro</li>
                    <li>✔ Canva Pro</li>
                    <li>✔ Spotify Premium</li>
                    <li>✔ Viu Premium</li>
                </ul>
            </div>
        </div>

    </div>
</section>
