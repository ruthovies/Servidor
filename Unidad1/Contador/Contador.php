<!-- Crear un Contador en php, se mostrara un 0, a un lado un - y al otro un +. 
 Cada vez que le demos al + el numero incrementara 1 y al - disminuira 1.
 Debajo de nuestro n umero debe de haber un boton de "Cerrar" en el cual
 se cerrará nuestra sesión.-->


<?php
session_start(); //Esta línea inicia la sesión en PHP

if (!isset($_SESSION['contador'])) { //Aquí se verifica si existe la variable de sesión
    $_SESSION['contador'] = 0; //La primera vez que el usuario inicia la pagina, el contador comienza en 0
}
// Definir la acción en una variable basada en el valor del botón
$accion = isset($_POST['accion']) ? $_POST['accion'] : null;

switch ($accion) {
    case '+':
        $_SESSION['contador']++; // Aumenta el contador en 1
        break;

    case '-':
        $_SESSION['contador']--; // Disminuye el contador en 1
        break;

    case 'Cerrar':
        session_destroy(); // Cierra la sesión
        header("Location: " . $_SERVER['PHP_SELF']); // Redirige al usuario a la página principal
        exit; // Finaliza el script después de redirigir
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
        }

        .contador-box {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .contador {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .boton-cerrar {
            display: block;
            margin-top: 15px;
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>Contador</h1>

    <form action="Contador.php" method="post">
        <div class="contador-box">
            <div class="contador">
                <?php echo $_SESSION['contador']; ?>
            </div>
            <input type="submit" name="accion" value="+">
            <input type="submit" name="accion" value="-">
            <input type="submit" name="accion" value="Cerrar" class="boton-cerrar">
        </div>
    </form>
</body>
</html>