<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dino Memori') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg
                flex justify-center items-center relative">

            <div class='board'></div>
            <div class='clone'>
                <div class='face'></div>
                <div class='face'></div>
                <div class='face'></div>
                <div class='face'></div>
                <div class='face'></div>
                <div class='face'></div>
            </div>

            <div class="absolute top-2 right-2 font-bold text-2xl flex">
                <div class="m-3">
                    <span class="dark:text-orange-300">Versuche: </span>
                    <span class="tries rounded-lg bg-orange-300 py-2 px-3.5 align-baseline">0</span>
                </div>
                <div class="m-3">
                    <span class="text-indigo-500">Paare: </span>
                    <span class="matches rounded-lg bg-indigo-500 py-2 px-3.5 align-baseline text-white">0</span>
                </div>
            </div>

            <div class='overlay hidden flex flex-col'>
                <div class="font-bold text-2xl flex bg-white rounded-xl mb-3">
                    <div class="m-3">
                        <span class="dark:text-orange-300">Versuche: </span>
                        <span class="gameover-tries rounded-lg bg-orange-300 py-2 px-3.5 align-baseline">0</span>
                    </div>
                    <div class="m-3">
                        <span class="text-indigo-500">Paare: </span>
                        <span class="gameover-matches rounded-lg bg-indigo-500 py-2 px-3.5 align-baseline text-white">0</span>
                    </div>
                </div>
                <div class='gameover'>
                    <p>GEWONNEN!</p>
                    <button class='reset'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                            <path
                                d="M485.8 113.9L349.3 250.5c-3.5 3.5-3.5 9.1 0 12.6l136.6 136.6c5.6 5.6 15.2 1.6 15.2-6.3V120.2c-.1-7.9-9.7-11.9-15.3-6.3z"
                                fill="#fff"/>
                            <path
                                d="M500 194.8V317c125.9 0 228 102.1 228 228S625.9 773 500 773v121.8c193.3 0 350-156.7 350-350s-156.7-350-350-350zM272 545c0-55.1 19.6-105.7 52.1-145.1 6.5-7.9 5.9-19.5-1.4-26.8l-58.3-58.3c-8.2-8.2-21.7-7.7-29.3 1-53 61.5-85.1 141.5-85.1 229 0 193.3 156.7 350 350 350V773c-125.9 0-228-102.1-228-228z"
                                fill="#fff"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Preload Game Sounds -->
            <audio preload="auto" class="audio-win">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/dino-win.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/dino-win.ogg">
            </audio>
            <audio preload="auto" class="audio-ahahah">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-ahahah.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-ahahah.ogg">
            </audio>
            <audio preload="auto" class="audio-dino">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audo-dino.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-dino.ogg">
            </audio>
            <audio preload="auto" class="audio-egg">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-egg.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-egg.ogg">
            </audio>
            <audio preload="auto" class="audio-erupt">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-erupt.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-erupt.ogg">
            </audio>
            <audio preload="auto" class="audio-ptero">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-ptero.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-ptero.ogg">
            </audio>
            <audio preload="auto" class="audio-tri">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-tri.mp3">
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62105/audio-tri.ogg">
            </audio>

        </div>
    </div>
</div>


@assets
@vite(['resources/css/dino-memory.css'])
@vite(['resources/js/dino-memory.js'])
@endassets

