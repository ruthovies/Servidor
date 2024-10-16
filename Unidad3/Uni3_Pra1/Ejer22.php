<!-- Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. Muestra el
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A
continuación borrar el contenido de posición 5. Vuelve a mostrar el contenido y
por último elimina el array. -->

<?php

//Creamos array

$array = [
    5 => 1,
    12 => 2,
    13 => 56,
    'x' => 42
];


//Contamos elementos    
echo "Numero de elementos: ";
echo count($array);
echo "</br>";

//Mostramos array

print_r($array); 
echo "</br>";


//Borramos elemento de la posicion 5

unset($array[5]);


//Mostramos array

echo "Borrando elemento de la posicion 5 </br>";
print_r($array);
echo "</br>";

//Eliminamos array

unset($array);

//Verificamos si lo hemos eliminado

if (!isset($array)) {
    echo "El array ha sido eliminado.\n";
}



?>