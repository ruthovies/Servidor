<?php

$valor = $_POST['opcion'];


switch ($valor) {

    case 1:
        echo "Eres una personita";
        break;

    case 2:
        echo "Todavia eres muy joven";
        break;

    case 3:
        echo "Eres una persona joven";
        break;

    case 4:
        echo "Eres una persona madura";
        break;
        
    case 5:
        echo "Ya eres una persona muy mayor";
        break;

    default:
        echo "Aun no me has dicho tu edad";
}

?>
