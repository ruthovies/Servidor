<!-- Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz.  -->
<?php

$filas = 10;
$columnas = 10;
$matriz = array();

for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
        $matriz[$i][$j]=rand(1,50);
    }
}

//Muestro matriz
for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
     echo $matriz[$i][$j]."\t";  
    } 
    echo "<br>";
}

$Mayor = 0;
$Maxi = 0;
$Maxj = 0;

for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
        if($matriz[$i][$j]>$Mayor){
            $Mayor = $matriz[$i][$j];
            $Maxi = $i;
            $Maxj = $j;
        }
    }
}    

echo "El número máximo es $Mayor";
echo "<br>";
echo "Colocado en la posición $Maxi, $Maxj";
?>
