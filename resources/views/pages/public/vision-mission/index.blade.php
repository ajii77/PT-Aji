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
        <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/70 px-4 py-1.5 text-sm text-slate-700 shadow-sm backdrop-blur">
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
            <span>Premium App Marketplace</span>
        </span>

        <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
            Visi &amp; Misi
        </h1>

        <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600 sm:text-lg">
            Komitmen kami menghadirkan <span class="font-semibold text-slate-900">app premium siap pakai</span>
            yang <span class="font-semibold text-emerald-700">bernilai tinggi</span>, aman, dan mudah diadopsi untuk
            mempercepat pertumbuhan bisnis.
        </p>

        <div class="mt-8 flex items-center justify-center gap-3">
            <span class="h-px w-14 bg-slate-200"></span>
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
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
                        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-900 text-white shadow-sm font-extrabold">
                            V
                        </div>
                        <span class="absolute -bottom-2 -right-2 h-5 w-5 rounded-full bg-emerald-500 ring-4 ring-white"></span>
                    </div>

                    <div>
                        <h2 class="text-xl font-extrabold text-slate-900 sm:text-2xl">Visi</h2>
                        <p class="mt-3 leading-relaxed text-slate-700">
                            Menjadi <span class="font-semibold text-slate-900">penyedia app premium</span> yang terpercaya,
                            dengan katalog solusi siap pakai yang <span class="font-semibold text-emerald-700">rapi</span>,
                            <span class="font-semibold text-emerald-700">aman</span>, dan
                            <span class="font-semibold text-emerald-700">siap scale</span>—membantu bisnis
                            <span class="font-semibold text-slate-900">lebih cepat go-live</span> tanpa kompromi kualitas.
                        </p>
                    </div>
                </div>

                {{-- HIGHLIGHTS --}}
                <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Value</p>
                        <p class="mt-1 text-sm text-slate-600">ROI jelas & siap jual</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Trust</p>
                        <p class="mt-1 text-sm text-slate-600">Secure & reliable</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/70 p-4">
                        <p class="text-xs font-semibold text-slate-900">Scale</p>
                        <p class="mt-1 text-sm text-slate-600">Siap tumbuh cepat</p>
                    </div>
                </div>

                {{-- FOKUS VISI --}}
                <div class="mt-7 rounded-2xl border border-slate-200 bg-white p-5">
                    <p class="text-sm font-semibold text-slate-900">Fokus Visi</p>
                    <ul class="mt-4 space-y-3 text-sm text-slate-700">
                        <li class="flex gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">✓</span>
                            <span>Produk app premium siap pakai dengan standar tampilan & performa tinggi</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">✓</span>
                            <span>Pengalaman pembelian yang jelas: demo, fitur, benefit, dan paket harga transparan</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">✓</span>
                            <span>After-sales yang membantu adopsi: setup, training singkat, dan support terukur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="absolute -top-24 -right-24 h-56 w-56 rounded-full bg-emerald-200/40 blur-3xl opacity-0 transition group-hover:opacity-100"></div>
        </div>

        {{-- MISI --}}
        <div class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white/75 shadow-sm backdrop-blur transition hover:shadow-xl">
            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-indigo-500 via-slate-900 to-indigo-500 opacity-70"></div>

            <div class="p-7 sm:p-10">
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-slate-900 text-white shadow-sm font-extrabold">
                            M
                        </div>
                        <span class="absolute -bottom-2 -right-2 h-5 w-5 rounded-full bg-indigo-500 ring-4 ring-white"></span>
                    </div>

                    <div>
                        <h2 class="text-xl font-extrabold text-slate-900 sm:text-2xl">Misi</h2>
                        <p class="mt-3 leading-relaxed text-slate-700">
                            Menyediakan proses <span class="font-semibold text-slate-900">penjualan app premium</span>
                            yang profesional, cepat, dan transparan—mulai dari pemilihan produk, demo,
                            hingga implementasi—agar klien memperoleh hasil nyata.
                        </p>
                    </div>
                </div>

                {{-- STEPS --}}
                <div class="mt-7 space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-slate-300">
                        <div class="flex items-start gap-4">
                            <div class="grid h-10 w-10 place-items-center rounded-xl bg-emerald-50 text-emerald-700 font-extrabold">1</div>
                            <div>
                                <p class="font-semibold text-slate-900">Seleksi solusi yang tepat</p>
                                <p class="mt-1 text-sm text-slate-600">
                                    Memetakan kebutuhan bisnis, merekomendasikan app yang paling relevan, dan menyiapkan demo yang jelas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-slate-300">
                        <div class="flex items-start gap-4">
                            <div class="grid h-10 w-10 place-items-center rounded-xl bg-indigo-50 text-indigo-700 font-extrabold">2</div>
                            <div>
                                <p class="font-semibold text-slate-900">Kualitas & nilai premium</p>
                                <p class="mt-1 text-sm text-slate-600">
                                    Menjaga standar UI/UX, performa, keamanan, dan dokumentasi produk agar siap dipakai & dipercaya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-slate-300">
                        <div class="flex items-start gap-4">
                            <div class="grid h-10 w-10 place-items-center rounded-xl bg-amber-50 text-amber-700 font-extrabold">3</div>
                            <div>
                                <p class="font-semibold text-slate-900">Transparansi pembelian</p>
                                <p class="mt-1 text-sm text-slate-600">
                                    Harga/paket jelas, scope terdefinisi, timeline implementasi rapi, serta update progres yang terukur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-slate-300">
                        <div class="flex items-start gap-4">
                            <div class="grid h-10 w-10 place-items-center rounded-xl bg-fuchsia-50 text-fuchsia-700 font-extrabold">4</div>
                            <div>
                                <p class="font-semibold text-slate-900">After-sales & dukungan adopsi</p>
                                <p class="mt-1 text-sm text-slate-600">
                                    Membantu onboarding, konfigurasi awal, dan support agar app benar-benar dipakai dan berdampak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="mt-8 rounded-3xl bg-gradient-to-br from-slate-900 to-slate-800 p-6 text-white">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-extrabold sm:text-xl">Mau konsultasi app premium yang cocok?</h3>
                            <p class="mt-2 text-sm text-slate-200">
                                Ceritakan kebutuhan bisnis Anda — kami bantu rekomendasi produk, demo, dan estimasi implementasi.
                            </p>
                        </div>
                        <div class="hidden h-10 w-10 place-items-center rounded-2xl border border-white/10 bg-white/10 sm:grid">
                            ✦
                        </div>
                    </div>

                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2">
                        <a href="/contact"
                           class="inline-flex w-full items-center justify-center rounded-2xl bg-white px-6 py-3 font-semibold text-slate-900 transition hover:bg-slate-100">
                            Hubungi Kami
                        </a>

                        <a href="https://wa.me/62895391640225?text={{ urlencode('Halo, saya ingin konsultasi app premium yang cocok untuk bisnis saya. Bisa dibantu?') }}"
                           target="_blank" rel="noopener"
                           class="inline-flex w-full items-center justify-center rounded-2xl border border-white/20 bg-white/10 px-6 py-3 font-semibold text-white transition hover:bg-white/15">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute -bottom-24 -left-24 h-56 w-56 rounded-full bg-indigo-200/40 blur-3xl opacity-0 transition group-hover:opacity-100"></div>
        </div>

    </div>
</section>
@endsection
