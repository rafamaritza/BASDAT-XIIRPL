<?php

// array adalah tipe data yg berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst

// array asosiatif
// keynya berubah menjadi tipe data string
$siswa = [
    // keynya bisa integer/string
    1 => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi',


];
// echo "siapa yang sialing ganteng? {$siswa[1]}";

// array Multidimension
// ada array di dalam array

$togel = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 22],
    [12, 15, 13, 14, 51],
    [19, 21, 31, 47, 35]
];

// cara memanggil array
// echo $togel[2][4];

// array push
// array push berguna untuk menerima 2 paramenter , paramenter pertama:unruk target, paramenter kedua untuk niali yang akn dimasukan

$sayur = ['bayem', 'kangkung', 'sawi'];
$buah = ['pisang', 'kelapa', 'coklat'];

// cara pertama untuk menambahkan item
array_push($buah, 'timun');

// cara yang kedua 
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];


?>