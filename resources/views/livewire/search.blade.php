<div id="search-box" class="my-3">
    <div class="flex items-center w-full px-3 py-2 mb-3 bg-gray-100 rounded-2xl">
        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </span>
        <input wire:model.live.debounce.300ms="search"
            class="ml-1 text-xs text-gray-800 bg-transparent border-none outline-none w-52 focus:outline-none focus:border-none focus:ring-0 placeholder:text-gray-400"
            type="text" placeholder="Search in here">
    </div>
</div>
