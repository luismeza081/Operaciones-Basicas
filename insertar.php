<?php
include("conexion.php")
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="image/png" href="img\logo.png">
	<meta charset="utf-8"> 
        <title>Formulario De Registro</title>
</head>
        <body style="background-color:#58FAF4 ">
          <form action="" method="post">
    		<h2>Registro de Usuarios</h2> <br>
    		<center>
                 	 <center>
                    <img src="img\user.png" width="300" height="150">
                 </center> 
                 </center>  
				<input type="text" name="correo" placeholder="Correo">
				<input type="password" name="contraseña" placeholder="Contraseña">

	<input type="submit"  name="registrarse" value="Registrate"> <br>
	
		</form>	

		 <form action="sesion.html" method="post">

		 	<center>
                 	 <center>
                    <img src="img\user.png" width="300" height="350">
                 </center> 
                 </center>  

		 	 <input type="submit" value="Iniciar Sesión"><br>
</form>

     </body>
</html>

<?php
	if(isset($_POST['registrarse'])){
		
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO registro VALUES('$correo','$contraseña')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sintaxis";
		}
	}
?>
