<?php

	include_once('post.php');
	$con = new SQLite3('dados/van.db');
	if(!$con){
		echo "Deu erro";
		}
	else{
  		$sql = "INSERT INTO visitors(nome,empresa,mensagem,dia,hora) values('$nm','$cpn','$msg',CURRENT_DATE,CURRENT_TIME)";
  		$con->query($sql);
		$con->close();
		//header('redirect;https://vandev.tech/');
		//header('Location: https://vandev.tech');
	}

?>