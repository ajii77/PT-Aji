<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\UserController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $articles = Article::latest()->take(6)->get();
    return view('pages.public.home.index', compact('articles'));
})->name('home');

Route::prefix('pages')->group(function () {

    Route::get('/about', [UserController::class, 'about'])->name('about');

    // PRODUCTS (PUBLIC)
    Route::get('/product', [UserController::class, 'index'])->name('product');
    Route::get('/product/{product}', [UserController::class, 'productShow'])->name('product.show');

    Route::get('/article', [UserController::class, 'article'])->name('article');
    Route::get('/article/{article}', [UserController::class, 'articleShow'])->name('article.show');
    Route::get('/clients', [UserController::class, 'client'])->name('clients');
    Route::get('/events', [UserController::class, 'event'])->name('events');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
    Route::get('/vision-mission', fn () => view('pages.public.vision-mission.index'))->name('vision');

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    */
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

/*
|--------------------------------------------------------------------------
| Admin (Protected)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', fn () => view('pages.admin.dashboard'))
            ->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | PRODUCTS / ARTICLES / EVENTS / GALLERY (CRUD)
        |--------------------------------------------------------------------------
        | Ini otomatis bikin route:
        | index, create, store, show, edit, update, destroy
        */
        Route::resource('products', ProductController::class);
        Route::resource('articles', ArticleController::class);
        Route::resource('events', EventController::class);
        Route::resource('gallery', GalleryController::class);

        /*
        |--------------------------------------------------------------------------
        | Logout
        |--------------------------------------------------------------------------
        */
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
