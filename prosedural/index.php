<?php

// prsedural adalah pemograman yang tidak perlu adanya instansiasi cukup menggunakan fungsi 

// cnth dari prosedural
echo date('d-m-Y');

// cnth dari pendekatan bjek
$date = new DateTime();
echo $date->format('d-m-Y');

?>