<!DOCTYPE>
<html>
<head>
	<title>Agregar Nuevo permiso</title>
	<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="../css/bootstrap.css"/>
</head>
<body>
	<center><br><br><br>
          <?php
          include("conexion_usuarios.php");
          $documento=$_GET["documento"];


        echo "<center><font class='#' size='6' face='Showcard Gothic'>Agregar nuevo permiso</font></center>";echo "<br>";

		echo"<form action='guardar_permiso.php' method='POST' enctype='multipart/form-data'>";

			echo"<input type='text' name='documento' value=$documento>";echo "<br>";

			echo"<select class='input-100' pattern type='text' name='fk_id_rol' >";
                echo"<option value='1' >JEFE</option>"; 
                echo"<option value='2' >EMPLEADO</option>";
                echo"<option value='3' >VISITANTE</option>";
             echo"</select>";echo "<br>";echo "<br>";
             




			echo"<input class='btn btn-success' type='submit' value='Aceptar'>";

		echo"</form>";
		?>
	</center>
</body>
</html>

