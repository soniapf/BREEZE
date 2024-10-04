<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Formulario de Registro Premios DizPintado</h2>
   <form  action="{{route('formulario.submit')}}"  method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <!-- Name  -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Surname -->
                <div>
                    <label for="surname" class="block text-sm font-medium text-gray-700">Apellido</label>
                    <input type="text" name="surname" id="surname" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>


                <!-- Presentation File -->
                <div>
                    <label for="fichero" class="block text-sm font-medium text-gray-700">Presentación</label>
                  <input type="file" name="fichero" id="file" class="mt-1 block w-full text-gray-500">
                </div>


                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Enviar
                    </button>
                </div>

            </form>
         
        </div>
    </div>
</body>
</html>
