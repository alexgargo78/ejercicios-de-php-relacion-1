<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Iva</title>
</head>

<body>
    <h2>Calculadora de IVA (21%)</h2>

    <form method="get" action="resultado.php">
        <label for="base">Base imponible (€):</label>
        <input type="number" step="0.01" name="base" id="base" required>
        <button type="submit">Calcular</button>
    </form>

    <p><a href="../index.php">🏠 pagina principal</a></p>
</body>

</html>