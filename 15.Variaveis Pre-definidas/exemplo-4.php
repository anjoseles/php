<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"]; //["REMOTE_ADDR"]; ["SCRIPT_NAME"];

echo $ip;

?>