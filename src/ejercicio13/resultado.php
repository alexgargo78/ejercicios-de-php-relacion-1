 <?php
  $n = isset($_POST['n']) ? (int)$_POST['n'] : 0;

  // Calcular factorial
  if ($n < 0) {
    $mensaje = "El factorial no está definido para números negativos.";
  } else {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
      $factorial *= $i;
    }
    $mensaje = "El factorial de $n es <strong>$factorial</strong>";
  }
?>
 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8">
     <title>Factorial de un número entero</title>
     <link rel="stylesheet" href="../css/style.css" />
 </head>

 <body>
     <div id="container">
         <div id="header">
             <h1>Ejercicios de PHP – Relación I</h1>
             <h2>Certificaciones de Profesionalidad</h2>
         </div>

         <div id="content">

             <h2>Resultado</h2>
             <p><?= $mensaje ?></p>

             <p><a href="index.php">← Volver al ejercicio</a></p>
             <p><a href="../index.php">🏠 página principal</a></p>
         </div>
         <div id="footer">2025 © Alejandro García Gómez.</div>
     </div>

 </body>

 </html>