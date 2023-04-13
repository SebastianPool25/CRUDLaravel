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
                    <!-- Esta recibiendo el compact asignatura y lo esta renombrando como asignaturas, entonces el
                    cilo sera a lo que se esta recibiendo, en este caso asignatura y lo esta renombrando como Asignaturas -->

                    <body class="bg-blue-500">

                    <div class="container mx-auto px-4">

<!-- Encabezado -->
<header class="mt-6 mb-10">
    <h1 class="text-4xl font-bold text-center">Titulo: {{ $detalle_nota->titulo }}</h1>
    <div>
    @foreach ($notas as $nota)
        <p class="text-lg">Semestre: {{ $nota->unidad }}</p>
        <p class="text-lg">Tema: {{ $nota->tema }}</p>
    @endforeach
        <p class="text-lg">Fecha: {{$detalle_nota->created_at->formatLocalized('%A %d %B %Y')}} </p>
    </div>
</header>

<!-- Contenido -->
<main>

    <!-- Apuntes, Palabras clave y Conclusión -->
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
            </div>
        </div>
    </div>
</x-app-layout>