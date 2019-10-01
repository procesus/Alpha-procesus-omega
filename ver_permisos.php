<!DOCTYPE>
<html>
<head>
    <title>Ver permisos</title>
    <link rel="stylesheet"  href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-image:url(img/banner5.jpg);">
  <center><font face="Showcard Gothic" size="6">Permisos que tiene el usuario.</font></center>
<center>
  <table id="prueba" class="table table-striped table-bordered" style="width:70%">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Permiso</th>
                <th>Eliminar permiso</th>
                <!--<th colspan="2">Operaciones</th>-->
            </tr>
        </thead>
        <tbody>

<?php
$documento=$_GET["Documento"];
include("conexion.php");


                  $query = "SELECT * FROM permiso WHERE documento='$documento'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$ffk_id_rol=$row['fk_id_rol'];           


                  //-----------------------------------Mostrar permisos------------------------------
                  $query2 = "SELECT * FROM rol WHERE id_rol='$ffk_id_rol'" ;
                  $resultado2 = $db->query($query2);
                  while($row2 = $resultado2->fetch_assoc())
                  {
                    $rrol=$row2['rol'];
                  }

 
                  //-----------------------------------------------------------------------------------


                    echo "<tr>";
                    echo "<td>$documento</td>";
                    echo "<td>$rrol</td>";
                    
                    echo "<td><a class='btn btn-danger' href=eliminar.php?documento=$documento&permiso=$ffk_id_rol>Eliminar permiso</a></td>";
                    
                    //echo "<td><a href=eliminar.php class='btn btn-danger'>Eliminarrr</a></td>";
                    echo "</tr>";
                   


                  }//Fin del while	
                  echo "</tr>";
?>



    </tbody>
    </table>
  

<center>
<?php  
echo "<a class='btn btn-success' href='nuevo_permiso.php?documento=$documento'><font size='4'>Nuevo permiso</font></a>";
?>
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
