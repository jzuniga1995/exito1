<?php
$destinatario = "jose.zuniga@outlook.hn";
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];
$asunto = "Mensaje desde mi sitio web";

$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje;

mail($destinatario, $asunto, $contenido);
   
header("Location: gracias.html");
?>
