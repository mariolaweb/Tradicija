@section('title', __('pages.faq-meta-title'))
@section('meta_description', __('pages.faq-meta-desc'))
@section('meta_keywords', __('pages.faq-meta-keywords'))

<x-guest-layout>
     <div class="flex flex-col items-center w-full min-h-screen">
        <div class="relative flex items-center justify-center w-full h-48 bg-black">
            {{-- <div class="absolute inset-0 z-10 bg-black/50"></div>
            <img src="{{ asset('images/base/page-header-1.webp') }}" alt=""> --}}
            <img src="{{ asset('images/svg/tradicija-logo-white.svg') }}" class="h-24" alt="">
        </div>
        <h1 class="text-2xl font-bold"> Najčešća pitanja Page</h1>
    </div>
</x-guest-layout>
