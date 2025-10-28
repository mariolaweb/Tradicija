<div class="absolute z-50 w-full h-12 bg-black md:bg-transparent md:top-12"
    x-on:scroll.window="atTop =( window.pageYOffset > 52) ? false : true">

    <div class="w-full" x-bind:class="{ 'top-0 fixed h-10 bg-black z-30': !atTop }">
        <div class="h-1" x-bind:class="{ 'hidden': !atTop }"></div>
        <div class="flex items-center justify-between w-full mx-auto max-w-7xl">

            <a href="{{ route('home') }}" wire:navigate class="z-20 md:transform md:transition md:duration-200"
                x-bind:class="{ 'scale-75 ': !atTop }">
                <img src="{{ asset('images/svg/logo-tradicija-white.svg') }}" class="h-8 mt-2 md:mt-0 md:h-10" alt="Restoran Tradicija">
            </a>

            <div class="flex text-white">
            <button class="inline-flex items-center pl-10 md:z-20 md:transform md:transition md:duration-200"
                x-bind:class="{ 'scale-75': !atTop }" x-on:click="openSidebar = ! openSidebar"
                aria-label="Open sidebar button">
                MENU
                <svg  xmlns="http://www.w3.org/2000/svg" class="size ml-1.5 text-secondary " fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="ml-1 size text-secondary" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- Menu icon --}}
            <div class="flex h-12 px-3 ">
                <a href="#" class="self-center mx-auto" x-on:click="openSidebar = ! openSidebar"
                    aria-label="Navigation" aria-label="Open sidebat button">
                    <svg x-show="! openSidebar" xmlns="http://www.w3.org/2000/svg" class="z-20 h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="z-20 h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            </div>
        </div>
    </div>



</div>
