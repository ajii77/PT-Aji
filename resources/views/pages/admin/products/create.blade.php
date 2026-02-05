@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-6">Tambah Produk</h2>

<div class="bg-white rounded-xl shadow p-6 max-w-xl">
    <form method="POST"
          action="{{ route('admin.products.store') }}"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <div>
            <label class="block text-sm font-semibold mb-1">Nama Produk</label>
            <input type="text" name="name"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Deskripsi</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded px-3 py-2"
                      required></textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Gambar Produk</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="flex gap-3">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                Simpan
            </button>

            <a href="{{ route('admin.products.index') }}"
               class="px-4 py-2 border rounded">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
