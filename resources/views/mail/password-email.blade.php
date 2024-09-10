<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecimiento de Contraseña</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #000000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <h1>Hola, {{ $name }}</h1>
        <p>Has solicitado restablecer tu contraseña. Por favor, haz clic en el enlace siguiente para proceder:</p>
        <a href="{{ $resetLink }}" class="button">Restablecer Contraseña</a>
    </div>
</body>

</html>
