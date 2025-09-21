<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra la tabla de multiplicar de un número introducido por teclado.</title>
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
            Por favor, introduzca un número del 0 al 10: <br><br>
            <form action="resultado.php" method="post">             
                <input type="number" name="n" min="0" max="10"><br><br>
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