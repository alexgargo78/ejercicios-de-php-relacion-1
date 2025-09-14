<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Saludo según la hora</title>
</head>

<body>

    <h1>Saludo según la hora</h1>

    <form method="post" action="resultado.php">
        <label for="h">Introduce la hora (0–23):</label>
        <input type="number" id="h" name="h" min="0" max="23" required>
        <button type="submit">Saludar</button>
    </form>

    <p><a href="../index.php">⬅ Volver al índice</a></p>
</body>

</html>