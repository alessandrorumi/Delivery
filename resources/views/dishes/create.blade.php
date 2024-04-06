<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aggiungi un Piatto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="w-full sm:w-3/4 lg:w-1/2 bg-white rounded-lg shadow-lg p-6">
                    <form action="{{ route('dishes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="mb-4">
                            <label for="name"
                                class="block text-gray-700 font-bold mb-2">{{ __('Nome del Piatto') }}</label>
                            <input type="text" required name="name" id="name" class="form-input">
                        </div>

                        <div class="mb-4">
                            <label for="description"
                                class="block text-gray-700 font-bold mb-2">{{ __('Descrizione') }}</label>
                            <input type="text" required name="description" id="description" class="form-input">
                        </div>

                        <div class="mb-4">
                            <label for="price"
                                class="block text-gray-700 font-bold mb-2">{{ __('Prezzo (€)') }}</label>
                            <input type="number" required min="0.10" name="price" id="price"
                                class="form-input">
                        </div>

                        <div class="mb-4">
                            <p class="text-gray-700 font-bold">{{ __('Seleziona la disponibilità del piatto') }}</p>
                            <label class="inline-flex items-center">
                                <input type="radio" id="visible" name="visible" value="1" class="form-radio">
                                <span class="ml-2">{{ __('Disponibile') }}</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" id="not-visible" name="visible" value="0" class="form-radio">
                                <span class="ml-2">{{ __('Non Disponibile') }}</span>
                            </label>
                        </div>

                        <input type="submit" value="{{ __('Aggiungi') }}"
                            class="inline-block px-4 py-2 bg-gray-800 text-xs text-white font-semibold uppercase rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
