<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edita tu nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('cornellnotes.update',$detalle_nota->id) }}" method="post" class="w-full max-w-lg mx-auto bg-red-200 shadow-md rounded-lg p-6">
                    @method("PATCH")
                    @csrf
                        <h2 class="text-2xl font-bold mb-6">Formulario de Notas</h2>
                        <div class="mb-4">
                            <label class=" text-black text-sm  font-bold mb-2" for="temas">
                                Temas
                            </label>
                            <input class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" name="tema" id="tema" rows="6" disabled value="{{$detalle_nota->topic->tema}}"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="titulo">
                                Título:
                            </label>
                            <input
                                class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500"
                                id="titulo" name="titulo" type="text" placeholder="Ingresa el título" value="{{ $detalle_nota->titulo}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="palabras_clave">
                                Palabras Clave:
                            </label>
                            <input
                                class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500"
                                id="keywords" name="keywords" type="text"
                                placeholder="Ingrese sus palabras clave separelas por coma ( , )" value="{{ $detalle_nota->keywords }}">
                        </div>
                        <div class="mb-6">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="apuntes">
                                Apuntes:
                            </label>
                            <textarea
                                class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-red-500"
                                id="apuntes" name="apuntes" placeholder="Ingresa sus apuntes" disabled>{{ $detalle_nota->apuntes }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label class="block text-black-400 text-sm font-bold mb-2" for="conclusion">
                                Conclusión:
                            </label>
                            <textarea
                                class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-red-500"
                                id="conclusion" name="conclusion" placeholder="Ingresa la conclusión">{{ $detalle_nota->conclusion }}</textarea>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
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