<!-- Vamos a escribir una aplicación web en PHP para jugar al juego del número secreto.
Es un juego clásico que consiste en lo siguiente: el ordenador elegirá un número al azar entre 1 y 100 y el jugador tendrá que averiguarlo.
Cada vez que el jugador haga un intento, la aplicación le indicará si el número secreto es mayor o menor que el número introducido.
Página 3
Cuando el jugador por fin acierte, la aplicación le dará la enhorabuena y le indicará cuántos intentos ha necesitado para averiguar el
número secreto. Utilizaremos variables de sesión. El ejercicio se resolverá en un único fichero llamado ejercicio3.php
El juego se inicia con la siguiente pantalla, en ella el usuario debe introducir un número entre 1 y 100.
Una vez introducido el número ha de indicar si el menor o mayor al generado aleatoriamente y se ha de mostrar el resultado en una
pantalla como la que se puede ver debajo. Seguir jugando nos llevará de nuevo a la pantalla anterior a volver a introducir un nuevo
número.
Una vez se acierte se muestra la siguiente pantalla. Sigue jugando en este caso iniciará de nuevo el juego. -->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio 3</title>
</head>
<body>

<?php
session_start(); //Esta línea inicia la sesión en PHP

if (!isset($_SESSION['num1'])) { //Aquí se verifica si existe la variable de sesión
    $_SESSION["num1"] = rand(1, 100); 
    $_SESSION['intentos'] = 0;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['num2'])) {
        $num2 = $_POST['num2'];

        if ($num2 < $_SESSION['num1']) {
            echo "El numero es mayor <br>";
            $_SESSION['intentos']++;
        } elseif ($num2 > $_SESSION['num1']) {
            echo "El numero es menor <br>";
            $_SESSION['intentos']++;
        } else {
            echo "Enhorabuena, has acertado el numero en " . $_SESSION['intentos'] . " intentos";
            session_destroy(); // Cierra la sesión
        }
    }
}
?>

<label>Adivina mi numero:</label>
<form method="POST" action="Ej3.php"> 
    <input type="text" name="num2">
    <input type="submit" value="Enviar">
</form>
</body>
</html>