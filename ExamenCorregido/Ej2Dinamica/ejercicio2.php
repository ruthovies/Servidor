<?php
session_start();
$_SESSION["resul"] = 0;
$bin = [rand(0,1),rand(0,1),rand(0,1),rand(0,1)];
$potencias = [8,4,2,1];
 
for ($i=0; $i<4; $i++) {
    if ($bin[$i] == 1) {
        $_SESSION["resul"] += $potencias[$i];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Adivina el numero decimal</h1>
<h2>El numero en BINARIO: <?php foreach($bin as $num){echo $num;}?></h2>
<?php
    for ($i = 0; $i < 4; $i++) {
        switch ($bin[$i]) {
            case 1:
                switch ($potencias[$i]) {
                    case 8:
                        echo "<img src='img/ocho.jpg'>";
                        break;
                    case 4:
                        echo "<img src='img/cuatro.jpg'>";
                        break;
                    case 2:
                        echo "<img src='img/dos.jpg'>";
                        break;
                    case 1:
                        echo "<img src='img/uno.jpg'>";
                        break;
                }
                break;
            case 0:
                echo "<img src='img/blanco.jpg'>";
                break;
        }
    }
?>
<br><br>
<form action="ejercicio21.php" method="post">
<label for="resp">Número decimal</label>
<input type="number" name="resp" required>
<input type='submit' value='Enviar'>
</form>
</body>
</html>
