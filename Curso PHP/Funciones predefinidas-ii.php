<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asignacion</title>
</head>

<body>
<header>Funciones predefinidas Tema 2</header>
<?php

$url= $_SERVER["REQUEST_URI"];
echo "http://" .$url."<br>";
echo '<br>Versión actual de PHP: ' . phpversion();
echo gethostbyname ($server_NAME) . "<BR>"; 
echo $ip = $_SERVER['REMOTE_ADDR'] . "<BR>";

?>
</body>
</html>