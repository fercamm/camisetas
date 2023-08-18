<?php
$email = $_POST["email"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <info@yakka.com.ar>' . "\r\n";
$mensaje = 'Sin datos. Pedido cargado por: '.$email;
mail('fercamm@gmail.com','ERROR DIFERENCIAS',$mensaje,$headers); // a yakka
?>