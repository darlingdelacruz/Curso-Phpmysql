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
<h1>Registro de Padre o Tutor</h1>
<form name="form1" method="get" action="DATOS_PADRES">
  <table border="0" align="center">
    <tr>
      <td>NOMBRE:</td>
      <td><label for="NOMBRE"></label>
      <input type="text" name="NOMBRE" id="NOMBRE"></td>
    </tr>
    <tr>
      <td>CLAVE:</td>
      <td><label for="CONTRASE"></label>
      <input type="text" name="CONTRASE" id="CONTRASE"></td>
    </tr>
    <tr>
      <td>HIJO:</td>
      <td><label for="HIJO"></label>
      <input type="text" name="HIJO" id="HIJO"></td>
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