@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-6">Manajemen Artikel</h2>

<div class="bg-white rounded-xl shadow p-6">
    <div class="flex justify-between items-center mb-4">
        <p class="text-slate-600">Daftar artikel</p>

        <a href="{{ route('admin.articles.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            + Tambah Artikel
        </a>
    </div>

    {{-- FLASH MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 rounded bg-green-100 px-4 py-2 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($articles->isEmpty())
        <div class="text-slate-500 text-sm">
            Belum ada artikel.
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full border border-slate-200 text-sm">
                <thead class="bg-slate-100">
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">Judul</th>
                        <th class="border px-4 py-2">Author</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Thumbnail</th>
                        <th class="border px-4 py-2">Tanggal</th>
                        <th class="border px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr class="hover:bg-slate-50 align-top">
                            <td class="border px-4 py-2">
                                {{ $loop->iteration }}
                            </td>

                            <td class="border px-4 py-2 font-medium">
                                {{ $article->title }}
                            </td>

                            <td class="border px-4 py-2">
                                {{ $article->author }}
                            </td>

                            <td class="border px-4 py-2">
                                <span class="px-2 py-1 rounded text-xs
                                    {{ $article->status === 'published'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-yellow-100 text-yellow-700' }}">
                                    {{ ucfirst($article->status) }}
                                </span>
                            </td>

                            <td class="border px-4 py-2">
                                @if($article->thumbnail)
                                    <img src="{{ asset('storage/'.$article->thumbnail) }}"
                                         class="w-16 h-16 object-cover rounded">
                                @else
                                    <span class="text-slate-400">-</span>
                                @endif
                            </td>

                            <td class="border px-4 py-2">
                                {{ $article->created_at?->format('d M Y') }}
                            </td>

                            <td class="border px-4 py-2 text-center space-x-2">
                             {{-- EDIT (kalau nanti dibuat) --}}
                                <a href="{{ route('admin.articles.edit', $article->id) }}"
                                   class="text-indigo-600 hover:underline">
                                    Edit
                                </a>

                                {{-- DELETE (kalau nanti dibuat) --}}
                                
                                <form action="{{ route('admin.articles.destroy', $article->id) }}"
                                      method="POST"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline"
                                            onclick="return confirm('Yakin hapus artikel?')">
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
