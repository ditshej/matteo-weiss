<div x-data="{ open: false }">
    <div class="w-full h-full overflow-hidden rounded-md cursor-pointer
            flex items-center justify-center
            transform transition-transform duration-300 hover:scale-105"
         @click="open = true">
        <img src="{{ $thumbnailUrl }}" alt="Thumbnail"/>
    </div>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 z-50 overflow-auto flex"
    >
        <div
            @click.outside="open = false"
            class="relative p-8 w-full max-w-6xl flex-col flex rounded-lg m-auto
                bg-gray-100 border-2 border-gray-200 dark:bg-gray-900 dark:border-gray-700 ">
            <div class="flex justify-end mb-2">
                <button @click="open = false"
                        type="button"
                        class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700
                            rounded-md p-2 inline-flex items-center justify-center
                            focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <img src="{{ $imageUrl }}" alt="Modal Image"/>
        </div>
    </div>
</div>
