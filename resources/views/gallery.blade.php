@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="image/Girl.png">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('../css/gallerycard.css') }}">
@endsection
@section('container')
    <h3 class="text-2xl ml-16 text-amber-800">Anime Story</h3>
    @if ($blog->count()) 
    <div class="card mb-3 mx-16">
        <img src="../image/IMSS2.jpeg" class="card-img-top p-3 my-2" alt="..." width="600" height="550">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $blog[0]->title }}</h5>
          <div class="mb-1 text-center">
            <div class="fs-4">
                <p><small class="text-muted">Category : <a href="/categories/{{ $blog[0]->category->slug }}" class="text-decoration-none text-amber-950">{{ $blog[0]->Category->name }}</a></small></p> 
            </div>
            {{-- <div>
                <p class="mx-2">||</p>
            </div> --}}
            <div class="fs-4">
                <p><small class="text-muted">Author : <a href="/authories/{{ $blog[0]->author->username }}" class="text-decoration-none text-amber-950">{{ $blog[0]->author->name }}</a> {{ $blog[0]->created_at->diffForHumans() }}</small></p>    
            </div>
          </div>
          <p class="card-text"><small class="text-muted">{{ $blog[0]->excerpt }}</small></p>
          <a href="/post/{{ $blog[0]->slug }}" class="text-decoration-none btn btn-dark mt-2">Read More</a>
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Data Found.</p>
    @endif

    {{-- <h5>{{ $nama }}</h5> --}}
    {{-- <img class="anime rounded-circle" src="image/{{ $gambar }}" width="320"> --}}

    <section class="light mx-16">
        <div class="container py-2">
            <div class="h1 text-center bg-gradient-to-r from-yellow-950 to-slate-200 bg-clip-text text-transparent" id="pageHeaderTitle">Watch Now</div>
            
            @foreach ($blog as $desc)
            @if ($desc->id % 2 == 1)
            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title"/>
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue mb-2"><a href="/post/{{ $desc->slug }}">{{ $desc->title }}</a></h1>
                    <div class="postcard__subtitle small mb-2">
                        <time class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><p class="font-serif"><small>{{ $desc->created_at->diffForHumans() }}</small></p>
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt mb-2">{{ $desc->excerpt }}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item flex mb-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>                         
                          <p class="font-mono">Author : <a href="/authories/{{ $desc->author->username }}" class="text-amber-950">{{ $desc->author->name }}</a></p></li>
                        <li class="tag__item flex mb-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                          </svg>                          
                          <p class="font-mono">Category : <a href="/categories/{{ $desc->category->slug }}" class="text-amber-950">{{ $desc->category->name }}</a></p></li>
                        <li class="tag__item play blue flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                          </svg>
                            <p class="font-mono"><a href="/post/{{ $desc->slug }}" class="text-amber-900">Read More</a></p>
                        </li>
                    </ul>
                </div>
            </article>
            @else
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red mb-1"><a href="/post/{{ $desc->slug }}">{{ $desc->title }}</a></h1>
                    <div class="postcard__subtitle small mb-1">
                        <time class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><p class="font-serif"><small>{{ $desc->created_at->diffForHumans() }}</small></p>
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt mb-2">{{ $desc->excerpt }}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item flex mb-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            <p class="font-mono">Author : <a href="/authories/{{ $desc->author->username }}" class="text-amber-950">{{ $desc->author->name }}</a></p></li>
                        <li class="tag__item flex mb-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            <p class="font-mono">Category : <a href="/categories/{{ $desc->category->slug }}" class="text-amber-950">{{ $desc->category->name }}</a></p></li>
                          <li class="tag__item play red flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                          </svg>
                          <p class="font-mono"><a href="/post/{{ $desc->slug }}" class="text-amber-900">Read More</a></p>
                        </li>
                    </ul>
                </div>
            </article> 
            @endif


            @endforeach
            {{-- <article class="postcard light green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play green">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard light yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play yellow">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article> --}}
        </div>
    </section>
    </div>

@endsection