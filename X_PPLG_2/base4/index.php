<?php

// Looping for using list
$sayur = ["jagung","asem","melinjo","labu siam"];

// tampilkan 

// echo $sayur[0];
// echo "<br>";
// echo $sayur[1];
// echo "<br>";
// echo $sayur[2];
// echo "<br>";
// echo $sayur[3];
// echo "<br>";

// for (start from, boolean, step)
for ($a = 0; $a <= 3; $a++){
    echo $sayur [$a];
    echo "<br>";
}

// foreach (target as alias)

foreach($sayur as $a){
    echo $a;
    echo "<br>";
}

?>