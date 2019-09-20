<?php
class Guardado
{
	public function guardar($nombre, $fk_tipo_doc, $documento, $clave)
	{

	include("conexion_usuarios.php");

	//$documento = $_GET["Documento"];


	$sql3 = "UPDATE reg_usuarios SET nombre='$nombre', fk_tipo_doc='$fk_tipo_doc', documento='$documento', clave='$clave' WHERE documento = '$documento'";

	if(!$result3 = $db->query($sql3))
	{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
	}
		else{
		header("location:tabla_usuarios.php");
	}




	}//termina método
	}//termina clase



	$nuevo=new Guardado();
	$nuevo->guardar($_POST["nombre"],$_POST["fk_tipo_doc"],$_POST["documento"],$_POST["clave"])


?>



