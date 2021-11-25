<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

</head>
<body>
	<center>
		<form method="POST" action="loginProceso.php">
			<label>Usuario: </label>
			<input type="text" name="txtUsu">
			<br>
			<label>Password: </label>
			<input type="password" name="txtPass">
			<br>
			<input type="submit" value="Iniciar sesión">
		</form>
	</center>
</body>
</html>