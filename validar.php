<?php
class Registro
{
	public function registrar($nombre, $fk_tipo_doc, $documento, $clave)
	{

	include("conexion.php");

	$sql = "INSERT INTO reg_usuarios (nombre,fk_tipo_doc,documento,clave) VALUES ('$nombre','$fk_tipo_doc','$documento','$clave')";

	if(!$result = $db->query($sql))
	{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
	}
	else{
		header("location:registro2.html");
	}




	$sql2 = "INSERT INTO permiso (id_permiso, documento, fk_id_rol) VALUES (NULL,'$documento',3)";

	if(!$result2 = $db->query($sql2))
	{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
	}


	$sql3 = "INSERT INTO estados_reg_usuarios (id, fk_documento, fk_id_estado) VALUES (NULL, '$documento', 1)";

	if(!$result3 = $db->query($sql3))
	{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
	}





	}//termina método
	}//termina clase



	$nuevo=new Registro();
	$nuevo->registrar($_POST["nombre"],$_POST["fk_tipo_doc"],$_POST["documento"],$_POST["clave"])


?>

