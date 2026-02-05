@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-4 py-20 space-y-20">

    {{-- HEADER --}}
    <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900">
            Klien yang Mempercayai Kami
        </h1>
        <p class="mt-5 text-lg text-slate-600 max-w-3xl mx-auto">
            Kami berkolaborasi dengan berbagai perusahaan, organisasi,
            dan startup untuk menghadirkan solusi digital yang inovatif,
            berdampak, dan berkelanjutan.
        </p>
    </div>

    {{-- HIGHLIGHT STATS --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
        <div class="bg-white rounded-xl shadow p-8">
            <h3 class="text-4xl font-bold text-slate-900">50+</h3>
            <p class="mt-2 text-slate-600">Klien Aktif</p>
        </div>
        <div class="bg-white rounded-xl shadow p-8">
            <h3 class="text-4xl font-bold text-slate-900">100+</h3>
            <p class="mt-2 text-slate-600">Proyek Selesai</p>
        </div>
        <div class="bg-white rounded-xl shadow p-8">
            <h3 class="text-4xl font-bold text-slate-900">5+</h3>
            <p class="mt-2 text-slate-600">Tahun Pengalaman</p>
        </div>
    </div>

    {{-- ARTICLE CONTENT --}}
    <article class="prose prose-slate max-w-3xl mx-auto">
        <p>
            Kepercayaan klien adalah fondasi dari setiap kerja sama yang kami
            bangun. Kami selalu mengutamakan kualitas, ketepatan waktu, dan
            pendekatan solusi yang tepat sasaran sesuai dengan kebutuhan bisnis.
        </p>

        <p>
            Dengan pengalaman di bidang teknologi digital, kami telah membantu
            berbagai klien dalam mengembangkan aplikasi, sistem informasi,
            platform digital, hingga solusi berbasis web dan mobile yang
            berorientasi pada hasil.
        </p>

        <p>
            Kami percaya bahwa kolaborasi yang solid akan menghasilkan solusi
            terbaik. Oleh karena itu, kami menjaga komunikasi yang terbuka,
            transparan, dan profesional di setiap tahap pengerjaan proyek.
        </p>
    </article>

    {{-- CTA --}}
    <div class="text-center">
        <a href="/contact"
           class="inline-flex items-center px-8 py-4 bg-slate-900 text-white
                  rounded-xl hover:bg-slate-800 transition">
            Mulai Kolaborasi Bersama Kami
        </a>
    </div>

</section>

@endsection
