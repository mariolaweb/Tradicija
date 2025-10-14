<div class="relative flex flex-col items-center justify-center">

    {{-- Heder stranice -slajder --}}
    <header class="flex justify-center w-full min-h-screen text-white">

        <x-base.home-slider />

        <div class="z-20 flex flex-col items-center w-full mx-auto max-w-7xl pt-28 md:pt-32">

            <div class="pt-24 rounded-2xl">
                <img src="{{ asset('images/svg/logo-tradicija-full-white.svg') }}" class="h-48 mx-auto lg:h-72"
                    alt="Restoran Tradicija Banja Luka" />

                <h1 class="text-3xl font-black leading-tight md:text-4xl lg:text-5xl">
                    <span class="sr-only">TRADICIJA</span> <br />
                </h1>
            </div>

            <div class="w-full max-w-3xl px-4 mx-auto mt-10">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-5">

                    {{-- Restoran --}}
                    <a href="#"
                        class="group relative rounded-xl bg-primary/70 py-3 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-primary focus:outline-none focus-visible:ring-2 focus-visible:ring-white/70">
                        <div class="flex flex-col items-center justify-center">
                            <svg class="size-12" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g transform="matrix(0.92,0,0,0.92,20.48783966064451,20.4862399291992)">
                                    <path
                                        d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            <div class="min-w-0">
                                <h3 class="text-xl font-medium tracking-wider text-center">@lang('messages.restaurant')</h3>
                            </div>

                        </div>
                    </a>

                    {{-- Smještaj --}}
                    <a href="#"
                        class="group relative rounded-xl bg-secondary/70 py-3 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-secondary">
                        <div class="flex flex-col items-center">
                            <svg class="size-12" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g
                                    transform="matrix(0.9300000000000003,0,0,0.9300000000000003,17.920034179687377,17.919999465942254)">
                                    <path
                                        d="M53.333 202.667h53.333a10.686 10.686 0 0 1-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517a31.95 31.95 0 0 1 31.04-24.235h68.672c17.643 0 32 14.357 32 32V192c0 5.888-4.779 10.667-10.667 10.667h64c-5.888 0-10.667-4.779-10.667-10.667v-21.333c0-17.643 14.357-32 32-32h68.672a31.95 31.95 0 0 1 31.04 24.235l6.635 26.517a10.606 10.606 0 0 1-1.941 9.152 10.687 10.687 0 0 1-8.405 4.096h53.333c5.888 0 10.667-4.779 10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397 0-53.333 23.936-53.333 53.333v64c0 5.888 4.778 10.667 10.666 10.667zM458.667 224H53.333C23.936 224 0 247.936 0 277.333v149.333c0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667v-32h469.333v32c0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667V277.333C512 247.936 488.064 224 458.667 224zm32 149.333H21.333V352h469.333v21.333z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            <div class="min-w-0">
                                <h3 class="text-xl font-medium tracking-wider text-center">@lang('messages.accommodation')</h3>
                            </div>

                        </div>
                    </a>

                </div>
            </div>

            {{-- Novi pokušaj --}}
            {{-- <div class="w-full max-w-3xl px-4 mx-auto mt-10">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-5"> --}}

                    {{-- Restoran --}}
                    {{-- <a href="#"
                        class="group relative rounded-xl transition duration-300 hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/70">
                        <div class="flex items-center justify-between space-x-1 group">
                            <div class="px-5 py-3 text-white rounded-lg bg-primary/60 group-hover:bg-primary">
                            <svg class="size-11" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g transform="matrix(0.92,0,0,0.92,20.48783966064451,20.4862399291992)">
                                    <path
                                        d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            </div>
                            <div class="flex justify-center w-full py-5 rounded-md bg-white/30 group-hover:bg-white group-hover:text-primary">
                                <h3 class="text-xl tracking-wider text-center">@lang('messages.restaurant')</h3>
                            </div>

                        </div>
                    </a> --}}

                    {{-- Smještaj --}}
                    {{-- <a href="#"
                        class="group relative rounded-xl transition duration-300 hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/70">
                        <div class="flex items-center justify-between space-x-1 group">
                            <div class="px-5 py-3 text-white rounded-lg bg-secondary/80 group-hover:bg-secondary">
                            <svg class="size-11" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g
                                    transform="matrix(0.9300000000000003,0,0,0.9300000000000003,17.920034179687377,17.919999465942254)">
                                    <path
                                        d="M53.333 202.667h53.333a10.686 10.686 0 0 1-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517a31.95 31.95 0 0 1 31.04-24.235h68.672c17.643 0 32 14.357 32 32V192c0 5.888-4.779 10.667-10.667 10.667h64c-5.888 0-10.667-4.779-10.667-10.667v-21.333c0-17.643 14.357-32 32-32h68.672a31.95 31.95 0 0 1 31.04 24.235l6.635 26.517a10.606 10.606 0 0 1-1.941 9.152 10.687 10.687 0 0 1-8.405 4.096h53.333c5.888 0 10.667-4.779 10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397 0-53.333 23.936-53.333 53.333v64c0 5.888 4.778 10.667 10.666 10.667zM458.667 224H53.333C23.936 224 0 247.936 0 277.333v149.333c0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667v-32h469.333v32c0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667V277.333C512 247.936 488.064 224 458.667 224zm32 149.333H21.333V352h469.333v21.333z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            </div>
                            <div class="flex justify-center w-full py-5 rounded-md bg-white/30 group-hover:bg-white group-hover:text-primary">
                                <h3 class="text-xl tracking-wider text-center">@lang('messages.accommodation')</h3>
                            </div>

                        </div>
                    </a> --}}

                {{-- </div>
            </div> --}}

        </div>
    </header>


    <section class="w-full px-2 pb-8 text-white bg-black">
        <blockquote class="relative max-w-3xl p-4 mx-auto text-xl leading-relaxed text-center md:mt-8">
            <!-- veliki navodnik -->
            <span class="absolute font-serif text-6xl italic pointer-events-none select-none -top-2 left-5">“</span>

            <p class="max-w-2xl mx-auto italic">
                @lang('messages.wisdom')
            </p>

            <footer class="pl-40 mt-3 text-base italic text-secondary">* @lang('messages.wisdom-paraf')</footer>
        </blockquote>
    </section>


    <section class="flex flex-col w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center px-4 py-8 w-fullm lg:w-1/2 md:px-10 md:py-16 lg:py-6">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        TRADICIJA @lang('messages.restaurant')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('messages.restaurant-home-text')
            </p>

            <a href="#" class="px-5 py-2 mt-4 font-medium text-white rounded lg:text-sm xl:text-base md:mt-8 lg:mt-4 xl:mt-8 bg-primary hover:bg-secondary">
                @lang('messages.restaurant')
            </a>
        </div>
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('images/base/test-home-restoran.webp') }}" alt="Restoran Tradicija">
        </div>
    </section>

    <section class="flex flex-col w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center w-full px-4 py-8 lg:w-1/2 md:px-10 md:py-16 lg:py-10 lg:py-6 lg:order-2">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        TRADICIJA @lang('messages.accommodation')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('messages.rooms-home-text')
            </p>

            <a href="#" class="px-5 py-2 mt-4 font-medium text-white uppercase rounded lg:text-sm xl:text-base md:mt-8 lg:mt-4 xl:mt-8 bg-secondary hover:bg-primary">
                @lang('pages.rooms')
            </a>
        </div>

        <div class="w-full lg:order-1 lg:w-1/2">
            <img src="{{ asset('images/base/test-home-sobe.webp') }}" alt="Restoran Tradicija">
        </div>
    </section>

    {{-- <section class="flex flex-col w-full md:flex-row">
        <div class="w-full">
            <div class="flex items-center max-w-xs p-4 mx-auto mt-8 border-l-8 border-primary">
                <div class="min-w-0">
                    <h2 class="overflow-hidden text-2xl font-medium text-ellipsis whitespace-nowrap">GALERIJA
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia alias suscipit nam
                nulla, quaerat laborum tempore harum optio quia iste neque nesciunt dicta repudiandae animi minima
                similique, quod magnam. Autem!</p>
        </div>
        <div class="w-full">
            <img src="{{ asset('images/base/test-home-1.webp') }}" alt="">
        </div>
    </section>

    <section class="flex flex-col w-full md:flex-row">
        <div class="w-full">
            <img src="{{ asset('images/base/test-home-2.webp') }}" alt="">
        </div>

        <div class="w-full">
            <div class="flex items-center max-w-xs p-4 mx-auto mt-8 border-l-8 border-primary">
                <div class="min-w-0">
                    <h2 class="overflow-hidden text-2xl font-medium text-ellipsis whitespace-nowrap">PITANJA
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia alias suscipit nam
                nulla, quaerat laborum tempore harum optio quia iste neque nesciunt dicta repudiandae animi minima
                similique, quod magnam. Autem!</p>
        </div>
    </section> --}}

    <div class="flex items-center justify-center w-full py-10 bg-primary">
      <p class="text-3xl font-medium tracking-wider text-center text-white lg:text-4xl">
        @lang('messages.opening')
      </p>
    </div>

</div>
