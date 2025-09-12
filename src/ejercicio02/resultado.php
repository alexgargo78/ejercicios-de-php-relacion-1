<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Iva</title>
</head>

<body>
    <h2>Resultado del cálculo</h2>

    <?php
    if (isset($_POST['base'])) {
        $base = (float) $_POST['base'];
        $iva = $base * 0.21;
        $total = $base + $iva;

        echo "<p>Base imponible: <strong>" . number_format($base, 2, ',', '.') . " €</strong></p>";
        echo "<p>IVA (21%): <strong>" . number_format($iva, 2, ',', '.') . " €</strong></p>";
        echo "<p>Total factura: <strong>" . number_format($total, 2, ',', '.') . " €</strong></p>";
    } else {
        echo "<p>No se ha introducido ninguna base imponible.</p>";
    }
    ?>
    <p><a href="index.php">Volver al ejercicio</a></p>
    <p><a href="../index.php">pagina principal</a></p>
</body>

</html>