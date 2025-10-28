{{-- @foreach (config('translatable.locales') as $locale)
<a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => $locale])) }}"
    wire:navigate class="block rounded-lg px-1.5 py-1 leading-5 transition hover:bg-white hover:text-gray-800">
    <div class="flex items-center">
        <img src="{{ asset('images/svg/' . $locale . '.svg') }}" class="w-6 mr-1" alt="language">
        <p>{{ strtoupper($locale) }}</p>
    </div>
</a>
@endforeach --}}

@php
    $target = app()->isLocale('bs') ? 'en' : 'bs';
@endphp

<a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => $target])) }}"
   wire:navigate
   class="block px-2 py-1 leading-5 text-gray-800 transition bg-white rounded-lg hover:bg-secondary">
    <div class="flex items-center">
        <img src="{{ asset('images/svg/' . $target . '.svg') }}" class="w-6 mr-1" alt="language">
        <p>{{ strtoupper($target) }}</p>
    </div>
</a>
