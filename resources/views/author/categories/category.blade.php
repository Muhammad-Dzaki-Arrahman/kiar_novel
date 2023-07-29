@extends('author.layouts.main')

@section('container')
<div class="mr-6">
    <h1 class="text-4xl font-semibold mb-2">Categories</h1>
  </div>

    @if(session()->has('Success'))
    <div class="mb-4 max-w-lg rounded-lg bg-emerald-300 px-6 py-4 text-base text-dark role="alert">
    <h4 class="mb-2 text-2xl font-medium leading-tight">Well done!</h4>
    <p class="mb-4">{{ session('Success') }}</p>
    </div>
    @endif

    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">
                    <a href="/dashboard/category/create"><button class="flex ml-2 bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 border border-teal-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                      Create New Category</button>
                    </a>
                </h2>
            </header>
            <div class="p-3 col-lg-8">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-zinc-700 bg-gray-50">
                            <tr class="text-sm">
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">#</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Category Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-md font-bold divide-y divide-zinc-300 font-garamond">
                            @foreach ($categories as $category)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="items-center flex">
                                        <div class="font-medium text-gray-800">{{ $loop->iteration }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $category->name }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="items-center flex justify-center gap-2">
                                        <a href="/dashboard/category/{{ $category->slug }}/edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                              </svg>                                                                                           
                                        </a>
                                        <form action="/dashboard/category/{{ $category->slug }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Delete This Category ?')" class="mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                  </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

