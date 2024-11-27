<!-- Crear la clase Operaciones con los métodos necesarios para a partir del código
mostrado debajo muestre el siguiente resultado: -->
<?php

//Incluir la clase Operaciones
include 'Operaciones.php';

//Crear la clase Operar
$operar = new Operaciones(50,20);

//Mostrar el objeto operar, usa el metodo toString
echo $operar. "<br>";

//mostrar operacion básicas usando los metodos suma, resta, multiplicacion y division
echo $operar->suma() . "<br>";
echo $operar->resta() . "<br>";
echo $operar->multiplicacion() . "<br>";
echo $operar->division() . "<br>";

?>