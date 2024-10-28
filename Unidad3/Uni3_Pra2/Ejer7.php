<!-- Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón. -->
<?php

$filas = 3;
$columnas = 4;
$matriz = [];
//Genero matriz
for($i=0;$i<$filas;$i++){
    for($j=0;$j<$columnas;$j++){
        $matriz[$i][$j]=rand(1,50);
    }
}

//Muestro matriz
for($i=0;$i<$filas;$i++){
    for($j=0;$j<$columnas;$j++){
     echo $matriz[$i][$j]."\t";  
    } 
    echo "<br>";
}

//Inicializo vectores
$ValoresMaximos = [];
$PromediosMaximos = [];

//Calculo los maximo y calculo el promedio
for($i=0;$i<$filas;$i++){
     $ValoresMaximos[$i] = max($matriz[$i]); //Max: Funcion que saca el maximo
    $PromediosMaximos[$i] = array_sum($matriz[$i]) / count($matriz[$i]);//array_sum: Funcion que suma,
}//count: Función que cuenta en este caso sabe que hay que dividir entre 5
echo "Valores Maximos de cada fila: \n";
foreach ($ValoresMaximos as $valorMaximo) {
    echo $valorMaximo . "\n";
}
echo "<br/>";
echo "Promedios de los valores maximos: \n";
foreach ($PromediosMaximos as $promedioMaximo) {
    echo $promedioMaximo . "\n";
}
?>