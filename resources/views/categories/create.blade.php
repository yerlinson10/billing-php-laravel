<x-app-layout>
    <x-slot name="styles">
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 mr-9">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <section class="p-5">
                    <h1 class="text-white text-3xl font-bold m-2">
                        {{__('Crear nuevo categoria')}}
                    </h1>
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Nombre') }}
                            </label>
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" placeholder="{{ __('Nombre de la categoria') }}" required />
                        </div>


                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{__('Crear nueva categoria')}}
                        </button>
                    </form>
                </section>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="image-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg dark:bg-gray-700 shadow-lg shadow-black border-black">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{__('Vista previa de la imagen')}}
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="image-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">{{__('Cerrar modal')}}</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img id="modal-image" src="#" alt="Vista previa de la imagen" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            function previewImage(event) {
                const input = event.target;
                const preview = document.getElementById('preview');
                const modalImage = document.getElementById('modal-image');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        modalImage.src = e.target.result;
                        preview.classList.remove('hidden');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                const modalToggle = document.querySelector('[data-modal-toggle="image-modal"]');
                const modal = document.getElementById('image-modal');
                const closeModalButtons = document.querySelectorAll('[data-modal-hide="image-modal"]');

                if (modalToggle) {
                    modalToggle.addEventListener('click', function () {
                        modal.classList.remove('hidden');
                    });
                }

                closeModalButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        modal.classList.add('hidden');
                    });
                });
            });
        </script>
    </x-slot>
</x-app-layout>
