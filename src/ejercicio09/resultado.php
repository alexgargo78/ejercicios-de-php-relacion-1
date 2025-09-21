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

            if (isset($_POST["n"])) {
            
                $n = (int) $_POST["n"];
            echo "<h2>Tabla del $n</h2>";
            echo "<table border='1' cellpadding='5'>";
            
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr><td>$n x $i = " . ($n * $i) . "</td></tr>";
            }
            echo "</table>";
            }

            ?>

            <h1>Resultado completo de la tabla</h1>


            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>