@extends('author.layouts.main')

@section('container')
<div class="mr-6">
    <h1 class="text-4xl font-semibold mb-2">Edit Category</h1>
</div>
<a href="/dashboard/category/">
  <button class="bg-pink-500 text-white rounded border hover:bg-pink-700 font-bold p-3 inline-flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
  </svg><p class="ml-2 font-semibold">Back To Category List</p></button>
  </a>


<form class="w-full max-w-screen mb-64" action="/dashboard/category/{{ $category->slug }}" method="post">
  @method('put')
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="title">
        Name</label>
        @error('name')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') is-invalid @else is-valid @enderror" id="title" type="text" name="name" placeholder="Ex. Supernatural" value="{{ old('name', $category->name) }}" autofocus>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 after:content-['*'] after:ml-0.5 after:text-red-500" for="slug">
          SLUG</label>
        @error('slug')
        <div class="text-red-600 alert alert-danger">* {{ $message }}</div>
        @enderror
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="slug" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
      </div>
    </div>
    <button class="bg-emerald-400 rounded border hover:bg-emerald-600 font-bold p-3">Update</button>
  </form>

@endsection