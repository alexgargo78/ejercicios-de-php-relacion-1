<?php
    $alturaIntroducida = $_POST['alturaIntroducida'] ?? 0;
    $figura = $_POST['figura'] ?? 'bolita';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pirámide</title>
   <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <h2>Pirámide de <?= htmlspecialchars($figura) ?> (altura <?= $alturaIntroducida ?>)</h2>

            <div class="piramide">
                <?php for ($i=1; $i<=$alturaIntroducida; $i++): ?>
                <div class="piramide-row">
                    <?php for ($j=1; $j<=$i; $j++): ?>
                    <img src="../img/<?= htmlspecialchars($figura) ?>.png" alt="">
                    <?php endfor; ?>
                </div>
                <?php endfor; ?>
            </div>
            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>