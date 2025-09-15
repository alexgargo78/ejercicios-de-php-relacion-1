<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Saludo según la hora</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">

            <h1>Saludo según la hora</h1>

            <form method="post" action="resultado.php">
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