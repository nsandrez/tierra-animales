<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <script>
        const redirectRoute = "{{ $redirectRoute }}";

        setTimeout(function() {
            window.location.href = redirectRoute;
        }, 5000);
    </script>
</body>

</html>
