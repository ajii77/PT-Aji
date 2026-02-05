@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-6">Manajemen Produk</h2>

<div class="bg-white rounded-xl shadow p-6">
    <div class="flex justify-between items-center mb-4">
        <p class="text-slate-600">Daftar produk perusahaan</p>

        <a href="{{ route('admin.products.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            + Tambah Produk
        </a>
    </div>

    {{-- FLASH MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 rounded bg-green-100 px-4 py-2 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($products->isEmpty())
        <div class="text-slate-500 text-sm">
            Belum ada data produk.
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full border border-slate-200 text-sm">
                <thead class="bg-slate-100">
                    <tr>
                        <th class="border px-4 py-2 text-left">No</th>
                        <th class="border px-4 py-2 text-left">Nama</th>
                        <th class="border px-4 py-2 text-left">Deskripsi</th>
                        <th class="border px-4 py-2 text-left">Gambar</th>
                        <th class="border px-4 py-2 text-left">Tanggal</th>
                        <th class="border px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr class="hover:bg-slate-50 align-top">
                            <td class="border px-4 py-2">
                                {{ $loop->iteration }}
                            </td>

                            <td class="border px-4 py-2 font-medium">
                                {{ $product->name }}
                            </td>

                            <td class="border px-4 py-2 text-slate-600">
                                {{ \Illuminate\Support\Str::limit($product->description, 80) }}
                            </td>

                            <td class="border px-4 py-2">
                                @if($product->image)
                                    <img src="{{ asset('storage/'.$product->image) }}"
                                         class="w-16 h-16 object-cover rounded"
                                         alt="{{ $product->name }}">
                                @else
                                    <span class="text-slate-400">-</span>
                                @endif
                            </td>

                            <td class="border px-4 py-2">
                                {{ $product->created_at?->format('d M Y') }}
                            </td>

                            <td class="border px-4 py-2 text-center space-x-2">
                                {{-- EDIT --}}
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                   class="text-indigo-600 hover:underline">
                                    Edit
                                </a>

                                {{-- DELETE --}}
                                <form action="{{ route('admin.products.destroy', $product->id) }}"
                                      method="POST"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:underline"
                                            onclick="return confirm('Yakin hapus produk ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
