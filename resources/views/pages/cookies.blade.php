@section('title', __('pages.cookies-meta-title'))
@section('meta_description', __('pages.cookies-meta-desc') . config('app.name'))
@section('meta_keywords', __('pages.cookies-meta-keywords'))

<x-guest-layout>

    <div class="min-h-screen px-2 pb-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">

            <x-parts.breadcrumbs parentUrl="{{ route('about') }}" :parentTitle="__('pages.about')" :pageTitle="__('pages.cookies')" />

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.cookies')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
            </div>
        </div>
            <div
                class="flex flex-col w-full px-3 py-6 mt-6 space-y-3 text-lg bg-white rounded-xl md:px-8 md:py-10 lg:px-10 lg:py-16">

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-1')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                        @lang('pages.cookies-paragraf-1')
                    </p>
                    <p class="py-3 leading-snug tracking-tight">
                        @lang('pages.cookies-paragraf-2')<br /><br />
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-2')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-3')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-3')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-4')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-4')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-5')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-5')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                      @lang('pages.cookies-paragraf-6')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-6')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-7')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-semibold leading-tighter">
                        @lang('pages.cookies-title-7') "{{ config('app.name') }}"?
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       {{-- Kada imamo html kod u prevodu, radimo to ovako --}}
                        {!! __('pages.cookies-paragraf-8', ['app_name' => '<strong>' . config('app.name') . '</strong>']) !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
