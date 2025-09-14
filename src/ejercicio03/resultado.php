<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volumen del cono</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <h2>Resultado del cálculo</h2>

            <?php

         
    $radio = $_GET["radio"];
    $altura = $_GET["altura"];

    $calcular = (pi() * ($radio ** 2) * $altura) / 3;
    echo "<p>El volumen de un cono de radio <strong>$radio</strong> y altura <strong>$altura</strong> es:</p>";
    echo "<h2>" . number_format($calcular, 2, ',', '.') . " unidades cúbicas</h2>";

    

    ?>
            

            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>


</body>

</html>