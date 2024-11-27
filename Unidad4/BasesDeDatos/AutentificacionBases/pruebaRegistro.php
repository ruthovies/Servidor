<?php
session_start();
$_SESSION['usuario'] = $_POST ['usuarioR'];
$_SESSION['contras'] = $_POST ['contrasenaR'];
$_SESSION['contras2'] = $_POST ['contrasena2'];
$_SESSION['rol'] = $_POST ['opcion'];

if($_SESSION['contras'] == $_SESSION['contras2']){
    $usuarioR = $_SESSION['usuario'];
    $contrasenaR = $_SESSION['contras'];
    $contrasena2 = $_SESSION['contras2'];
    $opcion = $_SESSION['rol'];

    echo "La cuenta ha sido creada correctamente.<br>";

}else{
    echo "Las contraseñas no coinciden.<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="acceso.php">Inicia Sesión</a>    
</body>
</html>
