<x-app-layout>
    <x-slot name="styles">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">

                @livewire('categories.index')

            </div>
        </div>
    </div>

    <x-slot name="scripts">

    </x-slot>
</x-app-layout>
