<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra Animales - Acceso Denegado</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white flex items-center justify-center h-screen">
    <div class="text-center">
        <div class="inline-flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24"
                stroke="none">
                <path
                    d="M12 12C10.34 12 8.93 10.77 8.75 9.25C8.59 7.94 9.63 6.75 11 6.75C12.37 6.75 13.41 7.94 13.25 9.25C13.07 10.77 11.66 12 12 12zM15.5 12C14.1 12 12.97 10.77 13.12 9.25C13.28 7.94 14.37 6.75 15.75 6.75C17.13 6.75 18.22 7.94 18.08 9.25C17.93 10.77 16.8 12 15.5 12zM9.75 13.5C9.31 12.97 8.69 12.97 8.25 13.5C7.81 14.03 7.69 14.81 8.06 15.39C8.69 16.39 10.94 17.15 12 16.75C13.06 17.15 15.31 16.39 15.94 15.39C16.31 14.81 16.19 14.03 15.75 13.5C15.31 12.97 14.69 12.97 14.25 13.5C13.81 14.03 12.59 15.28 12 15.28C11.41 15.28 10.19 14.03 9.75 13.5zM6.5 12C5.1 12 3.97 10.77 4.12 9.25C4.28 7.94 5.37 6.75 6.75 6.75C8.13 6.75 9.22 7.94 9.08 9.25C8.93 10.77 7.8 12 6.5 12zM12 4C11.34 4 10.73 4.26 10.35 4.75C9.97 5.24 9.85 5.88 10.07 6.47C10.35 7.26 11.22 8 12 8C12.78 8 13.65 7.26 13.93 6.47C14.15 5.88 14.03 5.24 13.65 4.75C13.27 4.26 12.66 4 12 4z" />
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-gray-800 mt-4">Oops, acceso denegado!</h1>
        <p class="mt-2 text-gray-500">Lo sentimos, pero no tienes permiso para acceder a esta página. Por favor consulte
            con su administrador o vuelve a intentarlo más tarde.</p>
        <a href="/"
            class="mt-6 inline-block px-6 py-3 bg-black text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600">
            Ir a la página de inicio
        </a>
    </div>


    @vite('resources/js/app.js')

</body>

</html>
