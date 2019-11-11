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
<h1>Cambio de seccion</h1>
<form name="form1" method="get" action="cambiazo.php">
  <table border="0" align="center">
    <tr>
      <td>MATRICULA:</td>
      <td><label for="MATRICULA"></label>
      <input type="text" name="MATRICULA" id="MATRICULA"></td>
    </tr>
    <tr>
      <td>SECCIÒN:</td>
      <td><label for="SECCION"></label>
      <input type="text" name="SECCION" id="SECCION"></td>
    </tr>
    <tr>
      <td>NOMBRE:</td>
      <td><label for="NOMBRE"></label>
      <input type="text" name="NOMBRE" id="NOMBRE"></td>
    </tr>
     <tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="UPDATE" id="UPDATE" value="UPDATE"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>