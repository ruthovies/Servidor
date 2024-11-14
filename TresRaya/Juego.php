<?php
session_start();

if (!isset($_SESSION['board'])) {
    // Inicializa el tablero vacío y el turno
    $_SESSION['board'] = array_fill(0, 9, '');
    $_SESSION['turn'] = 'X';
    $_SESSION['winner'] = null;
}

if (isset($_POST['reset'])) {
    // Reinicia el juego
    $_SESSION['board'] = array_fill(0, 9, '');
    $_SESSION['turn'] = 'X';
    $_SESSION['winner'] = null;
}

if (isset($_POST['cell']) && $_SESSION['winner'] === null) {
    $cell = $_POST['cell'];
    // Marca la celda si está vacía
    if ($_SESSION['board'][$cell] === '') {
        $_SESSION['board'][$cell] = $_SESSION['turn'];
        // Verifica si hay un ganador
        check_winner();
        // Cambia el turno si no hay ganador
        if ($_SESSION['winner'] === null) {
            $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X';
        }
    }
}

function check_winner() {
    $winning_combinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Filas
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columnas
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];
    
    foreach ($winning_combinations as $combo) {
        if ($_SESSION['board'][$combo[0]] !== '' &&
            $_SESSION['board'][$combo[0]] === $_SESSION['board'][$combo[1]] &&
            $_SESSION['board'][$combo[1]] === $_SESSION['board'][$combo[2]]) {
            $_SESSION['winner'] = $_SESSION['board'][$combo[0]];
            return;
        }
    }

    // Si el tablero está lleno y no hay ganador, es empate
    if (!in_array('', $_SESSION['board'])) {
        $_SESSION['winner'] = 'Empate';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tres en Raya en PHP</title>
    <style>
        .board { display: grid; grid-template-columns: repeat(3, 100px); gap: 5px; }
        .cell { width: 100px; height: 100px; font-size: 24px; text-align: center; line-height: 100px; border: 1px solid #000; }
        .cell button { width: 100%; height: 100%; font-size: 24px; background-color: #f0f0f0; }
        .message { margin-top: 20px; font-size: 18px; }
    </style>
</head>
<body>

<h1>Juego de Tres en Raya</h1>

<div class="board">
    <?php for ($i = 0; $i < 9; $i++): ?>
        <div class="cell">
            <?php if ($_SESSION['board'][$i] === ''): ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="cell" value="<?= $i ?>">
                    <button type="submit"><?= $_SESSION['board'][$i] ?></button>
                </form>
            <?php else: ?>
                <?= $_SESSION['board'][$i] ?>
            <?php endif; ?>
        </div>
    <?php endfor; ?>
</div>

<div class="message">
    <?php if ($_SESSION['winner'] !== null): ?>
        <?php if ($_SESSION['winner'] === 'Empate'): ?>
            <p>¡Es un empate!</p>
        <?php else: ?>
            <p>¡Ganador: <?= $_SESSION['winner'] ?>!</p>
        <?php endif; ?>
    <?php else: ?>
        <p>Turno de: <?= $_SESSION['turn'] ?></p>
    <?php endif; ?>
</div>

<form method="post">
    <button type="submit" name="reset">Reiniciar Juego</button>
</form>

</body>
</html>