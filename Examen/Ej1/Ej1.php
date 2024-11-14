<!-- Crear un formulario que contenga una matriz de 2x3 y un botón de calcular como se puede ver en la figura. Para crear el formulario se han de
utilizar bucles, el formulario solo ha de contener una etiqueta, una caja de texto y un botón.
El ejercicio se resolverá en un único fichero llamado ejercicio1.php, en la primera ejecución se mostrará el formulario y en la recarga una vez
pulsado el botón se mostrará el resultado.
Al pulsar el botón de enviar se ha de mostrar los números introducidos en el formulario en binario (para obtener el valor binario puede utilizar
la siguiente función decbin($variable) , esta función muestra el resultado de $variable en binario. Los números se pueden mostrar en el orden
que el programador desee.
 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio 1</title>
</head>
<body>

<?php
// Comprobamos si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Crear una matriz para almacenar los valores en binario
    $binarios = [];

    // Recorrer los datos de la matriz enviada
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 3; $j++) {
            // Obtener el valor del formulario
            $valor = $_POST["valor$i$j"];
            // Convertir el valor a binario y almacenarlo en la matriz de resultados
            $binarios[$i][$j] = decbin((int)$valor);
        }
    }

    // Mostrar los resultados
    echo "<h2>Resultados en binario</h2>";
    echo "<table border='1' cellpadding='5'>"; //Creacion de la tabla
    for ($i = 0; $i < 2; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>" . $binarios[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

} else {
    // Mostrar el formulario si no se ha enviado aún
    echo "<h2>Introduzca números en la matriz 2x3</h2>";
    echo "<form method='POST' action='#'>";
    echo "<table cellpadding='5'>"; //Creacion de la tabla

    // Crear la matriz 2x3 utilizando bucles
    for ($i = 0; $i < 2; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td><input type='number' name='valor$i$j' required></td>";
        }
        echo "</tr>";
    }

    echo "</table><br>";
    echo "<button type='submit'>Calcular</button>";
    echo "</form>";
}
?>

<form action="#" method="post">
</form>

</body>
</html>
