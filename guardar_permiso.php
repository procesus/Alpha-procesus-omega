<!DOCTYPE>
<html>
<head>
	<title>Guardar Permiso</title>
	<link rel="stylesheet" type="text/css" href="css/eliminar.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-image:url(img/banner5.jpg);">


<?php


include("conexion.php");

$documento = $_POST['documento'];
$fk_id_rol = $_POST['fk_id_rol'];


//hhhhhhhhhhhhhhhhh

				  $cont=0;

                $query = "SELECT * FROM permiso WHERE documento='$documento' AND fk_id_rol='$fk_id_rol'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$ddocumento=$row['documento'];
                  	$cont=$cont+1;
                  	
                  }	

//hhhhhhhhhhhhhhhhh







if ($cont=="0")
 {
//Valida los datos del formulario de "NUEVO" y guarda los datos en la tabla reg_usuarios 
$query = "INSERT INTO permiso (documento, fk_id_rol) VALUES ('$documento', '$fk_id_rol')";
$resultado = $db->query($query);

    echo "<div class='caja'>";
    echo "<div class='informacion'>";

	echo "<form id='#' action='ver_permisos.php'>";

	echo "<center>";
	echo "<font class='#' size='6' face='Showcard Gothic'>Guardado del Permiso</font>";echo "<br>";
	echo "<a>El permiso fue guardado porfavor regrese.</a>";echo "<br>";
	echo "<input name=Documento type=hidden value=$documento>";echo "<br>";
	echo "<input class='btn btn-outline-danger' type=submit value=OK!---Regresar...>";echo "<br>";
	echo "</form>";
	echo "</center>";
	echo "</div>";
	echo "</div>";
}

if ($cont!="0")
{
	echo "<div class='caja'>";
    echo "<div class='informacion'>";

	echo "<form id='#' action='ver_permisos.php'>";

	echo "<center>";
	echo "<font class='#' size='6' face='Showcard Gothic'>Ya existe el Permiso</font>";echo "<br>";
	echo "<a>Este usuario ya tiene este permiso!</a>";echo "</br>";
	echo "<input name=Documento type=hidden value=$documento>";echo "<br>";
	echo "<input class='btn btn-outline-danger' type=submit value=OK!---Regresar...>";echo "<br>";
	echo "</form>";
	echo "</center>";
	echo "</div>";
	echo "</div>";
}



/*
//Inserta datos nuevos a la tabla estados_reg_usuarios
$sql = "INSERT INTO estados_reg_usuarios (id, fk_documento, fk_id_estado) VALUES (NULL, '$documento', 1)";

if(!$result = $db->query($sql))
{
	die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
}


//Inserta datos nuevos a la tabla permiso
$sql2 = "INSERT INTO permiso (id_permiso, documento, fk_id_rol) VALUES (NULL,'$documento',3)";

if(!$result2 = $db->query($sql2))
{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
}

*/



/*<?php

include("conexion_usuarios.php");

$permiso=$_GET["permiso"];
$documento=$_GET["documento"];

/*$query = "DELETE FROM permiso  WHERE documento='$documento' AND fk_id_rol = '$permiso'";
$resultado = $db->query($query);*/

//$query = "INSERT INTO permiso (documento, fk_id_rol) VALUES ('$documento', '$fk_id_rol')";
//$resultado = $db->query($query);

//if ($resultado){
	//header("location:ver_permisos.php");
	//echo "Permisos eliminado correctamente...";
	//echo "<form id='#' action='ver_permisos.php'>";
	//echo "<input name=Documento type=hidden value=$documento>";
	//echo "<input type=submit value=OK!---Regresar...>";

//}
/*else{
	echo "No se elimino.";
}
*/


?>