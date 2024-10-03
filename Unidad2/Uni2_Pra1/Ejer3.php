<!-- Determinar la cantidad de dinero que recibirá un trabajador por concepto de las
horas extras trabajadas en una empresa, sabiendo que cuando las horas de
trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al
doble de una hora normal cuando no exceden de 8; si las horas extras exceden de
8 se pagan las primeras 8 al doble de lo que se pagan las horas normales y el resto
al triple -->

<?php
$jornada=40; 
$salHora=30;
$horasTrabj=55;

$extras=$horasTrabj-$jornada;
if($extras>8){
    $salario=8*$salHora*2+($extras-8)*$salHora*3; //Preguntar esta parte del codigo
}else{
    $salario=$extras*$salHora*2;
}
echo "Horas Extras: $extras <br>";
echo "Salario: $salario";
?>