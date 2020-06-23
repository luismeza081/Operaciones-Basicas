<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "usuarios";

$enlace = mysqli_connect($server, $user,$pass,$db);

if (!$enlace) {
	echo "Error en la Conexion con el Servidor";
}


 ?>