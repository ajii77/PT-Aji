@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-6">Manajemen Event</h2>

<div class="bg-white rounded-xl shadow p-6">
    <div class="flex justify-between mb-4">
        <p class="text-slate-600">Event & kegiatan perusahaan</p>
        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            + Tambah Event
        </button>
    </div>

    <div class="text-slate-500 text-sm">
        Belum ada event.
    </div>
</div>
@endsection
