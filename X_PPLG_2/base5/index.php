<?php
//include = ambil file php, dari mulai variable sampai outputnya
include 'db.php';

// mysqli_query = berguna untuk memanggil data sesuai perintah
$data = mysqli_query(
    $db_connect,
    "SELECT * FROM jadwal"
);

?>

<html>
    <head>
        <title>Guru Kesayangan</title>
    </head>
    <body>
        <h1>Daftar Guru </h1>
        <a href="tambah.php">Tambah data</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Mapel</th>
                <th>Nama Guru</th>
                <th>Hari</th>
            </tr>
            <?php
            foreach ($data as $x){
                ?>
                <tr>
                    <td><?= $x["no"]?></td>
                    <td><?= $x["mata_pelajaran"]?></td>
                    <td><?= $x["nama_guru"]?></td>
                    <td><?= $x["hari"]?></td>
                </tr>
                <?php
            };
            ?>
        </table>
    </body>
</html>




