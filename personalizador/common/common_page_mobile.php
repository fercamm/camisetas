<div class="mobile">
    <div class="logo_mb">
        <img src="img/yakka_mobile.png" alt="Yakka" />
    </div>
    <script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>
    <div class="titular_mb">
        <span>&iexcl;Dise&ntilde;a tu <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta'; ?>!</span>

        <ul class="nav_jug_arq_mb">
            <li id="btn_modelo_jugador_mb" class="option_select_mb">
                <img src="img/jugador.png" class="img_jugador_mb">
                <img src="img/jugador_over.png" class="img_jugador_over_mb">
                <!--<span>Modelo Jugador</span>-->
            </li>
            <?php if($genero != 'chombas'){ ?>
                <li id="btn_modelo_arquero_mb" class="option_disable_mb">
                    <img src="img/arquero.png" class="img_arquero_mb">
                    <img src="img/arquero_over.png" class="img_arquero_over_mb">
                    <!--<span>Modelo Arquero</span>-->
                </li>
                <li id="btn_short_mb" class="option_disable_mb">
                    <img src="img/short.png" class="img_short_mb">
                    <img src="img/short_over.png" class="img_short_over_mb">
                    <!--<span>Shorts</span>-->
                </li>
                <li id="btn_short_arquero_mb" class="option_disable_mb">
                    <img src="img/short_arquero.png" class="img_short_arquero_mb" style="margin-top: -4px;">
                    <img src="img/short_arquero_over.png" class="img_short_arquero_over_mb" style="margin-top: -4px;">
                    <!--<span>Shorts</span>-->
                </li>
                <li id="btn_medias_mb" class="option_disable_mb">
                    <img src="img/media.png" class="img_medias_mb">
                    <img src="img/media_over.png" class="img_medias_over_mb">
                    <!--<span>Medias</span>-->
                </li>
            <?php } ?>
            <li id="btn_precio_mb" class="option_select_mb" style="border-top-left-radius: 6px; border-top-right-radius: 6px; border: 1px solid #ebebeb;">
                <span style="font-size: 1.2em; text-align: left; width: 100% !important; float:none !important;" id="tabPrecioMobile">$ <?php echo $genero == 'chombas' ? $precios->chomba : $precios->cam; ?></span>
            </li>
        </ul>
    </div>
    <div id="content_base_mb">
        <div id="view_design">
            <div class="preview_mb">
                <div class="header_switch" id="switch_si_no_camiseta_mb">
                    <span class="txt">QUIERO CAMISETAS</span>
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_camiseta_mb" checked>
                        <label class="onoffswitch-label" for="option_switch_camiseta_mb">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                <div class="preview_front_mb">
                    <img src="img/transparent.png" class="img_secundaria" />
                    <img src="img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal" />
                    <img src="img/modelos/modelo_base/frente/4.png" class="img_base" />
                </div>
                <div class="preview_back_mb">
                    <img src="img/transparent.png" alt="espalda" class="img_secundaria" />
                    <img src="img/modelos/modelo_28/color_principal/espalda/14.png" alt="espalda" class="img_principal" />
                    <img src="img/modelos/modelo_base/espalda/4.png" alt="espalda" class="img_base" />
                    <div class="formato_nro_back_mb">
                        <img src="img/numeros/1/14.png">
                    </div>
                </div>
            </div>
            <?php if($genero != 'chombas'){ ?>
                <div class="preview_arquero_mb">
                    <div class="header_switch" id="switch_si_no_arquero_mb">
                        <span class="txt">QUIERO MODELO DE ARQUERO</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_arquero_mb">
                            <label class="onoffswitch-label" for="option_switch_arquero_mb">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="preview_front_mb">
                        <img src="img/transparent.png" class="img_secundaria" />
                        <img src="img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal" />
                        <img src="img/modelos/modelo_base/frente/4.png" class="img_base" />
                    </div>
                    <div class="preview_back_mb">
                        <img src="img/transparent.png" alt="espalda" class="img_secundaria" />
                        <img src="img/modelos/modelo_28/color_principal/espalda/14.png" alt="espalda" class="img_principal" />
                        <img src="img/modelos/modelo_base/espalda/4.png" alt="espalda" class="img_base" />
                        <div class="formato_nro_back_mb">
                            <img src="img/numeros/1/14.png">
                        </div>
                    </div>
                </div>

                <div class="preview_short_mb">
                    <div class="header_switch" id="switch_si_no_short_mb">
                        <span class="txt">QUIERO SHORT</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_short_mb">
                            <label class="onoffswitch-label" for="option_switch_short_mb">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <img src="img/transparent.png" class="img_secundaria" />
                    <img src="img/shorts/short_1/color_principal/14.png" class="img_principal" />
                    <img src="img/shorts/base/4.png" class="img_base" />
                </div>

                <div class="preview_short_arquero_mb">
                    <div class="header_switch" id="switch_si_no_short_arquero_mb">
                        <span class="txt">QUIERO SHORT</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_short_arquero_mb">
                            <label class="onoffswitch-label" for="option_switch_short_arquero_mb">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <img src="img/transparent.png" class="img_secundaria" />
                    <img src="img/shorts/short_1/color_principal/14.png" class="img_principal" />
                    <img src="img/shorts/base/4.png" class="img_base" />
                </div>

                <div class="preview_medias_mb">
                    <div class="header_switch" id="switch_si_no_medias_mb">
                        <span class="txt">QUIERO MEDIAS</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="option_switch_medias_mb">
                            <label class="onoffswitch-label" for="option_switch_medias_mb">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <img src="img/medias/frente/1.png" class="img_medias img_medias_frente" />
                    <img src="img/medias/perfil/1.png" class="img_medias img_medias_perfil" />
                </div>
            <?php } ?>
            <div id="btn_mb_back">
                <img src="img/back_ico.png" alt="espalda" />
                ESPALDA
            </div>
            <a href="https://www.youtube.com/watch?v=VpeFuCsUYTE&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1" class="swipebox" rel="youtube"><div id="btn_mb_como">&iquest;C&Oacute;MO FUNCIONA?</div></a>
            <div id="btn_mb_precio">PRECIO Y ENTREGA</div>
            <!-- <div id="btn_preguntas_frecuentes_mb">
                PREGUNTAS FRECUENTES
            </div> -->
        </div>
        <nav>
            <ul id="nav_options_camisetas">
                <li id="btn_estampado_mb">
                    <div class="content_img">
                        <img src="img/ico_estampado.png" alt="Estampado" class="img_default" />
                        <img src="img/ico_estampado_hover.png" alt="Estampado" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb">ESTAMPADO</span>
                </li>
                <li id="btn_colores_mb">
                    <div class="content_img">
                        <img src="img/ico_colores.png" alt="Colores" class="img_default" />
                        <img src="img/ico_colores_hover.png" alt="Colores" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb">COLORES</span>
                </li>
                <li id="btn_numeros_mb">
                    <div class="content_img">
                        <img src="img/ico_numeros.png" alt="Numeros" class="img_default" />
                        <img src="img/ico_numeros_hover.png" alt="Numeros" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb"><?php echo $genero == 'chombas' ? 'NOMBRE' : 'NUMERO'; ?></span>
                </li>
                <li class="btn_pedir_mb">
                    <div class="content_img">
                        <img src="img/ico_pedir.png" alt="Pedir" />
                    </div>
                    <span>SIGUIENTE</span>
                </li>
            </ul>
            <ul id="nav_options_camisetas_arquero">
                <li id="btn_estampado_arquero_mb">
                    <div class="content_img">
                        <img src="img/ico_estampado.png" alt="Estampado" class="img_default" />
                        <img src="img/ico_estampado_hover.png" alt="Estampado" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb">ESTAMPADO</span>
                </li>
                <li id="btn_colores_arquero_mb">
                    <div class="content_img">
                        <img src="img/ico_colores.png" alt="Colores" class="img_default" />
                        <img src="img/ico_colores_hover.png" alt="Colores" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb">COLORES</span>
                </li>
                <li id="btn_numeros_arquero_mb">
                    <div class="content_img">
                        <img src="img/ico_numeros.png" alt="Numeros" class="img_default" />
                        <img src="img/ico_numeros_hover.png" alt="Numeros" class="img_hover" />
                    </div>
                    <span class="txt_btn_mb"><?php echo $genero == 'chombas' ? 'NOMBRE' : 'NUMERO'; ?></span>
                </li>
                <li class="btn_pedir_arquero_mb">
                    <div class="content_img">
                        <img src="img/ico_pedir.png" alt="Pedir" />
                    </div>
                    <span>SIGUIENTE</span>
                </li>
            </ul>
            <?php if($genero != 'chombas'){ ?>
                <ul id="nav_options_short">
                    <li id="btn_estampado_short_mb">
                        <div class="content_img">
                            <img src="img/ico_estampado.png" alt="Estampado" class="img_default_short" />
                            <img src="img/ico_estampado_hover.png" alt="Estampado" class="img_hover_short" />
                        </div>
                        <span class="txt_btn_short_mb">ESTAMPADO</span>
                    </li>
                    <li id="btn_colores_short_mb">
                        <div class="content_img">
                            <img src="img/ico_colores.png" alt="Colores" class="img_default_short" />
                            <img src="img/ico_colores_hover.png" alt="Colores" class="img_hover_short" />
                        </div>
                        <span class="txt_btn_short_mb">COLORES</span>
                    </li>
                    <li class="btn_pedir_mb">
                        <div class="content_img">
                            <img src="img/ico_pedir.png" alt="Pedir" />
                        </div>
                        <span>PEDIR</span>
                    </li>
                </ul>
                <ul id="nav_options_short_arquero">
                    <li id="btn_estampado_short_arquero_mb">
                        <div class="content_img">
                            <img src="img/ico_estampado.png" alt="Estampado" class="img_default_short" />
                            <img src="img/ico_estampado_hover.png" alt="Estampado" class="img_hover_short" />
                        </div>
                        <span class="txt_btn_short_mb">ESTAMPADO</span>
                    </li>
                    <li id="btn_colores_short_arquero_mb">
                        <div class="content_img">
                            <img src="img/ico_colores.png" alt="Colores" class="img_default_short" />
                            <img src="img/ico_colores_hover.png" alt="Colores" class="img_hover_short" />
                        </div>
                        <span class="txt_btn_short_mb">COLORES</span>
                    </li>
                    <li class="btn_pedir_mb">
                        <div class="content_img">
                            <img src="img/ico_pedir.png" alt="Pedir" />
                        </div>
                        <span>PEDIR</span>
                    </li>
                </ul>
                <ul id="nav_options_medias">
                    <li id="btn_colores_medias_mb">
                        <div class="content_img">
                            <img src="img/ico_colores.png" alt="Colores" class="img_default_medias" />
                            <img src="img/ico_colores_hover.png" alt="Colores" class="img_hover_medias" />
                        </div>
                        <span class="txt_btn_medias_mb">COLORES</span>
                    </li>
                    <li class="btn_pedir_mb">
                        <div class="content_img">
                            <img src="img/ico_pedir.png" alt="Pedir" />
                        </div>
                        <span>PEDIR</span>
                    </li>
                </ul>
            <?php } ?>
            <div class="overlay_mb"></div>
        </nav>

        <section id="content_options_mb">
            <div id="options_mb">
                <div id="option_estampados">
                    <div class="top">
                        <span class="titular">Seleccion&aacute; un estampado</span>
                        <span class="btn_close">X</span>
                    </div>
                    <ul class="estampados">
                        <li class="sel_diseno_mb selected_mb" id="diseno_mb_28"><img src="img/modelos/modelo_28/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_29"><img src="img/modelos/modelo_29/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_30"><img src="img/modelos/modelo_30/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_31"><img src="img/modelos/modelo_31/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_32"><img src="img/modelos/modelo_32/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_33"><img src="img/modelos/modelo_33/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_34"><img src="img/modelos/modelo_34/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_35"><img src="img/modelos/modelo_35/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_36"><img src="img/modelos/modelo_36/option.png" alt="estampado"></li>
                        <li class="sel_diseno_mb" id="diseno_mb_1"><img src="img/modelos/modelo_1/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_2"><img src="img/modelos/modelo_2/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_3"><img src="img/modelos/modelo_3/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_4"><img src="img/modelos/modelo_4/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_5"><img src="img/modelos/modelo_5/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_6"><img src="img/modelos/modelo_6/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_7"><img src="img/modelos/modelo_7/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_8"><img src="img/modelos/modelo_8/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_9"><img src="img/modelos/modelo_9/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_10"><img src="img/modelos/modelo_10/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_11"><img src="img/modelos/modelo_11/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_12"><img src="img/modelos/modelo_12/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_13"><img src="img/modelos/modelo_13/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_14"><img src="img/modelos/modelo_14/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_15"><img src="img/modelos/modelo_15/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_16"><img src="img/modelos/modelo_16/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_17"><img src="img/modelos/modelo_17/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_18"><img src="img/modelos/modelo_18/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_19"><img src="img/modelos/modelo_19/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_20"><img src="img/modelos/modelo_20/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_21"><img src="img/modelos/modelo_21/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_22"><img src="img/modelos/modelo_22/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_23"><img src="img/modelos/modelo_23/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_24"><img src="img/modelos/modelo_24/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_25"><img src="img/modelos/modelo_25/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_26"><img src="img/modelos/modelo_26/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_mb" id="diseno_mb_27"><img src="img/modelos/modelo_27/option.png" alt="estampado" /></li>
                    </ul>
                </div>
                <div id="option_colores">
                    <div class="top">
                        <span class="titular">Seleccion&aacute; color de la <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta'; ?></span>
                        <span class="btn_close">X</span>
                    </div>
                    <div id="accordion">
                        <span class="sub_titular accordion">Color base</span>
                        <ul class="list_colores_mb panel" id="color_base_box_mb">
                            <li id="color_base_mb_1" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_2" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_3" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_4" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_5" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_6" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_7" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_8" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_9" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_10" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_11" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_12" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_13" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_14" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_15" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_16" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_17" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_18" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_19" class="sel_color_base_mb">&nbsp;</li>
                            <li id="color_base_mb_20" class="sel_color_base_mb">&nbsp;</li>
                        </ul>
                        <span class="sub_titular accordion" id="color_principal_tit_mb">Color principal</span>
                        <ul class="list_colores_mb panel" id="color_principal_box_mb">
                            <li id="color_principal_mb_1" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_2" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_3" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_4" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_5" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_6" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_7" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_8" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_9" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_10" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_11" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_12" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_13" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_14" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_15" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_16" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_17" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_18" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_19" class="sel_color_principal_mb">&nbsp;</li>
                            <li id="color_principal_mb_20" class="sel_color_principal_mb">&nbsp;</li>
                        </ul>
                        <span class="sub_titular accordion" id="color_secundario_tit_mb">Color secundario</span>
                        <ul class="list_colores_mb panel" id="color_secundario_box_mb">
                            <li id="color_secundario_mb_1" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_2" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_3" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_4" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_5" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_6" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_7" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_8" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_9" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_10" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_11" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_12" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_13" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_14" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_15" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_16" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_17" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_18" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_19" class="sel_color_secundario_mb">&nbsp;</li>
                            <li id="color_secundario_mb_20" class="sel_color_secundario_mb">&nbsp;</li>
                        </ul>
                    </div>
                </div>
                <div id="option_numeros">
                    <div class="top">
                        <span class="titular">Seleccion&aacute; el tipo de letra</span>
                        <span class="btn_close">X</span>
                    </div>
                    <ul class="list_formatos_mb" id="list_formato_mb">
                        <li id="formato_mb_1" class="sel_formato_mb selected_mb"><img src="img/numeros/1/14.png" /></li>
                        <li id="formato_mb_2" class="sel_formato_mb"><img src="img/numeros/2/14.png" /></li>
                        <li id="formato_mb_3" class="sel_formato_mb"><img src="img/numeros/3/14.png" /></li>
                        <li id="formato_mb_4" class="sel_formato_mb"><img src="img/numeros/4/14.png" /></li>
                        <li id="formato_mb_5" class="sel_formato_mb"><img src="img/numeros/5/14.png" /></li>
                        <li id="formato_mb_6" class="sel_formato_mb"><img src="img/numeros/6/14.png" /></li>
                        <li id="formato_mb_7" class="sel_formato_mb"><img src="img/numeros/7/14.png" /></li>
                    </ul>
                    <span class="sub_titular">Color</span>
                    <ul class="list_colores_mb">
                        <li id="color_text_mb_1" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_2" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_3" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_4" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_5" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_6" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_7" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_8" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_9" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_10" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_11" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_12" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_13" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_14" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_15" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_16" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_17" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_18" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_19" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_20" class="sel_color_text_mb">&nbsp;</li>
                    </ul>
                </div>
            </div>
            <div id="options_arquero_mb">
                <div id="option_estampados_arquero">
                    <div class="top">
                        <span class="titular">Seleccion&aacute; un estampado</span>
                        <span class="btn_close">X</span>
                    </div>
                    <ul class="estampados">
                        <li class="sel_diseno_arquero_mb selected_mb" id="diseno_arquero_mb_28"><img src="img/modelos/modelo_28/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_29"><img src="img/modelos/modelo_29/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_30"><img src="img/modelos/modelo_30/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_31"><img src="img/modelos/modelo_31/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_32"><img src="img/modelos/modelo_32/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_33"><img src="img/modelos/modelo_33/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_34"><img src="img/modelos/modelo_34/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_35"><img src="img/modelos/modelo_35/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_36"><img src="img/modelos/modelo_36/option.png" alt="estampado"></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_1"><img src="img/modelos/modelo_1/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_2"><img src="img/modelos/modelo_2/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_3"><img src="img/modelos/modelo_3/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_4"><img src="img/modelos/modelo_4/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_5"><img src="img/modelos/modelo_5/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_6"><img src="img/modelos/modelo_6/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_7"><img src="img/modelos/modelo_7/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_8"><img src="img/modelos/modelo_8/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_9"><img src="img/modelos/modelo_9/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_10"><img src="img/modelos/modelo_10/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_11"><img src="img/modelos/modelo_11/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_12"><img src="img/modelos/modelo_12/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_13"><img src="img/modelos/modelo_13/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_14"><img src="img/modelos/modelo_14/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_15"><img src="img/modelos/modelo_15/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_16"><img src="img/modelos/modelo_16/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_17"><img src="img/modelos/modelo_17/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_18"><img src="img/modelos/modelo_18/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_19"><img src="img/modelos/modelo_19/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_20"><img src="img/modelos/modelo_20/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_21"><img src="img/modelos/modelo_21/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_22"><img src="img/modelos/modelo_22/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_23"><img src="img/modelos/modelo_23/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_24"><img src="img/modelos/modelo_24/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_25"><img src="img/modelos/modelo_25/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_26"><img src="img/modelos/modelo_26/option.png" alt="estampado" /></li>
                        <li class="sel_diseno_arquero_mb" id="diseno_arquero_mb_27"><img src="img/modelos/modelo_27/option.png" alt="estampado" /></li>
                    </ul>
                </div>
                <div id="option_colores_arquero">
                    <div class="top">
                        <span class="titular">Seleccion&aacute; color de la <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta'; ?></span>
                        <span class="btn_close">X</span>
                    </div>
                    <div id="accordion">
                        <span class="sub_titular accordion">Color base</span>
                        <ul class="list_colores_mb panel" id="color_base_box_arquero_mb">
                            <li id="color_base_arquero_mb_1" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_2" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_3" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_4" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_5" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_6" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_7" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_8" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_9" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_10" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_11" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_12" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_13" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_14" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_15" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_16" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_17" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_18" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_19" class="sel_color_base_arquero_mb">&nbsp;</li>
                            <li id="color_base_arquero_mb_20" class="sel_color_base_arquero_mb">&nbsp;</li>
                        </ul>
                        <span class="sub_titular accordion" id="color_principal_tit_arquero_mb">Color principal</span>
                        <ul class="list_colores_mb panel" id="color_principal_box_mb">
                            <li id="color_principal_arquero_mb_1" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_2" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_3" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_4" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_5" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_6" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_7" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_8" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_9" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_10" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_11" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_12" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_13" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_14" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_15" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_16" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_17" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_18" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_19" class="sel_color_principal_arquero_mb">&nbsp;</li>
                            <li id="color_principal_arquero_mb_20" class="sel_color_principal_arquero_mb">&nbsp;</li>
                        </ul>
                        <span class="sub_titular accordion" id="color_secundario_tit_arquero_mb">Color secundario</span>
                        <ul class="list_colores_mb panel" id="color_secundario_box_mb">
                            <li id="color_secundario_arquero_mb_1" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_2" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_3" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_4" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_5" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_6" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_7" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_8" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_9" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_10" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_11" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_12" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_13" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_14" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_15" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_16" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_17" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_18" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_19" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                            <li id="color_secundario_arquero_mb_20" class="sel_color_secundario_arquero_mb">&nbsp;</li>
                        </ul>
                    </div>
                </div>
                <div id="option_numeros_arquero"> 
                    <div class="top">
                        <span class="titular">Seleccion&aacute; el tipo de letra</span>
                        <span class="btn_close">X</span>
                    </div>
                    <ul class="list_formatos_mb" id="list_formato_mb">
                        <li id="formato_arq_mb_1" class="sel_formato_mb selected_mb"><img src="img/numeros/1/14.png" /></li>
                        <li id="formato_arq_mb_2" class="sel_formato_mb"><img src="img/numeros/2/14.png" /></li>
                        <li id="formato_arq_mb_3" class="sel_formato_mb"><img src="img/numeros/3/14.png" /></li>
                        <li id="formato_arq_mb_4" class="sel_formato_mb"><img src="img/numeros/4/14.png" /></li>
                        <li id="formato_arq_mb_5" class="sel_formato_mb"><img src="img/numeros/5/14.png" /></li>
                        <li id="formato_arq_mb_6" class="sel_formato_mb"><img src="img/numeros/6/14.png" /></li>
                    </ul>
                    <span class="sub_titular">Color</span>
                    <ul class="list_colores_mb">
                        <li id="color_text_mb_1" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_2" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_3" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_4" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_5" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_6" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_7" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_8" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_9" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_10" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_11" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_12" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_13" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_14" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_15" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_16" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_17" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_18" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_19" class="sel_color_text_mb">&nbsp;</li>
                        <li id="color_text_mb_20" class="sel_color_text_mb">&nbsp;</li>
                    </ul>
                </div>
            </div>
            <?php if($genero != 'chombas'){ ?>
                <div id="options_short_mb">
                    <div id="option_estampados_short">
                        <div class="top">
                            <span class="titular">Seleccion&aacute; un estampado</span>
                            <span class="btn_close_short">X</span>
                        </div>
                        <ul class="estampados">
                            <li class="sel_diseno_short_mb selected_mb" id="diseno_short_mb_1"><img src="img/shorts/short_1/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_2"><img src="img/shorts/short_2/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_3"><img src="img/shorts/short_3/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_4"><img src="img/shorts/short_4/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_5"><img src="img/shorts/short_5/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_6"><img src="img/shorts/short_6/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_7"><img src="img/shorts/short_7/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_8"><img src="img/shorts/short_8/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_mb" id="diseno_short_mb_9"><img src="img/shorts/short_9/option.png" alt="estampado" /></li>
                        </ul>
                    </div>
                    <div id="option_colores_short">
                        <div class="top">
                            <span class="titular">Seleccion&aacute; color de la camiseta</span>
                            <span class="btn_close_short">X</span>
                        </div>
                        <div id="accordion_short">
                            <span class="sub_titular accordion_short">Color base</span>
                            <ul class="list_colores_short_mb panel_short" id="color_base_box_short_mb">
                                <li id="color_base_short_mb_1" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_2" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_3" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_4" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_5" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_6" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_7" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_8" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_9" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_10" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_11" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_12" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_13" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_14" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_15" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_16" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_17" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_18" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_19" class="sel_color_base_short_mb">&nbsp;</li>
                                <li id="color_base_short_mb_20" class="sel_color_base_short_mb">&nbsp;</li>
                            </ul>
                            <span class="sub_titular accordion_short" id="color_principal_tit_short_mb">Color principal</span>
                            <ul class="list_colores_short_mb panel_short" id="color_principal_box_short_mb">
                                <li id="color_principal_short_mb_1" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_2" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_3" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_4" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_5" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_6" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_7" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_8" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_9" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_10" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_11" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_12" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_13" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_14" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_15" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_16" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_17" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_18" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_19" class="sel_color_principal_short_mb">&nbsp;</li>
                                <li id="color_principal_short_mb_20" class="sel_color_principal_short_mb">&nbsp;</li>
                            </ul>
                            <span class="sub_titular accordion_short" id="color_secundario_tit_short_mb">Color secundario</span>
                            <ul class="list_colores_short_mb panel_short" id="color_secundario_box_short_mb">
                                <li id="color_secundario_short_mb_1" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_2" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_3" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_4" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_5" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_6" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_7" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_8" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_9" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_10" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_11" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_12" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_13" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_14" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_15" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_16" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_17" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_18" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_19" class="sel_color_secundario_short_mb">&nbsp;</li>
                                <li id="color_secundario_short_mb_20" class="sel_color_secundario_short_mb">&nbsp;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="options_short_arquero_mb">
                    <div id="option_estampados_short_arquero">
                        <div class="top">
                            <span class="titular">Seleccion&aacute; un estampado</span>
                            <span class="btn_close_short_arquero">X</span>
                        </div>
                        <ul class="estampados">
                            <li class="sel_diseno_short_arquero_mb selected_mb" id="diseno_short_arquero_mb_1"><img src="img/shorts/short_1/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_2"><img src="img/shorts/short_2/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_3"><img src="img/shorts/short_3/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_4"><img src="img/shorts/short_4/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_5"><img src="img/shorts/short_5/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_6"><img src="img/shorts/short_6/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_7"><img src="img/shorts/short_7/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_8"><img src="img/shorts/short_8/option.png" alt="estampado" /></li>
                            <li class="sel_diseno_short_arquero_mb" id="diseno_short_arquero_mb_9"><img src="img/shorts/short_9/option.png" alt="estampado" /></li>
                        </ul>
                    </div>
                    <div id="option_colores_short_arquero">
                        <div class="top">
                            <span class="titular">Seleccion&aacute; color de la camiseta</span>
                            <span class="btn_close_short_arquero">X</span>
                        </div>
                        <div id="accordion_short_arquero">
                            <span class="sub_titular accordion_short_arquero">Color base</span>
                            <ul class="list_colores_short_arquero_mb panel_short_arquero" id="color_base_box_short_arquero_mb">
                                <li id="color_base_short_arquero_mb_1" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_2" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_3" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_4" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_5" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_6" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_7" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_8" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_9" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_10" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_11" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_12" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_13" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_14" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_15" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_16" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_17" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_18" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_19" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                                <li id="color_base_short_arquero_mb_20" class="sel_color_base_short_arquero_mb">&nbsp;</li>
                            </ul>
                            <span class="sub_titular accordion_short_arquero" id="color_principal_tit_short_arquero_mb">Color principal</span>
                            <ul class="list_colores_short_arquero_mb panel_short_arquero" id="color_principal_box_short_arquero_mb">
                                <li id="color_principal_short_arquero_mb_1" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_2" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_3" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_4" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_5" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_6" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_7" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_8" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_9" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_10" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_11" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_12" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_13" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_14" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_15" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_16" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_17" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_18" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_19" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                                <li id="color_principal_short_arquero_mb_20" class="sel_color_principal_short_arquero_mb">&nbsp;</li>
                            </ul>
                            <span class="sub_titular accordion_short_arquero" id="color_secundario_tit_short_arquero_mb">Color secundario</span>
                            <ul class="list_colores_short_arquero_mb panel_short_arquero" id="color_secundario_box_short_arquero_mb">
                                <li id="color_secundario_short_arquero_mb_1" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_2" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_3" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_4" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_5" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_6" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_7" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_8" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_9" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_10" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_11" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_12" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_13" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_14" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_15" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_16" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_17" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_18" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_19" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                                <li id="color_secundario_short_arquero_mb_20" class="sel_color_secundario_short_arquero_mb">&nbsp;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="options_medias_mb">
                    <div id="option_colores_medias">
                        <div class="top">
                            <span class="titular">Seleccion&aacute; color de las medias</span>
                            <span class="btn_close_medias">X</span>
                        </div>
                        <ul class="list_colores_medias_mb">
                            <li id="color_medias_mb_1" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_2" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_4" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_5" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_7" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_10" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_12" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_13" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_14" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_15" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_17" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_19" class="sel_color_medias_mb">&nbsp;</li>
                            <li id="color_medias_mb_20" class="sel_color_medias_mb">&nbsp;</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </section>

        
    </div>
    <div id="precio_entrega">
        <div class="top">
            <span class="titular">Precio y Entrega</span>
            <span class="btn_close_precio_entrega">X</span>
        </div>
        <p class="txt">Te contactaremos para brindarte informaci&oacute;n de los tiempos de entrega y modalidades de pago.</p>
        <span class="titulo">Env&iacute;o</span>
        <p>Acu&eacute;rdalo con el vendedor.</p>
        <span class="titulo">Vendedor</span>
        <p>Yakka Indumentaria</p>
        <p>4709-9453/4838-0924</p>
        <p>11-5175-9181</p>
    </div>
<!--    <div id="back_form_min8">-->
<!--        <span class="str_1">Pedido m&iacute;nimo</span>-->
<!--        <span class="str_2">8 Camisetas</span>-->
<!--    </div>-->

    <form action="" method="POST" name="formulario_mb" id="formulario_mb" enctype="multipart/form-data">
        <div class="top">
            <span class="titular">Tu pedido</span>
            <span class="btn_close_form_mb">X</span>
        </div>
        <div class="content_pedido_mb">

            <div id="totalBoxMb">

            </div>
            <h3>TOTAL</h3>
            <hr />
            <table id="costoTotalMb">
                <tr><td>Precio por <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta' ?>:</td><td style="padding-left: 20px;">$ <span class="precioCamiseta"></span></td></tr>
                <tr style="padding: 10px;"><td>Cantidad de <?php echo $genero == 'chombas' ? 'chombas' : 'camisetas' ?>: </td><td style="padding-left: 20px;"><span class="cantCamisetas"><?=$minCamisetas?></span></td></tr>
                <tr style="padding: 10px;" class="box_precio_shorts"><td>Precio por short: </td><td style="padding-left: 20px;"><span class="precioShort"></span></td></tr>
                <tr style="padding: 10px;" class="box_precio_medias"><td>Precio por medias: </td><td style="padding-left: 20px;"><span class="precioMedia"></span></td></tr>
                <tr style="padding: 10px;" class="box_precio_medias"><td>Cantidad de medias: </td><td style="padding-left: 20px;"><span class="cantShort"></span></td></tr>
                <tr style="padding: 10px;" class="box_precio_shorts"><td>Cantidad de shorts: </td><td style="padding-left: 20px;"><span class="cantShort"></span></td></tr>
                <tfoot><td><b>Precio Total:</b></td><td><b>$ <span id="precioTotalMb"></span></b></td></tfoot>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td>Tiempo de entrega: <span style="padding-left: 30px;"><?=$param_tiempo_entrega->valor + $param_demora->valor?> días</span></td>
                    </tr>
                    <tr>
                        <td style="font-style: italic;"><?=$precios->descuento?>% de descuento superando $<?=$precios->desc_cantidad?></td>
                    </tr>
                    <tr>
                        <td style="font-style: italic;"><?=$precios->descuento2?>% de descuento superando $<?=$precios->desc_cantidad2?></td>
                    </tr>
                </tbody>
            </table>
            <table class="costoConDescuentoMb">
                <tr><td>Descuento por cantidad:</td><td style="padding-left: 20px;"><span class="descuentoAplicMb"></span></td></tr>
                <tfoot><td><b>Precio c/Descuento:</b></td><td><b>$ <span id="precioTotalDMb"></span></b></td></tfoot>
            </table>
            <hr class="divisor_mb" />

            <p><span class="alert_min">*Cantidad mínima <span id="minCamisetas"><?=$minCamisetas?></span> <?php echo $genero == 'chombas' ? 'chombas' : 'camisetas' ?>.</span></p>
            <?php if($genero != 'chombas'){ ?> 
                <p><span class="alert_min">*Cantidad mínima <span id="minShorts"><?=$minShorts?></span> shorts.</span></p>
                <p><span class="alert_min">*Se debe cumplir por lo menos alguna de las condiciones mínimas.</span></p>
            <?php } ?>            

            <hr class="divisor_mb" />
            <div style="margin: 30px 0;cursor: pointer;" class="swipebox-talles" href="img/tabla_<?php echo $genero; ?>.jpg"><img src="img/btn_tabla_talles.png" style="max-width: 100%" /></div>

            <?php if($genero != 'chombas'){ ?>
                <div class="box_arqueros_mb">
                    <span class="titular"><img src="img/arquero.png" /> Arqueros</span>
                    <!-- <div id="btn_add_arquero_mb" style="margin-top: -55px;"><img src="img/btn_add_mb.png" alt="add" /></div> -->
                    
                    <div id="list_arqueros_mb">
                    </div>

                    <div id="add_arquero_mb" style="display: inline;">
                        <div class="add_cont" style="display: inline; margin-left: 5px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Camiseta</span>
                        </div>
                    </div>
                    <div id="add_short_arquero_mb" style="display: inline;">
                        <div class="add_cont" style="display: inline; margin-left: 5px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Short</span>
                        </div>
                    </div>
                    <div id="add_conjunto_arquero_mb" style="display: inline;">
                        <div class="add_cont" style="display: inline; margin-left: 5px;">
                            <img src="img/ico_plus.png" alt="add" />
                            <span>Conjunto</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <hr class="divisor_mb" />

            <div class="box_jugadores_mb">
                <span class="titular"><img src="img/jugador.png" /> Jugadores</span>
                <!-- <div id="btn_add_jugador_mb" style="margin-top: -55px;"><img src="img/btn_add_mb.png" alt="add" /></div> -->

                <div id="list_jugadores_mb">
                </div>

                <div id="add_jugador_mb" style="display: inline;">
                    <div class="add_cont" style="display: inline; margin-left: 5px;">
                        <img src="img/ico_plus.png" alt="add" />
                        <span>Camiseta</span>
                    </div>
                </div>
                <div id="add_short_jugador_mb" style="display: inline;">
                    <div class="add_cont" style="display: inline; margin-left: 5px;">
                        <img src="img/ico_plus.png" alt="add" />
                        <span>Short</span>
                    </div>
                </div>
                <div id="add_conjunto_jugador_mb" style="display: inline;">
                    <div class="add_cont" style="display: inline; margin-left: 5px;">
                        <img src="img/ico_plus.png" alt="add" />
                        <span>Conjunto</span>
                    </div>
                </div>
            </div>
            <hr class="divisor_mb" />

            <div class="row">
                <input type="file" accept="image/x-png,image/gif,image/jpeg" name="escudo_mb" id="escudo_mb" />
                <label for="escudo_mb">IMAGEN DE ESCUDO:</label>
            </div>
            <label for="posicion_escudo_mb">
                <span>POSICIÓN</span>
                <select name="posicion_escudo_mb" id="posicion_escudo_mb">
                    <option value="centro">Centro</option>
                    <option value="izquierda">Corazón</option>
                </select>
            </label>

            <div class="row">
                <input type="file" accept="image/x-png,image/gif,image/jpeg" name="extra_mb" id="extra_mb" />
                <label for="extra_mb">IMAGEN EXTRA:</label>
            </div>
            <label for="posicion_extra_mb">
                <span>POSICIÓN</span>
                <select name="posicion_extra_mb" id="posicion_extra_mb">
                    <option value="frente">Frente</option>
                    <option value="espalda">Espalda</option>
                    <option value="manga_izquierda">Manga izquierda</option>
                    <option value="manga_derecha">Manga derecha</option>
                </select>
            </label>

            <hr class="divisor_mb" />

            <label for="nombre_mb"><span>Nombre</span><input type="text" name="nombre_mb" id="nombre_mb"></label>
            <label for="email_mb"><span>Email</span><input type="text" name="email_mb" id="email_mb"></label>
            <label for="telefono_mb"><span>Tel&eacute;fono</span><input type="text" name="telefono_mb" id="telefono_mb"></label>
            <label for="comentarios_mb"><span>Comentarios </span><span class="opcional">(opcional)</span><textarea name="comentarios_mb" id="comentarios_mb"></textarea></label>

            <!-- <hr class="divisor_mb" />

            <label for="tipo_envio_mb">
                <span>ZONA DE ENVÍO</span>
                <select class="form-control" name="zona_envio_mb" id="zona_envio_mb">
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
            </label>

            <label for="localidad_envio_mb"><span>LOCALIDAD</span><input type="text" name="localidad_envio_mb" id="localidad_envio_mb"></label>
            <label for="codigo_postal_envio_mb"><span>CÓDIGO POSTAL</span><input type="text" name="codigo_postal_envio_mb" id="codigo_postal_envio_mb"></label>

            <label for="tipo_envio_mb">
                <span>TIPO DE ENVÍO</span>
                <select name="tipo_envio_mb" id="tipo_envio_mb">
                    <option value="correo">Correo</option>
                    <option value="moto">Moto</option>
                    <option value="retiro">Retiro a domicilio</option>
                </select>
            </label> -->

            <div style="width: 100%; text-align:center; margin-top:50px;">
                <div>
                    <input type="button" class="btn_style_red" value="COMPRAR" id="btn_metodos_pago_mb" onclick="enviar_mb(true, true);">
                    <div id="loading_btn_enviar_mb" style="visibility: hidden;"><i class="fa fa-spinner fa-spin"></i> procesando...</div>
                    <input type="submit" class="btn_style_white" name="btn_hacer_pedido_mb" id="btn_hacer_pedido_mb" value="HACER CONSULTA"  style='width:95%; margin-left: 15px;'/>
                </div>
                <BR><BR>
                <div style="display: none; width: 99%; margin:0 auto; font-size: 20px;" id="metodos_pago_mb">
                    <p id="btn_mp" onclick="$('#metodo_pago_acordar_mb').css({'display': 'none'}); $('#metodo_pago_transferencia_mb').css({'display': 'none'}); solicitarMercadoPagoMb();" 
                        style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                        <img src="/personalizador/common/img/logomercadopago.jpg" alt="MercadoPago" width="150px" height="100px"/>
                        <span style="margin-left: 5px;">Tarjetas de crédito, débito y otros medios</span>
                    </p>
                    <p onclick="$('#metodo_pago_acordar_mb').css({'display': 'none'}); $('#metodo_pago_transferencia_mb').css({'display': 'block'});"
                        style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                        <img src="/personalizador/common/img/logotransferenciabancaria.png" alt width="150px" height="100px"/>
                        <span style="margin-left: 5px;">Transferencia bancaria (10% de descuento)</span>
                        <div id="metodo_pago_transferencia_mb" style="display: none; text-align: left; margin-left: 10px; margin-top: 5px; margin-bottom: 15px;">
                            <p><?php echo $transferencia_banco->valor ?></p>
                            <p><?php echo $transferencia_tipo_cuenta->valor ?></p>
                            <p>Cuenta Nro.: <?php echo $transferencia_nro_cuenta->valor ?></p>
                            <p>CBU:<?php echo $transferencia_cbu->valor ?></p>
                            <p>Nombre:<?php echo $transferencia_nombre->valor ?></p>
                            <p>CUIT:<?php echo $transferencia_cuit->valor ?></p>
                        </div>
                    </p>
                    <p onclick="$('#metodo_pago_transferencia_mb').css({'display': 'none'}); $('#metodo_pago_acordar_mb').css({'display': 'block'});"
                        style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
                        <img src="/personalizador/common/img/logootraformadepago.png" alt width="150px" height="100px"/>
                        <span style="margin-left: 5px;">Consultar por otros descuentos y formas de pago</span>
                        <div id="metodo_pago_acordar_mb" style="display: none; text-align: left; margin-left: 10px; margin-top: 5px; margin-bottom: 15px;">
                            Nos estaremos contactando.
                        </div>
                    </p>
                    <BR><BR>
                </div>
            </div>

            <div style="text-align: center;">
                <a href="#" id="btn_volver_mb">VOLVER A MODIFICAR DISE&Ntilde;O</a>
            </div>
        </div>
        <div class="content_pedido_finalizado_mb">
            <p class="msj">Te contactaremos para brindarte informaci&oacute;n de los tiempos de entrega y modalidades de pago.</p>
            <div class="tel_box_mb">
                <span class="tel_tit_mb">Nuestro tel&eacute;fono</span>
                <div class="tel_mb">
                    <img src="img/ico_tel.png" alt="Tel" />
                    <span>011-4709-9453</span>
                </div>
            </div>
            <div class="shared_box">
                <span>Compart&iacute; el dise&ntilde;o de tu <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta'; ?></span>
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://yakka.com.ar/personalizador/<?php echo $genero; ?>/" id="share_face"><img src="img/ico_face.png" alt="Facebook" /></a></li>
                    <li>
                        <a href="whatsapp://send?text=Yakka Personalizador de <?php echo $genero == 'chombas' ? 'chomba' : 'camiseta'; ?> http://yakka.com.ar/personalizador/<?php echo $genero; ?>/" data-action="share/whatsapp/share" id="share_whatsapp"><img src="img/ico_whatsapp.png" alt="Whatsapp" /></a>
                    </li>
                </ul>
            </div>
            <div id="pedido_enviado_mb"><img src="img/pedido_enviado_mb.png" alt="Pedido Enviado" /></div>
        </div>
        <!-- Opciones diseno Jugador mobile -->
        <input type="hidden" name="option_diseno_mb" id="option_diseno_mb" value="28" />
        <input type="hidden" name="option_color_base_mb" id="option_color_base_mb" value="4" />
        <input type="hidden" name="option_color_principal_mb" id="option_color_principal_mb" value="14" />
        <input type="hidden" name="option_color_secundario_mb" id="option_color_secundario_mb" value="9" />
        <input type="hidden" name="option_formato_mb" id="option_formato_mb" value="1" />
        <input type="hidden" name="option_color_text_mb" id="option_color_text_mb" value="14" />
        <input type="hidden" name="option_camiseta_on_mb" id="option_camiseta_on_mb" value="1" />
        <!-- Opciones diseno Arquero mobile -->
        <input type="hidden" name="option_diseno_arq_mb" id="option_diseno_arq_mb" value="28" />
        <input type="hidden" name="option_color_base_arq_mb" id="option_color_base_arq_mb" value="4" />
        <input type="hidden" name="option_color_principal_arq_mb" id="option_color_principal_arq_mb" value="14" />
        <input type="hidden" name="option_color_secundario_arq_mb" id="option_color_secundario_arq_mb" value="9" />
        <input type="hidden" name="option_formato_arq_mb" id="option_formato_arq_mb" value="1" />
        <input type="hidden" name="option_color_text_arq_mb" id="option_color_text_arq_mb" value="14" />
        <input type="hidden" name="option_arq_on_mb" id="option_arq_on_mb" value="0" />
        <!-- Opciones Short mobile -->
        <input type="hidden" name="option_diseno_short_mb" id="option_diseno_short_mb" value="1" />
        <input type="hidden" name="option_color_base_short_mb" id="option_color_base_short_mb" value="4" />
        <input type="hidden" name="option_color_principal_short_mb" id="option_color_principal_short_mb" value="14" />
        <input type="hidden" name="option_color_secundario_short_mb" id="option_color_secundario_short_mb" value="9" />
        <input type="hidden" name="option_short_on_mb" id="option_short_on_mb" value="0" />
        <!-- Opciones Short Arquero mobile -->
        <input type="hidden" name="option_diseno_short_arquero_mb" id="option_diseno_short_arquero_mb" value="1" />
        <input type="hidden" name="option_color_base_short_arquero_mb" id="option_color_base_short_arquero_mb" value="4" />
        <input type="hidden" name="option_color_principal_short_arquero_mb" id="option_color_principal_short_arquero_mb" value="14" />
        <input type="hidden" name="option_color_secundario_short_arquero_mb" id="option_color_secundario_short_arquero_mb" value="9" />
        <input type="hidden" name="option_short_arquero_on_mb" id="option_short_arquero_on_mb" value="0" />
        <!-- Opciones Medias mobile -->
        <input type="hidden" name="option_color_medias_mb" id="option_color_medias_mb" value="1" />
        <input type="hidden" name="option_medias_on_mb" id="option_medias_on_mb" value="0" />

        <input type="hidden" name="hPUidMb" id="hPUidMb" value="<?=$precios->uuid?>" />
        <input type="hidden" name="hPConjMb" id="hPConjMb" value="" />
        <input type="hidden" name="hPArqueroMb" id="hPArqueroMb" value="" />
        <input type="hidden" name="hTotalMb" id="hTotalMb" value="" />
        <input type="hidden" name="hPrecioTypeMb" id="hPrecioTypeMb" value="" />
    </form>

    <style>
    .floating-icon-nav-mb {
        position: fixed;
        top: 75%;
        z-index: 99999999;
        width: 15%;
        margin-top: 0px;
        transition: all 0.3s linear;
        /* box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4) */
    }

    .floating-icon-ul-mb {
        margin-top: 0;
        margin-bottom: 0rem
    }

    .floating-icon-li-mb {
        width: 100%;
        height: 45px;
        position: relative;
        border: 0px !important;
        padding: 0px !important;
    }

    .floating-icon-a-mb {
        color: #fff !important;
        display: block;
        height: 100%;
        width: 100%;
        line-height: 45px;
        padding-left: 25%;
        border-bottom: 1px solid rgba(0, 0, 0, .4);
        transition: all .3s linear;
        text-decoration: none !important
    }

    nav li:nth-child(1) a {
        background: #4267B2
    }

    .floating-icon-i-mb {
        position: absolute;
        top: 14px;
        left: 24px;
        font-size: 15px
    }

    .floating-icon-span-mb {
        display: none;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase
    }

    .floating-icon-a-mb:hover {
        z-index: 1;
        width: 200px;
        border-bottom: 1px solid rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3)
    }

    .floating-icon-li-mb:hover .floating-icon-span-mb {
        padding-left: 30%;
        display: block;
        font-size: 9px
    }
    </style>
    <nav class="floating-icon-nav-mb">
        <ul class="floating-icon-ul-mb">
            <li class="floating-icon-li-mb"><a class="floating-icon-a-mb" href="javascript:preguntasFrecuentes();"><i class="fas fa-question floating-icon-i-mb"></i><span class="floating-icon-span-mb">Preguntas&nbsp;frecuentes</span></a></li>
            <li class="floating-icon-li-mb"><a href="javascript:guiaDeCompras();" class="floating-icon-a-mb"><i class="fas fa-shopping-cart floating-icon-i-mb"></i><span class="floating-icon-span-mb">Guía&nbsp;de&nbsp;compras</span></a></li>
        </ul>
    </nav>

</div>