<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Éxito - Restablecimiento de Contraseña</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen items-center justify-center">
        <div class="w-full max-w-md p-6 bg-white shadow-md rounded-lg text-center">
            <h1 class="text-2xl font-bold text-green-600">¡Éxito!</h1>
            <p class="mt-4 text-lg text-gray-700">Su mensaje ha sido enviado con éxito.</p>
            <a href="{{ route('acceso') }}"
                class="mt-6 inline-block px-6 py-2 text-sm font-medium leading-6 text-center text-white uppercase transition bg-black border border-transparent rounded-md shadow ripple hover:bg-gray-800 focus:outline-none focus:ring">
                Volver al inicio de sesión
            </a>
        </div>
    </div>
</body>

</html>
