<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisca: 10 Cartas al azar y puntuación</title>
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
            <div id="content">
                <h2>Brisca: 10 Cartas al azar</h2>
                <p>Pulsa el botón para repartir 10 cartas de la baraja española y calcular los puntos.
                </p>

                <form action="resultado.php" method="post">
                    <input type="hidden" name="repartir" value="1">
                    <input type="submit" value="Repartir cartas">
                </form>


                <p><a href="../index.php">🏠 pagina principal</a></p>
            </div>
            <div id="footer">
                2025 © Alejandro García Gómez.
            </div>
        </div>


</body>

</html>