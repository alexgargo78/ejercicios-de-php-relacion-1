<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado horoscopo a partir de su fecha de nacimiento</title>
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
            
                $mes = $_POST["mes"] ?? 0;
                $dia = $_POST["dia"] ?? 0;

                $signo = "";

                if (($mes == 1  && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
                    $signo = "Acuario";
                } elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
                    $signo = "Piscis";
                } elseif (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 20)) {
                    $signo = "Aries";
                } elseif (($mes == 4 && $dia >= 21) || ($mes == 5 && $dia <= 20)) {
                    $signo = "Tauro";
                } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 21)) {
                    $signo = "Géminis";
                } elseif (($mes == 6 && $dia >= 22) || ($mes == 7 && $dia <= 22)) {
                    $signo = "Cáncer";
                } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
                    $signo = "Leo";
                } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
                    $signo = "Virgo";
                } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
                    $signo = "Libra";
                } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
                    $signo = "Escorpio";
                } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
                    $signo = "Sagitario";
                } else {
                    $signo = "Capricornio";
                }

            ?>
            <p>Su horóscopo es <strong><?= $signo ?></strong>.</p>
            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>