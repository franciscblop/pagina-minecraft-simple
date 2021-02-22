<?php
//lamado a campos

//correo al que se enviara el mensaje
$destinatario = 'sfranciscoax@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = ("location:index.html");
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario,$asunto, $mensajecompleto, $header);

?>