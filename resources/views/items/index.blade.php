<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @can('create items')
                        <a href="{{ route('items.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter</a>
                    @endcan

                    <table class="mt-4 w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nom</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="border px-4 py-2">{{ $item->name }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('items.show', $item) }}"
                                            class="text-blue-500 hover:text-blue-700">Voir</a>
                                        @can('update items')
                                            <a href="{{ route('items.edit', $item) }}"
                                                class="text-green-500 hover:text-green-700 ml-2">Modifier</a>
                                        @endcan
                                        @can('delete items')
                                            <form action="{{ route('items.destroy', $item) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2"
                                                    onclick="return confirm('Are you sure?')">Supprimer</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
