<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Le tue Info') }}
                </div>
                <div class="mb-3">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->name }}</h2>
                </div>
                <div class="mb-3">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->address }}</h2>
                </div>
                <div class="mb-3">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->vat_id }}</h2>
                </div>
                <div>
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">{{ Auth::user()->type }}</h2>
                </div class="mb-3">
                <div>
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">Tipi di cucina:</h2>
                    <ul>
                        @foreach (Auth::user()->types as $type)
                            <li>{{ $type->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
