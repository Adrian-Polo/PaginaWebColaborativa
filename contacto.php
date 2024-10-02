<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black; 
            color: white; 
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: yellow; 
            text-align: center;
        }

        form {
            background-color: #333; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: yellow; 
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid yellow; 
            border-radius: 5px;
            background-color: #555; 
            color: white; 
        }

        input[type="submit"] {
            background-color: yellow; 
            color: black; 
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: white; 
            color: black; 
        }
    </style>
</head>
<body>
    <h2>Formulario de contacto</h2>
    <form action="/submit_form" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
