<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de PHP con ChatGPT</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-weight: bold;
			font-size: 24px;
			text-align: center;
			padding-top: 50px;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		if($_SESSION["s_usuario"] === demo){
		    header("Location: https://csnlogin.4ks.online/login.php");
		}
	?>
	<h1>Hola Teo</h1>
	<p>Este es un ejemplo de PHP creado con ChatGPT.</p>
</body>
</html>
