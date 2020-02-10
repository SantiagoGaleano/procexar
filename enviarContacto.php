<?php

$destino = "info@procexar.com";
$nombre = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["message"];

$contenido = "Nombre:" . $nombre . "\nCorreo:" . $email . "\nMensaje". $mensaje;
mail($destino, "Contacto", $contenido);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Tu mensaje ha sido enviado satisfactoriamente, muy pronto nos pondremos en contacto!!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"> 

</head>