<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Saludo según la hora</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">

            <h2>Saludo según la hora</h2>

            <form action="resultado.php" method="post">
                <label for="h">Introduce la hora (0–23):</label>
                <input type="number" id="h" name="h" min="0" max="23" required>
                <button type="submit">Saludar</button>
            </form>            

            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>
        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>
</body>

</html>