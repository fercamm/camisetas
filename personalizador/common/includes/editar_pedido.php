<?php 
	require_once('conexion.php');

	if( isset($_POST["uuid_pedido"]) ){
		$uuid = $con->real_escape_string($_POST["uuid_pedido"]);
	}

	if( isset($_POST["email_owner"]) ){
		$email_owner = $con->real_escape_string($_POST["email_owner"]);
	}

	$colores = [];
	$sqlPedido = mysqli_query($con, "SELECT * FROM pedidos WHERE pedido_uuid = '".$uuid ."'" . " and email = '" . $email_owner . "' ");

	$pedido = mysqli_fetch_object($sqlPedido);
	if(empty($pedido) || !in_array($pedido->estado, array(1, 2))){//Si el pedido no existe o su estado no es 1 ni 2, no se puede editar.
		exit();
	}

	$genero = $pedido->tipo == 'h' ? 'hombre' : ($pedido->tipo == 'm' ? 'mujer' : 'chombas');
	$nombre_apellido = $pedido->nombre_apellido;
	$formato = $pedido->formato;
	$color_base = $pedido->color_base;
	$color_principal = $pedido->color_principal;
	$color_secundario = $pedido->color_secundario;
	$color_nro = $pedido->color_nro;
	$diseno = $pedido->diseno;
	$formato_arq = $pedido->formato_arquero;
	$color_base_arq = $pedido->color_base_arquero;
	$color_principal_arq = $pedido->color_principal_arquero;
	$color_secundario_arq = $pedido->color_secundario_arquero;
	$color_nro_arq = $pedido->color_nro_arquero;
	$diseno_arq = $pedido->diseno_arquero;
	$pedido = $pedido->id;

	// $zona_envio = $_POST["zona_envio"];
	// $localidad_envio = $_POST["localidad_envio"];
    // $codigo_postal_envio = $_POST["codigo_postal_envio"];
    // $tipo_envio = $_POST["tipo_envio"];
	
	//Arma el nuevo Json de camisetas
	$cantidadCamisetasJugadores = count($_POST["nombre_jugador"]);
	if($genero != 'chombas'){
		$cantidadCamisetasArqueros = 0;
		if ( ((int)$_POST["option_arq_on"]) > 0 ) {
			$cantidadCamisetasArqueros = count($_POST["nombre_arquero"]);
		}
	}

	mysqli_query($con, 'DELETE FROM arqueros where pedido = '.$pedido);
	mysqli_query($con, 'DELETE FROM jugadores where pedido = '.$pedido);

	$jugadoresJson = '';
	for( $i = 0; $i < $cantidadCamisetasJugadores; $i++ ){
		if( $i > 0 ){
            $jugadoresJson .= ',';
        }

		if($_POST["option_short"]){
			$sqlInsertJugador = mysqli_query($con, 'INSERT INTO jugadores(nombre, nro, talle, talle_short, pedido) 
								VALUES("'.$con->real_escape_string($_POST["nombre_jugador"][$i]).'", 
								"'.$con->real_escape_string($_POST["numero_jugador"][$i]).'", 
								"'.$con->real_escape_string($_POST["talle_jugador"][$i]).'", 
								"'.$con->real_escape_string($_POST["talle_short"][$i]).'", '.$pedido.')');

			$jugadoresJson .= '
					{
					"talle": "'.$_POST["talle_jugador"][$i].'",
					"nombre": "'.$_POST["nombre_jugador"][$i].'",
					"numero": "'.$_POST["numero_jugador"][$i].'",
					"talle_short": "'.$_POST["talle_short"][$i].'"
					}';
		}else{
			$sqlInsertJugador = mysqli_query($con, 'INSERT INTO jugadores(nombre, nro, talle, pedido) 
				VALUES("'.$con->real_escape_string($_POST["nombre_jugador"][$i]).'", 
				"'.$con->real_escape_string($_POST["numero_jugador"][$i]).'", 
				"'.$con->real_escape_string($_POST["talle_jugador"][$i]).'", 
				'.$pedido.')');
				
			$jugadoresJson .= '
					{
					"talle": "'.$_POST["talle_jugador"][$i].'",
					"nombre": "'.$_POST["nombre_jugador"][$i].'",
					"numero": "'.$_POST["numero_jugador"][$i].'"
					}';
		}
	}

	if($genero != 'chombas'){
		$arquerosJson = '';
		for( $i = 0; $i < $cantidadCamisetasArqueros; $i++ ){
			if( $i > 0 ){
			  $arquerosJson .= ',';
			}

			if($_POST["option_short"]){
				$sqlInsertArquero = mysqli_query($con, 'INSERT INTO arqueros(nombre, nro, talle, talle_short, pedido) 
								  VALUES("'.$con->real_escape_string($_POST["nombre_arquero"][$i]).'",
								   "'.$con->real_escape_string($_POST["numero_arquero"][$i]).'", 
								   "'.$con->real_escape_string($_POST["talle_arquero"][$i]).'", 
								   "'.$con->real_escape_string($_POST["talle_short_arquero"][$i]).'", '.$pedido.')');
		
		
				$arquerosJson .= '
					{
					"talle": "'.$_POST["talle_arquero"][$i].'",
					"nombre": "'.$_POST["nombre_arquero"][$i].'",
					"numero": "'.$_POST["numero_arquero"][$i].'",
					"talle_short": "'.$_POST["talle_short_arquero"][$i].'"
					}';
			}else{
				$sqlInsertArquero = mysqli_query($con, 'INSERT INTO arqueros(nombre, nro, talle, pedido) 
					VALUES("'.$con->real_escape_string($_POST["nombre_arquero"][$i]).'",
					"'.$con->real_escape_string($_POST["numero_arquero"][$i]).'", 
					"'.$con->real_escape_string($_POST["talle_arquero"][$i]).'", 
					'.$pedido.')');


				$arquerosJson .= '
					{
					"talle": "'.$_POST["talle_arquero"][$i].'",
					"nombre": "'.$_POST["nombre_arquero"][$i].'",
					"numero": "'.$_POST["numero_arquero"][$i].'"
					}';
			}
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

	$jsonPedido =
	'{
	"cliente": "'.$nombre_apellido.'", 
	';

	if($genero != 'chombas'){
		if($_POST["option_arq_on"] == 1 || $_POST["option_arq_on"] == "1" ){ // Si está en ON el modelo arquero
			$jsonPedido .=
			'    "designArquero": {
					"colorBase": '.$color["$color_base_arq"].',
					"colorPrincipal": '.$color["$color_principal_arq"].',
					"colorSecundario": '.$color["$color_secundario_arq"].',
					"modelo": "'.($genero == 'mujer' ? 'CM' : 'CH').$diseno_arq.'",
					"tipografia": "'.$tipo["$formato_arq"].'",
					"colorTipografia": '.$color["$color_nro_arq"].',
					"camisetas": ['.$arquerosJson.']
				},
			';
		} //fin design arquero

		$jsonPedido .=
		'    "designJugador": {
			"colorBase": '.$color["$color_base"].',
			"colorPrincipal": '.$color["$color_principal"].',
			"colorSecundario": '.$color["$color_secundario"].',
			"modelo": "'.($genero == 'mujer' ? 'CM' : 'CH').$diseno.'",
			"tipografia": "'.$tipo["$formato"].'",
			"colorTipografia": '.$color["$color_nro"].',
			"camisetas": ['.$jugadoresJson.']
		}
		';
		//fin design jugador
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
	// Fin Formateo Json //

	//    $jsonPedido = json_encode(json_decode($jsonPedido), JSON_PRETTY_PRINT);
	//UPDATE el json
	$queryJson = "UPDATE pedidos SET config_json='".$con->real_escape_string($jsonPedido)."'";
	$queryJson .= ", option_medias_on=".$con->real_escape_string($_POST["option_medias"]);
	$queryJson .= ", option_short_on=".$con->real_escape_string($_POST["option_short"]);
	// $queryJson .= ", zona_envio='".$con->real_escape_string($_POST["zona_envio"])."'";
	// $queryJson .= ", localidad_envio='".$con->real_escape_string($_POST["localidad_envio"])."'";
	// $queryJson .= ", cod_postal='".$con->real_escape_string($_POST["codigo_postal_envio"])."'";
	// $queryJson .= ", tipo_envio='".$con->real_escape_string($_POST["tipo_envio"])."'";
	$queryJson .= ", modificado=NOW()";
	$queryJson .= " WHERE id=".$pedido;
	mysqli_query($con, $queryJson );

	exit('ok');
?>