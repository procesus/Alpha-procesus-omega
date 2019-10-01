<!DOCTYPE>
<html>
<head>
	<title>Tabla productos</title>
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-image:url(img/banner5.jpg);">
	<center><font class="titulo" face="Showcard Gothic" size="6">Tabla de los productos registrados actualmente.</font></center>
	<center>
	<table id="prueba" class="table table-striped table-bordered" style="width:70%">
        <thead>
            <tr>
          <th>Id producto</th>
					<th>Codigo producto</th>
					<th>Descripcion</th>
          <th>Precio</th>
					<th>Provedor</th>
					<th>Categoria</th>
					<!--<th>Stock</th>-->
					<th>Estado producto</th>
          <th>Imagen</th>
          <th>Eliminar producto</th>
					<!--<th colspan="2">Operaciones</th>-->
            </tr>
        </thead>
        <tbody>
	
	
	
				<?php
				
                  include("conexion.php");
				  
				  
				/*$nnombre="";
				$ffk_tipo_doc="";
				$ddocumento="";
				$cclave="";
				$eestado ="";*/

				
				
				
				  
				//  echo "<table id='prueba' border='2' class='table table-striped table-bordered'>";

                $query = "SELECT * FROM producto" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$iid_producto=$row['id_producto'];
                  	$ccod_producto=$row['cod_producto'];
                  	$ddescripcion=$row['descripcion'];
                    $pprecio=$row['precio'];
                  	$ffk_provedor=$row['fk_provedor'];
                  	$ffk_categoria=$row['fk_categoria'];
                  	/*$ffk_stock=$row['fk_stock'];*/
                  	$ffk_estado_producto=$row['fk_estado_producto'];
                  	
					
			
					
					

                   	/*//----------------------- consultar estado real--------------------------------		
                  	$query2 = "SELECT * FROM estados_reg_usuarios WHERE fk_documento = '$ddocumento'";
                  	
                    $resultado2 = $db->query($query2);
                    while($row2 = $resultado2->fetch_assoc())
                    {
                  	$ffk_id_estado=$row2['fk_id_estado'];
                  	}	

                  	//-------------------------------------------------------------------------------
                  	*/


                  	//------------------- consultar estado real nombre--------------------------------		
                	$query3 = "SELECT * FROM estado_producto WHERE id_producto = '$ffk_estado_producto'";
                  	
                    $resultado3 = $db->query($query3);
                    while($row3 = $resultado3->fetch_assoc())
                    {
                  	$eestado_producto=$row3['estado_producto'];
                  	}	

                  	//-------------------------------------------------------------------------------

                  	//------- consultar estado real para saber el nombre y ponerlo en pantalla--------------------		
                	$query4 = "SELECT * FROM provedor WHERE id_provedor = '$ffk_provedor'";
                  	
                    $resultado4 = $db->query($query4);
                    while($row4 = $resultado4->fetch_assoc())
                    {
                  	$ffk_provedor=$row4['nombre_provedor'];
                  	}	

                  	//-------------------------------------------------------------------------------



                  	//------- consultar estado real para saber el nombre y ponerlo en pantalla--------------------		
                	$query5 = "SELECT * FROM categoria WHERE id_categoria = '$ffk_categoria'";
                  	
                    $resultado5 = $db->query($query5);
                    while($row5 = $resultado5->fetch_assoc())
                    {
                  	$ffk_categoria=$row5['categoria'];
                  	}	

                  	//-------------------------------------------------------------------------------



                  	/*//------- consultar estado real para saber el nombre y ponerlo en pantalla--------------------		
                	$query6 = "SELECT * FROM stock WHERE id_stock = '$ffk_stock'";
                  	
                    $resultado6 = $db->query($query6);
                    while($row6 = $resultado6->fetch_assoc())
                    {
                  	$ffk_stock=$row6['cantidad'];
                  	}	

                  	//-------------------------------------------------------------------------------*/



                  	//------- consultar estado real para saber el nombre y ponerlo en pantalla--------------------		
                	$query7 = "SELECT * FROM estado_producto WHERE id_producto = '$ffk_estado_producto'";
                  	
                    $resultado7 = $db->query($query7);
                    while($row7 = $resultado7->fetch_assoc())
                    {
                  	$ffk_estado_producto=$row7['estado_producto'];
                  	}	

                    $sqli="select imagen from producto where id_producto='$iid_producto'";
                    $res=mysqli_query($db,$sqli);
                    $data=mysqli_fetch_array($res);
                    

                  	//-------------------------------------------------------------------------------








				
        echo "<tr>";
				echo "<td>$iid_producto</td>";
				echo "<td>$ccod_producto</td>";
				echo "<td>$ddescripcion</td>";
        echo "<td>$pprecio</td>";
				echo "<td>$ffk_provedor</td>";
				echo "<td>$ffk_categoria</td>";
				/*echo "<td>$ffk_stock</td>";*/
				echo "<td>$ffk_estado_producto - <a class='btn btn-warning' href=cambiar_estado_producto.php?Producto=$iid_producto>Cambiar Estado</a></td>";

        echo('<td><img src="'.$data['imagen'].'" width="50px" height="50px"></td>');
        echo "<td><a class='btn btn-danger' href=eliminar_producto.php?producto=$iid_producto>Eliminar producto</a></td>";

				//echo "<td><a class='btn btn-info' href=ver_permisos.php?Documento=$ddocumento  target=_blank>Ver permisos</a></td>";	

				//echo "<td>$eestado_producto - <a class='btn btn-warning' href=cambiar_estado.php?Documento=$ddocumento>Cambiar Estado</a></td>";	
				//echo "<td><a class='btn btn-dark' href=modificar_usuario.php?Documento=$ddocumento>Modificar</a></td>";
				//echo "<td><a href=eliminar.php?Id_registro=<?php echo $row['Id_registro'];>Eliminar</a></td>";
				echo "</tr>";


				
			        }//fin del while
			    
				
				//}
				echo "</tr>";
				?>
		</tbody>
	  </table>
	

<center>
<a class="btn btn-danger" href="empleado.php">&nbsp;<font size="4">Volver</font></a>
<a class="btn btn-success" href="nuevo_producto.php">&nbsp;<font size="4">Nuevo producto</font></a>
</center>



	<script type="text/javascript" language="javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="resources/demo.js"></script>
	<script type="text/javascript" class="init">
		
    $(document).ready(function() {
	    $('#prueba').DataTable();
    } );

	</script>

</body>
</html>