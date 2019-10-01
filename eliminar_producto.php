<!DOCTYPE>
<html>
<head>
	<title>Eliminar Permiso</title>
	<link rel="stylesheet" type="text/css" href="css/guardar_permiso.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-image:url(img/banner5.jpg);">


<?php

include("conexion.php");

$id_producto=$_GET["producto"];


$query = "DELETE FROM producto  WHERE id_producto='$id_producto'";
$resultado = $db->query($query);
//if ($resultado){
	//header("location:ver_permisos.php");
	//echo "Permisos eliminado correctamente...";
    echo "<div class='caja'>";
    echo "<div class='informacion'>";

	echo "<form id='#' action='tabla_productos.php'>";

	echo "<center>";
	echo "<font class='#' size='6' face='Showcard Gothic'>Eliminar Producto</font>";echo "<br>";
	echo "<a>El producto fue borrado porfavor regrese.</a>";echo "<br>";
	echo "<input name=id_producto type=hidden value=$id_producto>";echo "<br>";
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