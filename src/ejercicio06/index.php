<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo a partir de su fecha de nacimiento</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">   
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            <h2>Este programa le dirá cuál es su horóscopo a partir de su fecha de nacimiento.<br></h2>
            <form action="resultado.php" method="post">
                
                Introduzca el número del mes en que nació (1-12):<br><br>
                <input type="number" min="1" max="12" name="mes" autofocus><br><br>
                Introduzca el día:<br><br>
                <input type="number" min="1" max="31" name="dia"><br><br>
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