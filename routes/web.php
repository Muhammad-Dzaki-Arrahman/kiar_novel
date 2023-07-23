<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardNovelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/gallery', [PostController::class, 'index']);

// halaman single post
//Route::get('/post/{slug}', [PostController::class, 'show_detail']); // cara 1
Route::get('/post/{desc:slug}', [PostController::class, 'show_detail']); // cara 2
//Route::get('/post/{post}', function (Post $post)); 

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', [PostController::class, 'show_category']);

Route::get('/authories/{author:username}', [PostController::class, 'show_author']);

Route::get('/login', [LoginController::class, 'show_login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('author.dashboard', [
        'title' => 'My Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardNovelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/post', DashboardNovelController::class)->middleware('auth'); // sesuaikan nama nya menikuti nama model
