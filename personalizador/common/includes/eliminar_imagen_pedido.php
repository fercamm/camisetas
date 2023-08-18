<?php 
	require_once('conexion.php');

	if( isset($_POST["imagen_id"]) ){
		$imagen_id = $con->real_escape_string($_POST["imagen_id"]);
		mysqli_query($con, 'DELETE FROM imagenes where id = '.$imagen_id);
		exit('ok');
	}

	exit();
?>