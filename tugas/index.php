<?php

class smkcaca
{

    var $kepsek;
    var $guru;
    var $murid;

 
    function kepala()
    {
        return "Pa Lilik";
    }

    function bahasa()
    {
        return "Pa Saipul";
    }

    function belajar()
    {
        return "Hasan";
    }
}

$sekolah = new smkcaca();


$sekolah->kepsek = "Kepsek kita adalah";
$sekolah->guru = "Guru kita adalah";
$sekolah->murid = "Murid kita adalah ";


echo $sekolah->kepsek, " ", $sekolah->kepala();
echo "<br/>";
echo $sekolah->guru, " ", $sekolah->bahasa();
echo "<br/>";
echo $sekolah->murid, " ", $sekolah->belajar();

