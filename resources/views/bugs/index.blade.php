<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bugs') }}
        </h2>
        <div class="container mx-auto mt-10">
            <a href="{{ route('bugs.create') }}"
                class="bg-blue-500 text-white font-bold py-3 px-6 rounded inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

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
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="py-2 px-4 border border-blue-400">Código</th>
                                <th class="py-2 px-4 border border-blue-400">Estado</th>
                                <th class="py-2 px-4 border border-blue-400">Plataforma</th>
                                <th class="py-2 px-4 border border-blue-400">Ver</th>
                                <th class="py-2 px-4 border border-blue-400">Editar</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($bugs as $bug)
                            <tr>
                                <td class="py-2 px-4 border border-blue-400"> {{ $bug->codigo }} </td>
                                <td class="py-2 px-4 border border-blue-400"> {{ $bug->estado }} </td>
                                <td class="py-2 px-4 border border-blue-400"> {{ $bug->plataforma }} </td>
                                <td class="px-6 py-4 border border-blue-400">
                                    <center>
                                        <a href="{{ route('bugs.show', $bug->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                            </svg>

                                        </a>
                                    </center>
                                </td>
                                <td class="px-6 py-4 border border-blue-400">
                                    <center>
                                        <a href="{{ route('bugs.edit', $bug->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>

                                        </a>
                                    </center>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                     
                    </table>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>