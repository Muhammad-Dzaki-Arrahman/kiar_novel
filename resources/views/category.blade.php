@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h1>Novel Category : {{ $category }}</h1>
    @foreach ($desc as $deskripsi)
    <article>
        <h3><a href="/post/{{ $deskripsi->slug }}" class="text-decoration-none">{{ $deskripsi->title }}</a></h3>
        <h5>Sinopsis</h5>
        <p>{{ $deskripsi->excerpt }}</p>
    </article>
    @endforeach
    <a href="/categories" class=" text-decoration-none ">Category List</a>
@endsection