<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$destinatario = "hectorniz-developer@hotmail.com";
$asunto = "Contacto vía Web";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
header('Location:confirmacion.html');
?>