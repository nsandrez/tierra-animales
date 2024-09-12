@extends('layout.app')

@section('title', 'Dashboard - Registro de Usuario')

@section('contenido-admin')
    <h2 class="text-3xl font-semibold">Registro de Usuario</h2>
    <p class="text-lg text-muted-foreground">Por favor, complete la información para registrar un nuevo usuario.</p>
    <br>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="lg:col-span-2">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="name" class="@error('name') text-red-600 @enderror">
                            Nombre Completo
                        </label>
                        <input type="name" name="name" id="name"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('name') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Nombre Completo" value="{{ old('name') }}" />

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
                            placeholder="Correo electrónico" value="{{ old('email') }}" />

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
                        <input type="password" name="password" id="password"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Contraseña" value="{{ old('password') }}" />

                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="rol" class="@error('rol') text-red-600 @enderror">
                            Rol
                        </label>
                        <select name="rol" id="rol"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 @error('rol') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror">
                            <option value="" {{ old('rol') == '' ? 'selected' : '' }}>Seleccionar Rol</option>
                            <option value="Administrador" {{ old('rol') == 'Administrador' ? 'selected' : '' }}>
                                Administrador</option>
                            <option value="Veterinario" {{ old('rol') == 'Veterinario' ? 'selected' : '' }}>Veterinario
                            </option>
                        </select>

                        @error('rol')
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
                                placeholder="Teléfono" value="{{ old('phone') }}" />
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
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Registrar
                            </button>
                        </div>

                        <div class="inline-flex items-center">
                            <a href="{{ route('home.dashboard_admin') }}"
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
@endsection
