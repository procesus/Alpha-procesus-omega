<?php


include("conexion_usuarios.php");

$nombre = $_POST['nombre'];
$fk_tipo_doc = $_POST['fk_tipo_doc'];
$documento = $_POST['documento'];
$clave = $_POST['clave'];


//Valida los datos del formulario de "NUEVO" y guarda los datos en la tabla reg_usuarios 
$query = "INSERT INTO reg_usuarios (nombre, fk_tipo_doc, documento, clave) VALUES ('$nombre', '$fk_tipo_doc', '$documento', '$clave')";
$resultado = $db->query($query);

if ($resultado) {
	header("location: tabla_usuarios.php");
}
else{
	echo "No se inserto.";
}


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


?>