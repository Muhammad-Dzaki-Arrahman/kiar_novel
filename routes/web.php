<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

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

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'desc' => $category->post->load('category', 'author'),
        'category' => $category->name
    ]);
});
Route::get('/authories/{author:username}', [PostController::class, 'show_author']);
