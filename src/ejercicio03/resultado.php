<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volumen del cono</title>
</head>

<body>
    <?php
    
    if (isset($_POST['r'], $_POST['h'])) {
        $r = (float) $_POST['r'];
        $h = (float) $_POST['h'];

        // Fórmula V = (1/3) * π * r² * h
        $v = (M_PI * $r * $r * $h) / 3;

        echo "<p>Con radio <strong>$r</strong> y altura <strong>$h</strong>:</p>";
        echo "<p>El volumen es <strong>" . number_format($v, 4, ',', '.') . " u³</strong></p>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>

    <p><a href="index.php">⬅ Volver al ejercicio</a></p>
    <p><a href="../index.php">🏠 pagina principal</a></p>
</body>

</html>