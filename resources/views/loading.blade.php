<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando...</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/spinner.css') }}">
    @section('css')
    @stop
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
        const success = "{{ isset($success) ? $success : '' }}";

        setTimeout(function() {
            let finalUrl = `${redirectRoute}`;

            if (success !== '') {
                finalUrl += `?success=${success}`;
            }

            window.location.href = finalUrl;
        }, 3000);
    </script>

    @section('js')
    @endsection
</body>

</html>
