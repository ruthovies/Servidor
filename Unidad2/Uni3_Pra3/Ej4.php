<!-- Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite. -->

<?php
function filtrarPorLimite($array, $limite) {
    // Filtramos el array para obtener solo los elementos menores que el límite
    $resultado = array_filter($array, function($numero) use ($limite) {
        return $numero < $limite;
    });

    // Reindexamos el array para que las claves sean consecutivas (opcional)
    return array_values($resultado);
}

// Ejemplo de uso
$numeros = [10, 5, 20, 3, 7, 30, 12];
$limite = 10;

$filtrados = filtrarPorLimite($numeros, $limite);
print_r($filtrados);
?>