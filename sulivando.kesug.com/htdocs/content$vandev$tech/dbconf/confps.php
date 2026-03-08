<?php

$local = "aws-sa-east-1.connect.psdb.cloud";
$banco = "bancodedados";
$user = "07ly1ki92m17b9vjwzwr";
$pass = "myonpspw";

try{
//$con = new mysqli($local,$user,$pass,$banco);
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($_ENV["DB_HOST"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);
  $mysqli->close(); 
}
catch(Exception $e){
echo "Erro de conexão: ".$e->getMessage();
}
?>