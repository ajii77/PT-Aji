@extends('layouts.app')

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

    {{-- HEADER --}}
    <div class="text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1.5 text-sm text-slate-700 shadow-sm">
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
            Artikel & Insight
        </span>

        <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-slate-900">
            Artikel Terbaru
        </h1>
        <p class="mt-4 text-base sm:text-lg text-slate-600">
            Insight, tips, dan pembahasan seputar teknologi, aplikasi premium,
            dan transformasi digital.
        </p>
    </div>

    {{-- ARTICLE GRID --}}
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

        @forelse ($articles as $article)

            @php
                // SINKRON dari admin: field-nya adalah "thumbnail"
                $thumb = $article->thumbnail;

                // support: thumbnail bisa path storage (articles/xxx.jpg) atau full url (https://...)
                $thumbnailUrl = $thumb
                    ? (str_starts_with($thumb, 'http') ? $thumb : Storage::url($thumb))
                    : null;
            @endphp

            <article class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition overflow-hidden">

                {{-- IMAGE --}}
                @if ($thumbnailUrl)
                    <a href="{{ route('article.show', $article) }}" class="block overflow-hidden">
                        <img
                            src="{{ $thumbnailUrl }}"
                            alt="{{ $article->title }}"
                            class="h-48 w-full object-cover group-hover:scale-105 transition"
                            loading="lazy"
                        >
                    </a>
                @else
                    <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-400">
                        No Image
                    </div>
                @endif

                {{-- CONTENT --}}
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between text-xs text-slate-500">
                        <span>{{ $article->created_at?->format('d M Y') }}</span>
                        <span class="px-2 py-1 rounded-full bg-emerald-100 text-emerald-700 font-semibold">
                            Artikel
                        </span>
                    </div>

                    <a href="{{ route('article.show', $article) }}">
                        <h2 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition">
                            {{ $article->title }}
                        </h2>
                    </a>

                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}
                    </p>

                    <a href="{{ route('article.show', $article) }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-emerald-600 transition">
                        Baca Selengkapnya
                        <span>→</span>
                    </a>
                </div>
            </article>

        @empty
            <div class="col-span-full text-center text-slate-500">
                Belum ada artikel yang dipublikasikan.
            </div>
        @endforelse

    </div>

    {{-- PAGINATION --}}
    @if(method_exists($articles, 'links'))
        <div class="flex justify-center">
            {{ $articles->links() }}
        </div>
    @endif

</section>
@endsection
