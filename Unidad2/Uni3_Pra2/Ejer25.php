<!-- Crea una matriz para guardar a los amigos clasificados por diferentes ciudades.
Los valores serán los siguientes:
En Madrid: nombre Pedro, edad 32, telefono 91-999.99.99
En Barcelona: nombre Susana, edad 34, telefono 93.000.00.00
En Toledo: nombre Sonia, edad 42, telefono 925.09.09.09
Haz un recorrido del array multidimensional mostrando los valores de tal manera
que nos muestre en cada ciudad que amigos tiene.
 -->

 <?php

 //Cracion de la matiz
$Madrid = [
    "nombre" => "Pedro",
    "edad" => 32,
    "telefono" => "91-999.99.99"
];

$Barcelona = [
    "nombre" => "Susana",
    "edad" => 34,
    "telefono" => "93.000.00.00"
];

$Toledo = [
    "nombre" => "Sonia",
    "edad" => 42,
    "telefono" => "925.09.09.09"
];

//Recorrido de la matriz
echo "Madrid: " . $Madrid["nombre"] . ", " . $Madrid["edad"] . ", " . $Madrid["telefono"] . "<br>";
echo "Barcelona: " . $Barcelona["nombre"] . ", " . $Barcelona["edad"] . ", " . $Barcelona["telefono"] . "<br>";
echo "Toledo: " . $Toledo["nombre"] . ", " . $Toledo["edad"] . ", " . $Toledo["telefono"] . "<br>";

 ?>