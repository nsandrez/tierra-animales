@extends('layout.app')

@section('title', 'Dashboard - Editar Usuario')

@section('contenido-admin')
    <h2 class="text-3xl font-semibold">Editar Usuario</h2>
    <br>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="lg:col-span-2">
            <form
                action="{{ $user->rol === 'Administrador' ? route('user.update', ['id' => $user->id]) : route('user.updateProfile') }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="name" class="@error('name') text-red-600 @enderror">
                            Nombre Completo
                        </label>
                        <input type="name" name="name" id="name"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('name') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Nombre Completo" value="{{ old('name', $user->name) }}" />

                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="email" class="@error('email') text-red-600 @enderror">
                            Correo electrónico
                        </label>
                        <input type="email" name="email" id="email"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Correo electrónico" value="{{ old('email', $user->email) }}" />

                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="password" class="@error('password') text-red-600 @enderror">
                            Contraseña
                        </label>
                        <div class="flex items-center">
                            <div class="relative w-full">
                                <input type="password" name="password" id="password"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pr-10
                                    @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                    placeholder="Contraseña" value="{{ old('password', $user->password) }}" disabled />

                                <span class="absolute inset-y-0 right-3 flex items-center" id="eye-icon-container"
                                    style="display: none;">
                                    <button type="button" id="toggle-password-visibility"
                                        class="text-gray-500 hover:text-gray-700">
                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <button type="button" id="toggle-password"
                                class="ml-2 bg-blue-500 text-white px-3 py-2 text-sm rounded hover:bg-blue-600">
                                Cambiar Contraseña
                            </button>
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-2">
                        <label for="phone" class="@error('phone') text-red-600 @enderror">
                            Teléfono
                        </label>
                        <div class="flex mt-1">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md h-10 whitespace-nowrap">
                                +56 9
                            </span>
                            <input type="text" name="phone" id="phone"
                                class="h-10 border rounded-r-md px-4 w-full bg-gray-50
                                @error('phone') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                placeholder="Teléfono" value="{{ old('phone', $user->phone) }}" />
                        </div>
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-5 flex justify-between mt-6">
                        <div class="inline-flex items-center">
                            <button
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 rounded flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487 19.5 7.125M2.25 21l5.25-1.125 11.25-11.25-3.75-3.75-11.25 11.25L2.25 21z" />
                                </svg>

                                Editar
                            </button>
                        </div>

                        <div class="inline-flex items-center">
                            <a href="{{ route('user.index') }}"
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                </svg>
                                Volver
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('contenido-vet')
    <h2 class="text-3xl font-semibold">Editar Usuario</h2>
    <br>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="lg:col-span-2">
            <form
                action="{{ $user->rol === 'Administrador' ? route('user.update', ['id' => $user->id]) : route('user.updateProfile') }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="name" class="@error('name') text-red-600 @enderror">
                            Nombre Completo
                        </label>
                        <input type="name" name="name" id="name"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('name') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Nombre Completo" value="{{ old('name', $user->name) }}" />

                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="email" class="@error('email') text-red-600 @enderror">
                            Correo electrónico
                        </label>
                        <input type="email" name="email" id="email"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Correo electrónico" value="{{ old('email', $user->email) }}" />

                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="password" class="@error('password') text-red-600 @enderror">
                            Contraseña
                        </label>
                        <div class="flex items-center">
                            <div class="relative w-full">
                                <input type="password" name="password" id="password"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pr-10
                                    @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                    placeholder="Contraseña" value="{{ old('password', $user->password) }}" disabled />

                                <span class="absolute inset-y-0 right-3 flex items-center" id="eye-icon-container"
                                    style="display: none;">
                                    <button type="button" id="toggle-password-visibility"
                                        class="text-gray-500 hover:text-gray-700">
                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <button type="button" id="toggle-password"
                                class="ml-2 bg-blue-500 text-white px-3 py-2 text-sm rounded hover:bg-blue-600">
                                Cambiar Contraseña
                            </button>
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-2">
                        <label for="phone" class="@error('phone') text-red-600 @enderror">
                            Teléfono
                        </label>
                        <div class="flex mt-1">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md h-10 whitespace-nowrap">
                                +56 9
                            </span>
                            <input type="text" name="phone" id="phone"
                                class="h-10 border rounded-r-md px-4 w-full bg-gray-50
                                @error('phone') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                placeholder="Teléfono" value="{{ old('phone', $user->phone) }}" />
                        </div>
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-5 flex justify-between mt-6">
                        <div class="inline-flex items-center">
                            <button
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 rounded flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487 19.5 7.125M2.25 21l5.25-1.125 11.25-11.25-3.75-3.75-11.25 11.25L2.25 21z" />
                                </svg>

                                Editar
                            </button>
                        </div>

                        <div class="inline-flex items-center">
                            <a href="{{ route('user.show') }}"
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                </svg>
                                Volver
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('contenido-test')
    <h2 class="text-3xl font-semibold">Editar Usuario</h2>
    <br>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="lg:col-span-2">
            <form
                action="{{ $user->rol === 'Administrador' ? route('user.update', ['id' => $user->id]) : route('user.updateProfile') }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="name" class="@error('name') text-red-600 @enderror">
                            Nombre Completo
                        </label>
                        <input type="name" name="name" id="name"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('name') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Nombre Completo" value="{{ old('name', $user->name) }}" />

                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="email" class="@error('email') text-red-600 @enderror">
                            Correo electrónico
                        </label>
                        <input type="email" name="email" id="email"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Correo electrónico" value="{{ old('email', $user->email) }}" />

                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="password" class="@error('password') text-red-600 @enderror">
                            Contraseña
                        </label>
                        <div class="flex items-center">
                            <div class="relative w-full">
                                <input type="password" name="password" id="password"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pr-10
                                    @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                    placeholder="Contraseña" value="{{ old('password', $user->password) }}" disabled />

                                <span class="absolute inset-y-0 right-3 flex items-center" id="eye-icon-container"
                                    style="display: none;">
                                    <button type="button" id="toggle-password-visibility"
                                        class="text-gray-500 hover:text-gray-700">
                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <button type="button" id="toggle-password"
                                class="ml-2 bg-blue-500 text-white px-3 py-2 text-sm rounded hover:bg-blue-600">
                                Cambiar Contraseña
                            </button>
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-2">
                        <label for="phone" class="@error('phone') text-red-600 @enderror">
                            Teléfono
                        </label>
                        <div class="flex mt-1">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md h-10 whitespace-nowrap">
                                +56 9
                            </span>
                            <input type="text" name="phone" id="phone"
                                class="h-10 border rounded-r-md px-4 w-full bg-gray-50
                                @error('phone') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                placeholder="Teléfono" value="{{ old('phone', $user->phone) }}" />
                        </div>
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>


                    <div class="md:col-span-5 flex justify-between mt-6">
                        <div class="inline-flex items-center">
                            <button
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 rounded flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487 19.5 7.125M2.25 21l5.25-1.125 11.25-11.25-3.75-3.75-11.25 11.25L2.25 21z" />
                                </svg>

                                Editar
                            </button>
                        </div>

                        <div class="inline-flex items-center">
                            <a href="{{ route('user.show') }}"
                                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                </svg>
                                Volver
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
@stop
@section('js')
    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const eyeIconContainer = document.getElementById('eye-icon-container');

            if (passwordField.disabled) {
                passwordField.disabled = false;
                passwordField.value = '';
                passwordField.focus();

                eyeIconContainer.style.display = 'flex';
            }
        });

        document.getElementById('toggle-password-visibility').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                `;
            } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                `;
            }
        });
    </script>
@stop
