<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Götti Lösli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div id="just-used-for-development-to-tell-tailwind-to-load-dynamic-styles"
                     class="hidden
                        from-blue-500 border-blue-500/10 bg-blue-500
                        from-green-500 border-green-500/10 bg-green-500
                        from-red-500 border-red-500/10 bg-red-500
                        from-sky-500 border-sky-500/10 bg-sky-500
                     "></div>

                <section>
                    <div class="py-16">
                        <div class="mx-auto px-6 max-w-6xl text-gray-500">
                            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-3">
                                <x-card>
                                    <x-slot name="color">
                                        blue
                                    </x-slot>
                                    <x-slot name="icon">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                             class="fill-blue-500">
                                            <path
                                                d="M14.9978834,5 C18.8638767,5 21.9978834,8.13400675 21.9978834,12 C21.9978834,15.7854517 18.9931001,18.8690987 15.2385332,18.995941 L14.9978834,19 L9.00211656,19 C5.13612331,19 2.00211656,15.8659932 2.00211656,12 C2.00211656,8.21454828 5.00689994,5.13090132 8.76146681,5.00405902 L9.00211656,5 L14.9978834,5 Z M14.75,12.5 C14.0596441,12.5 13.5,13.0596441 13.5,13.75 C13.5,14.4403559 14.0596441,15 14.75,15 C15.4403559,15 16,14.4403559 16,13.75 C16,13.0596441 15.4403559,12.5 14.75,12.5 Z M8,9 C7.62030423,9 7.30650904,9.28215388 7.25684662,9.64822944 L7.25,9.75 L7.25,11.248 L5.75,11.2487458 C5.33578644,11.2487458 5,11.5845322 5,11.9987458 C5,12.3784415 5.28215388,12.6922367 5.64822944,12.7418991 L5.75,12.7487458 L7.25,12.748 L7.25,14.25 C7.25,14.6642136 7.58578644,15 8,15 C8.37969577,15 8.69349096,14.7178461 8.74315338,14.3517706 L8.75,14.25 L8.75,12.748 L10.25,12.7487458 C10.6642136,12.7487458 11,12.4129593 11,11.9987458 C11,11.61905 10.7178461,11.3052548 10.3517706,11.2555924 L10.25,11.2487458 L8.75,11.248 L8.75,9.75 C8.75,9.33578644 8.41421356,9 8,9 Z M16.75,9 C16.0596441,9 15.5,9.55964406 15.5,10.25 C15.5,10.9403559 16.0596441,11.5 16.75,11.5 C17.4403559,11.5 18,10.9403559 18,10.25 C18,9.55964406 17.4403559,9 16.75,9 Z"/>
                                        </svg>
                                    </x-slot>
                                    <x-slot name="date">
                                        13.März 24
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Gaming Challenge</h3>
                                    Du konntest Götti in einigen Switch-Sport-Spielen herausfordern.
                                    Je nach Anzahl gewonnener Spiele konntest du etwas gewinnen.
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        green
                                    </x-slot>
                                    <x-slot name="icon">
                                        <svg width="800px" height="800px" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="fill-green-500">
                                            <path
                                                d="M12,1C6.359,1,1,4.957,1,11c0,.622.423,4.166,2.294,4.877a1.854,1.854,0,0,0,.774.111,7.993,7.993,0,0,0,15.865,0,1.6,1.6,0,0,0,.773-.106C22.577,15.169,23,11.625,23,11,23,5.1,17.835,1,12,1Zm4.538,3.087a4.991,4.991,0,0,1-9.076,0A10.285,10.285,0,0,1,16.538,4.087ZM12,21a6.005,6.005,0,0,1-5.995-6.213A9.487,9.487,0,0,1,12,12a9.324,9.324,0,0,1,6,2.785A6.005,6.005,0,0,1,12,21Zm8.041-7.021C19.791,13.83,16.637,10,12,10c-4.572,0-7.7,3.772-8.041,3.977A5.855,5.855,0,0,1,3,11,7.4,7.4,0,0,1,5.784,5.174a6.962,6.962,0,0,0,12.432,0A7.4,7.4,0,0,1,21,11,5.855,5.855,0,0,1,20.041,13.979ZM11,15v1a1,1,0,0,1-2,0V15a1,1,0,0,1,2,0Zm4,0v1a1,1,0,0,1-2,0V15a1,1,0,0,1,2,0Z"/>
                                        </svg>
                                    </x-slot>
                                    <x-slot name="thumbnailUrl">
                                        {{asset('images/mario-riddle.jpg')}}
                                    </x-slot>
                                    <x-slot name="imageUrl">
                                        {{asset('images/mario-riddle.jpg')}}
                                    </x-slot>
                                    <x-slot name="date">
                                        26.Dezember 23
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Mario Rätsel</h3>
                                    Du konntest 9 Mario-Figuren mit möglichst wenig Strichen zu verbinden.
                                    Die Striche durften nur gerade sein und mussten aneinander anschliessen.
                                    Je nach Anzahl Striche konntest du etwas gewinnen.
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        red
                                    </x-slot>
                                    <x-slot name="icon">
                                        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-red-500">
                                            <path d="M18.0002 5V19M10 5L6 19M14 5L12 19"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </x-slot>
                                    <x-slot name="date">
                                        12.März 23
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Linien erraten</h3>
                                    Du konntest gegenüberliegenden Punkte mit je einer Linie verbinden.
                                    Die Linien, welche mit der Schablone übereinstimmten, ergaben den Preis.
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        sky
                                    </x-slot>
                                    <x-slot name="icon">
                                        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-sky-500">
                                            <path
                                                d="M7 8.5H10.5M13.75 14H17.25M13.75 16.5H17.25M6.75 15.25H10.75M8.75 17.25V13.25M14.1001 7L16.9285 9.82843M14.1001 9.82861L16.9285 7.00019M6 4H18C19.1046 4 20 4.89543 20 6V18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V6C4 4.89543 4.89543 4 6 4Z"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </x-slot>
                                    <x-slot name="date">
                                        10.Februar 23
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Rechnen</h3>
                                    Du konntest Zahlen eintragen.
                                    Je nach Quersumme dieser Zahlen konntest du etwas gewinnen.
                                </x-card>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
