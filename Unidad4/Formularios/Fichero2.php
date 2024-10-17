<?php

if(isset($POST['nombre'])){
echo "Nombre" .$POST ['nombre'];
echo "Apellido" .$POST ['apellido'];
}else{

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>

    <h2>Formulario:</h2>

    <form action="test.php" method="GET">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
<?php
}
?>