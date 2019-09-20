                <?php
                  include ("seguridad_usuario.php");
                  include("conexion.php");

                  $id = $_REQUEST['id'];

                  $query = "SELECT * FROM tabla_imagen WHERE id ='$id'" ;
                  $resultado = $db->query($query);
                  $row = $resultado->fetch_assoc();
				?>


<!DOCTYPE>
<html>
<head>
	<title>Modificar</title>
</head>
   	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/modificar.css">


<body style="background-image:url(img/banner2.jpg);">

		<div class="boton1">
	    	<img src="img/people-kids.jpg" width="140" height="60"></img>
	    </div>



<center><br><br><br>

<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"><br><br>


<font size="5" face="Showcard Gothic">Modificacion Perfil</font><br><br>
<div class="hijo"><br>
<font size="4" face="Arial">¿Deseas modificar tu perfil?,<?php echo $row['nombre']; ?></font><br><br>

<div class="padre">
<div class="final__tooltip right"  title="Cambia tu nombre si eso es lo que deseas.">
<input class="barra-nombre" type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row ['nombre']; ?>"/>
</div>
</div>
<br><br>

<div class="left" title="Las diferentes formas y Tamaños que tendra tu foto.">
<img width="200" height="200" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
<img class="circulo" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
<img class="circulo-gmail"  src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br><br>
</div><br>



<input type="file"  required name="imagen"/><br><br>
<div class="separacion-btn">
<input class="sub-rayado" type="submit" value="Aceptar">
<a class="sub-rayado2" href="cuenta.php">Cancelar</a>
</div>
</div>
</form>
</center>
</body>
</html>