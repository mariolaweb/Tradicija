@section('title', __('pages.faq-meta-title'))
@section('meta_description', __('pages.faq-meta-desc'))
@section('meta_keywords', __('pages.faq-meta-keywords'))

<x-guest-layout>
    <div class="min-h-screen px-2">
        <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">

            <x-parts.breadcrumbs :pageTitle="__('pages.faq')" />

            <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
                <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                    alt="Restoran Tradicija - Banja Luka">
                <div class="py-1 mt-2 border-l-8 border-primary">
                    <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                        @lang('pages.faq-title')
                    </h1>
                </div>
                <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
                <div class="w-full max-w-6xl px-2 pt-6 mx-auto sm:w-5/6 md:w-4/5 lg:w-3/4">
                    <p class="">@lang('pages.faq-description')</p>
                </div>
            </div>
        </div>

        <section class="flex flex-col w-full mx-auto mt-10 lg:mt-16 lg:flex-row max-w-7xl">
            <div x-data="{ selected: null }" class="w-full lg:w-1/2 xl:w-7/12 lg:order-2 md:p-4 lg:p6">
                <ul class="shadow-box">

                    {{-- Accordion Item 1  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 1 ? selected = 1 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                   @lang('pages.question-1')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container1"
                            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-1')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 2  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 2 ? selected = 2 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-2')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container2"
                            x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-2')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 3  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 3 ? selected = 3 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-3')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container3"
                            x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-3')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 4  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 4 ? selected = 4 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-4')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container4"
                            x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-4')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 5  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 5 ? selected = 5 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-5')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container5"
                            x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-5')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 6  --}}
                    <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 6 ? selected = 6 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-6')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container6"
                            x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                     @lang('pages.answer-6')
                                </p>
                            </div>
                        </div>
                    </li>

                    {{-- Accordion Item 7  --}}
                    <li class="relative">
                        <button type="button" class="w-full px-2 py-4 text-left md:px-4 lg:px-8 xl:py-5"
                            @click="selected !== 7 ? selected = 7 : selected = null">
                            <div class="flex items-center justify-between py-1 border-l-8 border-primary">
                                <span class="pl-3 text-lg font-medium">
                                    @lang('pages.question-7')
                                </span>
                                <span class="ico-plus"></span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                            x-ref="container7"
                            x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
                            <div class="px-6 py-2">
                                <p class="text-gray-700">
                                   @lang('pages.answer-7')
                                </p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="w-full lg:order-1 lg:w-1/2 xl:w-5/12">
                <img src="{{ asset('images/gallery/tradicija-1200-restoran-4.webp') }}" class="lg:hidden" alt="Restoran Tradicija - Banja Luka">
                <img src="{{ asset('images/gallery/tradicija-600-restoran-9.webp') }}" class="hidden lg:flex" alt="Restoran Tradicija - Banja Luka">
            </div>
        </section>

    </div>
</x-guest-layout>
