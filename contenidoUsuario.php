<?php 
	session_start();
	if(!isset($_SESSION['sesion_iniciada'])){
		header("location: index.html");
		exit;
	}
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Inicio de sesión</title>
 </head>
 <body>
 	<header>
 		<nav>
 			<ul>
 				<li><a href="cerrar.php">Salir</a></li>
 			</ul>
 		</nav>
 	</header>
 	<div>
 		<h2>Has ingresado con exito.</h2>
 		<h2>Ahuevo karnal <?php echo $_SESSION['sesion_iniciada']['usuario']?></h2>
 		<h1>
 			A continuación escribe tu mensaje y enseguida te contestaremos por correo, para ver los pasos siguientes. 
 			<form id="contact_form" action="" method="POST" enctype="multipart/form-data">
				<div class="row">
					<label for="message">Tu mensaje:</label><br />
					<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
				</div>
				<input id="submit_button" type="submit" value="Send email" />
			</form>						
 		</h1>
 		<?php
 			include('conexion.php');
 			$sentencia = "SELECT * FROM usuario";
 			$resultado = mysqli_query($conectar, $sentencia);
 			echo "<table>";
 			echo "<tr><td>Nombre</td><td>id</td></tr>";
 			while($row = mysqli_fetch_row($resultado)){
 				echo "<tr><td>$row[1]</td><td>$row[0]<t/td></tr></tr>\n";
 			} 
 			echo "</table>"
 		?>
 	</div>
 	
 </body>
 </html>