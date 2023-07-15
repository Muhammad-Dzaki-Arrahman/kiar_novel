@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h1 class="mb-5">Category List</b></h1>
    @foreach ($categories as $list)
    <ul>
        <li>
        <h4><a href="/categories/{{ $list->slug }}" class="text-decoration-none">{{ $list->name }}</a></h4>
        </li>
    </ul>
    @endforeach
    <a href="/gallery" class="text-decoration-none"><h6 class="bgl">Back to gallery</h6></a>
@endsection