@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Author : {{ $auth->first()->author->name }}</h1>
    @foreach ($auth as $list)
    <article class="mb-4 pb-4 border-bottom">
        <h3><a href="/post/{{ $list->slug }}" class="text-decoration-none pointer-events-none">{{ $list->title }}</a></h3>
        <p>Category : <a href="/categories/{{ $list->Category->slug }}" class="text-decoration-none">{{ $list->Category->name }}</a></p> 
                {{-- <p>Author : <a href="#" class="text-decoration-none">{{ $list->User?$item->User->name:'-' }}</a></p>  gunakan ini jika error null   --}}
        <p>Author : <a href="/authories/{{ $list->author->name }}" class="text-decoration-none">{{ $list->author->name }}</a></p>
        <h5>Sinopsis</h5>
        <p>{{ $list->excerpt }}</p>

        <a href="/post/{{ $list->slug }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach
    <a href="/categories" class=" text-decoration-none ">Category List</a>
@endsection