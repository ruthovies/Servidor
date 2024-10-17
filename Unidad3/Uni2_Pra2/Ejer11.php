<!-- Realizar un programa que muestre las películas que se han visto. Crear un array
que contenga los meses de enero, febrero, marzo y abril, asignando los valores
9,12,0 y 17 respectivamente. Si en alguno de los meses no se ha visto alguna
película no ha de mostrar la información de ese mes -->

<?php
// Crear el array asociativo con los meses y el número de películas vistas
$PelisVistas = array ("Enero"=>9,
"Febrero"=>12,
"Marzo"=>0,
"Abril"=>17);

// Recorrer el array y mostrar las peliulas vistas en cada mes
foreach ($PelisVistas as $mes => $cantidad) {

    // Solo mostrar si se han visto más de 0 películas
    if ($cantidad > 0) { 
        echo "En $mes se vieron $cantidad películas.\t";
        echo "<br>";
    }
}



?>