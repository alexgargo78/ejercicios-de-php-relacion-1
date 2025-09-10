<?php
// index.php en la carpeta principal (src/ejercicios/)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios de PHP - Relación 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
            text-align: center;
        }
        h1 {
            margin-top: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        li {
            margin: 10px;
        }
        a {
            display: block;
            padding: 12px 18px;
            background: #007BFF;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Ejercicios de PHP - Relación 1</h1>
    <p>Selecciona un ejercicio para probarlo:</p>
    <ul>
        <?php
        // Generamos enlaces a los ejercicios 01 - 15
        for ($i = 1; $i <= 15; $i++) {
            $num = str_pad($i, 2, "0", STR_PAD_LEFT);
            echo "<li><a href='ejercicio$num/index.php'>Ejercicio $num</a></li>";
        }
        ?>
    </ul>
</body>
</html>

