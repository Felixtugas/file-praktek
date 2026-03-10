<?php include 'system.php'; //include = mencegah app jalan jika ada error?>
<?php //require = mau error mau engga teteap jalan appnya?> 
<html>
    <head>
        <title>Luas segitiga</title>
    </head>
    <body>
        <h1>Alas = <?= cek_data("alas"); ?> </h1>
        <h1>Tinggi = <?= cek_data("tinggi"); ?> </h1>
        <h1>Hasil = <?= luas_segitiga("alas","tinggi");?></h1>
        <hr>
        <form action=""method="get">
            <label>Alas</label>
            <input type="number" name="alas">
            <label>Tinggi</label>
            <input type="number" name="tinggi">
            <input type="submit" value="Hasil">
        </form>
        <a href="index.php">
                <button>Kembali ke menu</button>
            </a>
    </body>
</html>





