<?php

$local = "sql107.infinityfree.com";
$banco = "if0_35469178_maindb";
$user = "if0_35469178";
$pass = "ftppw242";

try{
$con = new mysqli($local,$user,$pass,$banco);
}
catch(Exception $e){
echo "Erro: de conexão".$e->getMessage();
}
?>