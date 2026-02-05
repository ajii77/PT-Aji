@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">

    {{-- HERO / HEADER --}}
    <div class="text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center gap-2 mb-4 rounded-full bg-indigo-50 px-4 py-1 text-sm font-semibold text-indigo-600">
            <span class="h-2 w-2 rounded-full bg-indigo-600"></span>
            <span>Premium Apps • Subscription & License</span>
        </span>

        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900">
            Tentang Kami
        </h1>

        <p class="mt-5 text-base sm:text-lg text-slate-600">
            <strong>PT Aji Digital Solutions</strong> adalah perusahaan yang berfokus pada
            <span class="font-semibold text-slate-900">penjualan, pengelolaan, dan implementasi</span>
            <span class="font-semibold text-indigo-700">Aplikasi Premium berbasis lisensi/subscription</span>
            untuk individu, tim, hingga perusahaan.
        </p>

        <p class="mt-3 text-sm sm:text-base text-slate-500">
            Kami membantu Anda memilih paket yang tepat, aktivasi lisensi, manajemen user,
            hingga dukungan after-sales — sehingga aplikasi siap digunakan dengan cepat.
        </p>

        <div class="mt-7 flex justify-center gap-3 flex-wrap">
            <a href="{{ url('/pages/product') }}"
               class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-6 py-3 text-sm font-semibold text-white hover:bg-slate-800 transition">
                Lihat Katalog App Premium
            </a>

            <a href="{{ url('/contact') }}"
               class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-50 transition">
                Konsultasi Paket Lisensi
            </a>
        </div>
    </div>

    {{-- COMPANY PROFILE --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        {{-- TEXT --}}
        <div class="space-y-5">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                Profil Perusahaan
            </h2>

            <p class="text-slate-700 leading-relaxed">
                <strong>PT Aji Digital Solutions</strong> menyediakan layanan
                <span class="font-semibold">penjualan aplikasi premium</span> dengan skema
                <span class="font-semibold">subscription / lisensi</span> untuk kebutuhan produktivitas,
                desain, editing, hiburan, hingga operasional bisnis.
            </p>

            <p class="text-slate-700 leading-relaxed">
                Seperti layanan aplikasi populer yang digunakan sehari-hari
                <span class="font-semibold">(mis. Netflix, Canva, CapCut, Spotify, dll.)</span>,
                kami membantu dari sisi <span class="font-semibold">pemilihan paket</span>,
                <span class="font-semibold">aktivasi</span>, hingga <span class="font-semibold">support</span>
                agar penggunaan lebih efisien, legal, dan terkontrol.
            </p>

            {{-- CHIPS --}}
            <div class="flex flex-wrap gap-3 pt-4">
                <div class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                    Subscription & License Sales
                </div>
                <div class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                    Account Setup & Activation
                </div>
                <div class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                    Team/Business Management
                </div>
                <div class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                    Renewal & Support
                </div>
            </div>

            {{-- MINI STATS --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <p class="text-xs font-semibold text-slate-900">Cepat</p>
                    <p class="mt-1 text-sm text-slate-600">Aktivasi & onboarding</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <p class="text-xs font-semibold text-slate-900">Tertib</p>
                    <p class="mt-1 text-sm text-slate-600">Manajemen user & akses</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <p class="text-xs font-semibold text-slate-900">Support</p>
                    <p class="mt-1 text-sm text-slate-600">Bantuan & perpanjangan</p>
                </div>
            </div>
        </div>

        {{-- IMAGE / VISUAL --}}
        <div class="relative">
            <div class="absolute -inset-4 rounded-3xl bg-gradient-to-br from-indigo-100 to-sky-100 blur-2xl opacity-70"></div>
            <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow">
                <img src="https://assets.p-store.net/images/products/1745251523-5dJiEG0fEcL3CHMGIjRT.jpg"
                     alt="Premium Apps Subscription"
                     class="h-80 w-full object-cover">
            </div>

            {{-- Overlay badge --}}
            <div class="absolute bottom-4 left-4 right-4">
                <div class="rounded-2xl border border-slate-200 bg-white/80 backdrop-blur px-4 py-3 shadow-sm">
                    <p class="text-sm font-semibold text-slate-900">Satu tempat untuk kebutuhan app premium</p>
                    <p class="mt-0.5 text-xs text-slate-600">Paket personal, family, team, hingga bisnis</p>
                </div>
            </div>
        </div>
    </div>

    {{-- LAYANAN UTAMA --}}
    <div class="space-y-8">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                Bidang Layanan Utama
            </h2>
            <p class="mt-3 text-slate-600">
                Kami fokus pada penjualan aplikasi premium berbasis subscription/lisensi,
                lengkap dengan aktivasi, pengelolaan akun, dan dukungan penggunaan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- SUBSCRIPTION / LICENSE --}}
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm md:col-span-2">
                <div class="flex items-start gap-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-600 text-white grid place-items-center font-extrabold">
                        S
                    </div>
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900">
                            Penjualan & Pengelolaan Subscription App Premium
                        </h3>
                        <p class="mt-3 text-slate-700 leading-relaxed">
                            Kami membantu Anda mendapatkan akses aplikasi premium dengan paket yang sesuai kebutuhan:
                            personal, family, team, atau business.
                            Mulai dari konsultasi, aktivasi akun, hingga manajemen user dan perpanjangan.
                        </p>
                    </div>
                </div>

                <ul class="mt-6 space-y-3 text-slate-700 text-sm">
                    <li class="flex gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                        Kurasi & rekomendasi paket (sesuai kebutuhan dan budget)
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                        Aktivasi lisensi, setup akun, dan panduan penggunaan
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                        Manajemen user untuk tim/bisnis (akses, seat, role)
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                        Renewal/perpanjangan, upgrade/downgrade paket, dan support
                    </li>
                </ul>

                <div class="mt-7 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="rounded-2xl bg-slate-50 border border-slate-200 p-5">
                        <p class="text-sm font-semibold text-slate-900">Legal & Terukur</p>
                        <p class="mt-1 text-sm text-slate-600">Akses lebih rapi dan mudah dikelola</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 border border-slate-200 p-5">
                        <p class="text-sm font-semibold text-slate-900">Hemat Waktu</p>
                        <p class="mt-1 text-sm text-slate-600">Tidak ribet setup & troubleshooting</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 border border-slate-200 p-5">
                        <p class="text-sm font-semibold text-slate-900">After-sales</p>
                        <p class="mt-1 text-sm text-slate-600">Bantuan saat renewal/upgrade</p>
                    </div>
                </div>

                <a href="{{ url('/pages/product') }}"
                   class="mt-6 inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-6 py-3 text-sm font-semibold text-white hover:bg-slate-800 transition">
                    Konsultasi & Pilih Paket
                </a>

                <p class="mt-3 text-center text-xs text-slate-500">
                    *Nama aplikasi populer disebut sebagai contoh kategori penggunaan.
                </p>
            </div>

        </div>
    </div>

    {{-- COMPANY VALUES --}}
    <div class="rounded-3xl bg-slate-900 px-8 py-16 text-white">
        <h2 class="text-center text-2xl sm:text-3xl font-extrabold mb-12">
            Nilai-Nilai Perusahaan
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="space-y-3">
                <div class="mx-auto h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-lg font-bold">
                    ⚡
                </div>
                <h4 class="font-semibold text-lg">Cepat & Efisien</h4>
                <p class="text-sm text-slate-300">
                    Proses konsultasi, aktivasi, dan onboarding yang ringkas.
                </p>
            </div>

            <div class="space-y-3">
                <div class="mx-auto h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-lg font-bold">
                    🤝
                </div>
                <h4 class="font-semibold text-lg">Profesional</h4>
                <p class="text-sm text-slate-300">
                    Komunikasi jelas, transparan, dan bertanggung jawab.
                </p>
            </div>

            <div class="space-y-3">
                <div class="mx-auto h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-lg font-bold">
                    🛡️
                </div>
                <h4 class="font-semibold text-lg">Aman & Tertib</h4>
                <p class="text-sm text-slate-300">
                    Pengelolaan akun/lisensi yang rapi dan terkontrol.
                </p>
            </div>

            <div class="space-y-3">
                <div class="mx-auto h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-lg font-bold">
                    ⭐
                </div>
                <h4 class="font-semibold text-lg">Berorientasi Hasil</h4>
                <p class="text-sm text-slate-300">
                    Fokus pada manfaat nyata: produktivitas, kualitas, dan kenyamanan.
                </p>
            </div>
        </div>
    </div>

</section>

@endsection
