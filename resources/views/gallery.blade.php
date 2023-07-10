@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h3>Anime Story</h3>
    {{-- <h5>{{ $nama }}</h5> --}}
    <img src="image/{{ $gambar }}" alt="<?= $nama; ?>" width="200" class="img-thumbnail rounded-circle">
    @foreach ($blog as $desc)
    <article class="mb-4 border-bottom pb-4">
        <h3><a href="/post/{{ $desc->slug }}" class="text-decoration-none pointer-events-none">{{ $desc->title }}</a></h3>
        <p>Category : <a href="/categories/{{ $desc->Category->slug }}" class="text-decoration-none">{{ $desc->Category->name }}</a></p> 
                {{-- <p>Author : <a href="#" class="text-decoration-none">{{ $desc->User?$item->User->name:'-' }}</a></p>  gunakan ini jika error null   --}}
        <p>Author : <a href="/authories/{{ $desc->author->username }}" class="text-decoration-none">{{ $desc->author->name }}</a></p>
        <h5>Sinopsis</h5>
        <p>{{ $desc->excerpt }}</p>

        <a href="/post/{{ $desc->slug }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach
@endsection