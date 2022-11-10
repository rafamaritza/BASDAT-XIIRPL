<?php

function tisyu($tisu, $lembar, $ribu){
    
    echo "<h2>1. Saat aku menggunakan {$tisu}</h2>";
    echo "<h2>2. aku gunakan {$lembar} satu lembar</h2>";
    echo "<h2>3. {$lembar} harganya {$ribu}</h2>";


}

tisyu("tisu", "satu lembar", "2000");

$a = ['saat', 'aku', 'menggunakan', '$tisu'];
// fungsi dari count
$panjang = count($a);

echo "<br/>";
var_dump($panjang);

$b = ['aku', 'gunakan', '$lembar', 'satu lembar'];
// fungsi dari count
$panjang = count($b);

echo "<br/>";
var_dump($panjang);

$c = ['$lebar', 'harganya', '$ribu'];
// fungsi dari count
$panjang = count($c);

echo "<br/>";
var_dump($panjang);




?>