<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Le tue Informazioni') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">{{ Auth::user()->name }}</h3>
                        <p class="text-gray-600">{{ __('Nome') }}</p>
                    </div>

                    <div class="mb-6">
                        @if (file_exists(storage_path('app/public/' . Auth::user()->logo)))
                            <img src="{{ asset('storage/' . Auth::user()->logo) }}"
                                class="w-40 border-4 border-gray-500 h-auto" alt="User logo">
                        @else
                            <img src="{{ asset('img/logo/' . Auth::user()->logo) }}" alt="User logo"
                                class="w-40 border-4 border-gray-500 h-auto">
                        @endif
                    </div>

                    <div class="mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">{{ Auth::user()->address }}</h3>
                        <p class="text-gray-600">{{ __('Indirizzo') }}</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">{{ Auth::user()->vat_id }}</h3>
                        <p class="text-gray-600">{{ __('Partita IVA') }}</p>
                    </div>

                    <div class="mb-6">
                        @if (Auth::user()->dishes->count() > 0)
                            <a href="{{ route('dishes.create') }}"
                                class="inline-block mb-3 px-4 py-2 bg-gray-800 text-xs text-white font-semibold tracking-wider uppercase rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{ __('Aggiungi un altro piatto') }}</a>
                            <h3 class="font-semibold text-lg text-gray-800">{{ __('Piatti:') }}</h3>
                            <ul>
                                @foreach (Auth::user()->dishes as $dish)
                                    <li class="my-2">
                                        <span class="font-semibold">{{ $dish->name }}</span> - <span
                                            class="text-gray-600">{{ $dish->description }}</span> - <span
                                            class="font-semibold">{{ $dish->price }}€</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <h3 class="font-semibold text-lg text-gray-800">
                                {{ __('Non hai ancora aggiunto nessun piatto') }}</h3>
                            <a href="{{ route('dishes.create') }}"
                                class="inline-block mb-3 px-4 py-2 bg-gray-800 text-xs text-white font-semibold tracking-wider uppercase rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{ __('Aggiungi il primo!') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
