<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volumen del cono</title>
</head>

<body>
    <?php
    $radio = $_GET["radio"];
    $altura = $_GET["altura"];

    $calcular = (pi() * ($radio ** 2) * $altura) / 3;

    ?>
    <h1><?= $calcular ?></h1>




    <p><a href="index.php">⬅ Volver al ejercicio</a></p>
    <p><a href="../index.php">🏠 pagina principal</a></p>
</body>

</html>