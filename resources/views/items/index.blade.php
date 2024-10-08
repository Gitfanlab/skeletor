<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if ($items->count() >= 1)
                    @foreach ($items as $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
                @else
                    <p>Hello</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
