<?php
// Si se llega sin pulsar el formulario, vuelve a la portada del ejercicio
if (!isset($_POST['repartir'])) {
  header('Location: index.php');
  exit;
}

// Baraja española (40 cartas): 1–7, Sota, Caballo, Rey por cada palo
$palos   = ["oros", "copas", "espadas", "bastos"];
$valores = ["1","2","3","4","5","6","7","Sota","Caballo","Rey"];

// Puntos de la brisca
$puntos = [
  "1" => 11,
  "3" => 10,
  "Rey" => 4,
  "Caballo" => 3,
  "Sota" => 2,
  "2" => 0,
  "4" => 0,
  "5" => 0,
  "6" => 0,
  "7" => 0
];

// Construir baraja completa
$baraja = [];
foreach ($palos as $palo) {
  foreach ($valores as $valor) {
    $baraja[] = ["valor" => $valor, "palo" => $palo];
  }
}

// Mezclar y sacar 10 cartas sin repetición
shuffle($baraja);
$mano = array_slice($baraja, 0, 10);

// Calcular puntos y preparar filas
$total = 0;
$filas = [];
foreach ($mano as $carta) {
  $v = $carta["valor"];
  $p = $carta["palo"];
  $pts = $puntos[$v];
  $total += $pts;
  $filas[] = [
    "texto" => "{$v} de {$p}",
    "puntos" => $pts
  ];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Brisca: 10 Cartas al azar y puntuación</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación I</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <h2>Cartas repartidas y puntuación</h2>

            <table>
                <thead>
                    <tr>                        
                    <strong><th>#</th></strong>                        
                    <strong><th>Carta</th></strong>
                    <strong><th>Puntos (brisca)</th></strong>
                   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filas as $i => $fila): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($fila["texto"]) ?></td>
                        <td style="text-align:right;"><?= $fila["puntos"] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="2" style="text-align:right;"><strong>Total</strong></td>
                        <td style="text-align:right;"><strong><?= $total ?></strong></td>
                    </tr>
                </tbody>
            </table>



            <p><a href="index.php">← Volver al ejercicio</a></p>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>
        <div id="footer">2025 © Alejandro García Gómez.</div>
    </div>

</body>

</html>