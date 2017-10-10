<?php
date_default_timezone_set('America/Mexico_City'); 
$host= $_SERVER["HTTP_HOST"];
$a = "FORMULARIO DE CONTACTO-> ";
$a.=$host;
$nombre= htmlspecialchars($_POST['txtname']); 
$correo= htmlspecialchars($_POST['txtemail']);
$body="<h3>Nombre: </h3><p>";
$body.= htmlspecialchars($_POST['txtname']);
$body.="</p>"; 
$body="<h3>Correo: </h3><p> ";
$body.= htmlspecialchars($_POST['txtemail']);
$body.="</p>"; 
$body.="<h3> Mensaje: </h3><p>";
$body.= utf8_decode($_POST['txtmessage']);
$body.="</p>"; 
$body.="<h3>Telefono : </h3><p>";
$body.= htmlspecialchars($_POST['txtphone']); 
$body.="</p>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$to = "jorge@softkab.com;
// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$a,$message,$headers);