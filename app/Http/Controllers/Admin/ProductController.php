<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('pages.admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'image'       => $imagePath,
        ]);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('pages.admin.products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'required|string',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($product->image) {
            \Storage::disk('public')->delete($product->image);
        }

        $product->image = $request->file('image')
            ->store('products', 'public');
    }

    $product->update([
        'name'        => $request->name,
        'slug'        => \Str::slug($request->name),
        'description' => $request->description,
        'image'       => $product->image,
    ]);

    return redirect()
        ->route('admin.products.index')
        ->with('success', 'Produk berhasil diupdate');
}


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('admin.products')
            ->with('success', 'Produk berhasil dihapus');
    }
}
