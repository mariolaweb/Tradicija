@php
    $isHome = request()->routeIs('home');
@endphp

<div class="{{ $isHome ? 'bg-primary md:bg-transparent md:top-12' : 'bg-primary md:top-9' }} absolute z-30 flex h-11 md:h-14 w-full items-center"
    x-data="{ atTop: window.pageYOffset <= 52 }" x-on:scroll.window="atTop = (window.pageYOffset <= 52)">
    <div class="w-full" x-bind:class="{ 'top-0 fixed h-10 bg-primary z-30': !atTop }">

        <div class="flex items-center justify-between w-full px-2 mx-auto max-w-7xl">
            <a href="{{ route('home') }}" wire:navigate class="z-20 md:transform md:transition md:duration-200"
                x-bind:class="{ 'scale-75 ': !atTop }">
                <img src="{{ asset('images/svg/logo-tradicija-white.svg') }}"
                    class="mt-2 h-7 md:ml-0 md:mt-0 md:h-10" alt="Restoran Tradicija">
            </a>

            <div class="flex items-center text-white h-fit md:transform md:transition md:duration-200" x-bind:class="{ 'scale-75': !atTop }">

                <div class="hidden md:flex">
                <x-base.lang-switcher />
                </div>

                <button class="inline-flex items-center pl-4"
                    {{-- x-bind:class="{ 'scale-75': !atTop }"  --}}
                    x-on:click="openSidebar = ! openSidebar"
                    aria-label="Open sidebar button">
                    <span class="mr-2"> MENU</span>
                    {{-- <span class="flex h-12 px-3"> --}}
                    {{-- <a href="#" class="self-center mx-auto"
                       x-on:click="openSidebar = ! openSidebar"
                       aria-label="Navigation" aria-label="Open sidebat button"> --}}
                    <svg x-show="! openSidebar" xmlns="http://www.w3.org/2000/svg" class="z-20 size-7 md:size-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    {{-- <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="z-20 size-8" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg> --}}
                    {{-- </a> --}}
                    {{-- </span> --}}
                </button>

            </div>
        </div>
    </div>
</div>
