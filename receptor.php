<html>
<head>
    <meta charset="utf-8">
</head>

<body>

<?php
  $nombre = $_POST["contact-name"];
  $email = $_POST["contact-email"];
  $emoresa = $_POST["contact-message"];
  

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'narbelys@gmail.com';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

header ("Location: index2.html");
echo 'Mensaje enviado correctamente';
?>

</body>
</html>