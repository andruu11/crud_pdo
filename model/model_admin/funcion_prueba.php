<?php
	require 'database.php';
	$objData = new Database();
	$tabla = " ";
	$prueba = $objData->prepare("SELECT * FROM `prueba` INNER JOIN ciudad ON prueba.id_ciudad = ciudad.id_ciudad");
	$prueba->execute();
	$resultado_prueba = $prueba->fetchAll();
	foreach ($resultado_prueba as $key => $valor_prueba) {
 $editar = '<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" title=\"Editar\" data-target=\"#Modal_Editar_Prueba\" data-id_prueba=\"'.$valor_prueba['id_prueba'].'\"  data-nombre=\"'.utf8_encode($valor_prueba['nombre']).'\" data-id_ciudad=\"'.utf8_encode($valor_prueba['id_ciudad']).'\"><i class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></i></button>'; 
	   
$archivo=$valor_prueba['archivo'];
$trozos = explode(".", $archivo); 
$extension = end($trozos); 
if($extension == 'pdf'){
 $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\" ><img src=\"../../assets/img/pdf.png\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'docx' || $extension == 'doc' ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/word.png\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'mp4' || $extension == 'mpeg' || $extension == 'avi' || $extension == 'mpeg-4' || $extension == 'wmv' ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/video.jpg\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'  ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/imagen.jpg\" width=\"50px\" height=\"50px\"></a>';
 }else{
 	 $var = '';
 }

	$tabla.='{
				  "nombre":"'.utf8_encode($valor_prueba['nombre']).'",
				  "ciudad":"'.utf8_encode($valor_prueba['des_ciudad']).'",
				  "archivo":"'.$var.'",
				  "acciones":"'.$editar.'"
				},';	
}
	
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>