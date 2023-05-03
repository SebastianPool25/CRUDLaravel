<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un bug') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('bugs.store') }}" method="post"
                        class="w-full max-w-lg mx-auto bg-blue-100 shadow-md rounded-lg p-6">
                        @csrf
                        <h2 class="text-2xl font-bold mb-6">Formulario de bugs</h2>
                        <div class="mb-4">
                            <label class=" text-black text-sm  font-bold mb-2" for="temas">
                                Asignatura
                            </label>
                            <select
                                class="block appearance-none w-full bg-white border border-blue-400 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
                                name="asignatura" id="asignatura">
                                <option value="">Seleccione una asignatura</option>
                                @foreach($asignatura as $asig)
                                <option value="{{ $asig->id }}"> {{ $asig->nombre }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="codigo">
                                Código de error:
                            </label>
                            <input
                                class="w-full bg-white border border-blue-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="codigo" name="codigo" type="text" placeholder="Ingresa el código de error">
                        </div>
                        <div class="mb-4">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="plataforma">
                                Plataforma:
                            </label>
                            <input
                                class="w-full bg-white border border-blue-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="plataforma" name="plataforma" type="text"
                                placeholder="Ingrese la plataforma de error">
                        </div>
                        <div class="mb-6">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="description">
                                Descripción:
                            </label>
                            <textarea
                                class="w-full bg-white border border-blue-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-blue-500"
                                id="description" name="description"
                                placeholder="Ingresa la descripción del error"></textarea>
                        </div>

                        <div class="mb-6">
                        <label class="block text-black-400 text-sm font-bold mb-2" for="estado">
                                Estado del error:
                            </label>
                        <select
                            class="block appearance-none w-full bg-white border border-blue-400 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white"
                            name="estado" id="estado">
                            <option value="">Seleccione el estado del error</option>
                            <option value="1">Corregido</option>
                            <option value="2">No corregido</option>
                            <option value="3">En proceso</option>
                            <option value="4">No oficial</option>
                            <option value="5">Error de la versión</option>
                        </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="conclusion">
                                Solución:
                            </label>
                            <textarea
                                class="w-full bg-white border border-blue-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-blue-500"
                                id="solution" name="solution" placeholder="Ingresa la solución"></textarea>
                        </div>
                        
                        <div class="flex justify-end">
                            <button
                                class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Guardar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>