@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h1 class="mb-4 text-center text-4xl font-serif">Author : {{ $auth->first()->author->name }}</h1>
    <div class="row justify-content-center mb-2">
        <div class="col-md-6">
            <form action="/gallery">
                @if (request ('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Novel Here..." name ="search" value="{{ request('search') }}">
                    <button class="btn btn-success hover:bg-emerald-700 active:bg-emerald-900 text-light rounded-full" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
        </div>
    </div>
    @foreach ($auth as $list)
    <article class="mb-4 pb-4 border-bottom">
        <h3><a href="/post/{{ $list->slug }}" class="text-decoration-none pointer-events-none">{{ $list->title }}</a></h3>
        <p>Category : <a href="/categories/{{ $list->Category->slug }}" class="text-decoration-none">{{ $list->Category->name }}</a></p> 
                {{-- <p>Author : <a href="#" class="text-decoration-none">{{ $list->User?$item->User->name:'-' }}</a></p>  gunakan ini jika error null   --}}
        <p>Author : <a href="/authories/{{ $list->author->username }}" class="text-decoration-none">{{ $list->author->name }}</a></p>
        <h5>Sinopsis</h5>
        <p>{{ $list->excerpt }}</p>

        <a href="/post/{{ $list->slug }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach
    <a href="/categories" class=" text-decoration-none ">Category List</a>
@endsection