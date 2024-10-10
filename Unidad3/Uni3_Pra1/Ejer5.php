<?php
/*Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.*/

//Genera matriz aleatoria
for($i=0;$i<3;$i++){
    for($j=0;$j<5;$j++){
        $matriz[$i][$j]=rand(0,10);
    }
}

//Imprimir elementos de la fila
echo "Elementos de la fila:\n";
echo "<br>";
foreach($matriz as $fila){//recorre las filas
    echo implode(" ",$fila)."\n";//preguntar
    
}

//Imprimir elementos de la columna
echo "<br>";
echo "Elementos de la columna:\n";
echo "<br>";
for ($col=0; $col<5; $col++){
    for ($fila=0; $fila<3; $fila++){
        echo $matriz[$fila][$col]." ";
    }
    echo "\n";
}
?>