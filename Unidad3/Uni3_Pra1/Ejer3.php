<!-- Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea -->

<?php
$pares = array();
for ($i = 0; $i < 10; $i++) {
    $pares[$i] = $i * 2;
}
foreach ($pares as $numero) {
    echo $numero . "<br>";
}
?>