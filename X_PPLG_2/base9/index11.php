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

function hasil(){
     if ( cek_data('+') == 'Tambah'){
          return cek_data('angka1') + cek_data('angka2');
     }elseif( cek_data('-') == 'Kurang'){
          return cek_data('angka1') - cek_data('angka2');
     }
}
?>
<html>
<head>
     <title>Best Practice</title>
</head>
<body>
     <h2>Angka 1 = <?= cek_data('angka1');?></h2>
     <h2>Angka 2 = <?= cek_data('angka2');?></h2>
     <h2>Hasil = <?= hasil(); ?></h2>
     <hr>
     <form action="" method="get">
          <label>angka ke 1</label>
          <input type="number" name='angka1'>
          <br>
          <label>angka ke 2</label>
          <input type="number" name='angka2'>
          <br>
          <input type="submit" name='+' value="Tambah">
          <input type="submit" name='-' value="Kurang">
     </form>
</body>
</html