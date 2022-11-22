<?php

$listPesanError = [
    'required' => function($field){
        return "Field ($field) harus di isi";
        // pesan error jika tidak di isi
    },
    'email' => function($field){
        return "Field ($field) harus berupa email yang valid";
        //  pesan error jika isinya blum ada a keong
    },
    'username' => function($field){
        return "Field ($field) hanya boleh angka huruf dan underscore";
        //  pesan error jika isinya regex
    },
    'numeric' => function($field){
        return "Field ($field) harus berupa angka";
        //  pesan error muncul jika isinya huruf
    }
]

?>