<?php
/*Crear un programa partir de 3 valores, a b y c que corresponden a los tres
coeficientes de una ecuación de segundo grado muestre las soluciones de la
misma La solución de la ecuación de segundo grado depende del signo de b2-4ac:
 si b2-4ac es negativo no hay soluciones
 si es nulo, hay sólo una solución -b/2a
 si es positivo, hay dos soluciones: (-b+sqrt(b2-4ac))/(2a) y (-bsqrt(b2-4ac))/(2a)
*/ 

function resolverEcuacion($a, $b, $c) {
    $discriminante = ($b ** 2) - (4 * $a * $c);
    
    if ($discriminante < 0) {
        echo "No hay soluciones reales";
    } elseif ($discriminante == 0) {
        $solucion = -$b / (2 * $a);
        echo "Hay una solución única: " . $solucion;
    } else {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Hay dos soluciones: " . $solucion1 . " y " . $solucion2;
    }
}


$a = (float)readline("Introduce el valor de a: ");
$b = (float)readline("Introduce el valor de b: ");
$c = (float)readline("Introduce el valor de c: ");

// Llamar a la función para resolver la ecuación
resolverEcuacion($a, $b, $c);
?>