<?php 
function cek_data($data){
    if (isset($_GET[$data]) == true) {
        if ($_GET[$data] == null) {
            return "Tombol sudah diklik, tapi anda belum isi";
        } else {
            return $_GET[$data];
        }
    } else {
        return "anda belum mengisi dan klik tombol";
    }
}

//             return "tombol sudah dikilik, tapi anda belum isi";
//         }else{
//             return $_GET[$data];
//         }else{
//         return "anda belum mengisi dan klik tombol";
//         }
//     }
// }

?>

<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1><?php echo cek_data('angka1'); ?></h1>
        <hr>
        <form action=""method="get">
            <label>Angka Pertama</label>
            <input type="number" name="angka1">
            <input type="submit" value="Cek Angka">
        </form>
    </body>
</html>

