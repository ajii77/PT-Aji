<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('pages.admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('pages.admin.articles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required|string',
            'author'    => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // upload thumbnail (optional)
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }

        // generate slug unik
        $baseSlug = Str::slug($data['title']);
        $slug = $baseSlug;
        $counter = 1;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $data['slug'] = $slug;

        Article::create($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil disimpan.');
    }

    /**
     * SHOW EDIT FORM
     */
    public function edit(Article $article)
    {
        return view('pages.admin.articles.edit', compact('article'));
    }

    /**
     * UPDATE ARTICLE
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required|string',
            'author'    => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // update thumbnail jika ada file baru
        if ($request->hasFile('thumbnail')) {
            // hapus thumbnail lama
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }

        // update slug jika title berubah
        if ($data['title'] !== $article->title) {
            $baseSlug = Str::slug($data['title']);
            $slug = $baseSlug;
            $counter = 1;

            while (Article::where('slug', $slug)->where('id', '!=', $article->id)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            $data['slug'] = $slug;
        }

        $article->update($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * DELETE ARTICLE
     */
    public function destroy(Article $article)
    {
        // hapus thumbnail jika ada
        if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}
