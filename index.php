<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Mysql mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>PAGINAS PENDIENTES DEL LIBRO </h1>
<br><br>

<?php
	include("function.php");
?>
<!-- <p align="right"> -->


<?php 
	$sql = "select * from libros";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>

       
	<?php } ?>
</form>
	<!-- <input type="text" value="<?php echo $row->nombre_del_libro;?>" name="nombre_del_libro">
	<input type="text" value="<?php echo $row->pagina_pendiente;?>" name="pagina_pendiente"> -->
<form align="right">
	<a href="cerrar.php"> Cerrar Sesión</a>
</form>		
<form method="POST" action="insertar.php">
	<a><input type="text" name="txtLibro"></a>
	<a><input type="submit" value="INGRESAR LIBRO"></a>
</form>
	
<table border="1" width="100%">
	<tr>
		<th width="70%">NOMBRE DEL LIBRO</th>
		<th width="10%">PAGINA PENDIENTE</th>
		<th width="10%">ACTUALIZAR</th>
		<th width="10%">ELIMINAR</th>

	</tr>
<?php 
	$sql = "select * from libros";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td>
			<a href="lectorPDF.php?id=<?php echo $row->id; ?>"><?php echo $row->nombre_del_libro;?></a>
		</td>
		<td><?php echo $row->pagina_pendiente;?></td>
		<td>
<a href="editar.php?id=<?php echo $row->id; ?>"> Actualizar
<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
        </td>

        <td>
<a href="eliminar.php?id=<?php echo $row->id; ?>"> Eliminar
<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
        </td>

	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>