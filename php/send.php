<?php
if(isset($_POST["nombre"]) && isset($_POST["tel"]) && isset($_POST["ciudad"])) && isset($_POST["empresa"]) && isset($_POST["distribuidor"])  

{
$to = "esauplm@gmai.com";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Telefono: ".$_POST["tel"]."\n\n\n";
$contenido .= "Ciudad: ".$_POST["ciudad"]."\n";
$contenido .= "Empresa: ".$_POST["empresa"]."\n";
$contenido .= "¿Te interesa ser distribuidor?: ".$_POST["distribuidor"]."\n";
$header = "From: esauplm@gmail.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo '<script language="javascript">alert("¡Mensaje Enviado!");window.location.href="contact.html"</script>';
}
}
?>