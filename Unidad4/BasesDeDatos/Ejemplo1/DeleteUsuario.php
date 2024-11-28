<?php

require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db,3307);//Creamos una conexion añadiendo el puerto 3307, el de nuestra base de datos
 $consulta="DELETE FROM usuarios WHERE usu = 'Yolanda'"; //Borramos el usuario
 $result = $connection->query($consulta);//Iniciamos la consulta
mysqli_close($connection);//Se cierra conexion

?>