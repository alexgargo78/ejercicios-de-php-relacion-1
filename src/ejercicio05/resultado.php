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
              
           $horas = $_POST["horas"] ?? 0;
           
           // Cálculo del salario
           $normales = min($horas, 40);
           $extras   = max(0, $horas - 40);
   
           $salario = ($normales * 12) + ($extras * 16);
           ?>
            <h1>Resultado del cálculo</h1>

            <p>El sueldo semanal que le corresponde es de
                <strong><?= $salario ?> euros</strong>.
            </p>


            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>