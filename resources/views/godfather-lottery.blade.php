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
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9978834,5 C18.8638767,5 21.9978834,8.13400675 21.9978834,12 C21.9978834,15.7854517 18.9931001,18.8690987 15.2385332,18.995941 L14.9978834,19 L9.00211656,19 C5.13612331,19 2.00211656,15.8659932 2.00211656,12 C2.00211656,8.21454828 5.00689994,5.13090132 8.76146681,5.00405902 L9.00211656,5 L14.9978834,5 Z M14.75,12.5 C14.0596441,12.5 13.5,13.0596441 13.5,13.75 C13.5,14.4403559 14.0596441,15 14.75,15 C15.4403559,15 16,14.4403559 16,13.75 C16,13.0596441 15.4403559,12.5 14.75,12.5 Z M8,9 C7.62030423,9 7.30650904,9.28215388 7.25684662,9.64822944 L7.25,9.75 L7.25,11.248 L5.75,11.2487458 C5.33578644,11.2487458 5,11.5845322 5,11.9987458 C5,12.3784415 5.28215388,12.6922367 5.64822944,12.7418991 L5.75,12.7487458 L7.25,12.748 L7.25,14.25 C7.25,14.6642136 7.58578644,15 8,15 C8.37969577,15 8.69349096,14.7178461 8.74315338,14.3517706 L8.75,14.25 L8.75,12.748 L10.25,12.7487458 C10.6642136,12.7487458 11,12.4129593 11,11.9987458 C11,11.61905 10.7178461,11.3052548 10.3517706,11.2555924 L10.25,11.2487458 L8.75,11.248 L8.75,9.75 C8.75,9.33578644 8.41421356,9 8,9 Z M16.75,9 C16.0596441,9 15.5,9.55964406 15.5,10.25 C15.5,10.9403559 16.0596441,11.5 16.75,11.5 C17.4403559,11.5 18,10.9403559 18,10.25 C18,9.55964406 17.4403559,9 16.75,9 Z"
                                                fill="#3C82F6"/>
                                        </svg>
                                    </x-slot>

                                    <x-slot name="date">
                                        13.März 24
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Gaming Challenge</h3>
                                    Some more text, that is a little longer to find out if it overlaps the card.
                                    Some more text, that is a little longer to find out if it overlaps the card.
                                    Some more text, that is a little longer to find out if it overlaps the card.
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        green
                                    </x-slot>
                                    <x-slot name="icon">

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
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        red
                                    </x-slot>
                                    <x-slot name="icon">

                                    </x-slot>
                                    <x-slot name="date">
                                        ???? 23
                                    </x-slot>
                                    <h3 class="text-lg">Linien erraten</h3>
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        sky
                                    </x-slot>
                                    <x-slot name="icon">

                                    </x-slot>
                                    <x-slot name="date">
                                        ???? 23
                                    </x-slot>
                                    <h3 class="text-lg">Rechnen</h3>
                                </x-card>
                                {{--                                <x-card>--}}
                                {{--                                    <x-slot name="color">--}}
                                {{--                                        yellow--}}
                                {{--                                    </x-slot>--}}
                                {{--                                    <x-slot name="icon">--}}

                                {{--                                    </x-slot>--}}
                                {{--                                    <x-slot name="date">--}}
                                {{--                                        13.März 24--}}
                                {{--                                    </x-slot>--}}
                                {{--                                    some text--}}
                                {{--                                </x-card>--}}
                                {{--                                <x-card>--}}
                                {{--                                    <x-slot name="color">--}}
                                {{--                                        gray--}}
                                {{--                                    </x-slot>--}}
                                {{--                                    <x-slot name="icon">--}}
                                {{--                                        --}}
                                {{--                                    </x-slot>--}}
                                {{--                                    <x-slot name="date">--}}
                                {{--                                        13.März 24--}}
                                {{--                                    </x-slot>--}}
                                {{--                                    some text--}}
                                {{--                                </x-card>--}}
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
