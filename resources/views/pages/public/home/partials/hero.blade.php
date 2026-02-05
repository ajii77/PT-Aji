<section class="relative bg-slate-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">

        {{-- TEXT --}}
        <div>
            <span class="inline-block mb-4 px-4 py-1 text-sm bg-sky-500/20 text-sky-400 rounded-full">
                Aplikasi Digital Premium
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Solusi Aplikasi Premium <br>
                <span class="text-sky-400">Untuk Kebutuhan Digital Anda</span>
            </h1>

            <p class="text-slate-300 mb-8 max-w-xl">
                Kami menyediakan layanan penjualan dan aktivasi <strong>aplikasi digital premium resmi</strong>
                dengan harga kompetitif, proses cepat, dan dukungan penuh untuk kebutuhan hiburan,
                produktivitas, serta kreativitas digital Anda.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('about') }}"
                   class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                    Tentang Kami
                </a>

                <a href="{{ route('product') }}"
                   class="border border-slate-500 hover:border-sky-400 px-6 py-3 rounded-lg font-semibold transition">
                    Produk Premium
                </a>
            </div>
        </div>

        {{-- VISUAL / PRODUK --}}
        <div class="relative hidden md:block">
            <div class="absolute -top-10 -right-10 w-72 h-72 bg-sky-500/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-500/20 rounded-full blur-3xl"></div>

            <div class="relative bg-slate-800 rounded-2xl p-8 shadow-xl">
                <h3 class="text-lg font-semibold mb-4 text-sky-400">
                    Produk Unggulan
                </h3>

                <ul class="space-y-4 text-slate-200">
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
