<!-- Escribe una función que reciba una cadena y comprueba si es un palíndromo -->

<?php

function esPalindromo($cadena) {

    // Convertir la cadena a minúsculas y eliminar todos los espacios y caracteres no alfanuméricos

    $cadenaLimpia = preg_replace('/[^a-z0-9]/i', '', strtolower($cadena));
    //Se usa la función 'preg_replace + /[^a-z0-9]/i' para eliminar todos los caracteres que no sean letras o números
    //Se usa 'strtolower' paraconvertir toda la cadena a minúsculas, lo que ayuda a hacer las comparaciones
    
    // Invertir la cadena

    $cadenaInvertida = strrev($cadenaLimpia);
    //'strrev' se usa para invertir la cadena.
    
    // Comprobar si la cadena limpia es igual a la cadena invertida

    return $cadenaLimpia === $cadenaInvertida;
}

// Ejemplo de uso

$cadena = "Roma ni se conoce sin oro, ni se conoce sin amor";

if (esPalindromo($cadena)) {
    echo "La cadena \"$cadena\" es un palíndromo.";
} else {
    echo "La cadena \"$cadena\" no es un palíndromo.";
}

?>