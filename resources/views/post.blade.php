@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2 class="text-center text-3xl">{{ $desc->title }}</h2>
                <img class="postcard__img dark" src="https://picsum.photos/800/450" alt="Image Title"/>
                <p>Category : <a href="/categories/{{ $desc->category->username }}?category={{ $desc->category->username }}" class="text-decoration-none">{{ $desc->category->name }}</a></p> 
        {{-- <p>Author : <a href="#" class="text-decoration-none">{{ $desc->User?->name }}</a></p>  --}}
                <p>Author : <a href="/authories/{{ $desc->author->username }}?author={{ $desc->author->username }}" class="text-decoration-none">{{ $desc->author->name }}</a></p> 
                <article class="mb-96">
                <p>{!! $desc->body !!}</p>
                <a href="/gallery" class="mt-6">Back to gallery</a>
            </article>
        </div>
    </div>
</div>

@endsection

