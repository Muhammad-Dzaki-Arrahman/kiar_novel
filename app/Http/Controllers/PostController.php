<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('gallery', [
            "title" => "Gallery",
            "nama" => "Kiar",
            "gambar" => "girl.png",
            "blog" => Post::latest()->get()
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
}
