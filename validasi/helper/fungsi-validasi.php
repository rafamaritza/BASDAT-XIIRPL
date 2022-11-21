<?php

function validasi(array $listinput){
    // variabel berisi inputan form 
    $request = $_REQUEST;

    // perulangan untuk array terluar (berisi nama input)
    foreach($listinput as $input => $listrules){
        echo " Periksa input <strong>{$input}<?strong> <br>";

        // perulangan untuk sub array (berisi nama rules )
        foreach ($listrules as $rules){
            echo "Rules <strong>{$rules}</strong><br>";
                // pemeriksaaan tiap rules 
                if ($rules === 'required'){
                    $lolos = lolosrequired($request[$input]);
                    // penerapan nilai bool  true : false
                    echo $lolos ? "Lolos" : "Tidak lolos";
                }
                echo "<br>";
        }
        echo "<br>";
    }
}

function lolosrequired($nilai){
    return(bool)$nilai;
}

?>