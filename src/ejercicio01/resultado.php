<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Pesetas</title>
</head>

<body>
    <?php
    $x = $_GET["x"];
    $conversion = $x * 166.386;
    
    ?>
    <h1><?= $conversion ?></h1>

    <p><a href="index.php">⬅ Volver al ejercicio</a></p>
    <p><a href="../index.php">🏠 pagina principal</a></p>
</body>

</html>