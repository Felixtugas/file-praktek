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
function register($username,$password){
    $query = "INSERT INTO user VALUES(NULL,'$username','$password','$username')";
    mysqli_query(db(),$query);
    ?>
    <script>
     alert("Akun telah ditambah!");
    </script>
    <?php
}

function cek_table($username, $password){
     $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
     $data = mysqli_query(db(), $query);
     if($data->num_rows == 0){
          ?>
          <script>
               alert("Data anda tidak ditemukan!!");
          </script>
          <?php
     }else{
          ?>
          <script>
               alert("Selamat Datang!");
               location.href="user/index.php";
          </script>
          <?php
     }
}

function cek_data($data){
     // isset = cek apakah datanya sudah di cek
     if(isset($_POST[$data]) == true){
          // null = data yang dkirin kosong
          if($_POST[$data] == null){
               return 0;
          }else{
               return $_POST[$data];
          }
     }else{
          return 0;
     }
}
function cek_data_get($data){
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


$dor = cek_data("dor");

if($dor == "Register"){
    register(cek_data("user_reg"), cek_data("pass_reg"));
}else if($dor == "Login"){
     cek_table(cek_data("user"), cek_data("pass"));
} 
?>





