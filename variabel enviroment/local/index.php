<?php 
// variabel local hanya bisa di akses dari scope dimana dia di definisikan 
$nama = "guanteng bingits";

function halodunia(){
    $nama = "Pak Saiful"; //variabel local
    echo $nama ;

}

halodunia();
echo $nama ;


?>