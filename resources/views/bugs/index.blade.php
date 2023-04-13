<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bugs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Esta recibiendo el compact asignatura y lo esta renombrando como asignaturas, entonces el
                    cilo sera a lo que se esta recibiendo, en este caso asignatura y lo esta renombrando como Asignaturas -->
                    <table class="w-full border-collapse border border-gray-400">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="py-2 px-4 border border-blue-400">Código</th>
                                <th class="py-2 px-4 border border-blue-400">Estado</th>
                                <th class="py-2 px-4 border border-blue-400">Plataforma</th>
                                <th class="py-2 px-4 border border-blue-400">Ver</th>
                            </tr>
                        </thead>
                        
                     
                    </table>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>