<?php
session_start();

// Mostrar el mensaje de bienvenida nombre del usuario que ha accedido
$nombre = $_SESSION['login'];
echo "<h1> Bienvenid@: " . htmlspecialchars($nombre) . "</h1><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
    <style>
        .botones {
            display: flex;
            gap: 10px;
        }
        .parejas{
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <form class="botones">
        <?php
        for ($i = 0; $i < 6; $i++) {
            echo "<button type='submit' name='boton'>Levantar Carta " . ($i + 1) . "</button>";
        }
        ?>
    </form>

    <!-- Generar las cajas de pareja (valores entre 1 y 6) y el botón comprobar -->
    
    
        <h1>Pareja:</h1>
        <div class="pareja">
            <input type="number" name="numero1" min="1" max="6">
            <input type="number" name="numero2" min="1" max="6">
            <button type="submit" name="comprobar">Comprobar</button>
        </div>
    </div>
</body>
</html>
