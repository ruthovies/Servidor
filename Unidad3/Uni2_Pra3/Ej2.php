<!-- Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que
la incluya y la utilice. -->

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

?>