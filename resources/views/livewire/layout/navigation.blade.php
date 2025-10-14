<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="top-0 flex-shrink-0 w-full mt-2 mr-2 text-white bg-gray-700 rounded-lg">
    <!-- Primary Navigation Menu -->
    {{-- <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8"> --}}
        <div class="flex items-center justify-between w-full p-1">

            <!-- Navbar left -->
        <div class="flex items-center px-3 space-x-1">
            <a href="{{ route('dashboard') }}" class="flex items-end lg:hidden">
                {{-- <img src="{{ asset('images/svg/info-color.svg') }}" alt="Banja Luka City Info"
                    class="w-14"> --}}
                    {{ config('app.name') }}
            </a>
            <!-- Toggle sidebar button -->
            <button @click=" isSidebarOpen = !isSidebarOpen" class="p-1 rounded-md focus:outline-none">
                <svg class="ml-3 text-white lg:ml-0 size-5" :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 511.901 511.901" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                    <path fill-rule="evenodd" d="M481.975 255.948a32.338 32.338 0 0 1-16.339 28.291L78.925 507.517c-15.622 9.022-35.599 3.672-44.622-11.95a32.663 32.663 0 0 1-4.378-16.34V32.67C29.923 14.629 44.546.002 62.587 0a32.663 32.663 0 0 1 16.338 4.377l386.711 223.281a32.34 32.34 0 0 1 16.339 28.29z" clip-rule="evenodd" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                </svg>
            </button>
        </div>


            {{-- <div class="flex"> --}}
                <!-- Logo -->
                {{-- <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        {{ config('app.name') }}
                    </a>
                </div> --}}

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('admin-emails')" :active="request()->routeIs('admin-emails')" wire:navigate>
                        {{ __('Inbox') }}
                    </x-nav-link>
                </div> --}}
            {{-- </div> --}}

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <div class="relative py-1 pr-5">
                <a href="#" class="relative">
                    <div class="absolute top-0 -right-2">
                        {{-- @livewire('notification-counter', ['type' => 'unverified']) --}}
                        </div>
                        {{-- <svg class="text-yellow-500 size-7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.8800000000000006,0,0,0.8800000000000006,30.719999999999857,25.719999999999857)">
                            <path d="M316 30h-28.154l-3.545-9.99C280.053 8.042 268.686 0 256 0c-12.686 0-24.053 8.042-28.301 20.01L224.154 30H196c-16.569 0-30 13.431-30 30v15c0 8.284 6.716 15 15 15h150c8.284 0 15-6.716 15-15V60c0-16.569-13.431-30-30-30z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><path d="M406 60h-30v15c0 24.814-20.186 45-45 45H181c-24.814 0-45-20.186-45-45V60h-30c-24.814 0-45 20.186-45 45v360c0 24.814 20.186 47 45 47h300c24.814 0 45-22.186 45-47V105c0-24.814-20.186-45-45-45zM236.605 385.605l-60 60c-2.93 2.93-6.768 4.395-10.605 4.395s-7.676-1.465-10.605-4.395l-30-30c-5.859-5.859-5.859-15.352 0-21.211s15.352-5.859 21.211 0L166 413.789l49.395-49.395c5.859-5.859 15.352-5.859 21.211 0s5.859 15.352-.001 21.211zm0-105-60 60c-2.93 2.93-6.768 4.395-10.605 4.395s-7.676-1.465-10.605-4.395l-30-30c-5.859-5.859-5.859-15.352 0-21.211s15.352-5.859 21.211 0L166 308.789l49.395-49.395c5.859-5.859 15.352-5.859 21.211 0 5.859 5.859 5.859 15.352-.001 21.211zm0-105-60 60c-2.93 2.93-6.768 4.395-10.605 4.395s-7.676-1.465-10.605-4.395l-30-30c-5.859-5.859-5.859-15.352 0-21.211s15.352-5.859 21.211 0L166 203.789l49.395-49.395c5.859-5.859 15.352-5.859 21.211 0s5.859 15.352-.001 21.211zM376 420h-90c-8.291 0-15-6.709-15-15s6.709-15 15-15h90c8.291 0 15 6.709 15 15s-6.709 15-15 15zm0-105h-90c-8.291 0-15-6.709-15-15s6.709-15 15-15h90c8.291 0 15 6.709 15 15s-6.709 15-15 15zm0-105h-90c-8.291 0-15-6.709-15-15s6.709-15 15-15h90c8.291 0 15 6.709 15 15s-6.709 15-15 15z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg> --}}
                        <svg class="text-yellow-400 size-7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9200000000000003,0,0,0.9200000000000003,20.483999023437576,70.47900054931634)">
                            <path d="M452.7 46.4H59.3C26.5 46.4 0 73 0 105.7v244.6c0 32.7 26.5 59.2 59.3 59.2h127.9l47 47c12.1 12.1 31.7 12.1 43.8 0l47-47h127.8c32.7 0 59.3-26.5 59.3-59.2V105.7c-.1-32.7-26.6-59.3-59.4-59.3zm-90.8 146.1L247.1 307.3c-12.2 12.1-31.8 12.1-44 0l-52.9-52.9c-12.1-12.2-12.1-31.8 0-44 12.2-12.1 31.8-12.1 44 0l30.9 30.9 92.8-92.8c12.2-12.1 31.8-12.1 44 0 12.1 12.1 12.2 31.8 0 44z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                </a>
             </div>

                <div class="relative py-1 pr-5">
                <a href="#" class="">
                    <div class="absolute right-3 top-1">
                    {{-- @livewire('notification-counter', ['type' => 'email']) --}}
                    </div>
                    <svg class="text-yellow-400 size-7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                        viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g transform="matrix(0.8900000000000007,0,0,0.8900000000000007,28.049999999999784,28.050012168884052)">
                            <path
                                d="M0 246.724v239.33l149.29-140.88C18.324 258.804 87.74 304.576 0 246.724zM360.72 345.174 510 486.054v-239.33l-149.28 98.45zM263.26 409.444a14.992 14.992 0 0 1-16.52 0l-71.72-47.3-152.27 143.69h464.5l-152.26-143.69zM248.387 6.665 206.66 43.454h96.68L261.613 6.665a10 10 0 0 0-13.226 0zM53.83 246.284v-68.1c-34.605 30.506-25.145 22.166-44.19 38.96 0 0 22.249 14.676 44.19 29.14zM500.36 217.144c-18.72-16.507-7.886-6.956-44.19-38.96v68.1c21.908-14.442 44.19-29.14 44.19-29.14z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M255 378.954c49.145-32.405 113.848-75.077 171.17-112.88V83.454c0-5.523-4.477-10-10-10H93.83c-5.523 0-10 4.477-10 10v182.62c149.534 98.618 92.855 61.242 171.17 112.88zm-77.14-235.84h154.28c8.28 0 15 6.72 15 15 0 8.29-6.72 15-15 15H177.86c-8.28 0-15-6.71-15-15 0-8.28 6.72-15 15-15zm-15 90.75v-.1c0-7.7 5.82-14.06 13.3-14.9h157.68c7.48.84 13.3 7.2 13.3 14.9v.1c-.05 8.24-6.75 14.9-15 14.9H177.86c-8.25 0-14.95-6.66-15-14.9z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
            </div>


                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-800 focus:outline-none">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <div class="flex-col p-2 space-y-2">
                        <a href="/" wire:navigate
                            class="flex items-center px-2 py-1 font-semibold text-white capitalize bg-gray-700 rounded-md">
                            Naslovna strana
                        </a>

                        <a href={{ route('profile') }} wire:navigate
                        class="flex items-center px-2 py-1 font-semibold text-white capitalize bg-gray-700 rounded-md">
                            {{ __('Moj Nalog') }}
                        </a>

                        <!-- Authentication -->
                        <button wire:click="logout" class="flex items-center w-full px-2 py-1 font-semibold text-white capitalize bg-gray-700 rounded-md">
                                {{ __('Odjava') }}
                        </button>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    {{-- </div> --}}

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
