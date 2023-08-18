<?php
    require '../../vendor/autoload.php';
    // use MercadoPago;

    MercadoPago\SDK::setClientId('818369558054427');
    MercadoPago\SDK::setClientSecret('D39dyrglyc8xY6PVZLyGMwb8TqQqOBA9');

    $pedido_id = $_POST["pedido_id"];
    $amount = $_POST["precio"];
    $genero = $_POST["genero"];

    # Create a preference object
    $preference = new MercadoPago\Preference();
    
    # Create an item object
    $item = new MercadoPago\Item();
    // $item->id = $pedido_id;
    $item->title = $genero == 'chombas' ? $genero : 'camisetas '.$genero;
    $item->quantity = 1;
    $item->currency_id = 'ARS';
    $item->unit_price = $amount;
    
    $preference->external_reference = $pedido_id;
    $preference->back_urls = array(
        "success" => 'http://yakka.com.ar/personalizador/pedido-'.$pedido_id,
        "failure" => 'http://yakka.com.ar/personalizador/pedido-'.$pedido_id,
        "pending" => 'http://yakka.com.ar/personalizador/pedido-'.$pedido_id
    );

    // $preference->payment_methods = array("excluded_payment_types" => array(array("id" => "ticket")));
        
    # Create a payer object
    // $payer = new Payer();
    // $payer->email = "fercamm@gmail.com";
    
    # Setting preference properties
    $preference->items = array($item);
    // $preference->payer = $payer;
    
    # Save and posting preference
    $preference->save();

    $arrayEnvio = array();
    $arrayEnvio = array_merge($arrayEnvio, array('preference' => $preference->init_point));
    echo json_encode($arrayEnvio);
    exit();

?>