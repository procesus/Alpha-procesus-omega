<?php
$id_producto=$_GET["Producto"];

include("conexion.php");

                  $query = "SELECT * FROM producto WHERE id_producto='$id_producto'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                    $ffk_estado_producto=$row['fk_estado_producto'];
                    //echo "entrando";
                  } 
//echo $ffk_id_estado_producto;


if ($ffk_estado_producto=="2")
{
	$query = "UPDATE `producto` SET `fk_estado_producto` = '1' WHERE `producto`.`id_producto` = '$id_producto'";
     $resultado = $db->query($query);
     echo "actualizando a 1";
}


if ($ffk_estado_producto=="1")
{
  $query = "UPDATE `producto` SET `fk_estado_producto` = '2' WHERE `producto`.`id_producto` = '$id_producto'";
     $resultado = $db->query($query);
     echo "actualizando a 2";
}




header ("Location: tabla_productos.php");
?>