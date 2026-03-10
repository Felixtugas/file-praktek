<?php
include 'proses.php';
?>

<html>
<head>
<link rel="stylesheet" href="Jadwal.css">
<title>Jadwal Siskamling</title>
</head>

<body>

<h1>Jadwal Siskamling</h1>

<table border="1" cellpadding="10">

<tr>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
<th>Jam</th>
</tr>

<?php foreach($data as $x){ ?>

<tr>
<td><?= $x['Senin'] ?></td>
<td><?= $x['Selasa'] ?></td>
<td><?= $x['Rabu'] ?></td>
<td><?= $x['Kamis'] ?></td>
<td><?= $x['Jumat'] ?></td>
<td><?= $x['Jam'] ?></td>
</tr>

<?php } ?>

</table>

<br>

<a href="Jadwal.php">
<button>Refresh</button>
</a>

</body>
</html>