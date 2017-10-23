<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<link rel="stylesheet" media="all" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" media="all" type="text/css" href="css/estilos2.css">
	<link rel="stylesheet" media="print" type="text/css" href="css/print.css">
	<title>Fotografías</title>

</head>
<body>
	<div class= "titulos-principales">
	<header>
		<nav>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="natural.html">Natural</a></li>
				<li><a href="paisajes.html">Paisajes</a></li>
				<li><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav>
	</header>
	</div>
	<div>
	<section class="contenido wrapper">
	<?php 
	include("conexion.php");
	session_start();
	if(isset($_POST['ingresar'])){ //preguntar si el boton ingresar lo presionaron
		$nombre = $_POST['usuario'];
		$contrasena = $_POST['password'];
		$instruccion = "SELECT * FROM usuario WHERE usuario =\"".$nombre."\"AND password = \"".$contrasena."\"";
		$resultado = mysqli_query($conectar, $instruccion);
		if(mysqli_num_rows($resultado)==1){
			$usuario = mysqli_fetch_array($resultado);
			echo "<h1>Bienvenido</h1>";

			$_SESSION['sesion_iniciada'] = $usuario;
			header("location: contenidoUsuario.php"); //le pasa toda la informacion de la base de datos
		}
	}
 ?>


}
else{
	echo "Verificar que llenaste los campos";
 ?>}
 	
	</section>
	</div>
	<div class="footer-menu-navegacion">
		<nav>
		<ul>
			<h1>Sígueme en mis redes sociales</h1>
			<li><a href="https://github.com/gabrielos307">Github</a></li>
			<li><a href="https://www.facebook.com/gabrielaso.gandarela">Facebook</a></li>
			<li><a href="https://twitter.com/gabrielaso08">Twitter</a></li>
		</ul>
		</nav>
	</div>
	
</body>
</html>
