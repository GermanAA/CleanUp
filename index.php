<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'funciones.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$password = $_ENV['DB_PASSWORD'];


$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;
$conexion = conexion('cremeria', 'gz90wnok', 'Julio70AK7');
//$conexion = conexion('cre', 'root', '');
//$conexion = conexion('cremeria', 'gz90wnok', 'Julio70AK7');

if (!$conexion) {
	//die();
}

$statement = $conexion->prepare("
SELECT SQL_CALC_FOUND_ROWS * FROM product LIMIT $inicio, $fotos_por_pagina 
");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
	header('Location: index.php');
}

//print_r($fotos);

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];
$total_paginas = ceil($total_post / $fotos_por_pagina);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreCliente = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];
    $direccion = $_POST['direccion'];

    if ($comentario != "") {
        // Datos del correo
        $destinatario = "ventas@clean-up.mx";
        $asunto = "Servicio Clean UP";
        $mensaje = "Nombre del cliente: " . $nombreCliente . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nComentario: " . $comentario . "\nDirección: " . $direccion;

        // Configuración de PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Google
            $mail->SMTPAuth = true;
            $mail->Username = 'ventas@clean-up.mx '; // Cambia esto con tu correo de Google Workspace
            //$mail->Password = ''; // Cambia esto con tu contraseña de Google Workspace o usa una App Password
            $mail->Password =  $password; // Cambia esto con tu contraseña de Google Workspace o usa una App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Configuración del correo
            $mail->setFrom('ventas@clean-up.mx', 'Contacto Clean UP'); // Cambia esto con tu correo de Google Workspace
            $mail->addAddress($correo);
            $mail->addAddress($destinatario);

            // Contenido del correo
            $mail->isHTML(false);
            $mail->Subject = $asunto;
            $mail->Body = $mensaje;

            // Enviar correo
            $mail->send();
            echo "<!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Mensaje Enviado</title>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
                <link rel='stylesheet' href='estilos/styles.css'>
            </head>
            <body>
                <div class='container mt-5'>
                    <div class='alert alert-success'>
                        <h4 class='alert-heading'>Gracias, $nombreCliente</h4>
                        <p>Tu mensaje ha sido enviado con éxito. Nos pondremos en contacto contigo a la brevedad posible.</p>
                        <hr>
                        <p class='mb-0'><a href='index.php' class='btn btn-primary'>Volver al formulario</a></p>
                    </div>
                </div>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
            </body>
            </html>";
        } catch (Exception $e) {
            echo "¡Mensaje No Enviado! Error: {$mail->ErrorInfo}";
        }
    }
}


require 'views/index.view.php';
