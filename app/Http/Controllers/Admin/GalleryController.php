<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('pages.admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('pages.admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $path,
            'title' => $request->title,
        ]);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Foto berhasil diupload');
    }

    /* =========================
     * EDIT
     * ========================= */
    public function edit(Gallery $gallery)
    {
        return view('pages.admin.gallery.edit', compact('gallery'));
    }

    /* =========================
     * UPDATE
     * ========================= */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        $data = [
            'title' => $request->title,
        ];

        // kalau upload gambar baru
        if ($request->hasFile('image')) {
            // hapus gambar lama
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Foto berhasil diperbarui');
    }

    /* =========================
     * DELETE
     * ========================= */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return back()->with('success', 'Foto berhasil dihapus');
    }
}
