<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

$NOMBRE = $_GET["login"];

 try {
	 
	 $base=new PDO("mysql:host=localhost; dbname=registrosescuela","noticeviral","milbertyyo03");
	 
	
	 
	 $sql= "select * from usuario_pass where usuario =:login and password = :passaword";
	 $resultado=$base->prepare($sql);
	 $login=htmlentities(addslashes($_POST["login"]));
	 $passaword=htmlentities(addslashes($_POST["passaword"]));
	 $resultado -> bindValue(":login",$login);
	  $resultado -> bindValue(":passaword",$passaword);
	  $resultado->execute();
	  
	 $numerore=$resultado->rowCount();
	 
	 if($numerore!=0){
		 
		$consulta1 ="select * from estudiantes where maestro = '$NOMBRE'";
		 $resultado=mysqli_query($conexion, $consulta1);
		 
	 }
	 else
	 {
		
		 header("Location:formulariocompleto.php");
		 
	 }
	 
 }
 catch (ExCeption $e){
	 
	 
	 die ("Error:" . $e->getMessage());
	 
	 
	 }
 
 
?>
</body>
</html>