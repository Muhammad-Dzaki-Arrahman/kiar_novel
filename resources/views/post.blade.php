@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <article>
        <h2>{{ $desc->title }}</h2>
        <p>Category : <a href="/categories/{{ $desc->category->slug }}" class="text-decoration-none">{{ $desc->category->name }}</a></p> 
{{-- <p>Author : <a href="#" class="text-decoration-none">{{ $desc->User?->name }}</a></p>  --}}
        <p>Author : <a href="/authories/{{ $desc->author->username }}" class="text-decoration-none">{{ $desc->author->name }}</a></p> 
        <p>{!! $desc->body !!}</p>
    </article>

    <a href="/gallery">Back to gallery</a>
@endsection

