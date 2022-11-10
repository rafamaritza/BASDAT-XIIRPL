<?php

$warnaterang = ['kuning', 'hijau', 'pink'];
$warnagelap = ['hitam', 'abu-abu', 'cokelat'];

// Gabungkan 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang, $warnagelap);

// array_merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['magenta', 'cyan', 'hijau kelapu']
);

// unpacking untukmengekstrak array menggunakan..
$list_buah_lokal = ['mangga', 'rambutan'];
$list_buah = ['kurma', 'anggur', $list_buah_lokal, 'kismis'];

// kurma , anggur , mangga , rambutan, kismis
// explode array berfungsi memecah belah string lalu di ubah kedalam array 
// exld ada 22 pparamenter : delimiter(pemisah) , string sasaran (sasaran yang akan kita pecah menjadi array)

$siswa  = "caca rafa maritza uwuu";
// var_dump(explode(" ", "$siswa"));

// impload fungsi kembalikannya expload
// impload ada 2 paramenter : glue(penggabung), array sasaran yang akan kita gabung menjadi string

$siswa_pintar = ['refa', 'agus', 'novan'];

echo implode(' wkwk ', $siswa_pintar)

?>