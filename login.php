<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: load.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	
		require 'funciones.php';
		//$conexion = conexion('cremeria', 'root', '');
		$conexion = conexion('cremeria', 'gz90wnok', 'Julio70AK7');
	

	$statement = $conexion->prepare(
		'
		SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
	);
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: load.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';
