<?php


$nombre = $_POST["nombreReferido"];
$cedula = $_POST["cedulaReferido"];
$telefono = $_POST["telefonoReferido"];
$creditoReferido = $_POST["creditoReferido"];
$valorReferido = $_POST["valorReferido"];
$codigo = $_POST["codigo"];
$nombreRefiere = $_POST["nombreRefiere"];
$telefonoRefiere = $_POST["telefonoRefiere"];


$contenido = "Datos Referidos" . "<br>Nombre: " . $nombre . "<br>Cedula: " . $cedula . "<br>Telefono: ". $telefono . "<br>Tipo de Credito: ". $creditoReferido . "<br>Valor: ". $valorReferido . "<br>DATOS QUIEN LO REFIERE" . "<br>Codigo: " . $codigo . "<br>Nombre: " . $nombreRefiere . "<br>Telefono: " . $telefonoRefiere  ;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PhpMailer\PHPMailer\PHPMailer;
use PhpMailer\PHPMailer\SMTP;
use PhpMailer\PHPMailer\Exception;

require 'PhpMailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';

// Load Composer's autoloader

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'procexar.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@procexar.com';                     // SMTP username
    $mail->Password   = 'procexar2020';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@procexar.com', $nombre);
    $mail->addAddress('info@procexar.com');     // Add a recipient
    

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Referidos';
    $mail->Body    = $contenido;

    $mail->send();
    echo '<script>
    alert("El mensaje se envio correctamente, pronto nos pondremos en contacto");
    window.history.go(-1);
    </script>';
} catch (Exception $e) {
    echo
     "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>