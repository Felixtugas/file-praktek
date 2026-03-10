<?php include 'proses.php'; 

if(cek_data_get("status") == "imigran"){
    echo "
    <script>
    alert('JANGAN NASUK, ANDA ILEGAL!');
    </script>
    ";
}

?>

<html>
<head>
    <title>Login dan Register menggunakan MySql</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="user">
        <br>
        <label for="">Passworrd</label>
        <input type="password" name="pass">
        <br>
        <input type="submit" name="dor" value="Login">
    </form>
    <h2>Tidak punya akun? buat <a href="register.php">disini</a></h2>
</body>
</html>

