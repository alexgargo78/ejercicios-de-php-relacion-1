<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide</title>
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
            <h2>Pirámide</h2>
            <form action="resultado.php" method="post">
                <label>Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""></label><br><br>
                <Label>Figura base:</Label>
                <select name="figura">
                    <option value="bolita">Bolita</option>
                    <option value="ladrillo">Ladrillo</option>
                    <option value="pinguino">Pingüino</option>
                    <option value="pina">Piña</option>
                    <option value="sol">Sol</option>
                </select>
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