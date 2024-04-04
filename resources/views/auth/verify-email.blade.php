<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Grazie per esserti iscritto! Prima di iniziare, potresti verificare il tuo indirizzo email facendo clic sul collegamento che ti abbiamo appena inviato via email? Se non hai ricevuto l\'e-mail, te ne invieremo volentieri un\'altra.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Un nuovo collegamento di verifica è stato inviato all\'indirizzo email fornito durante la registrazione.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Invia nuovamente l\'email di verifica') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Esci') }}
            </button>
        </form>
    </div>
</x-guest-layout>
