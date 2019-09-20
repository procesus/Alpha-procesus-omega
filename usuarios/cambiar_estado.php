<?php
$documento=$_GET["Documento"];
echo $documento;
include("conexion_usuarios.php");

                  $query = "SELECT * FROM estados_reg_usuarios WHERE fk_documento='$documento'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$ffk_id_estado=$row['fk_id_estado'];
                  	//echo "entrando";
                  }	
//echo $ffk_id_estado;


if ($ffk_id_estado=="2")
{
	$query = "UPDATE `estados_reg_usuarios` SET `fk_id_estado` = '1' WHERE `estados_reg_usuarios`.`fk_documento` = '$documento'";
     $resultado = $db->query($query);
     echo "actualizando a 1";
}


if ($ffk_id_estado=="1")
{
	$query = "UPDATE `estados_reg_usuarios` SET `fk_id_estado` = '2' WHERE `estados_reg_usuarios`.`fk_documento` = '$documento'";
     $resultado = $db->query($query);
     echo "actualizando a 2";
}

header ("Location: tabla_usuarios.php");
?>