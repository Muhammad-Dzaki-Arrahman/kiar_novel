<header class="flex items-center h-20 px-6 sm:px-10" style="background-color: #aac8a7">
    <button class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
      <span class="sr-only">Menu</span>
        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
      </svg>
    </button>
    <div class="relative w-full max-w-md sm:-ml-2">
      <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..." class="py-2 pl-10 pr-4 w-full border-4 border-transparent bg-yellow-50 placeholder-gray-400 rounded-lg"/>
    </div>
    <div class="flex flex-shrink-0 items-center ml-auto">
    <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
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
    <div class="items-center ml-auto my-auto">
      <div class="border-l pl-3 ml-3 space-x-1">
        <form action="/logout" method="post">
            @csrf
        <button class="p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
        <span class="sr-only">Log out</span>
        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        </button>
        </form>
      </div>
    </div>
  </header>