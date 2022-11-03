<?php

// cara membuat function 
function ngoding(){

}

// function bisa di kategorikan menggunakan publik ,protected,private
class vscode{
    public function coding_php(){

    }
}

// mencoba buat fungsi sapa teman 
function sapa_temen(){
    echo "<h1>Hai gais </h1>";
    echo "<h3>ketemu lagi sama gw</h3>";
}

// mencoba membuat fungsi yang ada paramenter
function temen($temen_gw, $umur){
    
    echo "<h2>hai disini gw sama {$temen_gw}</h2>";
    echo "<h2>umur dia segini  {$umur}</h2>";

}


// cara panggil fungsi
// tuliskan nama fungsinya bersama ()
sapa_temen();

// jika fungsi menggunakan paramenter,harus ditulis saat pemanggilannya
temen("awe", "20");

// mencoba membuat fungsi menggunakan percobankan
function kasir($nama, $jumlah){
    echo "<h3>Hai {$nama}, terimakasih telah berkunjung </h3>";
    echo "<h3>jangan lupa kembali </h3>";

    // membuat perulngan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10){
        echo "<h3>Gokil kaamu dapat mobil baru karna telah berkunjung sebanyak {$jumlah} kali </h3>";

    }

}

// panggi fungsinya
kasir("Rafa", 11);





?>