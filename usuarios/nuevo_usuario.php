<!DOCTYPE>
<html>
<head>
	<title>Nuevo usuario</title>
</head>
<body>
	<center><br><br><br>
		<form action="proceso_guardar_usuario.php" method="POST" enctype="multipart/form-data"><br><br>

			<input pattern="[a-zA-Z  ]{1,15}" type="text" required name="nombre" placeholder="Nombre Empleado" value=""/><br><br>

			<select class="input-100" pattern="[a-zA-Z  ]{1,15}" type="text" name="fk_tipo_doc" >
                <option value="1" class="es">Cedula</option> 
                <option value="2" class="es">Cedula de extranjeria</option>
             </select>
             <br><br>

			<input type="text" required name="documento" placeholder="Documento" value=""/><br><br>
			<input type="text" required name="clave" placeholder="Clave" value=""/><br><br>

			<input type="submit" value="Aceptar">
			<a class="sub-rayado2" href="tabla_usuarios.php">Atras</a>
		</form>
	</center>
</body>
</html>