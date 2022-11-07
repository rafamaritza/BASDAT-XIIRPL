<?php


$temen =['awa','ike','nita','dinda','citra'];
$pren =['aliya','nazwa','caca','rafa','maritza'];

echo $temen[0]," ",$pren[0]," ",$temen[1]," ",$pren[1]," ",$temen[2]," ",$pren[2]," ",$temen[3]," ",$pren[3]," ",$temen[4]," ",$pren[4];
echo "<br />";

//tambah bestie
array_push($temen,'rahma');
array_push($pren,'nadia');

echo $temen[5]," ",$pren[5];

?>