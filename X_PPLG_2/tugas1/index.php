<?php
include 'kalkulasi.php';

$C = $F = $K = $R = 0;

if (isset($_GET['dor'])) {

    switch ($_GET['dor']) {
        case 'Hitung_C':
            $C = C('Celcius');
            $F = C_F('Celcius');
            $K = C_K('Celcius');
            $R = C_R('Celcius');
        break;

        case 'Hitung_F':
            $C = F_C('Farenheit');
            $F = F('Farenheit');
            $K = F_K('Farenheit');
            $R = F_R('Farenheit');
        break;

        case 'Hitung_K':
            $C = K_C('Kelvin');
            $F = K_F('Kelvin');
            $K = K('Kelvin');
            $R = K_R('Kelvin');
        break;

        case 'Hitung_R':
            $C = R_C('Reamur');
            $F = R_F('Reamur');
            $K = R_K('Reamur');
            $R = R('Reamur');
        break;
    }
}
?>
<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <h1>Celcius = <?= $C?></h1>
        <h1>Farenheit = <?= $F ?></h1>
        <h1>Kelvin = <?= $K ?></h1>
        <h1>Reamur = <?= $R ?></h1>
        <hr>

        <form method="get">
            <label>Celcius</label>
            <input type="number" name="Celcius">
            <input type="submit" name="dor" value="Hitung_C">
            <br>

            <label>Farenheit</label>
            <input type="number" name="Farenheit">
            <input type="submit" name="dor" value="Hitung_F">
            <br>

            <label>Kelvin</label>
            <input type="number" name="Kelvin">
            <input type="submit" name="dor" value="Hitung_K">
            <br>

            <label>Reamur</label>
            <input type="number" name="Reamur">
            <input type="submit" name="dor" value="Hitung_R">
            <br>
        </form>
        <a href="index.php"><button>Bersihkan</button></a>
    </body>
</html>

