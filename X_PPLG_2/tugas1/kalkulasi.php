<?php
function cek_data($data){
     if(isset($_GET[$data]) == true){
          if($_GET[$data] == null){
               return 0;
          }else{
               return $_GET[$data];
          }
     }else{
          return 0;
     }
}

function C($C){
    return cek_data($C);
}
function F($F){
    return cek_data($F);
}
function K($K){
    return cek_data($K);
}
function R($R){
    return cek_data($R);
}

function C_F($C){
    return (cek_data($C) * 9/5) + 32;
}
function C_K($C){
    return (cek_data($C) + 273.15);
}
function C_R($C){
    return (4/5) * cek_data($C);
}

function F_C($F){
    return (cek_data($F) - 32) * 5/9;
}
function F_K($F){
    return (cek_data($F) - 32) * 5/9 + 273.15;
}
function F_R($F){
    return (cek_data($F) - 32) * 4/9;
}

function K_C($k){
    return cek_data($k) - 273.15;
}
function K_F($K){
    return 1.8 * (cek_data($K) - 273.15) + 32;
}
function K_R($K){
    return (cek_data($K) - 273.15) * 4/5;

}
function R_C($R){
    return cek_data($R) * 5/4;
}
function R_F($R){
    return cek_data($R) * 9/4 + 32;
}
function R_K($R){
    return (cek_data($R) / 0.8) + 273.15;
}
?>



