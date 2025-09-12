<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Iva</title>
</head>

<body>
    <h2>Resultado del cálculo</h2>

    <?php
    $base = $_GET["base"] ?? 0;
    $iva = $base * 0.21;
    $total = $base + $iva;
    ?>
    

        
    <p>Base imponible: <?= $base ?> €</p>
    <p>IVA (21%): <?= $iva ?> €</p>
    <p>Total: <?= $total ?> €</p>
   
    
    <p><a href="index.php">⬅ Volver al ejercicio</a></p>
    <p><a href="../index.php">🏠 pagina principal</a></p>
</body>

</html>