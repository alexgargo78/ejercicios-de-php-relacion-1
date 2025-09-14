<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Saludo según la hora</title>
</head>

<body>
    <?php
$h = $_POST["h"] ?? 0;

// Usamos match (sin if/else)
$msg = match (true) {
    $h >= 6 && $h <= 12 => "Buenos días",
    $h >= 13 && $h <= 20 => "Buenas tardes",
    default              => "Buenas noches",
};
?>
    <h1>Resultado del saludo según la hora</h1>

    <p>Hora introducida: <strong><?= $h ?>:00</strong></p>
    <p><strong><?= $msg ?></strong></p>


    <p><a href="index.php">⬅ Volver al ejercicio</a></p>
    <p><a href="../index.php">🏠 Volver al índice general</a></p>
</body>

</html>