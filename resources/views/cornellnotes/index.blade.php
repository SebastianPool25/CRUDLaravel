<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Notas') }}
        </h2>
        <div class="container mx-auto mt-10">
        <a href="{{ route('cornellnotes.create') }}" class="bg-red-500 text-white font-bold py-3 px-6 rounded  items-center inline-block">
            Crear Nota
        </a>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Esta recibiendo el compact asignatura y lo esta renombrando como asignaturas, entonces el
                    cilo sera a lo que se esta recibiendo, en este caso asignatura y lo esta renombrando como Asignaturas -->
                    <table class="w-full border-collapse border border-gray-400">
                        <thead class="bg-red-200">
                            <tr>
                                <th class="py-2 px-4 border border-red-400">Titulo</th>
                                <th class="py-2 px-4 border border-red-400">Conclusión</th>
                                <th class="py-2 px-4 border border-red-400">Ver</th>
                            </tr>
                        </thead>
                        
                        <tbody class="divide-y divide-gray-700">
                    @foreach($Notitas as $nota)
                    <tr>
                        <td class="py-2 px-4 border border-red-400"> {{ $nota->titulo }} </td>
                        <td class="py-2 px-4 border border-red-400"> {{ $nota->Conclusion }} </td>
                        <td class="px-6 py-4 border border-red-400">
                            <center>
                                <a href="{{ route('cornellnotes.show', $nota->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </center>
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