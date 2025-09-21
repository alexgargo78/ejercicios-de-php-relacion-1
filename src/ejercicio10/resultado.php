<?php
    $n = $_POST['n'] ?? 0;
    $total = $_POST['total'] ?? 0;
    $cuenta = $_POST['cuentaNumeros'] ?? 0;

    if ($n >= 0) {
        $total += $n;
        $cuenta++;
        $mensaje = "Número $n añadido. Introduce otro número o un negativo para calcular la media.";
        $terminado = false;
    } else {
        if ($cuenta > 0) {
            $media = $total / $cuenta;
            $mensaje = "La media de los $cuenta números introducidos es <strong>" . number_format($media, 2, ',', '.') . "</strong>.";
        } else {
            $mensaje = "No se introdujeron números válidos.";
        }
        $terminado = true;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cálcula la media de numeros positivos introducidos</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            <p><?= $mensaje ?></p>

            <?php if (!$terminado): ?>
            <form action="resultado.php" method="post">
                <input type="number" name="n" autofocus required>
                <input type="hidden" name="total" value="<?= $total ?>">
                <input type="hidden" name="cuentaNumeros" value="<?= $cuenta ?>">
                <input type="submit" value="Aceptar">
            </form>
            <?php else: ?>
            <p><a href="index.php">⬅ Volver a empezar</a></p>
            <?php endif; ?>


            <p><a href="../index.php">🏠 Página principal</a></p>
            <div id="footer">2025 © Alejandro García Gómez.</div>
        </div>
    </div>
</body>

</html>