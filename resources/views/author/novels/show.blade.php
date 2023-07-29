@extends('author.layouts.main')

@section('container')

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8">
                <h2 class="text-3xl mb-2">{{ $novel->title }}</h2>
                <div class="flex">
                    <a href="/dashboard/post" class="mt-6"><button class="flex bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-2 px-4 border border-emerald-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                      </svg>
                      Back To My Novels</button></a>
                    <a href="/dashboard/post/{{ $novel->slug }}/edit" class="mt-6"><button class="flex ml-2 bg-lime-500 hover:bg-lime-700 text-white font-bold py-2 px-4 border border-lime-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                      Edit Novel</button></a>
                      <form action="/dashboard/post/{{ $novel->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="flex ml-2 bg-rose-500 hover:bg-rose-700 text-white font-bold py-2 px-4 border border-rose-700 rounded mt-6" onclick="return confirm('Delete This Novel ?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                        </svg> Delete Novel</button>
                    </form>
                </div>
                @if ($novel->image)
                <img class="postcard__img dark mt-2 object-contain w-60 aspect-auto" src="{{ asset('storage/' . $novel->image) }}" alt="Image Title"/>
                @else
                <img class="postcard__img dark mt-2" src="https://picsum.photos/800/450" alt="Image Title"/>
                @endif
                <p class="mb-1">Category : <a href="#" class="text-decoration-none">{{ $novel->category->name }}</a></p> 
                <p class="mb-1">Author : <a href="#" class="text-decoration-none">{{ $novel->author->name }}</a></p> 
                <article class="mb-96">
                <p>{!! $novel->body !!}</p>
            </article>
        </div>
    </div>
</div>

@endsection