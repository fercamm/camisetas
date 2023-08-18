<?php
header('Content-Type: text/html; charset=UTF-8');

include_once('inc.funciones.php');

traerPrecios();
traerParametros();
//sanitizo variables POST
foreach($_POST as $key => $value) {
    if (!is_array($value)) {
        $_POST[$key] = $con->real_escape_string($value);
    }
}

$genero = $_POST["genero"];

$precioUUID = $_POST["hPUidMb"];

if($genero != 'chombas'){
  $precioType = (int) $_POST["hPrecioTypeMb"];
  switch ($precioType) {
      case 0:
          $precioConjunto = $precios->cam;
          $precioArquero = $precios->arquero;
          break;
      case 1:
          $precioConjunto = $precios->cam_short;
          $precioArquero = $precios->cam_short;
          break;
      case 2:
          $precioConjunto = $precios->cam_media;
          $precioArquero = $precios->cam_media;
          break;
      case 3:
          $precioConjunto = $precios->cam_short_media;
          $precioArquero = $precios->cam_short_media;
          break;
  }
}

$fecha = date("Y-m-d H:i:s");
$diseno = $_POST["option_diseno_mb"];
$color_base = $_POST["option_color_base_mb"];
$color_principal = $_POST["option_color_principal_mb"];
$color_secundario = $_POST["option_color_secundario_mb"];
$formato = $_POST["option_formato_mb"];
$color_nro = $_POST["option_color_text_mb"];
$nombre_apellido = $_POST["nombre_mb"];
$file_escudo = $_FILES["escudo_mb"];
$posicion_escudo = $_POST["posicion_escudo_mb"];
$file_extra = $_FILES["extra_mb"];
$posicion_extra = $_POST["posicion_extra_mb"];
$zona_envio = $_POST["zona_envio_mb"];
$localidad_envio = $_POST["localidad_envio_mb"];
$codigo_postal_envio = $_POST["codigo_postal_envio_mb"];
$tipo_envio = $_POST["tipo_envio_mb"];
$email = $_POST["email_mb"];
$telefono = $_POST["telefono_mb"];
$comentario = $_POST["comentarios_mb"];
$color_base_arq = $_POST["option_color_base_arq_mb"];
$color_principal_arq = $_POST["option_color_principal_arq_mb"];
$color_secundario_arq = $_POST["option_color_secundario_arq_mb"];
$formato_arq = $_POST["option_formato_arq_mb"];
$color_base_short = $_POST["option_color_base_short_mb"];
$color_principal_short = $_POST["option_color_principal_short_mb"];
$color_secundario_short = $_POST["option_color_secundario_short_mb"];
$color_base_short_arquero = $_POST["option_color_base_short_arquero_mb"]; 
$color_principal_short_arquero = $_POST["option_color_principal_short_arquero_mb"];
$color_secundario_short_arquero = $_POST["option_color_secundario_short_arquero_mb"];
$color_medias = $_POST["option_color_medias_mb"];
$color_nro_arq = $_POST["option_color_text_arq_mb"];
$total = $_POST["precio"];

$camisetasJugadores = json_decode(json_decode('"'.$_POST["camisetasJugadores"].'"'));
$cantidadCamisetasJugadores = count($camisetasJugadores);

$descuentoAplicado = 0;

if($genero != 'chombas'){
  $cantidadShortJugadores = count($_POST["talle_short_jugador"]);
  $cantidadCamisetasArqueros = count($_POST["talle_arquero"]) * $_POST["option_arq_on_mb"];
  $cantidadShortArqueros = count($_POST["talle_short_arquero"]) * $_POST["option_short_arquero_on_mb"];

  $shortsJugadores = json_decode(json_decode('"'.$_POST["shortsJugadores"].'"'));
  $conjuntosJugadores = json_decode(json_decode('"'.$_POST["conjuntosJugadores"].'"'));
  $camisetasArqueros = json_decode(json_decode('"'.$_POST["camisetasArqueros"].'"'));
  $shortsArqueros = json_decode(json_decode('"'.$_POST["shortsArqueros"].'"'));
  $conjuntosArqueros = json_decode(json_decode('"'.$_POST["conjuntosArqueros"].'"'));

  if((count($camisetasJugadores) + count($shortsJugadores) + count($conjuntosJugadores) + count($camisetasArqueros) + count($shortsArqueros) + count($conjuntosArqueros)) == 0){
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@yakka.com.ar>' . "\r\n";
    $mensaje = 'Sin datos. Pedido cargado por: '.$email;
    mail('fercamm@gmail.com','ERROR EN PEDIDO WEB',$mensaje,$headers); // a yakka
  }
}else{
  $precioConjunto = $precios->chomba;

  $cantidadDeConjuntos = $cantidadCamisetasJugadores;
  
  if((count($camisetasJugadores)) == 0){
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@yakka.com.ar>' . "\r\n";
    $mensaje = 'Sin datos. Pedido cargado por: '.$email;
    mail('fercamm@gmail.com','ERROR EN PEDIDO WEB',$mensaje,$headers); // a yakka
  }
}

//   if ($cantidadDeConjuntos >= $precios->desc_cantidad2) {
//       $descuentoAplicado = $precios->descuento2;
//   } else if ($cantidadDeConjuntos >= $precios->desc_cantidad && $cantidadDeConjuntos < $precios->desc_cantidad2) {
//       $descuentoAplicado = $precios->descuento;
//   }

// if ($descuentoAplicado > 0) {
//     $total = $total * (1 - ($descuentoAplicado/100));
// }

$rs = mysqli_query($con, "SELECT id FROM clientes where email='".$con->real_escape_string($email)."'");
if($rs){
  $clienteId = $rs->fetch_assoc();
  $clienteId = $clienteId['id'];
}

if(!empty($clienteId)){
  $queryCliente = "UPDATE clientes SET nombre_apellido='".$con->real_escape_string($nombre_apellido)."', email='".$con->real_escape_string($email)."', 
    telefono='".$con->real_escape_string($telefono)."', zona_envio='".$con->real_escape_string($zona_envio)."', 
    localidad_envio='".$con->real_escape_string($localidad_envio)."', cod_postal='".$con->real_escape_string($codigo_postal_envio)."', 
    modificacion='".$con->real_escape_string($fecha)."' WHERE id=".$clienteId;
  mysqli_query($con, $queryCliente );
}else{
  $queryCliente = 'INSERT INTO clientes(nombre_apellido, email, telefono, zona_envio, localidad_envio, cod_postal, creacion, modificacion) VALUES ("' .
    $con->real_escape_string($nombre_apellido) . '", "' . $con->real_escape_string($email) . '", "' . $con->real_escape_string($telefono) . '", "' . 
    $con->real_escape_string($zona_envio) . '", "' . $con->real_escape_string($localidad_envio) . '", "' . $con->real_escape_string($codigo_postal_envio) . '", "' . 
    $fecha . '", "' . $fecha . '")';
  mysqli_query($con, $queryCliente);
  $clienteId = mysqli_insert_id($con);
}

if(!empty($_POST["pedidoUuid"])){
  $pedidoUuid = $_POST["pedidoUuid"];
}

if(empty($pedidoUuid)){
  if($genero != 'chombas'){
      $query = 'INSERT INTO pedidos(cliente_id, fecha, diseno, color_base, color_principal, color_secundario, 
                                    formato, color_nro, nombre_apellido, email, telefono, comentario, estado, diseno_arquero, color_base_arquero, 
                                    color_principal_arquero, color_secundario_arquero, formato_arquero, color_nro_arquero, 
                                    diseno_short, color_base_short, color_principal_short, color_secundario_short, 
                                    diseno_short_arquero, color_base_short_arquero, color_principal_short_arquero, color_secundario_short_arquero, 
                                    color_medias, mobile, option_arq_on, 
                                    option_short_on, option_short_arquero_on, option_medias_on,
                                    precio_uuid, precio_conjunto, precio_arquero, precio_total, descuento, mujer, pedido_uuid , tipo, zona_envio, localidad_envio, cod_postal, tipo_envio ) 
                VALUES(' . $clienteId . ', "' . $fecha . '", ' . $diseno . ', ' . $color_base . ', ' . $color_principal . ', ' . $color_secundario . ', 
                              ' . $formato . ', ' . $color_nro . ', "' . $nombre_apellido . '", "' . $email . '", "' . $telefono . '", "' . $comentario . '", 1, 
                              ' . $_POST["option_diseno_arq_mb"] . ', ' . $_POST["option_color_base_arq_mb"] . ', ' . $_POST["option_color_principal_arq_mb"] . ', 
                              ' . $_POST["option_color_secundario_arq_mb"] . ', ' . $_POST["option_formato_arq_mb"] . ', ' . $_POST["option_color_text_arq_mb"] . ', 
                              ' . $_POST["option_diseno_short_mb"] . ', ' . ($_POST["option_short_on_mb"] ? $_POST["option_color_base_short_mb"] : 'NULL') . ', ' . $_POST["option_color_principal_short_mb"] . ', 
                              ' . $_POST["option_color_secundario_short_mb"] . ', ' . $_POST["option_diseno_short_arquero_mb"] . ', ' . ($_POST["option_short_on_mb"] ? $_POST["option_color_base_short_arquero_mb"] : 'NULL') . ', ' . $_POST["option_color_principal_short_arquero_mb"] . ', 
                              ' . $_POST["option_color_secundario_short_arquero_mb"] . ', ' . ($_POST["option_medias_on_mb"] ? $_POST["option_color_medias_mb"] : 'NULL') . ', 1, ' . $_POST["option_arq_on_mb"] . ', 
                              ' . $_POST["option_short_on_mb"] . ', ' . $_POST["option_short_arquero_on_mb"] . ', ' . $_POST["option_medias_on_mb"] . ' 
                              , "' . $precios->uuid . '" , ' .$precioConjunto. ' , ' . $precioArquero . ' , ' . $total . ', ' . 
                              $descuentoAplicado . ($genero == 'mujer' ? ',1 ' : ',0 ') . ',UUID() ,"' . ($genero == 'mujer' ? 'm' : 'h') . '", 
                              "' . $con->real_escape_string($zona_envio) . '", "' . $con->real_escape_string($localidad_envio)
                              . '", "' . $con->real_escape_string($codigo_postal_envio) . '", "' . $con->real_escape_string($tipo_envio) . '")';
  }else{
      //  $sqlInsertPedido = mysqli_query($con, 'INSERT INTO pedidos(fecha, diseno, color_base, color_principal, color_secundario, formato, color_nro, nombre_apellido, email, telefono, comentario, estado, diseno_arquero, color_base_arquero, color_principal_arquero, color_secundario_arquero, formato_arquero, color_nro_arquero, diseno_short, color_base_short, color_principal_short, color_secundario_short, color_medias, mobile, option_arq_on, option_short_on, option_medias_on) VALUES( "'.$fecha.'", '.$diseno.', '.$color_base.', '.$color_principal.', '.$color_secundario.', '.$formato.', '.$color_nro.', "'.$nombre_apellido.'", "'.$email.'", "'.$telefono.'", "'.$comentario.'", 1, '.$_POST["option_diseno_arq_mb"].', '.$_POST["option_color_base_arq_mb"].', '.$_POST["option_color_principal_arq_mb"].', '.$_POST["option_color_secundario_arq_mb"].', '.$_POST["option_formato_arq_mb"].', '.$_POST["option_color_text_arq_mb"].', '.$_POST["option_diseno_short_mb"].', '.$_POST["option_color_base_short_mb"].', '.$_POST["option_color_principal_short_mb"].', '.$_POST["option_color_secundario_short_mb"].', '.$_POST["option_color_medias_mb"].', 1, '.$_POST["option_arq_on_mb"].', '.$_POST["option_short_on_mb"].', '.$_POST["option_medias_on_mb"].' )');
      $query = 'INSERT INTO pedidos(cliente_id, fecha, diseno, color_base, color_principal, color_secundario, 
                                    formato, color_nro, nombre_apellido, email, telefono, comentario, estado, diseno_arquero, color_base_arquero, 
                                    color_principal_arquero, color_secundario_arquero, formato_arquero, color_nro_arquero, 
                                    diseno_short, color_base_short, color_principal_short, color_secundario_short, 
                                    diseno_short_arquero, color_base_short_arquero, color_principal_short_arquero, color_secundario_short_arquero, 
                                    color_medias, mobile, option_arq_on, 
                                    option_short_on, option_short_arquero_on, option_medias_on,
                                    precio_uuid, precio_conjunto, precio_arquero, precio_total, descuento, pedido_uuid , tipo, zona_envio, localidad_envio, cod_postal, tipo_envio ) 
                VALUES(' . $clienteId . ', "' . $fecha . '", ' . $diseno . ', ' . $color_base . ', ' . $color_principal . ', ' . $color_secundario . ', 
                              ' . $formato . ', ' . $color_nro . ', "' . $nombre_apellido . '", "' . $email . '", "' . $telefono . '", "' . $comentario . '", 1, 
                              0, 0, 0, 
                              0, 0, 0, 
                              0, 0, 0, 0, 0, 0, 
                              0,
                              0, 0, 1, 0, 
                              0, 0, 0 
                              , "' . $precios->uuid . '" , ' .$precios->chomba. ' , 0 , ' . $total . ', ' . $descuentoAplicado . ', UUID() , "c", 
                              "' . $con->real_escape_string($zona_envio) . '", "' . $con->real_escape_string($localidad_envio)
                              . '", "' . $con->real_escape_string($codigo_postal_envio) . '", "' . $con->real_escape_string($tipo_envio) . '")';
  }

  $sqlInsertPedido = mysqli_query($con, $query);
  
  $pedido = mysqli_insert_id($con);

  if(empty($pedido) || $pedido == 0){
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@yakka.com.ar>' . "\r\n";
    mail('fercamm@gmail.com','ERROR EN PEDIDO MOBILE',$query,$headers); // a yakka
    throw new \Exception($query);
  }

  $rs = mysqli_query($con, "SELECT pedido_uuid FROM pedidos where id=".$pedido);
  $pedidoUuid = $rs->fetch_assoc();
  $pedidoUuid = $pedidoUuid['pedido_uuid'];
}else{
  $rs = mysqli_query($con, "SELECT id FROM pedidos where pedido_uuid='".$pedidoUuid."'");
  $pedido = $rs->fetch_assoc();
  $pedido = $pedido['id'];

  if($genero != 'chombas'){//WHERE id = '.$pedido;
    $query = 'UPDATE pedidos SET cliente_id = ' . $clienteId . ', fecha = "' . $fecha . '", diseno = ' . $diseno . ', color_base = ' . $color_base . ', 
      color_principal = ' . $color_principal . ', color_secundario = ' . $color_secundario . ', formato = ' . $formato . ', color_nro = ' . $color_nro . ', 
      nombre_apellido = "' . $nombre_apellido . '", email = "' . $email . '", telefono = "' . $telefono . '", comentario = "' . $comentario . '", estado = 1, 
      diseno_arquero = ' . $_POST["option_diseno_arq_mb"] . ', color_base_arquero = ' . $_POST["option_color_base_arq_mb"] . ', 
      color_principal_arquero = ' . $_POST["option_color_principal_arq_mb"] . ', color_secundario_arquero = ' . $_POST["option_color_secundario_arq_mb"] . ', 
      formato_arquero = ' . $_POST["option_formato_arq_mb"] . ', color_nro_arquero = ' . $_POST["option_color_text_arq_mb"] . ', diseno_short = ' . $_POST["option_diseno_short_mb"] . ', 
      color_base_short = ' . ($_POST["option_short_on_mb"] ? $_POST["option_color_base_short_mb"] : 'NULL') . ', color_principal_short = ' . $_POST["option_color_principal_short_mb"] . ', 
      color_secundario_short = ' . $_POST["option_color_secundario_short_mb"] . ', diseno_short_arquero = ' . $_POST["option_diseno_short_arquero_mb"] . ', 
      color_base_short_arquero = ' . ($_POST["option_short_on_mb"] ? $_POST["option_color_base_short_arquero_mb"] : 'NULL') . ', color_principal_short_arquero = ' . $_POST["option_color_principal_short_arquero_mb"] . ', 
      color_secundario_short_arquero = ' . $_POST["option_color_secundario_short_arquero_mb"] . ', color_medias = ' . ($_POST["option_medias_on_mb"] ? $_POST["option_color_medias_mb"] : 'NULL') . ', 
      mobile = 1, option_arq_on = ' . $_POST["option_arq_on_mb"] . ', option_short_on = ' . $_POST["option_short_on_mb"] . ', option_medias_on = ' . $_POST["option_medias_on_mb"] . ' 
      precio_uuid = , "' . $precios->uuid . '" , precio_conjunto = ' .$precioConjunto. ' , precio_arquero = ' . $precioArquero . ' , precio_total = ' . $total . ', 
      descuento = ' . $descuentoAplicado . ($genero == 'mujer' ? ', mujer = 1 ' : ', mujer = 0 ') . ',tipo = "' . ($genero == 'mujer' ? 'm' : 'h') . '", 
      zona_envio = "' . $con->real_escape_string($zona_envio) . '", localidad_envio = "' . $con->real_escape_string($localidad_envio) . '", 
      cod_postal = "' . $con->real_escape_string($codigo_postal_envio) . '", tipo_envio = "' . $con->real_escape_string($tipo_envio) . '" 
      WHERE id = '.$pedido;
  }else{
      $query = 'UPDATE pedidos SET cliente_id = ' . $clienteId . ', fecha = "' . $fecha . '", diseno = ' . $diseno . ', color_base = ' . $color_base . ', 
        color_principal = ' . $color_principal . ', color_secundario = ' . $color_secundario . ', formato = ' . $formato . ', color_nro = ' . $color_nro . ', 
        nombre_apellido = "' . $nombre_apellido . '", email = "' . $email . '", telefono = "' . $telefono . '", comentario = "' . $comentario . '", estado = 1, 
        diseno_arquero =  0, color_base_arquero = 0, color_principal_arquero = 0, color_secundario_arquero = 0, formato_arquero = 0, color_nro_arquero = 0, 
        diseno_short = 0, color_base_short = 0, color_principal_short = 0, color_secundario_short = 0, diseno_short_arquero = 0, color_base_short_arquero = 0, 
        color_principal_short_arquero = 0, color_secundario_short_arquero = 0, color_medias = 0, mobile = 1, option_arq_on = 0,  option_short_on = 0, 
        option_medias_on = 0, precio_uuid = "' . $precios->uuid . '" , precio_conjunto = ' .$precios->chomba. ' , precio_arquero = 0 , precio_total = ' . $total . ', 
        descuento = ' . $descuentoAplicado . ', pedido_uuid = UUID() , tipo = "c", zona_envio = "' . $con->real_escape_string($zona_envio) . '", 
        localidad_envio = "' . $con->real_escape_string($localidad_envio) . '", cod_postal = "' . $con->real_escape_string($codigo_postal_envio) . '", 
        tipo_envio = "' . $con->real_escape_string($tipo_envio) . '"
        WHERE id = '.$pedido;
  }

  mysqli_query($con, 'DELETE FROM arqueros where pedido = '.$pedido);
  mysqli_query($con, 'DELETE FROM jugadores where pedido = '.$pedido);
  mysqli_query($con, 'DELETE FROM imagenes where pedido_id = '.$pedido);
}

//Inserta las imagenes:
if($file_escudo["error"]==0){
  $stmt = $con->prepare('INSERT INTO imagenes (fecha, active, tipo, posicion, pedido_id, archivo, nombre_archivo) values (?, ?, ?, ?, ?, ?, ?)');
  $fecha = 'now()';
  $active = '1';
  $tipo = 'escudo';
  $nombreArchivo = $con->real_escape_string($file_escudo["name"]);
  $archivo = base64_encode(file_get_contents(addslashes($file_escudo["tmp_name"])));
  $stmt->bind_param('sississ', $fecha, $active, $tipo, $posicion_escudo, $pedido, $archivo, $nombreArchivo);
  $stmt->execute();
  $stmt->close();
}

if(!empty($file_extra["error"]==0)){
  $stmt = $con->prepare('INSERT INTO imagenes (fecha, active, tipo, posicion, pedido_id, archivo, nombre_archivo) values (?, ?, ?, ?, ?, ?, ?)');
  $fecha = 'now()';
  $active = '1';
  $tipo = 'extra';
  $nombreArchivo = $con->real_escape_string($file_extra["name"]);
  $archivo = base64_encode(file_get_contents(addslashes($file_extra["tmp_name"])));
  $stmt->bind_param('sississ', $fecha, $active, $tipo, $posicion_extra, $pedido, $archivo, $nombreArchivo);
  $stmt->execute();
  $stmt->close();
}

$jugadoresJson = '';
	foreach( $camisetasJugadores as $id => $camisetaJugador ){
    if( $id > 0 ){
        $jugadoresJson .= ',';
    }

      $sqlInsertJugador = mysqli_query($con, 'INSERT INTO jugadores(nombre, nro, talle, pedido) 
        VALUES("'.$con->real_escape_string($camisetaJugador->nombre_jugador).'", 
        "'.$con->real_escape_string($camisetaJugador->numero_jugador).'", 
        "'.$con->real_escape_string($camisetaJugador->talle_jugador).'",
        '.$con->real_escape_string($pedido).')');

      $jugadoresJson .= '
        {
        "talle": "'.$camisetaJugador->talle_jugador.'",
        "nombre": "'.$camisetaJugador->nombre_jugador.'",
        "numero": "'.$camisetaJugador->numero_jugador.'"
        }';
	}

  if($genero != 'chombas'){
    foreach( $shortsJugadores as $shortJugador ){
      if( !empty($camisetasJugadores) ){
          $jugadoresJson .= ',';
      }

        $sqlInsertJugador = mysqli_query($con, 'INSERT INTO jugadores(talle_short, pedido) 
          VALUES("'.$con->real_escape_string($shortJugador->talle_short_jugador).'", 
          '.$con->real_escape_string($pedido).')');

        $jugadoresJson .= '
          {
          "talle_short": "'.$shortJugador->talle_short_jugador.'"
          }';
    }
    foreach( $conjuntosJugadores as $conjuntoJugador ){
      if( !empty($camisetasJugadores) || !empty($shortsJugadores) ){
          $jugadoresJson .= ',';
      }

        $sqlInsertJugador = mysqli_query($con, 'INSERT INTO jugadores(nombre, nro, talle, talle_short, pedido) 
          VALUES("'.$con->real_escape_string($conjuntoJugador->nombre_jugador).'", 
          "'.$con->real_escape_string($conjuntoJugador->numero_jugador).'", 
          "'.$con->real_escape_string($conjuntoJugador->talle_jugador).'",
          "'.$con->real_escape_string($conjuntoJugador->talle_short_jugador).'",
          '.$con->real_escape_string($pedido).')');

        $jugadoresJson .= '
          {
          "talle": "'.$conjuntoJugador->talle_jugador.'",
          "nombre": "'.$conjuntoJugador->nombre_jugador.'",
          "numero": "'.$conjuntoJugador->numero_jugador.'",
          "talle_short": "'.$conjuntoJugador->talle_short_jugador.'"
          }';
    }

    $arquerosJson = '';
    foreach( $camisetasArqueros as $id => $camisetaArquero ){
      if( $id > 0 ){
          $arquerosJson .= ',';
      }
  
        $sqlInsertJugador = mysqli_query($con, 'INSERT INTO arqueros(nombre, nro, talle, pedido) 
          VALUES("'.$con->real_escape_string($camisetaArquero->nombre_arquero).'", 
          "'.$con->real_escape_string($camisetaArquero->numero_arquero).'", 
          "'.$con->real_escape_string($camisetaArquero->talle_arquero).'",
          '.$con->real_escape_string($pedido).')');
  
        $arquerosJson .= '
          {
          "talle": "'.$camisetaArquero->talle_arquero.'",
          "nombre": "'.$camisetaArquero->nombre_arquero.'",
          "numero": "'.$camisetaArquero->numero_arquero.'"
          }';
    }
    foreach( $shortsArqueros as $shortArquero ){
      if( !empty($camisetasArqueros) ){
          $arquerosJson .= ',';
      }

        $sqlInsertJugador = mysqli_query($con, 'INSERT INTO arqueros(talle_short, pedido) 
          VALUES("'.$con->real_escape_string($shortArquero->talle_short_arquero).'", 
          '.$con->real_escape_string($pedido).')');

        $arquerosJson .= '
          {
          "talle_short": "'.$shortArquero->talle_short_arquero.'"
          }';
    }
    foreach( $conjuntosArqueros as $conjuntoArquero ){
      if( !empty($camisetasArqueros) || !empty($shortsArqueros) ){
          $arquerosJson .= ',';
      }

        $sqlInsertJugador = mysqli_query($con, 'INSERT INTO arqueros(nombre, nro, talle, talle_short, pedido) 
          VALUES("'.$con->real_escape_string($conjuntoArquero->nombre_arquero).'", 
          "'.$con->real_escape_string($conjuntoArquero->numero_arquero).'", 
          "'.$con->real_escape_string($conjuntoArquero->talle_arquero).'",
          "'.$con->real_escape_string($conjuntoArquero->talle_short_arquero).'",
          '.$con->real_escape_string($pedido).')');

        $arquerosJson .= '
          {
          "talle": "'.$conjuntoArquero->talle_arquero.'",
          "nombre": "'.$conjuntoArquero->nombre_arquero.'",
          "numero": "'.$conjuntoArquero->numero_arquero.'",
          "talle_short": "'.$conjuntoArquero->talle_short_arquero.'"
          }';
    }
  }

  // Formateo Json //
  $color["0"] = '[]';
  $color["1"] = '[254, 202, 2]';
  $color["2"] = '[28, 60, 141]';
  $color["3"] = '[10, 14, 51]';
  $color["4"] = '[255, 255, 255]';
  $color["5"] = '[153, 15, 56]';
  $color["6"] = '[169, 216, 244]';
  $color["7"] = '[0, 175, 239]';
  $color["8"] = '[243, 146, 204]';
  $color["9"] = '[170, 170, 170]';
  $color["10"] = '[103, 103, 103]';
  $color["11"] = '[191, 151, 202]';
  $color["12"] = '[102, 59, 40]';
  $color["13"] = '[255, 94, 25]';
  $color["14"] = '[0, 0, 0]';
  $color["15"] = '[186, 17, 42]';
  $color["16"] = '[224, 0, 134]';
  $color["17"] = '[119, 198, 174]';
  $color["18"] = '[0, 128, 83]';
  $color["19"] = '[22, 76, 28]';
  $color["20"] = '[131, 0, 164]';

  $tipo["1"] = "Adidas 2014";
  $tipo["2"] = "Edo SZ";
  $tipo["3"] = "Premierleague";
  $tipo["4"] = "Jersey M54";
  $tipo["5"] = "USA 2016 FONT";
  $tipo["6"] = "Real Madrid 2016 2017";

  $jsonPedido = '{
    "cliente": "'.$nombre_apellido.'",';

  if($genero != 'chombas'){
    if($_POST["option_arq_on_mb"] == 1 || $_POST["option_arq_on_mb"] == "1" ){ // Si está en ON el modelo arquero

      $jsonPedido .= '"designArquero": {
          "colorBase": '.$color["$color_base_arq"].',
          "colorPrincipal": '.$color["$color_principal_arq"].',';
          
      $jsonPedido .= '"colorSecundario": '.$color["$color_secundario_arq"].',';

      $jsonPedido .= '"modelo": "'.($genero == 'mujer' ? 'CM' : 'CH').$_POST["option_diseno_arq_mb"].'",
          "tipografia": "'.$tipo["$formato_arq"].'",
          "colorTipografia": '.$color["$color_nro_arq"].',
          "camisetas": ['.$arquerosJson.']
        },';

    }

    $jsonPedido .= '"designJugador": {
        "colorBase": '.$color["$color_base"].',
        "colorPrincipal": '.$color["$color_principal"].',';

    $jsonPedido .= '"colorSecundario": '.$color["$color_secundario"].',';

    $jsonPedido .= '"modelo": "'.($genero == 'mujer' ? 'CM' : 'CH').$diseno.'",
        "tipografia": "'.$tipo["$formato"].'",
        "colorTipografia": '.$color["$color_nro"].',
        "camisetas": ['.$jugadoresJson.']
      }';
  }else{
    $jsonPedido .= '"designChombas": {
      "colorBase": '.$color["$color_base"].',
      "colorPrincipal": '.$color["$color_principal"].',';

    $jsonPedido .= '"colorSecundario": '.$color["$color_secundario"].',';
    
    $jsonPedido .= '"modelo": "CH'.$diseno.'",
        "tipografia": "'.$tipo["$formato"].'",
        "colorTipografia": '.$color["$color_nro"].',
        "camisetas": ['.$jugadoresJson.']
      }';
  }

  $jsonPedido .= '}';
  // Formateo Json //

    $jsonPedido = json_encode(json_decode($jsonPedido), JSON_PRETTY_PRINT);
    //UPDATE el json
    $queryJson = "UPDATE pedidos SET config_json='".$con->real_escape_string($jsonPedido)."' WHERE id=".$pedido;
    mysqli_query($con, $queryJson );
    //------

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <info@yakka.com.ar>' . "\r\n";

	$message = '<table  width="600px" cellspacing="0" cellpadding="0" border="0" class="responsive-table2" style="margin:40px 20px;padding:0;width:100%!important;background-color: whitesmoke;border-radius:4px;border:1px #f7f8f8 solid;max-width:722px;margin:auto;-webkit-box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);-moz-box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);">
   <tbody>
    <tr>
      <td>
      <table  align="center">
        <tbody>
          <tr>
            <td style="padding: 30px 0;color: #656565;font-family: sans-serif;">
              <img src="http://yakka.com.ar/personalizador/'.$genero.'/img/logo_yakka.png" alt="Yakka">
            </td>
          </tr>
        </tbody>
      </table>
      <table align="center" style="background: #fdfdfd;width: 90%;">
        <tbody>
          <tr>
            <td class="titulo" style="font-size:30px;padding: 20px 10px;text-transform: uppercase;font-weight:700;color: #494949;
              font-family: Source Sans Pro, sans-serif;text-align: center;">
              ¡TU CONSULTA FUE ENVIADA CON ÉXITO!
            </td>
          </tr>
       </tbody>
      </table>
      <table align="center" style="background: #fdfdfd; width: 90%;">
        <tbody>
          <tr>
            <td class="contenido" style="font-size: 18px;padding: 10px 30px 0px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;color: #161616;" align="center">
             A la brevedad un asesor se va a comunicar y enviarte el presupuesto. Podes ver tu pedido haciendo <a href="http://yakka.com.ar/personalizador/pedido-'.$pedidoUuid.'" target="_blank" title="Ver pedido" style="color:#3096fe; font-family: "Source Sans Pro", sans-serif; font-style: italic; font-weight: 700;text-decoration: none;" >click aquí</a></td>
             </tr>
             <tr>
                <td style="color: #161616;font-size: 18px;padding: 20px 30px 40px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;" align="center">Cualquier consulta podes comunicarte con nosotros al 011 4709 9453 o por mail al info@yakka.com.ar
             </td>
             <td style="height: 30px;">&nbsp;</td>
          </tr>
        </tbody>
      </table>
      <table align="center" style="background: #fdfdfd; width: 90%;">
        <tbody>
          <tr>
            <td style="padding: 0px 30px 40px 30px;" align="center">
              <a href="http://yakka.com.ar/personalizador/pedido-'.$pedidoUuid.'" target="_blank"><img src="http://yakka.com.ar/personalizador/'.$genero.'/img/boton_mailing.jpg" alt="Ver Pedido" /></a>
            </td>
          </tr>
        </tbody>
      </table>

      </td>
    </tr>
  </table>';

  $messageToYakka = '<table  width="600px" cellspacing="0" cellpadding="0" border="0" class="responsive-table2" style="margin:40px 20px;padding:0;width:100%!important;background-color: whitesmoke;border-radius:4px;border:1px #f7f8f8 solid;max-width:722px;margin:auto;-webkit-box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);-moz-box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);box-shadow: -1px 2px 7px -1px rgba(125,125,125,1);">
   <tbody>
    <tr>
      <td>
      <table  align="center">
        <tbody>
          <tr>
            <td style="padding: 30px 0;color: #656565;font-family: sans-serif;">
              <img src="http://yakka.com.ar/personalizador/'.$genero.'/img/logo_yakka.png" alt="Yakka">
            </td>
          </tr>
        </tbody>
      </table>
      <table align="center" style="background: #fdfdfd;width: 90%;">
        <tbody>
          <tr>
            <td class="titulo" style="font-size:30px;padding: 20px 10px;font-weight:700;color: #494949;
              font-family: Source Sans Pro, sans-serif;text-align: center;text-transform:uppercase;">
              ¡Nuevo pedido ingresado!
            </td>
          </tr>
       </tbody>
      </table>
      <table align="center" style="background: #fdfdfd;width: 90%;">
        <tbody>
          <tr>
            <td class="contenido" style="font-size: 18px;padding: 10px 30px 0px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;color: #161616;" align="center">
              Tenés un nuevo pedido de '. ($genero == 'chombas' ? 'chombas' : 'camisetas') .' mirá los detalles haciendo <a href="http://yakka.com.ar/personalizador/pedido-'.$pedidoUuid.'" target="_blank" title="Ver pedido" style="color:#3096fe; font-family: "Source Sans Pro", sans-serif; font-style: italic; font-weight: 700;text-decoration: none;" >click aquí</a>
            </td>
          </tr>
       </tbody>
      </table>
      <table align="center" style="background: #fdfdfd; width: 90%;">
        <tbody>
             <tr>
               <td class="contenido" style="font-size: 18px;padding: 10px 30px 0px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;color: #161616;" align="center">Nombre / Email: '.$nombre_apellido.' - '.$email.'</td>
             </tr>
             <tr>
                <td style="color: #161616;font-size: 18px;padding: 20px 30px 0 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;" align="center">Telefono: '.$telefono.'</td>
              </tr>
            <tr>
              <td style="color: #161616;font-size: 18px;padding: 20px 30px 0 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;" align="center">Envío: '.$zona_envio . ', '.$localidad_envio.' - (' . $codigo_postal_envio . ') ' . $tipo_envio . '</td>
            </tr>
              <tr>
                <td style="color: #161616;font-size: 18px;padding: 20px 30px 40px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;" align="center">Cantidad de '. ($genero == 'chombas' ? 'chombas' : 'camisetas de Jugadores') . ': '.$cantidadCamisetasJugadores.'</td>
              </tr>
                ';
    if($genero != 'chombas'){
      $messageToYakka .=
                  '<tr>
                    <td style="color: #161616;font-size: 18px;padding: 20px 30px 40px 30px;line-height:21px;text-align: center;font-family: "Source Sans Pro", sans-serif;" align="center">Cantidad de camisetas de Arqueros: '.$cantidadCamisetasArqueros.'</td>
                  </tr>';
    }
    $messageToYakka .=
               '
              <tr>
                <td style="height: 30px;">&nbsp;</td>
              </tr>
          </tr>
        </tbody>
      </table>
      <table align="center" style="background: #fdfdfd; width: 90%;">
        <tbody>
          <tr>
            <td style="padding: 0px 30px 40px 30px;" align="center">
              <a href="http://yakka.com.ar/personalizador/pedido-'.$pedidoUuid.'" target="_blank"><img src="http://yakka.com.ar/personalizador/'.$genero.'/img/boton_mailing.jpg" alt="Ver Pedido" /></a>
            </td>
          </tr>
          <tr>
            <td style="text-decoration:underline;font-weight:bold;font-size:16px;padding: 0 30px;">Json Pedido:</td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
          </tr>
          <tr>
            <td style="padding: 0 30px;margin-bottom:50px;">'.$jsonPedido.'</td>
          </tr>
          <tr>
            <td height="50">&nbsp;</td>
          </tr>
        </tbody>
      </table>

      </td>
    </tr>
  </table>';

  mail($email,'Tu pedido de camiseta - Yakka',$message,$headers); // al user
  mail('info@yakka.com.ar','¡Nuevo pedido ingresado!',$messageToYakka,$headers); // a yakka

  $arrayEnvio = array();
  $arrayEnvio = array_merge($arrayEnvio, array('message' => $message));
  $arrayEnvio = array_merge($arrayEnvio, array('pedidoUuid' => $pedidoUuid));
  echo json_encode($arrayEnvio);
  exit();

  echo $pedidoUuid;
//echo $messageToYakka;

?>