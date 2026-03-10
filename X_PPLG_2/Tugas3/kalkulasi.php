<?php
// Nilai default
$C = $F = $K = $R = "";

if (isset($_GET['dor'])) {

    // celcius
    if ($_GET['dor'] == "Hitung" && $_GET['Celcius'] !== "") {
        $C = $_GET['Celcius'];
        $F = ($C * 9/5) + 32;
        $K = $C + 273.15;
        $R = (4/5) * $C;
    }

    // farenhet
    if ($_GET['dor'] == "Hitung_F" && $_GET['Fareneit'] !== "") {
        $F = $_GET['Farenheit'];
        $C = ($F - 32) * 5/9;
        $K = $C + 273.15;
        $R = (4/5) * $C;
    }

    // kelvin
    if ($_GET['dor'] == "Hitung_K" && $_GET['Kelvin'] !== "") {
        $K = $_GET['Kelvin'];
        $C = $K - 273.15;
        $F = ($C * 9/5) + 32;
        $R = (4/5) * $C;
    }

    // reamur
    if ($_GET['dor'] == "Hitung_R" && $_GET['Reamur'] !== "") {
        $R = $_GET['Reamur'];
        $C = (5/4) * $R;
        $F = ($C * 9/5) + 32;
        $K = $C + 273.15;
    }
}
?>
