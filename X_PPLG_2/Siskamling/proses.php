<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "root",
    "Siskamling");

$data = [];
$query = mysqli_query($koneksi,"SELECT * FROM jadwal");
while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

if(isset($_POST['tambah'])){
    $cek = mysqli_query($koneksi,"SELECT * FROM jadwal");
    if(mysqli_num_rows($cek) >= 2){
        echo "<script>alert('Data maksimal hanya 2');location='Admin.php';</script>";
    }else{
        $senin = $_POST['senin'];
        $selasa = $_POST['selasa'];
        $rabu = $_POST['rabu'];
        $kamis = $_POST['kamis'];
        $jumat = $_POST['jumat'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai = $_POST['jam_selesai'];
        $jam = $jam_mulai." - ".$jam_selesai;
        mysqli_query($koneksi,"INSERT INTO jadwal VALUES(NULL,'$senin','$selasa','$rabu','$kamis','$jumat','$jam')");
        echo "<script>alert('Data berhasil ditambah');location='Admin.php';</script>";
    }
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($koneksi,"DELETE FROM jadwal WHERE id='$id'");
    echo "<script>alert('Data berhasil dihapus');location='Admin.php';</script>";
}

$edit = null;
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $q = mysqli_query($koneksi,"SELECT * FROM jadwal WHERE id='$id'");
    $edit = mysqli_fetch_assoc($q);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $senin = $_POST['senin'];
    $selasa = $_POST['selasa'];
    $rabu = $_POST['rabu'];
    $kamis = $_POST['kamis'];
    $jumat = $_POST['jumat'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $jam = $jam_mulai." - ".$jam_selesai;
    mysqli_query($koneksi,"UPDATE jadwal SET
        Senin='$senin',
        Selasa='$selasa',
        Rabu='$rabu',
        Kamis='$kamis',
        Jumat='$jumat',
        Jam='$jam'
        WHERE id='$id'
    ");
    echo "<script>alert('Data berhasil diupdate');location='Admin.php';</script>";
}

?>