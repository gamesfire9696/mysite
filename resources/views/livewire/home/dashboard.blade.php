<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Dashboard
    </h2>

    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Total clients Show movies
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{$number01}}
          </p>
     {{--  <form wire:submit.prevent="show_number01">
            <button type="submit" class="px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Save
            </button>
          </form>  --}}
        </div>
      </div>
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Total clients Show Lives
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{$number02}}
          </p>
         
        </div>
      </div>  
    </div>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
      <form wire:submit.prevent="save_movies">
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Movies
        </h4>
     
        @if (session()->has('message_movies'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
          <span class="font-medium">{{ session('message_movies') }}</span>
        </div>
        @endif

        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">import List Movies</span>
        <input type="file" wire:model="movies" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" >
        
      </label>
      @error('movies') <span class="text-red-700">{{ $message }}</span> @enderror
        <div class="p-2">
        <button type="submit" class="px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Save
        </button>
      </div>
      </div>
      </form>
      <form wire:submit.prevent="save_lives">
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Lives
        </h4>
        @if (session()->has('message_lives'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
          <span class="font-medium">{{ session('message_lives') }}</span>
        </div>
        @endif
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">import List Chanals</span>
        <input type="file" wire:model="lives" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe">
        
      </label>
      @error('lives') <span class="text-red-700">{{ $message }}</span> @enderror
        <div class="p-2">
        <button type="submit" class="px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Save
        </button>
      </div>
      </div>
    </form>
    </div>
  </div>
