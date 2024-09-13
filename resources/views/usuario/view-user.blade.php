@extends('layout.app')

@section('title', 'Dashboard - Ver Usuario')

@section('contenido-admin')
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-semibold">Información de Usuario</h2>
    </div>
    <div class="lg:col-span-3 bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-semibold">Últimas acciones en el sistema</h3>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario administrador registrado: Admin. Juan Pérez</span>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario veterinario registrado: Dr. Juan Pérez</span>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario test registrado: Test. Juan Pérez</span>
            </li>
        </ul>
        <br><br>

        <div class="items-center space-x-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h1>
            </div>

            <div class="mt-6 grid gap-4">
                <div class="flex items-center text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                    <span>{{ $user->phone ?? 'No especificada' }}</span>
                </div>

                <div class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347M3.493 12A59.903 59.903 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84" />
                    </svg>
                    <span>
                        @if ($user->rol === 'Administrador')
                            <span
                                class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm font-semibold">Administrador</span>
                        @elseif ($user->rol === 'Veterinario')
                            <span
                                class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm font-semibold">Veterinario</span>
                        @elseif ($user->rol === 'Test')
                            <span
                                class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-sm font-semibold">Test</span>
                        @else
                            <span class="text-gray-500">Desconocido</span>
                        @endif
                    </span>
                </div>

                <div class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <span>
                        @if ($user->last_login)
                            Su última sesión fue el día
                            {{ \Carbon\Carbon::parse($user->last_login)->format('d \d\e F \d\e Y') }} a las
                            {{ \Carbon\Carbon::parse($user->last_login)->format('H:i') }}
                        @else
                            No especificada
                        @endif
                    </span>
                </div>

                <div class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5" />
                    </svg>
                    <span>El usuario fue creado el día {{ $user->created_at->format('d \d\e F \d\e Y') }}</span>
                </div>

                <div class="flex items-center text-gray-700">
                    <span>
                        @if ($user->status === 'OPERATIVO')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Activo
                            </span>
                        @elseif ($user->status === 'NO HABILITADO')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Inactivo
                            </span>
                        @else
                            <span class="text-gray-500">Desconocido</span>
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
