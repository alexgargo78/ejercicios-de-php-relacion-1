<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Pesetas</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            <h2>Volumen de un Cono</h2>
            <p>Volumen de un cono mediante la formula</p>
            <i> "v = (1/3)πr <sup>2</sup>"h"</i>
            <br><br>
            <form  action="resultado.php" method="post">
                <label>Radio (r):
                    <input type="number" step="0.1" name="radio" required>
                </label><br><br>

                <label>Altura (h):
                    <input type="number" step="0.1" name="altura" required>
                </label><br><br>
                <button type="submit">Calcular</button>

            </form>

            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>
        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>

</body>

</html>