<?php include 'proses.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <body>
        <title>CRUD Function</title>
    </head>
    <body>
        <h1>Tambah Sayur</h1>
        <form action="" method="get">
            <label>Sayur</label>
            <input type="text" name="sayur">
            <input type="submit" name="dor" value="tambah">
        </form>
        <a href="index.php">
            <button>Refresh</button>
        </a>
        <hr>
        <h1>Daftar Sayur</h1>
        <?php
        $num = 1;
        ?>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Sayur</th>
                <th colspan="2" >Aksi</th>
            </tr>
        <?php
        foreach(tampil() as $data){
            ?>
            <tr>
                <td><?= $num ?></td>
                <td><?= $data['nama'];?></td>
                <td><a href="hapus.php?id=<?= $data['id_sayur'];?>">hapus</a></td>
                <td><a href="rubah.php?id=<?= $data['id_sayur'];?>">rubah</a></td>
            </tr>
            <?php
            $num++;
        }
        ?>
        </table>
    </body>
</html>