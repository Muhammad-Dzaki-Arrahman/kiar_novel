@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')
    <h1 class="mb-4 text-4xl text-center bg-gradient-to-r from-amber-950 to-cyan-700 bg-clip-text text-transparent">Category List</b></h1>
    <a href="/gallery" class="text-decoration-none"><h6 class="bgl">Back to gallery</h6></a>

    <!-- flip-card-container -->
    <div class="container">
        <div class="row">
            @foreach ($categories as $list)
            <div class="col-md-4">
                <div class="flip-card-container" style="--hue: 220">
                    <div class="cat-flip-card flex">
                      <div class="cat-card-front">
                        <figure>
                          <div class="cat-img-bg"></div>
                          @if($novel->count()){
                          <img src="{{ asset('storage/'.$list->image) }}" alt="{{ $list->name }}" class="cat-img">
                          }@else
                            <img src="https://picsum.photos/500/500" alt="{{ $list->name }}" class="cat-img">
                          @endif
                          <figcaption><a href="/categories/{{ $list->slug }}" class="text-decoration-none">{{ $list->name }}</a></figcaption>
                        </figure>
                  
                        {{-- <ul class="cat-ul">
                          <li class="cat-li">Detail 1</li>
                          <li class="cat-li">Detail 2</li>
                          <li class="cat-li">Detail 3</li>
                          <li class="cat-li">Detail 4</li>
                          <li class="cat-li">Detail 5</li>
                        </ul> --}}
                      </div>
                  
                      <div class="cat-card-back">
                        <figure>
                          <div class="cat-img-bg"></div>
                          <img src="https://picsum.photos/500/500" alt="Brohm Lake" class="cat-img">
                        </figure>
                  
                        <button class="cat-button"><a href="/categories/{{ $list->name }}?category={{ $list->name }}">View More</a></button>
                  
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
  <!-- /flip-card-container -->
  

@endsection