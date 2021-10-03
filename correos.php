<?php 

$destino='Joseluisgk38@gmail.com';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensje=$_POST['mensaje'];


$header = "enviado desde la pagina de Deporte";
$mensajecompleto = $mensje . "\nAtentamente: " . $nombre;

 mail($destino, $asunto, $mensajecompleto, $header);
echo "<script>alert('correo enviado Exitosamente')</script>";
 echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
 ?>
