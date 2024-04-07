<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Conferma Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Nome dell\'attività')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- logo -->
        <div class="mt-4">
            <label for="logo"
                class="block font-medium text-sm text-gray-700">{{ __('Logo dell\'attività') }}</label>
            <input id="logo" class="block mt-1 w-full" type="file" accept="image/*" name="logo"
                value="{{ old('logo') }}" required autofocus autocomplete="logo" />
            @if ($errors->has('logo'))
                <p class="mt-2 text-sm text-red-600">{{ $errors->first('logo') }}</p>
            @endif
        </div>

        <!-- address -->
        <div class="mt-4">
            <label for="address" :value="__('Indirizzo')">
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- vat_id -->
        <div class="mt-4">
            <x-input-label for="vat_id" :value="__('Partita IVA')" />
            <x-text-input id="vat_id" class="block mt-1 w-full" type="text" name="vat_id" :value="old('vat_id')"
                required autofocus autocomplete="vat_id" />
            <x-input-error :messages="$errors->get('vat_id')" class="mt-2" />
        </div>

        <!-- type -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Tipologia di Cucina')" />

            {{-- <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')"
                required autofocus autocomplete="type" />
            <x-input-error :messages="$errors->get('type')" class="mt-2" /> --}}

            @foreach ($types as $type)
                <div class="col-md-6 text-start">
                    <input type="checkbox" name="type_id[]" autofocus value="{{ $type->id }}">
                    <label class="checkbox-inline"> {{ $type->name }}</label>
                </div>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            @endforeach
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Già registrato?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrati') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
