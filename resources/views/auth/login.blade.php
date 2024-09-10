<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tierra Animales - Acceso</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 p-4 bg-white shadow-md rounded-md">
            <div>
                <a href="/" class="flex justify-center">
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
                    Inicia sesión en tu cuenta
                </h2>

                <p class="mt-2 text-center text-sm">
                    <span class="text-gray-500">Esta es una cuenta de prueba.</span><br>
                    <strong>Correo:</strong> test@tierraanimales.com<br>
                    <strong>Contraseña:</strong> password123
                </p>
            </div>

            <form class="space-y-4" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input id="email" name="email" type="email" autocomplete="email"
                        class="mt-1 block w-full py-2.5 pl-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 sm:text-sm"
                        placeholder="Ingresa tu correo electrónico" />

                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <a href="/restablecer-clave" class="text-sm font-medium text-black hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                    <div class="relative mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            class="block w-full py-2.5 pl-4 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 sm:text-sm"
                            placeholder="Ingresa tu contraseña" />

                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Recordarme
                    </label>
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Iniciar sesión
                </button>
            </form>

            <div class="mt-4 text-center">
                <a href="/" class="text-sm font-medium text-black hover:underline">
                    Volver al inicio
                </a>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="{{ asset('js/togglePassword.js') }}"></script>
</body>

</html>
