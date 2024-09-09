<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tierra Animales - Restablecer contraseña</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 p-4 bg-white shadow-md rounded-md">
            <div>
                <a href="" class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-black" fill="none"
                        viewBox="0 0 24 24" stroke="black">
                        <circle cx="11" cy="4" r="2" />
                        <circle cx="18" cy="8" r="2" />
                        <circle cx="20" cy="16" r="2" />
                        <path
                            d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z" />
                    </svg>
                    <span class="sr-only">Tierra Animales</span>
                </a>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-black">
                    Restablecer contraseña
                </h2>
            </div>

            <form class="space-y-4" action="" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="mt-1 block w-full py-2.5 pl-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 sm:text-sm"
                        placeholder="Ingresa tu correo electrónico" />
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Continuar
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="/acesso" class="text-sm font-medium text-black hover:underline">
                    Volver al inicio sesion
                </a>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
