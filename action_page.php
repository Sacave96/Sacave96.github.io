<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <?php
      $Nombre = $_POST["Nombre"];
      $Email = $_POST["Email"];
      $Asunto = $_POST['Asunto'];
      $Mensaje = $_POST["Mensaje"];
      echo "<section>\n";
      echo "      <p><b>Nombre:</b> $Nombre</p>\n";	
      if ( empty($Email) ) {
        echo "      <p><b>Email:</b> <i>no has introducido nada</i></p>\n";
      } else {
        echo "      <p><b>Email:</b> $Email</p>\n";
      }
      if ( empty($Asunto) ) {
        echo "      <p><b>Asunto:</b> <i>no has introducido nada</i></p>\n";
      } else {
        echo "      <p><b>Asunto:</b> $Asunto</p>\n";
      }		
      if ( empty($Mensaje) ) {
        echo "      <p><b>Mensaje:</b> <i>no has introducido nada</i></p>\n";
      } else {
       echo "      <p><b>Mensaje:</b> $Mensaje</p>\n";
      }
      echo "    </section>";
	?> 
  </body>
</html>
