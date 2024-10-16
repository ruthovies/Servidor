<!-- Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge() -->

<?php

//Crear arrays

$array1 = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$array2 = ["12", "34", "45", "52", "12"];
$array3 = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];

//Combinar arrays

$mergedArray = array_merge($array1, $array2, $array3);

//Visualizar arrays

print_r($mergedArray);


?>