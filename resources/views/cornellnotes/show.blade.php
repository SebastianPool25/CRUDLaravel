<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto px-4">

                        <header class="mt-6 mb-10">
                            <h1 class="text-4xl font-bold text-center">Titulo: {{ $detalle_nota->titulo }}</h1>
                            <div>
                                @foreach ($notas as $nota)
                                <p class="text-lg">Semestre: {{ $nota->unidad }}</p>
                                <p class="text-lg">Tema: {{ $nota->tema }}</p>
                                @endforeach
                                <p class="text-lg">Fecha:
                                    {{$detalle_nota->created_at->formatLocalized('%A %d %B %Y')}} </p>
                            </div>
                        </header>

                        <main>
                            <div class="bg-white p-6 rounded-md shadow-md grid grid-cols-2 gap-2">
                                <div>
                                    <h2 class="text-2xl font-bold mb-4">Palabras clave</h2>
                                    <ul class="list-disc list-inside">
                                        <li>{{ $detalle_nota->keywords }}</li>
                                    </ul>
                                </div>

                                <div>
                                    <h2 class="text-2xl font-bold mb-4">Apuntes</h2>
                                    <p class="text-lg">
                                        {{ $detalle_nota->apuntes }}
                                    </p>
                                </div>
                                <div class="col-span-2">
                                    <h2 class="text-2xl font-bold mt-6 mb-4">Conclusión</h2>
                                    <p class="text-lg">
                                        {{ $detalle_nota->conclusion }}
                                    </p>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
                <div class="px-6 py-6">
                <form class="inline-block" action="{{ route('cornellnotes.destroy', $detalle_nota->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                    <button type="sumbiit" class="bg-red-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 inline-block align-middle mr-2">
                            <path
                                d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v2H3V5zm18 3v13c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V8h18z" />
                            <path d="M9 10v7m6-7v7" />
                        </svg>
                        Eliminar
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>