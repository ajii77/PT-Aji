@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-20">

    {{-- HERO --}}
    <div class="text-center max-w-3xl mx-auto space-y-3">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900">
            Tentang Kami
        </h1>

        <p class="text-base sm:text-lg text-slate-600 leading-normal">
            <strong>PT Aji Digital Solutions</strong> merupakan penyedia
            <span class="font-semibold text-slate-900">produk digital dan akun aplikasi premium</span>
            berbasis <span class="font-semibold text-indigo-600">subscription</span>.
        </p>

        <p class="text-sm sm:text-base text-slate-500 leading-normal">
            Kami menyediakan Netflix, Canva, Spotify, CapCut, dan layanan digital lainnya
            dengan sistem aktivasi cepat dan support aktif.
        </p>

        <div class="pt-5 flex justify-center gap-4 flex-wrap">
            <a href="{{ url('/pages/product') }}"
               class="rounded-xl bg-slate-900 px-6 py-3 text-sm font-semibold text-white hover:bg-slate-800 transition">
                Lihat Produk
            </a>

            <a href="{{ route('contact') }}"
               class="rounded-xl border border-slate-300 px-6 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-100 transition">
                Hubungi Kami
            </a>
        </div>
    </div>

    {{-- PROFIL + IMAGE --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        {{-- TEXT --}}
        <div class="space-y-4">
            <h2 class="text-3xl font-extrabold text-slate-900">
                Profil Perusahaan
            </h2>

            <p class="text-slate-700 leading-normal">
                <strong>PT Aji Digital Solutions</strong> berfokus pada penjualan akun aplikasi premium
                untuk kebutuhan hiburan, desain, dan produktivitas digital.
            </p>

            <p class="text-slate-700 leading-normal">
                Kami menghadirkan Canva, CapCut, Spotify, dan Netflix
                dengan sistem akun siap pakai, aman, dan mudah digunakan.
            </p>

            {{-- TAG --}}
            <div class="flex flex-wrap gap-3 pt-2">
                @foreach ([
                    'Akun Premium',
                    'Aktivasi Cepat',
                    'Support Aktif',
                    'Upgrade Mudah'
                ] as $item)
                    <span class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                        {{ $item }}
                    </span>
                @endforeach
            </div>

            {{-- MINI INFO --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-3">
                <div class="rounded-2xl border p-4">
                    <p class="font-semibold text-slate-900 text-sm">Cepat</p>
                    <p class="text-xs text-slate-600 mt-1">Aktivasi instan</p>
                </div>
                <div class="rounded-2xl border p-4">
                    <p class="font-semibold text-slate-900 text-sm">Praktis</p>
                    <p class="text-xs text-slate-600 mt-1">Langsung pakai</p>
                </div>
                <div class="rounded-2xl border p-4">
                    <p class="font-semibold text-slate-900 text-sm">Support</p>
                    <p class="text-xs text-slate-600 mt-1">Bantuan aktif</p>
                </div>
            </div>
        </div>

        {{-- IMAGE --}}
        <div class="relative">
            {{-- BACKGROUND GLOW --}}
            <div class="absolute -inset-4 bg-gradient-to-br from-indigo-100 to-sky-100 rounded-3xl blur-2xl opacity-70"></div>

            {{-- IMAGE CARD --}}
            <div class="relative rounded-3xl overflow-hidden border bg-white shadow">
                <img
                    src="https://assets.p-store.net/images/products/1745251523-5dJiEG0fEcL3CHMGIjRT.jpg"
                    alt="Produk Digital Premium"
                    class="w-full h-80 object-cover object-top -translate-y-4 transition"
                >
            </div>

            {{-- LABEL --}}
            <div class="absolute bottom-4 left-4 right-4">
                <div class="rounded-xl bg-white/80 backdrop-blur px-4 py-3 shadow border">
                    <p class="font-semibold text-slate-900 text-sm">
                        Pusat Aplikasi Premium
                    </p>
                    <p class="text-xs text-slate-600">
                        Canva • CapCut • Spotify • Netflix
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection
