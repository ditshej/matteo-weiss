<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Games') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

            <section>
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-3">
                            <a href="{{ route('games.dino-memory') }}">
                                <x-card>
                                    <x-slot name="color">
                                        green
                                    </x-slot>
                                    <x-slot name="icon">
                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 490 490" xml:space="preserve">
                                        <g>
                                            <rect width="219.352" height="219.352" class="fill-green-500"/>
                                            <rect x="270.648" width="219.352" height="219.352" class="fill-green-900"/>
                                            <rect y="270.648" width="219.352" height="219.352" class="fill-green-900"/>
                                            <rect x="270.648" y="270.648" width="219.352" height="219.352"
                                                  class="fill-green-500"/>
                                        </g>
                                    </svg>
                                    </x-slot>
                                    <h3 class="text-lg dark:text-white">Dino Memori</h3>
                                </x-card>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
