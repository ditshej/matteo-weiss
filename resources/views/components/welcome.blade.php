<div
    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto"/>

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Hallo Matteo
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Das ist deine Götti-App.<br>
        Hier hast du eine Übersicht über die Götti Bank, die Götti Löslis und kleine Spiele,
        die dein Gött versucht für dich zu programmieren.
    </p>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 border-b border-gray-200 dark:border-gray-700">
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2">

        <a href="https://ditshej.notion.site/102d731ce5d080a1ad79f909e8228721?v=102d731ce5d080b5b16a000c48e41c1a"
           target="_blank"
           class="flex flex-col p-4 bg-white dark:bg-gray-900 shadow-md
            hover:text-indigo-500 text-gray-500 dark:text-gray-400 hover:shodow-lg rounded-2xl
            transition ease-in duration-500 transform hover:scale-105 cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="flex items-center mr-auto">
                    <div class="-space-x-5 flex ">
                        <div class="relative p-1 w-12 h-12 object-cover rounded-2xl
                            border-2 dark:border-gray-600 dark:bg-gray-900">
                            <svg class="stroke-indigo-500"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 3V9M12 3L9.5 5.5M12 3L14.5 5.5M5.82333 9.00037C6.2383 9.36683 6.5 9.90285 6.5 10.5C6.5 11.6046 5.60457 12.5 4.5 12.5C3.90285 12.5 3.36683 12.2383 3.00037 11.8233M5.82333 9.00037C5.94144 9 6.06676 9 6.2 9H8M5.82333 9.00037C4.94852 9.00308 4.46895 9.02593 4.09202 9.21799C3.71569 9.40973 3.40973 9.71569 3.21799 10.092C3.02593 10.469 3.00308 10.9485 3.00037 11.8233M3.00037 11.8233C3 11.9414 3 12.0668 3 12.2V17.8C3 17.9332 3 18.0586 3.00037 18.1767M3.00037 18.1767C3.36683 17.7617 3.90285 17.5 4.5 17.5C5.60457 17.5 6.5 18.3954 6.5 19.5C6.5 20.0971 6.2383 20.6332 5.82333 20.9996M3.00037 18.1767C3.00308 19.0515 3.02593 19.5311 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.46895 20.9741 4.94852 20.9969 5.82333 20.9996M5.82333 20.9996C5.94144 21 6.06676 21 6.2 21H17.8C17.9332 21 18.0586 21 18.1767 20.9996M21 18.1771C20.6335 17.7619 20.0973 17.5 19.5 17.5C18.3954 17.5 17.5 18.3954 17.5 19.5C17.5 20.0971 17.7617 20.6332 18.1767 20.9996M21 18.1771C21.0004 18.0589 21 17.9334 21 17.8V12.2C21 12.0668 21 11.9414 20.9996 11.8233M21 18.1771C20.9973 19.0516 20.974 19.5311 20.782 19.908C20.5903 20.2843 20.2843 20.5903 19.908 20.782C19.5311 20.9741 19.0515 20.9969 18.1767 20.9996M20.9996 11.8233C20.6332 12.2383 20.0971 12.5 19.5 12.5C18.3954 12.5 17.5 11.6046 17.5 10.5C17.5 9.90285 17.7617 9.36683 18.1767 9.00037M20.9996 11.8233C20.9969 10.9485 20.9741 10.469 20.782 10.092C20.5903 9.71569 20.2843 9.40973 19.908 9.21799C19.5311 9.02593 19.0515 9.00308 18.1767 9.00037M18.1767 9.00037C18.0586 9 17.9332 9 17.8 9H16M14 15C14 16.1046 13.1046 17 12 17C10.8954 17 10 16.1046 10 15C10 13.8954 10.8954 13 12 13C13.1046 13 14 13.8954 14 15Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col ml-3 min-w-0">
                        <div class="font-medium leading-none text-gray-900 dark:text-gray-100">Götti Bank</div>
                        <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                            Hier kannst du den Verlauf der Götti Bank ansehen.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col ml-3 min-w-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <a href="{{ asset('pdfs/Goetti-Bank-Vertrag.pdf') }}"
           target="_blank"
           class="flex flex-col p-4 bg-white dark:bg-gray-900 shadow-md
            hover:text-indigo-500 text-gray-500 dark:text-gray-400 hover:shodow-lg rounded-2xl
            transition ease-in duration-500 transform hover:scale-105 cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="flex items-center mr-auto">
                    <div class="-space-x-5 flex ">
                        <div class="relative p-1 w-12 h-12 object-cover rounded-2xl
                            border-2 dark:border-gray-600 dark:bg-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="icon icon-contract stroke-indigo-500">
                                <path d="M16 2H8a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                                <line x1="9" y1="9" x2="15" y2="9"></line>
                                <line x1="9" y1="13" x2="15" y2="13"></line>
                                <line x1="9" y1="17" x2="13" y2="17"></line>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col ml-3 min-w-0">
                        <div class="font-medium leading-none text-gray-900 dark:text-gray-100">Götti Bank Vertrag</div>
                        <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                            Hier kommst du zum Götti-Bank Vertrag.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col ml-3 min-w-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8">

    <div class="grid gap-4 grid-cols-1 md:grid-cols-2">

        <a href="{{ route('godfather-lottery') }}" wire:navigate
           class="flex flex-col p-4 bg-white dark:bg-gray-900 shadow-md
            hover:text-indigo-500 text-gray-500 dark:text-gray-400 hover:shodow-lg rounded-2xl
            transition ease-in duration-500 transform hover:scale-105 cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="flex items-center mr-auto">
                    <div class="-space-x-5 flex ">
                        <div class="relative p-1 w-12 h-12 object-cover rounded-2xl
                            border-2 dark:border-gray-600 dark:bg-gray-900">
                            <svg class="stroke-indigo-500"
                                 viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <rect height="11.5" width="8.25" y="2.75" x="1.75" fill="none"/>
                                <path d="m10 3.75 4.25 2-4.25 7.5" fill="none"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col ml-3 min-w-0">
                        <div class="font-medium leading-none text-gray-900 dark:text-gray-100">Götti Lösli</div>
                        <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                            Hier gehts zu einer Übersicht zu allen Götti Lösli
                        </p>
                    </div>
                </div>
                <div class="flex flex-col ml-3 min-w-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <a href="{{ route('games') }}" wire:navigate
           class="flex flex-col p-4 bg-white dark:bg-gray-900 shadow-md
            hover:text-indigo-500 text-gray-500 dark:text-gray-400 hover:shodow-lg rounded-2xl
            transition ease-in duration-500 transform hover:scale-105 cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="flex items-center mr-auto">
                    <div class="-space-x-5 flex ">
                        <div class="relative p-1 w-12 h-12 object-cover rounded-2xl
                            border-2 dark:border-gray-600 dark:bg-gray-900">
                            <svg class="fill-indigo-500"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.4695 11.2929C15.0789 10.9024 14.4458 10.9024 14.0553 11.2929C13.6647 11.6834 13.6647 12.3166 14.0553 12.7071C14.4458 13.0976 15.0789 13.0976 15.4695 12.7071C15.86 12.3166 15.86 11.6834 15.4695 11.2929Z"/>
                                <path
                                    d="M16.1766 9.17156C16.5671 8.78103 17.2003 8.78103 17.5908 9.17156C17.9813 9.56208 17.9813 10.1952 17.5908 10.5858C17.2003 10.9763 16.5671 10.9763 16.1766 10.5858C15.7861 10.1952 15.7861 9.56208 16.1766 9.17156Z"/>
                                <path
                                    d="M19.7121 11.2929C19.3216 10.9024 18.6885 10.9024 18.2979 11.2929C17.9074 11.6834 17.9074 12.3166 18.2979 12.7071C18.6885 13.0976 19.3216 13.0976 19.7121 12.7071C20.1027 12.3166 20.1027 11.6834 19.7121 11.2929Z"/>
                                <path
                                    d="M16.1766 13.4142C16.5671 13.0237 17.2003 13.0237 17.5908 13.4142C17.9813 13.8048 17.9813 14.4379 17.5908 14.8284C17.2003 15.219 16.5671 15.219 16.1766 14.8284C15.7861 14.4379 15.7861 13.8048 16.1766 13.4142Z"/>
                                <path d="M6 13H4V11H6V9H8V11H10V13H8V15H6V13Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7 5C3.13401 5 0 8.13401 0 12C0 15.866 3.13401 19 7 19H17C20.866 19 24 15.866 24 12C24 8.13401 20.866 5 17 5H7ZM17 7H7C4.23858 7 2 9.23858 2 12C2 14.7614 4.23858 17 7 17H17C19.7614 17 22 14.7614 22 12C22 9.23858 19.7614 7 17 7Z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col ml-3 min-w-0">
                        <div class="font-medium leading-none text-gray-900 dark:text-gray-100">Games</div>
                        <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                            Hier gehts zu einer Übersicht zu allen Götti Lösli
                        </p>
                    </div>
                </div>
                <div class="flex flex-col ml-3 min-w-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

    </div>
</div>
