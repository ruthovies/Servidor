<!-- Construir una calculadora, se ha de resolver con dos script, el primero muestra el
formulario y el segundo el resultado. Al pulsar el botón ENVIAR se mostrará la suma
de los valores introducidos en las cajas de texto. -->

<?php

// Recoger los valores enviados   
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    
        // Realizar la suma
        $resultado = $numero1 + $numero2;

        // Mostrar el resultado
        echo "<p>La suma de $numero1 y $numero2 es: $resultado</p>";

?>