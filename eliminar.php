<!DOCTYPE>
<html>
<head>
	<title>Eliminar Permiso</title>
	<link rel="stylesheet" type="text/css" href="css/guardar_permiso.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body>


<?php

include("conexion.php");

$permiso=$_GET["permiso"];
$documento=$_GET["documento"];

$query = "DELETE FROM permiso  WHERE documento='$documento' AND fk_id_rol = '$permiso'";
$resultado = $db->query($query);
//if ($resultado){
	//header("location:ver_permisos.php");
	//echo "Permisos eliminado correctamente...";
    echo "<div class='caja'>";
    echo "<div class='informacion'>";

	echo "<form id='#' action='ver_permisos.php'>";

	echo "<center>";
	echo "<font class='#' size='6' face='Showcard Gothic'>Eliminar Permiso</font>";echo "<br>";
	echo "<a>El permiso fue borrado porfavor regrese.</a>";echo "<br>";
	echo "<input name=Documento type=hidden value=$documento>";echo "<br>";
	echo "<input class='btn btn-outline-danger' type=submit value=OK!---Regresar...>";
	echo "</center>";

	echo "</div>";
	echo "</div>";

//}
/*else{
	echo "No se elimino.";
}
*/

?>


</body>
</html>