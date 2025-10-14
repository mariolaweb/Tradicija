@section('title', __('pages.cookies-meta-title'))
@section('meta_description', __('pages.cookies-meta-desc') . config('app.name'))
@section('meta_keywords', __('pages.cookies-meta-keywords'))

<x-guest-layout>

    <div class="max-w-6xl min-h-screen px-2 pt-10 pb-20 mx-auto lg:px-4">
        <div class="flex flex-col items-center pt-6 sm:pt-0">

            <h1 class="py-8 text-3xl font-extrabold tracking-tight sm:text-4xl md:text-5xl">
                @lang('pages.cookies')
            </h1>
            <div
                class="flex flex-col w-full px-3 py-6 mt-10 space-y-3 text-lg bg-white rounded-xl md:px-8 md:py-10 lg:px-10 lg:py-16">

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
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
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
                        @lang('pages.cookies-title-2')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-3')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
                        @lang('pages.cookies-title-3')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-4')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
                        @lang('pages.cookies-title-4')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-5')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
                        @lang('pages.cookies-title-5')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                      @lang('pages.cookies-paragraf-6')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
                        @lang('pages.cookies-title-6')
                    </h2>
                    <p class="py-3 leading-snug tracking-tight">
                       @lang('pages.cookies-paragraf-7')
                    </p>
                </div>

                <div class="sm:ml-4 md:ml-6">
                    <h2 class="py-2 text-2xl font-bold leading-tighter">
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
