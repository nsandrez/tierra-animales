<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tierra Animales - @yield('title', 'Inicio')</title>
    @vite('resources/css/app.css')
</head>

<body class="text-foreground">
    <div class="flex min-h-screen w-full">
        <aside class="hidden w-64 flex-col justify-between border-r bg-white p-4 md:flex">
            <div>
                <div class="flex items-center gap-2 px-4 py-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="11" cy="4" r="2" />
                        <circle cx="18" cy="8" r="2" />
                        <circle cx="20" cy="16" r="2" />
                        <path
                            d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z" />
                    </svg>
                    <span class="text-xl font-bold">Tierra Animales</span>
                </div>
                <nav class="flex flex-col gap-2">
                    <a href="#"
                        class="flex items-center gap-2 rounded-md px-4 py-2 text-lg font-medium transition-colors hover:bg-gray-100 hover:text-gray-900">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        Inicio
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 rounded-md px-4 py-2 text-lg font-medium transition-colors hover:bg-gray-100 hover:text-gray-900">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="12" cy="7" r="4" />
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        </svg>
                        Pacientes
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 rounded-md px-4 py-2 text-lg font-medium transition-colors hover:bg-gray-100 hover:text-gray-900">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M8 2v4M16 2v4M3 10h18" />
                        </svg>
                        Citas
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 rounded-md px-4 py-2 text-lg font-medium transition-colors hover:bg-gray-100 hover:text-gray-900">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                        </svg>
                        Configuración
                    </a>
                </nav>
            </div>

            <div class="mt-4 pt-4">
                <nav class="flex flex-col gap-2 mt-2">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="flex items-center gap-2 rounded-md px-4 py-2 text-lg font-medium transition-colors hover:bg-gray-100 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </aside>


        <div class="flex flex-1 flex-col">
            <header
                class="sticky top-0 z-10 flex h-14 items-center justify-between border-b bg-background px-4 md:px-6">
                <div class="flex items-center gap-4">
                    <button id="menu-toggle" class="md:hidden p-2">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                        <span class="sr-only">Toggle menu</span>
                    </button>
                    <h1 class="text-lg font-semibold">Inicio</h1>
                </div>
            </header>

            <main class="flex-1 p-4 md:p-6">
                @if (auth()->user()->rol == 'Administrador')
                    @yield('contenido-admin')
                @elseif(auth()->user()->rol == 'Veterinario')
                    @yield('contenido-vet')
                @elseif(auth()->user()->rol == 'Test')
                    @yield('contenido-test')
                @else
                    <p>No tienes acceso a esta sección</p>
                @endif
            </main>

            <footer class="bg-gray-800 text-white py-4 mt-6">
                <div class="text-center">
                    <p>&copy; 2024 Tierra Animales. Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var sidebar = document.querySelector('aside');
            sidebar.classList.toggle('hidden');
        });

        document.getElementById('user-menu').addEventListener('click', function() {
            var dropdown = document.getElementById('user-menu-dropdown');
            dropdown.classList.toggle('hidden');
        });
    </script>
    @yield('js')

</body>

</html>
