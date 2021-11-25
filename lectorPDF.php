<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------- LINK de CSS -------->
    <link rel="stylesheet" href="styles.css">
    <!----------------------------->
    <title>Visualizador PDF</title>
</head>
<body>
        <?php 
    include("function.php");
    $id = $_GET['id'];
    select_id('libros','id',$id);
    ?>
    <!-- Título -->
    <h1 class="title"><?php echo $row->nombre_del_libro;?></h1>
    <!-- title -->
    <object class="pdfview" type="application/pdf" data="LIBROS/<?php echo $row->nombre_del_libro;?>.pdf"></object>
    <!-- Aprende más sobre object tag: https://www.w3schools.com/tags/tag_object.asp -->
    <!-- Puede usarse tanto archivos PDF en la Web o locales -->
</body>
</html>