@section('title', __('pages.gallery-meta-title'))
@section('meta_description', __('pages.gallery-meta-desc'))
@section('meta_keywords', __('pages.gallery-meta-keywords'))

@php
    $photos = [
        asset('images/gallery/tradicija-600-restoran-1.webp'),
        asset('images/gallery/tradicija-1200-restoran-1.webp'),
        asset('images/gallery/tradicija-800-restoran-1.webp'),
        asset('images/gallery/tradicija-600-restoran-2.webp'),
        asset('images/gallery/tradicija-800-restoran-2.webp'),
        asset('images/gallery/tradicija-1200-restoran-2.webp'),
        asset('images/gallery/tradicija-600-restoran-3.webp'),
        asset('images/gallery/tradicija-800-restoran-3.webp'),
        asset('images/gallery/tradicija-1200-restoran-3.webp'),
        asset('images/gallery/tradicija-600-restoran-4.webp'),
        asset('images/gallery/tradicija-600-restoran-5.webp'),
        asset('images/gallery/tradicija-1200-restoran-4.webp'),
        asset('images/gallery/tradicija-600-restoran-6.webp'),
        asset('images/gallery/tradicija-800-restoran-4.webp'),
        asset('images/gallery/tradicija-1200-restoran-5.webp'),
        asset('images/gallery/tradicija-800-restoran-5.webp'),
        asset('images/gallery/tradicija-1200-restoran-6.webp'),
        asset('images/gallery/tradicija-600-restoran-7.webp'),
        asset('images/gallery/tradicija-1200-restoran-7.webp'),
        asset('images/gallery/tradicija-600-restoran-8.webp'),
        asset('images/gallery/tradicija-800-restoran-6.webp'),
        asset('images/gallery/tradicija-1200-restoran-8.webp'),
        asset('images/gallery/tradicija-600-restoran-9.webp'),
        asset('images/gallery/tradicija-800-restoran-7.webp'),
        asset('images/gallery/tradicija-1200-restoran-10.webp'),
        asset('images/gallery/tradicija-600-restoran-10.webp'),
        asset('images/gallery/tradicija-1200-restoran-9.webp'),
        asset('images/gallery/tradicija-600-restoran-11.webp'),
        asset('images/gallery/tradicija-800-restoran-8.webp'),
    ];
@endphp
<x-guest-layout>
    <div class="min-h-screen px-2 pb-2 md:pb-14 lg:pb-20" x-data="gallery()">

        <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">

            <x-parts.breadcrumbs :pageTitle="__('pages.gallery')" />

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.gallery-title')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
                <div class="w-full max-w-6xl px-2 pt-6 mx-auto sm:w-5/6 md:w-4/5 lg:w-3/4">
                    <p class="">@lang('pages.gallery-description')</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center mx-auto mt-10 lg:mt-16 max-w-7xl sm:pt-0">



            {{-- Grid fotografie --}}
            <div class="columns-2 gap-0.5 sm:columns-3 lg:columns-4">
                @foreach ($photos as $index => $photo)
                    <div class="mb-0.5 break-inside-avoid">
                        <img src="{{ $photo }}" alt="Photo {{ $index + 1 }}"
                            class="w-full h-auto cursor-pointer" x-on:click="openModal({{ $index }})">
                    </div>
                @endforeach
            </div>

            {{-- Modal --}}
            <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75" x-show="isOpen"
                x-on:click="closeModal">
                <div class="relative" x-on:click.stop>
                    <img :src="currentPhoto" alt="Current Photo" class="max-w-full max-h-screen">
                    <button
                        class="absolute left-0 top-1/2 inline-flex -translate-y-1/2 transform items-center rounded-r-lg bg-primary px-3 py-2.5 text-white"
                        x-on:click.stop="prevPhoto">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button
                        class="absolute right-0 top-1/2 inline-flex -translate-y-1/2 transform items-center rounded-l-lg bg-primary px-3 py-2.5 text-white"
                        x-on:click.stop="nextPhoto">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <button class="absolute right-0 top-0 mr-2.5 mt-2.5 rounded-md bg-primary p-1 text-white"
                        x-on:click="closeModal">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function gallery() {
            return {
                photos: @json($photos),
                currentPhotoIndex: 0,
                isOpen: false,
                get currentPhoto() {
                    return this.photos[this.currentPhotoIndex];
                },
                openModal(index) {
                    this.currentPhotoIndex = index;
                    this.isOpen = true;
                },
                closeModal() {
                    this.isOpen = false;
                },
                nextPhoto() {
                    if (this.currentPhotoIndex < this.photos.length - 1) {
                        this.currentPhotoIndex++;
                    } else {
                        this.currentPhotoIndex = 0;
                    }
                },
                prevPhoto() {
                    if (this.currentPhotoIndex > 0) {
                        this.currentPhotoIndex--;
                    } else {
                        this.currentPhotoIndex = this.photos.length - 1;
                    }
                }
            }
        }
    </script>
</x-guest-layout>
