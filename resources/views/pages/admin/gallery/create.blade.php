@extends('layouts.admin')

@section('content')
<div class="max-w-xl bg-white p-6 rounded-xl shadow">

    <h2 class="text-xl font-bold mb-4">Upload Foto Gallery</h2>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Judul (Opsional)</label>
            <input type="text" name="title"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Foto</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            Upload
        </button>
    </form>
</div>
@endsection
