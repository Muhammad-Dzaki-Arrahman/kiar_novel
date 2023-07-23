<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $category = '';

        if (request('search')) {
            $category = Category::firstWhere('slug', request('category'));
        }


        return view('gallery', [
            "title" => "Gallery",
            "nama" => "Kiar",
            "gambar" => "girl.png",
            "blog" => Post::latest()->filters(request(['search', 'category', 'author']))->paginate(5)->withQueryString()
            // "blog" => Post::all()
        ]);
    }

    public function show_detail(Post $desc)
    {
        return view('post', [
            "title" => "Single Post",
            "desc" => $desc
        ]);
    }

    public function show_author(User $author)
    {
        return view('author', [
            "title" => "Single Author",
            "auth" => $author->post->load('category', 'author')
        ]);
    }

    public function show_category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'desc' => $category->post->load('category', 'author'),
            'category' => $category->name
        ]);
    }
}
