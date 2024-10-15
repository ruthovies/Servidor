<!--Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e
imprimir la columna que tuvo la máxima suma y la suma de esa columna-->
<?php

$filas = 20;
$columnas = 20;
$matriz = array();

for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
        $matriz[$i][$j]=rand(1,5);
    }
}

for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
     echo $matriz[$i][$j]."\t";  
    } 
    echo "<br>";
}

//Variable para almacenar las sumas de las columnas
$sumaColumnas = array_fill(0, $columnas, 0);

//Sumo las columnas
for ($j = 0; $j < $columnas; $j++) {
    for ($i = 0; $i < $filas; $i++) {
        $sumaColumnas[$j] += $matriz[$i][$j];
    }
}

//Encuentro la columna con el resultado mayor de la suma
$indiceMax = array_keys($sumaColumnas, max($sumaColumnas))[0];
$sumaMax = $sumaColumnas[$indiceMax];

echo "La columna con la suma máxima es la columna: $indiceMax con una suma de: $sumaMax\n";
?>