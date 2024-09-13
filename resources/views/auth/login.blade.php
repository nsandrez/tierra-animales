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
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password"
                            class="block text-sm font-medium text-gray-700 @error('password') text-red-600 @enderror">Contraseña</label>
                        <a href="/restablecer-clave" class="text-sm font-medium text-black hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                    <div class="relative mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            class="block w-full py-2.5 pl-4 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 sm:text-sm @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Ingresa tu contraseña" />

                        <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer"
                            id="toggle-password-visibility">
                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 text-gray-500 hover:text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                </div>


                <div class="flex
                            items-center">
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

    <script>
        document.getElementById('toggle-password-visibility').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 hover:text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>
        `;
            } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 hover:text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        `;
            }
        });
    </script>

</body>

</html>
