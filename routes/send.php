<?php echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; ?>
<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$host= $_SERVER["HTTP_HOST"];
$a = "Hazme una pregunta-> ";
$a.=$host;
$nombre= htmlspecialchars($_POST['txtname']); 
$correo= htmlspecialchars($_POST['txtemail']);
$body="<h1>Nombre: ";
$body.= htmlspecialchars($_POST['txtname']);
$body.="</h1>"; 
$body="<h1>Correo: ";
$body.= htmlspecialchars($_POST['txtemail']);
$body.="</h1>"; 
$body.="<h2> Mensaje: ";
$body.= htmlspecialchars($_POST['txtmessage']);
$body.="</h2>"; 
$body.="<h3>Teléfono : ";
$body.= htmlspecialchars($_POST['txtphone']); 
$body.="</h3>";
$mail -> From = $correo;
$mail -> FromName =$nombre;
$mail->addAddress('airon@airontools.com', $nombre);
$mail->addReplyTo($correo, $nombre);
$mail -> Subject = $a;
$mail -> Body = $body;
$mail -> IsHTML (true);
$mail->IsSMTP();
$mail->SMTPAuth     = true;
$mail->SMTPSecure   = "tls";
$mail->Host         = "smtp.gmail.com";
$mail->Port         = 587;                             // Enable SMTP authentication
$mail->Username = 'formularios.airon@gmail.com';
$mail->Password = '@~xYTJ%M0\kEu0Brds-A';                            // SMTP password

if(!$mail->Send()) {
echo 'Error: ' . $mail->ErrorInfo;
}else { 
echo 'Mail enviado!';
}
