<link rel="stylesheet" type="text/css" href="">

<?php
include("conexion.php")
?>

        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        
  
    

    	<form action="" method="post">
				<input type="text" name="correo" placeholder="Correo">
				<input type="password" name="contraseña" placeholder="Contraseña">

			<input type="submit"  name="registrarse" value="Registrate">
		
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
