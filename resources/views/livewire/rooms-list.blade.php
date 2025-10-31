@section('title', __('pages.rooms-meta-title'))
@section('meta_description', __('pages.rooms-meta-desc'))
@section('meta_keywords', __('pages.rooms-meta-keywords'))
@php
    $photos = [
        asset('images/gallery/tradicija-1200-sobe-3.webp'),
        asset('images/gallery/tradicija-1200-sobe-1.webp'),
        asset('images/gallery/tradicija-1200-sobe-4.webp'),
        asset('images/gallery/tradicija-1200-sobe-5.webp'),
        asset('images/gallery/tradicija-1200-sobe-6.webp'),
        asset('images/gallery/tradicija-1200-sobe-7.webp'),
        asset('images/gallery/tradicija-1200-sobe-8.webp'),
        asset('images/gallery/tradicija-1200-sobe-9.webp'),
        asset('images/gallery/tradicija-1200-sobe-10.webp'),
        asset('images/gallery/tradicija-1200-sobe-11.webp'),
        asset('images/gallery/tradicija-1200-sobe-12.webp'),
        asset('images/gallery/tradicija-1200-sobe-2.webp'),
    ];
    $featuredImage = $photos[0] ?? null;
    $addedImages = array_slice($photos, 1);
@endphp

<div x-data="{
    modalOpen: false,
    currentIndex: 0,
    images: []
}" x-init="images.push({ src: '{{ asset($featuredImage) }}', alt: '{{ __('Restoran Tradicija - Banja Luka') }}' });
@foreach ($addedImages as $addedImage)
        images.push({ src: '{{ asset($addedImage) }}', alt: '{{ __('Restoran Tradicija - Banja Luka') }}'  }); @endforeach" class="w-full pb-10 mx-auto max-w-7xl md:px-2">
    <div class="relative pb-2 md:pb-14 lg:pb-20">

        <div class="flex flex-col w-full mt-10 md:mt-14">
            <div class="px-2 md:px-0">
                <x-parts.breadcrumbs :pageTitle="__('pages.rooms')" />
            </div>

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('messages.accommodation')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
            </div>
        </div>

        {{-- Swipe za xs i sm ekrane --}}
        <div x-data="{
            currentIndex: 0,
            updateIndex() {
                let container = this.$refs.imageContainer;
                let scrollPosition = container.scrollLeft;
                let imageWidth = container.scrollWidth / container.childElementCount;
                this.currentIndex = Math.round(scrollPosition / imageWidth);
            }
        }" class="relative w-full mt-4 overflow-hidden md:mt-12 md:hidden">
            <div x-ref="imageContainer" @scroll.debounce.100ms="updateIndex()"
                class="flex overflow-x-auto snap-x snap-mandatory">

                {{-- Featured Image --}}
                <div class="flex-shrink-0 w-full h-72 snap-center snap-always sm:h-80">
                    <img src="{{ asset($featuredImage) }}" class="object-cover w-full h-auto"
                        alt="Restoran Tradicija - Banja Luka">
                </div>

                {{-- Added Images --}}
                @foreach ($addedImages as $addedImage)
                    <div class="flex-shrink-0 w-full h-72 snap-center snap-always sm:h-80">
                        <img src="{{ asset($addedImage) }}" class="object-cover w-full h-auto"
                            alt="Restoran Tradicija - Banja Luka">
                    </div>
                @endforeach
            </div>

            {{-- Brojač slika --}}
            <span
                class="absolute bottom-6 right-0 z-20 m-2 rounded-md bg-primary px-2.5 pb-0.5 pt-1 font-semibold text-white"
                x-text="(currentIndex + 1) + ' / ' + images.length">
            </span>
        </div>

        {{-- Prikaz za md-lg ekrane (2 slike) --}}
        <div class="hidden w-full px-2 pt-4 space-x-1 h-96 md:flex md:px-0 xl:hidden">
            {{-- Featured Image --}}
            <div class="w-2/3 h-full overflow-hidden">
                <div class="h-full cursor-pointer" @click="modalOpen = true; currentIndex = 0">
                    <img :src="images[0].src" :alt="images[0].alt"
                        class="object-cover w-full h-full duration-300 hover:scale-105">
                </div>
            </div>

            {{-- 2 added images --}}
            <div class="flex-1 h-full">
                <div class="grid h-full grid-cols-1 gap-1">
                    @php
                        $imagesToShowMd = collect($addedImages)->take(2);
                        $missingMd = 2 - $imagesToShowMd->count();
                    @endphp

                    @foreach ($imagesToShowMd as $index => $addedImage)
                        <div class="relative h-full overflow-hidden cursor-pointer"
                            @click="modalOpen = true; currentIndex = {{ $index + 1 }}">
                            <img :src="images[{{ $index + 1 }}].src" :alt="images[{{ $index + 1 }}].alt"
                                class="object-cover w-full h-full duration-300 hover:scale-105">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Prikaz za xl+ ekrane (4 slike u 2 kolone) --}}
        <div class="hidden w-full pt-4 space-x-1 h-96 xl:flex">
            {{-- Featured Image --}}
            <div class="w-1/2 h-full overflow-hidden">
                <div class="h-full cursor-pointer" @click="modalOpen = true; currentIndex = 0">
                    <img :src="images[0].src" :alt="images[0].alt"
                        class="object-cover w-full h-full duration-300 hover:scale-105">
                </div>
            </div>

            {{-- 4 added images --}}
            <div class="flex-1 h-full">
                <div class="grid h-full grid-cols-2 gap-1">
                    @php
                        $imagesToShowXl = collect($addedImages)->take(4);
                        $missingXl = 4 - $imagesToShowXl->count();
                    @endphp

                    @foreach ($imagesToShowXl as $index => $addedImage)
                        <div class="relative h-full overflow-hidden cursor-pointer"
                            @click="modalOpen = true; currentIndex = {{ $index + 1 }}">
                            <img :src="images[{{ $index + 1 }}].src" :alt="images[{{ $index + 1 }}].alt"
                                class="object-cover w-full h-full duration-300 hover:scale-105">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Tekst i recepcija --}}
        <section class="flex flex-col w-full gap-8 mt-5 md:mt-10 lg:flex-row">

            <div class="flex flex-col items-center w-full px-2 sm:px-4 md:px-6 lg:w-1/2">

                <div class="flex items-center mx-auto border-l-8 border-primary">
                    <div class="min-w-0 pl-3">
                        <h2
                            class="overflow-hidden text-2xl font-medium uppercase text-ellipsis whitespace-nowrap lg:text-xl xl:text-2xl">
                            TRADICIJA HOTEL
                        </h2>
                    </div>
                </div>

                <p class="px-4 mt-5 lg:text-sm xl:text-base">
                    @lang('pages.rooms-text')
                </p>

            </div>

            <div class="flex flex-col items-center w-full px-2 sm:px-4 md:px-6 lg:w-1/2">

                <div class="flex items-center mx-auto border-l-8 border-primary">
                    <div class="min-w-0 pl-3">
                        <h2
                            class="overflow-hidden text-2xl font-medium uppercase text-ellipsis whitespace-nowrap lg:text-xl xl:text-2xl">
                            @lang('pages.reception-title')
                        </h2>
                    </div>
                </div>

                <p class="px-4 mt-5 lg:text-sm xl:text-base">
                    @lang('pages.reception-text')
                </p>

                {{-- Telefon --}}
                <div class="flex items-center justify-center w-full mt-5 space-x-4 md:mt-7">

                    <div class="group">
                        <a href="tel:+38766156666"
                            class="inline-flex items-center px-3 py-1 duration-300 bg-white rounded-lg shadow group-hover:bg-primary/20 lg:px-6">
                            <svg class="mr-1.5 size-8 text-primary sm:mr-3"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 480 480" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path
                                        d="M256 128c-8.832 0-16 7.168-16 16s7.168 16 16 16c35.296 0 64 28.704 64 64 0 8.832 7.168 16 16 16s16-7.168 16-16c0-52.928-43.072-96-96-96z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="M256 64c-8.832 0-16 7.168-16 16s7.168 16 16 16c70.592 0 128 57.408 128 128 0 8.832 7.168 16 16 16s16-7.168 16-16c0-88.224-71.776-160-160-160z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                    <path
                                        d="M256 0c-8.832 0-16 7.168-16 16s7.168 16 16 16c105.888 0 192 86.112 192 192 0 8.832 7.168 16 16 16s16-7.168 16-16C480 100.48 379.488 0 256 0zM432 352c-46.464 0-90.72-10.112-131.52-30.048-3.84-1.92-8.256-2.144-12.256-.736a16.138 16.138 0 0 0-9.184 8.16l-25.152 52.064C188.8 345.12 134.912 291.264 98.624 226.176l52.032-25.216c3.84-1.856 6.752-5.152 8.16-9.184 1.376-4 1.12-8.416-.768-12.256C138.112 138.72 128 94.464 128 48c0-8.832-7.168-16-16-16H16C7.168 32 0 39.168 0 48c0 238.208 193.792 432 432 432 8.832 0 16-7.168 16-16v-96c0-8.832-7.168-16-16-16z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="">
                                    </path>
                                </g>
                            </svg>
                            <p class="py-1.5 text-center text-xl font-medium">
                                066 156 666
                            </p>
                        </a>
                    </div>

                    <div class="flex px-4 py-1.5 duration-300 bg-white rounded-lg shadow hover:bg-primary/20">
                        <a href="https://api.whatsapp.com/send?phone=38766156666">
                            <img src="{{ asset('images/svg/icon-whatsapp.svg') }}" alt="WhatsApp" class="size-9">
                        </a>
                    </div>

                    <div class="flex px-4 py-1.5 duration-300 bg-white rounded-lg shadow hover:bg-primary/20">
                        <a href="viber://chat?number=%2b38766156666">
                            <img src="{{ asset('images/svg/icon-viber.svg') }}" alt="Viber" class="size-9">
                        </a>
                    </div>
                </div>

                {{-- Email --}}
                <div class="mt-5 flex items-center space-x-1.5">
                    <svg class="mr-1.5 size-7 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g
                            transform="matrix(0.9199999999999996,0,0,0.9199999999999996,20.480000000000103,20.480000000000103)">
                            <path
                                d="M507.49 101.721 352.211 256 507.49 410.279c2.807-5.867 4.51-12.353 4.51-19.279V121c0-6.927-1.703-13.412-4.51-19.279zM467 76H45c-6.927 0-13.412 1.703-19.279 4.51l198.463 197.463c17.548 17.548 46.084 17.548 63.632 0L486.279 80.51C480.412 77.703 473.927 76 467 76zM4.51 101.721C1.703 107.588 0 114.073 0 121v270c0 6.927 1.703 13.413 4.51 19.279L159.789 256 4.51 101.721z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="m331 277.211-21.973 21.973c-29.239 29.239-76.816 29.239-106.055 0L181 277.211 25.721 431.49C31.588 434.297 38.073 436 45 436h422c6.927 0 13.412-1.703 19.279-4.51L331 277.211z"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <p><span class="text-base font-semibold uppercase"></span> tradicijahotel@gmail.com</p>
                </div>
                {{-- Instagram --}}
                <a href="https://www.instagram.com/tradicijahotel/" target="_blank"
                    aria-label="Instagram Restoran Tradicija" class="inline-flex items-center mt-3">
                    <svg class="mr-3 size-6 text-primary hover:text-secondary" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                        x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0"
                                fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <span>@tradicijahotel</span>
                </a>

            </div>
        </section>


        {{-- Vrste soba --}}
        <section class="flex flex-col px-2 mt-20">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                    <div class="min-w-0 pl-3">
                        <h2
                            class="overflow-hidden text-2xl font-medium uppercase text-ellipsis whitespace-nowrap lg:text-xl xl:text-2xl">
                            @lang('pages.rooms')
                        </h2>
                    </div>
                </div>

                {{-- <p class="px-4 mt-5 lg:text-sm xl:text-base">
                    @lang('pages.rooms-text')
                </p> --}}

            <div class="flex flex-col w-full gap-4 mt-10 lg:flex-row">
                <div class="flex flex-col w-full p-2 mx-auto bg-white rounded-lg shadow sm:w-4/5 lg:w-1/2">

                    <div class="flex flex-col items-center w-full p-2 rounded-md bg-primary/20">
                        <div class="flex items-center mx-auto border-l-8 border-primary">
                            <div class="min-w-0 pl-3">
                                <h2
                                    class="overflow-hidden text-2xl font-medium uppercase text-ellipsis whitespace-nowrap lg:text-xl xl:text-2xl">
                                    Double Room - 22 <span class="normal-case">m</span><sup>2</sup>
                                </h2>
                            </div>
                        </div>
                        <p class="inline-flex items-center mt-2 text-xl">
                            @lang('pages.double-room')
                        <svg class="ml-3 size-8 sm:size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(1.1399999999999992,0,0,1.1399999999999992,-4.479999999999976,-4.479999732971159)">
                            <path d="M57 38.24H7a3.002 3.002 0 0 0-3 3v2.02a3.002 3.002 0 0 0 3 3h50a3.002 3.002 0 0 0 3-3v-2.02a3.002 3.002 0 0 0-3-3zM57.99 36.34v-2.79c0-2.94-2.7-5.34-6.02-5.34H12.02C8.7 28.21 6 30.61 6 33.55v2.79c.52-.134 51.67-.07 51.99 0zM48.85 48.26v1.53a2.006 2.006 0 0 0 2 2h2.3a2.006 2.006 0 0 0 2-2v-1.53zM8.85 48.26v1.53a2.006 2.006 0 0 0 2 2h2.3a2.006 2.006 0 0 0 2-2v-1.53zM15 26.21v-1.76a3.002 3.002 0 0 1 3-3h8a3.002 3.002 0 0 1 3 3v1.76h6v-1.76a3.002 3.002 0 0 1 3-3h8a3.002 3.002 0 0 1 3 3v1.76c.568-.004 3.66.02 4 .07v-9.07a5.008 5.008 0 0 0-5-5H16a5.008 5.008 0 0 0-5 5v9.07c.536-.091 4-.07 4-.07z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><path d="M18 23.45a.997.997 0 0 0-1 1v1.76h10v-1.76a.997.997 0 0 0-1-1zM38 23.45a.997.997 0 0 0-1 1v1.76h10v-1.76a.997.997 0 0 0-1-1z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g>
                        </svg>
                        </p>
                    </div>

                   <x-parts.room-details />
                </div>



                <div class="flex flex-col w-full p-2 mx-auto bg-white rounded-lg shadow sm:w-4/5 lg:w-1/2">

                    <div class="flex flex-col items-center w-full p-2 rounded-md bg-primary/20">
                        <div class="flex items-center mx-auto border-l-8 border-primary">
                            <div class="min-w-0 pl-3">
                                <h2
                                    class="overflow-hidden text-2xl font-medium uppercase text-ellipsis whitespace-nowrap lg:text-xl xl:text-2xl">
                                    Twin Room - 20 <span class="normal-case">m</span><sup>2</sup>
                                </h2>
                            </div>
                        </div>
                        <p class="inline-flex items-center mt-2 text-xl">
                            @lang('pages.twin-room')
                            <svg class="ml-2.5 size-8 sm:size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.840000000000001,0,0,0.840000000000001,3.839999999999961,3.9199999999999733)"><g data-name="Single Bed">
                                <path d="M42 42h-6v1a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zM12 42H6v1a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zM33 19v1H15v-1a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><path d="M34 4H14a7.008 7.008 0 0 0-7 7v9.94a8.988 8.988 0 0 1 4-.94h2v-1a6 6 0 0 1 6-6h10a6 6 0 0 1 6 6v1h2a8.988 8.988 0 0 1 4 .94V11a7.008 7.008 0 0 0-7-7zM4 34v4a2 2 0 0 0 2 2h36a2 2 0 0 0 2-2v-4zM44 32v-3a7 7 0 0 0-7-7H11a7 7 0 0 0-7 7v3z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g></g>
                            </svg>
                            <svg class="size-8 sm:size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.840000000000001,0,0,0.840000000000001,-1.1600000000000392,3.9199999999999733)"><g data-name="Single Bed">
                                <path d="M42 42h-6v1a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zM12 42H6v1a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zM33 19v1H15v-1a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" fill="currentColor" opacity="1" data-original="#000000" class=""></path><path d="M34 4H14a7.008 7.008 0 0 0-7 7v9.94a8.988 8.988 0 0 1 4-.94h2v-1a6 6 0 0 1 6-6h10a6 6 0 0 1 6 6v1h2a8.988 8.988 0 0 1 4 .94V11a7.008 7.008 0 0 0-7-7zM4 34v4a2 2 0 0 0 2 2h36a2 2 0 0 0 2-2v-4zM44 32v-3a7 7 0 0 0-7-7H11a7 7 0 0 0-7 7v3z" fill="currentColor" opacity="1" data-original="#000000" class=""></path></g></g>
                            </svg>
                        </p>
                    </div>

                    <x-parts.room-details />
                </div>
            </div>
        </section>




        {{-- Modal za md: i veće --}}
        <div class="hidden md:flex">
            <div x-show="modalOpen" @keydown.escape.window="modalOpen = false"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90">
                <div class="relative w-full max-w-2xl lg:max-w-4xl xl:max-w-5xl" @click.away="modalOpen = false">
                    {{-- Button za uklanjanje slike i modala --}}
                    <button @click="modalOpen = false"
                        class="absolute right-1.5 top-1.5 z-20 m-2 rounded-md bg-primary p-1.5 text-white focus:outline-none">
                        <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>

                    {{-- Icona foto aparata i brojač fotografija --}}
                    <span class="absolute top-0 left-0 z-20 px-2 py-1 m-4 text-lg font-bold rounded-md bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-white">
                            <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                            <path fill-rule="evenodd"
                                d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span
                        class="absolute top-0 z-20 px-2 m-4 text-lg font-bold text-white rounded-md left-10 bg-primary"
                        x-text="currentIndex + 1 + ' / ' + images.length">
                    </span>

                    {{-- Prikaz fotografije u modalu --}}
                    <div class="relative overflow-hidden">
                        <img :src="images[currentIndex].src" :alt="images[currentIndex].alt"
                            class="object-cover w-full h-full">
                    </div>

                    {{-- Buttons za navigaciju naprijed i nazad --}}
                    <div class="absolute inset-0 flex items-center justify-between">
                        <button class="px-3 py-5 ml-2 text-white rounded-lg bg-primary focus:outline-none"
                            :class="{ 'invisible': currentIndex === 0 }"
                            @click="currentIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                        </button>
                        <button class="px-3 py-5 mr-2 text-white rounded-lg bg-primary focus:outline-none"
                            x-show="currentIndex !== images.length - 1"
                            @click="currentIndex = currentIndex === images.length - 1 ? 0 : currentIndex + 1">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>

                    {{-- Thumbnails za mali slajder ispod glavne fotografije --}}
                    <div class="flex mt-3 overflow-x-auto">
                        <div class="flex items-center justify-center">
                            <template x-for="(image, index) in images" :key="index">
                                <div class="flex items-center justify-center flex-shrink-0 w-24 ml-1 rounded-lg"
                                    x-show="currentIndex !== index">
                                    <img :src="image.src" :alt="image.alt" @click="currentIndex = index"
                                        class="object-cover duration-300 transform cursor-pointer">
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
