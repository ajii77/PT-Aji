@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gray-50 py-10">
    <div class="mx-auto max-w-4xl px-4">
        {{-- Header --}}
        <div class="mb-6 flex items-start justify-between gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Edit Artikel</h1>
                <p class="mt-1 text-sm text-gray-600">Perbarui informasi artikel dengan rapi dan terstruktur.</p>
            </div>

            <a href="{{ route('admin.articles.index') }}"
               class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100">
                Kembali
            </a>
        </div>

        {{-- Card --}}
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
            {{-- Error --}}
            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-red-700">
                    <div class="flex items-start gap-3">
                        <div class="mt-0.5">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.5a.75.75 0 00-1.5 0v4.25c0 .414.336.75.75.75h.0a.75.75 0 00.75-.75V6.5zM10 14.5a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Terjadi kesalahan:</p>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('admin.articles.update', $article->id) }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Grid --}}
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    {{-- Left (form main) --}}
                    <div class="md:col-span-2 space-y-6">
                        {{-- Title --}}
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-800">Judul</label>
                            <input
                                id="title"
                                type="text"
                                name="title"
                                value="{{ old('title', $article->title) }}"
                                required
                                class="mt-2 w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-gray-900 shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
                                placeholder="Masukkan judul artikel"
                            >
                            <p class="mt-2 text-xs text-gray-500">Judul akan digunakan untuk membuat slug secara otomatis.</p>
                        </div>

                        {{-- Author --}}
                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-800">Author</label>
                            <input
                                id="author"
                                type="text"
                                name="author"
                                value="{{ old('author', $article->author) }}"
                                class="mt-2 w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-gray-900 shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
                                placeholder="Nama penulis (opsional)"
                            >
                        </div>

                        {{-- Content --}}
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-800">Konten</label>
                            <textarea
                                id="content"
                                name="content"
                                rows="10"
                                required
                                class="mt-2 w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-gray-900 shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
                                placeholder="Tulis konten artikel di sini..."
                            >{{ old('content', $article->content) }}</textarea>
                        </div>
                    </div>

                    {{-- Right (thumbnail box) --}}
                    <div class="space-y-4">
                        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-4">
                            <p class="text-sm font-semibold text-gray-900">Thumbnail</p>
                            <p class="mt-1 text-xs text-gray-600">Upload gambar baru untuk mengganti thumbnail.</p>

                            <div class="mt-4">
                                <input
                                    type="file"
                                    name="thumbnail"
                                    accept="image/*"
                                    class="block w-full text-sm text-gray-700 file:mr-4 file:rounded-lg file:border-0 file:bg-gray-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-gray-800"
                                >
                            </div>

                            @if ($article->thumbnail)
                                <div class="mt-4">
                                    <p class="mb-2 text-xs font-medium text-gray-700">Thumbnail saat ini:</p>
                                    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
                                        <img
                                            src="{{ asset('storage/'.$article->thumbnail) }}"
                                            alt="Thumbnail"
                                            class="h-44 w-full object-cover"
                                        >
                                    </div>
                                </div>
                            @else
                                <div class="mt-4 rounded-xl border border-dashed border-gray-300 bg-white p-6 text-center">
                                    <p class="text-xs text-gray-500">Belum ada thumbnail.</p>
                                </div>
                            @endif
                        </div>

                        {{-- Tips --}}
                        <div class="rounded-2xl border border-gray-200 bg-white p-4">
                            <p class="text-sm font-semibold text-gray-900">Tips</p>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-xs text-gray-600">
                                <li>Ukuran disarankan 1200×630.</li>
                                <li>Format JPG/PNG, maksimal 2MB.</li>
                                <li>Pastikan gambar tidak blur.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <a href="{{ route('admin.articles.index') }}"
                       class="inline-flex justify-center rounded-xl border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100">
                        Batal
                    </a>

                    <button type="submit"
                            class="inline-flex justify-center rounded-xl bg-gray-900 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900/20">
                        Update Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
