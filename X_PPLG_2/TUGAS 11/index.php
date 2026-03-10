<?php 'kalkulasi.php'; ?>
<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <h1>Celcius = <span>⁰C</span></h1>
        <h1>Farenheit = <span>⁰F</span></h1>
        <h1>Kelvin = <span>⁰K</span></h1>
        <h1>Reamur = <span>⁰R</span></h1>
        <hr>
        <form action="" method="get">
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
        </form>
        <a href="index.php"><button>Bersihkan</button></a>
    </body>
</html>
function cek_data($data){
     if (isset($_GET[$data])== true){
          if($_GET[$data]== null){
               return 0;
          }else{
               return $_GET[$data];
          }
     } else{
          return 0;
     }
}


function cek_data_new ($data){
     (isset($data[$data])== true) ?($_GET[$data]== null) ? 0 : $_GET[$data] : 0;    
}


if($a == 10){
     echo "Ini angka 10";
}
else{
     echo "Ini bukan angka 10"; 
}