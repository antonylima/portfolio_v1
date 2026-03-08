<?php
$dia = date('d/m/Y');
$hora = date('H:i:s');
$ip_acesso = $_SERVER['REMOTE_ADDR'];
if(isset($_POST['submit'])){

include_once('conf.php');
try{
$sql = "UPDATE Contador SET contador = contador-1 WHERE id = 1";
$con->query($sql);
}
catch(Exception $e){
echo "<p style='color:red'>Mensagem de erro 1: $e->getMessage()</p>";
}

if(!((!empty($_POST['nm']))&&(!empty($_POST['cpn']))&&(!empty($_POST['msgtxt'])))){
	echo "<dialog style='
	background-color:red;
	color:white;
	border-radius:10px;
	position:absolute;
	top:80px;
	right:5px;
	padding:7px'
	id='notsent' open>
	Message has not been sent
	</dialog>
	<script>
	setTimeout(()=>{
		notsent.close()
	},1000)
	</script>";	
	}else{
	$nm = $_POST['nm'];
	$cpn = $_POST['cpn'];
	$msg = $_POST['msgtxt'];	
	if($nm != 'ppu-prof_pen'){
		$con = new SQLite3('dados/van.db');
		if(!$con){
			echo "Deu erro";
		}
		else{
  			$sql = "INSERT INTO visitors(nome,empresa,mensagem,dia,hora)
  			values('$nm','$cpn','$msg',CURRENT_DATE,CURRENT_TIME)";
  			$con->query($sql);
			$con->close();
		}

	$file = fopen("dados/mensagens".".txt","a");
	fwrite($file,"#$ip_acesso\n$nm\n$cpn\n$msg\n$dia\n$hora\n");		
	fclose($file);
	
	echo "<dialog style='
	background-color:green;
	color:white;
	border-radius:10px;
	position:absolute;
	top:80px;
	right:5px;
	padding:7px'
	id='sent' open>
	Message sent
	</dialog>
	<script>
	setTimeout(()=>{
		sent.close()
	},1000)
	</script>";
	//mail('ascldeveloper@gmail.com','teste','via mail php'.$nm.'\n'.$cpn.'\n'.$msg,'From: asc.1ima15@gmail.com');
	
	}else{
	$file = fopen("dados/spam".".txt","a");
	fwrite($file,"#$ip_acesso\n$nm\n$cpn\n$msg\n$dia\n$hora\n");		
	fclose($file);
	}
}

}else{
	$file = fopen("dados/visitas".".txt","a");
	fwrite($file,"#$ip_acesso - $dia - $hora".PHP_EOL);		
	fclose($file);
}

header('Location: https://vandev.tech');

?>