<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Formulario</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div>
<?php
       $Nombre = $_GET['Nombre'];
       echo "<p>Nombre: $Nombre</p>";
	   $Email = $_GET['Email'];
       echo "<p>Email: $Email</p>";
	   $Asunto = $_GET['Asunto'];
	   echo "<p>Asunto: $Asunto</p>";
	   $Mensaje = $_GET['Mensaje'];
	   echo "<p>Mensaje: $Mensaje</p>";
	
?>
</div>

</body>
</html>