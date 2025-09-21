<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de horas trabajadas durante la semana</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
           <h2>Por favor, introduzca el número de horas trabajadas durante la semana: <br></h2> 
            <form action="resultado.php" method="post">
                <input type="number" name="horas" autofocus>
                <button type="submit">Aceptar</button>
            </form>
            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>
        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>


</body>

</html>