<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="w-full sm:w-3/4 lg:w-1/2 bg-white rounded-lg shadow-lg">
                    <div class="p-6">
                        <div class="pb-4 font-bold text-xl text-gray-800 leading-tight">
                            {{ __('Le tue Info') }}
                        </div>

                        <div class="mb-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->name }}</h2>
                            <p class="text-gray-600">{{ __('Nome') }}</p>
                        </div>

                        <div class="mb-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->address }}
                            </h2>
                            <p class="text-gray-600">{{ __('Indirizzo') }}</p>
                        </div>

                        <div class="mb-4">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->vat_id }}
                            </h2>
                            <p class="text-gray-600">{{ __('Partita IVA') }}</p>
                        </div>

                        <div class="mb-4">
                            @if (Auth::user()->dishes->count() > 0)
                                <a class="inline-block mb-3 px-4 py-2 bg-gray-800 text-xs text-white font-semibold tracking-wider uppercase rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                    href="{{ route('dishes.create') }}">{{ __('Aggiungi un altro piatto') }}</a>
                                <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ __('Piatti:') }}</h2>
                                <ul>
                                    @foreach (Auth::user()->dishes as $dish)
                                        <li class="mt-4 font-semibold text-lg text-gray-800 leading-tight">
                                            {{ $dish->name }}</li>
                                        <li class="mt-1 text-gray-600">{{ $dish->description }}</li>
                                        <li class="mt-1 text-gray-600">{{ $dish->price }}€</li>
                                    @endforeach
                                </ul>
                            @else
                                <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                    {{ __('Non hai ancora aggiunto nessun piatto') }}</h2>
                                <a class="inline-block mb-3 px-4 py-2 bg-gray-800 text-xs text-white font-semibold tracking-wider uppercase rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                    href="{{ route('dishes.create') }}">{{ __('Aggiungi il primo!') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
