<!-- Crear un módulo llamado inicio.php. Crear una pantalla similar al que se muestra debajo, para ello ha de pintar cuatro círculos con colores
aleatorios (recomendación: guardar la combinación generada en una variable de sesión).-->

<?php

session_start(); //Esta línea inicia la sesión en PHP

if (!isset($_SESSION['colores'])) { //Aquí se verifica si existe la variable de sesión
    $_SESSION['colores'] = array();
    for ($i = 0; $i < 4; $i++) {
        $color = dechex(mt_rand(0, 0xFFFFFF));
        $_SESSION['colores'][] = $color;
    }
}

?>