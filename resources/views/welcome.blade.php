<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matteo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/dinosaur.css'])
</head>
<body>
<div class="freeze"><span class="cry">RoOar!</span>
    <div class="wrapper">
        <div class="dinosaur run">
            <div class="body">
                <div class="head">
                    <div class="head-mask"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="eye"></div>
                </div>
                <div class="hand">
                    <div class="elbow">
                        <div class="forearm"></div>
                    </div>
                </div>
                <div class="hand" id="second-hand">
                    <div class="elbow">
                        <div class="forearm"></div>
                    </div>
                </div>
                <div class="leg">
                    <div class="knee">
                        <div class="foreleg"></div>
                    </div>
                </div>
                <div class="leg" id="second-leg">
                    <div class="knee">
                        <div class="foreleg"></div>
                    </div>
                </div>
                <div class="body-mask">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="mark"></div>
                <ul class="tail">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
