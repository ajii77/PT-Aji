@extends('layouts.admin')

@section('content')

<h2 class="text-3xl font-bold text-slate-800 mb-6">
    Dashboard
</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-sm text-slate-500">Total Produk</h3>
        <p class="text-3xl font-bold mt-2">
            {{ $totalProducts }}
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-sm text-slate-500">Total Artikel</h3>
        <p class="text-3xl font-bold mt-2">
            {{ $totalArticles }}
        </p>
    </div>

</div>

@endsection
