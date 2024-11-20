<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Para Registrarse:</h2>

    <form action="prueba.php" method="GET">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="contra">Contraseña:</label><br>
        <input type="password" id="contra" name="contra" required><br><br>

        <label for="confi">Confirmar Contraseña:</label><br>
        <input type="password" id="confi" name="confi" required><br><br>

        <input type="submit" name="registro" value="Registrar">
    </form>

</body>
</html>