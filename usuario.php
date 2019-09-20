<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/usuarios.css">
	<link rel="stylesheet" type="text/css" href="css/iconos1/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos2/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos3/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos4/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos5/style.css">


	<title>USUARIOS</title>
</head>
<body style="background-image:url(img/banner2.jpg);">



	<div class="cuadro">
		<div class="boton1">
	    	<a href="salir.php" class="icon-power-off">&nbsp;<font size="4">Salir.</font></a>
	    </div>
    </div> 

<br><br><br><br>
<div class="caja2">
<div class="box">






<!----------------------------------------- COMIENZO CODIGO PHP -------------------------------------------------->

<?php
class Usuario
{



	public function administrar()
	{
		//session_start();

			include ("seguridad_usuario.php");
			include ("conexion.php");


	//echo "Esta es la capa Usuario";
	//echo "</br>";
	//echo "<a href='salir.php'>Cerrar Sesi&oacute;n</a>";


//echo "El doc del mancito es: "; echo  $_SESSION["documento_actual"]; echo "</br>";


$documento= $_SESSION["documento_actual"];
echo "</br>";
echo "</br>";

//hacer consulta para determinar los roles
$sql = "SELECT * FROM permiso WHERE documento='$documento'";
 if (!$result = $db->query($sql))
  {
  die ('Hay un error corriendo en la consulta o datos no encontrados [' . $db->error . ']');
 }
 while ($row = $result->fetch_assoc())
{
	$ffk_id_rol=$row["fk_id_rol"];
	//echo "Tiene permiso $ffk_id_rol"; echo "</br>";

    


    //css centrar
    echo "<div class='alineacion'>";
	if ($ffk_id_rol=="1")
		//echo "<div class='centrado'>";
	{
		echo "<div class='boton2'><img src='img/p2.png' width='80' height='70'><a href='jefe.php'>Ir a Jefe</a></div>"; echo "</br>";
		 $_SESSION["jefe"]="1";
	}
		if ($ffk_id_rol=="2")
	{
		echo "<div class='boton3'><img src='img/p3.png' width='80' height='70'><a href='admin'>Ir a Empleado</a></div>"; echo "</br>";
		$_SESSION["empleado"]="1";
	}
		if ($ffk_id_rol=="3")
	{
		echo "<div class='boton4'><img src='img/p4.png' width='80' height='70'><a href='Visitante'>Ir a Visitante</a></div>"; echo "</br>";
		$_SESSION["visitante"]="1";
	}
	echo "</div>";
}


//hacer consulta para determinar los roles



	} 


}
$nuevo=new Usuario();
$nuevo->administrar();



?>
	
</div>
</div>


<div class="caja">
<div class="informacion">
	<center>
	<img src="img/r1.png" width="300" height="280">
	<img src="img/r2.jpg" width="300" height="280">
	<img src="img/r3.png" width="300" height="280">
	<a>Bienvenido a los perfiles de Peolpe Kids, elija su perfil.</a>
    </center>
</div>
</div>


</body>
</html>