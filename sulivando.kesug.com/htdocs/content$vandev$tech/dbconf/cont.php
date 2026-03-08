<?php
include_once('conf.php');
try{
$sql = "UPDATE Contador SET contador = contador+1 WHERE id = 1";
$con->query($sql);
}
catch(Exception $e){
echo "<p style='color:red'>Mensagem de erro 1: $e->getMessage()</p>";
}
?>