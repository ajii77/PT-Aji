<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'totalProducts' => Product::count(),
            'totalArticles' => Article::count(),
            
        ]);
    }
}
