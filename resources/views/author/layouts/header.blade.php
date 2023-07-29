<header class="flex items-center h-20 px-6 sm:px-10" style="background-color: #aac8a7">
    {{-- <div class="relative w-full max-w-md sm:-ml-2">
      <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..." class="py-2 pl-10 pr-4 w-full border-4 border-transparent bg-yellow-50 placeholder-gray-400 rounded-lg"/>
    </div> --}}
    {{-- <div class="flex flex-shrink-0 items-center">
      <div x-data="{showDropdown: false}">
        <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg" @click="showDropdown = !showDropdown">
          <span class="sr-only">User Menu</span>
          <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
            <span class="font-semibold">{{ auth()->user()->name }}</span>
            <span class="text-sm text-gray-600">{{ auth()->user()->username }}</span>
          </div>
          <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 rounded-full overflow-hidden">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="user profile photo" class="h-full w-full object-cover">
          </span>
          <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="hidden sm:block h-6 w-6 text-gray-300">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg> 
        </button>

        <div x-show="showDropdown" @click.away="showDropdown = false" class="">
          <ul>
            <li>Tes</li>
          </ul>
        </div>
      </div>



    </div> --}}
    
    
    
    {{-- <div class="items-center ml-auto my-auto">
      <div class="border-l pl-3 ml-3 space-x-1">
        <form action="/logout" method="post">
            @csrf
        <button class="p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 flex">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="text-teal-800 text-1xl">Log out</span>
        </button>
        </form>
      </div>
    </div> --}}
    <div class="p-2 flex items-center text-2xl font-serif font-semibold border-4 rounded-tl-3xl rounded-br-3xl shadow shadow-emerald-400 border-r-rose-600 border-b-amber-400 border-l-sky-400 border-t-fuchsia-400">
      <Span>Kiar Web Novel</Span>
    </div>

    <div class="items-center ml-auto my-auto float-right">
    <div class="flex justify-center items-center">
      <div x-data="{ open: false }" class="bg-transparent dark:bg-[#749f82] w-64 shadow flex justify-center items-center">
          <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
            <div class="flex justify-center items-center space-x-3 cursor-pointer">
              <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
              </div>
              <div class="font-semibold dark:text-white text-gray-900 text-lg">
                <div class="cursor-pointer flex-col">
                  <span class="font-semibold flex">{{ auth()->user()->name }}</span>
                  <span class="text-sm text-gray-500 flex">{{ auth()->user()->username }}</span>  
                </div>
              </div>
            </div>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
              <ul class="space-y-3 dark:text-white">
                <li class="font-medium">
                  <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                    <div class="mr-3">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    Account
                  </a>
                </li>
                <li class="font-medium">
                  <a href="/gallery" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                    <div class="mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 object-contain">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                      </svg>
                    </div>
                    Gallery Novels
                  </a>
                </li>
                <hr class="dark:border-gray-700">
                <li class="font-medium">
                <form action="/logout" method="post">
                    @csrf
                <button class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600 w-full">
                  <div class="mr-3 text-red-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                  </div>
                <span class="text-white text-1xl">Log out</span>
                </button>
                </form>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </div>
    </div>
  </header>