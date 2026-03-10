<?php

include 'proses.php';

function hapus($data){
    $query = "DELETE FROM sayur WHERE id_sayur = '$data'";
    mysqli_query(db(), $query);
}

hapus(cek_data("id"));
?>

<script>
    alert("Data telah dihapus!");
    location.href="index.php";
</script>
<?php


?>