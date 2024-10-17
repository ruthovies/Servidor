<!-- Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE. -->

<?php

function ResolverEcuacionSegundoGrado($a, $b, $c){

    //Verficamos si 'a' es 0, si no la ecuación deberia ser nula

    if($a == 0){
        return false;
    }

    //Calculamos el discriminante

    $discriminante = $b * $b - 4 * $a *$c;

    //Verificamos si el discriminante es negativo, si es asi, la ecuación es nula

    if($discriminante < 0){
        return false;
    }

    //Si el discriminante es 0 solo hay 1 solución

    if ($discriminante == 0) {
        $solucion = -$b / (2 * $a);
        return [$solucion]; // Retornamos la única solución
    }

    //Si el discriminante es positivo hay 2 soluciones

    $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);//squrt: Calcula la raiz cuadrada

    return [$solucion1, $solucion2]; // Retornamos ambas soluciones
}


$a = 1;
$b = -3;
$c = 2;
$soluciones = ResolverEcuacionSegundoGrado($a, $b, $c);

if ($soluciones !== false) {
    echo "Las soluciones son: " . implode(", ", $soluciones);
} else {
    echo "No hay soluciones reales.";
}

?>