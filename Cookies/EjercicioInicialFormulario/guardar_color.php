<?php
    // Verificar que se haya recibido el color
    if(isset($_POST['color'])){
        $color= $_POST['color'];
         // Crear una cookie que expire en 30 días
         setcookie('color_fondo', $color, time()+(30*24*60*60),'/');
         $mensaje = "Se creó la cokie";
        }else{
            $mensaje = "NO se selecciono ningún color";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cokies</title>
</head>
<body style="background-color: <?php echo isset($color) ? $color : 'white'; ?>;">
    <p><?php echo $mensaje?></p>
    <a href="formulario.php">Ir a la otra web</a>
</body>
</html>