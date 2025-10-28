@section('title', __('pages.cuisine-meta-title'))
@section('meta_description', __('pages.cuisine-meta-desc'))
@section('meta_keywords', __('pages.cuisine-meta-keywords'))
@php
    $photos = [
        asset('images/gallery/tradicija-800-hrana-1.webp'),
        asset('images/gallery/tradicija-800-hrana-6.webp'),
        asset('images/gallery/tradicija-800-hrana-2.webp'),
        asset('images/gallery/tradicija-800-hrana-5.webp'),
        asset('images/gallery/tradicija-800-hrana-4.webp'),
        asset('images/gallery/tradicija-800-hrana-3.webp'),
        asset('images/gallery/tradicija-800-hrana-7.webp'),
        asset('images/gallery/tradicija-800-hrana-8.webp'),
    ];
@endphp
<x-guest-layout>
    <div class="min-h-screen px-2 pb-2 md:pb-14 lg:pb-20">

        <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">

            <x-parts.breadcrumbs :pageTitle="__('pages.cuisine')" />

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.cuisine-title')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
                <div class="w-full max-w-6xl px-4 pt-6 mx-auto sm:w-5/6 md:w-4/5 lg:w-3/4">
                    <p class="">@lang('pages.cuisine-description')</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center mx-auto lg:mt-16 max-w-7xl sm:pt-0">


            <section class="flex flex-col w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center w-full px-2 py-8 sm:px-4 lg:w-1/2 md:px-10 md:py-16 lg:py-6 lg:order-2">

            <div class="flex items-center mx-auto mt-8 border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium uppercase lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        @lang('pages.cuisine-text-title')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('pages.cuisine-text')
            </p>

            {{-- <a href="#" class="px-5 py-2 mt-4 font-medium text-white uppercase rounded lg:text-sm xl:text-base md:mt-8 lg:mt-4 xl:mt-8 bg-secondary hover:bg-primary">
                @lang('pages.rooms')
            </a> --}}
        </div>

        <div class="w-full lg:order-1 lg:w-1/2">
            <img src="{{ asset('images/gallery/tradicija-1200-hrana-4.webp') }}" alt="Restoran Tradicija - Banja Luka">
        </div>
    </section>


    {{-- Grid fotografie --}}
            <div class="columns-2 gap-0.5 sm:columns-3 lg:columns-4 mt-16">
                @foreach ($photos as $index => $photo)
                    <div class="mb-0.5 break-inside-avoid">
                        <img src="{{ $photo }}" alt="Photo {{ $index + 1 }}"
                            class="w-full h-auto cursor-pointer" x-on:click="openModal({{ $index }})">
                    </div>
                @endforeach
            </div>


        </div>
    </div>

</x-guest-layout>
