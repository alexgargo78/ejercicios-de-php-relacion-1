<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Saludo según la hora</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <?php
            $a = $_POST['a'] ?? 0;
            $b = $_POST['b'] ?? 0;
            $c = $_POST['c'] ?? 0;

            if ($a <= $b && $a <= $c) {
                if ($b <= $c) {
                    $ordenados = [$a, $b, $c];
                } else {
                    $ordenados = [$a, $c, $b];
                }
            } elseif ($b <= $a && $b <= $c) {
                if ($a <= $c) {
                    $ordenados = [$b, $a, $c];
                } else {
                    $ordenados = [$b, $c, $a];
                }
            } else { // $c es el menor
                if ($a <= $b) {
                    $ordenados = [$c, $a, $b];
                } else {
                    $ordenados = [$c, $b, $a];
                }
            }

            ?>
            <h1>Resultado</h1>

            <p>Números introducidos:
                <strong><?= $a ?>, <?= $b ?>, <?= $c ?></strong>
            </p>
            <p>Ordenados de menor a mayor:
                <strong><?= implode(", ", $ordenados) ?></strong>
            </p>

            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>