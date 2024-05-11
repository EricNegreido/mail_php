<?php

//Funcion main retorna un bool(to, subjet, message, [aditional_headers],[aditional_parameters])
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$asunto = $_POST["asunto"];
$comentario = $_POST["comentario"];
$headers = "MIME-Version:1.0\r\n";// VER
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: $nombre $apellido \r\n";
$exito = mail($email, $asunto, $comentario,$headers);

if($exito){
  echo "Menssaje enviado";
}else{
  echo "Erro al enviar mensaje";
}
?>