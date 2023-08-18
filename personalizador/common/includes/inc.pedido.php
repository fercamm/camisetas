<?php 
	require_once('conexion.php');

	if( isset($_GET["nro"]) ){
		$uuid = $con->real_escape_string($_GET["nro"]);
	}

	$colores = [];
	$sqlPedido = mysqli_query($con, "SELECT * FROM pedidos WHERE pedido_uuid = '".$uuid ."'");
	$pedido = mysqli_fetch_object($sqlPedido);
	$id = $pedido->id;
	$pedidoUuid = $pedido->pedido_uuid;

	$permiteEditar = false;
	if(in_array($pedido->estado, array(1, 2))){
		$permiteEditar = true;
	}

	$sqlJugadores = mysqli_query($con, 'SELECT * FROM jugadores WHERE pedido = '.$id.' ORDER BY FIELD (talle, 2, 4, 6, 8, 10, 12, 14, "S", "M", "L", "XL", "XXL")');

	$sqlArqueros = mysqli_query($con, 'SELECT * FROM arqueros WHERE pedido = '.$id.' ORDER BY FIELD (talle, 2, 4, 6, 8, 10, 12, 14, "S", "M", "L", "XL", "XXL")');

	$sqlColores = mysqli_query($con, 'SELECT * FROM colores');

	$i = 1;

	while ( $result = mysqli_fetch_object($sqlColores) ){
		$colores[$i] = $result->nombre;
		$i++;
	}

	$sqlImagenEscudo = mysqli_query($con, "SELECT * FROM imagenes WHERE pedido_id = '".$id ."' and tipo = 'escudo' and active = 1");

	$sqlImagenExtra = mysqli_query($con, "SELECT * FROM imagenes WHERE pedido_id = '".$id ."' and tipo = 'extra' and active = 1");

	$genero = $pedido->tipo == 'h' ? 'hombre' : ($pedido->tipo == 'm' ? 'mujer' : 'chombas');

	$pagado = 0;
	$sqlPagos = mysqli_query($con, "SELECT * FROM pagos where state in ('approved', 'accredited') and pedido_id=" . $id);
	while ( $pago = mysqli_fetch_object($sqlPagos) ){
		if(!empty($pago->total_paid_amount) && $pago->total_paid_amount > 0){
			$pagado += $pago->total_paid_amount;
		}
	}


?>