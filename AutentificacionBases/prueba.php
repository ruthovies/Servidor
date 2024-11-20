<?php

$usu = 'pepito';
$contra = '123';
$msg = 'Usuario y/o contraseña incorrectos';

if ($usu == $_GET['usuario'] && $contra == $_GET['contra']) {//Traduccion: Si el usuario y la contraseña son iguales al introducido por el usuario(Por eso el metodo GET)
    echo "Bienvenido";
} else {//Vuelve a la pagina de inicio de sesion

    
    if (isset($_GET['status']) && $_GET['status'] == 'failed') {
        header("Location: acceso.php");
        $_GET['status'] = $msg;
    }
    
}

?>