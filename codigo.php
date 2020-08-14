<?php
//captura de variables
$nombre=$_Post['nombre'];
$email=$_Post['email'];
$consulta=$_Post['consulta'];

$mensaje=" 
<strong>Nombre:</strong> $nombre <br/> <br/>
<strong>email:</strong> $email <br/> <br/>
<strong>consulta:</strong> $consulta <br/> <br/>
";

mail("bust.tam@gmail.com", "consulta Web Site", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=iso-8859-1\n");

?>