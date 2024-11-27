<?php

$usu = 'pepito';
$contra = '123';

if ($usu == $_GET['usuario'] && $contra == $_GET['contra']) {//Traduccion: Si el usuario y la contraseña son iguales al introducido por el usuario(Por eso el metodo GET)
    echo "Bienvenido";
} else {//Vuelve a la pagina de inicio de sesion

        header("Location: acceso.php");

}

?>