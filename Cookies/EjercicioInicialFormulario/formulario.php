<?php

// Verificar si existe la cookie "color_fondo"
$color_fondo = isset($_COOKIE['color_fondo']) ? $_COOKIE['color_fondo'] : 'white';

// if(isset($_COOKIE['color_fondo'])){
//     $color_fondo = $_COOKIE['color_fondo'];
// }else{
//     $color_fondo='white';
// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Color</title>
</head>
<body style="background-color: <?php echo $color_fondo;?> ;">
    <form action="guardar_color.php" method="POST">
        <p>Seleccione de qué color desea que sea la web de ahora en adelante:</p>
        <input type="radio" name="color" value="red" id="red">
        <label for="rojo">Rojo</label> <br>
        <input type="radio" name="color" value="green" id="green">
        <label for="verde">Verde</label><br>
        <input type="radio" name="color" value="blue" id="blue">
        <label for="azul">Azul</label><br>
        <button type="submit">Crear Cookie</button>
    </form>
</body>
</html>

