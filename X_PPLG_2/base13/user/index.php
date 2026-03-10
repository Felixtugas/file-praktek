<?php
session_start(); //selalu dipakai setiap session
// jika session kunci adalah kosong  

if(isset($_SESSION) == TRUE){
    header("Location:../index.php?status=imigran");
    if($_SESSION["kunci"] == "kosong"){
        header("Location:../index.php");
    }
}
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h2>Dashboard</h2>
</body>
</html>