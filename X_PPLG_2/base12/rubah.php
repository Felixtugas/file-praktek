<?php include 'proses.php';
// mencari sayur yang id nya sama dengan id di URL
$query = "SELECT * FROM sayur WHERE id_sayur=".cek_data("id");
// memanggil fungsi sql query
$data =  mysqli_query(db(), $query);
//memanggil data dari perintahnya 
$x =mysqli_fetch_assoc($data);
// fetch = ambil
// assoc = array dalam array(assosiatif data)
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Rubah Sayur</h1>
    <h1>Pastikan nama sayurnya beneerrrrrrrrrrr</h1>
    <form action="" method="get">
            <label>Rubah Sayur</label>
            <input type="hidden" name="id" value="<?= $x['id_sayur']; ?>">
            <input type="text" name="rubah_sayur" placeholder="<?= $x['nama']; ?>">
            <input type="submit" name="dor" value="rubah">
     </form>
</body>
</html>
