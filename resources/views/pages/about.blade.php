@section('title', __('pages.about-meta-title'))
@section('meta_description', __('pages.about-meta-desc'))
@section('meta_keywords', __('pages.about-meta-keywords'))

<x-guest-layout>
      <div class="w-full min-h-screen pb-0 mx-auto max-w-7xl">

        <div class="flex flex-col w-full mt-10 md:mt-14">

            <div class="px-2">
            <x-parts.breadcrumbs :pageTitle="__('pages.about')" />
            </div>

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.about-title')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
            </div>
        </div>

        <section class="flex flex-col w-full mt-10 lg:mt-16 lg:flex-row">
        <div class="flex flex-col items-center justify-center px-2 py-8 sm:px-4 w-fullm lg:w-1/2 md:px-10 md:py-16 lg:py-6">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium uppercase lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        @lang('messages.za-gurmane')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('pages.about-text-restoran')
            </p>

        </div>
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('images/gallery/tradicija-1200-restoran-3.webp') }}" alt="Restoran Tradicija">
        </div>
    </section>

    <section class="flex flex-col w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center w-full px-2 py-8 sm:px-4 lg:w-1/2 md:px-10 md:py-16 lg:py-10 lg:py-6 lg:order-2">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        TRADICIJA @lang('messages.restaurant')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('pages.about-text-food')
            </p>

        </div>

        <div class="w-full lg:order-1 lg:w-1/2">
            <img src="{{ asset('images/gallery/tradicija-1200-hrana-2.webp') }}" alt="Restoran Tradicija">
        </div>
    </section>

    <section class="flex flex-col w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center px-2 py-8 sm:px-4 w-fullm lg:w-1/2 md:px-10 md:py-16 lg:py-6">
            <div class="flex items-center mx-auto border-l-8 border-primary">
                <div class="min-w-0 pl-3">
                    <h2 class="overflow-hidden text-2xl font-medium lg:text-xl xl:text-2xl text-ellipsis whitespace-nowrap">
                        TRADICIJA @lang('messages.accommodation')
                    </h2>
                </div>
            </div>

            <p class="px-4 mt-6 lg:text-sm xl:text-base">
                @lang('pages.about-text-rooms')
            </p>

        </div>
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('images/gallery/tradicija-1200-sobe-2.webp') }}" alt="Restoran Tradicija">
        </div>
    </section>

    </div>
</x-guest-layout>
