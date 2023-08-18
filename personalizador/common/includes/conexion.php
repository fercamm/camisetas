<?php

date_default_timezone_set ("America/Argentina/Buenos_Aires");

//$con = mysqli_connect("localhost","yakkacom_admin","XL78VGLGbEnU","yakkacom_camisetas");
$con = mysqli_connect("localhost","root","root","yakkacom_camisetas");
//$mysqli = new mysqli("localhost", "mi_usuario", "mi_contraseña", "world");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>