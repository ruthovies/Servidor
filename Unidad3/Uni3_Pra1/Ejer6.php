<!-- Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor -->
<?php
for($i=0;$i<4;$i++){
    for($j=0;$j<5;$j++){
        $matriz[$i][$j]=rand(1,50);
    }
}

for($i=0;$i<4;$i++){
    for($j=0;$j<5;$j++){
     echo $matriz[$i][$j]."\t";  
    } 
    echo "<br>";
}

$Max = $matriz[0][0];
$Maxi = 0;
$Maxj = 0;

for($i=0;$i<4;$i++){
    for($j=0;$j<5;$j++){
       if ($matriz[$i][$j]>$Max){
           $Max = $matriz[$i][$j];
           $Maxi = $i;
           $Maxj = $j;
       }
    }
}
echo "El elemento mayor es $Max";
echo "<br>";
echo "Se encuentra en la posicion $Maxi, $Maxj";
?>