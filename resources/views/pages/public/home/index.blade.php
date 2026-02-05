@extends('layouts.app')

@section('content')

{{-- HERO --}}
@include('pages.public.home.partials.hero')

{{-- ABOUT SHORT --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-3xl font-bold mb-4">
                Tentang Perusahaan
            </h2>
            <p class="text-slate-700 leading-relaxed mb-6">
                <strong>PT Aji Digital Solutions</strong> adalah perusahaan
                yang bergerak di bidang <strong>penjualan dan pengembangan aplikasi digital premium</strong>,
                menyediakan solusi aplikasi berkualitas tinggi yang dirancang
                untuk mendukung pertumbuhan bisnis modern dan kebutuhan teknologi
                masa kini.
            </p>

            <a href="{{ route('about') }}"
               class="text-sky-500 font-semibold hover:underline">
                Selengkapnya →
            </a>
        </div>

        <div class="bg-slate-50 rounded-xl shadow p-8">
            <h3 class="font-semibold text-xl mb-4">
                Mengapa Memilih Kami?
            </h3>
            <ul class="space-y-3 text-slate-700">
                <li>✔ Aplikasi premium dengan kualitas teruji</li>
                <li>✔ Desain modern & user-friendly</li>
                <li>✔ Solusi siap pakai & custom sesuai kebutuhan</li>
                <li>✔ Dukungan teknis & pembaruan berkelanjutan</li>
            </ul>
        </div>

    </div>
</section>

@endsection
