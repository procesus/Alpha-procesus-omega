<!DOCTYPE>
<html>
<head>
	<title>Tabla usuarios</title>
	<link rel="stylesheet"  href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-image:url(img/banner5.jpg);">
	<center><font face="Showcard Gothic" size="6">Tabla de los usuarios registrados actualmente.</font></center>
	<center>
	<table id="prueba" class="table table-striped table-bordered" style="width:70%">
        <thead>
            <tr>
                    <th>Nombre</th>
					<th>Tipo de documento</th>
					<th>Documento</th>
					<th>Clave</th>
					<th>Permisos</th>
					<th>Estado usuario</th>
					<th>Operación</th>
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

                $query = "SELECT * FROM reg_usuarios" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$nnombre=$row['nombre'];
                  	$ffk_tipo_doc=$row['fk_tipo_doc'];
                  	$ddocumento=$row['documento'];
                  	$cclave=$row['clave'];
                  	$ffk_estado=$row['fk_estado'];
                  	
					
			
					
					

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
                	$query3 = "SELECT * FROM estado WHERE id_estado = '$ffk_estado'";
                  	
                    $resultado3 = $db->query($query3);
                    while($row3 = $resultado3->fetch_assoc())
                    {
                  	$eestado=$row3['estado'];
                  	}	

                  	//-------------------------------------------------------------------------------

                  	//------- consultar estado real para saber el nombre y ponerlo en pantalla--------------------		
                	$query4 = "SELECT * FROM tipo_doc WHERE id_tipo_doc = '$ffk_tipo_doc'";
                  	
                    $resultado4 = $db->query($query4);
                    while($row4 = $resultado4->fetch_assoc())
                    {
                  	$ffk_tipo_doc=$row4['nombre_doc'];
                  	}	

                  	//-------------------------------------------------------------------------------








				
                echo "<tr>";
				echo "<td>$nnombre</td>";
				echo "<td>$ffk_tipo_doc</td>";
				echo "<td>$ddocumento</td>";
				echo "<td>$cclave</td>";


				echo "<td><a class='btn btn-info' href=ver_permisos.php?Documento=$ddocumento  target=_blank>Ver permisos</a></td>";	

				echo "<td>$eestado - <a class='btn btn-warning' href=cambiar_estado_usuario.php?Documento=$ddocumento>Cambiar Estado</a></td>";	
				echo "<td><a class='btn btn-dark' href=modificar_usuario.php?Documento=$ddocumento>Modificar</a></td>";
				//echo "<td><a href=eliminar.php?Id_registro=<?php echo $row['Id_registro'];>Eliminar</a></td>";
				echo "</tr>";


				
			        }//fin del while
			    
				
				//}
				echo "</tr>";
				?>
		</tbody>
	  </table>
	

<center>
<a class="btn btn-danger" href="jefe.php">&nbsp;<font size="4">Volver</font></a>
<a class="btn btn-success" href="nuevo_usuario.php">&nbsp;<font size="4">Nuevo usuario</font></a>
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