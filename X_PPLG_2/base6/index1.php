<?php
// fungsi nama (parameter)
function best_moment(){
    echo"Ulang Tahun";
}

function best_of_month($bulan){
    echo $bulan, " adalah bulan terbaik";
}

//parameter bisa lebih dari 1
function tambah($a, $b){
    echo $a,"+",$b,"=",($a+$b);
}
?>
<html>
    <head>
        <title>Function ajah</title>
    </head>
    <body>
        <h1><?php best_moment();?></h1>
        <h1><?php best_of_month("Desember");?></h1>
        <h1><?php tambah(6,6);?></h1>
    </body>
</html>
