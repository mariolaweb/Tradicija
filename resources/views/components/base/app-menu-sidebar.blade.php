<aside x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-trangray-x-full opacity-30  ease-in"
    x-transition:enter-end="trangray-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300"
    x-transition:leave-start="trangray-x-0 opacity-100 ease-out"
    x-transition:leave-end="-trangray-x-full opacity-0 ease-in"
    class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-3/4 max-h-screen m-2 ml-0 overflow-hidden transition-all transform bg-gray-700 rounded-lg shadow-lg sm:w-1/2 md:w-60 lg:z-auto lg:static lg:shadow-none"
    :class="{'-translate-x-full lg:translate-x-0 lg:w-14 invisible lg:visible': !isSidebarOpen}" x-cloak>
    <!-- logo -->
    <div class="flex items-center justify-between flex-shrink-0 p-2 space-x-5" :class="{'lg:justify-center': !isSidebarOpen}">
        <a href="{{ route('dashboard') }}" wire:navigate >
            <div class="" :class="{'lg:hidden': isSidebarOpen, 'hidden': isSidebarOpen}">
                {{-- <img src="{{ asset('images/svg/info-color.svg') }}" alt="Banja Luka City Info" class="h-11"> --}}
                <p class="text-white">Logo</p>
            </div>
            <div class="items-center pt-2.5" :class="{'lg:hidden': !isSidebarOpen}">
                {{-- <img src="{{ asset('images/svg/blcity-info-footer-logo.svg') }}" alt="Banja Luka City Info" class="pl-2 h-9"> --}}
                <p class="text-white">{{ config('app.name')  }}</p>
            </div>

        </a>
        <button @click=" isSidebarOpen = false" class="justify-end p-2 mt-2.5 rounded-md lg:hidden">
            <svg class="size-9 md:size-8 text-gray-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

     {{-- Sidebar links --}}
    <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
        <ul class="p-2 overflow-hidden text-white">

            <li class="mt-2.5">
                <a href="{{ route('dashboard') }}" wire:navigate
                   class="{{ (Route::is('dashboard')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.8300000000000004,0,0,0.8300000000000004,43.5199999999999,43.518917899131594)">
                            <path d="M503.871 231.434 267.071 4.449c-6.184-5.933-15.958-5.933-22.141 0L7.895 231.668C2.879 236.684 0 243.594 0 250.656c0 14.7 11.969 26.668 26.668 26.668H64v202.664c0 17.664 14.336 32 32 32h90.668c8.832 0 16-7.168 16-16V357.324c0-2.926 2.387-5.336 5.332-5.336h96c2.922 0 5.332 2.41 5.332 5.336v138.664c0 8.832 7.168 16 16 16H416c17.664 0 32-14.336 32-32V277.324h37.332c14.7 0 26.668-11.969 26.668-26.668 0-7.062-2.879-13.972-8.129-19.222zm0 0" fill="currentColor" opacity="1" data-original="#000000" class=""/></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Dashboard</span>
                </a>
            </li>

            {{-- Linkovi koje vid samo članovi firme vlasnika sajta / za UserRole pristup. Za Spatie/Permissions ovo prilqgoditi --}}
            @if(auth()->user()?->isAdmin() || auth()->user()?->isVlasnik() || auth()->user()?->isZaposlenik())
            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-entities')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(1,0,0,1,0,0)">
                            <path d="M22.414 12.927a3.977 3.977 0 0 1 2.293-2.028A3.994 3.994 0 0 1 26 10.695V5c0-1.654-1.346-3-3-3H7C5.346 2 4 3.346 4 5v20c0 1.654 1.346 3 3 3h9.949l-.108-.314a4.969 4.969 0 0 1 .237-3.824zM8 8h12a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2zm0 4h11a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2zm7 10H8a1 1 0 1 1 0-2h7a1 1 0 1 1 0 2zm-7-4a1 1 0 1 1 0-2h9a1 1 0 1 1 0 2zm21.604-1.565-5.338 10.939a2.984 2.984 0 0 1-1.721 1.521l-1.891.65a1 1 0 0 1-1.27-.62l-.651-1.891a2.979 2.979 0 0 1 .142-2.293l5.338-10.937c.233-.48.641-.84 1.146-1.014a1.977 1.977 0 0 1 1.527.094l1.798.877c.48.234.84.642 1.014 1.147s.141 1.047-.094 1.527z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>

                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Entiteti</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('click-stats')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9100000000000003,0,0,0.9100000000000003,23.03911148071282,23.038241484761187)">
                            <path d="M451 257v215c0 22.5-14.1 40-32.1 40H375c-18 0-32.1-17.6-32.1-40V257c0-22.5 14.1-40 32.1-40h43.9c17.9 0 32.1 17.6 32.1 40zM451.7 130.9c-3 2.1-6.9 2.2-10.1.3l-30-18C362.2 195 292.5 272 157.9 272c-28.4 0-59.7-3.4-94.3-11-5-1.1-8.2-6-7.2-11.1 1-4.6 5.2-7.7 9.9-7.3 8.4.7 203.6 13.8 285.6-166.7L321.2 61c-4.6-2.2-6.6-7.8-4.4-12.4 1-2.1 2.7-3.7 4.8-4.6L423.5.7c4.7-2 10.2.2 12.2 4.9.3.7.5 1.4.6 2.1l19.3 113.9c.7 3.6-.9 7.3-3.9 9.3zM310.1 336v136c0 22.5-14.1 40-32.1 40h-44c-18 0-32.1-17.6-32.1-40V336c0-22.5 14.1-40 32.1-40h43.9c18.1-.1 32.2 17.5 32.2 40zM172.3 401.8V472c0 22.4-14.1 40-32.1 40h-44c-18 0-32.1-17.6-32.1-40v-70.2c0-22.5 14.1-40 32.1-40h43.9c18.1-.1 32.2 17.5 32.2 40z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Statistika</span>
                </a>
            </li>

            @if (auth()->user()?->isAdmin())
            <li class="mt-3">
                <a href="{{ route('admin-categories') }}" wire:navigate
                   class="{{ (Route::is('admin-categories')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9500000000000005,0,0,0.9500000000000005,12.79999999999987,12.8000251770018)">
                            <path fill-rule="evenodd" d="M50.497 354.815h37.667c10.739 0 19.497 8.759 19.497 19.497v37.667c0 10.739-8.758 19.498-19.497 19.498H50.497c-10.739 0-19.497-8.758-19.497-19.498v-37.667c0-10.739 8.758-19.497 19.497-19.497zM187.643 80.524h273.86c10.738 0 19.497 8.759 19.497 19.497v37.667c0 10.738-8.759 19.497-19.497 19.497h-273.86c-10.738 0-19.497-8.758-19.497-19.497v-37.667c0-10.739 8.759-19.497 19.497-19.497zm-137.146 0h37.667c10.739 0 19.497 8.759 19.497 19.497v37.667c0 10.739-8.758 19.497-19.497 19.497H50.497c-10.739 0-19.497-8.758-19.497-19.497v-37.667c0-10.739 8.758-19.497 19.497-19.497zm137.146 137.145h273.86c10.738 0 19.497 8.759 19.497 19.497v37.667c0 10.738-8.759 19.497-19.497 19.497h-273.86c-10.738 0-19.497-8.758-19.497-19.497v-37.667c0-10.739 8.759-19.497 19.497-19.497zm-137.146 0h37.667c10.739 0 19.497 8.759 19.497 19.497v37.667c0 10.739-8.758 19.497-19.497 19.497H50.497C39.758 294.33 31 285.572 31 274.833v-37.667c0-10.739 8.758-19.497 19.497-19.497zm137.146 137.146h273.86c10.738 0 19.497 8.759 19.497 19.497v37.667c0 10.738-8.759 19.497-19.497 19.497h-273.86c-10.738 0-19.497-8.758-19.497-19.497v-37.667c0-10.739 8.759-19.497 19.497-19.497z" fill="currentColor" opacity="1" data-original="#000000" class=""/></g>
                        </svg>

                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Kategorije</span>
                </a>
            </li>
            @endif

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-areas')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.8200000000000005,0,0,0.8200000000000005,46.07973083496077,46.10043092250811)"><clipPath id="a"><path d="M0 0h512v512H0z" fill="#000000" opacity="1" data-original="#000000" class=""></path></clipPath><g fill="#000" fill-rule="evenodd" clip-path="url(#a)" clip-rule="evenodd"><path d="M0 50.227c0-27.615 22.386-50 50-50h132.521c27.614 0 50 22.385 50 50v132.872c0 27.615-22.386 50-50 50H50c-27.614 0-50-22.385-50-50zM0 329.128c0-27.615 22.386-50.001 50-50.001h132.521c27.614 0 50 22.386 50 50V462c0 27.614-22.386 50-50 50H50c-27.614 0-50-22.386-50-50zM329.477.227c-27.615 0-50 22.385-50 50v132.872c0 27.615 22.385 50 50 50h132.52c27.615 0 50-22.385 50-50V50.227c0-27.615-22.385-50-50-50zM279.477 329.128c0-27.615 22.385-50.001 50-50.001h132.52c27.615 0 50 22.386 50 50V462c0 27.614-22.385 50-50 50h-132.52c-27.615 0-50-22.386-50-50z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g></g>
                        </svg>

                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Grupe/Oblast</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-contents')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 448 448" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.8800000000000007,0,0,0.8800000000000007,41.87999999999988,11.879999999999882)">
                            <path d="M394.667 213.333h-32V128c0-23.573-19.093-42.667-42.667-42.667h-85.333v-32C234.667 23.893 210.773 0 181.333 0S128 23.893 128 53.333v32H42.667C19.094 85.333.214 104.426.214 128l-.107 81.067H32c31.787 0 57.6 25.813 57.6 57.6s-25.813 57.6-57.6 57.6H.107L0 405.333C0 428.907 19.093 448 42.667 448h81.067v-32c0-31.787 25.813-57.6 57.6-57.6s57.6 25.813 57.6 57.6v32H320c23.573 0 42.667-19.093 42.667-42.667V320h32c29.44 0 53.333-23.893 53.333-53.333s-23.893-53.334-53.333-53.334z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Sadržaji</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-attributes')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g transform="matrix(1.0599999999999998,0,0,1.0599999999999998,-0.9600124883651766,-0.9599999284744296)">
                                <path d="m29.707 9.293-6-6A1 1 0 0 0 22 4v3H7a3 3 0 1 0 0 6h15v3a1 1 0 0 0 1.707.707l6-6a.999.999 0 0 0 0-1.414zM25 19H10v-3a1 1 0 0 0-1.707-.707l-6 6a1 1 0 0 0 0 1.414l6 6A1 1 0 0 0 10 28v-3h15a3 3 0 1 0 0-6z" fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                            </g>
                        </svg>

                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Atributi</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-tags')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 409.603 409.603" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g transform="matrix(0.8600000000000003,0,0,0.8600000000000003,28.67222766876202,28.67218360900867)">
                                <path d="M375.468.002h-141.87c-9.385 0-22.502 5.437-29.133 12.063L9.961 206.568c-13.281 13.266-13.281 35.016 0 48.266l144.824 144.819c13.251 13.266 34.98 13.266 48.251-.015L397.54 205.165c6.625-6.625 12.063-19.763 12.063-29.128v-141.9c0-18.77-15.366-34.135-34.135-34.135zm-68.271 136.535c-18.852 0-34.135-15.299-34.135-34.135 0-18.867 15.283-34.135 34.135-34.135 18.852 0 34.14 15.268 34.14 34.135.001 18.836-15.288 34.135-34.14 34.135z" fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>

                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Tagovi</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-partners')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(1.139999999999999,0,0,1.139999999999999,-2.2399999999999842,-2.2396872425079195)">
                            <path d="M26.32 9.317a.994.994 0 0 0-.551-.872l-9.32-4.683a1 1 0 0 0-.898 0l-9.32 4.683a.992.992 0 0 0-.551.872c-.043 2.683.395 13.5 9.983 16.758.214.073.459.073.673 0C25.925 22.817 26.363 12 26.32 9.317zm-6.005 4.676-1.498 1.46a.598.598 0 0 0-.172.53l.354 2.061a.599.599 0 0 1-.869.631l-1.851-.973a.597.597 0 0 0-.557 0l-1.851.973a.599.599 0 0 1-.869-.631l.354-2.061a.6.6 0 0 0-.172-.53l-1.498-1.46a.599.599 0 0 1 .332-1.021l2.07-.301a.598.598 0 0 0 .451-.328l.926-1.875a.599.599 0 0 1 1.074 0l.926 1.875a.6.6 0 0 0 .451.328l2.07.301a.599.599 0 0 1 .329 1.021zM25.955 19.615c-.967 1.998-2.292 3.829-4.038 5.322l3.402 3.402 1.27-3.4L30 23.66zM6.045 19.615 2 23.66l3.41 1.28 1.27 3.4 3.402-3.402c-1.745-1.493-3.07-3.324-4.037-5.323z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Partneri platforme</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('admin-posts')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M26 2H6C3.79 2 2 3.79 2 6v3.6h28V6c0-2.21-1.79-4-4-4zM8.667 7.15H6.961a.9.9 0 0 1 0-1.8h1.706a.9.9 0 0 1 0 1.8zm16.372 0H12.608a.9.9 0 0 1 0-1.8h12.431a.9.9 0 0 1 0 1.8zM2 11.4V26c0 2.21 1.79 4 4 4h20c2.21 0 4-1.79 4-4V11.4zm11.96 13.83c-.11.11-.25.18-.4.21l-2.28.38c-.5.09-.94-.35-.85-.85l.38-2.28c.03-.15.1-.29.21-.4l4.953-4.953 2.94 2.94zm7.01-7.02-.786.792-2.936-2.936.791-.786c.81-.82 2.12-.82 2.93 0 .821.81.821 2.12.001 2.93z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Blog Post</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('users')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 503.091 503.091" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                            <path d="M290.113 225.926c11.483 10.797 21.484 23.147 29.949 37.029 21.4-13.409 46.679-21.175 73.742-21.175 11.463 0 22.602 1.402 33.267 4.025-17.147-22.444-37.802-39.061-63.923-51.365-19.586 17.869-45.009 29.44-73.035 31.486zM254.517 381.066c0-38.878 16.018-74.08 41.793-99.372-14.52-25.166-34.336-44.125-60.078-57.466-21.211 14.602-46.886 23.164-74.527 23.164-27.561 0-53.168-8.512-74.343-23.037C33.73 253.36 0 313.724 0 383.426v106.928h307.547c-32.28-25.532-53.03-65.031-53.03-109.288zM293.465 115.632c0 28.223-8.923 54.399-24.091 75.862l.765 4.106c3.647.436 7.332.655 11.024.655 50.596 0 91.759-41.163 91.759-91.759 0-50.597-41.163-91.76-91.759-91.76a91.701 91.701 0 0 0-30.963 5.359c26.562 24.123 43.265 58.916 43.265 97.537z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><ellipse cx="161.706" cy="115.632" rx="101.76" ry="101.759" transform="rotate(-13.34 161.407 115.648)" fill="currentColor" opacity="1" data-original="#000000" class=""></ellipse><path d="M503.091 381.066c0-60.261-49.026-109.287-109.287-109.287s-109.287 49.026-109.287 109.287 49.026 109.287 109.287 109.287c60.261.001 109.287-49.025 109.287-109.287zm-172.942 15v-30h48.654v-48.654h30v48.654h48.654v30h-48.654v48.655h-30v-48.655z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Korisnici</span>
                </a>
            </li>

            <li class="mt-3">
                <a href="#" wire:navigate
                   class="{{ (Route::is('user-entities')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9400000000000005,0,0,0.9400000000000005,15.360029296874842,15.359999084472548)">
                            <path d="M469.333 106.667H362.667V85.333c0-23.531-19.135-42.667-42.667-42.667H192c-23.531 0-42.667 19.135-42.667 42.667v21.333H42.667C19.135 106.667 0 125.802 0 149.333v64C0 236.865 19.135 256 42.667 256h170.667v-10.667a10.66 10.66 0 0 1 10.667-10.667h64a10.66 10.66 0 0 1 10.667 10.667V256h170.667c23.53 0 42.665-19.135 42.665-42.667v-64c0-23.531-19.135-42.666-42.667-42.666zm-149.333 0H192V85.333h128v21.334zM506.083 267.51a10.68 10.68 0 0 0-11.188 1.052c-7.583 5.74-16.417 8.771-25.563 8.771H298.667v32A10.66 10.66 0 0 1 288 320h-64a10.66 10.66 0 0 1-10.667-10.667v-32H42.667c-9.146 0-17.979-3.031-25.563-8.771a10.593 10.593 0 0 0-11.188-1.052A10.666 10.666 0 0 0 0 277.063v149.604c0 23.531 19.135 42.667 42.667 42.667h426.667c23.531 0 42.667-19.135 42.667-42.667V277.063a10.668 10.668 0 0 0-5.918-9.553z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Moji objekti</span>
                </a>
            </li>



            <li class="mt-3">
                <a href="{{ route('admin-emails') }}" wire:navigate
                   class="{{ (Route::is('inbox-emails')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g transform="matrix(0.8900000000000007,0,0,0.8900000000000007,28.049999999999784,28.050012168884052)">
                                <path d="M0 246.724v239.33l149.29-140.88C18.324 258.804 87.74 304.576 0 246.724zM360.72 345.174 510 486.054v-239.33l-149.28 98.45zM263.26 409.444a14.992 14.992 0 0 1-16.52 0l-71.72-47.3-152.27 143.69h464.5l-152.26-143.69zM248.387 6.665 206.66 43.454h96.68L261.613 6.665a10 10 0 0 0-13.226 0zM53.83 246.284v-68.1c-34.605 30.506-25.145 22.166-44.19 38.96 0 0 22.249 14.676 44.19 29.14zM500.36 217.144c-18.72-16.507-7.886-6.956-44.19-38.96v68.1c21.908-14.442 44.19-29.14 44.19-29.14z" fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                                <path d="M255 378.954c49.145-32.405 113.848-75.077 171.17-112.88V83.454c0-5.523-4.477-10-10-10H93.83c-5.523 0-10 4.477-10 10v182.62c149.534 98.618 92.855 61.242 171.17 112.88zm-77.14-235.84h154.28c8.28 0 15 6.72 15 15 0 8.29-6.72 15-15 15H177.86c-8.28 0-15-6.71-15-15 0-8.28 6.72-15 15-15zm-15 90.75v-.1c0-7.7 5.82-14.06 13.3-14.9h157.68c7.48.84 13.3 7.2 13.3 14.9v.1c-.05 8.24-6.75 14.9-15 14.9H177.86c-8.25 0-14.95-6.66-15-14.9z" fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                            </g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Poruke korisnika</span>
                </a>
            </li>
        @endif

            <li class="mt-3">
                <a href="{{ route('profile') }}" wire:navigate
                   class="{{ (Route::is('profile')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                            <path d="M21.25 3H2.75A2.752 2.752 0 0 0 0 5.75v12.5A2.752 2.752 0 0 0 2.75 21h18.5A2.752 2.752 0 0 0 24 18.25V5.75A2.752 2.752 0 0 0 21.25 3zM7.5 7C8.878 7 10 8.122 10 9.5S8.878 12 7.5 12 5 10.878 5 9.5 6.122 7 7.5 7zm4.5 9.25a.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75v-.5A2.752 2.752 0 0 1 5.75 13h3.5A2.752 2.752 0 0 1 12 15.75zm8.25.75h-5.5a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 0 1.5zm0-4h-5.5a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 0 1.5zm0-4h-5.5a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 0 1.5z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Podešavanje</span>
                </a>
            </li>


            <li class="mt-3">
                {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                   class="{{ (Route::is('logout')) ? 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md bg-white text-gray-800' : 'flex items-center px-2.5 py-1.5 space-x-2 rounded-md hover:bg-white hover:text-gray-800' }}"
                   :class="{'justify-center': !isSidebarOpen}">
                    <span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 286.484 286.484" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.91,0,0,0.91,12.891825076908589,12.891780395507766)">
                            <path d="M143.242 0C64.258 0 .001 64.259.001 143.243c0 78.983 64.258 143.241 143.241 143.241 78.984 0 143.242-64.258 143.242-143.241C286.484 64.259 222.226 0 143.242 0zm-15.333 52.728c0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15v48.209c0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15V52.728zm15.333 185.039c-52.537 0-95.279-42.742-95.279-95.279 0-28.682 12.749-55.563 34.979-73.751 6.412-5.246 15.862-4.3 21.108 2.11 5.246 6.412 4.301 15.862-2.11 21.108-15.237 12.467-23.977 30.886-23.977 50.532 0 35.995 29.284 65.279 65.279 65.279 35.996 0 65.28-29.284 65.28-65.279 0-18.794-8.121-36.689-22.28-49.095-6.232-5.459-6.857-14.937-1.398-21.167 5.46-6.231 14.936-6.857 21.167-1.397 20.661 18.103 32.511 44.221 32.511 71.659 0 52.537-42.742 95.28-95.28 95.28z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Odjava</span>
                </a>
                </form> --}}
            </li>

        </ul>
    </nav>

</aside>
