<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="css/estilos.css">
    
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css"/>

    <link rel="stylesheet" type="text/css" href="css/iconos1/style.css">
    <link rel="stylesheet" type="text/css" href="css/iconos2/style.css">
    <link rel="stylesheet" type="text/css" href="css/iconos3/style.css">
    <link rel="stylesheet" type="text/css" href="css/iconos4/style.css">
    <link rel="stylesheet" type="text/css" href="css/iconos5/style.css">

    <title>REGISTRO PRODUCTOS</title>
</head>
<body style="background-image:url(img/banner4.jpg);">


<div class="box">
<center><font class="titulo" face="Showcard Gothic">REGISTRAR PRODUCTO</font></center>

<form action="validar_producto.php" method="POST" class="form-register" enctype="multipart/form-data" >

<center><font class="titulo2" face="Showcard Gothic">Codigo-producto</font></center>
<input autocomplete="OFF" class="input-100"  type="text" name="cod_producto" placeholder="CODIGO DEL PRODUCTO" required="">

<center><font class="titulo2" face="Showcard Gothic">Descripcion-producto</font></center>
<input autocomplete="OFF" class="input-100"  type="text" name="descripcion" placeholder="DESCRIPCION DEL PRODUCTO" required="">


<center><font class="titulo2" face="Showcard Gothic">Provedores</font></center>
    <select class="input-100" pattern="[a-zA-Z  ]{1,15}" type="text" name="fk_provedor" >
        <option value="1" class="es">Puma</option> 
        <option value="2" class="es">Adidas</option> 
        <option value="3" class="es">Arturo Calle</option> 
        <option value="4" class="es">Jordan</option>
    </select><br><br>


<center><font class="titulo2" face="Showcard Gothic">Categorias</font></center>
    <select class="input-100" pattern="[a-zA-Z  ]{1,15}" type="text" name="fk_categoria" >
        <option value="1" class="es">Camisa</option> 
        <option value="2" class="es">Pantalon</option> 
        <option value="3" class="es">Vestidos</option> 
        <option value="4" class="es">Chaquetas</option>
    </select><br><br>

    <center><font class="titulo2" face="Showcard Gothic">Imagen</font></center>
<center></center><input class="input-100"  type="file" name="img" required=""></center>

<input pattern="[a-zA-Z  ]{1,35}" type="hidden" name="fk_stock" value=""/><br><br>


<center>
<input type="submit" class="btn btn-success" value="Registrar producto">
<a class="btn btn-danger" href="empleado.php">&nbsp;<font size="4">Volver</font></a>
</center>
</form>
</div>


</body>