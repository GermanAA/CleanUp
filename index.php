<?php
require 'vendor/autoload.php';
require 'funciones.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$secretKey = $_ENV['CAP_PASSWORD'] ?? '';

if (empty($secretKey)) {
    echo "<div class='alert alert-danger'>Error: Faltan configuraciones en el archivo .env.</div>";
    exit;
}

function validarCaptcha($recaptchaResponse, $secretKey)
{
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaResponse);
    $responseData = json_decode($response);
    echo "<pre>Resultado CAPTCHA: " . json_encode($responseData, JSON_PRETTY_PRINT) . "</pre>";
    return $responseData->success;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>Solicitud POST recibida</pre>";

    $nombreCliente = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $comentario = trim($_POST['comentario'] ?? '');
    $direccion = trim($_POST['direccion'] ?? '');
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    echo "<pre>Datos recibidos:\nNombre: $nombreCliente\nCorreo: $correo\nTeléfono: $telefono\nComentario: $comentario\nDirección: $direccion</pre>";

    if (empty($nombreCliente) || empty($correo) || empty($telefono) || empty($comentario) || empty($direccion)) {
        echo "<div class='alert alert-danger'>Error: Todos los campos son obligatorios.</div>";
        exit;
    }

    if (!validarCaptcha($recaptchaResponse, $secretKey)) {
        echo "<div class='alert alert-danger'>Error: CAPTCHA no válido.</div>";
        exit;
    }

    echo "<pre>Enviando correo...</pre>";
    $destinatario = "ventas@clean-up.mx";
    $asunto = "Servicio Clean UP";
    $mensaje = "Nombre del cliente: $nombreCliente\nCorreo: $correo\nTeléfono: $telefono\nComentario: $comentario\nDirección: $direccion";

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@clean-up.mx';
        $mail->Password = $password;
        $mail->Port = 25;

        $mail->setFrom('info@clean-up.mx', 'Contacto Clean UP');
        $mail->addAddress($correo);
        $mail->addAddress($destinatario);

        $mail->isHTML(false);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        $mail->send();
        echo "<pre>Correo enviado exitosamente a $correo y $destinatario</pre>";

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
        echo "<div class='alert alert-danger'>¡Mensaje No Enviado! Error: {$mail->ErrorInfo}</div>";
    }
}


require 'views/index.view.php';