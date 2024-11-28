<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db, 3307);
if ($conn->connect_error) die("Error de conexión: " . $conn->connect_error);

if (isset($_POST['UsuarioR']) && isset($_POST['ContrasenaR']) && isset($_POST['Contrasena2']) && isset($_POST['Rol'])) {

    $Usu = $_POST['UsuarioR'];
    $Contra = $_POST['ContrasenaR'];
    $Contra2 = $_POST['Contrasena2'];
    $Rol = $_POST['Rol'];

    //Comprobar que las contraseñas coincidan
    if ($Contra !== $Contra2) {
        echo "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.<br>";
    } else {
        //Comprobar si el usuario ya está registrado
        $query = "SELECT * FROM usuarios WHERE Usu = '$Usu'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "El usuario ya está registrado. Por favor, elija otro nombre de usuario.<br>";
        } else {
            //Insertar el usuario en la base de datos
            $metodo = "INSERT INTO usuarios (Usu, Contra, Rol) VALUES ('$Usu', '$Contra', '$Rol')";
            $result = $conn->query($metodo);

            if (!$result) {
                echo "Error al registrar el usuario. Por favor, inténtelo de nuevo.<br>";
            } else {
                echo "Usuario registrado correctamente.<br>";
            }
        }
    }
} else {
    echo "Por favor, complete todos los campos correctamente.<br>";
}

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Para Registrarse:</h2>

    <form action="Registro.php" method="POST">
        <label for="usuarioR">Usuario:</label><br>
        <input type="text" id="UsuarioR" name="UsuarioR" required><br><br>

        <label for="contra">Contraseña:</label><br>
        <input type="password" id="ContrasenaR" name="ContrasenaR" required><br><br>

        <label for="contrasena2">Confirmar Contraseña:</label><br>
        <input type="password" id="Contrasena2" name="Contrasena2" required><br><br>

        <p>¿Qué tipo de usuario deseas ser?</p>
        
        Jugador <input type="radio" name="Rol" value="Jugador" checked><br>
        Jugador Premium <input type="radio" name="Rol" value="Jugador Premium"><br><br>

        <br>

        <input type="submit" value="Registrar">
    </form>

</body>
</html>