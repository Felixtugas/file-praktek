<?php
function cek_data($data){
    // isset = cek apakah datanya sudah di cek
    if(isset($_GET[$data]) == true){
        // NULL = data yang dikirim kosong
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

// angka 1 dan 2 nya tidak muncul
function hasil(){
    if (cek_data('+') == "Tambah"){
        return cek_data('angka1') + cek_data('angka2');
    }else if(cek_data('-') == "Kurang"){
        return cek_data('angka1') - cek_data('angka2');
    }
}
?>

<html>
    <head>
        <title>Best Practice</title>
    </head>
    <body>
        <h2>Angka 1 = <?= cek_data('angka 1')?></h2>
        <h2>Angka 2 = <?= cek_data('angka 2')?></h2>
        <h2>Hasil = <?= hasil(); ?></h2>
        <hr>
        <form action="" method="get">
            <label>Angka 1</label>
            <input type="number" name="angka1">
            <br>
            <label>Angka 2</label>
            <input type="number" name="angka2">
            <br>
            <input type="submit" name="+" value="Tambah">
            <input type="submit" name="-" value="Kurang">
        </form>
    </body>
</html>
 



