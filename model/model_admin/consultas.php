<?php
require 'database.php';
$objData = new Database();
$ciudad = $objData->prepare('SELECT * FROM ciudad');
$ciudad->execute();
$resultado_ciudad = $ciudad->fetchAll();
?>