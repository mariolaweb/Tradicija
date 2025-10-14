<div class="mx-auto mt-6 flex w-full flex-col md:w-4/5">

    <div class="mt-2 flex items-center">
        <button wire:click.prevent="createBulkDeleteModal"
    class="rounded-lg bg-red-600 px-4 py-1.5 text-sm uppercase text-white shadow-md hover:bg-red-700 dark:hover:bg-red-600
    {{ $bulkDisabled ? 'opacity-50 cursor-not-allowed' : '' }}"
    :disabled="{{ $bulkDisabled ? 'true' : 'false' }}"

>
    Obriši poruke
</button>

    </div>
    <div class="mt-2 text-sm text-gray-500">
                                    Selected: {{ implode(', ', $selectedMessages) }}
                                </div>

    <div class="-my-2 mt-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="mb-8 overflow-hidden rounded-md border-b border-gray-200 shadow-md">
                {{-- Tabela sa spiskom korisnika --}}
                <table class="min-w-full divide-y divide-gray-200 overflow-x-scroll">
                    <thead class="bg-gray-700 text-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                <input type="checkbox" wire:model.live="selectAll"
                                    class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                            </th>

                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Ime
                            </th>

                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Poruka
                            </th>

                            <th class="col-span-3 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Akcija
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @php
                            $i = 1;
                        @endphp
                        @if ($contacts->count())
                            @foreach ($contacts as $contact)
                                <tr class="capitalize transition-all hover:bg-gray-100 hover:shadow-lg">
                                    <td class="whitespace-nowrap px-4 py-1">
                                        <input type="checkbox"
                                        wire:key="checkbox-{{ $contact->id }}"
                                         wire:model.live="selectedMessages"
                                         value="{{ $contact->id }}"
                                            class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                    </td>
                                    {{--
                        <td class="px-4 py-1 whitespace-nowrap">{{$contact->subject}}</td> --}}
                                    <td class="whitespace-nowrap px-4 py-1">{{ $contact->name }}</td>
                                    {{-- <td class="px-4 py-1 lowercase whitespace-nowrap">{{$contact->email}}</td> --}}
                                    <td class="whitespace-nowrap px-4 py-1">{!! Str::limit($contact->comment ?? '', 40) !!}</td>
                                    {{-- <td class="px-4 py-1 whitespace-nowrap">{{$contact->created_at}}</td> --}}
                                    <td class="flex space-x-3 whitespace-nowrap px-4 py-1">
                                        <button class="rounded border px-1 py-0.5 hover:bg-blue-500 hover:text-gray-50"
                                            {{-- wire:click="showMessage({{ $contact }})" :contacts="$contact" :key="$contact"> --}} wire:click="showMessage({{ $contact->id }})"
                                            class="text-blue-600 underline">
                                            <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="1" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="12" r="2" />
                                                <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                                <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                            </svg>
                                        </button>

                                        <button class="rounded border px-1 py-0.5 hover:bg-red-600 hover:text-gray-50"
                                            wire:click="createDeleteModal({{ $contact->id }})">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="capitalize transition-all hover:bg-gray-100 hover:shadow-lg">
                                <td class="px-4 py-2">Nema rezultata pretrage</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $contacts->links() }}

            </div>
        </div>
    </div>

<div class="text-xs text-gray-500 mt-2">
    <p>Selected count: {{ count($selectedMessages) }}</p>
    <p>Bulk Disabled: {{ $bulkDisabled ? 'yes' : 'no' }}</p>
    <p>Selected IDs: {{ implode(', ', $selectedMessages) }}</p>
</div>






    {{-- The show Message modal --}}
    <x-modal name="modal-show-message" :show="$modalShowMessage">
        <div class="p-6">
            <p class="rounded-md bg-gray-700 py-1.5 text-center uppercase text-gray-50">
                {{ __('Poruka od korisnika:') }}
                <span class="ml-1 capitalize italic">{{ $selectedContact['name'] ?? '' }}</span>
            </p>

            <div class="mt-4 text-sm text-gray-700">
                <p>You received an email from: <strong>{{ $selectedContact['name'] ?? '' }}</strong></p>
                <p><strong>Email:</strong> {{ $selectedContact['email'] ?? '' }}</p>
                <p><strong>Telefon:</strong> {{ $selectedContact['phone'] ?? '' }}</p>
                <p><strong>Poruka:</strong> {{ $selectedContact['message'] ?? '' }}</p>
            </div>

            <div class="mt-4 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close-modal', '{{ 'modal-show-message' }}')">
                    Zatvori
                </x-secondary-button>
            </div>
        </div>
    </x-modal>


    {{-- The Delete Modal --}}
    <x-modal name="modal-delete" :show="$modalDeleteVisible">
        <div class="p-6">
            <p class="rounded-md bg-red-600 py-1.5 text-center uppercase text-white">
                {{ __('Brisanje poruke korisnika:') }}
                <span class="ml-1 capitalize italic">{{ $selectedContact['name'] ?? '' }}</span>
            </p>

            <div class="mt-4 text-sm text-gray-700">
                {{ __('Jeste li sigurni da želite obrisati ovu poruku?') }}
            </div>

            <div class="mt-4 flex justify-end space-x-2">
                <button x-on:click="$dispatch('close-modal', '{{ 'modal-delete' }}')"
                    class="rounded bg-gray-200 px-4 py-2 text-gray-800">
                    {{ __('Odustani') }}
                </button>

                <button wire:click.prevent="deleteMessage" class="rounded bg-red-600 px-4 py-2 text-white">
                    {{ __('Obriši') }}
                </button>
            </div>
        </div>
    </x-modal>


    {{-- The Bulk Delete Modal --}}
    <x-modal name="modal-bulk-delete" :show="$modalBulkDeleteVisible">
        <div class="p-6">
            <p class="rounded-md bg-red-600 py-1.5 text-center uppercase text-white">
                {{ __('Brisanje označenih poruka') }}
            </p>

            <div class="mt-4 text-sm text-gray-700">
                {{ __('Da li ste sigurni da želite obrisati sve označene poruke?') }}
            </div>

            <div class="mt-4 flex justify-end space-x-2">
                <button x-on:click="$dispatch('close-modal', '{{ 'modal-bulk-delete' }}')"
                    class="rounded bg-gray-200 px-4 py-2 text-gray-800">
                    {{ __('Odustani') }}
                </button>

                <button wire:click.prevent="deleteSelected" class="rounded bg-red-600 px-4 py-2 text-white">
                    {{ __('Obriši poruke') }}
                </button>
            </div>
        </div>
    </x-modal>

</div>
