				<?php
				  include ("seguridad_usuario.php");
                  include("conexion.php");

                  $query = "SELECT * FROM tabla_imagen" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc()){
				?>

				

<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/cuenta.css">
	<link rel="stylesheet" type="text/css" href="css/iconos1/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos2/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos3/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos4/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos5/style.css">



	<title>Cuenta Perfil</title>
</head>
<body style="background-image:url(img/banner5.jpg);">

	<input type="checkbox" id="chec" >
	<label for="chec">
		<div class="final__tooltip right"  title="Desplegar menu.">
		    <img class="puntero" src="img/icono-menu2.png">
	    </div>
	</label>


	<div class="cuadro">

		<div class="boton1">
	    	<img src="img/people-kids.jpg" width="140" height="60"></img>
	    </div>
    </div> 


	<nav>
		<ul>
			<li><a class="icon-user-circle-o"href="cuenta.php">&nbsp;<font size="4">Configuracion cuenta</font></a></li>
			<li><a class="icon-home1"href="#" target="_blank">&nbsp;<font size="4">Panel de control</font></a></li>
			<li><a class="icon-stack1"href="#" target="_blank">&nbsp;<font size="4">Materia Prima</font></a></li>
			<li><a class="icon-price-tags"href="#" target="_blank">&nbsp;<font size="4">Productos</font></a></li> 	
			<li><a class="icon-book3"href="#" target="_blank">&nbsp;<font size="4">Documentacion</font></a></li>
			<li><a class="icon-connection-full"href="#" target="_blank">&nbsp;<font size="4">Reportes</font></a></li>
			<li><a class="icon-arrow-circle-o-left"href="jefe.php">&nbsp;<font size="4">Atras</font></a></li>
		</ul>
	</nav>
</input>


<center><br><br><br><br><br><br>




        <font size="5" face="Showcard Gothic">Edita tu perfil, <?php echo $row['nombre']; ?></font>

		<div class="padre">


			<div class="hijo">
		<img class="circulo" height="100" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
		<br><br><?php echo $row['nombre']; ?><br><br>
				<div class="separacion-btn">
				    <a class="sub-rayado" href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a>
				    <a class="sub-rayado2" href="jefe.php">Atras</a>
			    </div>
			</div>


	</div>
</center>

				<?php
			        }
			    ?>
</body>
</html>