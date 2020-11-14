<?php
$destino= "nahupintos2001@gmail.com"
$Nombre= $post["Nombre"];
$Correo= $post["Correo"];
$Mensaje= $post["Mensaje"];
$contenido = "Nombre: " . $Nombre . "\nCorreo:" . $Correo . "\nMensaje" . $Mensaje;
mail($destino,"Contacto", $contenido);
header(Location:"gracias.html"); 

?>