@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-10">

    {{-- BREADCRUMB --}}
    <div class="text-sm text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-emerald-600">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('article') }}" class="hover:text-emerald-600">Artikel</a>
        <span class="mx-2">/</span>
        <span class="text-slate-900 font-semibold">{{ $article->title }}</span>
    </div>

    {{-- HEADER --}}
    <header class="space-y-4">
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
            {{ $article->title }}
        </h1>

        <div class="flex flex-wrap items-center gap-3 text-sm text-slate-500">
            <span>{{ $article->created_at->format('d M Y') }}</span>
            <span class="text-slate-300">•</span>
            <span class="px-2 py-1 rounded-full bg-emerald-100 text-emerald-700 font-semibold">
                Artikel
            </span>
        </div>
    </header>

    {{-- IMAGE --}}
    @if ($article->image)
        <div class="rounded-2xl overflow-hidden border border-slate-200">
            <img src="{{ asset('storage/' . $article->image) }}"
                 alt="{{ $article->title }}"
                 class="w-full max-h-[520px] object-cover">
        </div>
    @endif

    {{-- CONTENT --}}
    <article class="prose prose-slate max-w-none">
        {!! $article->content !!}
    </article>

    {{-- BACK BUTTON --}}
    <div class="pt-8 border-t border-slate-200">
        <a href="{{ route('article') }}"
           class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition">
            ← Kembali ke Artikel
        </a>
    </div>

</section>
@endsection
