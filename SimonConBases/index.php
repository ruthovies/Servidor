<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db,3307);
if ($conn->connect_error) die("Error de conexión: ". $conn->connect_error);


if (isset ($_POST['usuario']) && isset ($_POST['clave'])) {

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $metodo = "SELECT Nombre, Clave FROM usuarios WHERE Nombre = '$usuario' AND Clave = '$clave'";
    $result = $conn->query($metodo);//Hace la conexion, siempre se pone
    if (!$result) echo "INSERT failed<br><br>"; 
    if ($result && $result->num_rows > 0) {//Devuelve el numero de filas que devuelve la consulta
        $row = $result->fetch_assoc();
        echo "Bienvenido, " . htmlspecialchars($row['Nombre']) . "!<br>"; 
        session_start();
        $_SESSION['usuario'] = $usuario; //Almacena el nombre del usuario en una variable de sesión
        header('Location: inicio.php'); //Si los datos son correctos, se redirige al juego
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

    <h2>VAMOS A JUGAR AL SIMÓN:</h2>

    <form action="index.php" method="POST"> <!-- En el action llamamos al otro fichero. Debido a que usamos el metodo GET, debemos pasar los datos usando un $_GET -->
        <label for="usuario">USUARIO:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label for="clave">CLAVE:</label><br>
        <input type="password" name="clave" required><br><br> <!-- Usamos type="password" para que al poner la contraseña salgan puntitos -->
        <input type="submit" value="Entrar">


    </form>

</body>
</html>