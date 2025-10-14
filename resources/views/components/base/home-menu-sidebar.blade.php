<div class="fixed inset-0 z-40 h-screen overflow-y-scroll bg-black md:justify-center md:opacity-80" x-show="openSidebar"
    @click.away="openSidebar = false" x-transition:enter="transition ease-out duration-300" x-cloak>

    <div class="flex flex-col w-full max-w-sm min-h-screen mx-auto space-y-1 font-semibold uppercase text-gray-50 md:justify-center md:text-2xl md:font-bold"
        x-data="{ open: false }">

        {{-- <x-application-logo class="block w-auto h-20 p-3 md:p-0 md:mb-4" aria-label="Restoran Tradicija" /> --}}

        <a href="{{ route('home') }}" wire:navigate class="w-full pt-3">
            <p class="inline-flex items-center p-2 ml-4 transition duration-200 hover:text-yellow-400">
                <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                        <path
                            d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                @lang('pages.home')
            </p>
        </a>

        <a href="#" wire:navigate class="w-full">
            <p class="inline-flex items-center p-2 ml-4 transition duration-200 hover:text-yellow-400">
                <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                        <path
                            d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                @lang('pages.rooms')
            </p>
        </a>

        <a href="{{ route('faq') }}" wire:navigate class="w-full">
            <p class="inline-flex items-center p-2 ml-4 transition duration-200 hover:text-yellow-400">
                <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                        <path
                            d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                @lang('pages.faq')
            </p>
        </a>

        <a href="{{ route('gallery') }}" wire:navigate class="w-full">
            <p class="inline-flex items-center p-2 ml-4 transition duration-200 hover:text-yellow-400">
                <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                        <path
                            d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                @lang('pages.gallery')
            </p>
        </a>

        <div class="relative w-full" :class="{ 'text-gray-50': selected === 1, ' ': selected !== 1 }"
            x-data="{ selected: null }">

            <button type="button" class="w-full" @click="selected !== 1 ? selected = 1 : selected = null"
                aria-label="Dropdown about">
                <div class="flex items-center justify-between px-4">
                    <p class="inline-flex items-center p-2 uppercase transition duration-200 hover:text-yellow-400">
                        <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
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
                        @lang('pages.about')
                    </p>
                    <div>
                        <svg x-show="selected !== 1 ? selected = 1 : selected = null"
                            class="h-6 w-6 rounded-md bg-yellow-500 p-0.5 text-gray-800" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        <svg x-show="selected !== 1 ? selected = 1 : selected = null"
                            class="h-6 w-6 rounded-md bg-yellow-500 p-0.5 text-gray-800" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                    </div>
                </div>
            </button>
            <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                x-ref="container1"
                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                <div class="flex flex-col pt-1 space-y-1">

                    <a href="{{ route('about') }}" wire:navigate
                        class="inline-flex items-center py-2 pl-10 leading-5 transition dark:hover:text-yellow-300">
                        <svg class="w-5 h-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g
                                transform="matrix(6.123233995736766e-17,1,-1,6.123233995736766e-17,30.99728751182556,-1.0027143955230713)">
                                <path fill="currentColor"
                                    d="M28.925 15.387A1 1 0 0 1 28 16h-5v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V16H4a1 1 0 0 1-.925-.613 1.05 1.05 0 0 1 .213-1.1l12-12a1.013 1.013 0 0 1 1.424 0l12 12a1.05 1.05 0 0 1 .213 1.1z"
                                    opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        @lang('pages.about')
                    </a>

                    <a href="{{ route('privacy') }}" wire:navigate
                        class="inline-flex items-center py-2 pl-10 leading-5 transition dark:hover:text-yellow-300">
                        <svg class="w-5 h-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g
                                transform="matrix(6.123233995736766e-17,1,-1,6.123233995736766e-17,30.99728751182556,-1.0027143955230713)">
                                <path fill="currentColor"
                                    d="M28.925 15.387A1 1 0 0 1 28 16h-5v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V16H4a1 1 0 0 1-.925-.613 1.05 1.05 0 0 1 .213-1.1l12-12a1.013 1.013 0 0 1 1.424 0l12 12a1.05 1.05 0 0 1 .213 1.1z"
                                    opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        @lang('pages.privacy')
                    </a>

                    <a href="{{ route('cookies') }}" wire:navigate
                        class="inline-flex items-center py-2 pl-10 leading-5 transition dark:hover:text-yellow-300">
                        <svg class="w-5 h-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g
                                transform="matrix(6.123233995736766e-17,1,-1,6.123233995736766e-17,30.99728751182556,-1.0027143955230713)">
                                <path fill="currentColor"
                                    d="M28.925 15.387A1 1 0 0 1 28 16h-5v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V16H4a1 1 0 0 1-.925-.613 1.05 1.05 0 0 1 .213-1.1l12-12a1.013 1.013 0 0 1 1.424 0l12 12a1.05 1.05 0 0 1 .213 1.1z"
                                    opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        @lang('pages.cookies')
                    </a>

                </div>
            </div>
        </div>

        <a href="{{ route('contact-us') }}" wire:navigate class="w-full">
            <p class="inline-flex items-center p-2 ml-4 transition duration-200 hover:text-yellow-400">
                <svg class="w-8 h-8 mr-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                        <path
                            d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                @lang('pages.contact')
            </p>
        </a>

        <div class="justify-center hidden w-full pt-5 text-white md:flex">
            <p class="p-3 text-xl text-center normal-case">
                @lang('messages.working-time-home-sidebar')
            </p>
        </div>

        {{-- Telefonski poziv za rezervacije --}}
        <div class="pt-5 pb-2 md:hidden">
            <div class="flex justify-center italic">
                <a href="tel:+38765045045" class="flex items-center space-x-3">
                    <svg class="w-10 h-10 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path
                                d="M406 31H286c-57.891 0-105 47.109-105 105 0 52.808 39.185 96.636 90 103.931V286a14.983 14.983 0 0 0 9.258 13.857c5.533 2.309 12.023 1.071 16.348-3.252L352.211 241H406c57.891 0 106-47.109 106-105S463.891 31 406 31zM286 150.998c-8.286 0-15-6.716-15-15s6.714-15 15-15c8.284 0 15 6.716 15 15s-6.716 15-15 15zm60 0c-8.286 0-15-6.716-15-15s6.714-15 15-15c8.284 0 15 6.716 15 15s-6.716 15-15 15zm60 0c-8.286 0-15-6.716-15-15s6.714-15 15-15c8.284 0 15 6.716 15 15s-6.716 15-15 15z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M337 481c24.814 0 45-20.186 45-45v-60c0-6.46-4.131-12.188-10.254-14.224l-89.789-30c-4.395-1.479-9.199-.806-13.066 1.743l-38.174 25.444c-40.43-19.277-88.403-67.251-107.681-107.681l25.444-38.174a15.013 15.013 0 0 0 1.743-13.066l-30-89.789A14.982 14.982 0 0 0 106 100H45c-24.814 0-45 19.975-45 44.789C0 317.611 164.178 481 337 481z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <p
                        class="inline-flex rounded-lg bg-yellow-500 px-5 py-0.5 text-2xl font-medium tracking-tight text-gray-800 hover:bg-yellow-400">
                        065 045 045
                    </p>
                </a>
            </div>

            <p class="mx-2 mt-2 mb-3 text-xs italic font-light text-center normal-case sm:text-sm">
                @lang('messages.call_us')
            </p>
        </div>

        {{-- Adresa, email i društvene mreže --}}
        <div class="mx-auto flex flex-col space-y-2.5 normal-case md:hidden">

            <div class="flex items-center space-x-1.5 text-xs">
                <svg class="w-6 h-6 text-yellow-500 cursor-pointer hover:text-white"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512" height="512" x="0" y="0" viewBox="0 0 254000 254000"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd">
                    <g>
                        <path
                            d="M127000 254000C56871 254000 0 197129 0 127000S56871 0 127000 0s127000 56871 127000 127000-56871 127000-127000 127000zm0-209606c34742 0 62905 28163 62905 62905 0 34741-62905 102306-62905 102306s-62905-67565-62905-102306c0-34742 28163-62905 62905-62905zm0 37912c13172 0 23854 10682 23854 23855 0 13172-10682 23854-23854 23854s-23854-10682-23854-23854c0-13173 10682-23855 23854-23855z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                <p class="text-xs font-light normal-case sm:text-sm">
                    Marije Dimić 7a, 78000 Banja Luka
                </p>
            </div>

            <a href="mailto:sheriff.gril@gmail.com?subject=Mail sa početne stranice"
                class="flex items-center space-x-1.5 text-xs">
                <svg class="w-6 h-6 text-yellow-500 hover:text-white" xmlns="http://www.w3.org/2000/svg"
                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path fill-rule="evenodd"
                            d="M256 0c141.385 0 256 114.615 256 256S397.385 512 256 512 0 397.385 0 256 114.615 0 256 0zm162.5 355.241V164.978l-95.137 95.131zm-304.676 3.876h284.358l-86.908-86.908-33.123 33.118a8.563 8.563 0 0 1-6.05 2.5h-32.2a8.553 8.553 0 0 1-6.051-2.5l-33.122-33.118-86.908 86.908zM93.5 164.972v190.274l95.137-95.137zm312.906-12.089H105.6l137.844 137.844h25.117z"
                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                <p class="text-xs font-light normal-case sm:text-sm">
                    sheriff.gril@gmail.com
                </p>
            </a>

            <div class="flex space-x-1.5">
                <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                    viewBox="0 0 16 16" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 3v5.414l3.293 3.293 1.414-1.414L9 7.586V3z"
                            clip-rule="evenodd" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                <p class="text-xs font-light normal-case sm:text-sm">
                    @lang('messages.working-time-footer')
                </p>
            </div>

        </div>


        <div class="flex items-center w-full mx-auto space-x-4 md:hidden">
            <div class="w-full border-t border-yellow-500"></div>
            <svg class="w-20 h-20 text-yellow-500" xmlns="http://www.w3.org/2000/svg" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                <g transform="matrix(1.06,0,0,1.06,-15.365879745483426,-15.3646799468994)">
                    <path
                        d="M93.633 363H25.256l36.656 132h72.412l-10.8-35.647zm-6.147 125.525a16.728 16.728 0 1 1 16.729-16.725 16.747 16.747 0 0 1-16.729 16.725z"
                        fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    <path
                        d="M87.486 465.069a6.728 6.728 0 1 0 6.729 6.728 6.735 6.735 0 0 0-6.729-6.728zM254 94.428c3-.181 7.33-.284 11-.284s7 .1 11 .284V78.453a39.551 39.551 0 0 1-11 1.679 34.583 34.583 0 0 1-11-1.679zM406.119 342.705l-60.175 32.463-5.96 3.143c.068.958.114 1.921.114 2.9a5 5 0 0 1-5 5h-.226l-41.542-1.88a200.835 200.835 0 0 0-36.508 1.686 5 5 0 0 1-1.371-9.9 210.947 210.947 0 0 1 38.33-1.771l35.874 1.625A31.256 31.256 0 0 0 298.889 350h-48.7a63.259 63.259 0 0 1-27.383-6.276l-5.023-2.43a75.737 75.737 0 0 0-78.665 7.577l-11.97 10.655a52.527 52.527 0 0 1-20.68 11.321l24.675 79.384 34.129-21.575a4.54 4.54 0 0 1 .231-.138 32.09 32.09 0 0 1 23.413-3.168l73.042 13.45a83.779 83.779 0 0 0 8.862 1.119 81.545 81.545 0 0 0 51.732-14.419l113.183-77.712a24.306 24.306 0 0 0-29.616-5.083zM264.572 104.223C174.4 104.223 96.738 162 77.422 243h374.3c-19.314-81-96.962-138.777-187.15-138.777zm-79.337 67.53a124.6 124.6 0 0 0-34.419 34.141 5 5 0 1 1-8.3-5.577 134.527 134.527 0 0 1 37.161-36.876 5 5 0 0 1 5.558 8.312zm21.209-11.53a137.278 137.278 0 0 0-5.368 2.458 5 5 0 0 1-4.363-9 148.34 148.34 0 0 1 5.768-2.641 5 5 0 1 1 3.963 9.181zM291.06 43.645a26.488 26.488 0 1 0-26.488 26.487 26.517 26.517 0 0 0 26.488-26.487zM69.6 306.036A14.6 14.6 0 0 0 83.906 318h360.721a14.658 14.658 0 0 0 14.249-11.646L463.092 286H65.906zM475.442 253H53.7a11.5 11.5 0 1 0 0 23h421.74a11.5 11.5 0 1 0 0-23z"
                        fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                    <path
                        d="m341.238 366.345 48.606-26.222c-5.748-5.974-14.75-8.34-21.4-5l-37.51 20.211a41.155 41.155 0 0 1 7.012 12.751zM319.315 333.706a2.728 2.728 0 0 1-.118.066l-12.748 6.928a41.016 41.016 0 0 1 16.892 7.357l24.993-13.457c-8.898-5.444-20.218-5.994-29.019-.894z"
                        fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                </g>
            </svg>
            <div class="w-full border-t border-yellow-500"></div>
        </div>

        {{-- Multilanguage buttons --}}
        <div class="flex pb-5 mx-auto space-x-4 md:hidden">
            <x-base.lang-switcher />
        </div>
    </div>

    <button
        class="absolute z-50 inline-flex items-center right-6 top-6 md:hidden md:transform md:transition md:duration-200"
        x-on:click="openSidebar = ! openSidebar" aria-label="Open sidebar button">
        <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 ml-10 text-yellow-500"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <button
        class="absolute items-center hidden right-64 top-64 md:z-50 md:inline-flex md:transform md:transition md:duration-200"
        x-on:click="openSidebar = ! openSidebar" aria-label="Open sidebar button">
        <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

</div>
