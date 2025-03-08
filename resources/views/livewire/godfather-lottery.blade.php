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
                        from-purple-500 border-purple-500/10 bg-purple-500
                        from-green-500 border-green-500/10 bg-green-500
                        from-blue-500 border-blue-500/10 bg-blue-500
                        from-amber-500 border-amber-500/10 bg-amber-500
                        from-red-500 border-red-500/10 bg-red-500
                        from-sky-500 border-sky-500/10 bg-sky-500
                     "></div>

            <section>
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-3">
                            <x-card>
                                <x-slot name="color">
                                    purple
                                </x-slot>
                                <x-slot name="icon">
                                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" class="stroke-purple-500" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6921 5H9.30807C8.15914 5.00635 7.0598 5.46885 6.25189 6.28576C5.44398 7.10268 4.99368 8.20708 5.00007 9.356V14.644C4.99368 15.7929 5.44398 16.8973 6.25189 17.7142C7.0598 18.5311 8.15914 18.9937 9.30807 19H14.6921C15.841 18.9937 16.9403 18.5311 17.7482 17.7142C18.5562 16.8973 19.0064 15.7929 19.0001 14.644V9.356C19.0064 8.20708 18.5562 7.10268 17.7482 6.28576C16.9403 5.46885 15.841 5.00635 14.6921 5Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.00006 9.50001C8.86651 9.50001 8.74095 9.448 8.64652 9.35357C8.55207 9.25912 8.50006 9.13356 8.50006 9.00001C8.50006 8.90078 8.5292 8.80474 8.58432 8.72225C8.63947 8.63971 8.71705 8.57604 8.80871 8.53807C8.8697 8.51281 8.93408 8.5 9.00008 8.5C9.03275 8.5 9.06556 8.50324 9.09761 8.50961C9.19493 8.52897 9.28345 8.57629 9.35362 8.64645C9.42378 8.71662 9.4711 8.80515 9.49046 8.90247C9.50982 8.99978 9.49998 9.09967 9.462 9.19135C9.42403 9.28302 9.36036 9.3606 9.27785 9.41573C9.19533 9.47087 9.09929 9.50001 9.00006 9.50001Z" fill="#000000"/>
                                        <path d="M9.00006 10C8.73485 10 8.48049 9.89465 8.29296 9.70711C8.10542 9.51958 8.00006 9.26522 8.00006 9.00001C8.00006 8.80222 8.05871 8.60888 8.1686 8.44444C8.27848 8.27999 8.43466 8.15181 8.61738 8.07613C8.80011 8.00044 9.00117 7.98063 9.19516 8.01922C9.38914 8.05781 9.56732 8.15305 9.70717 8.2929C9.84702 8.43275 9.94226 8.61093 9.98085 8.80492C10.0194 8.9989 9.99963 9.19996 9.92394 9.38269C9.84826 9.56541 9.72008 9.72159 9.55563 9.83147C9.39119 9.94136 9.19785 10 9.00006 10Z" fill="#000000"/>
                                        <path d="M12.0001 12.5C11.9341 12.5 11.8697 12.4872 11.8087 12.4619C11.7171 12.424 11.6395 12.3603 11.5843 12.2778C11.5292 12.1953 11.5001 12.0992 11.5001 12C11.5001 11.8665 11.5521 11.7409 11.6465 11.6465C11.741 11.552 11.8665 11.5 12.0001 11.5C12.0993 11.5 12.1953 11.5291 12.2778 11.5843C12.3604 11.6394 12.424 11.717 12.462 11.8087C12.5 11.9003 12.5098 12.0002 12.4905 12.0975C12.4711 12.1949 12.4238 12.2834 12.3536 12.3536C12.2835 12.4237 12.1949 12.471 12.0976 12.4904C12.0656 12.4968 12.0328 12.5 12.0001 12.5Z" fill="#000000"/>
                                        <path d="M12.0001 11C12.1979 11 12.3912 11.0587 12.5556 11.1685C12.7201 11.2784 12.8483 11.4346 12.9239 11.6173C12.9996 11.8001 13.0194 12.0011 12.9809 12.1951C12.9423 12.3891 12.847 12.5673 12.7072 12.7071C12.5673 12.847 12.3891 12.9422 12.1952 12.9808C12.0012 13.0194 11.8001 12.9996 11.6174 12.9239C11.4347 12.8482 11.2785 12.72 11.1686 12.5556C11.0587 12.3911 11.0001 12.1978 11.0001 12C11.0001 11.7348 11.1054 11.4804 11.293 11.2929C11.4805 11.1054 11.7349 11 12.0001 11Z" fill="#000000"/>
                                        <path d="M15 8.49999C15.066 8.49999 15.1304 8.5128 15.1914 8.53806C15.2831 8.57603 15.3607 8.6397 15.4158 8.72221C15.4709 8.80473 15.5001 8.90077 15.5001 9C15.5001 9.13355 15.4481 9.25911 15.3536 9.35354C15.2592 9.44799 15.1336 9.5 15.0001 9.5C14.9008 9.5 14.8048 9.47086 14.7223 9.41574C14.6398 9.36059 14.5761 9.28301 14.5381 9.19135C14.5001 9.09966 14.4903 8.99977 14.5097 8.90247C14.529 8.80514 14.5763 8.71661 14.6465 8.64644C14.7167 8.57628 14.8052 8.52896 14.9025 8.5096C14.9346 8.50323 14.9674 8.49999 15 8.49999Z" fill="#000000"/>
                                        <path d="M15.0001 10C14.8023 10 14.6089 9.94135 14.4445 9.83146C14.28 9.72158 14.1519 9.5654 14.0762 9.38268C14.0005 9.19995 13.9807 8.99889 14.0193 8.8049C14.0579 8.61092 14.1531 8.43274 14.293 8.29289C14.4328 8.15304 14.611 8.0578 14.805 8.01921C14.999 7.98062 15.2 8.00043 15.3827 8.07612C15.5655 8.1518 15.7216 8.27998 15.8315 8.44443C15.9414 8.60887 16.0001 8.80221 16.0001 9C16.0001 9.26521 15.8947 9.51957 15.7072 9.7071C15.5196 9.89464 15.2653 10 15.0001 10Z" fill="#000000"/>
                                        <path d="M15.0001 14.5C15.1336 14.5 15.2592 14.552 15.3536 14.6464C15.4481 14.7409 15.5001 14.8664 15.5001 15C15.5001 15.0992 15.4709 15.1953 15.4158 15.2778C15.3607 15.3603 15.2831 15.424 15.1914 15.4619C15.1304 15.4872 15.066 15.5 15 15.5C14.9674 15.5 14.9346 15.4968 14.9025 15.4904C14.8052 15.471 14.7167 15.4237 14.6465 15.3536C14.5763 15.2834 14.529 15.1949 14.5097 15.0975C14.4903 15.0002 14.5001 14.9003 14.5381 14.8087C14.5761 14.717 14.6398 14.6394 14.7223 14.5843C14.8048 14.5291 14.9008 14.5 15.0001 14.5Z" fill="#000000"/>
                                        <path d="M15.0001 14C15.2653 14 15.5196 14.1054 15.7072 14.2929C15.8947 14.4804 16.0001 14.7348 16.0001 15C16.0001 15.1978 15.9414 15.3911 15.8315 15.5556C15.7216 15.72 15.5655 15.8482 15.3827 15.9239C15.2 15.9996 14.999 16.0194 14.805 15.9808C14.611 15.9422 14.4328 15.847 14.293 15.7071C14.1531 15.5673 14.0579 15.3891 14.0193 15.1951C13.9807 15.0011 14.0005 14.8 14.0762 14.6173C14.1519 14.4346 14.28 14.2784 14.4445 14.1685C14.6089 14.0586 14.8023 14 15.0001 14Z" fill="#000000"/>
                                        <path d="M9.00009 15.5C8.93408 15.5 8.8697 15.4872 8.80872 15.4619C8.71705 15.424 8.63947 15.3603 8.58434 15.2778C8.5292 15.1953 8.50006 15.0992 8.50006 15C8.50006 14.8665 8.55207 14.7409 8.6465 14.6465C8.74095 14.552 8.86651 14.5 9.00006 14.5C9.09929 14.5 9.19533 14.5291 9.27782 14.5843C9.36036 14.6394 9.42403 14.717 9.462 14.8087C9.49998 14.9003 9.50982 15.0002 9.49046 15.0975C9.4711 15.1949 9.42378 15.2834 9.35362 15.3536C9.28345 15.4237 9.19493 15.471 9.0976 15.4904C9.06556 15.4968 9.03275 15.5 9.00009 15.5Z" fill="#000000"/>
                                        <path d="M9.00006 14C9.19785 14 9.39119 14.0587 9.55563 14.1685C9.72008 14.2784 9.84826 14.4346 9.92394 14.6173C9.99963 14.8001 10.0194 15.0011 9.98085 15.1951C9.94226 15.3891 9.84702 15.5673 9.70717 15.7071C9.56732 15.847 9.38914 15.9422 9.19516 15.9808C9.00117 16.0194 8.80011 15.9996 8.61738 15.9239C8.43466 15.8482 8.27848 15.72 8.1686 15.5556C8.05871 15.3911 8.00006 15.1978 8.00006 15C8.00006 14.7348 8.10542 14.4804 8.29296 14.2929C8.48049 14.1054 8.73485 14 9.00006 14Z" fill="#000000"/>
                                    </svg>
                                </x-slot>
                                <x-slot name="date">
                                    8.März 25
                                </x-slot>
                                <h3 class="text-lg dark:text-white">Wüfeln</h3>
                                Du hast gegen Gött ein Würfelspiel gespielt.<br>
                                Es waren 5 Runden. In jeder Runde wüfelten ihr einen 100er-Würfel.
                                Derjenige mit dem höheren Ergebnis durfte zuerst aus den restlichen Würfeln einen auswählen.
                                Danach habt ihr abwechslungsweise die anderen Würfel ausgewählt.<br>
                                Es gab folgende Würfel: W20, W12, W10, W8, W6 und einen W4<br>
                                Dann habt ihr mit euren Würfel gewürfelt und die Person mit dem höheren Ergebnis hat gewonnen.
                                Für jede Runde, die du gewonnen hast, hast du 10 Fr erhalten.<br><br>
                                Du hast dabei 40 Franken gewonnen.
                            </x-card>
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
                                <x-slot name="date">
                                    26.Dezember 24
                                </x-slot>
                                <h3 class="text-lg dark:text-white">Dino Memory</h3>
                                Du konntest das Dino Memory bis zu 10 Mal spielen.
                                Sobald du mit deinem Ergebnis zufrieden warst,
                                zeigte dir Götti, wie viel du gewonnen hast.<br><br>
                                Du hast dabei 30 Franken gewonnen.
                            </x-card>
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
                                Je nach Anzahl gewonnener Spiele konntest du etwas gewinnen.<br><br>
                                Du hast dabei 20 Franken gewonnen.
                            </x-card>
                            <x-card>
                                <x-slot name="color">
                                    amber
                                </x-slot>
                                <x-slot name="icon">
                                    <svg width="800px" height="800px" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-amber-500">
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
                                Je nach Anzahl Striche konntest du etwas gewinnen.<br><br>
                                Du hast dabei 20 Franken gewonnen.
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
                                <x-slot name="thumbnailUrl">
                                    {{asset('images/lines-riddle.jpg')}}
                                </x-slot>
                                <x-slot name="imageUrl">
                                    {{asset('images/lines-riddle.jpg')}}
                                </x-slot>
                                <x-slot name="date">
                                    12.März 23
                                </x-slot>
                                <h3 class="text-lg dark:text-white">Linien erraten</h3>
                                Du konntest gegenüberliegenden Punkte mit je einer Linie verbinden.
                                Die Linien, welche mit der Schablone übereinstimmten, ergaben den Preis.<br><br>
                                Du hast dabei 20 Franken gewonnen.
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
                                Je nach Quersumme dieser Zahlen konntest du etwas gewinnen.<br><br>
                                Du hast dabei 20 Franken gewonnen.
                            </x-card>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
