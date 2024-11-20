<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Inicio de Sesión:</h2>

    <form action="prueba.php" method="GET"> <!-- En el action llamamos al otro fichero. Debido a que usamos el metodo GET, debemos pasar los datos usando un $_GET -->
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="contra">Contraseña:</label><br>
        <input type="password" id="contra" name="contra" required><br><br> <!-- Usamos type="password" para que al poner la contraseña salgan puntitos -->

        <a href="Registro.php">¿No tienes cuenta? Registrate aquí</a><br><br> <!-- Enlace para ir al otro fichero -->
        <input type="submit" value="Entrar">
    </form>

</body>
</html>