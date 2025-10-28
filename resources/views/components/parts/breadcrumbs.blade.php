@props([
    'pageTitle' => '',
    'parentTitle' => null,
    'parentUrl' => null,
    ])
<nav class="flex justify-between w-full mx-auto mt-2 max-w-7xl">
    <ol class="inline-flex items-center text-secondary [&_.active-breadcrumb]:text-white [&_.active-breadcrumb]:font-semibold sm:mb-0">
        <li class="flex items-center h-full">
            <a href="{{ route('home') }}" wire:navigate class="font-semibold hover:text-primary">
                <span>@lang('pages.home')</span>
            </a>
        </li>

        @if ($parentTitle && $parentUrl)
        <p class="px-1">/</p>
        <li>
            <a href="{{ $parentUrl }}" wire:navigate class="font-semibold hover:text-primary focus:outline-none">
                <span>{{ $parentTitle }}</span>
            </a>
        </li>
        @endif
         <p class="px-1">/</p>
        <li>
            <p class="font-semibold cursor-default line-clamp-1 focus:outline-none text-primary">
                {{ $pageTitle }}
            </p>
        </li>
    </ol>
</nav>
