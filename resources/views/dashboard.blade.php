<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (auth()->user()->can('create items') &&
                        auth()->user()->can('read items') &&
                        auth()->user()->can('update items') &&
                        auth()->user()->can('delete items'))
                    <div class="p-6 text-gray-900">
                        <p>Vous êtes connecté en tant qu'administrateur</p>
                    </div>
                @else
                    <div class="p-6 text-gray-900">
                        <p>Vous êtes connecté en tant qu'utilisateur</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
