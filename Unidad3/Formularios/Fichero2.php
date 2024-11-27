<?php
if(isset ($_POST['nombre'])){
echo "Nombre ".$_POST['nombre'];
echo "Apellidos ".$_POST['apellido'];
}else{
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="#" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellidos: </label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php 
}

?>