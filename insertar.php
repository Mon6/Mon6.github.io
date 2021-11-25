<?php  
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

	$nombre = $_POST['txtLibro'];
	$pagina = 0;

	$sentencia = $bd->prepare("INSERT INTO libros(nombre_del_libro,pagina_pendiente) VALUES (?,?);");
	$resultado = $sentencia->execute([$nombre,$pagina]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>