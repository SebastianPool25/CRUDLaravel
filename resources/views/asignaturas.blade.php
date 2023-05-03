<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-green-900">
                    <table class="w-full border-collapse border border-green-400">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="py-2 px-4 border border-green-400">Nombre de la Asignatura</th>
                                <th class="py-2 px-4 border border-green-400">Ingeniería</th>
                                <th class="py-2 px-4 border border-green-400">Clave</th>
                                <th class="py-2 px-4 border border-green-400">Semestre</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($asignaturas as $asignatura)
                            <tr class="bg-white">
                                <td class="py-2 px-4 border border-green-400"> {{ $asignatura->nombre }} </td>
                                <td class="py-2 px-4 border border-green-400"> <center>{{ $asignatura->ing }}</center> </td>
                                <td class="py-2 px-4 border border-green-400"> <center>{{ $asignatura->clave }}</center> </td>
                                <td class="py-2 px-4 border border-green-400"> <center>{{ $asignatura->semestre }}</center> </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>