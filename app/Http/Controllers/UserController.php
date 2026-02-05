<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Gallery;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | PRODUCTS (PUBLIC)
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.public.products.index', compact('products'));
    }

    public function productShow(Product $product)
    {
        return view('pages.public.products.show', compact('product'));
    }

    /*
    |--------------------------------------------------------------------------
    | ABOUT
    |--------------------------------------------------------------------------
    */

    public function about()
    {
        return view('pages.public.about.index');
    }

    /*
    |--------------------------------------------------------------------------
    | CLIENTS
    |--------------------------------------------------------------------------
    */

    public function client()
    {
        return view('pages.public.clients.index');
    }

    /*
    |--------------------------------------------------------------------------
    | EVENTS
    |--------------------------------------------------------------------------
    */

    public function event()
    {
        return view('pages.public.events.index');
    }

    /*
    |--------------------------------------------------------------------------
    | GALLERY (CONNECTED TO ADMIN)
    |--------------------------------------------------------------------------
    */

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('pages.public.gallery.index', compact('galleries'));
    }

    /*
    |--------------------------------------------------------------------------
    | ARTICLES (PUBLIC)
    |--------------------------------------------------------------------------
    */

    public function article()
    {
        $articles = Article::latest()->paginate(9);
        return view('pages.public.article.index', compact('articles'));
    }

    public function articleShow(Article $article)
    {
        return view('pages.public.article.show', compact('article'));
    }
}
