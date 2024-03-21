<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Götti Lösli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <section>
                    <div class="py-16">
                        <div class="mx-auto px-6 max-w-6xl text-gray-500">
                            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-3">
                                <x-card>
                                    <x-slot name="color">
                                        blue
                                    </x-slot>
                                    <x-slot name="icon">

                                    </x-slot>
                                    <x-slot name="date">
                                        13.März 24
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Gaming Challenge</h3>
                                </x-card>
                                <x-card>
                                    <x-slot name="color">
                                        green
                                    </x-slot>
                                    <x-slot name="icon">

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
