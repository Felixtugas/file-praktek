<?php

$Zodiak = NULL;
function cek_data($data){
     // isset = cek apakah datanya sudah di cek
     if(isset($_GET[$data]) == true){
          // null = data yang dkirin kosong
          if($_GET[$data] == null){
               return 0;
          }else{
               return $_GET[$data];
          }
     }else{
          return 0;
     }
}

$cek_bulan = cek_data("bulan");
$cek_tanggal = cek_data("tgl");
if ($cek_bulan == 1){

    // && = operator AND akan memberikan output 
    // ketika nilai keduanya itu benar 
    
    if($cek_tanggal >= 20 && $cek_tanggal <= 31){
        $zodiak = "Aquarius";
    }else if($cek_tanggal >= 1 && $cek_tanggal <=19){
        $Zodiak = "Capricorn";
    }
}elseif($cek_bulan == 2){
    if($cek_tanggal >= 1 && $cek_tanggal <= 18){
        $zodiak = "Aquarius";
    }elseif($cek_tanggal >= 19 && $cek_tanggal <= 28){
        $zodiak = "pisces";
    }
}
?>