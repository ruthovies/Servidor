<?php // query-mysqli.php
 require_once 'login.php';
 $connection = new mysqli($hn, $un, $pw, $db,3307);
 if ($connection->connect_error) die("Fatal Error");
 $query = "SELECT * FROM usuarios";
 $result = $connection->query($query);
 if (!$result) die("Fatal Error");
 $rows = $result->num_rows;
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $result->data_seek($j);
 echo 'ID: ' .htmlspecialchars($result->fetch_assoc()['Id']) .'<br>';
 $result->data_seek($j);
 echo 'Usuario: ' .htmlspecialchars($result->fetch_assoc()['Usu']) .'<br>';
 $result->data_seek($j);
 echo 'Contraseña: ' .htmlspecialchars($result->fetch_assoc()['Contra']) .'<br>';
 $result->data_seek($j);
 echo 'Rol: '. htmlspecialchars($result->fetch_assoc()['Rol'])
.'<br><br>';
 } 
 $result->close();
 $connection->close();
?>