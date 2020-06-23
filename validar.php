<?php 
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect("localhost","root","","usuarios" );

$consulta = "SELECT * FROM registro WHERE correo='$correo' AND contra='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location: proyecto.html");
}
else{
	 echo "Error de Auntenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


 ?>