<?php
$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$correo_form = $_POST ['email'];
$mensaje_form = $_POST ['mensaje'];


$cuerpo_mail = "Nombre " . $nombre_form . "\r\n" .  "Apellido " . $apellido_form . "\r\n" . "Email " . $correo_form ."\r\n" . "Mensaje" . $mensaje_form;

mail("angellodiazlopez@gmail.com" , "Mensaje enviado desde mi sitio web" , $cuerpo_mail);

// Conexion de base de datos

$conexion = mysqli_connect("localhost", "id19126711_angelo", "1128045468@aA", "id19126711_diazlopez_angelodavid") or exit ("No se puede conectar a base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT,'$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location:contacto.php?ok");

?>