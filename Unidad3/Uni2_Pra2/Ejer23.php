<!--Crea un array multidimensional para poder guardar los componentes de dos
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada. -->

<?php

//Creamos array multidimensional

$familias = [
    "Los Simpson" => [
        "padre" => "Homer",
        "madre" => "Marge",
        "hijos" => ["Bart", "Lisa", "Maggie"]
    ],
    "Los Griffin" => [
        "padre" => "Peter",
        "madre" => "Lois",
        "hijos" => ["Chris", "Meg", "Stewie"]
    ]
];

// Mostrar los valores de las dos familias en una lista no numerada
echo "<h2>Familias:</h2>";
echo "<ul>";

foreach ($familias as $familia => $miembros) {
    echo "<li><strong>$familia</strong>";
    echo "<ul>";
    echo "<li><strong>Padre:</strong> " . $miembros['padre'] . "</li>";
    echo "<li><strong>Madre:</strong> " . $miembros['madre'] . "</li>";
    echo "<li><strong>Hijos:</strong> " . implode(", ", $miembros['hijos']) . "</li>";
    echo "</ul>";
    echo "</li>";
}

echo "</ul>";


?>