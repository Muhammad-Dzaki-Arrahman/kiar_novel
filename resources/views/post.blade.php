@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')

<div class="container">
    <div class="row justify-content-center h-screen">
        <div class="bg-white p-4 rounded-lg shadow-lg max-w-screen-lg">
            <div class="mx-12">
                <h2 class="text-center text-3xl">{{ $desc->title }}</h2>
                <div class="flex items-center justify-center ">
                    @if ($desc->image)
                    <img class="p-3 -my-2 -mr-2 object-cover aspect-auto max-w-sm" src="{{ asset('storage/' . $desc->image) }}" alt="Image Title"/>
                    @else
                    <img class="card-img-top p-3 -my-2" src="https://picsum.photos/800/450" alt="Image Title"/>
                    @endif
                </div>
                <div class="mx-2">
                    <div class="mb-2">
                <p>Category : <a href="/categories/{{ $desc->category->username }}?category={{ $desc->category->username }}" class="text-decoration-none">{{ $desc->category->name }}</a></p> 
                
        {{-- <p>Author : <a href="#" class="text-decoration-none">{{ $desc->User?->name }}</a></p>  --}}
                <p>Author : <a href="/authories/{{ $desc->author->username }}?author={{ $desc->author->username }}" class="text-decoration-none">{{ $desc->author->name }}</a></p> 
                <hr class="">
                </div>
                <article class="mb-96">
                <p>{!! $desc->body !!}</p>
                <a href="/gallery" class="mt-6"><button class="rounded span1 bg-amber-950 text-white p-2 hover:bg-amber-700 border-2 border-r-red-700 border-l-yellow-400 border-b-lime-500 border-t-cyan-400">Back To Gallery</button></a>
            </div>
            </article>
        </div>
    </div>
    </div>
</div>

@endsection

