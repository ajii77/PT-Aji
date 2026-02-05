@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-6">Edit Produk</h2>

<div class="bg-white rounded-xl shadow p-6 max-w-2xl">
    <form action="{{ route('admin.products.update', $product->id) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">
        @csrf
        @method('PUT')

        {{-- NAMA --}}
        <div>
            <label class="block text-sm font-medium text-slate-700">
                Nama Produk
            </label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $product->name) }}"
                   class="mt-1 w-full rounded border-slate-300 focus:border-indigo-500 focus:ring-indigo-500">
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- DESKRIPSI --}}
        <div>
            <label class="block text-sm font-medium text-slate-700">
                Deskripsi
            </label>
            <textarea name="description"
                      rows="4"
                      class="mt-1 w-full rounded border-slate-300 focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- IMAGE --}}
        <div>
            <label class="block text-sm font-medium text-slate-700">
                Gambar Produk
            </label>

            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}"
                     class="w-24 h-24 object-cover rounded mb-2">
            @endif

            <input type="file"
                   name="image"
                   class="w-full text-sm text-slate-600">
            @error('image')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- ACTION --}}
        <div class="flex gap-3">
            <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Update
            </button>

            <a href="{{ route('admin.products.index') }}"
               class="px-4 py-2 rounded border border-slate-300 text-slate-700 hover:bg-slate-100">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
