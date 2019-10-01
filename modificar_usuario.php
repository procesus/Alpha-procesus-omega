<!DOCTYPE>
<html>
<head>
	<title>Index de imagen</title>
</head>
<body>


<?php
              include("conexion.php");

              $documento=$_GET["Documento"];

                  $query = "SELECT * FROM reg_usuarios WHERE documento='$documento'" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc())
                  {
                  	$nnombre=$row['nombre'];
                  	$ffk_tipo_doc=$row['fk_tipo_doc'];
                  	$ddocumento=$row['documento'];
                  	$cclave=$row['clave'];


                  }//Fin del while
	
		?>


	<?php
	echo "<form action='proceso_modificar_usuario.php' method='POST' class='form-register'>";

    echo "<input autocomplete='OFF' class='input-100' pattern='[a-zA-Z  ]{1,15}' type='text' name='nombre' value=$nnombre></input>";
    echo "<br>";

    echo"<select class'input-100' pattern='[a-zA-Z  ]{1,15}' type='text' name='fk_tipo_doc'>
            <option value='1' class='es'>Cedula</option> 
            <option value='2' class='es'>Cedula de extranjeria</option>
          </select>";
    echo "<br>";

    echo "<input autocomplete='OFF' class='input-100' pattern type='hidden' name='documento' value=$ddocumento></input>";
    echo "<br>";

    echo "<input autocomplete='OFF' class='input-100' type='text' name='clave' value=$cclave></input>";
    echo "<br>";

    echo "<input type='submit' value='Guardar'>";

    echo "</form>";
       ?>


	</center>
</body>
</html>