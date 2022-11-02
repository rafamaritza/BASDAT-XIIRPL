<?php 

// cara untuk menghapus class dan object
class mobil{
    // property
    var $merk;
    var $roda;
    var $kecepatan;

    // membuat fungsi atau operasi berjalan (maju dan mundur)
    function jalan_maju (){
        return "majuuu";

    }
    function jalan_mundur (){
        return "mundurrr";
        
    }
}

// instansiasi (menginstankan variabel yang menghubungkan dari class keluar class)
$mobil_keren = new mobil();

// set property 
$mobil_keren->merek="Ferrari";
$mobil_keren->roda="hitam";
$mobil_keren->kecepatan="300KmH";

// tampilkan property nya
echo $mobil_keren->merek;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;

// tampilan function 
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();


?>