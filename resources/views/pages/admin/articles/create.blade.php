@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-slate-900">Tambah Artikel</h1>
        <p class="mt-2 text-slate-600">Buat artikel baru untuk ditampilkan di halaman publik.</p>
    </div>

    <div class="rounded-3xl border border-slate-200 bg-white shadow-sm">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8 space-y-6">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title" class="block text-sm font-semibold text-slate-900">Judul</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    required
                    class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 placeholder:text-slate-400
                           focus:outline-none focus:ring-2 focus:ring-emerald-500/30
                           @error('title') border-red-300 ring-2 ring-red-200 @enderror"
                    placeholder="Contoh: Strategi UI/UX Premium untuk Produk Digital"
                >
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Image --}}
            <label for="thumbnail" class="block text-sm font-semibold text-slate-900">Thumbnail (Opsional)</label>
<input
  type="file"
  id="thumbnail"
  name="thumbnail"
  accept="image/*"
  class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-700
         file:mr-4 file:rounded-xl file:border-0 file:bg-slate-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white
         hover:file:bg-slate-800
         focus:outline-none focus:ring-2 focus:ring-emerald-500/30
         @error('thumbnail') border-red-300 ring-2 ring-red-200 @enderror"
/>
@error('thumbnail')
  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror

            {{-- Content --}}
            <div>
                <label for="content" class="block text-sm font-semibold text-slate-900">Konten</label>
                <textarea
                    id="content"
                    name="content"
                    rows="8"
                    required
                    class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 placeholder:text-slate-400
                           focus:outline-none focus:ring-2 focus:ring-emerald-500/30
                           @error('content') border-red-300 ring-2 ring-red-200 @enderror"
                    placeholder="Tulis isi artikel di sini..."
                >{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                {{-- Author --}}
                <div>
                    <label for="author" class="block text-sm font-semibold text-slate-900">Penulis</label>
                    <input
                        type="text"
                        id="author"
                        name="author"
                        value="{{ old('author') }}"
                        required
                        class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 placeholder:text-slate-400
                               focus:outline-none focus:ring-2 focus:ring-emerald-500/30
                               @error('author') border-red-300 ring-2 ring-red-200 @enderror"
                        placeholder="Nama penulis"
                    >
                    @error('author')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            {{-- ACTIONS --}}
            <div class="flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-end pt-2">
                <a href="{{ route('admin.articles.store') }}"
                   class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-6 py-3 font-semibold text-slate-900 hover:bg-slate-50 transition">
                    Batal
                </a>
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-2xl bg-slate-900 px-6 py-3 font-semibold text-white hover:bg-slate-800 transition">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
