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
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['usuario']) && !empty($_POST['usuario']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['password2']) && !empty($_POST['password2']) &&
	isset($_POST['email']) && !empty($_POST['email'])) && ($_POST['password'] == $_POST['password2'])
{
	$con = mysql_connect($host, $user, $pw) or die ("Problemas");
	mysql_select_db($db, $con);
	mysql_query("INSERT INTO registro (Nombre, usuario, password, email) VALUES {'$_POST[nombre]', '$_POST[usuario]','$_POST[password]','$_POST[email]',", $con);



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

