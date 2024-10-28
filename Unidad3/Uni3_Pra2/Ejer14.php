<!-- Repite el ejercicio anterior pero ahora si se han de crear índices asociativos -->
<?php
$Ciudades = array ("ES-MAD"=>"Madrid", 
"ES-BCN"=>"Barcelona", 
"UK-LON"=>"Londres", 
"US-NY"=>"New York", 
"US-LA"=>"Los Angeles", 
"US-CHI"=>"Chicago");

foreach ($Ciudades as $codigo => $Ciudad) {
    echo "$Ciudad tiene el codigo de: $codigo.\n";
    echo "<br>";
}

?>