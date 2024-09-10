@extends('layout.app')

@section('title', 'Dashboard Veterinario')

@section('contenido-vet')
    <h2 class="text-3xl font-semibold">Bienvenido, {{ auth()->user()->name }}</h2>
    <p class="text-lg text-muted-foreground">Aquí tienes un resumen rápido de la actividad de tu clínica.
    </p>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-300">
            <h3 class="text-xl font-semibold mb-2">Próximas Citas</h3>
            <p class="text-md text-gray-500 mb-4">Tienes 3 citas programadas para hoy.</p>
            <br>
            <div class="mt-4 space-y-4">
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-black text-white">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M8 2v4M16 2v4M3 10h18" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Buddy el Perro</p>
                        <p class="text-md text-gray-500">2:00 PM - Revisión de Rutina</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-black text-white">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M8 2v4M16 2v4M3 10h18" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Whiskers el Gato</p>
                        <p class="text-md text-gray-500">3:30 PM - Vacunación</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-black text-white">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M8 2v4M16 2v4M3 10h18" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Rufus el Cachorro</p>
                        <p class="text-md text-gray-500">4:45 PM - Desparasitación</p>
                    </div>
                </div>
            </div>
            <br><br>
            <a href="#" class="mt-6 text-blue-600 hover:underline text-lg font-semibold">Ver todas
                las citas</a>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-300">
            <h3 class="text-xl font-semibold mb-2">Pacientes recientes</h3>
            <p class="text-md text-gray-500 mb-4">Estos son los pacientes más nuevosagregado a su clínica.
            </p>
            <br>
            <div class="mt-4 space-y-4">
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Buddy el Perro</p>
                        <p class="text-md text-gray-500">Golden Retriever </p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Whiskers el Gato</p>
                        <p class="text-md text-gray-500">Domestic Shorthair</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="font-medium text-lg">Rufus el Cachorro</p>
                        <p class="text-md text-gray-500">Labrador Retriever</p>
                    </div>
                </div>
            </div>
            <br><br>
            <a href="#" class="mt-6 text-blue-600 hover:underline text-lg font-semibold">Ver todos
                los pacientes </a>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-300">
            <h3 class="text-xl font-semibold mb-2">Acciones Rápidas</h3>
            <p class="text-md text-gray-500 mb-4">Acceda fácilmente a tareas y funciones comunes.</p>
            <br>
            <div class="mt-4 space-y-2">
                <a href="#"
                    class="flex items-center p-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    <span class="ml-3 font-medium text-gray-700">Agregar Nuevo Paciente</span>
                </a>
                <a href="#"
                    class="flex items-center p-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                    </svg>

                    <span class="ml-3 font-medium text-gray-700">Programar Cita</span>
                </a>
                <a href="#"
                    class="flex items-center p-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                    <span class="ml-3 font-medium text-gray-700">Ver Expedientes Médicos</span>
                </a>
            </div>
        </div>
    </div>
@endsection
