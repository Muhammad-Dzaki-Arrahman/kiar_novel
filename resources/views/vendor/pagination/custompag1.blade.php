@if ($paginator->hasPages())


<nav aria-label="Page navigation example">
    <ul class="flex items-center -space-x-px h-8 text-sm">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-white bg-emerald-700 border border-gray-300 rounded-l-lg hover:bg-emerald-500 hover:text-gray-700 ">
                  <span class="sr-only">Previous</span>
                  <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                </a>
              </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-white bg-emerald-700 border border-gray-300 rounded-l-lg hover:bg-emerald-500 hover:text-gray-700 "><span class="sr-only">Previous</span>
                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                          </svg></a>
                </li>
            @endif





       {{-- Pagination Elements --}}
       @foreach ($elements as $element)
       {{-- "Three Dots" Separator --}}
       @if (is_string($element))
           <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
       @endif

       {{-- Array Of Links --}}
       @if (is_array($element))
           @foreach ($element as $page => $url)
               @if ($page == $paginator->currentPage())
                   <li class="active active:bg-emerald-500" aria-current="page">
                    <a href="{{ $url }}" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-white bg-emerald-700 border border-emerald-700 hover:bg-emerald-500 hover:text-white active:bg-emerald-500">{{ $page }}</a>
                </li>
               @else
                   <li><a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-emerald-700 border border-emerald-700 hover:bg-emerald-500 hover:text-white active:bg-emerald-500">{{ $page }}</a></li>
               @endif
           @endforeach
       @endif
   @endforeach




                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-emerald-700 border border-gray-300 rounded-r-lg hover:bg-emerald-500 hover:text-gray-700 ">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-emerald-700 border border-gray-300 rounded-r-lg hover:bg-emerald-500 hover:text-gray-700 ">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                          </a>
                    </li>
                @endif

    </ul>
  </nav>


  @endif