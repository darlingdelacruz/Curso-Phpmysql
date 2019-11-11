<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$MATRI = $_GET["MATRICULA"];
$SECCI = $_GET["SECCION"];
$NOM = $_GET["NOMBRE"];
$PAD = $_GET["PADRE"];
$MAES = $_GET["MAESTRO"];
$MAT = $_GET["MATERIA"];
$CLAV = $_GET["clave"];

$db_host = "localhost";
$db_nombre = "registrosescuela";
$db_usuario = "noticeviral";
$db_contra= "milbertyyo03";

		$conexion =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
		mysqli_set_charset($conexion,"utf8");
		

		$consulta1 ="UPDATE  ESTUDIANTES SET SECCION = '$SECCI' WHERE MATRICULA = '$MATRI' ";
		
		$resultado=mysqli_query($conexion, $consulta1);
	
		
		if($resultado == false)
		{
		  	
			  echo "Error de consulta";
		}
		else
		{
					
			echo "Se ha cambiado correctamente";
		}

		mysqli_close($conexion);

?>

</body>
</html>