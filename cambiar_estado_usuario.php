<?php
$documento=$_GET["Documento"];
echo $documento;
include("conexion.php");

                  $query = "SELECT * FROM reg_usuarios WHERE documento='$documento'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                    $ffk_estado=$row['fk_estado'];
                    //echo "entrando";
                  } 
//echo $ffk_id_estado;


if ($ffk_estado=="2")
{
	$query = "UPDATE `reg_usuarios` SET `fk_estado` = '1' WHERE `reg_usuarios`.`documento` = '$documento'";
     $resultado = $db->query($query);
     echo "actualizando a 1";
}


if ($ffk_estado=="1")
{
	$query = "UPDATE `reg_usuarios` SET `fk_estado` = '2' WHERE `reg_usuarios`.`documento` = '$documento'";
     $resultado = $db->query($query);
     echo "actualizando a 2";
}

header ("Location: tabla_usuarios.php");
?>