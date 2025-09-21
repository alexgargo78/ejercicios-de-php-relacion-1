<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimiento de un alfil</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
   

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I
            </h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>
        <div id="content">
            <h2>Movimiento de un alfil</h2>
             <h2>Movimiento de un alfil</h2>

      <p>Introduzca las coordenadas del alfil (p. ej., <code>e4</code>):</p>
      <form action="resultado.php" method="post">
        <input type="text" name="posicion" maxlength="2"
               pattern="[a-hA-H][1-8]" required autofocus>
        <input type="submit" value="Aceptar">
      </form>
            <br>
            <br>
            <p><a href="../index.php">🏠 pagina principal</a></p>
        </div>
        <div id="footer">
            2025 © Alejandro García Gómez.
        </div>
    </div>


</body>

</html>