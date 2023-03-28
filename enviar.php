<?php
$name = $_POST['usuario'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];
$message = $_POST['Mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['Mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'juan.garcia6946@alumnos.udg.mx';
$asunto = 'Mensaje de...(pagina web)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>