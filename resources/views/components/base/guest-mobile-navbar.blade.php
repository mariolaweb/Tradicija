<div class="fixed top-0 z-50 w-full md:hidden" x-data="{ 'openSidebar': false }">

    <div
        class="flex items-center justify-between h-12 text-white bg-gray-800">

        <a href="{{ route('home') }}">
            <span class="text-lg font-semibold">{{ config('app.name') }}</span>
        </a>

        <button @click="openSidebar = !openSidebar" class="focus:outline-none">
            <svg x-show="!openSidebar" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="absolute left-0 z-50 w-4/5 h-screen text-white bg-blue-800 top-12"
             x-show="openSidebar"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-x-5"
             x-transition:enter-end="opacity-100 translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-x-0"
             x-transition:leave-end="opacity-0 -translate-x-5"
             @click.away="openSidebar = false"
             x-cloak>
            <nav class="flex flex-col px-4 py-6 space-y-2 text-lg">
                <a href="{{ route('home') }}" class="hover:text-yellow-300">Početna</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-300">O nama</a>
                <a href="{{ route('contact-us') }}" class="hover:text-yellow-300">Kontakt</a>
                <a href="{{ route('terms') }}" class="hover:text-yellow-300">Uslovi</a>
                <a href="{{ route('privacy') }}" class="hover:text-yellow-300">Privatnost</a>
                <a href="{{ route('cookies') }}" class="hover:text-yellow-300">Kolačići</a>
            </nav>
        </div>
    </div>
</div>
