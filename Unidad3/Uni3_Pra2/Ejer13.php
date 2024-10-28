<!-- Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York,
Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el
contenido del array haciendo un recorrido diciendo el valor correspondiente a
cada índice-->
<?php
$Ciudades = array ("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");

foreach ($Ciudades as $indices => $Ciudad) {
    echo "$Ciudad se situa en el indice numero $indices.\n";
    echo "<br>";
}
?>