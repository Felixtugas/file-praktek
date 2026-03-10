<?php
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

function luas_segitiga($alas, $tinggi){
    return 0.5 * cek_data($alas) * cek_data($tinggi);
}

function luas_lingkaran($jari){
    return pi() * cek_data($jari) * cek_data($jari);
}

function luas_persegi($sisi){
     return cek_data($sisi) * cek_data($sisi);
}
?>
