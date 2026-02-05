@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    {{-- HEADER --}}
    <div class="text-center max-w-2xl mx-auto mb-12">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
            Gallery Kami
        </h1>
        <p class="mt-3 text-slate-600">
           Testimoni kami
        </p>
    </div>

    {{-- GALLERY GRID --}}
    @if($galleries->count())
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @foreach ($galleries as $item)
                <div class="group relative overflow-hidden rounded-2xl shadow-sm border border-slate-200 bg-white">

                    <img src="{{ asset('storage/' . $item->image) }}"
                         alt="{{ $item->title ?? 'Gallery Image' }}"
                         class="h-98 w-full object-cover transition-transform duration-300 group-hover:scale-110">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-end">
                        <div class="p-4 text-white">
                            <p class="text-sm font-semibold">
                                {{ $item->title ?? 'Dokumentasi' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        {{-- EMPTY STATE --}}
        <div class="text-center text-slate-500">
            Belum ada foto yang ditampilkan.
        </div>
    @endif

</section>
@endsection
