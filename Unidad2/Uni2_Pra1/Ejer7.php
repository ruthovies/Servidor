<?php
/*Hacer un programa que calcule todos los números primos entre 1 y 50 y los
muestre por pantalla. Un número primo es un número entero que sólo es
divisible por 1 y por sí mismo.*/

for($i=1;$i<=50;$i++){
    $esPrimo = true;

    for($j=2;$j<$i;$j++){
        if($i % $j == 0){
            $esPrimo = false;
            break;
        }
    }

    if($esPrimo){
        echo $i. " Es primo </br>";
    }
}

?>