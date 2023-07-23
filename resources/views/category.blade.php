@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h1 class="text-3xl text-center bg-gradient-to-r from-emerald-800 to-sky-800 bg-clip-text text-transparent bg-center">Novel Category : {{ $category }}</h1>

    <div class="row justify-content-center mt-5 mb-2">
        <div class="col-md-6">
            <form action="/gallery?={{ $desc[0]->category->slug }}">
            {{-- <form action="/categories/{{ $desc[0]->category->slug }}?={{ $desc[0]->category->slug }}"> --}}
                @if (request ('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Novel Here..." name ="search" value="{{ request('search') }}">
                    <button class="btn btn-success hover:bg-emerald-700 active:bg-emerald-900 text-light rounded-full" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($desc as $deskripsi)
            <div class="col-md-4">
                <div class="flip-card-container" style="--hue: 220">
                    <div class="cat-flip-card flex">
                  
                      <div class="cat-card-front">
                        <figure>
                          <div class="cat-img-bg"></div>
                          <img src="https://picsum.photos/500/500" alt="{{ $deskripsi->title }}" class="cat-img">
                          <figcaption class="text-center ml-3"><a href="/post/{{ $deskripsi->slug }}" class="text-decoration-none ">{{ $deskripsi->title }}</a></figcaption>
                        </figure>
                  
                        <ul class="cat-ul">
                          <li class="cat-li">{{ $deskripsi->excerpt }}</li>
                        </ul>
                      </div>
                  
                      <div class="cat-card-back">
                        <figure>
                          <div class="cat-img-bg"></div>
                          <img src="https://picsum.photos/500/500" alt="Brohm Lake" class="cat-img">
                        </figure>
                  
                        <button class="cat-button"><a href="/post/{{ $deskripsi->slug }}">View More</a></button>
                  
                        <div class="design-container">
                          <span class="design design--1"></span>
                          <span class="design design--2"></span>
                          <span class="design design--3"></span>
                          <span class="design design--4"></span>
                          <span class="design design--5"></span>
                          <span class="design design--6"></span>
                          <span class="design design--7"></span>
                          <span class="design design--8"></span>
                        </div>
                      </div>
                  
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    <a href="/categories" class=" text-decoration-none ">Category List</a>
@endsection