<?php include 'ssetingan.php';?>
<html>
    <head>
        <title>Zodiak</title>
    </head>
    <body>
          <!-- Zodiak -->
        <!-- Aries = 21 Maret - 19 April -->
        <!-- Taurus = 20 April - 20 Mei -->
        <!-- Gemini = 21 Mei - 20 Juni -->
        <!-- Cancer = 21 Juni - 22 Juli -->
        <!-- Leo = 23 JUli - 22 Agustus -->
        <!-- Virgo = 23 Agustus - 22 September -->
        <!-- Libra = 23 Septembr - 22 Oktober -->
        <!-- Scorpio = 23 Oktober - 21 November -->
        <!-- Sagitarius = 22 November - 21 Desember -->
        <!-- Capricorn = 22 Desember - 19 Januari -->
        <!-- Aquarius = 20 Januari - 18 Febuari -->
        <!-- Pisces = 19 Febuari - 20 Maret -->
        <h1>Cek Zodiak berdasarkan tanggal dan bulan</h1>
        <h1>zodiak : </h1>

        <hr>
        <form action="" method="get">
            <label>Bulan</label>
            <select name="bulan">
                <option value="1">Januari</option>
                <option value="2">Febuari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br>
            <label>Tanggal</label>
            <input type="number" name="Tgl">
            <input type="submit" value="Cek Zodiak">
        </form>
        <a href="index.php">
            <button>Bersihkan</button>
        </a>
    </body>
</html>