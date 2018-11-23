<?php

require 'database.php';
$objData = new Database();
$objData->exec("set names utf8");
$w =	$_POST['checke'];
switch ($w) {
case '1':
$id_prueba= $_POST['id_prueba'];
$nombre = $_POST['nombre'];
$id_ciudad = $_POST['id_ciudad']; 
//$fecha_material = date("Y-m-d H:i:s");
$imgFile = $_FILES['archivo']['name'];
$tmp_dir = $_FILES['archivo']['tmp_name'];
$imgSize = $_FILES['archivo']['size'];
//jalamos la imagen 
$upload_dir = '../../vista/assets/recursos/'; // upload directory
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
// valid image extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'docx', 'doc'); // valid extensions
// rename uploading image
$userpic = rand(1000,1000000).".".$imgExt;
move_uploaded_file($tmp_dir,$upload_dir.$userpic);
//consulta para insertar publicaciones
$sth = $objData->prepare('UPDATE prueba SET nombre = :nombre, id_ciudad = :id_ciudad, archivo = :archivo WHERE prueba.id_prueba = :id_prueba ');
$sth->bindParam(':id_prueba', $id_prueba);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':id_ciudad', $id_ciudad);
$sth->bindParam(':archivo', $userpic);
$sth->execute();
header('location: ../../vista/views/views_admin/prueba.php');
		break;
	case null:
$id_prueba= $_POST['id_prueba'];
$nombre = $_POST['nombre'];
$id_ciudad = $_POST['id_ciudad']; 
$sth = $objData->prepare('UPDATE prueba SET nombre = :nombre, id_ciudad = :id_ciudad WHERE prueba.id_prueba = :id_prueba ');
$sth->bindParam(':id_prueba', $id_prueba);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':id_ciudad', $id_ciudad);
$sth->execute();
header('location: ../../vista/views/views_admin/prueba.php');
		break;
}

?>
