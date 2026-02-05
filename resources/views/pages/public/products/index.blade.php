@extends('layouts.app')

@section('content')

<section class="space-y-16">

    {{-- HEADER --}}
    <div class="text-center">
        <h1 class="text-4xl font-bold text-slate-900">Produk & Layanan Kami</h1>
        <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
            Solusi aplikasi digital premium untuk kebutuhan bisnis modern.
        </p>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse ($products as $product)

            @php
                $waNumber = '62895391640225'; // GANTI nomor WA di sini
                $waText = urlencode("Halo, saya tertarik dengan produk {$product->name}. Bisa minta info lebih lanjut?");
                $waLink = "https://wa.me/{$waNumber}?text={$waText}";
            @endphp

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                {{-- IMAGE (CLICKABLE TO WA) --}}
                <a href="{{ $waLink }}" target="_blank" class="block">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}"
                             class="w-full h-48 object-contain bg-slate-100">
                    @else
                        <div class="w-full h-48 bg-slate-100 flex items-center justify-center text-slate-400">
                            No Image
                        </div>
                    @endif
                </a>

                <div class="p-6 space-y-3">

                    {{-- TITLE (CLICKABLE TO WA) --}}
                    <a href="{{ $waLink }}" target="_blank">
                        <h3 class="text-xl font-semibold text-slate-800 hover:text-green-600 transition">
                            {{ $product->name }}
                        </h3>
                    </a>

                    <p class="text-slate-600 text-sm">
                        {{ \Illuminate\Support\Str::limit($product->description, 120) }}
                    </p>

                    {{-- CTA BUTTON TO WA --}}
                    <a href="{{ $waLink }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 mt-4 rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700 transition">
                        Hubungi via WhatsApp
                        <span>💬</span>
                    </a>

                </div>
            </div>

        @empty
            <div class="col-span-full text-center text-slate-500">
                Belum ada produk yang tersedia.
            </div>
        @endforelse

    </div>

</section>

@endsection
