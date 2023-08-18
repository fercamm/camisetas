<?php 
	require_once('conexion.php');
	$sqlConfig = mysqli_query($con, "SELECT * FROM parametros where nombre='cantidadMinima'");
	$config = mysqli_fetch_object($sqlConfig);

	$sqlConfig = mysqli_query($con, "SELECT * FROM parametros where nombre='cantidadMinimaShort'");
	$configShort = mysqli_fetch_object($sqlConfig);

	$sqlConfig = mysqli_query($con, "SELECT * FROM parametros where nombre='cantidadMinimaChombas'");
	$configChomba = mysqli_fetch_object($sqlConfig);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_banco'");
	$transferencia_banco = mysqli_fetch_object($sql);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_tipo_cuenta'");
	$transferencia_tipo_cuenta = mysqli_fetch_object($sql);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_nro_cuenta'");
	$transferencia_nro_cuenta = mysqli_fetch_object($sql);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_cbu'");
	$transferencia_cbu = mysqli_fetch_object($sql);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_nombre'");
	$transferencia_nombre = mysqli_fetch_object($sql);

	$sql = mysqli_query($con, "SELECT * FROM parametros where nombre='transferencia_cuit'");
	$transferencia_cuit = mysqli_fetch_object($sql);
?>