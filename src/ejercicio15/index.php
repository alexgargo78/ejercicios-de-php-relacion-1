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
            <table>
                <!-- Cabecera letras -->
                <tbody>
                    <tr class="marron">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>

                    <!-- Tablero -->
                    <tr>
                        <td class="borde">8</td>
                        <td class="sq blanco" title="a8">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="b8">
                        </td>
                        <td class="sq blanco" title="c8">
                        </td>
                        <td class="sq negro" title="d8">
                        </td>
                        <td class="sq blanco" title="e8">
                        </td>
                        <td class="sq negro" title="f8">
                        </td>
                        <td class="sq blanco" title="g8">
                        </td>
                        <td class="sq negro" title="h8">
                        </td>
                        <td class="borde">8</td>
                    </tr>
                    <tr>
                        <td class="borde">7</td>
                        <td class="sq negro" title="a7">
                        </td>
                        <td class="sq blanco" title="b7">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="c7">
                        </td>
                        <td class="sq blanco" title="d7">
                        </td>
                        <td class="sq negro" title="e7">
                        </td>
                        <td class="sq blanco" title="f7">
                        </td>
                        <td class="sq negro" title="g7">
                        </td>
                        <td class="sq blanco" title="h7">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="borde">7</td>
                    </tr>
                    <tr>
                        <td class="borde">6</td>
                        <td class="sq blanco" title="a6">
                        </td>
                        <td class="sq negro" title="b6">
                        </td>
                        <td class="sq blanco" title="c6">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="d6">
                        </td>
                        <td class="sq blanco" title="e6">
                        </td>
                        <td class="sq negro" title="f6">
                        </td>
                        <td class="sq blanco" title="g6">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="h6">
                        </td>
                        <td class="borde">6</td>
                    </tr>
                    <tr>
                        <td class="borde">5</td>
                        <td class="sq negro" title="a5">
                        </td>
                        <td class="sq blanco" title="b5">
                        </td>
                        <td class="sq negro" title="c5">
                        </td>
                        <td class="sq blanco" title="d5">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="e5">
                        </td>
                        <td class="sq blanco" title="f5">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="g5">
                        </td>
                        <td class="sq blanco" title="h5">
                        </td>
                        <td class="borde">5</td>
                    </tr>
                    <tr>
                        <td class="borde">4</td>
                        <td class="sq blanco" title="a4">
                        </td>
                        <td class="sq negro" title="b4">
                        </td>
                        <td class="sq blanco" title="c4">
                        </td>
                        <td class="sq negro" title="d4">
                        </td>
                        <td class="sq blanco" title="e4">
                            <img src="../img/alfil.png" alt="alfil">
                        </td>
                        <td class="sq negro" title="f4">
                        </td>
                        <td class="sq blanco" title="g4">
                        </td>
                        <td class="sq negro" title="h4">
                        </td>
                        <td class="borde">4</td>
                    </tr>
                    <tr>
                        <td class="borde">3</td>
                        <td class="sq negro" title="a3">
                        </td>
                        <td class="sq blanco" title="b3">
                        </td>
                        <td class="sq negro" title="c3">
                        </td>
                        <td class="sq blanco" title="d3">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="e3">
                        </td>
                        <td class="sq blanco" title="f3">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="g3">
                        </td>
                        <td class="sq blanco" title="h3">
                        </td>
                        <td class="borde">3</td>
                    </tr>
                    <tr>
                        <td class="borde">2</td>
                        <td class="sq blanco" title="a2">
                        </td>
                        <td class="sq negro" title="b2">
                        </td>
                        <td class="sq blanco" title="c2">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="d2">
                        </td>
                        <td class="sq blanco" title="e2">
                        </td>
                        <td class="sq negro" title="f2">
                        </td>
                        <td class="sq blanco" title="g2">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="h2">
                        </td>
                        <td class="borde">2</td>
                    </tr>
                    <tr>
                        <td class="borde">1</td>
                        <td class="sq negro" title="a1">
                        </td>
                        <td class="sq blanco" title="b1">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="sq negro" title="c1">
                        </td>
                        <td class="sq blanco" title="d1">
                        </td>
                        <td class="sq negro" title="e1">
                        </td>
                        <td class="sq blanco" title="f1">
                        </td>
                        <td class="sq negro" title="g1">
                        </td>
                        <td class="sq blanco" title="h1">
                            <img src="../img/alfilsemitransparente.png" alt="destino">
                        </td>
                        <td class="borde">1</td>
                    </tr>

                    <!-- Pie letras -->
                    <tr class="marron">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <p>Introduzca las coordenadas del alfil (p. ej., <code>e4</code>):</p>
            <form action="resultado.php" method="post">
                <input type="text" name="posicion" maxlength="2" pattern="[a-hA-H][1-8]" required autofocus>
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