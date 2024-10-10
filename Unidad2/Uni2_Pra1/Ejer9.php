<?php
/*Escriba un programa a partir de un número entero generado de forma aleatoria
indique si es primo. Un número primo es aquel que es divisible por el mismo y la
unidad.*/

$num1 = rand(1, 1000);
echo "Numero aleatorio: " .&num1;
$esPrimo = true;

for($i=1;$i<=$num1;$i++){
   

    for($j=2;$j<$i;$j++){
        if($i % $j == 0){
            $esPrimo = false;
            break;
        }
    }
}
if($esPrimo){
    echo $num1. " Es primo </br>";
}
?>