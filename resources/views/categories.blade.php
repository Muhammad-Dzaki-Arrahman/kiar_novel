@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Category List</b></h1>
    @foreach ($categories as $list)
    <ul>
        <li>
        <h4><a href="/categories/{{ $list->slug }}" class="text-decoration-none">{{ $list->name }}</a></h4>
        </li>
    </ul>
    @endforeach
    <a href="/gallery" class="text-decoration-none">Back to gallery</a>
@endsection