<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url={{ route('processForgetPassword') }}">
    <title>Procesando...</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/spinner.css') }}">
</head>

<body>
    <div class="center-screen">
        <div class="content">
            <div class="spinner"></div>
            <h1>Procesando... Por favor espera.</h1>
        </div>
    </div>
</body>

</html>
