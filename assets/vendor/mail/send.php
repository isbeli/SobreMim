<?php
error_reporting(0);


$mensaje="Mensaje del formulario de contacto;
  $mensaje.= "\nNombre: ". $_POST['nome'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['msj'];
  $destino= "isbeliramirez8@gmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");

?>