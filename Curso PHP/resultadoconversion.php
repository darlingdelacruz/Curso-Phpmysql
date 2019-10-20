<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASIGNACION</title>



</head>

<body>
	<header>
		<h1>SU RESULTADO ES :<2>
	</header>
<?php
	function convertir ()
		{
 	
			$MONEDA = $_POST['MONEDA'];
			$tipo = $_POST['tipo'];
				if ($tipo == 'usd')
					{
						$RESULTADO = 53.02;
					}
				else
				    {
					 	$RESULTADO = 59.20;
			   		}
						
						$total = $MONEDA * $RESULTADO;
							return round ($total,2);
							
								
		}
		echo "<br><br>Su total es: ".convertir(); 
?>

</body>
</html>