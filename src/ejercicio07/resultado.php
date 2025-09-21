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
            $h = $_POST['hora'] ?? 0;
            $m = $_POST['minuto'] ?? 0;

            $segundosPasados = ($h * 3600) + ($m * 60);
            $faltan = (24 * 3600) - $segundosPasados;


            ?>
            <h1>Resultado </h1>

            <p>Hora introducida: <strong><?= (int)$h ?>:<?= str_pad((int)$m, 2, '0', STR_PAD_LEFT) ?></strong></p>
            <p>Faltan <strong><?= $faltan ?></strong> segundos para la medianoche.</p>


            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>