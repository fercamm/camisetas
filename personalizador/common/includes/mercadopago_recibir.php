<?php
    require '../../vendor/autoload.php';
    // use MercadoPago;
    // use MercadoPago\SDK;
    
    include_once('inc.funciones.php');
    
    MercadoPago\SDK::setClientId('818369558054427');
    MercadoPago\SDK::setClientSecret('D39dyrglyc8xY6PVZLyGMwb8TqQqOBA9');

    $pagoMP = MercadoPago\Payment::find_by_id($_GET['id']);
    if(!empty($pagoMP)){
        $rs = mysqli_query($con, 'SELECT id FROM pedidos where pedido_uuid="'.$pagoMP->external_reference.'"');
        $pedido_id = $rs->fetch_assoc();
        if(!empty($pedido_id) && !empty($pedido_id['id'])){
            $pedido_id = $pedido_id['id'];
    
            if($pedido_id){
                $rs = mysqli_query($con, 'SELECT id FROM pagos where pedido_id="'.$pedido_id.'"');
                $pago_id = $rs->fetch_assoc();
                $pago_id = $pago_id['id'];
    
                if($pago_id){
                    $query = "UPDATE pagos SET state='".$pagoMP->status_detail."' WHERE pedido_id=".$pedido_id;
                    mysqli_query($con, $query);
                }else{
                    $query = 'INSERT INTO pagos(pedido_id, fecha, state, total_paid_amount, payment_id) values ('. $pedido_id .', NOW(), "' . $pagoMP->status_detail . '", '.$pagoMP->transaction_amount.', '.$pagoMP->id.')';
                    $sqlInsertPedido = mysqli_query($con, $query);
                }
    
                if($pagoMP->status_detail == 'accredited' || $pagoMP->status_detail == 'approved'){
                    $query = "UPDATE pedidos SET estado=2 WHERE pedido_id=".$pedido_id;
                    mysqli_query($con, $query);
                }
            }
        }else{
            $pedido_id = explode('-', $pagoMP->external_reference)[0];
            $jugador_id = explode('-', $pagoMP->external_reference)[1];

            $rs = mysqli_query($con, 'SELECT id FROM jugadores where id='.$jugador_id);
            $jugador_id = $rs->fetch_assoc();
            if(!empty($jugador_id) && !empty($jugador_id['id'])){
                $jugador_id = $jugador_id['id'];

                $rs = mysqli_query($con, 'SELECT id FROM pagos where pedido_id='.$pedido_id.' and jugador_id='.$jugador_id);
                $pago_id = $rs->fetch_assoc();
                $pago_id = $pago_id['id'];
    
                if($pago_id){
                    $query = "UPDATE pagos SET state='".$pagoMP->status_detail."' WHERE pedido_id=".$pedido_id.'and jugador_id='.$jugador_id;
                    mysqli_query($con, $query);
                }else{
                    $query = 'INSERT INTO pagos(pedido_id, jugador_id, fecha, state, total_paid_amount, payment_id) values ('. $pedido_id . ',' . $jugador_id . ', NOW(), "' . $pagoMP->status_detail . '", '.$pagoMP->transaction_amount.', '.$pagoMP->id.')';
                    $sqlInsertPedido = mysqli_query($con, $query);
                }
    
                if($pagoMP->status_detail == 'accredited' || $pagoMP->status_detail == 'approved'){
                    $query = "UPDATE jugadores SET estado=2 WHERE pedido_id=".$pedido_id.' and jugador_id='.$jugador_id;
                    mysqli_query($con, $query);
                }
            }
        }
    }
    header("HTTP/1.1 200 OK");
    http_response_code(200);
    die;
?>