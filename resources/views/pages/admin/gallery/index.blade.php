@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    {{-- HEADER --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Manajemen Gallery</h2>
            <p class="mt-1 text-sm text-slate-600">
                Kelola foto & dokumentasi website
            </p>
        </div>

        {{-- BUTTON UPLOAD --}}
        <a href="{{ route('admin.gallery.create') }}"
           class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 transition">
            + Upload Foto
        </a>
    </div>

    {{-- CONTENT --}}
    <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

        @if(isset($galleries) && $galleries->count())
            {{-- GRID FOTO --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-6">
                @foreach ($galleries as $item)
                    <div class="group relative overflow-hidden rounded-lg border border-slate-200">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             alt="Gallery Image"
                             class="h-40 w-full object-cover">

                        {{-- ACTION --}}
                        <div class="absolute inset-0 flex items-center justify-center gap-2 bg-black/50 opacity-0 group-hover:opacity-100 transition">
                            <a href="{{ route('admin.gallery.edit', $item->id) }}"
                               class="rounded bg-white px-3 py-1 text-xs font-semibold text-slate-900">
                                Edit
                            </a>

                            <form action="{{ route('admin.gallery.destroy', $item->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Hapus foto ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="rounded bg-red-600 px-3 py-1 text-xs font-semibold text-white">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- EMPTY STATE --}}
            <div class="flex flex-col items-center justify-center py-16 text-center">
                <div class="mb-4 h-14 w-14 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    📷
                </div>
                <p class="text-sm text-slate-600">
                    Belum ada foto di gallery.
                </p>
                <a href="{{ route('admin.gallery.create') }}"
                   class="mt-4 inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 transition">
                    Upload Foto Pertama
                </a>
            </div>
        @endif

    </div>

</div>
@endsection
