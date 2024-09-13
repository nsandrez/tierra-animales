@extends('layout.app')

@section('title', 'Dashboard - Editar Cliente')

@section('contenido-admin')
    <h2 class="text-3xl font-semibold">Editar de Cliente</h2>
    <br>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="lg:col-span-2">
            <form action="{{ route('cliente.update', ['id' => $cliente->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="name" class="@error('nombre') text-red-600 @enderror">
                            Nombre Completo
                        </label>
                        <input type="name" name="nombre" id="nombre"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('nombre') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Nombre Completo" value="{{ old('nombre', $cliente->nombre) }}" />

                        @error('nombre')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-5">
                        <label for="email" class="@error('correo_electronico') text-red-600 @enderror">
                            Correo electrónico
                        </label>
                        <input type="email" name="correo_electronico" id="correo_electronico"
                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                                @error('correo_electronico') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                            placeholder="Correo electrónico"
                            value="{{ old('correo_electronico', $cliente->correo_electronico) }}" />

                        @error('correo_electronico')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="direccion" class="@error('direccion') text-red-600 @enderror">
                            Dirección
                        </label>
                        <div class="flex mt-1">
                            <input type="text" name="direccion" id="direccion"
                                class="h-10 border rounded-r-md px-4 w-full bg-gray-50
                                @error('direccion') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                placeholder="Dirección" value="{{ old('direccion', $cliente->direccion) }}" />
                        </div>
                        @error('direccion')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="phone" class="@error('telefono') text-red-600 @enderror">
                            Teléfono
                        </label>
                        <div class="flex mt-1">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md h-10 whitespace-nowrap">
                                +56 9
                            </span>
                            <input type="telefono" name="telefono" id="telefono"
                                class="h-10 border rounded-r-md px-4 w-full bg-gray-50
                                @error('telefono') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                placeholder="Teléfono" value="{{ old('telefono', $cliente->telefono) }}" />
                        </div>
                        @error('telefono')
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
                            <a href="{{ route('cliente.index') }}"
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
