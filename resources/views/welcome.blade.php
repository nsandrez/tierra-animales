<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra Animales - Clínica Veterinaria</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="11" cy="4" r="2" />
                            <circle cx="18" cy="8" r="2" />
                            <circle cx="20" cy="16" r="2" />
                            <path
                                d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z" />
                        </svg>
                        <span class="font-bold text-xl">Tierra Animales</span>
                    </a>
                </div>

                <nav class="hidden md:flex items-center justify-center flex-1">
                    <ul class="flex space-x-4">
                        <li><a href="#inicio"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                        </li>
                        <li><a href="#servicios"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Servicios</a>
                        </li>
                        <li><a href="#nosotros"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Nosotros</a>
                        </li>
                        <li><a href="#resenas"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Reseñas</a>
                        </li>
                        <li><a href="#contacto"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Contacto</a>
                        </li>
                        <li><a href="#consultar-cita"
                                class="text-gray-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Consultar
                                Cita</a></li>
                    </ul>
                </nav>

                <div class="flex items-center">
                    <a href="/acceso" class="text-gray-600 hover:text-primary p-2 rounded-full">
                        <span class="sr-only">Iniciar sesión</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button type="button"
                        class="mobile-menu-button text-gray-600 hover:text-primary focus:outline-none focus:text-primary">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="md:hidden hidden mobile-menu">
            <ul class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <li><a href="#inicio"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
                </li>
                <li><a href="#servicios"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Servicios</a>
                </li>
                <li><a href="#nosotros"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Nosotros</a>
                </li>
                <li><a href="#resenas"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Reseñas</a>
                </li>
                <li><a href="#contacto"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Contacto</a>
                </li>
                <li><a href="#consultar-cita"
                        class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Consultar
                        Cita</a></li>
            </ul>
        </div>
    </header>

    <main class="flex-1">
        <section id="inicio" class="relative w-full h-screen flex items-center justify-center">
            <img src="{{ asset('images/banner.jpg') }}" alt="Fondo de veterinaria"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="relative z-10 text-center text-white">
                <h1 class="text-4xl font-light mb-3 tracking-wide">Bienvenido a Tierra Animales</h1>
                <p class="text-lg mb-6 tracking-wide opacity-90">Cuidamos de tus mascotas con amor y profesionalismo</p>
                <button
                    class="bg-transparent border border-white text-white font-semibold py-2 px-5 rounded-lg text-base hover:bg-white hover:text-black transition duration-300">
                    Agendar Cita
                </button>
            </div>
        </section>


        <section id="servicios" class="w-full py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Nuestros Servicios</h2>
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/serviciodos.jpg') }}" alt="Vacuna"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Vacuna</h3>
                            <p class="text-gray-600">Descripción del servicio de </p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/serviciouno.jpg') }}" alt="Cirugía"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Cirugía</h3>
                            <p class="text-gray-600">Descripción del servicio de </p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/consulta.jpg') }}" alt="Consulta"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Consulta</h3>
                            <p class="text-gray-600">Descripción del servicio de </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="nosotros" class="w-full py-24">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Sobre Nosotros</h2>
                <div class="grid gap-6 lg:grid-cols-2 items-center">
                    <div>
                        <p class="text-gray-600 mb-4">
                            En Tierra Animales, nos dedicamos a proporcionar el mejor cuidado posible para tus mascotas.
                            Nuestro
                            equipo de veterinarios altamente calificados y personal de apoyo está comprometido con la
                            salud y el bienestar de tus compañeros peludos.
                        </p>
                        <p class="text-gray-600">
                            Con años de experiencia y un enfoque compasivo, tratamos a cada animal como si fuera nuestro
                            propio. Utilizamos las últimas tecnologías y técnicas para asegurar que tu mascota reciba la
                            mejor atención posible.
                        </p>
                    </div>
                    <div class="lg:pl-12">
                        <img src="{{ asset('images/nosotros.png') }}" alt="Equipo veterinario"
                            class="rounded-lg object-cover w-full h-auto">
                    </div>
                </div>
            </div>
        </section>

        <section id="resenas" class="w-full py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Reseñas de Clientes</h2>
                <div class="grid gap-6 md:grid-cols-3">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <div class="flex items-center mb-4">
                                @for ($j = 1; $j <= 5; $j++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-600 mb-2">
                                "Excelente atención y cuidado para mi mascota. El personal es muy amable y profesional."
                            </p>
                            <p class="font-semibold">- Cliente Satisfecho {{ $i }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section id="contacto" class="w-full py-24">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Contacto</h2>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Información de Contacto</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p>123 Calle Principal, Ciudad, País</p>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <p>+1 234 567 890</p>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <p>info@vetcare.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 md:h-full min-h-[300px] rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835253576489!2d144.95373631531978!3d-37.817209979751735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sus!4v1635443744148!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="w-full py-6 bg-gray-800 text-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="/" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="11" cy="4" r="2" />
                            <circle cx="18" cy="8" r="2" />
                            <circle cx="20" cy="16" r="2" />
                            <path
                                d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z" />
                        </svg>
                        <span class="font-bold">Tierra Animales</span>
                    </a>
                </div>
                <nav class="flex flex-wrap justify-center md:justify-end gap-4 md:gap-6">
                    <a href="#inicio" class="hover:underline">Inicio</a>
                    <a href="#servicios" class="hover:underline">Servicios</a>
                    <a href="#nosotros" class="hover:underline">Nosotros</a>
                    <a href="#resenas" class="hover:underline">Reseñas</a>
                    <a href="#contacto" class="hover:underline">Contacto</a>
                    <a href="" class="hover:underline">Consultar
                        Cita</a>
                </nav>
            </div>
            <div class="mt-4 text-center text-sm">
                © 2023 Tierra Animales. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>
