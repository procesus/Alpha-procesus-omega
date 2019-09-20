	<?php
				  include ("seguridad_usuario.php");
                  include("conexion.php");

                  $query = "SELECT * FROM tabla_imagen" ;
                  $resultado = $db->query($query);
                  while($row = $resultado->fetch_assoc()){
				?>


<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/materia_prima.css">
	<link rel="stylesheet" type="text/css" href="css/iconos1/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos2/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos3/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos4/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos5/style.css">

	<title>MATERIA PRIMA</title>
</head>
<body style="background-image:url(img/banner2.jpg);">




<input type="checkbox" id="chec" >
	<label for="chec">
		<div class="final__tooltip right"  title="Desplegar menu.">
		    <img class="puntero" src="img/icono-menu2.png">
	    </div>
	</label>


	<div class="cuadro">
		<div class="boton1">
	    	<a href="salir.php" class="icon-power-off">&nbsp;<font size="4">Salir.</font></a>
	    </div>

	    <div class="boton2">
	    	<a href="usuarios/tabla_usuarios.php" class="icon-user-md">&nbsp;<font size="4">Usuarios.</font></a>
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



<section id="blog">
<div class="padre">
<div class="alineacion"><img src="img/icono1.png" alt=""><a href="crear_materia_prima.php" >Registrar materia prima</a></div>
<div class="alineacion"><img src="img/icono3.png" alt=""><a href="#">Revisar Tabla</a></div>


<div class="alineacion2">
    <center>
    <div title="Cuenta de People Kids">
    <img class="circulo-gmail" height="100" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
    <a><?php echo $row['nombre']; ?></a>
    </div>
    </center>
</div>



<div class="caja">
<div class="informacion">
	<center>
	<a>Bienvenido a los perfiles de Peolpe Kids, elija su perfil.</a><br>
	<a>Por favor ejija uno de los items que aparecen en el programa en la parte de arriba y realice su respectiva ta</a>
    </center>
</div>
</div>

</section>


</body>
</html>

				<?php
			        }
			    ?>


