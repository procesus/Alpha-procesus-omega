<?php
session_start();
$_SESSION["usuario"]="0";
$_SESSION["jefe"]="0";
$_SESSION["empleado"]="0";
$_SESSION["admin"]="0";
header ("Location: index.html");
?>