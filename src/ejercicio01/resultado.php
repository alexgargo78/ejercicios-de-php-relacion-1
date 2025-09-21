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
      <h2>Resultado de la conversión</h2>
      <?php
        $x = $_POST["x"];
        $conversion = $x * 166.386;
        echo "<p>$x € son $conversion ₧</p>";
      ?>
      <p><a href="index.php">← Volver al ejercicio</a></p>
      <p><a href="../index.php">🏠 página principal</a></p>
    </div>

    <div id="footer">
      © 2025 Alejandro García Gómez
    </div>
  </div>
</body>

</html>