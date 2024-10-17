<!-- . Crea un array llamado deportes e introduce los siguientes valores: futbol,
baloncesto, natación, tenis. Haz el recorrido de la matriz con un for para mostrar
sus valores. A continuación realiza las siguientes operaciones
 Muestra el total de valores que contiene.
 Sitúa el puntero en el primer elemento del array y muestra el valor actual, es
decir, donde está situado el puntero actualmente.
 Avanza una posición y muestra el valor actual.
 Coloca el puntero en la última posición y muestra su valor.
 Retrocede una posición y muestra este valor. -->

<?php

$deportes = array("futbol", "baloncesto", "natacion", "tenis");


for ($i = 0; $i < count($deportes); $i++) {
    echo $deportes[$i] . "<br>";
}

//Mostrar total de elementos
echo "Total de elementos: " . count($deportes) . "<br>";

//Puntero en primer elemento
echo "Puntero en primer elemento: " . $deportes[0] . "<br>";

//Avanzar una posicion
echo "Avanzar una posicion: " . $deportes[1] . "<br>";

//Puntero en ultima posicion
echo "Puntero en ultima posicion: " . $deportes[count($deportes) - 1] . "<br>";

//Retroceder una posicion
echo "Retroceder una posicion: " . $deportes[count($deportes) - 2] . "<br>";

?>