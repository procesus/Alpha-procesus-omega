<!DOCTYPE>
<html>
<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="css/materia_prima.css">
    
</head>
<body style="background-image:url(img/banner2.jpg);"><br><br><br>	


<center><font class="titulo" face="Showcard Gothic" size="6">Crear Materia Prima</font></center>
<form action="">
<input class="input-100" pattern="[a-zA-Z  ]{1,15}" type="text" name="Materia Prima" placeholder="Materia Prima" required="">
<input type="file" value="Consultar" id="examin" maxlength="100000" accept="image/*">
<input class="input-100" pattern="[a-zA-Z0-9   #*_]{1,20}" type="text" name="Codigo" placeholder="Codigo" required="">
<input class="input-100" pattern="[0-9]{1,30}" type="text" name="" placeholder="Cantidad" required="">
<input class="input-100" pattern="[a-zA-Z  ]{1,15}" type="text" name="Estado" placeholder="Estado" required="">
<input type="submit" value="Atras" id="boton">
<input type="submit" value="Consultar" id="boton">
</form>


</body>
</html>