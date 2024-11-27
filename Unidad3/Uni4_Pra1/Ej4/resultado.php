<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recogemos los datos enviados
        $mes = $_POST['mes'];
        $año = $_POST['año'];

        // Validamos que el mes y el año sean valores válidos
        if ($mes >= 1 && $mes <= 12 && $año >= 1900 && $año <= 2100) {
            
            // Obtener el número de días del mes
            $dias_en_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $año);
            
            // Determinar el día de la semana en que comienza el mes (0 = Domingo, 1 = Lunes, ..., 6 = Sábado)
            $primer_dia_mes = date('w', mktime(0, 0, 0, $mes, 1, $año));

            // Array para los días de la semana
            $dias_semana = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

            echo "<h2>Calendario de $mes / $año</h2>";
            echo "<table>";
            echo "<tr>";

            // Mostrar los nombres de los días de la semana
            foreach ($dias_semana as $dia) {
                echo "<th>$dia</th>";
            }
            echo "</tr><tr>";

            // Añadir celdas vacías hasta que empiece el primer día del mes
            for ($i = 0; $i < $primer_dia_mes; $i++) {
                echo "<td></td>";
            }

            // Rellenar el calendario con los días del mes
            for ($dia = 1; $dia <= $dias_en_mes; $dia++) {
                echo "<td>$dia</td>";

                // Si es sábado (último día de la semana), cerrar la fila y empezar una nueva
                if (($dia + $primer_dia_mes) % 7 == 0) {
                    echo "</tr><tr>";
                }
            }

            // Completar la última fila con celdas vacías si es necesario
            while (($dia + $primer_dia_mes) % 7 != 1) {
                echo "<td></td>";
                $dia++;
            }

            echo "</tr>";
            echo "</table>";
        } else {
            echo "<p>Por favor, introduce un mes entre 1 y 12, y un año válido.</p>";
        }
    }
    ?>