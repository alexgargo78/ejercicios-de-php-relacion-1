<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálcula la media de numeros positivos introducidos</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <p>Este programa calcula la media de los números positivos introducidos.<br>
                Introduce números uno a uno (puedes terminar escribiendo un número negativo).</p>

            <form action="resultado.php" method="post">
                <input type="number" name="n" autofocus required>
                <!-- inicializamos en 0 -->
                <input type="hidden" name="total" value="0">
                <input type="hidden" name="cuentaNumeros" value="0">
                <input type="submit" value="Aceptar">
            </form>

            <p><a href="../index.php">🏠 Página principal</a></p>
        </div>

        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>
</body>

</html>