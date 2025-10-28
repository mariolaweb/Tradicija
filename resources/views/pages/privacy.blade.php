@section('title', __('pages.privacy-meta-title'))
@section('meta_description', __('pages.privacy-meta-desc') . config('app.name'))
@section('meta_keywords', __('pages.privacy-meta-keywords'))

<x-guest-layout>

    <div class="min-h-screen px-2 pb-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">

            <x-parts.breadcrumbs parentUrl="{{ route('about') }}" :parentTitle="__('pages.about')" :pageTitle="__('pages.privacy')" />

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.privacy')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
            </div>
        </div>

        <div
            class="flex flex-col w-full max-w-6xl px-3 py-6 mx-auto mt-6 space-y-3 text-lg bg-white rounded-xl md:px-8 md:py-10 lg:px-10 lg:py-16">

            <div class="sm:ml-4 md:ml-6">
                <h2 class="py-2 text-2xl font-semibold leading-tighter">
                    @lang('pages.privacy-title-1')
                </h2>
                <p class="py-3 leading-snug tracking-tight">
                    <strong>{{ config('app.name') }}</strong>, @lang('pages.privacy-paragraf-1')
                </p>

                <p class="py-3 leading-snug tracking-tight">
                    {{-- Kada imamo html kod u prevodu, radimo to ovako --}}
                    {!! __('pages.privacy-paragraf-2', ['app_name' => '<strong>' . config('app.name') . '</strong>']) !!}
                </p>

                <p class="py-3 leading-snug tracking-tight">
                    @lang('pages.privacy-paragraf-3')
                </p>

            </div>

            <div class="sm:ml-4 md:ml-6">
                <h2 class="py-2 text-2xl font-semibold leading-tighter">
                    @lang('pages.privacy-title-2')
                </h2>
                <p class="py-3 leading-snug tracking-tight">
                    @lang('pages.privacy-paragraf-4')
                </p>
            </div>

            <div class="sm:ml-4 md:ml-6">
                <h2 class="py-2 text-2xl font-semibold leading-tighter">
                    @lang('pages.privacy-title-3')
                </h2>
                <p class="py-3 leading-snug tracking-tight">
                    @lang('pages.privacy-paragraf-5')
                </p>
                <p class="py-3 leading-snug tracking-tight">
                    @lang('pages.privacy-paragraf-6')
                </p>
                <p class="py-3 leading-snug tracking-tight">
                    @lang('pages.privacy-paragraf-7')
                </p>

                <p class="py-3 leading-snug tracking-tight">
                    {!! __('pages.privacy-paragraf-8', ['app_name' => '<strong>' . config('app.name') . '</strong>']) !!}
                </p>
            </div>

        </div>
    </div>
    </div>
</x-guest-layout>
