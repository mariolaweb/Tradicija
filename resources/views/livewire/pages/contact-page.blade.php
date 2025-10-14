@section('title', __('pages.contact-meta-title'))
@section('meta_description', __('pages.contact-meta-desc'))
@section('meta_keywords', __('pages.contact-meta-keywords'))
<div>
    <div class="max-w-2xl px-4 py-12 mx-auto">

    <h1 class="mb-6 text-2xl font-bold">Kontakt forma</h1>

    {{-- Poruka ako je slanje uspješno --}}
            @if (Session::get('message'))
            <div class="flex flex-col justify-center flex-auto mt-4" x-data="{ show: true }"
                x-show.transition.opacity.out.duration.1500ms="show"
                x-transition:leave.opacity.duration.1500ms
                x-init="setTimeout(() => show = false, 3500)">
                <div class="flex items-center justify-center mb-1 text-gray-800 dark:text-yellow-500">
                    <svg class="w-12 h-12" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                        y="0px" width="20px" height="100%" viewBox="0 0 408.576 408.576"
                        style="width: 60px;">
                        <g>
                            <g>
                                <path
                                    d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288 S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6 c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344 c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"
                                    fill="currentColor"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flex flex-col items-center">
                    <p class="py-1 font-semibold text-center">
                        Poruka je uspješno poslana!
                    </p>
                </div>
            </div>
            @endif

    <form wire:submit.prevent="submitForm" class="space-y-5">

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Ime i prezime</label>
            <input type="text" id="name" wire:model="name"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
            @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email adresa</label>
            <input type="email" id="email" wire:model="email"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
            @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-4">
            {{-- <div class="w-1/3">
                <label for="country_code" class="block text-sm font-medium text-gray-700">Pozivni</label>
                <input type="text" id="country_code" wire:model="country_code"
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                @error('country_code') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div> --}}
            <div class="w-2/3">
                <label for="phone" class="block text-sm font-medium text-gray-700">Telefon</label>
                <input type="text" id="phone" wire:model="phone"
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Naslov poruke</label>
            <input type="text" id="subject" wire:model="subject"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
            @error('subject') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Poruka</label>
            <textarea id="message" rows="5" wire:model="message"
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"></textarea>
            @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center">
            <input type="checkbox" id="terms" wire:model="termsAccepted" class="mr-2">
            <label for="terms" class="text-sm text-gray-700">Prihvatam <a href="{{ route('terms') }}" target="_blank" class="text-blue-600 underline">uslove korištenja</a></label>
        </div>
        @error('termsAccepted') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror

        <div>
            <button type="submit"
                    class="px-6 py-2 font-semibold text-white transition bg-blue-700 rounded hover:bg-blue-800">
                Pošalji poruku
            </button>
        </div>
    </form>
</div>

</div>
