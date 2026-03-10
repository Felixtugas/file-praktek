<?php

function cek_data($data){
    // jika isset sudah benar maka
    // kembalikan nilai nya 
    // lainnya, kembalikan "belum ada umur nya"
     if (isset($_GET[$data]) && $_GET[$data] !== "") {
        return $_GET[$data];
    } else {
        return "belum ada umur nya!";
    }
}
?>

<html>
    <head>
        <title>Cek umur</title>
    </head>
    <body>
        <form action=""method="get">
            <label>umur</label>
            <input type="number" name="umur">
            <input type="submit" value="cek umur">
        </form>
        <p>
             Hasil:<?php echo cek_data('umur');?>
        </p>
    </body>
</html>



















































































































































