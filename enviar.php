<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

// Datos para el correo
$destinatario = "hernanr.castellanosc@hotmail.com";
$asunto = "Agenda de hora desde el portal web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";
$carta .= "Marca: $Marca \n";
$carta .= "Modelo: $modelo";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>