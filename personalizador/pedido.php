<?php 
// print_r('feeeer');die;
// print_r(substr_count($_SERVER['HTTP_HOST'], '.') == 2 ? substr($_SERVER['HTTP_HOST'], strpos($_SERVER['HTTP_HOST'], '.') + 1) : $_SERVER['HTTP_HOST']);die;
	require_once('./common/includes/getData.php');
	include_once('./common/includes/inc.pedido.php');
	include_once('./common/includes/inc.funciones.php');

	include_once('./common/includes/mercadopago_estado.php');

	// $common_dir = substr( $_SERVER['REQUEST_URI'] , 0, 22 ) === "./pedido";
	$common_dir = true;
	$minCamisetas = 7;
	traerPrecios();
	traerParametros();

	$tienesecundario = false;
	$tienesecundarioArquero = false;

	$precioShorts = $precios->cam_short - $precios->cam;
	$precioMedias = $precios->cam_media - $precios->cam;
	$precioCamisetas = $precios->cam;

	$cantCamisetas = 0;
	$cantShorts = 0;

	$jugadores = array();
	$arqueros = array();
	while ( $jugador = mysqli_fetch_object($sqlJugadores) ){
		if(!empty($jugador->talle)){
			$cantCamisetas++;
		}
		if(!empty($jugador->talle_short)){
			$cantShorts++;
		}
		array_push($jugadores, $jugador);
	}
	while ( $arquero = mysqli_fetch_object($sqlArqueros) ){
		if(!empty($arquero->talle)){
			$cantCamisetas++;
		}
		if(!empty($arquero->talle_short)){
			$cantShorts++;
		}
		array_push($arqueros, $arquero);
	}

	$cantMedias = $cantShorts * $pedido->option_medias_on;

	$total = $cantShorts * $precioShorts + $cantMedias * $precioMedias + $cantCamisetas * $precioCamisetas;
?>

<?php
	include('./common/menu.php');
?>

<?php
    $colorRGB["[254,202,2]"] = '1';
	$colorRGB["[28,60,141]"] = '2';
	$colorRGB["[10,14,51]"] = '3';
	$colorRGB["[255,255,255]"] = '4';
	$colorRGB["[153,15,56]"] = '5';
	$colorRGB["[169,216,244]"] = '6';
	$colorRGB["[0,175,239]"] = '7';
	$colorRGB["[243,146,204]"] = '8';
	$colorRGB["[170,170,170]"] = '9';
	$colorRGB["[103,103,103]"] = '10';
	$colorRGB["[191,151,202]"] = '11';
	$colorRGB["[102,59,40]"] = '12';
	$colorRGB["[255,94,25]"] = '13';
	$colorRGB["[0,0,0]"] = '14';
	$colorRGB["[186,17,42]"] = '15';
	$colorRGB["[224,0,134]"] = '16';
	$colorRGB["[119,198,174]"] = '17';
	$colorRGB["[0,128,83]"] = '18';
	$colorRGB["[22,76,28]"] = '19';
	$colorRGB["[131,0,164]"] = '20';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
		<title>Yakka</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed" type="text/css" media="all">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
		<!-- <link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/style.css" /> -->
		<link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/styleV2.css" />
		<link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/pedido.css" />
		<link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/pedido_mb.css" />
		<link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/mobile.css" />
		<link rel="stylesheet" href="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/css/style_edit_pedido.css" />

		<script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>

		<script language="JavaScript">
			var pagado = <?php echo $pagado ?>;
			var pedidoUuid = '<?php echo $pedidoUuid ?>';
		</script>

		<style>
			input {
				border: 1px solid #ccc !important;
			}

			select {
				border: 1px solid #ccc !important;
				-webkit-appearance: menulist-button;
				-moz-appearance: menulist-button;
				appearance: menulist-button;
			}

			.btn-iniciado{
				color: #28de72 !important;
				background-color: #fff !important;
				border-color: #28de72 !important;
			}

			.btn-iniciado:hover{
				color: #fff !important;
				background-color: #198754 !important;
				border-color: #198754 !important;
			}

			.img_logo {
				z-index: 999;
				position: absolute;
				width: 100%;
			}

			.img_logo {
				z-index: 999;
				position: absolute;
			}

			.img_logo {
				max-height: 300px;
				max-width: 250px !important;
			}
		</style>
	</head>
	<body>
		<div>
			<form name="form_id_prod" id="form_id_prod" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<div id="finalizado">
					<div class="content_finalizado">
						<div class="top">
							<span class="p1">PEDIDO NRO: <?= $id ?></span>
							<h3>Fecha: <?= $pedido->fecha ?></h3>
							<h3>
								<b>Estado: 
									<span style="text-decoration: underline;">
									<?php
										$estado_actual = null;
										foreach($estados as $estado){
											if ($pedido->estado == $estado->id){
												echo $estado->nombre;
												$estado_actual = $estado->id;
											}
										}
										
									?>
									</span>
								</b>
							</h3>
							<h3>Cliente: <?= $pedido->nombre_apellido ?></h3>

							<div class="sidebarBox">
								<div class="scrollingBox" style="z-index: 99; background: rgb(255, 255, 255); margin-left: -50px; width: 342px; margin-bottom: 40px; padding-bottom: 0px;">
									<span style="font-size:15px; font-weight: bold;">TOTAL</span>
									<table id="costoTotal" style="margin-top:15px;">
										<tbody><tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Precio por <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta' ?>:</td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right">$ <?=$precioCamisetas?></td></tr>
										<tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Cantidad de <?php echo $genero == 'chombas' ? 'chombas' : 'camisetas' ?>: </td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right"><?=$cantCamisetas?></td></tr>
										<?php if($pedido->option_short_arquero_on || $pedido->option_short_on){ ?>
											<tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Precio por short: </td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right">$ <?=$precioShorts?></span></td></tr>
											<tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Cantidad de shorts: </td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right"><?=$cantShorts?></td></tr>
										<?php } ?>
										<?php if($pedido->option_medias_on){ ?>
											<tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Precio por medias: </td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right">$ <?=$precioMedias?></td></tr>
											<tr><td style="padding-left:8px; border-bottom:1px solid #ccc;">Cantidad de medias: </td><td style="padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right"><?=$cantMedias?></td></tr>
										<?php } ?>
										</tbody>
										<tfoot>
											<tr><td style="background:#d8b13c; color:#FFF; padding-left:16px; padding-bottom: 5px;"><b>Precio Total:</b><br></td><td style="background:#d8b13c; color:#FFF; border-left: 0px;"><b>$ <span class="precioTotal"><?=$total?></span></b></td></tr>
											<?php
												if(in_array($estado_actual, array(1, 2))){
											?>
												<tr><td style="background:white; padding-left:8px; border-bottom:1px solid #ccc;">Pagado: </td><td style="background:white; padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right">$ <?=$pagado?></td></tr>
												<tr class="costoConDescuento" style="display: none;"><td style="background:yellow; padding-left:8px; border-bottom:1px solid #ccc;">Descuento aplicado:</td><td style="background:yellow; padding-left:8px; border-bottom:1px solid #ccc; border-left: 0px;"><span class="descuentoAplic"></span></td></tr>
												<tr class="costoConDescuento" style="display: none;"><td style="background:yellow; padding-left:8px; border-bottom:1px solid #ccc;"><b>Precio c/Descuento:</b></td><td style="background:yellow; padding-left:8px; border-bottom:1px solid #ccc; border-left: 0px;"><b>$ <span class="precioTotalD"></span></b></td></tr>
												<tr><td style="background:white; padding-left:8px; border-bottom:1px solid #ccc;"><b>Restante a pagar: </b></td><td style="background:white; padding-left:8px; border-bottom:1px solid #ccc; font-weight:bold; border-left: 0px;" align="right">$ <span id="restante"><?=$total - $pagado?></span></td></tr>
												<tr><td style="background:white; padding-left:8px; border-bottom:1px solid #ccc; padding-bottom: 5px;" colspan="2"><center><div style="display: none;" id="loading_btn_enviar"><i class="fa fa-spinner fa-spin"></i> procesando...</div><input type="button" class="btn btn-primary btn-iniciado" value="PAGAR" onclick="solicitarMercadoPago();" style="height: 50px; width: 250px; <?php ($total - $pagado) > 0 ? 'display: none;' : '' ?>" id="btn_mp"></center></td></tr>
											<?php 
												}
											?>
										</tfoot>
									</table>
									<table style="margin-top:5px; width: 100%;">
										<tbody>
											<tr>
												<td style="padding-left:8px; border-bottom:1px solid #ccc;">Tiempo de entrega:</td>
												<td style="padding-left: 20px; padding-left:8px; border-bottom:1px solid #ccc; font-weight: bold; border-left: 0px;" align="right"><?=$param_tiempo_entrega->valor + $param_demora->valor?> días</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
							<div class="vista_modelos">
								<div class="vista_modelo_jugador vista_modelo_contenedor">
									<div class="top_title" style="height: 30px;">
										<img src="./common/img/jugador_form_ico.png" />
										<span><?php echo $pedido->tipo == 'c' ? 'CHOMBA' : 'CAMISETA' ?> JUGADORES</span>
									</div>
									<div class="final_preview_front" style="z-index:0;">
										<?php if($genero == 'hombre'){ ?>
											<img src="./<?php echo $genero ?>/img/logo_yakka.png" class="img_logo" />
										<?php } ?>
										<?php
										$with_secundario = array("3", "5", "6", "8", "9", "17", "18", "20", "23", "24", "26", "33", "35");
										if (in_array($pedido->diseno, $with_secundario)) {
											$tienesecundario = true;
											if( $pedido->color_secundario > 0 ){
										?>	
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno ?>/color_secundario/frente/<?= $pedido->color_secundario ?>.png" class="img_secundaria" style="z-index:2;" alt=""/>
										<?php
											}
										}
										?>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno ?>/color_principal/frente/<?= $pedido->color_principal ?>.png" class="img_principal" style="z-index:1;" />
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_base/frente/<?= $pedido->color_base ?>.png" class="img_base"  style="z-index:0;"/>
									</div>					
									<div class="final_preview_back" style="z-index:0;">
										<?php if($genero == 'hombre'){ ?>
											<img src="./<?php echo $genero ?>/img/logo_yakka_espalda.png" class="img_logo" />
										<?php } ?>
										<?php
										if (in_array($pedido->diseno, $with_secundario)) {
											if( $pedido->color_secundario > 0 ){
										?>	
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno ?>/color_secundario/espalda/<?= $pedido->color_secundario ?>.png" class="img_secundaria"  style="z-index:2;" alt=""/>
										<?php
											}
										}
										?>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno ?>/color_principal/espalda/<?= $pedido->color_principal ?>.png" class="img_principal"  style="z-index:1;"/>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_base/espalda/<?= $pedido->color_base ?>.png" class="img_base"  style="z-index:0;"/>
										<div class="formato_nro_back">
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/numeros/<?= $pedido->formato ?>/<?= $pedido->color_nro ?>.png" alt="">
										</div>
									</div>
									<div class="footer" style="margin-top: 30px; z-index:0;">
										<p>CAMISETA PERSONALIZADA EN</p>
										<img src="./common/img/yakka_min.png" alt="Yakka" />
									</div>
								</div>
								<?php
								if( $pedido->option_arq_on == 1 || $pedido->option_arq_on == "1" ){
								?>
								<div class="vista_modelo_arquero vista_modelo_contenedor">
									<div class="top_title" style="height: 30px;">
										<img src="./common/img/arquero_form_ico.png" />
										<span>CAMISETA ARQUEROS</span>
									</div>
									<div class="final_preview_front" style="z-index:0;">
										<?php
										if (in_array($pedido->diseno_arquero, $with_secundario)) {
											$tienesecundarioArquero = true;
											if( $pedido->color_secundario_arquero > 0 ){
										?>	
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno_arquero ?>/color_secundario/frente/<?= $pedido->color_secundario_arquero ?>.png" class="img_secundaria" alt=""/>
										<?php
											}
										}
										?>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno_arquero ?>/color_principal/frente/<?= $pedido->color_principal_arquero ?>.png" class="img_principal" />
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_base/frente/<?= $pedido->color_base_arquero ?>.png" class="img_base" />
									</div>					
									<div class="final_preview_back" style="z-index:0;">
										<?php
										if (in_array($pedido->diseno_arquero, $with_secundario)) {
											if( $pedido->color_secundario_arquero > 0 ){
										?>	
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno_arquero ?>/color_secundario/espalda/<?= $pedido->color_secundario_arquero ?>.png" class="img_secundaria" style="z-index:2;" alt=""/>
										<?php
											}
										}
										?>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_<?= $pedido->diseno_arquero ?>/color_principal/espalda/<?= $pedido->color_principal_arquero ?>.png" class="img_principal"  style="z-index:1;"/>
										<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/modelos/modelo_base/espalda/<?= $pedido->color_base_arquero ?>.png" class="img_base"  style="z-index:0;"/>
										<div class="formato_nro_back">
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/numeros_arq/<?= $pedido->formato_arquero ?>/<?= $pedido->color_nro_arquero ?>.png">
										</div>
									</div>
									<div class="footer" style="margin-top: 30px; z-index:0;">
										<p>CAMISETA PERSONALIZADA EN</p>
										<img src="./common/img/yakka_min.png" alt="Yakka" />
									</div>
								</div>

							</div>
							<div class="vista_modelos">
								<?php
								}
								?>
								<?php
								if( $pedido->color_base_short ){//Si selecciono algun color de short, se puede quitar o volver a agregar.
									?>
								<div class="vista_modelo_short vista_modelo_contenedor">
									<div class="top_title" style="height: 30px;">
										<img src="./common/img/shorts_form_ico.png" />
										<span>SHORTS</span>
									</div>
									<div class="final_preview_short_content">
										<div class="final_preview_short" style="z-index:0;">
											<?php if($permiteEditar && false){ ?>
												<div class="onoffswitch"  style="margin-bottom: -30px; z-index: 1;">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_short">
													<label class="onoffswitch-label" for="option_switch_short">
														<span class="onoffswitch-inner"></span>
														<span class="onoffswitch-switch"></span>
													</label>
												</div>
											<?php } ?>
											<?php
											if( $pedido->color_secundario_short > 0 && $pedido->diseno_short == 3 ){
											?>	
													<img src="./common/img/shorts/short_<?= $pedido->diseno_short ?>/color_secundario/<?= $pedido->color_secundario_short ?>.png" class="img_secundaria"  style="z-index:2;" alt=""/>
											<?php
												}
											?>
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/shorts/short_<?= $pedido->diseno_short ?>/color_principal/<?= $pedido->color_principal_short ?>.png" class="img_principal"  style="z-index:1;"/>
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/shorts/base/<?= $pedido->color_base_short ?>.png" class="img_base"  style="z-index:0;"/>
										</div>
									</div>
									<div class="footer" style="margin-top: 30px; z-index:0;">
										<p>CAMISETA PERSONALIZADA EN</p>
										<img src="./common/img/yakka_min.png" alt="Yakka" />
									</div>
								</div>
								<?php
								}
								if( $pedido->option_short_arquero_on == 1 ){//Si selecciono algun color de short, se puede quitar o volver a agregar.
								?>
								<div class="vista_modelo_short vista_modelo_contenedor">
									<div class="top_title" style="height: 30px;">
										<img src="./common/img/shorts_form_ico.png" />
										<span>SHORTS ARQUEROS</span>
									</div>
									<div class="final_preview_short_content">
										<div class="final_preview_short" style="z-index:0;">
											<?php
											if( $pedido->color_secundario_short_arquero > 0 && $pedido->diseno_short_arquero == 3 ){
											?>	
													<img src=".../common/img/shorts/short_<?= $pedido->diseno_short_arquero ?>/color_secundario/<?= $pedido->color_secundario_short_arquero ?>.png" class="img_secundaria"  style="z-index:2;" alt=""/>
											<?php
												}
											?>
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/shorts/short_<?= $pedido->diseno_short_arquero ?>/color_principal/<?= $pedido->color_principal_short_arquero ?>.png" class="img_principal"  style="z-index:1;"/>
											<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/shorts/base/<?= $pedido->color_base_short_arquero ?>.png" class="img_base"  style="z-index:0;"/>
										</div>
									</div>
									<div class="footer" style="margin-top: 30px; z-index:0;">
										<p>CAMISETA PERSONALIZADA EN</p>
										<img src="./common/img/yakka_min.png" alt="Yakka" />
									</div>
								</div>
								<?php
								}
								if( !empty($pedido->color_medias) ){//Si selecciono algun color de medias, se puede quitar o volver a agregar.
								?>
									<div class="vista_modelo_medias vista_modelo_contenedor">
										<div class="top_title" style="height: 30px;">
											<img src="./common/img/medias_form_ico.png" />
											<span>MEDIAS</span>
										</div>
										<div class="final_preview_medias_content">
											<div class="final_preview_medias" style="z-index:0;">
												<?php if($permiteEditar && false){ ?>
													<div class="onoffswitch" style="margin-left: 70px; margin-bottom: -20px; z-index: 1;">
														<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_medias">
														<label class="onoffswitch-label" for="option_switch_medias">
															<span class="onoffswitch-inner"></span>
															<span class="onoffswitch-switch"></span>
														</label>
													</div>
												<?php } ?>
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/medias/frente/<?= $pedido->color_medias ?>.png" class="img_medias" />
												<img src="<?= $common_dir ? ($pedido->tipo == 'h' ? './hombre/' : ($pedido->tipo == 'm' ? './mujer/' : './mujer/')) : '' ?>img/medias/perfil/<?= $pedido->color_medias ?>.png" class="img_medias" />
											</div>
										</div>
										<div class="footer" style="margin-top: 30px; z-index:0;">
											<p>CAMISETA PERSONALIZADA EN</p>
											<img src="./common/img/yakka_min.png" alt="Yakka" />
										</div>
									</div>
								<?php
								}
								?>
							</div>
							
								<input type="hidden" id="precio_camiseta"        value="<?=$precios->cam?>" />
								<input type="hidden" id="precio_arquero"         value="<?=$precios->arquero?>" />
								<input type="hidden" id="precio_short"       value="<?=$precios->cam_short - $precios->cam?>" />
								<input type="hidden" id="precio_media"       value="<?=$precios->cam_media - $precios->cam?>" />
								<input type="hidden" id="d1"                     value="<?=$precios->descuento?>" />
								<input type="hidden" id="d1c"                    value="<?=$precios->desc_cantidad?>" />
								<input type="hidden" id="d2"                     value="<?=$precios->descuento2?>" />
								<input type="hidden" id="d2c"                    value="<?=$precios->desc_cantidad2?>" />
								<input type="hidden" id="hPrecio"                value="" />
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-8">
								<div class="row" style="width: 100%; display: flex; flex-flow: wrap; justify-content: space-between;">
									<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
										<!-- <p class="p3">Datos Pedido</p> -->
										<div class="titulos">
											<span style="font-size: 1.2em;">JUGADORES</span>
										</div>
										<p><strong>Nombre y Apellido</strong><br /><span><?= $pedido->nombre_apellido ?></span></p>
										<p><strong>Email</strong><br /> <span><?= $pedido->email ?></span></p>
										<p><strong>Telefono</strong><br /> <span><?= $pedido->telefono ?></span></p>
										<p><strong>Comentario</strong><br /> <span><?= $pedido->comentario ?></span></p>
									</div>
									<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
										<!-- <p class="p3"><?php echo $pedido->tipo == 'c' ? 'Chomba' : 'Camiseta' ?> Jugador</p> -->
										<div class="titulos">
											<span style="font-size: 1.2em;"><?php echo $pedido->tipo == 'c' ? 'CHOMBA' : 'CAMISETA' ?> JUGADOR</span>
										</div>
										<p><strong>Color base</strong><br /> <span><?= $colores[$pedido->color_base] ?></span></p>
										<p><strong>Color principal</strong><br /> <span><?= $colores[$pedido->color_principal] ?></span></p>
										<p><strong>Modelo</strong><br /> <span><?= json_decode($pedido->config_json)->designJugador->modelo ?></span></p>
										<p><strong>Tipografía</strong><br /> <span><?= json_decode($pedido->config_json)->designJugador->tipografia ?></span></p>
										<p><strong>Color tipografía</strong><br /> <span><?= $colores[$colorRGB[json_encode(json_decode($pedido->config_json)->designJugador->colorTipografia)]] ?></span></p>
										<?php if( $pedido->color_secundario > 0 && $tienesecundario){ ?>
										<p><strong>Color secundario</strong><br /> <span><?= $colores[$pedido->color_secundario] ?></span></p>
										<?php } ?>
										<br />
									</div>

									<?php
										if( $pedido->option_arq_on == 1 || $pedido->option_arq_on == "1" ){
									?>
										<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
											<!-- <p class="p3">Camiseta Arquero</p> -->
											<div class="titulos">
												<span style="font-size: 1.2em;">CAMISETA ARQUEROS</span>
											</div>
											<p><strong>Color base</strong><br /> <span><?= $colores[$pedido->color_base_arquero] ?></span></p>
											<p><strong>Color principal</strong><br /> <span><?= $colores[$pedido->color_principal_arquero] ?></span></p>
											<?php if( $pedido->color_secundario_arquero > 0 && $tienesecundarioArquero){ ?>
											<p><strong>Color secundario</strong><br /> <span><?= $colores[$pedido->color_secundario_arquero] ?></span></p>
											<?php } ?>
											<br />
										</div>
									<?php
										}
									?>
									
									<?php if( $pedido->option_short_on == 1 || $pedido->option_short_on == "1" ): ?>
										<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
											<!-- <p class="p3">Short</p> -->
											<div class="titulos">
												<span style="font-size: 1.2em;">SHORT</span>
											</div>
											<p><strong>Color base</strong><br /> <span><?= $colores[$pedido->color_base_short] ?></span></p>
											<p><strong>Color principal</strong><br /> <span><?= $colores[$pedido->color_principal_short] ?></span></p>
											<?php if( $pedido->color_secundario_short > 0 && $pedido->diseno_short == 3 ){ ?>
											<p><strong>Color secundario</strong><br /> <span><?= $colores[$pedido->color_secundario_short] ?></span></p>
											<?php } ?>
										</div>
									<?php endif; ?>

									<?php if( $pedido->option_short_arquero_on == 1 || $pedido->option_short_arquero_on == "1" ): ?>
										<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
											<!-- <p class="p3">Short</p> -->
											<div class="titulos">
												<span style="font-size: 1.2em;">SHORT ARQUERO</span>
											</div>
											<p><strong>Color base</strong><br /> <span><?= $colores[$pedido->color_base_short_arquero] ?></span></p>
											<p><strong>Color principal</strong><br /> <span><?= $colores[$pedido->color_principal_short_arquero] ?></span></p>
											<?php if( $pedido->color_secundario_short_arquero > 0 && $pedido->diseno_short_arquero == 3 ){ ?>
											<p><strong>Color secundario</strong><br /> <span><?= $colores[$pedido->color_secundario_short_arquero] ?></span></p>
											<?php } ?>
										</div>
									<?php endif; ?>

									<?php if($pedido->option_medias_on == 1 || $pedido->option_medias_on == "1"): ?>
										<div class="col-xs-12 col-sm-4" style="width: 33%; margin-top: 20px;">
											<!-- <p class="p3">Medias</p> -->
											<div class="titulos">
												<span style="font-size: 1.2em;">MEDIAS</span>
											</div>
											<p><strong>Color:</strong> <span><?= $colores[$pedido->color_medias] ?></span></p>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
							</div>		
						</div>

						<div class="row" style="width: 100%; display: flex; flex-flow: wrap; justify-content: space-between;">
							<div class="col-xs-12 col-sm-6" style="margin-bottom: 40px;">
								<?php
									if( $pedido->option_arq_on == 1 || $pedido->option_arq_on == "1" ){
								?>
									<div  style="width: 80%; margin-top: 20px;">
										<!-- <p class="p3">Arqueros:</p> -->
										<div class="titulos">
											<span style="font-size: 1.2em;">ARQUEROS:</span>
										</div>
										<table id="list_players_arq">
											<thead>
												<tr height="30">
													<td style="border: 1px solid #ccc" width="30%">Nombre</td>
													<td style="border: 1px solid #ccc" width="20%">Nro</td>
													<td style="border: 1px solid #ccc" width="20%">Talle</td>
													<?php if( $pedido->option_short_arquero_on == 1 || $pedido->option_short_arquero_on == "1" ): ?>
														<td style="border: 1px solid #ccc" width="20%">Talle Short</td>
													<?php endif; ?>
													<td style="border: 1px solid #ccc" width="10%"></td>
												</tr>
											</thead>
											<tbody>
												<?php
												foreach ( $arqueros as $arquero ){
												?>
												<?php if($permiteEditar){ ?>
													<tr height="22">
														<td class="data_jugador" style="border: 1px solid #ccc">
															<div class="row" <?= $arquero->nro == '' ? 'style="display: none;"' : '' ?>>
																<input type="text" name="nombre_arquero[]" class="nombre_arquero form-control" style="width: 80%; <?= $arquero->nro == '' ? 'display: none;' : '' ?>" value="<?= $arquero->nombre ?>"/>
															</div>
														</td>
														<td class="data_jugador" style="border: 1px solid #ccc">
															<input type="number" min="0" name="numero_arquero[]" class="numero_arquero form-control" style="width: 75px; <?= $arquero->nro == '' ? 'display: none;' : '' ?>" maxlength="3" value="<?= $arquero->nro ?>"/>
														</td>
														<td class="data_jugador" style="border: 1px solid #ccc">
															<select name="talle_arquero[]" class="talle_arquero form-control" style="width: 80%; <?= $arquero->nro == '' ? 'display: none;' : '' ?>">
																<option value="2" <?= $arquero->talle == '2' ? 'selected' : '' ?>>2</option>
																<option value="4" <?= $arquero->talle == '4' ? 'selected' : '' ?>>4</option>
																<option value="6" <?= $arquero->talle == '6' ? 'selected' : '' ?>>6</option>
																<option value="8" <?= $arquero->talle == '8' ? 'selected' : '' ?>>8</option>
																<option value="10" <?= $arquero->talle == '10' ? 'selected' : '' ?>>10</option>
																<option value="12" <?= $arquero->talle == '12' ? 'selected' : '' ?>>12</option>
																<option value="14" <?= $arquero->talle == '14' ? 'selected' : '' ?>>14</option>
																<option value="S" <?= $arquero->talle == 'S' ? 'selected' : '' ?>>S</option>
																<option value="M" <?= $arquero->talle == 'M' ? 'selected' : '' ?>>M</option>
																<option value="L" <?= $arquero->talle == 'L' ? 'selected' : '' ?>>L</option>
																<option value="XL" <?= $arquero->talle == 'XL' ? 'selected' : '' ?>>XL</option>
																<option value="XXL" <?= $arquero->talle == 'XXL' ? 'selected' : '' ?>>XXL</option>
																<option value="XXXL" <?= $arquero->talle == 'XXXL' ? 'selected' : '' ?>>XXXL</option>
															</select>
														</td>
														<?php if( $pedido->option_short_arquero_on == 1 || $pedido->option_short_arquero_on == "1" ): ?>
															<td class="data_jugador talle_short_arquero" style="border: 1px solid #ccc">
																<select name="talle_short_arquero[]" class="talle_short_arquero form-control" style="width: 80%; <?= $arquero->talle_short == '' ? 'display: none;' : '' ?>">
																	<option value="2" <?= $arquero->talle_short == '2' ? 'selected' : '' ?>>2</option>
																	<option value="4" <?= $arquero->talle_short == '4' ? 'selected' : '' ?>>4</option>
																	<option value="6" <?= $arquero->talle_short == '6' ? 'selected' : '' ?>>6</option>
																	<option value="8" <?= $arquero->talle_short == '8' ? 'selected' : '' ?>>8</option>
																	<option value="10" <?= $arquero->talle_short == '10' ? 'selected' : '' ?>>10</option>
																	<option value="12" <?= $arquero->talle_short == '12' ? 'selected' : '' ?>>12</option>
																	<option value="14" <?= $arquero->talle_short == '14' ? 'selected' : '' ?>>14</option>
																	<option value="S" <?= $arquero->talle_short == 'S' ? 'selected' : '' ?>>S</option>
																	<option value="M" <?= $arquero->talle_short == 'M' ? 'selected' : '' ?>>M</option>
																	<option value="L" <?= $arquero->talle_short == 'L' ? 'selected' : '' ?>>L</option>
																	<option value="XL" <?= $arquero->talle_short == 'XL' ? 'selected' : '' ?>>XL</option>
																	<option value="XXL" <?= $arquero->talle_short == 'XXL' ? 'selected' : '' ?>>XXL</option>
																	<option value="XXXL" <?= $arquero->talle_short == 'XXXL' ? 'selected' : '' ?>>XXXL</option>
																</select>
															</td>
														<?php endif; ?>
														<td style="display: none;" style="border: 1px solid #ccc">
															<span class="btn_delete">X</span>
														</td>
													</tr>
												<?php }else{ ?>
													<tr height="22">
														<td class="data_jugador" style="border: 1px solid #ccc"><?= $arquero->nombre ?></td>
														<td class="data_jugador" style="border: 1px solid #ccc"><?= $arquero->nro ?></td>
														<td class="data_jugador" style="border: 1px solid #ccc"><?= $arquero->talle ?></td>
														<?php if( $pedido->option_short_on == 1 || $pedido->option_short_on == "1" ): ?>
															<td class="data_jugador" style="border: 1px solid #ccc"><?= $arquero->talle_short ?></td>
														<?php endif; ?>
														<td class="data_jugador" style="border: 1px solid #ccc"></td>
													</tr>
												<?php } ?>
												<?php
												}
												?>
											</tbody>
										</table>
										<?php if($permiteEditar && false){ ?>
											<div id="add_arquero">
												<div class="add_cont">
													<img src="./common/img/ico_plus.png" alt="btn_add" class="btn_add"/>
													<span>Agregar Arquero</span>
												</div>
											</div>
										<?php } ?>
										<br />
										<br />
									</div>
								<?php
									}
								?>
								<div  style="width: 80%; margin-top: 20px;">
									<!-- <p class="p3">Jugadores:</p> -->
									<div class="titulos">
										<span style="font-size: 1.2em;">JUGADORES:</span>
									</div>
									<table id="list_players">
										<thead>
											<tr height="30">
												<td style="border: 1px solid #ccc"  width="30%">Nombre</td>
												<td style="border: 1px solid #ccc"  width="20%">Nro</td>
												<td style="border: 1px solid #ccc"  width="20%">Talle</td>
												<?php if( $pedido->option_short_on == 1 || $pedido->option_short_on == "1" ): ?>
													<td style="border: 1px solid #ccc"  width="20%">Talle Short</td>
												<?php endif; ?>
												<td style="border: 1px solid #ccc"  width="10%"></td>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ( $jugadores as $jugador ){
											?>
											<?php if($permiteEditar){ ?>
												<tr height="22">
													<td class="data_jugador" style="border: 1px solid #ccc">
														<div class="row" <?= $jugador->nro == '' ? 'style="display: none;"' : '' ?>>
															<input type="text" name="nombre_jugador[]" class="nombre_jugador form-control" style="width: 99%; <?= $jugador->nro == '' ? 'display: none;' : '' ?>" value="<?= $jugador->nombre ?>"/>
														</div>
													</td>
													<td class="data_jugador" style="border: 1px solid #ccc">
														<input type="number" min="0" name="numero_jugador[]" class="numero_jugador form-control" style="width: 75px; <?= $jugador->nro == '' ? 'display: none;' : '' ?>" maxlength="3" value="<?= $jugador->nro ?>"/>
													</td>
													<td class="data_jugador" style="border: 1px solid #ccc">
														<select name="talle_jugador[]" class="talle_jugador form-control" style="width: 80%; <?= $jugador->nro == '' ? 'display: none;' : '' ?>">
															<option value="2" <?= $jugador->talle == '2' ? 'selected' : '' ?>>2</option>
															<option value="4" <?= $jugador->talle == '4' ? 'selected' : '' ?>>4</option>
															<option value="6" <?= $jugador->talle == '6' ? 'selected' : '' ?>>6</option>
															<option value="8" <?= $jugador->talle == '8' ? 'selected' : '' ?>>8</option>
															<option value="10" <?= $jugador->talle == '10' ? 'selected' : '' ?>>10</option>
															<option value="12" <?= $jugador->talle == '12' ? 'selected' : '' ?>>12</option>
															<option value="14" <?= $jugador->talle == '14' ? 'selected' : '' ?>>14</option>
															<option value="S" <?= $jugador->talle == 'S' ? 'selected' : '' ?>>S</option>
															<option value="M" <?= $jugador->talle == 'M' ? 'selected' : '' ?>>M</option>
															<option value="L" <?= $jugador->talle == 'L' ? 'selected' : '' ?>>L</option>
															<option value="XL" <?= $jugador->talle == 'XL' ? 'selected' : '' ?>>XL</option>
															<option value="XXL" <?= $jugador->talle == 'XXL' ? 'selected' : '' ?>>XXL</option>
															<option value="XXXL" <?= $jugador->talle == 'XXXL' ? 'selected' : '' ?>>XXXL</option>
														</select>
													</td>
													<?php if( $pedido->option_short_on == 1 || $pedido->option_short_on == "1" ): ?>
														<td class="data_jugador" style="border: 1px solid #ccc">
															<select name="talle_short[]" class="talle_short form-control" style="width: 80%;  <?= $jugador->talle_short == '' ? 'display: none;' : '' ?>">
																<option value="2" <?= $jugador->talle_short == '2' ? 'selected' : '' ?>>2</option>
																<option value="4" <?= $jugador->talle_short == '4' ? 'selected' : '' ?>>4</option>
																<option value="6" <?= $jugador->talle_short == '6' ? 'selected' : '' ?>>6</option>
																<option value="8" <?= $jugador->talle_short == '8' ? 'selected' : '' ?>>8</option>
																<option value="10" <?= $jugador->talle_short == '10' ? 'selected' : '' ?>>10</option>
																<option value="12" <?= $jugador->talle_short == '12' ? 'selected' : '' ?>>12</option>
																<option value="14" <?= $jugador->talle_short == '14' ? 'selected' : '' ?>>14</option>
																<option value="S" <?= $jugador->talle_short == 'S' ? 'selected' : '' ?>>S</option>
																<option value="M" <?= $jugador->talle_short == 'M' ? 'selected' : '' ?>>M</option>
																<option value="L" <?= $jugador->talle_short == 'L' ? 'selected' : '' ?>>L</option>
																<option value="XL" <?= $jugador->talle_short == 'XL' ? 'selected' : '' ?>>XL</option>
																<option value="XXL" <?= $jugador->talle_short == 'XXL' ? 'selected' : '' ?>>XXL</option>
																<option value="XXXL" <?= $jugador->talle_short == 'XXXL' ? 'selected' : '' ?>>XXXL</option>
															</select>
														</td>
													<?php endif; ?>
													<td style="display: none; border: 1px solid #ccc">
														<span class="btn_delete">X</span>
													</td
												</tr>
											<?php } else { ?>
												<tr height="22">
													<td class="data_jugador" style="border: 1px solid #ccc"><?= $jugador->nombre ?></td>
													<td class="data_jugador" style="border: 1px solid #ccc"><?= $jugador->nro ?></td>
													<td class="data_jugador" style="border: 1px solid #ccc"><?= $jugador->talle ?></td>
													<?php if( $pedido->option_short_on == 1 || $pedido->option_short_on == "1" ): ?>
														<td class="data_jugador" style="border: 1px solid #ccc"><?= $jugador->talle_short ?></td>
													<?php endif; ?>
													<td class="data_jugador" style="border: 1px solid #ccc"></td>
												</tr>
											<?php } ?>
											<?php
											}
											?>
										</tbody>
									</table>
									<?php if($permiteEditar && false){ ?>
										<div id="add_jugador">
											<div class="add_cont">
												<img src="./common/img/ico_plus.png" alt="btn_add" class="btn_add"/>
												<span>Agregar Jugador</span>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="row">
									<div class="titulos">
										<span style="font-size: 1.2em;">IMAGENES:</span>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<label class="col-xs-4" for="escudo">IMAGEN DE ESCUDO:</label>
											<div class="col-xs-8">
												<input type="file" accept="image/x-png,image/gif,image/jpeg" class="control-form" name="escudo" id="escudo" <?php echo $permiteEditar ? '' : 'disabled' ?> onchange="loadImageFile(this);"/>
												<img style="display: none;" id="preview_escudo" width="100" height="100"/>
												<input type='button' id="save_escudo" style="display: none;" class="btn btn-primary btn-iniciado" value='GUARDAR' onclick="javascript: guardarImagen('escudo');">
												<div class="loading_escudo" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Subiendo...</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12" id="div_posicion_escudo" style="display: none;">
										<div class="row">
											<label class="col-xs-4" for="posicion_escudo">POSICIÓN:</label>
											<div class="col-xs-8">
												<select class="form-control" name="posicion_escudo" id="posicion_escudo" <?php echo $permiteEditar ? '' : 'disabled' ?>>
													<option value="centro">Centro</option>
													<option value="izquierda">Corazón</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row" id="rows_escudo">
											<?php
											while ( $imagenEscudo = mysqli_fetch_object($sqlImagenEscudo) ){
											?>
												<div class="col-xs-6">
													<div class="img-thumbnail img-upload div-img-<?php echo $imagenEscudo->id ?>">
														<a download="<?php echo $imagenEscudo->nombre_archivo ?>" href="data:image/png;base64, <?php echo $imagenEscudo->archivo ?>">
															<img height="200px" width="200px" src="data:image;base64, <?php echo $imagenEscudo->archivo ?>"/>
														</a>
														<div class="img-trash">
															<i class="fa fa-trash-o" style="color:#000; cursor: pointer;" onclick="deleteImage(<?php echo $imagenEscudo->id ?>)"></i>
															<span>Posición: <?php echo $imagenEscudo->posicion ?></span>
														</div>
													</div>
												</div>
											<?php
											}
											?>
										</div>
									</div>
									<div class="col-xs-12">
										<hr class="divisor_player" />
									</div>
									<div class="col-xs-12">
										<div class="row">
											<label class="col-xs-4" for="extra">IMAGEN EXTRA:</label>
											<div class="col-xs-8">
												<input class="form-control" type="file" accept="image/x-png,image/gif,image/jpeg" name="extra" id="extra" <?php echo $permiteEditar ? '' : 'disabled' ?> onchange="loadImageFile(this);"/>
												<img style="display: none;" id="preview_extra" width="100" height="100"/>
												<input type='button' id="save_extra" style="display: none;" class="btn btn-primary btn-iniciado" value='GUARDAR' onclick="javascript: guardarImagen('extra');">
												<div class="loading_extra" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Subiendo...</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12" id="div_posicion_extra" style="display: none;">
										<div class="row">
											<label class="col-xs-4" for="posicion_extra">POSICIÓN:</label>
											<div class="col-xs-8">
												<select class="form-control" name="posicion_extra" id="posicion_extra" <?php echo $permiteEditar ? '' : 'disabled' ?>>
													<option value="frente">Frente</option>
													<option value="espalda">Espalda</option>
													<option value="manga_izquierda">Manga izquierda</option>
													<option value="manga_derecha">Manga derecha</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row" id="rows_extra">
											<?php
											while ( $imagenExtra = mysqli_fetch_object($sqlImagenExtra) ){
											?>
												<div class="col-xs-6">
													<div class="img-thumbnail img-upload div-img-<?php echo $imagenExtra->id ?>">
														<a download="<?php echo $imagenExtra->nombre_archivo ?>" href="data:image/png;base64, <?php echo $imagenExtra->archivo ?>">
															<img height="200px" width="200px" src="data:image;base64, <?php echo $imagenExtra->archivo ?>"/>
														</a>
														<div class="img-trash">
															<i class="fa fa-trash-o" style="color:#000; cursor: pointer;" onclick="deleteImage(<?php echo $imagenExtra->id ?>)"></i>
															<span>Posición: <?php echo $imagenExtra->posicion ?></span>
														</div>
													</div>
												</div>
											<?php
											}
											?>
										</div>
									</div>

									<!-- <div class="col-xs-12">
										<hr class="divisor_player" />
									</div>

									<div class="col-xs-12">
										<div class="titulos">
											<span style="font-size: 1.2em;">ENVIO:</span>
										</div>
										<div class="row">
											<label class="col-xs-4" for="zona_envio">ZONA:</label>
											<div class="col-xs-8">
												<select style="width: 350px !important;" class="form-control" name="zona_envio" id="zona_envio">
													<option value="CABA">CABA</option>
                        							<option value="GBA">GBA</option>
													<option value="Catamarca">Catamarca</option>
													<option value="Chaco">Chaco</option>
													<option value="Chubut">Chubut</option>
													<option value="Cordoba">Cordoba</option>
													<option value="Corrientes">Corrientes</option>
													<option value="Entre Rios">Entre Rios</option>
													<option value="Formosa">Formosa</option>
													<option value="Jujuy">Jujuy</option>
													<option value="La Pampa">La Pampa</option>
													<option value="La Rioja">La Rioja</option>
													<option value="Mendoza">Mendoza</option>
													<option value="Misiones">Misiones</option>
													<option value="Neuquen">Neuquen</option>
													<option value="Rio Negro">Rio Negro</option>
													<option value="Salta">Salta</option>
													<option value="San Juan">San Juan</option>
													<option value="San Luis">San Luis</option>
													<option value="Santa Cruz">Santa Cruz</option>
													<option value="Santa Fe">Santa Fe</option>
													<option value="Sgo. del Estero">Sgo. del Estero</option>
													<option value="Tierra del Fuego">Tierra del Fuego</option>
													<option value="Tucuman">Tucuman</option>
												</select>
											</div>
										</div>
										<div class="row">
											<label class="col-xs-4" for="localidad_envio">LOCALIDAD:</label>
											<div class="col-xs-8">
												<input class="form-control" type="text" name="localidad_envio" id="localidad_envio" value="<?php echo $pedido->localidad_envio ?>" <?php echo $permiteEditar ? '' : 'readonly' ?>/>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<label class="col-xs-4" for="codigo_postal_envio">CÓDIGO POSTAL:</label>
											<div class="col-xs-8">
												<input type="text" class="form-control" name="codigo_postal_envio" id="codigo_postal_envio" value="<?php echo $pedido->cod_postal ?>" <?php echo $permiteEditar ? '' : 'readonly' ?>/>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<label class="col-xs-4" for="tipo_envio">TIPO DE ENVÍO:</label>
											<div class="col-xs-8">
												<select class="form-control" name="tipo_envio" id="tipo_envio" <?php echo $permiteEditar ? '' : 'disabled' ?> style="display: inline !important;">
													<option value="correo" <?php echo $pedido->tipo_envio == 'correo' ? 'selected' : '' ?>>Correo</option>
													<option value="moto" <?php echo $pedido->tipo_envio == 'moto' ? 'selected' : '' ?>>Moto</option>
													<option value="retiro" <?php echo $pedido->tipo_envio == 'retiro' ? 'selected' : '' ?>>Retiro a domicilio</option>
												</select>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						
						<hr class="divisor_player" />
						
						<?php if($permiteEditar){ ?>
							<div class="row">
								<p>Si desea editar los números, nombres y los talles de camisetas o shorts, ingrese el email del creador del pedido aquí.</p>
								<input type="hidden" name="id_pedido" id="id_pedido" value="<?= $id ?>" />
								<input type="hidden" name="uuid_pedido" id="uuid_pedido" value="<?= $uuid ?>" />
								<input type="hidden" name="option_arq_on" id="option_arq_on" value="<?= $pedido->option_arq_on ?>" />
								<input type="hidden" name="option_medias" id="option_medias" value="<?= $pedido->option_medias_on ?>">
								<input type="hidden" name="option_short" id="option_short" value="<?= $pedido->option_short_on ?>">
								<input type="email" name="email_owner" id="email_owner" value="" style="width: 200px; display: inline !important; border: 1px solid #ccc" class="form-control">
								<input type="button" id="btn_enviar_edit" value="Guardar" class="col-auto btn btn-info btn-iniciado" style="margin-left: 10px;"/>
								<div id="loading" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
							</div>
						<?php } ?>

					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript" src="<?php echo array_shift((explode('.', $_SERVER['HTTP_HOST']))) == 'hombre' ? '' : '.' ?>/common/js/bootstrap-toolkit.js"></script>
		<script src="<?php echo in_array(array_shift((explode('.', $_SERVER['HTTP_HOST']))), array('pedido')) ? '' : '.' ?>/common/js/pedido.js" id="pedido_js" 
			cantMinCamisetas="<?php echo $minCamisetas ?>" genero="<?php echo $genero ?>"
			relative_path="<?php echo in_array(array_shift((explode('.', $_SERVER['HTTP_HOST']))), array('pedido')) ? '.' : '../personalizador' ?>"
			medias_on="<?php echo $pedido->option_medias_on ?>" short_on="<?php echo $pedido->option_short_on ?>"></script>
	</body>
</html>

<?php
	include('./common/footer.php');
?>
