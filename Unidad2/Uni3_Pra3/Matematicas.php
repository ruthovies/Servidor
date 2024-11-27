<!-- Aquí resolveremos la ecuación llamando al archivo "Ej2.php" -->

<?php

include 'Ej2.php';

$a = 1;
$b = -3;
$c = 2;
$soluciones = ResolverEcuacionSegundoGrado($a, $b, $c);

if ($soluciones !== false) {
    echo "Las soluciones son: " . implode(", ", $soluciones);
} else {
    echo "No hay soluciones reales.";
}

?>