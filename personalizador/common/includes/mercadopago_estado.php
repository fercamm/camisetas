<?php
    if(!empty($_POST)){
        include_once('inc.funciones.php');
        
        $pedidoUuid = $_POST["pedidoUuid"];
        $payment_state = $_POST["payment_state"];
    
        $rs = mysqli_query($con, 'SELECT id FROM pedidos where pedido_uuid="'.$pedidoUuid.'"');
        $pedido_id = $rs->fetch_assoc();
        $pedido_id = $pedido_id['id'];

        $query = 'INSERT INTO pagos(pedido_id, fecha, state) values ('. $pedido_id .', NOW(), "' . ($payment_state == 'approved' ? $payment_state : 'prepending') . '")';
        mysqli_query($con, $query);
    
        if($payment_state == 'approved'){
            $query = "UPDATE pedidos SET estado=2 WHERE pedido_id=".$pedido_id;
            mysqli_query($con, $query);
        }

        $query = "UPDATE pedidos SET modificado=now() WHERE pedido_id=".$pedido_id;
        mysqli_query($con, $query);
        
        exit();
    }else if(!empty($_GET["nro"])){
        if(array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'pedido'){
            require './vendor/autoload.php';
        }else{
            require '../vendor/autoload.php';
        }

        include_once('inc.funciones.php');
        
        MercadoPago\SDK::setClientId('818369558054427');
        MercadoPago\SDK::setClientSecret('D39dyrglyc8xY6PVZLyGMwb8TqQqOBA9');
        
        $pedidoUuid = $_GET["nro"];

        $filters = array (
            'external_reference' => $pedidoUuid
        );
        $pagoMP = MercadoPago\Payment::search($filters);
        
        if(!empty($pagoMP) && $pagoMP->total > 0){
            $pagoMP = $pagoMP[0];
        }else{
            $pagoMP = null;
        }
        if(!empty($pagoMP)){
            $rs = mysqli_query($con, 'SELECT id FROM pedidos where pedido_uuid="'.$pedidoUuid.'"');
            $pedido_id = $rs->fetch_assoc();
            $pedido_id = $pedido_id['id'];

            $rs = mysqli_query($con, "SELECT * FROM pagos where pedido_id=".$pedido_id);
            $pago_id = $rs->fetch_assoc();
            $pago_id = $pago_id['id'];

            if(empty($pago_id)){
                $query = 'INSERT INTO pagos(pedido_id, fecha, state, total_paid_amount, payment_id) values ('. $pedido_id .', NOW(), "' . $pagoMP->status . '", '.$pagoMP->transaction_amount.', '.$pagoMP->id.')';
                $sqlInsertPedido = mysqli_query($con, $query);
            }else{
                $query = "UPDATE pagos SET state='".$pagoMP->status."', total_paid_amount = ".$pagoMP->transaction_amount.", payment_id = ".$pagoMP->id." WHERE pedido_id=".$pedido_id;
                mysqli_query($con, $query);
            }
        
            if($pagoMP->status == 'approved'){
                $query = "UPDATE pedidos SET estado=2 WHERE pedido_id=".$pedido_id;
                mysqli_query($con, $query);
            }

            $query = "UPDATE pedidos SET modificado=now() WHERE pedido_id=".$pedido_id;
            mysqli_query($con, $query);
        }
    }
    
?>