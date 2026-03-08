<?php
include_once('conf.php');

//$hora = new DateTime();
//$x = 0;

//$dia = date('d-m-Y');
//$hora = date('H:i:s');

try{
//if(($hora->format('H:i') === '02:17')&&($x === 0)){
$sql = "INSERT INTO Geral(dia,hora) VALUES(CURRENT_DATE,CURRENT_TIME)";
$con->query($sql);
$x = 1;
}
//}
catch(Exception $e){
echo "<p style='color:red'>Mensagem de erro 2: $e->getMessage()</p>";
}
$con->close();
?>