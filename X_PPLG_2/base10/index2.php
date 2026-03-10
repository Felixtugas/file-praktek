
<?php include 'system.php'; //include = mencegah app jalan jika ada error?>
<?php //require = mau error mau engga teteap jalan appnya?>
<html>
    <head>
        <title>Luas Lingkaran</title>
    </head>
    <body>
        <h1>r = <?= cek_data("jari"); ?> </h1>
        <h1>Hasil = <?= luas_lingkaran("jari"); ?></h1>
        <hr>
        <form action=""method="get">
            <label>r</label>
            <input type="number" name="jari">
            <input type="submit" value="Hasil">
        </form>
        <a href="index.php">
            <button>Kembali ke menu</button>
        </a>
    </body>
</html>





