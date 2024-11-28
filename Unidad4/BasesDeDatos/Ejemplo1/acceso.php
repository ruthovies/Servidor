<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db,3307);
if ($conn->connect_error) die("Error de conexión: ". $conn->connect_error);


if (isset ($_POST['Usu']) && isset ($_POST['Contra'])) {

    $Usu = $_POST['Usu'];
    $Contra = $_POST['Contra'];
    $metodo = "SELECT Usu, Contra FROM usuarios WHERE Usu = '$Usu' AND Contra = '$Contra'";
    $result = $conn->query($metodo);//Hace la conexion, siempre se pone
    if (!$result) echo "INSERT failed<br><br>"; 
    if ($result && $result->num_rows > 0) {//Devuelve el numero de filas que devuelve la consulta
        $row = $result->fetch_assoc();
        echo "Bienvenido, " . htmlspecialchars($row['Usu']) . "!<br>"; 
    } else {//Vuelve a la pagina de inicio de sesion

        echo "Usuario o contraseña incorrectos.<br>";
    }
}

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Inicio de Sesión:</h2>

    <form action="acceso.php" method="POST"> <!-- En el action llamamos al otro fichero. Debido a que usamos el metodo GET, debemos pasar los datos usando un $_GET -->
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="Usuario" name="Usu" required><br><br>

        <label for="contra">Contraseña:</label><br>
        <input type="password" id="Contra" name="Contra" required><br><br> <!-- Usamos type="password" para que al poner la contraseña salgan puntitos -->

        <a href="Registro.php">¿No tienes cuenta? Registrate aquí</a><br><br> <!-- Enlace para ir al otro fichero -->
        <input type="submit" value="Entrar">


    </form>

</body>
</html>