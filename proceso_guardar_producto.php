<?php


include("conexion.php");

$cod_producto = $_POST['cod_producto'];
$descripcion = $_POST['descripcion'];
$fk_provedor = $_POST['fk_provedor'];
$fk_categoria = $_POST['fk_categoria'];



//Valida los datos del formulario de "NUEVO" y guarda los datos en la tabla reg_usuarios 
$query = "INSERT INTO producto (cod_producto, descripcion, fk_provedor, fk_categoria, fk_stock, fk_estado_producto) VALUES ('$cod_producto', '$descripcion', '$fk_provedor', '$fk_categoria', 1, 1)";
$resultado = $db->query($query);

if ($resultado) {
	header("location: tabla_productos.php");
}
else{
	echo "No se inserto.";
}



//Inserta datos nuevos a la tabla permiso
/*$sql = "INSERT INTO permiso (id_permiso, documento, fk_id_rol) VALUES (NULL,'$documento',3)";

if(!$result = $db->query($sql))
{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
}*/

//Inserta datos nuevos a la tabla estados_reg_usuarios
/*$sql = "INSERT INTO estados_reg_usuarios (id, fk_documento, fk_id_estado) VALUES (NULL, '$documento', 1)";

if(!$result = $db->query($sql))
{
	die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
}
*/


?>