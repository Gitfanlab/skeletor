<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Détails de l'item") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                    <p class="mt-2">{{ $item->description }}</p>

                    <div class="mt-4">
                        <a href="{{ route('items.index') }}" class="text-blue-500 hover:text-blue-700">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
