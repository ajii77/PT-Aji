@extends('layouts.app')

@section('content')

<section class="space-y-16">

    {{-- HEADER --}}
    <div class="text-center">
        <h1 class="text-4xl font-bold text-slate-900">
            Produk & Layanan Kami
        </h1>
        <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
            Solusi aplikasi digital premium untuk kebutuhan bisnis modern.
        </p>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse ($products as $product)

            @php
                $waNumber = '62895391640225';
                $waText = urlencode("Halo, saya tertarik dengan produk {$product->name}. Bisa minta info lebih lanjut?");
                $waLink = "https://wa.me/{$waNumber}?text={$waText}";

                // Pecah deskripsi jadi list
                $priceList = preg_split("/\r\n|\n|\r/", $product->description);
            @endphp

            {{-- CARD --}}
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">

                {{-- IMAGE --}}
                <a href="{{ $waLink }}" target="_blank">
                    @if ($product->image)
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-48 object-contain bg-slate-100"
                        >
                    @else
                        <div class="w-full h-48 bg-slate-100 flex items-center justify-center text-slate-400">
                            No Image
                        </div>
                    @endif
                </a>

                {{-- CONTENT --}}
                <div class="p-6 flex flex-col flex-1">

                    {{-- TITLE --}}
                    <h3 class="text-xl font-semibold text-slate-800">
                        {{ $product->name }}
                    </h3>

                    {{-- DESCRIPTION / PRICE LIST --}}
                    <ul class="mt-4 space-y-1 text-sm text-slate-600">
                        @foreach ($priceList as $item)
                            @if (trim($item) !== '')
                                <li class="flex gap-2">
                                    <span>•</span>
                                    <span>{{ trim($item) }}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    {{-- CTA (SELALU DI BAWAH) --}}
                    <div class="mt-auto pt-6">
                        <a
                            href="{{ $waLink }}"
                            target="_blank"
                            class="flex w-full items-center justify-center gap-2
                                   rounded-lg bg-green-600 px-4 py-3
                                   text-sm font-semibold text-white
                                   hover:bg-green-700 transition"
                        >
                            Hubungi via WhatsApp 💬
                        </a>
                    </div>

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
