<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculadora de segundos que faltan para la media noche</title>
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
            <h2>A continuación deberá introducir una hora del día.<br></h2>
            <form action="resultado.php" method="post">
                Hora: <input type="number" name="hora" min="0" max="23" required autofocus><br><br>
                Minuto: <input type="number" name="minuto" min="0" max="59" required><br><br>
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