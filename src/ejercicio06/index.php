<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo a partir de su fecha de nacimiento</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <!DOCTYPE html>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            Este programa le dirá cuál es su horóscopo a partir de su fecha de nacimiento.<br>
            <form method="post" action="resultado.php">
                Introduzca el número del mes en que nació (1-12):<br>
                <input type="number" min="1" max="12" name="mes" autofocus><br>
                Introduzca el día:<br>
                <input type="number" min="1" max="31" name="dia"><br>
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