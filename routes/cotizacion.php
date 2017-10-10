<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$host= $_SERVER["HTTP_HOST"];
$nombre=  htmlspecialchars($_POST['txtname']);
$cotizacion = utf8_decode($_POST['cotizacion']);
$mensaje = utf8_decode($_POST['txtmessage']);
$herramienta= htmlspecialchars($_POST['txtherramienta']);
$cantidad= htmlspecialchars($_POST['txtcantidad']);
$empresa= htmlspecialchars($_POST['txtempresa']);
$telefono= htmlspecialchars($_POST['txtphone']);
$direccion=htmlspecialchars($_POST['txtdireccion']);
$correo= htmlspecialchars($_POST['txtemail']);
$a = "SOLICITUD DE COTIZACIÓN-> ";
$a .=$host; 
$body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
$body.='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>cotizacion </title></head><body>';
$body.="<h3>NECESITA:</h3><p> ";
$body.= $cotizacion;
$body.="</p>";  
$body.="<h3>HERRAMIENTA A COTIZAR:</h3><p> ";
$body.= $herramienta;
$body.="</p>"; 
$body.="<h3> Cantidad: </h3><p>";
$body.= $cantidad;
$body.="</p>"; 
$body.="<h3>NOMBRE DEL CONTACTO :</h3><p> ";
$body.= $nombre; 
$body.="</p>";
$body.="<h3>CORREO DEL CONTACTO : </h3><p>";
$body.= $correo;
$body.="</p>";
$body.="<h3>NOMBRE DE LA EMPRESA: </h3><p>";
$body.= $empresa; 
$body.="</p>";
$body.="<h3>DIRECCION:</h3><p> ";
$body.= $direccion; 
$body.="</p>";
$body.="<h3>TELEFONO: </h3><p>";
$body.= $telefono; 
$body.="</p>";
$body.="<h3>COMENTARIOS: </h3><p>";
$body.= $mensaje; 
$body.="</p>";
$body.='</body></html>';
$m="<div id='modal'><h1 style='color: #fff;font-weight: bold;' class='animate bounceInRight'>Gracias ";
$m.=$nombre;
$m.=" por tu mensaje</h1></div>";
$mail -> From = "formularios.airon@gmail.com";
$mail -> FromName = $nombre;
//$mail->addAddress('jorge@softkab.com', $nombre);
$mail->addAddress('airon@airontools.com', $nombre);
$mail->addReplyTo($correo, $nombre);
$mail -> Subject = $a;
$mail->Body = $body;
$mail -> IsHTML (true);
$mail->isSMTP();
$mail->SMTPDebug = 0;                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'formularios.airon@gmail.com';
$mail->Password = '@~xYTJ%M0\kEu0Brds-A';                            // SMTP password
$mail->CharSet = "UTF-8";
if(!$mail->Send()) {
echo 'Error: ' . $mail->ErrorInfo;
}else { 
echo $m;
}
