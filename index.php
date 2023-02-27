<?php
	session_start();
	if($_SESSION["s_usuario"] === null){
	    header("Location: https://csnlogin.4ks.online/index.php");
	}
?>
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

	<h1>Hola Teo</h1>
	<p>Este es un ejemplo de PHP creado con ChatGPT.</p>
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["s_usuario"];?></span>

</body>
</html>
