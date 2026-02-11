@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-4 py-20 space-y-20">

    {{-- HEADER --}}
    <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900">
            Dipercaya oleh Pengguna Kami
        </h1>
        <p class="mt-5 text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
            Kami menyediakan berbagai aplikasi premium dengan sistem yang aman,
            cepat, dan bergaransi. Layanan kami digunakan oleh pengguna individu
            yang membutuhkan solusi digital praktis dan terpercaya.
        </p>
    </div>

    {{-- HIGHLIGHT STATS --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
        <div class="bg-white rounded-2xl shadow-sm border p-8">
            <h3 class="text-4xl font-bold text-slate-900">50+</h3>
            <p class="mt-2 text-slate-600">Pengguna Aktif</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border p-8">
            <h3 class="text-4xl font-bold text-slate-900">100+</h3>
            <p class="mt-2 text-slate-600">Transaksi Berhasil</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border p-8">
            <h3 class="text-4xl font-bold text-slate-900">5+</h3>
            <p class="mt-2 text-slate-600">Tahun Pengalaman</p>
        </div>
    </div>

    {{-- CONTENT --}}
    <article class="prose prose-slate max-w-3xl mx-auto text-center">
        <p>
            Kepercayaan pengguna merupakan fondasi utama layanan kami.
            Oleh karena itu, kami selalu mengutamakan keamanan akun,
            kejelasan sistem, serta layanan yang responsif dan transparan.
        </p>

        <p>
            Dengan pengalaman di bidang layanan digital, kami membantu
            pengguna mendapatkan akses aplikasi premium yang stabil,
            mudah digunakan, dan sesuai dengan kebutuhan sehari-hari.
        </p>

        <p>
            Kami percaya bahwa layanan yang baik dibangun melalui komunikasi
            yang jelas, proses yang rapi, dan komitmen terhadap kepuasan pengguna.
        </p>
    </article>

   {{-- CTA --}}
<div class="text-center">
    <a href="{{ route('contact') }}"
       class="inline-flex items-center px-8 py-4 bg-slate-900 text-white
              rounded-xl font-semibold hover:bg-slate-800 transition">
        Hubungi Kami Sekarang
    </a>
</div>

</section>


@endsection
