<?php
/*Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria.*/

for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        $matriz[$i][$j]=rand(0,100);//genera un numero aleatorio
        echo $matriz[$i][$j]." ";
    }
    echo "<br>";
}
?>