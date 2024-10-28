<?php

//Incluir las clases que necesitemos
include 'Vehiculo.php';
include 'Cuatro_Ruedas.php';

//Crear la clase Mostrar
$mostrar = new Vehiculo('Negro', 1500);

//Mostrar el objeto operar, se necesita el toString
echo $mostrar. "<br>";

//Llamamos al metodo circula
$mostrar->circula();

//Llamamos al metodo 'añadir persona' y añadimos el peso de esta
$mostrar->añadir_persona(70);

echo "Se sube una persona <br>";

//Mostramos el nuevo peso
echo $mostrar. "<br>";

echo $mostrar->repintar('Rojo');
echo $mostrar. "<br>";


?>