<?php

include_once('../includes/conexion.php');

$ret = array();

$uuid = $con->real_escape_string($_POST["uuid_pedido"]);
$emailOwner = $con->real_escape_string($_POST["email_owner"]);

$sqlPedido = mysqli_query($con, "SELECT * FROM pedidos WHERE email = '$emailOwner' AND pedido_uuid = '$uuid' ");
$pedido = mysqli_fetch_object($sqlPedido);
if (isset($pedido)) {
    $ret = array(
        'exists' => true,
        'message' => "Vas a recibir un correo con instrucciones para editar el pedido!"
    );
    http_response_code(200);
} else {
    $ret["exists"] = false;
    $ret["message"] = "El email no corresponde al creador del pedido!";
    http_response_code(400);
}

//var_dump($_POST);


//$ret[0] = $emailOwner;
//$ret[1] = $uuid;

echo json_encode($ret);