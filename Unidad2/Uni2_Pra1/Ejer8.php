<?php
/*Calcular si un número entero generado de forma aleatoria entre 1 y 1000 es
perfecto. Un número perfecto es aquel que la suma de sus divisores es él mismo,
por ejemplo el 6, sus divisores son 1,2,3 la suma de los mismos es 6.*/

$num1 = rand(1, 1000); //Genera numeros aleatorios
$sumaDiv = 0;
echo "Numero aleatorio " .$num1. "</br>";

for($i=1;$i<$num1;$i++){
    if($num1%$i==0){
       $sumaDiv+=$i; 
       
    }
}

if($sumaDiv === $num1){
    echo $num1. " Es un numero perfecto </br>";
}
else{
    echo $num1. " No es perfecto </br>";
}
?>