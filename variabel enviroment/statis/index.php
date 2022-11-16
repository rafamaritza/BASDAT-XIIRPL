<?php
// statis adalah mempertahankan niali aslinya 

function test(){
    static $angka = 0; //mendefinisikan variabel ocal
    // variabel local jika sudah melewati scopenya akan kembali ke nilai awal
    // static mempertahankan nilai dari luar scope
    echo "A : {$angka} <br>";
    $angka++; //menambahkan fungsi increment
}

test();
test();
test();


?>