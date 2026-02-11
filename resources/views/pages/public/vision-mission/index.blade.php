@extends('layouts.app')

@section('content')
<section class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-14 sm:py-16">

    {{-- BACKGROUND ACCENTS --}}
    <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-200/40 blur-3xl"></div>
        <div class="absolute -bottom-28 -left-28 h-80 w-80 rounded-full bg-indigo-200/40 blur-3xl"></div>
        <div class="absolute inset-x-0 top-24 h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
    </div>

    {{-- HEADER --}}
    <div class="mx-auto max-w-3xl text-center">
        <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
            Visi &amp; Misi
        </h1>

        <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg">
            Komitmen kami menyediakan <span class="font-semibold text-slate-900">aplikasi digital premium</span>
            yang <span class="font-semibold text-emerald-700">aman</span>, mudah digunakan, dan
            <span class="font-semibold text-emerald-700">siap dipakai</span> untuk kebutuhan hiburan
            & produktivitas harian.
        </p>

        <div class="mt-8 flex items-center justify-center gap-3">
            <span class="h-px w-14 bg-slate-200"></span>
            <span class="h-px w-14 bg-slate-200"></span>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="mt-12 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-10">

        {{-- VISI --}}
        <div class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white/75 shadow-sm backdrop-blur transition hover:shadow-xl">
            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-500 via-slate-900 to-emerald-500 opacity-70"></div>

            <div class="p-7 sm:p-10">
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-900 text-white font-extrabold">
                            V
                        </div>
                        <span class="absolute -bottom-2 -right-2 h-5 w-5 rounded-full bg-emerald-500 ring-4 ring-white"></span>
                    </div>

                    <div>
                        <h2 class="text-xl font-extrabold text-slate-900 sm:text-2xl">Visi</h2>
                        <p class="mt-3 leading-relaxed text-slate-700">
                            Menjadi <span class="font-semibold text-slate-900">penyedia aplikasi digital premium</span>
                            yang <span class="font-semibold text-emerald-700">terpercaya</span>,
                            <span class="font-semibold text-emerald-700">terjangkau</span>, dan
                            <span class="font-semibold text-emerald-700">mudah diakses</span>
                            oleh semua kalangan.
                        </p>
                    </div>
                </div>

                {{-- HIGHLIGHTS --}}
                <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Aman</p>
                        <p class="mt-1 text-sm text-slate-600">Proses jelas & minim risiko</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Praktis</p>
                        <p class="mt-1 text-sm text-slate-600">Siap pakai tanpa ribet</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Terjangkau</p>
                        <p class="mt-1 text-sm text-slate-600">Harga bersahabat</p>
                    </div>
                </div>

                {{-- FOKUS VISI --}}
                <div class="mt-7 rounded-2xl border border-slate-200 bg-white p-5">
                    <p class="text-sm font-semibold text-slate-900">Fokus Kami</p>
                    <ul class="mt-4 space-y-3 text-sm text-slate-700">
                        <li class="flex gap-3">
                            <span class="mt-0.5 h-6 w-6 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center">✓</span>
                            <span>Aplikasi premium populer seperti Netflix, Canva, Spotify, CapCut, dll</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 h-6 w-6 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center">✓</span>
                            <span>Aktivasi cepat & panduan penggunaan</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 h-6 w-6 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center">✓</span>
                            <span>Dukungan jika terjadi kendala selama masa aktif</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- MISI --}}
        <div class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white/75 shadow-sm backdrop-blur transition hover:shadow-xl">
            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-indigo-500 via-slate-900 to-indigo-500 opacity-70"></div>

            <div class="p-7 sm:p-10">
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-900 text-white font-extrabold">
                            M
                        </div>
                        <span class="absolute -bottom-2 -right-2 h-5 w-5 rounded-full bg-indigo-500 ring-4 ring-white"></span>
                    </div>

                    <div>
                        <h2 class="text-xl font-extrabold text-slate-900 sm:text-2xl">Misi</h2>
                        <p class="mt-3 leading-relaxed text-slate-700">
                            Memberikan layanan <span class="font-semibold text-slate-900">penjualan aplikasi premium</span>
                            yang cepat, ramah, dan transparan agar pelanggan mendapatkan pengalaman terbaik.
                        </p>
                    </div>
                </div>

                {{-- STEPS --}}
                <div class="mt-7 space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5">
                        <p class="font-semibold text-slate-900">1. Pilihan aplikasi lengkap</p>
                        <p class="mt-1 text-sm text-slate-600">
                            Menyediakan berbagai aplikasi premium sesuai kebutuhan hiburan & produktivitas.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5">
                        <p class="font-semibold text-slate-900">2. Proses cepat & jelas</p>
                        <p class="mt-1 text-sm text-slate-600">
                            Aktivasi cepat dengan panduan yang mudah dipahami.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5">
                        <p class="font-semibold text-slate-900">3. Harga transparan</p>
                        <p class="mt-1 text-sm text-slate-600">
                            Paket & masa aktif jelas tanpa biaya tersembunyi.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5">
                        <p class="font-semibold text-slate-900">4. Support responsif</p>
                        <p class="mt-1 text-sm text-slate-600">
                            Siap membantu jika ada kendala selama penggunaan.
                        </p>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="mt-8 rounded-3xl bg-gradient-to-br from-slate-900 to-slate-800 p-6 text-white">
                    <h3 class="text-lg font-extrabold sm:text-xl">
                        Mau tanya atau order aplikasi premium?
                    </h3>
                    <p class="mt-2 text-sm text-slate-200">
                        Hubungi kami sekarang, fast respon & siap bantu.
                    </p>

                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2">
                        <a href="{{ route('contact') }}"
   class="inline-flex items-center justify-center rounded-2xl bg-white px-6 py-3 font-semibold text-slate-900 hover:bg-slate-100 transition">
    Hubungi Kami
</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
