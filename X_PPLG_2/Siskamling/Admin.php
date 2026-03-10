<?php
include 'proses.php';
?>

<html>
<head>
<link rel="stylesheet" href="Admin.css">
<title>Admin Jadwal</title>
</head>

<body>

<h1>Admin Jadwal Siskamling</h1>

<form method="post">
<input type="hidden" name="id" value="<?= $edit['id'] ?? '' ?>">

<label>Senin</label><br>
<input type="text" name="senin" value="<?= $edit['Senin'] ?? '' ?>"><br>

<label>Selasa</label><br>
<input type="text" name="selasa" value="<?= $edit['Selasa'] ?? '' ?>"><br>

<label>Rabu</label><br>
<input type="text" name="rabu" value="<?= $edit['Rabu'] ?? '' ?>"><br>

<label>Kamis</label><br>
<input type="text" name="kamis" value="<?= $edit['Kamis'] ?? '' ?>"><br>

<label>Jumat</label><br>
<input type="text" name="jumat" value="<?= $edit['Jumat'] ?? '' ?>"><br>

<label>Jam</label><br>
<input type="time" name="jam_mulai"> -
<input type="time" name="jam_selesai"><br><br>

<?php if($edit){ ?>

<button name="update">UPDATE</button>

<?php }else{ ?>

<button name="tambah">TAMBAH</button>

<?php } ?>

</form>

<hr>

<table border="1" cellpadding="10">

<tr>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
<th>Jam</th>
<th>Aksi</th>
</tr>

<?php foreach($data as $x){ ?>

<tr>

<td><?= $x['Senin'] ?></td>
<td><?= $x['Selasa'] ?></td>
<td><?= $x['Rabu'] ?></td>
<td><?= $x['Kamis'] ?></td>
<td><?= $x['Jumat'] ?></td>
<td><?= $x['Jam'] ?></td>

<td>
<a href="Admin.php?edit=<?= $x['id'] ?>">Edit</a> |
<a href="Admin.php?hapus=<?= $x['id'] ?>">Hapus</a>
</td>

</tr>

<?php } ?>

</table>

<br>

</body>
</html>