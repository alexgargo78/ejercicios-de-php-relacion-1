<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del cálculo de Euros a Pesetas</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content"><h2>Resultado del cálculo</h2>
        
       <?php

        $x = $_GET["x"];
        $iva = $x * 0.21;
        $total = $x + $iva;

        echo "<p>Base imponible: $x €</p>";
        echo "<p>IVA (21%): $iva €</p>";
        echo "<p>Total: $total €</p>";

        ?>
            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>


</body>

</html>