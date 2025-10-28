@section('title', __('pages.contact-meta-title'))
@section('meta_description', __('pages.contact-meta-desc'))
@section('meta_keywords', __('pages.contact-meta-keywords'))
<div class="w-full">
<div class="w-full pb-10 mx-auto max-w-7xl">

    <div class="flex flex-col w-full mt-10 md:mt-14">

        <div class="px-2">
            <x-parts.breadcrumbs :pageTitle="__('pages.contact')" />
        </div>

        <div class="flex flex-col items-center justify-center mt-0">
            <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                alt="Restoran Tradicija - Banja Luka">
            <div class="py-1 mt-2 border-l-8 border-primary">
                <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                    @lang('pages.contact-title')
                </h1>
            </div>
            <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
        </div>
    </div>

    <div class="container px-2 mx-auto mt-8 lg:mt-12 lg:px-20">

        <div
            class="w-full p-8 mr-auto border rounded-xl bg-secondary md:px-12 lg:w-3/4 lg:rounded-2xl lg:pl-14 lg:pr-28 xl:w-2/3">

            {{-- Forma za kontakt --}}
            <form wire:submit='submitForm' action="" class="relative form lg:mx-6 lg:my-2">

                {{-- Forma, input polja --}}
                <div class="mt-3.5 block md:flex md:space-x-5">
                    <div class="relative mt-3.5 w-full md:w-1/2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="size-5 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="m421.184 384.96-81.728-20.437-6.955-27.819c21.867-21.653 36.843-51.392 41.28-81.899 12.117-3.413 21.504-13.803 23.125-26.837l5.333-42.667c1.131-9.003-1.643-18.112-7.616-24.939a32.11 32.11 0 0 0-12.8-8.896l1.963-40.171 7.979-8c12.011-12.779 21.973-34.688 1.152-66.475-16-24.425-43.178-36.82-80.81-36.82-14.848 0-49.024 0-80.853 21.376C140.373 23.275 128 65.493 128 106.667c0 9.579 2.325 31.147 3.861 44.16a31.815 31.815 0 0 0-14.336 9.344 32.03 32.03 0 0 0-7.765 25.152l5.333 42.667c1.749 13.909 12.309 24.853 25.664 27.456 4.416 29.333 18.624 58.112 39.232 79.403l-7.424 29.717-81.728 20.437C37.333 398.336 0 446.165 0 501.333 0 507.221 4.779 512 10.667 512h490.667c5.888 0 10.667-4.821 10.667-10.709a119.728 119.728 0 0 0-90.817-116.331z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <input type="text" wire:model="name"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm italic text-secondary focus:border-primary focus:ring-primary"
                            placeholder="*@lang('messages.first-surname')">
                    </div>
                    <div class="relative mt-3.5 w-full md:w-1/2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="size-5 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M414.41 24.123C398.333 8.042 378.963 0 356.315 0H82.228C59.58 0 40.21 8.042 24.126 24.123 8.045 40.207.003 59.576.003 82.225v274.084c0 22.647 8.042 42.018 24.123 58.102 16.084 16.084 35.454 24.126 58.102 24.126h274.084c22.648 0 42.018-8.042 58.095-24.126 16.084-16.084 24.126-35.454 24.126-58.102V82.225c-.001-22.649-8.043-42.021-24.123-58.102zm-55.251 308.751c-3.997 8.754-12.99 16.371-26.977 22.846-13.99 6.475-26.413 9.712-37.265 9.712-3.046 0-6.283-.235-9.708-.711-3.426-.479-6.324-.952-8.703-1.428-2.378-.476-5.523-1.331-9.421-2.57-3.905-1.234-6.715-2.189-8.422-2.854-1.718-.664-4.856-1.854-9.421-3.566-4.569-1.718-7.427-2.765-8.562-3.138-31.215-11.427-61.721-32.028-91.507-61.814-29.786-29.793-50.391-60.292-61.812-91.502-.378-1.143-1.425-3.999-3.14-8.565a952.564 952.564 0 0 0-3.571-9.419c-.662-1.713-1.615-4.521-2.853-8.42-1.237-3.903-2.091-7.041-2.568-9.423-.478-2.376-.95-5.277-1.427-8.704-.476-3.427-.713-6.667-.713-9.71 0-10.85 3.237-23.269 9.71-37.259 6.472-13.988 14.084-22.981 22.841-26.979 10.088-4.189 19.7-6.283 28.837-6.283 2.091 0 3.616.192 4.565.572.953.385 2.524 2.094 4.714 5.14 2.19 3.046 4.568 6.899 7.137 11.563 2.57 4.665 5.092 9.186 7.566 13.562a601.267 601.267 0 0 1 7.139 12.991c2.284 4.279 3.711 6.995 4.281 8.133.571.957 1.809 2.762 3.711 5.429 1.902 2.663 3.333 5.039 4.283 7.135.95 2.094 1.427 4.093 1.427 5.996 0 2.859-1.953 6.331-5.854 10.42-3.903 4.093-8.186 7.854-12.85 11.281s-8.945 7.092-12.847 10.994c-3.899 3.899-5.852 7.087-5.852 9.562 0 1.333.333 2.902 1 4.71.666 1.812 1.285 3.287 1.856 4.427.571 1.141 1.477 2.76 2.712 4.856 1.237 2.096 2.048 3.427 2.426 3.999 10.467 18.843 22.508 35.07 36.114 48.681 13.612 13.613 29.836 25.648 48.682 36.117.567.384 1.902 1.191 4.004 2.43 2.091 1.232 3.713 2.136 4.853 2.707 1.143.571 2.614 1.191 4.425 1.852 1.811.664 3.381.999 4.719.999 3.036 0 7.225-3.138 12.56-9.418a976.681 976.681 0 0 1 16.276-18.705c5.516-6.181 9.985-9.274 13.418-9.274 1.902 0 3.897.473 5.999 1.424 2.095.951 4.469 2.382 7.132 4.284 2.669 1.91 4.476 3.142 5.428 3.721l15.125 8.271c10.089 5.332 18.511 10.041 25.27 14.134s10.424 6.899 10.996 8.419c.379.951.564 2.478.564 4.572-.007 9.128-2.102 18.741-6.297 28.803z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <input type="number" wire:model="phone"
                            class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 pl-10 text-sm italic text-secondary focus:border-primary focus:ring-primary"
                            placeholder="@lang('messages.phone-number')">
                    </div>
                </div>
                <div class="mt-1 text-xs text-white">
                    @error('name')
                        *{{ $message }}
                    @enderror
                </div>

                <div class="relative mt-3.5">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="size-5 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z">
                            </path>
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z">
                            </path>
                        </svg>
                    </div>
                    <input type="email" id="email" wire:model='email'
                        class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 pl-10 text-sm italic text-secondary focus:border-primary focus:ring-primary"
                        placeholder="*@lang('messages.email-address')">
                </div>
                <div class="mt-1 text-xs text-white">
                    @error('email')
                        *{{ $message }}
                    @enderror
                </div>

                <div class="relative mt-3.5">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="size-5 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g fill="#000">
                                    <path
                                        d="m49.799 23.029 2.494-2.494a5.827 5.827 0 0 0 0-8.242l-7.586-7.586a5.827 5.827 0 0 0-8.242 0L33.97 7.201zM5 53h48v4H5zM7 34.172V49a1 1 0 0 0 1 1h14.828zM47.678 25.15 24.95 47.879 9.122 32.05 31.85 9.322z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <input type="text" id="subject" wire:model="subject"
                        class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 pl-10 text-sm italic text-secondary focus:border-primary focus:ring-primary"
                        placeholder="*@lang('messages.subject')">
                </div>
                <div class="mt-1 text-xs text-white">
                    @error('subject')
                        *{{ $message }}
                    @enderror
                </div>

                <textarea id="message" rows="3" wire:model="message"
                    class="bg-gray-white mt-3.5 block w-full rounded-lg border border-gray-300 p-2.5 text-sm italic text-secondary focus:border-primary focus:ring-primary"
                    placeholder="*@lang('messages.text-message')">
            </textarea>
                <div class="mt-1 text-xs text-white">
                    @error('message')
                        *{{ $message }}
                    @enderror
                </div>

                {{-- Button za submit forme --}}
                <div class="flex flex-col items-center">

                    <button type="submit"
                        class="w-full px-4 py-2 mt-6 text-base font-semibold text-center text-white uppercase rounded-lg bg-primary hover:bg-black focus:outline-none focus:ring-2 focus:ring-primary">
                        @lang('messages.send-message')
                    </button>

                    {{-- Loader --}}
                    <div class="py-5" wire:loading>
                        <div class="flex items-center justify-center mx-auto text-white w-fit animate-pulse">
                            <svg class="size-10" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M324.062 238.377 505.096 126.74a14.914 14.914 0 0 0-8.096-2.385H151.124c-2.985 0-5.759.882-8.095 2.385zM355.162 254.445l-23.226 14.323c-2.413 1.488-5.143 2.232-7.873 2.232s-5.46-.744-7.874-2.232l-23.226-14.323-146.339 132.511c1.421.446 2.932.689 4.5.689H497a14.97 14.97 0 0 0 4.5-.689zM512 355.992V157.728l-130.25 80.321zM136.124 157.728v198.264l130.25-117.943zM91.124 331H45c-8.284 0-15-6.716-15-15s6.716-15 15-15h46.124c8.284 0 15 6.716 15 15s-6.716 15-15 15zM91.124 271H15c-8.284 0-15-6.716-15-15s6.716-15 15-15h76.124c8.284 0 15 6.716 15 15s-6.716 15-15 15zM91.124 211H45c-8.284 0-15-6.716-15-15s6.716-15 15-15h46.124c8.284 0 15 6.716 15 15s-6.716 15-15 15z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            <p class="ml-2">@lang('messages.sending')</p>
                        </div>
                    </div>

                </div>

                {{-- Poruka ako je slanje uspješno --}}
                @if (Session::get('message'))
                    <div class="flex flex-col justify-center flex-auto mt-4" x-data="{ show: true }"
                        x-show.transition.opacity.out.duration.1500ms="show" x-transition:leave.opacity.duration.1500ms
                        x-init="setTimeout(() => show = false, 3500)">
                        <div class="flex items-center justify-center mb-1 text-gray-800 dark:text-yellow-500">
                            <svg class="w-12 h-12" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="20px" height="100%" viewBox="0 0 408.576 408.576" style="width: 60px;">
                                <g>
                                    <g>
                                        <path
                                            d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288 S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6 c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344 c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"
                                            fill="currentColor"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class="py-1 font-semibold text-center">
                                @lang('messages.successfully-sent-1')
                            </p>
                            <p class="text-center">
                                @lang('messages.successfully-sent-2')
                            </p>
                        </div>
                    </div>
                @endif

            </form>

        </div>

        {{-- Black dio sa tekstom --}}
        <div
            class="ml-auto mt-4 w-full rounded-xl bg-primary p-4 lg:-mr-10 lg:-mt-[380px] lg:w-2/5 lg:rounded-2xl xl:-mt-[370px] xl:mr-10 xl:p-6">

            <div class="flex items-center justify-between">
                <img src="{{ asset('images/svg/logo-tradicija-white.svg') }}" class="w-28 dark:hidden"
                    alt="@lang('messages.restoran-tradicija') - Banja Luka">



                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/profile.php?id=61578833284399" target="_blank"
                        aria-label="Facebook Restoran Tradicija">
                        <svg class="text-white size-10 hover:text-secondary md:size-8"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 176 176" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g data-name="Layer 2">
                                    <path
                                        d="M173 31.48A32.07 32.07 0 0 0 144.52 3a532.59 532.59 0 0 0-113 0A32.07 32.07 0 0 0 3 31.48a532.59 532.59 0 0 0 0 113A32.06 32.06 0 0 0 31.48 173a532.59 532.59 0 0 0 113 0A32.06 32.06 0 0 0 173 144.52a532.59 532.59 0 0 0 0-113.04zm-57.12 46.11-1.77 15.32a2.86 2.86 0 0 1-2.82 2.57h-16l-.08 45.45a2.05 2.05 0 0 1-2 2.07H77a2 2 0 0 1-2-2.08V95.48H63a2.87 2.87 0 0 1-2.84-2.9l-.06-15.33a2.88 2.88 0 0 1 2.84-2.92H75v-14.8C75 42.35 85.2 33 100.16 33h12.26a2.88 2.88 0 0 1 2.85 2.92v12.91a2.88 2.88 0 0 1-2.85 2.92h-7.52c-8.13 0-9.71 4-9.71 9.77v12.81h17.87a2.89 2.89 0 0 1 2.82 3.26z"
                                        data-name="01.facebook" fill="currentColor" opacity="1"
                                        data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/tradicijabl/" target="_blank"
                        aria-label="Instagram Restoran Tradicija">
                        <svg class="text-white size-10 hover:text-secondary md:size-8"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path
                                    d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0"
                                    fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                                <path
                                    d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0"
                                    fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                                <path
                                    d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0"
                                    fill="currentColor" opacity="1" data-original="#000000" class="">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@tradicijabl?_t=ZM-908TuicYU1o&_r=1" target="_blank"
                        aria-label="TikTok Restoran Tradicija">
                        <svg class="text-white size-10 hover:text-secondary md:size-8"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 176 176" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g data-name="Layer 2">
                                    <path
                                        d="M173 31.47A32 32 0 0 0 144.52 3a530 530 0 0 0-113 0A32 32 0 0 0 3 31.47a532.69 532.69 0 0 0 0 113.05A32 32 0 0 0 31.48 173a530 530 0 0 0 113 0A32 32 0 0 0 173 144.52a532.69 532.69 0 0 0 0-113.05zm-36.62 45.2h-8.58a34.72 34.72 0 0 1-18-5v36.23a35.1 35.1 0 1 1-35.1-35.09h8.6v17.11h-8.57a18 18 0 1 0 18 18V33h17.13v8.58a18 18 0 0 0 18 18h8.57z"
                                        data-name="14.tiktok" fill="currentColor" opacity="1"
                                        data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex flex-col text-sm tracking-tight text-white">

                <p class="mt-5">
                    @lang('messages.contact-page-text')
                </p>
                <p class="mt-2">
                    @lang('messages.contact-page-text-important')
                </p>

                <p class="inline-flex items-center mt-4 font-semibold">
                    <svg class="mr-2 size-8" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <circle cx="256" cy="256" r="256" style="" fill="#ffffff"
                                data-original="#2196f3" opacity="1"></circle>
                            <path
                                d="M384 308.928c-27.616 0-53.952-6.016-78.24-17.888a16.267 16.267 0 0 0-12.256-.736 16.138 16.138 0 0 0-9.184 8.16l-11.52 23.84c-34.56-19.84-63.232-48.544-83.104-83.104l23.872-11.52c3.84-1.856 6.752-5.152 8.16-9.184 1.376-4.032 1.12-8.448-.736-12.256-11.904-24.256-17.92-50.592-17.92-78.24 0-8.832-7.168-16-16-16H128c-8.832 0-16 7.168-16 16 0 149.984 122.016 272 272 272 8.832 0 16-7.168 16-16v-59.072c0-8.832-7.168-16-16-16z"
                                style="" fill="#b05f33" data-original="#fafafa" class=""
                                opacity="1"></path>
                        </g>
                    </svg>
                    +387 66 156 156
                </p>

                <p class="inline-flex items-center mt-3 font-semibold">
                    <svg class="mr-2 text-white size-8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path fill-rule="evenodd"
                                d="M256 0c141.386 0 256 114.614 256 256S397.386 512 256 512 0 397.389 0 256 114.617 0 256 0zM98.5 346.177c0 .113.013.219.015.328l107.589-83.82L98.5 167.348zm207.4-83.492 107.587 83.82c0-.109.017-.215.017-.328V167.348zm-82.663 15.177-103.586 80.7h272.704l-103.587-80.7-25.307 22.421a11.25 11.25 0 0 1-14.92 0l-25.307-22.421zM256 276.831l139.274-123.393H116.727z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    tradicijabl@gmail.com
                </p>
            </div>

        </div>

    </div>
</div>

    <div class="w-full lg:pt-20">
        <div class="w-full p-2 bg-white rounded-xl">
            <iframe class="mx-auto rounded-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.3062241848934!2d15.000630742196439!3d44.77456201706038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475e032d8f925107%3A0xb801a71c2dba93e2!2sTRADICIJA%20RESTORAN!5e0!3m2!1shr!2sba!4v1761557348073!5m2!1shr!2sba" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>



