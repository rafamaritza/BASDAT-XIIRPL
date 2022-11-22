<?php

require_once 'fungsi-pesan-error.php';

function validasi(array $listinput){
    // Variabel berisi inputan form 
    $request = $_REQUEST;

    // memanggil semua variabel error
    $errors = [];

    // mengakses variabel $listPesanError
    global $listPesanError;

    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

        // Menggunakan foreach untuk memanggil semua fungsi yang bernama 'lolos'
        foreach($listrules as $rules){
            $namaFungsi = 'lolos'.ucfirst($rules);
            // validasi sesuai input formnye
            $lolos = $namaFungsi($request[$input]);
            //Buatkeun bool (lolos atau tidak lolos)

            // Jika tidak lolos maka munculkan pesan error
            if (!$lolos){
                if (!is_array($errors[$input])){
                    $errors += [$input => []];
                }
                array_push($errors[$input],$listPesanError[$rules]($input));
            }
            echo "<br>";
        }
        echo "<br>";
    }
    return $errors;
}

function lolosRequired($nilai){
    return(bool)$nilai;
}

// Fungsi Validasi Email
function lolosEmail($nilai){
    return filter_var($nilai,FILTER_VALIDATE_EMAIL);
}

// Fungsi lolos username menggunakan regex
function lolosUsername($nilai){
    preg_match("/^[a-zA-Z0-9_]+/", $nilai, $output);
    if(count($output)){
        return $output[0] === $nilai;
    }
    return false;
}

// Fungsi lolos usia (harus menggunakan numeric)
function lolosNumeric($nilai){
    return is_numeric($nilai);
}

?>