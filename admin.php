<?php

session_start();

if (isset($_SESSION['usuario'])) {



	require 'funciones.php';
	$fotos_por_pagina = 8;
	
	$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
	$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina :0;
	//$conexion = conexion('cremeria', 'root', '');
	$conexion = conexion('cremeria', 'gz90wnok', 'Julio70AK7');
	
	if (!$conexion){
		die();
	}
	
	$statement = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM product LIMIT $inicio, $fotos_por_pagina 
	");
	
	$statement->execute();
	$fotos = $statement->fetchAll();
	
	if(!$fotos){
		header('Location: admin.php');
	}
	
	//print_r($fotos);
	
	$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
	$statement->execute();
	$total_post= $statement->fetch()['total_filas'];
	$total_paginas =ceil($total_post / $fotos_por_pagina);
	require 'views/admin.view.php';
	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
		$nombreCliente = $_POST['nombre'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$comentario = $_POST['comentario'];
		$direccion = $_POST['direccion'];
	
	
		if($comentario!=""){
				// Se declaran los tres parámetros que se usarán en el correo.
				  $destinatario="luis";
				  $asunto= "Cremería & Abarrotes San Pedro";
				  $mensaje="Nombre del cliente:" . $nombreCliente . "\nCorreo:" . $correo.  "\nTeléfono:" . $telefono . "\nComentario:" . $comentario. "\nDirección:" . $direccion;
	
				// Se intenta enviar el correo y se muestra un mensaje en la página con el resultado.
				  if (mail ($destinatario, $asunto, $mensaje)){
					echo (" Mensaje enviado");
					
					
				  } else {
					echo  ("MENSAJE NO ENVIADO");
				  } 
		}
	
	
	}







	
}else {
		header ('Location:login.php');
}

?>

