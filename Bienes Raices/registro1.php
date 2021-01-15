<?php
    //conexion base de datos
   include (conexion.php);
    
	//obtenemos los valores del formulario
	$nombres= $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$email = $_POST['emailuser'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	$insertar = "INSERT INTO datos VALUES('','$nombres','$apellidos','$email','$contraseñaUser')";

	$resultado = mysqli_query($conexion, $insertar);
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
        </script>
        '
?>

