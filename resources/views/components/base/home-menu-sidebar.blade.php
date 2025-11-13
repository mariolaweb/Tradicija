<div class="fixed inset-0 z-40 h-screen overflow-y-scroll bg-black/90 md:justify-center md:bg-black/85" x-show="openSidebar"
    @click.away="openSidebar = false" x-transition:enter="transition ease-out duration-300" x-cloak>

    <div class="flex flex-col w-full max-w-sm min-h-screen mx-auto space-y-1 font-semibold text-white uppercase md:text-2xl md:font-medium"
        x-data="{ open: false }">

        <img src="{{ asset('images/svg/logo-tradicija-full-white.svg') }}"
            class="mx-auto size-28 md:mt-16 md:size-48 lg:size-56" alt="Restoran Tradicija Banja Luka">

        <a href="{{ route('home') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.home')
            </p>
        </a>

         <a href="{{ route('cuisine') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.cuisine')
            </p>
        </a>

        <a href="{{ route('rooms') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.rooms')
            </p>
        </a>

        <a href="{{ route('faq') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.faq')
            </p>
        </a>

        <a href="{{ route('gallery') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.gallery')
            </p>
        </a>

        <div class="relative w-full" :class="{ 'text-gray-50': selected === 1, ' ': selected !== 1 }"
            x-data="{ selected: null }">

            <button type="button" class="w-full" @click="selected !== 1 ? selected = 1 : selected = null"
                aria-label="Dropdown about">
                <div class="flex items-center justify-between px-4 transition duration-200 group">
                    <p
                        class="inline-flex items-center p-2 uppercase group-hover:text-secondary md:group-hover:text-primary">
                        <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                        @lang('pages.about')
                    </p>
                    <div>
                        <svg x-show="selected !== 1 ? selected = 1 : selected = null"
                            class="h-6 w-6 rounded-md bg-white p-0.5 text-gray-800" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        <svg x-show="selected !== 1 ? selected = 1 : selected = null"
                            class="h-6 w-6 rounded-md bg-white p-0.5 text-gray-800" viewBox="0 0 24 24"
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

                    <a href="{{ route('about') }}" wire:navigate class="w-full pl-6 transition duration-200 group">
                        <p
                            class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                            <span class="mr-3 md:mr-4 size-3 md:size-4 bg-secondary group-hover:bg-white"></span>
                            @lang('pages.about')
                        </p>
                    </a>

                    <a href="{{ route('privacy') }}" wire:navigate class="w-full pl-6 transition duration-200 group">
                        <p
                            class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                            <span class="mr-3 md:mr-4 size-3 md:size-4 bg-secondary group-hover:bg-white"></span>
                            @lang('pages.privacy')
                        </p>
                    </a>

                    <a href="{{ route('cookies') }}" wire:navigate class="w-full pl-6 transition duration-200 group">
                        <p
                            class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                            <span class="mr-3 md:mr-4 size-3 md:size-4 bg-secondary group-hover:bg-white"></span>
                            @lang('pages.cookies')
                        </p>
                    </a>

                </div>
            </div>
        </div>

        <a href="{{ route('contact-us') }}" wire:navigate class="w-full transition duration-200 group">
            <p class="inline-flex items-center p-2 ml-4 group-hover:text-secondary md:group-hover:text-primary">
                <span class="mr-3 md:mr-4 size-3 md:size-4 bg-primary group-hover:bg-white"></span>
                @lang('pages.contact')
            </p>
        </a>


        {{-- Telefonski poziv za rezervacije --}}
        <div class="pt-5 pb-2 md:hidden">
            <div class="flex justify-center">
                <a href="tel:+38766156156" class="inline-flex items-center py-2">
                    <svg class="mr-2 text-white size-12" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                        viewBox="0 0 66 66" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path
                                d="m54.98 47.36-14.97-2.1c-1.93-.27-3.82.85-4.44 2.7-.27.8-.46 1.64-.55 2.52-.01.08-.01.17-.01.25a35.109 35.109 0 0 1-20.3-20.28c.09-.01.18 0 .27-.01.88-.09 1.72-.28 2.52-.55 1.85-.62 2.97-2.51 2.7-4.44l-2.1-14.96a4.105 4.105 0 0 0-3.9-3.53c-.69-.03-1.38.01-2.09.1-5.22.73-9.16 4.79-9.98 9.73-.09.41-.14 2.28-.13 2.55.67 23.8 19.73 43.08 43.46 44.08l3-.06c5.04-.74 9.2-4.71 9.94-10.01.1-.7.13-1.4.1-2.09a4.087 4.087 0 0 0-3.52-3.9z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M26.25 21.19h1.6v4.61l7.12-4.61h14.07c1.4 0 2.53-1.13 2.53-2.53V5.11c0-1.4-1.13-2.53-2.53-2.53H26.25c-1.4 0-2.53 1.13-2.53 2.53v13.55c0 1.4 1.13 2.53 2.53 2.53zm19.14-11.4a2.1 2.1 0 1 1 0 4.2 2.1 2.1 0 0 1 0-4.2zm-7.74 0a2.1 2.1 0 1 1 0 4.2 2.1 2.1 0 0 1 0-4.2zm-7.75 0a2.1 2.1 0 1 1-2.1 2.1c.01-1.16.94-2.1 2.1-2.1z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M61.47 8.63h-7.89v10.02c0 2.5-2.03 4.53-4.53 4.53H38.32v1.52c0 1.4 1.13 2.53 2.53 2.53h11.89l7.12 4.61v-4.61h1.6c1.4 0 2.53-1.13 2.53-2.53V11.17a2.52 2.52 0 0 0-2.52-2.54z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <p class="px-4 py-1 text-4xl font-black text-center">
                        066 156 156
                    </p>
                </a>
            </div>

            <p class="mx-2 mt-2 mb-3 text-xs italic font-normal text-center normal-case sm:text-sm">
                @lang('messages.call_us')
            </p>
        </div>

        {{-- Adresa, email i društvene mreže --}}
        <div class="mx-auto flex flex-col space-y-2.5 normal-case md:hidden text-sm font-normal">

            <div class="flex space-x-1.5 pt-4">
                <a href="https://maps.app.goo.gl/BBjhYX59Q9sqWPKXA" target="_blank" class="flex items-center space-x-1">
                <svg class="mr-0.5 size-7 text-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(1.05,0,0,1.05,-1.6000000000000014,-1.5999883651733313)"><path d="M32 2A24.027 24.027 0 0 0 8 26c0 18.294 22.45 35.098 23.406 35.804a1 1 0 0 0 1.188 0C33.55 61.098 56 44.294 56 26A24.027 24.027 0 0 0 32 2zm0 42a18 18 0 1 1 18-18 18.02 18.02 0 0 1-18 18zm11-23a6.142 6.142 0 0 1-3 5.495V35a2 2 0 0 1-4 0v-8.505A6.142 6.142 0 0 1 33 21c0-3.309 2.243-6 5-6s5 2.691 5 6zm-12-5v8a3.003 3.003 0 0 1-3 3v8a2 2 0 0 1-4 0v-8a3.003 3.003 0 0 1-3-3v-8a1 1 0 0 1 2 0v5h2v-5a1 1 0 0 1 2 0v5h2v-5a1 1 0 0 1 2 0z" data-name="01-Restaurant" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                </svg>
                <p><span class="font-semibold uppercase">@lang('messages.address'):</span> Veljka Mlađenovića bb</p>
            </a>
            </div>

            <a href="{{ route('contact-us') }}">
                <div class="flex items-center space-x-1.5 pt-1">
                <svg class="mr-0.5 size-7 text-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9199999999999996,0,0,0.9199999999999996,20.480000000000103,20.480000000000103)">
                    <path d="M507.49 101.721 352.211 256 507.49 410.279c2.807-5.867 4.51-12.353 4.51-19.279V121c0-6.927-1.703-13.412-4.51-19.279zM467 76H45c-6.927 0-13.412 1.703-19.279 4.51l198.463 197.463c17.548 17.548 46.084 17.548 63.632 0L486.279 80.51C480.412 77.703 473.927 76 467 76zM4.51 101.721C1.703 107.588 0 114.073 0 121v270c0 6.927 1.703 13.413 4.51 19.279L159.789 256 4.51 101.721z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><path d="m331 277.211-21.973 21.973c-29.239 29.239-76.816 29.239-106.055 0L181 277.211 25.721 431.49C31.588 434.297 38.073 436 45 436h422c6.927 0 13.412-1.703 19.279-4.51L331 277.211z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                </svg>
                <p><span class="font-semibold uppercase">Email:</span> tradicijabl@gmail.com</p>
                </div>
            </a>

            <div class="flex justify-start pt-2 space-x-2">
                <svg class="mr-0.5 size-7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                    <path d="M422 311c-49.706 0-90 40.294-90 90s40.294 90 90 90 90-40.294 90-90-40.294-90-90-90zm15 90c0 8.284-6.716 15-15 15h-30c-8.284 0-15-6.716-15-15s6.716-15 15-15h15v-15c0-8.284 6.716-15 15-15s15 6.716 15 15zM274.435 54.327C271.257 35.414 254.816 21 235 21s-36.257 14.414-39.435 33.327C208.391 52.15 221.563 51 235 51s26.609 1.15 39.435 3.327zM0 346c0 24.853 20.147 45 45 45h257.42c1.846-22.268 9.796-42.828 22.172-60H15c-8.284 0-15 6.716-15 15zM422 281c6.101 0 12.095.461 17.954 1.344C437.994 170.988 346.815 81 235 81 121.963 81 30 172.963 30 286v15h325.746c18.999-12.629 41.78-20 66.254-20z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                </svg>
                <div>
                <p class="pb-2 font-semibold tracking-wider uppercase">@lang('messages.working-time'):</p>
                <p class="">
                    @lang('messages.working-time-footer')
                </p>
                </div>
            </div>

        </div>

        {{-- Multilanguage buttons --}}
        <div class="flex mx-auto py-7 md:hidden">
            <x-base.lang-switcher />
        </div>
    </div>

    <button
        class="absolute z-50 inline-flex items-center right-6 top-6 md:hidden md:transform md:transition md:duration-200"
        x-on:click="openSidebar = ! openSidebar" aria-label="Open sidebar button">
        <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="ml-10 text-white size-8"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <button
        class="absolute items-center hidden right-40 top-24 md:z-50 md:inline-flex md:transform md:transition md:duration-200 lg:right-64"
        x-on:click="openSidebar = ! openSidebar" aria-label="Open sidebar button">
        <svg x-show="openSidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="text-white size-10"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

</div>
