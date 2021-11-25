<?php 
	 session_start();
	 if (!isset($_SESSION['nombre'])) {
	 	header('Location: login.php');
	 }elseif(isset($_SESSION['nombre'])){
	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'baul';

	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}
	 }else{
	 	echo "Error en el sistema";
	 }

	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	
	$sentencia = $bd->prepare("DELETE FROM libros WHERE id = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}

?>