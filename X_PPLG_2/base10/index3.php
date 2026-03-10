<?php include 'system.php'; //include = mencegah app jalan jika ada error?>
<?php //require = mau error mau engga teteap jalan appnya?>
<html>
    <head>
        <title>Luas Persegi</title>
    </head>
    <body>
        <h1>Sisi = <?= cek_data("sisi"); ?> </h1>
        <h1>Hasil = <?= luas_persegi("sisi");?></h1>
        <hr>
        <form action=""method="get">
            <label>Sisi</label>
            <input type="number" name="sisi">
            <input type="submit" value="Hasil">
        </form>
        <a href="index.php">
                <button>Kembali ke menu</button>
            </a>
    </body>
</html>





