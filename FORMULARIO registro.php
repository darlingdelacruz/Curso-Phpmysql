<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Persona</h1>
<form name="form1" method="get" action="../../../../wamp64/www/Curso PHP/datos.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="NOMBRE"></label>
      <input type="text" name="NOMBRE" id="NOMBRE"></td>
    </tr>
    <tr>
      <td>Apellido:</td>
      <td><label for="APELLIDO"></label>
      <input type="text" name="APELLIDO" id="APELLIDO"></td>
    </tr>
    <tr>
      <td>Cedula:</td>
      <td><label for="CEDULA"></label>
      <input type="text" name="CEDULA" id="CEDULA"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="EDAD"></label>
      <input type="text" name="EDAD" id="EDAD"></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>