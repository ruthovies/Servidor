<!-- Dados 3 números asignados dentro del código a mostrar el número mayor de los
tres. -->

<?php
$num1 = 4;
$num2 = 1;
$num3 = 7;

if($num1 > $num2 && $num1 > $num3){
    echo "El numero mayor es: " .$num1;
}else if($num2 > $num1 && $num2 > $num3){
    echo "El numero mayor es: " .$num2;
}else if($num3 > $num1 && $num3 > $num2){
    echo "El numero mayor es: " .$num3;
}

?>