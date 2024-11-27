<!-- Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu
mismo los valores, poniendo índices alfanuméricos a cada valor con tres
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y
muéstralo por pantalla en una tabla. -->

<?php

$Lenguajes_Cliente = array ("lc-js"=>"JavaScript",
"lc-html"=>"HTML",
"lc-css"=>"CSS");

$Lenguajes_Servidor = array ("ls-php"=>"PHP",
"ls-python"=>"Python",
"ls-node"=>"Node");

// Juntar ambos arrays en uno solo llamado "lenguajes"
$Lenguajes = array_merge($Lenguajes_Cliente, $Lenguajes_Servidor);

// Mostrar el array "lenguajes" en una tabla
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Índice</th><th>Lenguaje</th></tr>";

// Recorrer el array y mostrar los valores en la tabla
foreach ($Lenguajes as $indice => $lenguaje) {
    echo "<tr><td>$indice</td><td>$lenguaje</td></tr>";
}

echo "</table>";
?>