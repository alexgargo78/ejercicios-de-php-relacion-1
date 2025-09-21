<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Iva</title>
     <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>
                Ejercicios de PHP – Relación I
            </h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            <h2>Cálculo del total de una factura</h2>
            <form action="resultado.php" method="post">
                Base imponible (en euros)
                <input type="number" name="x" min="0" step="0.01" autofocus>
                <input type="submit" value="Aceptar">
            </form>
            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>

        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>
</body>

</html>