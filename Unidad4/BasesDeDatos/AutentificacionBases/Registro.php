<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Para Registrarse:</h2>

    <form action="prueba.php" method="GET">
        <label for="usuarioR">Usuario:</label><br>
        <input type="text" id="usuarioR" name="usuarioR" required><br><br>

        <label for="contra">Contraseña:</label><br>
        <input type="password" id="contrasenaR" name="contrasenaR" required><br><br>

        <label for="contrasena2">Confirmar Contraseña:</label><br>
        <input type="password" id="contrasena2" name="contrasena2" required><br><br>

        <p>¿Qué tipo de usuario deseas ser?</p>
        
        <input type="radio" name="opcion" value="1">
        <label for="normal">Estandar</label><br>

        <input type="radio" name="opcion" value="2">
        <label for="premium">Premium</label><br>

        <br>

        <input type="submit" name="registro" value="Registrar">
    </form>

</body>
</html>