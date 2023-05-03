<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 403</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    </head>
    <body>
        <div class="fixed inset-0 flex items-center justify-center h-screen">
            <div class="bg-yellow-200 p-8 rounded shadow-md">
              <div class="mb-4">
                <h2 class="text-xl font-semibold">Error 500</h2>
                <p>Lo sentimos, ha ocurrido un error interno en el servidor.</p>
              </div>
              <div class="flex justify-end">
                <a href="{{ route('dashboard') }}" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Volver al inicio
                  </a>
              </div>
            </div>
          </div>  
    </body>
</html>