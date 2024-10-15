<!--Crea un array con los nombre Pedro, Ismael, Sonia, Clara, Susana, Alfonso y
Teresa. Muestra el número de elementos que contiene y cada elemento en una
lista no numerada de html.-->

<?php

$Nombres = array ("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");
echo "<ul>";

foreach($Nombres as $Contenido => $Datos){
        echo "<li>".$Datos."</li>";
    };
   
echo "</ul>";

?>