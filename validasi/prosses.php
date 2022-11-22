<?php

require 'helper/fungsi-validasi.php';

// tambahkan rules masing masing jenis form nya

$rules = [
    'nama' => ['required'],
    'email' => ['required'],
    'username' => ['required', 'username'],
    'usia' => ['required', 'numeric']
];

validasi($rules);

?>