<!DOCTYPE html>
<html lang="es">

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
                <a href="/" class="flex justify-center">
                    <span class="sr-only">Tierra Animales</span>
                </a>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-black">
                    Restablecer contraseña
                </h2>
            </div>
            <form class="space-y-4" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div>
                    <label for="email"
                        class="block text-sm font-medium text-gray-700 @error('email') text-red-600 @enderror">Correo
                        electrónico</label>
                    <input id="email" name="email" type="email" autocomplete="email"
                        class="mt-1 block w-full py-2.5 pl-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 sm:text-sm  @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                        placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" />

                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">{{ $message }}</span>
                        </p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Continuar
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="/acceso" class="text-sm font-medium text-black hover:underline">
                    Volver al inicio de sesión
                </a>
            </div>
        </div>
    </div>
</body>

</html>
