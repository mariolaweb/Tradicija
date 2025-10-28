<!DOCTYPE html>
@php
    $pageMetaTitle = __('messages.page_meta_title');
    $pageDescription = __('messages.home_meta_description');
    $pageKeywords = __('messages.home_meta_keywords');
    $language = __('messages.language');
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $pageMetaTitle)</title>
    <meta name="description" content="@yield('meta_description', $pageDescription)">
    <meta name="keywords" content="@yield('meta_keywords', $pageKeywords)">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:title" content="@yield('meta_title', $pageMetaTitle)" />
    <meta property="og:description" content="@yield('meta_description', $pageDescription)" />

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="@yield('locale', $language)" />
    <meta property="og:locale:alternate" content="bs_BA" />
    <meta property="og:site_name" content="{{ env('SITE_URL', $pageMetaTitle) }}" />
    <meta property="og:image" content="@yield('og_image', 'https://tradicija.ba/images/base/og-image-restoran-tradicija.webp')" />
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    {{-- Favicons --}}
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="relative font-sans antialiased text-gray-900" x-data="{ 'openSidebar': false, 'atTop': true }" x-cloak>
    <x-base.topbar />
    <x-base.guest-navbar />
    <x-base.home-menu-sidebar />
    <div class="flex flex-col min-h-screen bg-gray-100 sm:pt-0">

        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
    <x-base.guest-footer />
    @livewireScripts
</body>

</html>
