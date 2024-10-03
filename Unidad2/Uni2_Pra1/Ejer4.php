<!--Identificar entre dos números aleatorios cual es el mayor y si este es par o impar.
Buscar información previamente para generar números aleatorios y usarla para
resolver el ejercicio.-->
<?php
$num1 = rand(1, 100); //Genera numeros aleatorios del 1 al 100
$num2 = rand(1,100);

echo "El número 1 es: $num1 <br>";
echo "El número 2 es: $num2 <br>";

if($num1>$num2){
    echo "$num1 es el número mayor";
    if($num1%2==0){
        echo " y es par.";
    } else{
        echo " y es impar.";
    }
} else {
    echo "$num2 es el número mayor";
    if($num2%2==0){
        echo " y es par.";
    } else{
        echo " y es impar.";
    }
}
?>