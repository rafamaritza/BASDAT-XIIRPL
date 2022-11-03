<?php
// pewarisan atau inheritance
// class induk
class komputer {
    public $merek;
    public $prosesor;
    public $memory;

    // fungsi /perasi membuat beli komputer
    public function beli_komputer(){
        return "Beli Komputer baru";
    
}

// kelas turunan/extends dari class kmputer ke class laptop
class laptop extends komputer{
    public function lihat_spek(){
        // ambil proprty dari class komputer
        return "merek: $this->merek, prosesor: $this->prosesor, memory: $this->memory";
    }
}

// instansiasi 
// membuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

// isi prosesornya
$laptop_baru->merek = "Asus";
$laptop_baru->prosesor = "AMD Ryzen 9X";
$laptop_baru->memory = "1 PetaByte";

// panggil functionny
echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_spek();










?>