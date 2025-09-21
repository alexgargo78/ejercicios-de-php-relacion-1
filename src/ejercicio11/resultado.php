<?php
$n = $_POST["n"] ?? 0;

// Generar la serie de Fibonacci
$serie = [];
if ($n >= 1) $serie[] = 0;
if ($n >= 2) $serie[] = 1;

for ($i = 2; $i < $n; $i++) {
    $serie[] = $serie[$i - 1] + $serie[$i - 2];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Saludo según la hora</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            
            <?php 
                if ($n > 0):
            ?>
                <p>Has pedido <?= $n ?> términos de la serie de Fibonacci:</p>
                <p><strong><?= implode(", ", $serie) ?></strong></p>
            <?php 
                else: 
            ?>
                <p>No se ha introducido un número válido.</p>
            <?php
                 endif;
            ?>
            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>