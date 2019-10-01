<?php

class Login
{
 public function iniciar($documento, $clave)

{
  session_start();
  include ("conexion.php");




$cont="0";
$_SESSION["admin"]="0";
 $sql = "SELECT * FROM reg_usuarios WHERE documento='$documento' AND clave='$clave'";
 if (!$result = $db->query($sql))
  {
  die ('Hay un error corriendo en la consulta o datos no encontrados [' . $db->error . ']');
 }
 while ($row = $result->fetch_assoc())
{

  $cont=$cont+1;

}

if ($cont!="0")
 {
  $_SESSION["usuario"]="1";
  $_SESSION["documento_actual"]=$documento;
  header("Location:usuario.php");
}

if ($cont=="0")
{
	header("Location:login.html");
}



}//fin methodo
}//fin claas


$nuevo=new Login();
$nuevo->iniciar($_POST["documento"],$_POST["clave"]);








?>