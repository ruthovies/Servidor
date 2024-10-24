<?php

$operaciones = $_POST['operacion'];
$a = $_POST['a'];
$b = $_POST['b'];

switch ($operaciones) {
    case 1:
        $suma = 0;
        $suma = $a + $b;
        echo "$a + $b = $suma";
        break;

    case 2:
        $resta = 0;
        $resta = $a - $b;
        echo "$a - $b = $resta";
        break;

    case 3:
        $multiplicacion = 0;
        $multiplicacion = $a * $b;
        echo "$a * $b = $multiplicacion";
        break;

    case 4:
        $division = 0;
        $division = $a / $b;
        echo "$a / $b = $division";
        break;
}
?>