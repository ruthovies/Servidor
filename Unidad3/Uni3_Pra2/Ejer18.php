<!--Realiza el ejercicio anterior pero con la funicón array_push().-->

<?php

//Crear arrays

$array1 = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$array2 = ["12", "34", "45", "52", "12"];
$array3 = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];

//Combinar arrays

$mergedArray = [];
array_push($mergedArray, $array1, $array2, $array3);

//Visualizar arrays

print_r($mergedArray);


?>