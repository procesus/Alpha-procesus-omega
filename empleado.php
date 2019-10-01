<?php
				  include ("seguridad_usuario.php");
                  include("conexion.php");


				?>


<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/empleado.css">
	<link rel="stylesheet" type="text/css" href="css/iconos1/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos2/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos3/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos4/style.css">
	<link rel="stylesheet" type="text/css" href="css/iconos5/style.css">

	<title>EMPLEADO</title>
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
	    	<a href="salir.php" class="icon-power-off">&nbsp;<font size="4">Salir.</font></a>
	    </div>
    </div> 


	<nav>
		<ul class="menu">
			
			<li><a class="icon-price-tags"href="tabla_productos.php">&nbsp;<font size="4">Productos</font></a></li> 	
			<li><a class="icon-book3"href="#" target="_blank">&nbsp;<font size="4">Documentacion</font></a></li>
			<li><a class="icon-connection-full"href="#" target="_blank">&nbsp;<font size="4">Reportes</font></a></li>
			<li><a class="icon-arrow-circle-o-left"href="usuario.php">&nbsp;<font size="4">Atras</font></a></li>
		</ul>
	</nav>
</input>



<section id="blog">
<div class="padre">
<div class="alineacion"><img src="img/icono2.png" alt=""><a href="tabla_productos.php">Productos</a></div>
<div class="alineacion"><img src="img/icono4.png" alt=""><a href="registro_productos.php">Registrar producto</a></div>
<div class="alineacion"><img src="img/icono3.png" alt=""><a href="#" target="_blank">Documentacion</a></div>



<div class="caja">
<div class="informacion">
	<center>
	<a>Bienvenido a los perfiles de Peolpe Kids, elija su perfil.</a>
	<br>
	<a>Por favor ejija uno de los items que aparecen en el programa en la parte de arriba y realice su respectiva tarea.</a>
    </center>
</div>
</div>



</section>
</body>
</html>

