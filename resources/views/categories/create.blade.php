<x-app-layout>
    <x-slot name="styles">
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 mr-9">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                @livewire('categories.create')

            </div>
        </div>
    </div>


    <x-slot name="scripts">
    </x-slot>
</x-app-layout>
