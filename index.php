<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'funciones.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$password = $_ENV['DB_PASSWORD'];


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
            $mail->Host = 'localhost'; // Servidor SMTP de Google
            $mail->SMTPAuth = false;
            $mail->Username = 'info@clean-up.mx'; // Cambia esto con tu correo de Google Workspace
            //$mail->Password = ''; // Cambia esto con tu contraseña de Google Workspace o usa una App Password
            $mail->Password =  $password; // Cambia esto con tu contraseña de Google Workspace o usa una App Password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            //$mail->Port = 465;
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar TLS
            $mail->Port = 25; // 
            // Habilitar depuración detallada
            //$mail->SMTPDebug = 3; // Niveles: 1 = errores y mensajes, 2 = mensajes generales, 3 = información detallada (recomendado para depuración)

            // Configuración del correo
            $mail->setFrom('info@clean-up.mx', 'Contacto Clean UP'); // Cambia esto con tu correo de Google Workspace
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
