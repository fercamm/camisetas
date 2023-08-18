<?php 
	require_once('conexion.php');

	if( isset($_POST["uuid_pedido"]) ){
		$uuid = $con->real_escape_string($_POST["uuid_pedido"]);
	}

	$colores = [];
	$sqlPedido = mysqli_query($con, "SELECT * FROM pedidos WHERE pedido_uuid = '".$uuid ."'");

	$pedido = mysqli_fetch_object($sqlPedido);
	if(empty($pedido) || !in_array($pedido->estado, array(1, 2))){//Si el pedido no existe o su estado no es 1 ni 2, no se puede editar.
		exit();
	}
	$pedido = $pedido->id;

    $file_escudo = $_FILES["escudo"];
    $posicion_escudo = $con->real_escape_string($_POST["posicion_escudo"]);
    $file_extra = $_FILES["extra"];
	$posicion_extra = $con->real_escape_string($_POST["posicion_extra"]);

	$data = null;
	$image_id = null;
	$nombreArchivo = null;

	if($file_escudo["error"]==0){
		$stmt = $con->prepare('INSERT INTO imagenes (fecha, active, tipo, posicion, pedido_id, archivo, nombre_archivo) values (?, ?, ?, ?, ?, ?, ?)');
		$fecha = 'now()';
		$active = '1';
		$tipo = 'escudo';
		$nombreArchivo = $con->real_escape_string($file_escudo["name"]);
		$archivo = base64_encode(file_get_contents(addslashes($file_escudo["tmp_name"])));
		$stmt->bind_param('sississ', $fecha, $active, $tipo, $posicion_escudo, $pedido, $archivo, $nombreArchivo);
		$stmt->execute();
		$image_id = mysqli_insert_id($con);
		$stmt->close();

		$data = $archivo;

		$posicion = $posicion_escudo;
	}

	if($file_extra["error"]==0){
		$stmt = $con->prepare('INSERT INTO imagenes (fecha, active, tipo, posicion, pedido_id, archivo, nombre_archivo) values (?, ?, ?, ?, ?, ?, ?)');
		$fecha = 'now()';
		$active = '1';
		$tipo = 'extra';
		$nombreArchivo = $con->real_escape_string($file_extra["name"]);
		$archivo = base64_encode(file_get_contents(addslashes($file_extra["tmp_name"])));
		$stmt->bind_param('sississ', $fecha, $active, $tipo, $posicion_extra, $pedido, $archivo, $nombreArchivo);
		$stmt->execute();
		$image_id = mysqli_insert_id($con);
		$stmt->close();

		$data = $archivo;

		$posicion = $posicion_extra;
	}

	$arrayEnvio = array();
	$arrayEnvio = array_merge($arrayEnvio, array('data' => $data));
	$arrayEnvio = array_merge($arrayEnvio, array('image_id' => $image_id));
	$arrayEnvio = array_merge($arrayEnvio, array('posicion' => $posicion));
	$arrayEnvio = array_merge($arrayEnvio, array('nombreArchivo' => $nombreArchivo));
	echo json_encode($arrayEnvio);
	exit();
?>