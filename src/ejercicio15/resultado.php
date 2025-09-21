<?php
// Leer posición (ejemplo: e4)
$raw = $_POST['posicion'] ?? '';
$raw = strtolower(trim($raw));
if (!preg_match('/^[a-h][1-8]$/', $raw)) {
  header('Location: index.php');
  exit;
}

$col = $raw[0];          // letra a..h
$fila = (int)$raw[1];    // número 1..8

// convertir a coordenadas 1..8
$x0 = ord($col) - ord('a') + 1;
$y0 = $fila;

// color de cada casilla
function claseColor($x, $y) {
  return (($x + $y) % 2 === 0) ? 'negro' : 'blanco';
}

// ¿es alcanzable por el alfil?
function esMovimiento($x, $y, $x0, $y0) {
  return abs($x - $x0) === abs($y - $y0) && !($x === $x0 && $y === $y0);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Movimiento de un alfil</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <style>
    table,
    td {
        border-collapse: collapse;
    }

    td.sq {
        width: 48px;
        height: 48px;
        text-align: center;
    }

    td.negro {
        background: #000;
    }

    td.blanco {
        background: #fff;
    }

    tr.marron,
    td.borde {
        background: brown;
        color: #fff;
        font-weight: bold;
    }

    td img {
        width: 40px;
        height: 40px;
    }
    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <h2>Movimiento de un alfil desde <?= htmlspecialchars($raw) ?></h2>

            <table>
                <!-- Cabecera letras -->
                <tr class="marron">
                    <td></td>
                    <?php foreach (range('a','h') as $letra): ?>
                    <td><?= $letra ?></td>
                    <?php endforeach; ?>
                    <td></td>
                </tr>

                <!-- Tablero -->
                <?php for ($y = 8; $y >= 1; $y--): ?>
                <tr>
                    <td class="borde"><?= $y ?></td>
                    <?php for ($x = 1; $x <= 8; $x++):
              $cls = claseColor($x, $y);
              $title = chr(ord('a') + $x - 1) . $y;
            ?>
                    <td class="sq <?= $cls ?>" title="<?= $title ?>">
                        <?php if ($x === $x0 && $y === $y0): ?>
                        <img src="../img/alfil.png" alt="alfil">
                        <?php elseif (esMovimiento($x, $y, $x0, $y0)): ?>
                        <img src="../img/alfilsemitransparente.png" alt="destino">
                        <?php endif; ?>
                    </td>
                    <?php endfor; ?>
                    <td class="borde"><?= $y ?></td>
                </tr>
                <?php endfor; ?>

                <!-- Pie letras -->
                <tr class="marron">
                    <td></td>
                    <?php foreach (range('a','h') as $letra): ?>
                    <td><?= $letra ?></td>
                    <?php endforeach; ?>
                    <td></td>
                </tr>
            </table>

            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>