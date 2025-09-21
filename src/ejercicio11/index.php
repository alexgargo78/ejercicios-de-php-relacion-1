<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci.</title>
    <link rel="stylesheet" href="../css/style.css" />
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
            Este programa muestra los n primeros números de la serie de Fibonacci.<br><br>
            Por favor, introduzca n:<br><br>

            <form action="resultado.php" method="post">
                <input type="number" name="n" min="1" required>
                <input type="submit" value="Mostrar">
            </form>
            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>
        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>


</body>

</html>