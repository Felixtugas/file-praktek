<?php

// super global variable
// $_GET['nama input'] = ambil data get
// $_POST['nama input'] = ambil data post

// shorthand if else

$umur = 17;
if($umur < 18){
    // echo "tidak dapat ktp";
}else{
    // echo "dapat ktp";
}
 
//shorthaand if else

$ya = ($umur < 18) ? "tidak dapat ktp" : "dapat ktp";
echo $ya;

?>