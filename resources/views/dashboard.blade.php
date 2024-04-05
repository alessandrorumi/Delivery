<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 flex">
            <div class="infos w-1/4 bg-white">
                <div class="pb-4 font-bold text-xl text-gray-800 leading-tight">
                    {{ __('Le tue Info') }}
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->name }}</h2>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->address }}</h2>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->vat_id }}</h2>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">Piatti:</h2>
                    <ul>
                        @foreach (Auth::user()->dishes as $dish)
                            <li class="mt-4 font-semibold text-lg text-gray-800 leading-tight">{{ $dish->name }}</li>
                            <li class="mt-1 font-semibold text-lg text-gray-800 leading-tight">{{ $dish->description }}
                            </li>
                            <li class="mt-1 font-semibold text-lg text-gray-800 leading-tight">{{ $dish->price }}€</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="add-dish">
                <h2 class="font-bold text-xl text-gray-800 leading-tight">
                    Aggiungi Un Piatto
                </h2>
            </div>
        </div>
    </div>
</x-app-layout>
