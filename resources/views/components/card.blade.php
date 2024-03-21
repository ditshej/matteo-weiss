<div class="relative group overflow-hidden p-8 rounded-xl
        bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900">
    <div aria-hidden="true"
         class="inset-0 absolute aspect-video border rounded-full
            -translate-y-1/2 group-hover:-translate-y-1/4 duration-300
            bg-gradient-to-b from-{{ $color }}-500 to-white
            blur-2xl opacity-25 dark:opacity-5 dark:group-hover:opacity-10"></div>
    <div class="relative">
        <div class="border border-{{ $color }}-500/10 flex relative
                *:relative *:size-6 *:m-auto size-12 rounded-lg
                dark:bg-gray-900 dark:border-white/15
                before:rounded-[7px] before:absolute before:inset-0 before:border-t before:border-white before:from-{{ $color }}-100
                dark:before:border-white/20 before:bg-gradient-to-b dark:before:from-white/10 dark:before:to-transparent
                before:shadow dark:before:shadow-gray-950">
            {{ $icon }}
        </div>

        <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
            <p class="text-gray-700 dark:text-gray-300">{{ $slot }}</p>
        </div>

        <div class="flex gap-3 -mb-8 py-4 border-t border-gray-200 dark:border-gray-800">
            <span role="alert" tabindex="0"
                  class="inline-flex items-center rounded-full p-2
                    bg-{{ $color }}-500 text-white
                    group transition-all duration-500
                    focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                     class="w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="whitespace-nowrap inline-block
                        group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl
                        max-w-0 scale-80 group-hover:scale-100 overflow-hidden
                        transition-all duration-500 group-hover:px-2 group-focus:px-2">
                    {{ $date }}
                </span>
            </span>
        </div>
    </div>
</div>
