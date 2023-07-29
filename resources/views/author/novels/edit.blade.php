@extends('author.layouts.main')

@section('container')
<div class="mr-6 mb-2">
    <h1 class="text-4xl font-semibold mb-2">Edit Novel Here</h1>
</div>
<a href="/dashboard/post/">
    <button class="bg-pink-500 text-white rounded border hover:bg-pink-700 font-bold p-3 inline-flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
    </svg><p class="ml-2 font-semibold">Back To My Novels</p></button>
    </a>

<form class="w-full max-w-screen mb-64" action="/dashboard/post/{{ $novel->slug }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="title">
        TITLE</label>
        @error('title')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('title') is-invalid @else is-valid @enderror" id="title" type="text" name="title" value="{{ old('title', $novel->title) }}">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="slug">
          SLUG</label>
        @error('slug')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="slug" type="text" name="slug" value="{{ old('slug', $novel->slug) }}">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
                Category
              </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="category_id">
                @foreach($categories as $category)
                @if (old('category_id', $novel->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>    
            </select>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
          Choose image for your novel
        </label>
        @if($novel->image)
        <img src="{{ asset('storage/'. $novel->image) }}" class="img-preview img-fluid mb-3 max-w-xs object-contain">
        @else
        <img class="img-preview img-fluid mb-3 max-w-xs object-contain">
        @endif
        <div class="flex mb-1 -mt-1 font-garamond font-light">
        <small class="after:content-['*'] after:text-red-600">Note</small>
        <small class="ml-1"><p>The image will be set into default image if no image uploaded</p></small>
        </div>
        <input type="file" class="block w-full text-sm text-slate-500
        file:mr-4 file:py-2 file:px-4
        file:rounded-full file:border-0
        file:text-sm file:font-semibold
        file:bg-violet-50 file:text-violet-700
        hover:file:bg-violet-100 cursor-pointer" name="image" id="image" onchange="previewImage()"/>
        @error('image')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
      </div>
      </div>
    <div class="flex flex-wrap -mx-3 mb-32">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="category">
                Body</label>
            @error('body')
            <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $novel->body) }}">

              <trix-editor input="body"></trix-editor>
            </div>
    </div>
    <button class="bg-emerald-400 rounded border hover:bg-emerald-600 font-bold p-3">Update</button>
    {{-- <a href="/dashboard/post/">
    <button class="bg-pink-400 rounded border hover:bg-pink-600 font-bold p-3">Back</button>
    </a> --}}
  </form>
@endsection