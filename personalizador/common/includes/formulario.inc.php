<?php
require_once('getData.php');
$minCamisetas = $config->valor;
$minShorts = $configShort->valor;
if($genero == 'chombas'){
    $minCamisetas = $configChomba->valor;
}
?>

<script src="/personalizador/common/js/font-awesome.js"></script>

<form action="" method="POST" name="formulario" id="formulario" accept-charset="utf-8" enctype="multipart/form-data">

    <input type="hidden" id="hCantShorts" value="0" />
    <input type="hidden" id="hCantShortsArqueros" value="0" />
    <input type="hidden" id="hCantCamisetas" value="<?php echo $minCamisetas; ?>" />
    <input type="hidden" id="hCantArqueros"  value="0" />
    <input type="hidden" id="pedidoUuid" />

    <div class="top">
        <h2>Tu modelo ya está listo,</h2>
        <span class="slogan">COMPLETÁ EL FORMULARIO y confirmá tu pedido.</span>
        <p><span class="alert_min">*Cantidad mínima <span id="minCamisetas"><?=$minCamisetas?></span> <?php echo $genero == 'chombas' ? 'chombas' : 'camisetas' ?>.</span></p>
        <?php if($genero != 'chombas'){ ?> 
            <p><span class="alert_min">*Cantidad mínima <span id="minShorts"><?=$minShorts?></span> shorts.</span></p>
            <p><span class="alert_min">*Se debe cumplir por lo menos alguna de las condiciones mínimas.</span></p>
        <?php } ?>
    </div>

    <div class="content">
        <div class="contenedor">
            <div class="sidebarBox">
                <div class="vista_modelos" style="margin-left:-55px; ">
                    <div class="vista_modelo_jugador vista_modelo_contenedor" style="width:360px;">
                        <div class="top_title">
                            <img src="img/jugador_form_ico.png" />
                            <span>CAMISETA JUGADORES</span>
                        </div>
                        <div class="final_preview_front" style="z-index:0;">
                            <img src="img/transparent.png" class="img_secundaria" />
                            <img src="img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal" />
                            <img src="img/modelos/modelo_base/frente/4.png" class="img_base" />
                        </div>
                        <div class="final_preview_back" style="z-index:0;">
                            <img src="img/transparent.png" alt="Back" class="img_secundaria" />
                            <img src="img/modelos/modelo_28/color_principal/espalda/14.png" class="img_principal" />
                            <img src="img/modelos/modelo_base/espalda/4.png" class="img_base" />
                            <div class="formato_nro_back">
                                <img src="img/numeros/1/14.png">
                            </div>
                        </div>
                    </div>
                    <?php if($genero != 'chombas'){ ?>
                        <div class="vista_modelo_arquero vista_modelo_contenedor">
                            <div class="top_title">
                                <img src="img/arquero_form_ico.png" />
                                <span>CAMISETA ARQUERO</span>
                            </div>
                            <div class="final_preview_front" style="z-index:0;">
                                <img src="img/transparent.png" class="img_secundaria" />
                                <img src="img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal" />
                                <img src="img/modelos/modelo_base/frente/4.png" class="img_base" />
                            </div>
                            <div class="final_preview_back" style="z-index:0;">
                                <img src="img/transparent.png" alt="Back" class="img_secundaria" />
                                <img src="img/modelos/modelo_28/color_principal/espalda/14.png" class="img_principal" />
                                <img src="img/modelos/modelo_base/espalda/4.png" class="img_base" />
                                <div class="formato_nro_back">
                                    <img src="img/numeros/1/14.png">
                                </div>
                            </div>
                        </div>
                        <div class="vista_modelo_short vista_modelo_contenedor">
                            <div class="top_title">
                                <img src="img/shorts_form_ico.png" />
                                <span>SHORTS</span>
                            </div>
                            <div class="final_preview_short" style="z-index:0;">
                                <div class="preview_content_short_content" style="z-index:0;">
                                    <img src="img/transparent.png" class="img_secundaria" style="z-index:2;"/>
                                    <img src="img/shorts/short_1/color_principal/14.png" class="img_principal" style="z-index:1;"/>
                                    <img src="img/shorts/base/4.png" class="img_base" style="z-index:0;"/>
                                </div>
                            </div>
                        </div>
                        <div class="vista_modelo_short_arquero vista_modelo_contenedor">
                            <div class="top_title">
                                <img src="img/shorts_form_ico.png" />
                                <span>SHORTS ARQUEROS</span>
                            </div>
                            <div class="final_preview_short" style="z-index:0;">
                                <div class="preview_content_short_arquero_content" style="z-index:0;">
                                    <img src="img/transparent.png" class="img_secundaria" style="z-index:2;"/>
                                    <img src="img/shorts/short_1/color_principal/14.png" class="img_principal" style="z-index:1;"/>
                                    <img src="img/shorts/base/4.png" class="img_base" style="z-index:0;"/>
                                </div>
                            </div>
                        </div>
                        <div class="vista_modelo_medias vista_modelo_contenedor">
                            <div class="top_title">
                                <img src="img/medias_form_ico.png" />
                                <span>MEDIAS</span>
                            </div>
                            <div class="final_preview_medias" style="z-index:0;">
                                <div class="preview_content_medias_content">
                                    <img src="img/medias/frente/1.png" class="img_medias img_medias_frente" />
                                    <img src="img/medias/perfil/1.png" class="img_medias img_medias_perfil" />
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="scrollingBox" style="background-color: white; z-index: 99;">
                    <h3>TOTAL</h3>
                    <hr />
                    <table id="costoTotal">
                        <tr><td>Precio por <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta' ?>:</td><td style="padding-left: 20px;">$ <span class="precioCamiseta"></span></td></tr>
                        <tr style="padding: 10px;"><td>Cantidad de <?php echo $genero == 'chombas' ? 'chombas' : 'camisetas' ?>: </td><td style="padding-left: 20px;"><span class="cantCamisetas"><?= $minCamisetas ?></span></td></tr>
                        <tr style="padding: 10px;" class="box_precio_shorts"><td>Precio por short: </td><td style="padding-left: 20px;"><span class="precioShort"></span></td></tr>
                        <tr style="padding: 10px;" class="box_precio_medias"><td>Precio por medias: </td><td style="padding-left: 20px;"><span class="precioMedia"></span></td></tr>
                        <tr style="padding: 10px;" class="box_precio_medias"><td>Cantidad de medias: </td><td style="padding-left: 20px;"><span class="cantShort"></span></td></tr>
                        <tr style="padding: 10px;" class="box_precio_shorts"><td>Cantidad de shorts: </td><td style="padding-left: 20px;"><span class="cantShort"></span></td></tr>
                        <tfoot><td><b>Precio Total:</b></td><td><b>$ <span class="precioTotal"></span></b></td></tfoot>
                    </table>
                    <table style="margin-top:15px; width: 100%;">
                        <tbody>
                            <tr>
                                <td style="padding:8px; border-bottom:1px solid #ccc;">Tiempo de entrega:</td>
                                <td style="padding-left: 20px; padding:8px; border-bottom:1px solid #ccc; font-weight: bold;" align="right"><?=$param_tiempo_entrega->valor + $param_demora->valor?> días</td>
                            </tr>
                            <tr>
                                <td style="padding:8px; border-bottom:1px solid #ccc; font-size: 14px; font-style: italic;" colspan="2"><?=$precios->descuento?>% de descuento superando $<?=$precios->desc_cantidad?></td>
                            </tr>
                            <tr>
                                <td style="padding:8px; border-bottom:1px solid #ccc; font-size: 14px; font-style: italic;" colspan="2"><?=$precios->descuento2?>% de descuento superando $<?=$precios->desc_cantidad2?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="costoConDescuento">
                        <tr><td>Descuento por cantidad:</td><td style="padding-left: 20px;"><span class="descuentoAplic"></span></td></tr>
                        <tfoot><td><b>Precio c/Descuento:</b></td><td><b>$ <span class="precioTotalD"></span></b></td></tfoot>
                    </table>
                </div>

            </div>

            <div class="form_fields">
                <div style="margin: 30px 0;cursor: pointer;text-align: right;" class="swipebox-talles" href="img/tabla_<?php echo $genero; ?>.jpg"><img src="img/btn_tabla_talles.png" style="max-width: 100%" /></div>

                <div id="arqueros" style="display: none;">
                    <div style="background:#9d7e22; padding:15px; margin-left:-40px; margin-bottom:15px; width:610px;">
                        <h3 style="color:#FFF;"><img src="img/arquero.png" /> ARQUEROS</h3>
                    </div>

                    <div id="list_arqueros" style="margin-left:-84px;">
                    </div>
                    
                    <div id="add_arquero" style="display: inline;">
                        <div class="add_cont" style="margin-left: 0; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Camiseta</span>
                        </div>
                    </div>
                    <div id="add_short_arquero" style="display: inline;">
                        <div class="add_cont" style="margin-left: 200px; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Short</span>
                        </div>
                    </div>
                    <div id="add_conjunto_arquero" style="display: inline;">
                        <div class="add_cont" style="margin-left: 400px; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Conjunto</span>
                        </div>
                    </div>
                    <BR><BR>
                    <hr class="divisor_player" />
                </div>

                <div id="camisetas">
                    <div style="background:#9d7e22; padding:15px; margin-left:-40px; margin-bottom:15px; width:610px;">
                        <h3 style="color:#FFF;"><img src="img/jugador.png" /> JUGADORES</h3>
                    </div>

                    <div id="list_jugadores" style="margin-left:-84px;">
                    </div>

                    <div id="add_jugador" style="display: inline;">
                        <div class="add_cont" style="margin-left: 0; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Camiseta</span>
                        </div>
                    </div>
                    <div id="add_short_jugador" style="display: inline;">
                        <div class="add_cont" style="margin-left: 200px; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Short</span>
                        </div>
                    </div>
                    <div id="add_conjunto_jugador" style="display: inline;">
                        <div class="add_cont" style="margin-left: 400px; width: 200px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Agregar Conjunto</span>
                        </div>
                    </div>
                    <BR><BR>
                    <hr class="divisor_player" />
                </div>

                <div style="background:#9d7e22; padding:15px; margin-left:-40px; margin-bottom:15px; margin-top:40px; width:610px;">
                    <h3 style="color:#FFF;">ESCUDO</h3>
                </div>

                <div class="row">
                    <input type="file" accept="image/x-png,image/gif,image/jpeg" name="escudo" id="escudo" style="vertical-align:middle; margin-top:10px;"/>
                    <label for="escudo">IMAGEN DE ESCUDO:</label>
                </div>
                <div class="row">
                    <select name="posicion_escudo" id="posicion_escudo">
                        <option value="centro">Centro</option>
                        <option value="izquierda">Corazón</option>
                    </select>
                    <label for="posicion_escudo">POSICIÓN:</label>
                </div>

                <hr class="divisor_player" style="width: 55%; margin:20px auto;">

                <div class="row">
                    <input type="file" accept="image/x-png,image/gif,image/jpeg" name="extra" id="extra" style="margin-top:10px;"/>
                    <label for="extra">IMAGEN EXTRA:</label>
                </div>
                <div class="row">
                    <select name="posicion_extra" id="posicion_extra">
                        <option value="frente">Frente</option>
                        <option value="espalda">Espalda</option>
                        <option value="manga_izquierda">Manga izquierda</option>
                        <option value="manga_derecha">Manga derecha</option>
                    </select>
                    <label for="posicion_extra">POSICIÓN:</label>
                </div>

                <div style="background:#9d7e22; padding:15px; margin-left:-40px; margin-bottom:15px; margin-top:60px; width:610px;">
                    <h3 style="color:#FFF;">DATOS PERSONALES</h3>
                </div>
                
                <div class="row">
                    <input type="text" name="nombre_apellido" id="nombre_apellido" />
                    <label for="nombre_apellido">NOMBRE Y APELLIDO:</label>
                </div>
                <div class="row">
                    <input type="text" name="email" id="email" />
                    <label for="email">EMAIL:</label>
                </div>
                <div class="row">
                    <input type="text" name="telefono" id="telefono" />
                    <label for="telefono">TELEFONO:</label>
                </div>
                <div class="row">
                    <textarea name="comentario" id="comentario"></textarea>
                    <label for="comentario">COMENTARIO</label>
                </div>

                <!-- <hr class="divisor_player" />

                <div class="row">
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
                    <label for="zona_envio">ZONA:</label>
                </div>
                <div class="row">
                    <input type="text" name="localidad_envio" id="localidad_envio" />
                    <label for="localidad_envio">LOCALIDAD:</label>
                </div>
                <div class="row">
                    <input type="text" name="codigo_postal_envio" id="codigo_postal_envio" />
                    <label for="codigo_postal_envio">CÓDIGO POSTAL:</label>
                </div>
                <div class="row">
                    <select name="tipo_envio" id="tipo_envio">
                        <option value="correo">Correo</option>
                        <option value="moto">Moto</option>
                        <option value="retiro">Retiro a domicilio</option>
                    </select>
                    <label for="tipo_envio">TIPO DE ENVÍO:</label>
                </div> -->
            </div>
        </div>
        <div style="width: 700px; text-align:center; margin-top:50px;">
            <div style="display: inline-block;">
                <input type="button" class="btn_style_red" value="COMPRAR" id="btn_metodos_pago" onclick="enviar(true, true);">
                <div id="loading_btn_enviar" style="visibility: hidden;"><i class="fa fa-spinner fa-spin"></i> procesando...</div>
                <input type="submit" class="btn_style_white" name="btn_enviar" value="ENVIAR CONSULTA" id="btn_enviar" style='width:95%; margin-left: 15px;'/>
            </div>
            <BR><BR>
            <div style="display: none; width: 600px; margin:0 auto; font-size: 20px;" id="metodos_pago">
                <p id="btn_mp" onclick="$('#metodo_pago_acordar').css({'display': 'none'}); $('#metodo_pago_transferencia').css({'display': 'none'}); solicitarMercadoPago();" 
                    style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                    <img src="/personalizador/common/img/logomercadopago.jpg" alt="MercadoPago" width="150px" height="100px"/>
                    <span style="margin-left: 5px;">Tarjetas de crédito, débito y otros medios</span>
                </p>
                <p onclick="$('#metodo_pago_acordar').css({'display': 'none'}); $('#metodo_pago_transferencia').css({'display': 'block'});"
                    style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                    <img src="/personalizador/common/img/logotransferenciabancaria.png" alt width="150px" height="100px"/>
                    <span style="margin-left: 5px;">Transferencia bancaria (10% de descuento)</span>
                    <div id="metodo_pago_transferencia" style="display: none; text-align: left; margin-left: 10px; margin-top: 5px; margin-bottom: 15px;">
                        <p><?php echo $transferencia_banco->valor ?></p>
                        <p><?php echo $transferencia_tipo_cuenta->valor ?></p>
                        <p>Cuenta Nro.: <?php echo $transferencia_nro_cuenta->valor ?></p>
                        <p>CBU:<?php echo $transferencia_cbu->valor ?></p>
                        <p>Nombre:<?php echo $transferencia_nombre->valor ?></p>
                        <p>CUIT:<?php echo $transferencia_cuit->valor ?></p>
                    </div>
                </p>
                <p onclick="$('#metodo_pago_transferencia').css({'display': 'none'}); $('#metodo_pago_acordar').css({'display': 'block'});"
                    style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                    <img src="/personalizador/common/img/logootraformadepago.png" alt width="150px" height="100px"/>
                    <span style="margin-left: 5px;">Consultar por otros descuentos y formas de pago</span>
                    <div id="metodo_pago_acordar" style="display: none; text-align: left; margin-left: 10px; margin-top: 5px; margin-bottom: 15px;">
                        Nos estaremos contactando.
                    </div>
                </p>
                <BR><BR>
            </div>
            <a href="#" id="btn_modificar">VOLVER A MODIFICAR DISEÑO</a>
        </div>
    </div>
    <!-- Opciones diseno Jugador -->
    <input type="hidden" name="option_diseno" id="option_diseno" value="28" />
    <input type="hidden" name="option_color_base" id="option_color_base" value="4" />
    <input type="hidden" name="option_color_principal" id="option_color_principal" value="14" />
    <input type="hidden" name="option_color_secundario" id="option_color_secundario" value="0" />
    <input type="hidden" name="option_formato" id="option_formato" value="1" />
    <input type="hidden" name="option_color_text" id="option_color_text" value="14" />
    <input type="hidden" name="option_camiseta_on" id="option_camiseta_on" value="1" />
    <!-- Opciones diseno Arquero -->
    <input type="hidden" name="option_diseno_arq" id="option_diseno_arq" value="28" />
    <input type="hidden" name="option_color_base_arq" id="option_color_base_arq" value="4" />
    <input type="hidden" name="option_color_principal_arq" id="option_color_principal_arq" value="14" />
    <input type="hidden" name="option_color_secundario_arq" id="option_color_secundario_arq" value="0" />
    <input type="hidden" name="option_formato_arq" id="option_formato_arq" value="1" />
    <input type="hidden" name="option_color_text_arq" id="option_color_text_arq" value="14" />
    <input type="hidden" name="option_arq_on" id="option_arq_on" value="0" />
    <!-- Opciones Short -->
    <input type="hidden" name="option_diseno_short" id="option_diseno_short" value="1" />
    <input type="hidden" name="option_color_base_short" id="option_color_base_short" value="4" />
    <input type="hidden" name="option_color_principal_short" id="option_color_principal_short" value="14" />
    <input type="hidden" name="option_color_secundario_short" id="option_color_secundario_short" value="9" />
    <input type="hidden" name="option_short_on" id="option_short_on" value="0" />
    <!-- Opciones Short Arquero -->
    <input type="hidden" name="option_diseno_short_arquero" id="option_diseno_short_arquero" value="1" />
    <input type="hidden" name="option_color_base_short_arquero" id="option_color_base_short_arquero" value="4" />
    <input type="hidden" name="option_color_principal_short_arquero" id="option_color_principal_short_arquero" value="14" />
    <input type="hidden" name="option_color_secundario_short_arquero" id="option_color_secundario_short_arquero" value="9" />
    <input type="hidden" name="option_short_arquero_on" id="option_short_arquero_on" value="0" />
    <!-- Opciones Medias -->
    <input type="hidden" name="option_color_medias" id="option_color_medias" value="1" />
    <input type="hidden" name="option_medias_on" id="option_medias_on" value="0" />
    <input type="hidden" name="hPUid" id="hPUid" value="<?=$precios->uuid?>" />
    <input type="hidden" name="hPConj" id="hPConj" value="" />
    <input type="hidden" name="hPArquero" id="hPArquero" value="" />
    <input type="hidden" name="hTotal" id="hTotal" value="" />
    <input type="hidden" name="hPrecioType" id="hPrecioType" value="" />
</form>
