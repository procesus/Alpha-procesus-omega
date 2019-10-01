<?php
$db = new mysqli('localhost', 'root', '', 'procesus' );
$acentos = $db->query("SET NAMES 'utf8'" );
//SERVIDOR, USUARIOS, PASSWORD,DB
if ($db->connect_error > 0) {

	die('No hay conexion_DB [' . $db->connect_error . ']');
}
?>