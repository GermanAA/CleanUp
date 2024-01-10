<?php

session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/load.view.php';
}else {
		header ('Location:login.php');
}	

require 'funciones.php';
//$conexion = conexion('cremeria', 'root', '');
$conexion = conexion('cremeria', 'gz90wnok', 'Julio70AK7');
if(!$conexion){
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
//print_r($_FILES);
$check = @getimagesize($_FILES['product']['tmp_name']);
if($check !== false){
    $carpeta_destino = 'img/';
    $archivo_subido = $carpeta_destino . $_FILES['product']['name'];
    move_uploaded_file($_FILES['product']['tmp_name'], $archivo_subido);

    $statement = $conexion->prepare('
        INSERT INTO product (nombre, categoria, precio, Ruta)
        VALUES (:nombre, :categoria, :precio, :ruta)
    ');

    $statement->execute(array(
        ':nombre' => $_POST['nombre'],
        ':categoria' => $_POST['categoria'],
        ':precio' => $_POST['precio'],
        ':ruta' => $_FILES['product']['name']

    ));
}
}
//require 'views/load.view.php';

?>