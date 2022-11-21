<?php 

$global = @$_GET["global"];


function statis(){
    $statis = @$_GET["statis"];
    echo $statis;
}

function local(){
    $local = @$_GET["local"];
    echo $local;
}
echo $global;
statis();
local();

?>