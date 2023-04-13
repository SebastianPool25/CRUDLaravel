<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear una nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Esta recibiendo el compact asignatura y lo esta renombrando como asignaturas, entonces el
                    cilo sera a lo que se esta recibiendo, en este caso asignatura y lo esta renombrando como Asignaturas -->
                    <form class="w-full max-w-lg mx-auto bg-gray-200 shadow-md rounded-lg p-6">
  <h2 class="text-2xl font-bold mb-6">Formulario de Notas</h2>
  <div class="mb-4">
    <label class="block text-black-400 text-sm font-bold mb-2" for="titulo">
      Título:
    </label>
    <input class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="titulo" type="text" placeholder="Ingresa el título">
  </div>
  <div class="mb-4">
    <label class="block text-black-400 text-sm font-bold mb-2" for="palabras_clave">
      Palabras Clave:
    </label>
    <input class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="palabras_clave" type="text" placeholder="Ingrese sus palabras clave separelas por coma ( , )">
  </div>
  <div class="mb-6">
    <label class="block text-black-400 text-sm font-bold mb-2" for="apuntes">
      Apuntes:
    </label>
    <textarea class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-red-500" id="apuntes" placeholder="Ingresa sus apuntes"></textarea>
  </div>
  <div class="mb-6">
    <label class="block text-black-400 text-sm font-bold mb-2" for="conclusion">
      Conclusión:
    </label>
    <textarea class="w-full bg-white border border-red-400 rounded-md py-2 px-4 text-gray-700 leading-tight resize-none h-32 focus:outline-none focus:bg-white focus:border-red-500" id="conclusion" placeholder="Ingresa la conclusión"></textarea>
  </div>
  <div class="flex justify-end">
    <button class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      Guardar
    </button>
  </div>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>