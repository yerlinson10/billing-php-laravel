<section class="p-5">
    <h1 class="text-white text-2xl font-bold m-2">
        {{__('Crear nuevo categoria')}}
    </h1>
    <form method="post" wire:submit=save()>
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ __('Nombre') }}
            </label>
            <input type="text" id="name" wire:model='name' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" placeholder="{{ __('Nombre de la categoria') }}" required />
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{__('Crear nueva categoria')}}
        </button>
    </form>
</section>
