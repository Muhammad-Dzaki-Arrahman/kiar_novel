@extends('author.layouts.main')

@section('container')
<div class="mr-6">
    <h1 class="text-4xl font-semibold mb-2">Add Your Novel Here</h1>
</div>


<form class="w-full max-w-screen mb-64" action="/dashboard/post" method="post">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="title">
        TITLE</label>
        @error('title')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('title') is-invalid @else is-valid @enderror" id="title" type="text" name="title" placeholder="Set The Title Of Your Novel Here" value="{{ old('title') }}" autofocus>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="slug">
          SLUG</label>
        @error('slug')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="slug" type="text" name="slug" value="{{ old('slug') }}">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
                Category
              </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>    
            </select>
        </div>
      </div>
    <div class="flex flex-wrap -mx-3 mb-32">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="category">
                Body</label>
            @error('body')
            <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">

              <trix-editor input="body"></trix-editor>
            </div>
    </div>
    <button class="bg-emerald-400 rounded border hover:bg-emerald-600 font-bold p-3">Add Novel</button>
  </form>
@endsection