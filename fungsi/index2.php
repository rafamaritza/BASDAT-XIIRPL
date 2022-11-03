<?php

// function itu ada dua , ada yang mengembalikan nilai ada yg tidk
// array yang berisi 3 niali
$a = ['merah', 'kuning', 'hijau'];

// fungsi is_null itu mengembalikan nilai berniali true or false
$fungsi_is_null = is_null($a);

// fungsi dari is_array itu mengembalikan apakah array atau tdk 
$fungsi_is_array = is_array($a);

// fungsi dari count
$panjang = count($a);

// fungsi mengenkripsi karakter MD5
$enkripsi = md5('hahaha');

// fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br/>";
var_dump($fungsi_is_array);
echo "<br/>";
var_dump($panjang);
echo "<br/>";
var_dump($enkripsi);




?>