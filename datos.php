<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$NOMBRE = $_GET["NOMBRE"];
$CON = $_GET["APELLIDO"];
$SECCION = $_GET["CEDULA"];
$MATE = $_GET["EDAD"];


$db_host = "localhost";
$db_nombre = "registropersona";
$db_usuario = "noticeviral";
$db_contra= "milbertyyo03";

		$conexion =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
		mysqli_set_charset($conexion,"utf8");
		
		$consulta1 ="INSERT INTO personas(NOMBRE,APELLIDO,CEDULA,EDAD)VALUES ('$NOMBRE','$CON','$SECCION','$MATE')";
		
		
		$consulta1 = "SELECT * FROM PERSONAS WHERE NOMBRE ='$NOMBRE' AND CEDULA='$SECCION'";
		$resultado=mysqli_query($conexion, $consulta1);
		
		
		
		function buscarRepetido($NOMBRE,$SECCION){
		if(mysqli_num_rows($resultado)>0)
		{
		  	
			  return "Esta persona ya esta registrada.";
		}
		else
		{
				return 1;	
			echo "Se ha guardado correctamente";
		}

		mysqli_close($conexion);
		}
		?>
</body>
</html>