<!-- Carga el siguiente vector e imprime los valores del array asociativo usando la
estructura de control foreach: -->
<?php

//Un array asociativo permite asociar valores a claves de cualquier tipo, incluyendo cadenas de texto.
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;

// Usar foreach para imprimir las claves y valores
foreach ($v as $clave => $valor) {
    echo "Clave: $clave --> Valor: $valor\t";
    echo "<br>";
}
?>