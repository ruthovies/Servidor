<!-- Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma. -->

<?php
$nivel = array("Básico", "Medio", "Perfeccionamiento");
$idioma = array("Inglés", "Francés", "Alemán", "Ruso");
$alumnos = array(
    array(1, 14, 8, 3),
    array(6, 19, 7, 2),
    array(3, 13, 4, 1)
);
for ($i = 0; $i < 3; $i++) {
    echo "Nivel " . $nivel[$i] . ":<br>";
    for ($j = 0; $j < 4; $j++) {
        echo "Idioma " . $idioma[$j] . ": " . $alumnos[$i][$j] . " alumnos<br>";
    }
    echo "<br>";
}
?>