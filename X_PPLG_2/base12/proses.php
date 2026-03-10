<?php

function db(){
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "root",
        "vegan",
    );
    return $koneksi;
    
}

function tambah($data){
    $query = "INSERT INTO sayur VALUES(NULL,'$data')";
    mysqli_query(db(),$query);
    ?>
    <script>
     alert("Data telah ditambahkan!");
    </script>
    <?php
}

function rubah($id, $data_baru){
    $query = "UPDATE sayur SET nama = '$data_baru' WHERE id_sayur = $id";
    mysqli_query(db(),$query);
    ?>
    <script>
     alert("Data telah dirubah!");
     location.href = "index.php";
    </script>
    <?php
}

function tampil(){
     $query = "SELECT * FROM sayur";
     $source = mysqli_query(db(), $query);
     return $source;
}

function cek_data($data){
     // isset = cek apakah datanya sudah di cek
     if(isset($_GET[$data]) == true){
          // null = data yang dkirin kosong
          if($_GET[$data] == null){
               return 0;
          }else{
               return $_GET[$data];
          }
     }else{
          return 0;
     }
}
//jika data dari dor sama dengan tambah
//panggil tambah(cek_data(sayur))
if (cek_data("dor") == "tambah"){
     tambah(cek_data("sayur"));
}else if(cek_data("dor") == "rubah"){
     rubah(cek_data("id"), cek_data("rubah_sayur"));
}

?>