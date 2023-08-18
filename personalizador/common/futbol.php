<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;800&family=Roboto:wght@100;400;900&display=swap'); 
    /* 
    ::: GUIA CSS :::
    
    1) UTILITIES
    TABS 

    
    
    
    
    
    */


    /* UTILITIES */
    .ocultar{
        display: none !important;
    }
    .viewMobile{
        display: none;
    }
    button{
        border: none;
        background: none;
        cursor: pointer;
    }
    
    .btn-active{
      color: #ff5b1e;
    }

    .header-top-tit{
        background: #ff5b1e;
        color: #fff;
        font-family: 'Montserrat';
        font-size: 26px;
        font-weight: 400;
        padding: 12px;
        text-align: center;
    }

    .footer-top-tit{
        background: #ff5b1e;
        color: #fff;
        font-family: 'Montserrat';
        font-size: 13px;
        font-weight: bold;
        padding: 8px 30px 8px 8px;
        text-align: right;
    }

    .footer-top-tit:hover{
      text-decoration: underline;
    }
    
    .container-disenador{
        display: flex;
    }
    .container-btn-products{
        display: grid;
        background:#1d262c;
        width: 9%;
    }
    .container-btn-products button{
        margin: 0px auto;
    }
    .container-main{
        display: flex;
        height: 100%;
    }

    .container-products{
        display:flex; 
        width: 70%; 
        justify-content: center;
        position: relative;
    }
    .container-btn-camisetas{
        display:none;
        width: 100%;
    }
    .container-grilla{
        margin: 20px;
    }
    .container-grilla div{
        margin: 0px;
    }

    .container-tabs{
        width: 30%;
        background: #fff;
        position: relative;
    }

    
    

    


    



    .btn-pruducts{
        padding: 10px;
        text-align: center;
        width: 120px;
        background: none;
        border-bottom: 1px solid #ffffff50 !important;
        margin-bottom: 8px;
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 10px;
        color: #ffffff;
        opacity: 0.9;
    }
    .btn-pruducts p {
        font-weight: 400 !important;
        font-size: 10px !important;
    }

    .btn-pruducts:hover{
        opacity: 1;
    }

    .btn-pruducts:last-child{
        border-bottom: none !important;
    }


    .header-tit-products{
        padding: 10px;
        text-align: center;
        background: #1d262c;
        color: #FFF;
        font-weight: bold;
        font-family: 'Roboto';
        width:initial;
        min-height: 20px;
    }
    .container-img-product{
        width: 50%;
    }
    .container-img-product:first-child{
        border-right: 1px solid #f0f0f0;
    }



    /* TABS */
    .btn-tab{
        color:#fff;
        padding: 10px;
        text-align: center;
        background: none;
        border-right: 1px solid #b5b7b8;
    }
    .btn-tab:last-child{
        border-right: none;
    }
    .btn-tab:hover{
        color:#ff5b1e;
    }
    .btn-tab-active{
        color:#ff5b1e;
    }

    .grilla-modelo{
        display: flex;
        justify-content: center;
    }
    .grilla-modelo button{
        margin: 20px 0px 20px 11px;
        padding: auto 15px;
    }
    .paginado{
        width: 100%;
        display: flex;
        justify-content: center;
        margin: 15px auto;
    }
    .btn-paginado{
        background: #b5b7b8;
        color: #666;
        border-radius: 3px;
        padding: 3px 5px;
        font-weight: 800;
        margin-right: 8px;
    }
    .btn-paginado:hover{
        background: #d7411c;
        color: #ffffff;
    }
    .btn-paginado-active{
        background: #d7411c;
        color: #ffffff;
        border-radius: 3px;
        padding: 3px 5px;
        font-weight: 800;
        margin-right: 8px;
    }
    .footer-products{
        background: #d7411c;
        padding: 10px 0px;
        position: absolute;
        bottom: 0;
        width: 100%;
        color: #ffffff;
    }


    .desktop{
      display: flex;
    }

    @media (max-width: 1000px) {
        .img-responsive{
            width: 100%;
            height: auto;
        }
    }


    /* MOBILE VIEW */
    @media (max-width: 767px) {
        .desktop{
          display: none;
        }

        .container-disenador{
            display: block;
        }
        .container-main{
            display: block;
        }
        .container-btn-products{
            display: flex;
            width: 100% ;
        }
        .container-products{
            display:block; 
            width: 100%;
        }
        .container-img-product{
            width: 100%;
        }
        .container-btn-camisetas{
            display:flex;
            justify-content: center;
            margin-bottom: 5px;
            margin-top: 30px;
        }
        .link-remeras{
            color: #1d262c !important;
            text-decoration: none;
            font-family: 'Montserrat';
        }
        /* .ocultarMobile{
            display: none;
        } */
        .viewMobile{
            display:block
        }

        .btn-pruducts{
            padding: 10px;
            text-align: center;
            width: 72px;
            border-right: 1px solid #ffffff50 !important;
        }
        .btn-pruducts:last-child{
          border-bottom: 1px solid #ffffff50 !important;
        }
        .btn-pruducts p{
            display: none;
        }

        .container-tabs{
            width: 100%;
        }

        .container-img-product:first-child{
          border-right: none;
        }

        


        /* ::::: CARROUSEL MODELOS ::::: */
        #carrusel {
            display: block;
            float:left;
            width:100%;
            overflow:hidden;
            height:95px;
            position:relative;
            margin-top:5px;
            margin-bottom:5px;
        }

        #carrusel .left-arrow {
            position:absolute;
            left:3px;
            z-index:1;
            top:50%;
            margin-top:-9px;
        }

        #carrusel .right-arrow {
            position:absolute;
            right:3px;
            z-index:1;
            top:50%;
            margin-top:-9px;
        }

        .carrusel {
            width:4000px;
            left:0px;
            position:absolute;
            z-index:0;
        }

        .carrusel>div {
            float: left;
            height: 95px;
            margin-right: -5px;
            width: 122px;
            text-align:center;
        }

        .carrusel img {
            cursor:pointer;
        }

        .image-responsive {
          width: 100%;
          height: auto;
        }

        .header-top-tit{
            font-size: 14px;
            font-weight: 800;
        }

        .btn-mobile {
          padding: 10px !important;
          font-weight: 800 !important;
        }
    }/* end mobile VIEW */

    .tooltip {
      position: relative;
      display: inline-block;
      border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;

      /* Position the tooltip */
      position: absolute;
      z-index: 1;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
</style>

<link rel="stylesheet" href="./public/css/futbol.css" />

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
<!-- Opciones Medias Arquero -->
<input type="hidden" name="option_color_medias_arquero" id="option_color_medias_arquero" value="1" />
<input type="hidden" name="option_medias_arquero_on" id="option_medias_arquero_on" value="0" />

<input type="hidden" id="d1"                     value="<?=$precios->descuento?>" />
<input type="hidden" id="d1c"                    value="<?=$precios->desc_cantidad?>" />
<input type="hidden" id="d2"                     value="<?=$precios->descuento2?>" />
<input type="hidden" id="d2c"                    value="<?=$precios->desc_cantidad2?>" />
<input type="hidden" id="hPrecio"                value="" />

<input type="hidden" id="precio_conjunto"        value="<?=$precios->cam_short?>" />
<input type="hidden" id="precio_camiseta"        value="<?=$precios->cam?>" />
<input type="hidden" id="precio_arquero"         value="<?=$precios->arquero?>" />
<input type="hidden" id="precio_short"       value="<?=$precios->cam_short - $precios->cam?>" />
<input type="hidden" id="precio_media"       value="<?=$precios->cam_media - $precios->cam?>" />

    <div class="header-top-tit">PERSONALIZADOR</div>

    <div class="container-disenador" style="width:100%;">
      <div id="botonera" class="container-btn-products">
          <button id="btn_modelo_jugador" name="opcion_item" class="btn-pruducts" onclick="mostrarProducto(1)"><img src="./public/img/camiseta-jugador-icon.png" alt=""><p>JUGADOR</p></button>
          <button id="btn_modelo_arquero" name="opcion_item" class="btn-pruducts" onclick="mostrarProducto(2)"><img src="./public/img/camiseta-arquero-icon.png" alt=""><p>ARQUERO</p></button>
          <button id="btn_short_jugador" name="opcion_item" class="btn-pruducts" onclick="mostrarProducto(3)"><img src="./public/img/short-jugador-icon.png" alt=""><p>JUGADOR</p></button>
          <button id="btn_short_arquero" name="opcion_item" class="btn-pruducts" onclick="mostrarProducto(4)"><img src="./public/img/short-arquero-icon.png" alt=""><p>ARQUERO</p></button>
          <button id="btn_medias" name="opcion_item" class="btn-pruducts" onclick="mostrarProducto(5)"><img src="./public/img/medias-icon.png" alt=""><p>MEDIAS</p></button>
      </div>

      <div id="preview" style="width: 100%; background: #f6f6f6;">
                <div class="preview_content container-main" id="producto1" style="position: relative;">
                  <div>
                    <div style="width: 70%; justify-content: center; align-items: center; padding: 20px;opacity: 1 !important; position: absolute; top: 38px; z-index:999999;" class="desktop">
                      <div style="text-align: center;">
                        <label class="switch">
                          <input class="form-check-input camiseta_jugador_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto1')">
                          <span class="slider round"></span>
                        </label><br>
                        <span class="switch_text">INCLUIR CAMISETA</span>
                      </div>
                    </div>
                  </div>
                  <div id="camiseta" class="container-products">
                      <div id="vwProduct11" class="container-img-product">
                          <div class="header-tit-products">FRENTE</div>
                          <div class="preview_front">
                              <?php if($genero == 'hombre'){ ?>
                                <img src="./<?php echo $genero ?>/img/logo_yakka.png" class="img_logo" />
                              <?php } ?>
                              <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria image-responsive" alt=""/>
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal image-responsive" />
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_base/frente/4.png" class="img_base image-responsive" />
                          </div>
                          <div class="container-btn-camisetas"><a href="#" onclick="viewProducts(2)" class="link-remeras">ver modelo espalda</a></div>

                          <div style="position: absolute; top: 30px; right: 150px; z-index: 99999999;" class="container-btn-camisetas">
                            <div style="text-align: center;">
                              <label class="switch">
                                <input class="form-check-input camiseta_jugador_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto1')">
                                <span class="slider round"></span>
                              </label><br>
                              <span class="switch_text">INCLUIR CAMISETA</span>
                            </div>
                          </div>

                      </div>
                      <div id="vwProduct21" class="container-img-product">
                          <div class="header-tit-products">ESPALDA</div>
                          <div class="preview_back">
                              <?php if($genero == 'hombre'){ ?>
                                <img src="./<?php echo $genero ?>/img/logo_yakka_espalda.png" class="img_logo" />
                              <?php } ?>
                              <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria" alt=""/>
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_28/color_principal/espalda/14.png" class="img_principal" />
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_base/espalda/4.png" class="img_base" />
                              <div class="formato_nro_back">
                                <img src="./<?php echo $genero ?>/img/numeros/1/14.png" class="img_numero">
                              </div>
                        </div>
                          <div class="container-btn-camisetas"><a href="#" onclick="viewProducts(1)" class="link-remeras">ver modelo frente</a></div>
                      </div>
                  </div>
                  
                  <div id="tabs" class="container-tabs">

                      <div id="tabsBotonera" style="text-align: center;background: #1d262c;height: 38px;padding: 3px;display: flex;justify-content: center;align-items: center;">
                          <button id="btnTab11" onclick="mostrarTabsDisenador(1)" class="btn-tab btn-tab-active">Modelos</button>
                          <button id="btnTab21" onclick="mostrarTabsDisenador(2)" class="btn-tab btn-tab-active">Colores</button>
                          <button id="btnTab31" onclick="mostrarTabsDisenador(3)" class="btn-tab btn-tab-active">Números</button>
                      </div>
                      <div style="
                          display:  flex;
                          flex-direction: column;
                          justify-content: space-between;
                          height: 94%;
                      ">
                        <div id="contenidoTabs">
                            <div id="tab11"><!-- modelos -->
                                <div id="desk" class="container-grilla">
                                    <div id="grilla11">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_1 selected" id="diseno_28"><img src="./<?php echo $genero ?>/img/modelos/modelo_28/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_29"><img src="./<?php echo $genero ?>/img/modelos/modelo_29/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_30"><img src="./<?php echo $genero ?>/img/modelos/modelo_30/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_31"><img src="./<?php echo $genero ?>/img/modelos/modelo_31/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_32"><img src="./<?php echo $genero ?>/img/modelos/modelo_32/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_33"><img src="./<?php echo $genero ?>/img/modelos/modelo_33/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_34"><img src="./<?php echo $genero ?>/img/modelos/modelo_34/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_35"><img src="./<?php echo $genero ?>/img/modelos/modelo_35/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_1" id="diseno_36"><img src="./<?php echo $genero ?>/img/modelos/modelo_36/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla21">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_1"><img src="./<?php echo $genero ?>/img/modelos/modelo_1/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_2"><img src="./<?php echo $genero ?>/img/modelos/modelo_2/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_3"><img src="./<?php echo $genero ?>/img/modelos/modelo_3/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_4"><img src="./<?php echo $genero ?>/img/modelos/modelo_4/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_5"><img src="./<?php echo $genero ?>/img/modelos/modelo_5/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_6"><img src="./<?php echo $genero ?>/img/modelos/modelo_6/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_7"><img src="./<?php echo $genero ?>/img/modelos/modelo_7/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_8"><img src="./<?php echo $genero ?>/img/modelos/modelo_8/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_2" id="diseno_9"><img src="./<?php echo $genero ?>/img/modelos/modelo_9/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla31">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_10"><img src="./<?php echo $genero ?>/img/modelos/modelo_10/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_11"><img src="./<?php echo $genero ?>/img/modelos/modelo_11/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_12"><img src="./<?php echo $genero ?>/img/modelos/modelo_12/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_13"><img src="./<?php echo $genero ?>/img/modelos/modelo_13/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_14"><img src="./<?php echo $genero ?>/img/modelos/modelo_14/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_15"><img src="./<?php echo $genero ?>/img/modelos/modelo_15/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_16"><img src="./<?php echo $genero ?>/img/modelos/modelo_16/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_17"><img src="./<?php echo $genero ?>/img/modelos/modelo_17/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_3" id="diseno_18"><img src="./<?php echo $genero ?>/img/modelos/modelo_18/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla41">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_19"><img src="./<?php echo $genero ?>/img/modelos/modelo_19/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_20"><img src="./<?php echo $genero ?>/img/modelos/modelo_20/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_21"><img src="./<?php echo $genero ?>/img/modelos/modelo_21/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_22"><img src="./<?php echo $genero ?>/img/modelos/modelo_22/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_23"><img src="./<?php echo $genero ?>/img/modelos/modelo_23/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_24"><img src="./<?php echo $genero ?>/img/modelos/modelo_24/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_25"><img src="./<?php echo $genero ?>/img/modelos/modelo_25/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_26"><img src="./<?php echo $genero ?>/img/modelos/modelo_26/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno sel_diseno_page_4" id="diseno_27"><img src="./<?php echo $genero ?>/img/modelos/modelo_27/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="paginado" class="paginado">
                                        <button onclick="mostrarModelosDesk(1)" id="btnPaginado11">1</button>
                                        <button onclick="mostrarModelosDesk(2)" id="btnPaginado12">2</button>
                                        <button onclick="mostrarModelosDesk(3)" id="btnPaginado13">3</button>
                                        <button onclick="mostrarModelosDesk(4)" id="btnPaginado14">4</button>
                                    </div>
                                </div>
                                <div id="mobile" style="display: none;">
                                    <!-- modelos mobile-->
                                    <div id="carrusel" class="viewMobile">
                                        <a href="#" class="left-arrow"><img src="./public/img/left-arrow.png" alt=""></a>
                                        <a href="#" class="right-arrow"><img src="./public/img/right-arrow.png" alt=""></a>
                                        <div class="carrusel">
                                            <div class="product" id="product_1_0">
                                              <button class="sel_diseno sel_diseno_page_1 selected" id="diseno_28"><img src="./<?php echo $genero ?>/img/modelos/modelo_28/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_1">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_29"><img src="./<?php echo $genero ?>/img/modelos/modelo_29/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_2">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_30"><img src="./<?php echo $genero ?>/img/modelos/modelo_30/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_3">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_31"><img src="./<?php echo $genero ?>/img/modelos/modelo_31/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_4">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_32"><img src="./<?php echo $genero ?>/img/modelos/modelo_32/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_5">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_33"><img src="./<?php echo $genero ?>/img/modelos/modelo_33/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_6">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_34"><img src="./<?php echo $genero ?>/img/modelos/modelo_34/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_7">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_35"><img src="./<?php echo $genero ?>/img/modelos/modelo_35/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_8">
                                              <button class="sel_diseno sel_diseno_page_1" id="diseno_36"><img src="./<?php echo $genero ?>/img/modelos/modelo_36/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_9">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_1"><img src="./<?php echo $genero ?>/img/modelos/modelo_1/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_10">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_2"><img src="./<?php echo $genero ?>/img/modelos/modelo_2/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_11">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_3"><img src="./<?php echo $genero ?>/img/modelos/modelo_3/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_12">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_4"><img src="./<?php echo $genero ?>/img/modelos/modelo_4/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_13">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_5"><img src="./<?php echo $genero ?>/img/modelos/modelo_5/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_14">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_6"><img src="./<?php echo $genero ?>/img/modelos/modelo_6/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_15">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_7"><img src="./<?php echo $genero ?>/img/modelos/modelo_7/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_16">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_8"><img src="./<?php echo $genero ?>/img/modelos/modelo_8/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_17">
                                              <button class="sel_diseno sel_diseno_page_2" id="diseno_9"><img src="./<?php echo $genero ?>/img/modelos/modelo_9/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_18">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_10"><img src="./<?php echo $genero ?>/img/modelos/modelo_10/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_19">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_11"><img src="./<?php echo $genero ?>/img/modelos/modelo_11/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_20">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_12"><img src="./<?php echo $genero ?>/img/modelos/modelo_12/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_21">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_13"><img src="./<?php echo $genero ?>/img/modelos/modelo_13/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_22">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_14"><img src="./<?php echo $genero ?>/img/modelos/modelo_14/option.png" class="img-responsive"></button>                                          
                                            </div>
                                            <div class="product" id="product_1_23">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_15"><img src="./<?php echo $genero ?>/img/modelos/modelo_15/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_24">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_16"><img src="./<?php echo $genero ?>/img/modelos/modelo_16/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_25">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_17"><img src="./<?php echo $genero ?>/img/modelos/modelo_17/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_26">
                                              <button class="sel_diseno sel_diseno_page_3" id="diseno_18"><img src="./<?php echo $genero ?>/img/modelos/modelo_18/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_27">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_19"><img src="./<?php echo $genero ?>/img/modelos/modelo_19/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_28">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_20"><img src="./<?php echo $genero ?>/img/modelos/modelo_20/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_29">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_21"><img src="./<?php echo $genero ?>/img/modelos/modelo_21/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_30">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_22"><img src="./<?php echo $genero ?>/img/modelos/modelo_22/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_31">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_23"><img src="./<?php echo $genero ?>/img/modelos/modelo_23/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_32">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_24"><img src="./<?php echo $genero ?>/img/modelos/modelo_24/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_33">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_25"><img src="./<?php echo $genero ?>/img/modelos/modelo_25/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_34">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_26"><img src="./<?php echo $genero ?>/img/modelos/modelo_26/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_1_35">
                                              <button class="sel_diseno sel_diseno_page_4" id="diseno_27"><img src="./<?php echo $genero ?>/img/modelos/modelo_27/option.png" class="img-responsive"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modelos -->

                            <div id="tab21">
                              <div id="options_colores">
                                <div id="color_base_box">
                                  <p>Color Base</p>
                                  <ul class="colores_list">
                                    <li id="color_base_1" class="sel_color_base color_1">&nbsp;</li>
                                    <li id="color_base_2" class="sel_color_base color_2">&nbsp;</li>
                                    <li id="color_base_3" class="sel_color_base color_3">&nbsp;</li>
                                    <li id="color_base_4" class="sel_color_base color_4">&nbsp;</li>
                                    <li id="color_base_5" class="sel_color_base color_5">&nbsp;</li>
                                    <li id="color_base_6" class="sel_color_base color_6">&nbsp;</li>
                                    <li id="color_base_7" class="sel_color_base color_7">&nbsp;</li>
                                    <li id="color_base_8" class="sel_color_base color_8">&nbsp;</li>
                                    <li id="color_base_9" class="sel_color_base color_9">&nbsp;</li>
                                    <li id="color_base_10" class="sel_color_base color_10">&nbsp;</li>
                                    <li id="color_base_11" class="sel_color_base color_11">&nbsp;</li>
                                    <li id="color_base_12" class="sel_color_base color_12">&nbsp;</li>
                                    <li id="color_base_13" class="sel_color_base color_13">&nbsp;</li>
                                    <li id="color_base_14" class="sel_color_base color_14">&nbsp;</li>
                                    <li id="color_base_15" class="sel_color_base color_15">&nbsp;</li>
                                    <li id="color_base_16" class="sel_color_base color_16">&nbsp;</li>
                                    <li id="color_base_17" class="sel_color_base color_17">&nbsp;</li>
                                    <li id="color_base_18" class="sel_color_base color_18">&nbsp;</li>
                                    <li id="color_base_19" class="sel_color_base color_19">&nbsp;</li>
                                    <li id="color_base_20" class="sel_color_base color_20">&nbsp;</li>
                                  </ul>
                                </div>

                                <div id="color_principal_box">
                                  <p>Color Principal</p>
                                  <ul class="colores_list">
                                    <li id="color_principal_1" class="sel_color_principal color_1">&nbsp;</li>
                                    <li id="color_principal_2" class="sel_color_principal color_2">&nbsp;</li>
                                    <li id="color_principal_3" class="sel_color_principal color_3">&nbsp;</li>
                                    <li id="color_principal_4" class="sel_color_principal color_4">&nbsp;</li>
                                    <li id="color_principal_5" class="sel_color_principal color_5">&nbsp;</li>
                                    <li id="color_principal_6" class="sel_color_principal color_6">&nbsp;</li>
                                    <li id="color_principal_7" class="sel_color_principal color_7">&nbsp;</li>
                                    <li id="color_principal_8" class="sel_color_principal color_8">&nbsp;</li>
                                    <li id="color_principal_9" class="sel_color_principal color_9">&nbsp;</li>
                                    <li id="color_principal_10" class="sel_color_principal color_10">&nbsp;</li>
                                    <li id="color_principal_11" class="sel_color_principal color_11">&nbsp;</li>
                                    <li id="color_principal_12" class="sel_color_principal color_12">&nbsp;</li>
                                    <li id="color_principal_13" class="sel_color_principal color_13">&nbsp;</li>
                                    <li id="color_principal_14" class="sel_color_principal color_14">&nbsp;</li>
                                    <li id="color_principal_15" class="sel_color_principal color_15">&nbsp;</li>
                                    <li id="color_principal_16" class="sel_color_principal color_16">&nbsp;</li>
                                    <li id="color_principal_17" class="sel_color_principal color_17">&nbsp;</li>
                                    <li id="color_principal_18" class="sel_color_principal color_18">&nbsp;</li>
                                    <li id="color_principal_19" class="sel_color_principal color_19">&nbsp;</li>
                                    <li id="color_principal_20" class="sel_color_principal color_20">&nbsp;</li>
                                  </ul>
                                </div>
                                <div id="color_secundario_box">
                                  <p>Color Secundario</p>
                                  <ul class="colores_list">
                                    <li id="color_secundario_1" class="sel_color_secundario color_1">&nbsp;</li>
                                    <li id="color_secundario_2" class="sel_color_secundario color_2">&nbsp;</li>
                                    <li id="color_secundario_3" class="sel_color_secundario color_3">&nbsp;</li>
                                    <li id="color_secundario_4" class="sel_color_secundario color_4">&nbsp;</li>
                                    <li id="color_secundario_5" class="sel_color_secundario color_5">&nbsp;</li>
                                    <li id="color_secundario_6" class="sel_color_secundario color_6">&nbsp;</li>
                                    <li id="color_secundario_7" class="sel_color_secundario color_7">&nbsp;</li>
                                    <li id="color_secundario_8" class="sel_color_secundario color_8">&nbsp;</li>
                                    <li id="color_secundario_9" class="sel_color_secundario color_9">&nbsp;</li>
                                    <li id="color_secundario_10" class="sel_color_secundario color_10">&nbsp;</li>
                                    <li id="color_secundario_11" class="sel_color_secundario color_11">&nbsp;</li>
                                    <li id="color_secundario_12" class="sel_color_secundario color_12">&nbsp;</li>
                                    <li id="color_secundario_13" class="sel_color_secundario color_13">&nbsp;</li>
                                    <li id="color_secundario_14" class="sel_color_secundario color_14">&nbsp;</li>
                                    <li id="color_secundario_15" class="sel_color_secundario color_15">&nbsp;</li>
                                    <li id="color_secundario_16" class="sel_color_secundario color_16">&nbsp;</li>
                                    <li id="color_secundario_17" class="sel_color_secundario color_17">&nbsp;</li>
                                    <li id="color_secundario_18" class="sel_color_secundario color_18">&nbsp;</li>
                                    <li id="color_secundario_19" class="sel_color_secundario color_19">&nbsp;</li>
                                    <li id="color_secundario_20" class="sel_color_secundario color_20">&nbsp;</li>
                                  </ul>
                                </div>
                              </div>
                            </div><!--colores-->

                            <div id="tab31">
                                <div id="options_texto">
                                  <p>Formato</p>
                                  <ul class="list_box formato_jugador">
                                    <li id="formato_1" class="sel_formato selected"><img src="./<?php echo $genero ?>/img/numeros/1/14.png" /></li>
                                    <li id="formato_2" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/2/14.png" /></li>
                                    <li id="formato_3" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/3/14.png" /></li>
                                    <li id="formato_4" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/4/14.png" /></li>
                                    <li id="formato_5" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/5/14.png" /></li>
                                    <li id="formato_6" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/6/14.png" /></li>
                                    <li id="formato_7" class="sel_formato"><img src="./<?php echo $genero ?>/img/numeros/7/14.png" /></li>
                                  </ul>
                                  <p>Color</p>
                                  <ul class="colores_list">
                                    <li id="color_text_1" class="sel_color_text color_1">&nbsp;</li>
                                    <li id="color_text_2" class="sel_color_text color_2">&nbsp;</li>
                                    <li id="color_text_3" class="sel_color_text color_3">&nbsp;</li>
                                    <li id="color_text_4" class="sel_color_text color_4">&nbsp;</li>
                                    <li id="color_text_5" class="sel_color_text color_5">&nbsp;</li>
                                    <li id="color_text_6" class="sel_color_text color_6">&nbsp;</li>
                                    <li id="color_text_7" class="sel_color_text color_7">&nbsp;</li>
                                    <li id="color_text_8" class="sel_color_text color_8">&nbsp;</li>
                                    <li id="color_text_9" class="sel_color_text color_9">&nbsp;</li>
                                    <li id="color_text_10" class="sel_color_text color_10">&nbsp;</li>
                                    <li id="color_text_11" class="sel_color_text color_11">&nbsp;</li>
                                    <li id="color_text_12" class="sel_color_text color_12">&nbsp;</li>
                                    <li id="color_text_13" class="sel_color_text color_13">&nbsp;</li>
                                    <li id="color_text_14" class="sel_color_text color_14">&nbsp;</li>
                                    <li id="color_text_15" class="sel_color_text color_15">&nbsp;</li>
                                    <li id="color_text_16" class="sel_color_text color_16">&nbsp;</li>
                                    <li id="color_text_17" class="sel_color_text color_17">&nbsp;</li>
                                    <li id="color_text_18" class="sel_color_text color_18">&nbsp;</li>
                                    <li id="color_text_19" class="sel_color_text color_19">&nbsp;</li>
                                    <li id="color_text_20" class="sel_color_text color_20">&nbsp;</li>
                                  </ul>
                                </div>
                            </div><!--numeros-->
                        </div>
                      </div>

                    <!-- <div style="width: -moz-available; width: fill-available; width: -webkit-fill-available; background: #1d262c; color:#fff; padding: 5px; text-align: right; position: absolute; bottom: 0;">SIGUIENTE PASO ></div> -->
                  </div><!-- end tabs -->
                </div>

                <div class="preview_content_arquero container-main" id="producto2" style="position: relative;">
                  <div>
                    <div style="width: 70%; justify-content: center; align-items: center; padding: 20px; opacity: 1 !important; position: absolute; top: 38px; z-index:999999;" class="desktop">
                      <div style="text-align: center;">
                        <label class="switch">
                          <input class="form-check-input camiseta_arquero_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto2')">
                          <span class="slider round"></span>
                        </label><br>
                        <span class="switch_text">INCLUIR CAMISETA</span>
                      </div>
                    </div>
                  </div>
                  <div id="camiseta_arquero" class="container-products">
                      <div id="vwProduct12" class="container-img-product">
                          <div class="header-tit-products">FRENTE</div>
                          <div class="preview_front_arquero">
                              <?php if($genero == 'hombre'){ ?>
                                <img src="./<?php echo $genero ?>/img/logo_yakka.png" class="img_logo" />
                              <?php } ?>
                              <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria" alt=""/>
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_28/color_principal/frente/14.png" class="img_principal" />
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_base/frente/4.png" class="img_base" />
                          </div>
                          <div class="container-btn-camisetas"><a href="#" onclick="viewProducts(2)" class="link-remeras">ver modelo espalda</a></div>

                          <div style="position: absolute; top: 30px; right: 150px; z-index: 99999999;" class="container-btn-camisetas">
                            <div style="text-align: center;">
                              <label class="switch">
                                <input class="form-check-input camiseta_arquero_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto2')">
                                <span class="slider round"></span>
                              </label><br>
                              <span class="switch_text">INCLUIR CAMISETA</span>
                            </div>
                          </div>

                      </div>
                      <div id="vwProduct22" class="container-img-product">
                          <div class="header-tit-products">ESPALDA</div>
                          <div class="preview_back_arquero">
                              <?php if($genero == 'hombre'){ ?>
                                <img src="./<?php echo $genero ?>/img/logo_yakka_espalda.png" class="img_logo" />
                              <?php } ?>
                              <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria" alt=""/>
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_28/color_principal/espalda/14.png" class="img_principal" />
                              <img src="./<?php echo $genero ?>/img/modelos/modelo_base/espalda/4.png" class="img_base" />
                              <div class="formato_nro_back_arquero">
                                <img src="./<?php echo $genero ?>/img/numeros/1/14.png" class="img_numero">
                              </div>
                        </div>
                          <div class="container-btn-camisetas"><a href="#" onclick="viewProducts(1)" class="link-remeras">ver modelo frente</a></div>
                      </div>
                  </div>
                  
                  <div id="tabs" class="container-tabs">

                      <div id="tabsBotonera" style="text-align: center;background: #1d262c;height: 38px;padding: 3px;display: flex;justify-content: center;align-items: center;">
                          <button id="btnTab12" onclick="mostrarTabsDisenador(1)" class="btn-tab btn-tab-active">Modelos</button>
                          <button id="btnTab22" onclick="mostrarTabsDisenador(2)" class="btn-tab btn-tab-active">Colores</button>
                          <button id="btnTab32" onclick="mostrarTabsDisenador(3)" class="btn-tab btn-tab-active">Números</button>
                      </div>

                      <div style="
                          display:  flex;
                          flex-direction: column;
                          justify-content: space-between;
                          height: 94%;
                      ">
                        <div id="contenidoTabs" class="tabsArquero">
                            <div id="tab12"><!-- modelos -->
                                <div id="desk" class="container-grilla">
                                    <div id="grilla12">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1 selected" id="diseno_arquero_28"><img src="./<?php echo $genero ?>/img/modelos/modelo_28/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_29"><img src="./<?php echo $genero ?>/img/modelos/modelo_29/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_30"><img src="./<?php echo $genero ?>/img/modelos/modelo_30/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_31"><img src="./<?php echo $genero ?>/img/modelos/modelo_31/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_32"><img src="./<?php echo $genero ?>/img/modelos/modelo_32/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_33"><img src="./<?php echo $genero ?>/img/modelos/modelo_33/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_34"><img src="./<?php echo $genero ?>/img/modelos/modelo_34/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_35"><img src="./<?php echo $genero ?>/img/modelos/modelo_35/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_36"><img src="./<?php echo $genero ?>/img/modelos/modelo_36/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla22">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_1"><img src="./<?php echo $genero ?>/img/modelos/modelo_1/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_2"><img src="./<?php echo $genero ?>/img/modelos/modelo_2/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_3"><img src="./<?php echo $genero ?>/img/modelos/modelo_3/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_4"><img src="./<?php echo $genero ?>/img/modelos/modelo_4/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_5"><img src="./<?php echo $genero ?>/img/modelos/modelo_5/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_6"><img src="./<?php echo $genero ?>/img/modelos/modelo_6/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_7"><img src="./<?php echo $genero ?>/img/modelos/modelo_7/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_8"><img src="./<?php echo $genero ?>/img/modelos/modelo_8/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_9"><img src="./<?php echo $genero ?>/img/modelos/modelo_9/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla32">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_10"><img src="./<?php echo $genero ?>/img/modelos/modelo_10/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_11"><img src="./<?php echo $genero ?>/img/modelos/modelo_11/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_12"><img src="./<?php echo $genero ?>/img/modelos/modelo_12/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_13"><img src="./<?php echo $genero ?>/img/modelos/modelo_13/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_14"><img src="./<?php echo $genero ?>/img/modelos/modelo_14/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_15"><img src="./<?php echo $genero ?>/img/modelos/modelo_15/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_16"><img src="./<?php echo $genero ?>/img/modelos/modelo_16/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_17"><img src="./<?php echo $genero ?>/img/modelos/modelo_17/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_18"><img src="./<?php echo $genero ?>/img/modelos/modelo_18/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="grilla42">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_19"><img src="./<?php echo $genero ?>/img/modelos/modelo_19/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_20"><img src="./<?php echo $genero ?>/img/modelos/modelo_20/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_21"><img src="./<?php echo $genero ?>/img/modelos/modelo_21/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_22"><img src="./<?php echo $genero ?>/img/modelos/modelo_22/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_23"><img src="./<?php echo $genero ?>/img/modelos/modelo_23/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_24"><img src="./<?php echo $genero ?>/img/modelos/modelo_24/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_25"><img src="./<?php echo $genero ?>/img/modelos/modelo_25/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_26"><img src="./<?php echo $genero ?>/img/modelos/modelo_26/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_27"><img src="./<?php echo $genero ?>/img/modelos/modelo_27/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                    <div id="paginado" class="paginado">
                                        <button onclick="mostrarModelosDesk(1)" id="btnPaginado21">1</button>
                                        <button onclick="mostrarModelosDesk(2)" id="btnPaginado22">2</button>
                                        <button onclick="mostrarModelosDesk(3)" id="btnPaginado23">3</button>
                                        <button onclick="mostrarModelosDesk(4)" id="btnPaginado24">4</button>
                                    </div>
                                </div>
                                <div id="mobile" style="display: none;">
                                    <!-- modelos mobile-->
                                    <div id="carrusel" class="viewMobile">
                                        <a href="#" class="left-arrow"><img src="./public/img/left-arrow.png" alt=""></a>
                                        <a href="#" class="right-arrow"><img src="./public/img/right-arrow.png" alt=""></a>
                                        <div class="carrusel">
                                            <div class="product" id="product_2_0">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1 selected" id="diseno_arquero_28"><img src="./<?php echo $genero ?>/img/modelos/modelo_28/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_1">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_29"><img src="./<?php echo $genero ?>/img/modelos/modelo_29/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_2">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_30"><img src="./<?php echo $genero ?>/img/modelos/modelo_30/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_3">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_31"><img src="./<?php echo $genero ?>/img/modelos/modelo_31/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_4">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_32"><img src="./<?php echo $genero ?>/img/modelos/modelo_32/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_5">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_33"><img src="./<?php echo $genero ?>/img/modelos/modelo_33/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_6">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_34"><img src="./<?php echo $genero ?>/img/modelos/modelo_34/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_7">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_35"><img src="./<?php echo $genero ?>/img/modelos/modelo_35/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_8">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_1" id="diseno_arquero_36"><img src="./<?php echo $genero ?>/img/modelos/modelo_36/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_9">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_1"><img src="./<?php echo $genero ?>/img/modelos/modelo_1/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_10">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_2"><img src="./<?php echo $genero ?>/img/modelos/modelo_2/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_11">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_3"><img src="./<?php echo $genero ?>/img/modelos/modelo_3/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_12">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_4"><img src="./<?php echo $genero ?>/img/modelos/modelo_4/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_13">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_5"><img src="./<?php echo $genero ?>/img/modelos/modelo_5/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_14">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_6"><img src="./<?php echo $genero ?>/img/modelos/modelo_6/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_15">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_7"><img src="./<?php echo $genero ?>/img/modelos/modelo_7/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_16">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_8"><img src="./<?php echo $genero ?>/img/modelos/modelo_8/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_17">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_2" id="diseno_arquero_9"><img src="./<?php echo $genero ?>/img/modelos/modelo_9/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_18">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_10"><img src="./<?php echo $genero ?>/img/modelos/modelo_10/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_19">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_11"><img src="./<?php echo $genero ?>/img/modelos/modelo_11/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_20">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_12"><img src="./<?php echo $genero ?>/img/modelos/modelo_12/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_21">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_13"><img src="./<?php echo $genero ?>/img/modelos/modelo_13/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_22">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_14"><img src="./<?php echo $genero ?>/img/modelos/modelo_14/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_23">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_15"><img src="./<?php echo $genero ?>/img/modelos/modelo_15/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_24">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_16"><img src="./<?php echo $genero ?>/img/modelos/modelo_16/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_25">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_17"><img src="./<?php echo $genero ?>/img/modelos/modelo_17/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_26">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_3" id="diseno_arquero_18"><img src="./<?php echo $genero ?>/img/modelos/modelo_18/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_27">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_19"><img src="./<?php echo $genero ?>/img/modelos/modelo_19/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_28">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_20"><img src="./<?php echo $genero ?>/img/modelos/modelo_20/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_29">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_21"><img src="./<?php echo $genero ?>/img/modelos/modelo_21/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_30">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_22"><img src="./<?php echo $genero ?>/img/modelos/modelo_22/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_31">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_23"><img src="./<?php echo $genero ?>/img/modelos/modelo_23/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_32">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_24"><img src="./<?php echo $genero ?>/img/modelos/modelo_24/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_33">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_25"><img src="./<?php echo $genero ?>/img/modelos/modelo_25/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_34">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_26"><img src="./<?php echo $genero ?>/img/modelos/modelo_26/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_2_35">
                                              <button class="sel_diseno_arquero sel_diseno_page_arquero_4" id="diseno_arquero_27"><img src="./<?php echo $genero ?>/img/modelos/modelo_27/option.png" class="img-responsive"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modelos -->

                            <div id="tab22">
                              <div id="options_colores">
                                <div id="color_base_box_arquero">
                                  <p>Color Base</p>
                                  <ul class="colores_list">
                                    <li id="color_base_arquero_1" class="sel_color_base_arquero color_1">&nbsp;</li>
                                    <li id="color_base_arquero_2" class="sel_color_base_arquero color_2">&nbsp;</li>
                                    <li id="color_base_arquero_3" class="sel_color_base_arquero color_3">&nbsp;</li>
                                    <li id="color_base_arquero_4" class="sel_color_base_arquero color_4">&nbsp;</li>
                                    <li id="color_base_arquero_5" class="sel_color_base_arquero color_5">&nbsp;</li>
                                    <li id="color_base_arquero_6" class="sel_color_base_arquero color_6">&nbsp;</li>
                                    <li id="color_base_arquero_7" class="sel_color_base_arquero color_7">&nbsp;</li>
                                    <li id="color_base_arquero_8" class="sel_color_base_arquero color_8">&nbsp;</li>
                                    <li id="color_base_arquero_9" class="sel_color_base_arquero color_9">&nbsp;</li>
                                    <li id="color_base_arquero_10" class="sel_color_base_arquero color_10">&nbsp;</li>
                                    <li id="color_base_arquero_11" class="sel_color_base_arquero color_11">&nbsp;</li>
                                    <li id="color_base_arquero_12" class="sel_color_base_arquero color_12">&nbsp;</li>
                                    <li id="color_base_arquero_13" class="sel_color_base_arquero color_13">&nbsp;</li>
                                    <li id="color_base_arquero_14" class="sel_color_base_arquero color_14">&nbsp;</li>
                                    <li id="color_base_arquero_15" class="sel_color_base_arquero color_15">&nbsp;</li>
                                    <li id="color_base_arquero_16" class="sel_color_base_arquero color_16">&nbsp;</li>
                                    <li id="color_base_arquero_17" class="sel_color_base_arquero color_17">&nbsp;</li>
                                    <li id="color_base_arquero_18" class="sel_color_base_arquero color_18">&nbsp;</li>
                                    <li id="color_base_arquero_19" class="sel_color_base_arquero color_19">&nbsp;</li>
                                    <li id="color_base_arquero_20" class="sel_color_base_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                                <div id="color_principal_box_arquero">
                                  <p>Color Principal</p>
                                  <ul class="colores_list">
                                    <li id="color_principal_arquero_1" class="sel_color_principal_arquero color_1">&nbsp;</li>
                                    <li id="color_principal_arquero_2" class="sel_color_principal_arquero color_2">&nbsp;</li>
                                    <li id="color_principal_arquero_3" class="sel_color_principal_arquero color_3">&nbsp;</li>
                                    <li id="color_principal_arquero_4" class="sel_color_principal_arquero color_4">&nbsp;</li>
                                    <li id="color_principal_arquero_5" class="sel_color_principal_arquero color_5">&nbsp;</li>
                                    <li id="color_principal_arquero_6" class="sel_color_principal_arquero color_6">&nbsp;</li>
                                    <li id="color_principal_arquero_7" class="sel_color_principal_arquero color_7">&nbsp;</li>
                                    <li id="color_principal_arquero_8" class="sel_color_principal_arquero color_8">&nbsp;</li>
                                    <li id="color_principal_arquero_9" class="sel_color_principal_arquero color_9">&nbsp;</li>
                                    <li id="color_principal_arquero_10" class="sel_color_principal_arquero color_10">&nbsp;</li>
                                    <li id="color_principal_arquero_11" class="sel_color_principal_arquero color_11">&nbsp;</li>
                                    <li id="color_principal_arquero_12" class="sel_color_principal_arquero color_12">&nbsp;</li>
                                    <li id="color_principal_arquero_13" class="sel_color_principal_arquero color_13">&nbsp;</li>
                                    <li id="color_principal_arquero_14" class="sel_color_principal_arquero color_14">&nbsp;</li>
                                    <li id="color_principal_arquero_15" class="sel_color_principal_arquero color_15">&nbsp;</li>
                                    <li id="color_principal_arquero_16" class="sel_color_principal_arquero color_16">&nbsp;</li>
                                    <li id="color_principal_arquero_17" class="sel_color_principal_arquero color_17">&nbsp;</li>
                                    <li id="color_principal_arquero_18" class="sel_color_principal_arquero color_18">&nbsp;</li>
                                    <li id="color_principal_arquero_19" class="sel_color_principal_arquero color_19">&nbsp;</li>
                                    <li id="color_principal_arquero_20" class="sel_color_principal_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                                <div id="color_secundario_box_arquero">
                                  <p>Color Secundario</p>
                                  <ul class="colores_list">
                                    <li id="color_secundario_arquero_1" class="sel_color_secundario_arquero color_1">&nbsp;</li>
                                    <li id="color_secundario_arquero_2" class="sel_color_secundario_arquero color_2">&nbsp;</li>
                                    <li id="color_secundario_arquero_3" class="sel_color_secundario_arquero color_3">&nbsp;</li>
                                    <li id="color_secundario_arquero_4" class="sel_color_secundario_arquero color_4">&nbsp;</li>
                                    <li id="color_secundario_arquero_5" class="sel_color_secundario_arquero color_5">&nbsp;</li>
                                    <li id="color_secundario_arquero_6" class="sel_color_secundario_arquero color_6">&nbsp;</li>
                                    <li id="color_secundario_arquero_7" class="sel_color_secundario_arquero color_7">&nbsp;</li>
                                    <li id="color_secundario_arquero_8" class="sel_color_secundario_arquero color_8">&nbsp;</li>
                                    <li id="color_secundario_arquero_9" class="sel_color_secundario_arquero color_9">&nbsp;</li>
                                    <li id="color_secundario_arquero_10" class="sel_color_secundario_arquero color_10">&nbsp;</li>
                                    <li id="color_secundario_arquero_11" class="sel_color_secundario_arquero color_11">&nbsp;</li>
                                    <li id="color_secundario_arquero_12" class="sel_color_secundario_arquero color_12">&nbsp;</li>
                                    <li id="color_secundario_arquero_13" class="sel_color_secundario_arquero color_13">&nbsp;</li>
                                    <li id="color_secundario_arquero_14" class="sel_color_secundario_arquero color_14">&nbsp;</li>
                                    <li id="color_secundario_arquero_15" class="sel_color_secundario_arquero color_15">&nbsp;</li>
                                    <li id="color_secundario_arquero_16" class="sel_color_secundario_arquero color_16">&nbsp;</li>
                                    <li id="color_secundario_arquero_17" class="sel_color_secundario_arquero color_17">&nbsp;</li>
                                    <li id="color_secundario_arquero_18" class="sel_color_secundario_arquero color_18">&nbsp;</li>
                                    <li id="color_secundario_arquero_19" class="sel_color_secundario_arquero color_19">&nbsp;</li>
                                    <li id="color_secundario_arquero_20" class="sel_color_secundario_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                              </div>
                            </div><!--colores-->

                            <div id="tab32">
                                <div id="options_texto">
                                  <p>Formato</p>
                                  <ul class="list_box formato_arquero">
                                    <li id="formato_arq_1" class="sel_formato_arq selected"><img src="./<?php echo $genero ?>/img/numeros_arq/1/14.png" /></li>
                                    <li id="formato_arq_2" class="sel_formato_arq"><img src="./<?php echo $genero ?>/img/numeros_arq/2/14.png" /></li>
                                    <li id="formato_arq_3" class="sel_formato_arq"><img src="./<?php echo $genero ?>/img/numeros_arq/3/14.png" /></li>
                                    <li id="formato_arq_4" class="sel_formato_arq"><img src="./<?php echo $genero ?>/img/numeros_arq/4/14.png" /></li>
                                    <li id="formato_arq_5" class="sel_formato_arq"><img src="./<?php echo $genero ?>/img/numeros_arq/5/14.png" /></li>
                                    <li id="formato_arq_6" class="sel_formato_arq"><img src="./<?php echo $genero ?>/img/numeros_arq/6/14.png" /></li>
                                  </ul>
                                  <p>Color</p>
                                  <ul class="colores_list">
                                    <li id="color_text_arq_1" class="sel_color_text_arq color_1">&nbsp;</li>
                                    <li id="color_text_arq_2" class="sel_color_text_arq color_2">&nbsp;</li>
                                    <li id="color_text_arq_3" class="sel_color_text_arq color_3">&nbsp;</li>
                                    <li id="color_text_arq_4" class="sel_color_text_arq color_4">&nbsp;</li>
                                    <li id="color_text_arq_5" class="sel_color_text_arq color_5">&nbsp;</li>
                                    <li id="color_text_arq_6" class="sel_color_text_arq color_6">&nbsp;</li>
                                    <li id="color_text_arq_7" class="sel_color_text_arq color_7">&nbsp;</li>
                                    <li id="color_text_arq_8" class="sel_color_text_arq color_8">&nbsp;</li>
                                    <li id="color_text_arq_9" class="sel_color_text_arq color_9">&nbsp;</li>
                                    <li id="color_text_arq_10" class="sel_color_text_arq color_10">&nbsp;</li>
                                    <li id="color_text_arq_11" class="sel_color_text_arq color_11">&nbsp;</li>
                                    <li id="color_text_arq_12" class="sel_color_text_arq color_12">&nbsp;</li>
                                    <li id="color_text_arq_13" class="sel_color_text_arq color_13">&nbsp;</li>
                                    <li id="color_text_arq_14" class="sel_color_text_arq color_14">&nbsp;</li>
                                    <li id="color_text_arq_15" class="sel_color_text_arq color_15">&nbsp;</li>
                                    <li id="color_text_arq_16" class="sel_color_text_arq color_16">&nbsp;</li>
                                    <li id="color_text_arq_17" class="sel_color_text_arq color_17">&nbsp;</li>
                                    <li id="color_text_arq_18" class="sel_color_text_arq color_18">&nbsp;</li>
                                    <li id="color_text_arq_19" class="sel_color_text_arq color_19">&nbsp;</li>
                                    <li id="color_text_arq_20" class="sel_color_text_arq color_20">&nbsp;</li>
                                  </ul>
                                </div>
                            </div><!--numeros-->
                        </div>
                      </div>
                      
                    <!-- <div style="width: -moz-available; width: fill-available; width: -webkit-fill-available; background: #1d262c; color:#fff; padding: 5px; text-align: right; position: absolute; bottom: 0;">SIGUIENTE PASO ></div> -->
                  </div><!-- end tabs -->
                </div>

                <div class="preview_content_short container-main" id="producto3" style="position: relative;">
                  <div>
                    <div style="width: 70%; justify-content: center; align-items: center; padding: 20px; opacity: 1 !important; position: absolute; top: 38px; z-index:999999;" class="desktop">
                      <div style="text-align: center;">
                        <label class="switch">
                          <input class="form-check-input short_jugador_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto3')">
                          <span class="slider round"></span>
                        </label><br>
                        <span class="switch_text">INCLUIR SHORT</span>
                      </div>
                    </div>
                  </div>
                  <div id="short" class="container-products">
                      <div id="vwProduct13" class="container-img-product" style="width: 100%;">
                        <div class="header-tit-products">SHORT</div>
                        <div class="preview_content_short_content">
                          <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria_short" alt=""/>
                          <img src="./<?php echo $genero ?>/img/shorts/short_1/color_principal/14.png" class="img_principal_short" />
                          <img src="./<?php echo $genero ?>/img/shorts/base/4.png" class="img_base_short" />
                        </div>

                        <div style="position: absolute; top: 30px; right: 150px; z-index: 99999999;" class="container-btn-camisetas">
                          <div style="text-align: center;">
                            <label class="switch">
                              <input class="form-check-input short_jugador_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto3')">
                              <span class="slider round"></span>
                            </label><br>
                            <span class="switch_text">INCLUIR SHORT</span>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div id="tabs" class="container-tabs">

                    <div id="tabsBotonera" style="text-align: center;background: #1d262c;height: 38px;padding: 3px;display: flex;justify-content: center;align-items: center;">
                        <button id="btnTab13" onclick="mostrarTabsDisenador(1)" class="btn-tab btn-tab-active">Modelos</button>
                        <button id="btnTab23" onclick="mostrarTabsDisenador(2)" class="btn-tab btn-tab-active">Colores</button>
                    </div>

                    <div style="
                        display:  flex;
                        flex-direction: column;
                        justify-content: space-between;
                        height: 94%;
                    ">
                      <div id="contenidoTabs">
                          <div id="tab13"><!-- modelos -->
                              <div id="desk" class="container-grilla">
                                  <div id="grilla13">
                                      <div class="grilla-modelo">
                                        <button class="sel_diseno_short selected" id="diseno_short_1"><img src="./<?php echo $genero ?>/img/shorts/short_1/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_2"><img src="./<?php echo $genero ?>/img/shorts/short_2/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_3"><img src="./<?php echo $genero ?>/img/shorts/short_3/option.png" class="img-responsive"></button>
                                      </div>
                                      <div class="grilla-modelo">
                                        <button class="sel_diseno_short" id="diseno_short_4"><img src="./<?php echo $genero ?>/img/shorts/short_4/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_5"><img src="./<?php echo $genero ?>/img/shorts/short_5/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_6"><img src="./<?php echo $genero ?>/img/shorts/short_6/option.png" class="img-responsive"></button>
                                      </div>
                                      <div class="grilla-modelo">
                                        <button class="sel_diseno_short" id="diseno_short_7"><img src="./<?php echo $genero ?>/img/shorts/short_7/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_8"><img src="./<?php echo $genero ?>/img/shorts/short_8/option.png" class="img-responsive"></button>
                                        <button class="sel_diseno_short" id="diseno_short_9"><img src="./<?php echo $genero ?>/img/shorts/short_9/option.png" class="img-responsive"></button>
                                      </div>
                                  </div>
                              </div>
                              <div id="mobile" style="display: none;">
                                  <!-- modelos mobile-->
                                  <div id="carrusel" class="viewMobile">
                                      <a href="#" class="left-arrow"><img src="./public/img/left-arrow.png" alt=""></a>
                                      <a href="#" class="right-arrow"><img src="./public/img/right-arrow.png" alt=""></a>
                                      <div class="carrusel">
                                          <div class="product" id="product_3_0">
                                            <button class="sel_diseno_short selected" id="diseno_short_1"><img src="./<?php echo $genero ?>/img/shorts/short_1/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_1">
                                            <button class="sel_diseno_short" id="diseno_short_2"><img src="./<?php echo $genero ?>/img/shorts/short_2/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_2">
                                            <button class="sel_diseno_short" id="diseno_short_3"><img src="./<?php echo $genero ?>/img/shorts/short_3/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_3">
                                            <button class="sel_diseno_short" id="diseno_short_4"><img src="./<?php echo $genero ?>/img/shorts/short_4/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_4">
                                            <button class="sel_diseno_short" id="diseno_short_5"><img src="./<?php echo $genero ?>/img/shorts/short_5/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_5">
                                            <button class="sel_diseno_short" id="diseno_short_6"><img src="./<?php echo $genero ?>/img/shorts/short_6/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_6">
                                            <button class="sel_diseno_short" id="diseno_short_7"><img src="./<?php echo $genero ?>/img/shorts/short_7/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_7">
                                            <button class="sel_diseno_short" id="diseno_short_8"><img src="./<?php echo $genero ?>/img/shorts/short_8/option.png" class="img-responsive"></button>
                                          </div>
                                          <div class="product" id="product_3_8">
                                            <button class="sel_diseno_short" id="diseno_short_9"><img src="./<?php echo $genero ?>/img/shorts/short_9/option.png" class="img-responsive"></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- end modelos -->

                          <div id="tab23">
                            <div id="options_colores_short">
                              <div id="color_base_box_short">
                                <p>Color Base</p>
                                <ul class="colores_list">
                                  <li id="color_base_short_1" class="sel_color_base_short color_1">&nbsp;</li>
                                  <li id="color_base_short_2" class="sel_color_base_short color_2">&nbsp;</li>
                                  <li id="color_base_short_3" class="sel_color_base_short color_3">&nbsp;</li>
                                  <li id="color_base_short_4" class="sel_color_base_short color_4">&nbsp;</li>
                                  <li id="color_base_short_5" class="sel_color_base_short color_5">&nbsp;</li>
                                  <li id="color_base_short_6" class="sel_color_base_short color_6">&nbsp;</li>
                                  <li id="color_base_short_7" class="sel_color_base_short color_7">&nbsp;</li>
                                  <li id="color_base_short_8" class="sel_color_base_short color_8">&nbsp;</li>
                                  <li id="color_base_short_9" class="sel_color_base_short color_9">&nbsp;</li>
                                  <li id="color_base_short_10" class="sel_color_base_short color_10">&nbsp;</li>
                                  <li id="color_base_short_11" class="sel_color_base_short color_11">&nbsp;</li>
                                  <li id="color_base_short_12" class="sel_color_base_short color_12">&nbsp;</li>
                                  <li id="color_base_short_13" class="sel_color_base_short color_13">&nbsp;</li>
                                  <li id="color_base_short_14" class="sel_color_base_short color_14">&nbsp;</li>
                                  <li id="color_base_short_15" class="sel_color_base_short color_15">&nbsp;</li>
                                  <li id="color_base_short_16" class="sel_color_base_short color_16">&nbsp;</li>
                                  <li id="color_base_short_17" class="sel_color_base_short color_17">&nbsp;</li>
                                  <li id="color_base_short_18" class="sel_color_base_short color_18">&nbsp;</li>
                                  <li id="color_base_short_19" class="sel_color_base_short color_19">&nbsp;</li>
                                  <li id="color_base_short_20" class="sel_color_base_short color_20">&nbsp;</li>
                                </ul>
                              </div>
                              <div id="color_principal_box_short">
                                <p>Color Principal</p>
                                <ul class="colores_list">
                                  <li id="color_principal_short_1" class="sel_color_principal_short color_1">&nbsp;</li>
                                  <li id="color_principal_short_2" class="sel_color_principal_short color_2">&nbsp;</li>
                                  <li id="color_principal_short_3" class="sel_color_principal_short color_3">&nbsp;</li>
                                  <li id="color_principal_short_4" class="sel_color_principal_short color_4">&nbsp;</li>
                                  <li id="color_principal_short_5" class="sel_color_principal_short color_5">&nbsp;</li>
                                  <li id="color_principal_short_6" class="sel_color_principal_short color_6">&nbsp;</li>
                                  <li id="color_principal_short_7" class="sel_color_principal_short color_7">&nbsp;</li>
                                  <li id="color_principal_short_8" class="sel_color_principal_short color_8">&nbsp;</li>
                                  <li id="color_principal_short_9" class="sel_color_principal_short color_9">&nbsp;</li>
                                  <li id="color_principal_short_10" class="sel_color_principal_short color_10">&nbsp;</li>
                                  <li id="color_principal_short_11" class="sel_color_principal_short color_11">&nbsp;</li>
                                  <li id="color_principal_short_12" class="sel_color_principal_short color_12">&nbsp;</li>
                                  <li id="color_principal_short_13" class="sel_color_principal_short color_13">&nbsp;</li>
                                  <li id="color_principal_short_14" class="sel_color_principal_short color_14">&nbsp;</li>
                                  <li id="color_principal_short_15" class="sel_color_principal_short color_15">&nbsp;</li>
                                  <li id="color_principal_short_16" class="sel_color_principal_short color_16">&nbsp;</li>
                                  <li id="color_principal_short_17" class="sel_color_principal_short color_17">&nbsp;</li>
                                  <li id="color_principal_short_18" class="sel_color_principal_short color_18">&nbsp;</li>
                                  <li id="color_principal_short_19" class="sel_color_principal_short color_19">&nbsp;</li>
                                  <li id="color_principal_short_20" class="sel_color_principal_short color_20">&nbsp;</li>
                                </ul>
                              </div>
                              <div id="color_secundario_box_short">
                                <p>Color Secundario</p>
                                <ul class="colores_list">
                                  <li id="color_secundario_short_1" class="sel_color_secundario_short color_1">&nbsp;</li>
                                  <li id="color_secundario_short_2" class="sel_color_secundario_short color_2">&nbsp;</li>
                                  <li id="color_secundario_short_3" class="sel_color_secundario_short color_3">&nbsp;</li>
                                  <li id="color_secundario_short_4" class="sel_color_secundario_short color_4">&nbsp;</li>
                                  <li id="color_secundario_short_5" class="sel_color_secundario_short color_5">&nbsp;</li>
                                  <li id="color_secundario_short_6" class="sel_color_secundario_short color_6">&nbsp;</li>
                                  <li id="color_secundario_short_7" class="sel_color_secundario_short color_7">&nbsp;</li>
                                  <li id="color_secundario_short_8" class="sel_color_secundario_short color_8">&nbsp;</li>
                                  <li id="color_secundario_short_9" class="sel_color_secundario_short color_9">&nbsp;</li>
                                  <li id="color_secundario_short_10" class="sel_color_secundario_short color_10">&nbsp;</li>
                                  <li id="color_secundario_short_11" class="sel_color_secundario_short color_11">&nbsp;</li>
                                  <li id="color_secundario_short_12" class="sel_color_secundario_short color_12">&nbsp;</li>
                                  <li id="color_secundario_short_13" class="sel_color_secundario_short color_13">&nbsp;</li>
                                  <li id="color_secundario_short_14" class="sel_color_secundario_short color_14">&nbsp;</li>
                                  <li id="color_secundario_short_15" class="sel_color_secundario_short color_15">&nbsp;</li>
                                  <li id="color_secundario_short_16" class="sel_color_secundario_short color_16">&nbsp;</li>
                                  <li id="color_secundario_short_17" class="sel_color_secundario_short color_17">&nbsp;</li>
                                  <li id="color_secundario_short_18" class="sel_color_secundario_short color_18">&nbsp;</li>
                                  <li id="color_secundario_short_19" class="sel_color_secundario_short color_19">&nbsp;</li>
                                  <li id="color_secundario_short_20" class="sel_color_secundario_short color_20">&nbsp;</li>
                                </ul>
                              </div>
                            </div>
                          </div><!--colores-->

                      </div>
                      <!-- <div style="width: -moz-available; width: fill-available; width: -webkit-fill-available; background: #1d262c; color:#fff; padding: 5px; text-align: right; position: absolute; bottom: 0;">SIGUIENTE PASO ></div> -->
                    </div>

                    </div><!-- end tabs -->
                </div>

                <div class="preview_content_short_arquero container-main" id="producto4" style="position: relative;">
                    <div>
                      <div style="width: 70%; justify-content: center; align-items: center; padding: 20px; opacity: 1 !important; position: absolute; top: 38px; z-index:999999;" class="desktop">
                        <div style="text-align: center;">
                          <label class="switch">
                            <input class="form-check-input short_arquero_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto4')">
                            <span class="slider round"></span>
                          </label><br>
                          <span class="switch_text">INCLUIR SHORT</span>
                        </div>
                      </div>
                    </div>
                    <div id="short_arquero" class="container-products">
                      <div id="vwProduct14" class="container-img-product" style="width: 100%;">
                          <div class="header-tit-products">SHORT ARQUERO</div>
                          <div class="preview_content_short_arquero_content">
                            <img src="./<?php echo $genero ?>/img/transparent.png" class="img_secundaria_short_arquero" alt=""/>
                            <img src="./<?php echo $genero ?>/img/shorts/short_1/color_principal/14.png" class="img_principal_short_arquero" />
                            <img src="./<?php echo $genero ?>/img/shorts/base/4.png" class="img_base_short_arquero" />
                          </div>

                          <div style="position: absolute; top: 30px; right: 150px; z-index: 99999999;" class="container-btn-camisetas">
                            <div style="text-align: center;">
                              <label class="switch">
                                <input class="form-check-input short_arquero_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto4')">
                                <span class="slider round"></span>
                              </label><br>
                              <span class="switch_text">INCLUIR SHORT</span>
                            </div>
                          </div>
                      </div>
                    </div>

                  <div id="tabs" class="container-tabs">

                    <div id="tabsBotonera" style="text-align: center;background: #1d262c;height: 38px;padding: 3px;display: flex;justify-content: center;align-items: center;">
                        <button id="btnTab14" onclick="mostrarTabsDisenador(1)" class="btn-tab btn-tab-active">Modelos</button>
                        <button id="btnTab24" onclick="mostrarTabsDisenador(2)" class="btn-tab btn-tab-active">Colores</button>
                    </div>

                    <div style="
                          display:  flex;
                          flex-direction: column;
                          justify-content: space-between;
                          height: 94%;
                      ">

                        <div id="contenidoTabs" class="tabsArquero">
                            <div id="tab14"><!-- modelos -->
                              <div id="desk" class="container-grilla">
                                    <div id="grilla14">
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_short_arquero selected" id="diseno_short_arquero_1"><img src="./<?php echo $genero ?>/img/shorts/short_1/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_2"><img src="./<?php echo $genero ?>/img/shorts/short_2/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_3"><img src="./<?php echo $genero ?>/img/shorts/short_3/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_4"><img src="./<?php echo $genero ?>/img/shorts/short_4/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_5"><img src="./<?php echo $genero ?>/img/shorts/short_5/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_6"><img src="./<?php echo $genero ?>/img/shorts/short_6/option.png" class="img-responsive"></button>
                                        </div>
                                        <div class="grilla-modelo">
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_7"><img src="./<?php echo $genero ?>/img/shorts/short_7/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_8"><img src="./<?php echo $genero ?>/img/shorts/short_8/option.png" class="img-responsive"></button>
                                          <button class="sel_diseno_short_arquero" id="diseno_short_arquero_9"><img src="./<?php echo $genero ?>/img/shorts/short_9/option.png" class="img-responsive"></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="mobile" style="display: none;">
                                    <!-- modelos mobile-->
                                    <div id="carrusel" class="viewMobile">
                                        <a href="#" class="left-arrow"><img src="./public/img/left-arrow.png" alt=""></a>
                                        <a href="#" class="right-arrow"><img src="./public/img/right-arrow.png" alt=""></a>
                                        <div class="carrusel">
                                            <div class="product" id="product_4_0">
                                              <button class="sel_diseno_short_arquero selected" id="diseno_short_arquero_1"><img src="./<?php echo $genero ?>/img/shorts/short_1/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_1">
                                            <button class="sel_diseno_short_arquero" id="diseno_short_arquero_2"><img src="./<?php echo $genero ?>/img/shorts/short_2/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_2">
                                            <button class="sel_diseno_short_arquero" id="diseno_short_arquero_3"><img src="./<?php echo $genero ?>/img/shorts/short_3/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_3">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_4"><img src="./<?php echo $genero ?>/img/shorts/short_4/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_4">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_5"><img src="./<?php echo $genero ?>/img/shorts/short_5/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_5">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_6"><img src="./<?php echo $genero ?>/img/shorts/short_6/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_6">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_7"><img src="./<?php echo $genero ?>/img/shorts/short_7/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_7">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_8"><img src="./<?php echo $genero ?>/img/shorts/short_8/option.png" class="img-responsive"></button>
                                            </div>
                                            <div class="product" id="product_4_8">
                                              <button class="sel_diseno_short_arquero" id="diseno_short_arquero_9"><img src="./<?php echo $genero ?>/img/shorts/short_9/option.png" class="img-responsive"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modelos -->

                            <div id="tab24">
                              <div id="options_colores_short_arquero">
                                <div id="color_base_box_short_arquero">
                                  <p>Color Base</p>
                                  <ul class="colores_list">
                                    <li id="color_base_short_arquero_1" class="sel_color_base_short_arquero color_1">&nbsp;</li>
                                    <li id="color_base_short_arquero_2" class="sel_color_base_short_arquero color_2">&nbsp;</li>
                                    <li id="color_base_short_arquero_3" class="sel_color_base_short_arquero color_3">&nbsp;</li>
                                    <li id="color_base_short_arquero_4" class="sel_color_base_short_arquero color_4">&nbsp;</li>
                                    <li id="color_base_short_arquero_5" class="sel_color_base_short_arquero color_5">&nbsp;</li>
                                    <li id="color_base_short_arquero_6" class="sel_color_base_short_arquero color_6">&nbsp;</li>
                                    <li id="color_base_short_arquero_7" class="sel_color_base_short_arquero color_7">&nbsp;</li>
                                    <li id="color_base_short_arquero_8" class="sel_color_base_short_arquero color_8">&nbsp;</li>
                                    <li id="color_base_short_arquero_9" class="sel_color_base_short_arquero color_9">&nbsp;</li>
                                    <li id="color_base_short_arquero_10" class="sel_color_base_short_arquero color_10">&nbsp;</li>
                                    <li id="color_base_short_arquero_11" class="sel_color_base_short_arquero color_11">&nbsp;</li>
                                    <li id="color_base_short_arquero_12" class="sel_color_base_short_arquero color_12">&nbsp;</li>
                                    <li id="color_base_short_arquero_13" class="sel_color_base_short_arquero color_13">&nbsp;</li>
                                    <li id="color_base_short_arquero_14" class="sel_color_base_short_arquero color_14">&nbsp;</li>
                                    <li id="color_base_short_arquero_15" class="sel_color_base_short_arquero color_15">&nbsp;</li>
                                    <li id="color_base_short_arquero_16" class="sel_color_base_short_arquero color_16">&nbsp;</li>
                                    <li id="color_base_short_arquero_17" class="sel_color_base_short_arquero color_17">&nbsp;</li>
                                    <li id="color_base_short_arquero_18" class="sel_color_base_short_arquero color_18">&nbsp;</li>
                                    <li id="color_base_short_arquero_19" class="sel_color_base_short_arquero color_19">&nbsp;</li>
                                    <li id="color_base_short_arquero_20" class="sel_color_base_short_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                                <div id="color_principal_box_short_arquero">
                                  <p>Color Principal</p>
                                  <ul class="colores_list">
                                    <li id="color_principal_short_arquero_1" class="sel_color_principal_short_arquero color_1">&nbsp;</li>
                                    <li id="color_principal_short_arquero_2" class="sel_color_principal_short_arquero color_2">&nbsp;</li>
                                    <li id="color_principal_short_arquero_3" class="sel_color_principal_short_arquero color_3">&nbsp;</li>
                                    <li id="color_principal_short_arquero_4" class="sel_color_principal_short_arquero color_4">&nbsp;</li>
                                    <li id="color_principal_short_arquero_5" class="sel_color_principal_short_arquero color_5">&nbsp;</li>
                                    <li id="color_principal_short_arquero_6" class="sel_color_principal_short_arquero color_6">&nbsp;</li>
                                    <li id="color_principal_short_arquero_7" class="sel_color_principal_short_arquero color_7">&nbsp;</li>
                                    <li id="color_principal_short_arquero_8" class="sel_color_principal_short_arquero color_8">&nbsp;</li>
                                    <li id="color_principal_short_arquero_9" class="sel_color_principal_short_arquero color_9">&nbsp;</li>
                                    <li id="color_principal_short_arquero_10" class="sel_color_principal_short_arquero color_10">&nbsp;</li>
                                    <li id="color_principal_short_arquero_11" class="sel_color_principal_short_arquero color_11">&nbsp;</li>
                                    <li id="color_principal_short_arquero_12" class="sel_color_principal_short_arquero color_12">&nbsp;</li>
                                    <li id="color_principal_short_arquero_13" class="sel_color_principal_short_arquero color_13">&nbsp;</li>
                                    <li id="color_principal_short_arquero_14" class="sel_color_principal_short_arquero color_14">&nbsp;</li>
                                    <li id="color_principal_short_arquero_15" class="sel_color_principal_short_arquero color_15">&nbsp;</li>
                                    <li id="color_principal_short_arquero_16" class="sel_color_principal_short_arquero color_16">&nbsp;</li>
                                    <li id="color_principal_short_arquero_17" class="sel_color_principal_short_arquero color_17">&nbsp;</li>
                                    <li id="color_principal_short_arquero_18" class="sel_color_principal_short_arquero color_18">&nbsp;</li>
                                    <li id="color_principal_short_arquero_19" class="sel_color_principal_short_arquero color_19">&nbsp;</li>
                                    <li id="color_principal_short_arquero_20" class="sel_color_principal_short_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                                <div id="color_secundario_box_short_arquero">
                                  <p>Color Secundario</p>
                                  <ul class="colores_list">
                                    <li id="color_secundario_short_arquero_1" class="sel_color_secundario_short_arquero color_1">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_2" class="sel_color_secundario_short_arquero color_2">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_3" class="sel_color_secundario_short_arquero color_3">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_4" class="sel_color_secundario_short_arquero color_4">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_5" class="sel_color_secundario_short_arquero color_5">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_6" class="sel_color_secundario_short_arquero color_6">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_7" class="sel_color_secundario_short_arquero color_7">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_8" class="sel_color_secundario_short_arquero color_8">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_9" class="sel_color_secundario_short_arquero color_9">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_10" class="sel_color_secundario_short_arquero color_10">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_11" class="sel_color_secundario_short_arquero color_11">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_12" class="sel_color_secundario_short_arquero color_12">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_13" class="sel_color_secundario_short_arquero color_13">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_14" class="sel_color_secundario_short_arquero color_14">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_15" class="sel_color_secundario_short_arquero color_15">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_16" class="sel_color_secundario_short_arquero color_16">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_17" class="sel_color_secundario_short_arquero color_17">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_18" class="sel_color_secundario_short_arquero color_18">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_19" class="sel_color_secundario_short_arquero color_19">&nbsp;</li>
                                    <li id="color_secundario_short_arquero_20" class="sel_color_secundario_short_arquero color_20">&nbsp;</li>
                                  </ul>
                                </div>
                              </div>
                            </div><!--colores-->

                        </div>
                        <!-- <div style="width: -moz-available; width: fill-available; width: -webkit-fill-available; background: #1d262c; color:#fff; padding: 5px; text-align: right; position: absolute; bottom: 0;">SIGUIENTE PASO ></div> -->
                    </div>

                  </div><!-- end tabs -->
                </div>

                <div class="preview_content_medias container-main" id="producto5" style="position: relative;">
                  <div>
                    <div style="width: 70%; justify-content: center; align-items: center; padding: 20px;opacity: 1 !important; position: absolute; top: 38px; z-index:999999;" class="desktop">
                      <div style="text-align: center;">
                        <label class="switch">
                          <input class="form-check-input medias_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto5')">
                          <span class="slider round"></span>
                        </label><br>
                        <span class="switch_text">INCLUIR MEDIAS</span>
                      </div>
                    </div>
                  </div>

                  <div id="medias" class="container-products">
                      <div id="vwProduct15" class="container-img-product">
                          <div class="header-tit-products">FRENTE</div>
                          <div class="preview_content_medias_content">
                            <img src="./<?php echo $genero ?>/img/medias/frente/1.png" class="img_medias img_medias_frente"/>
                          </div>
                      </div>
                      <div id="vwProduct25" class="container-img-product">
                          <div class="header-tit-products">COSTADO</div>
                          <div class="preview_content_medias_content">
                            <img src="./<?php echo $genero ?>/img/medias/perfil/1.png" class="img_medias img_medias_perfil"/>
                          </div>
                      </div>

                      <div style="position: absolute; top: 30px; right: 150px; z-index: 99999999;" class="container-btn-camisetas">
                        <div style="text-align: center;">
                          <label class="switch">
                            <input class="form-check-input medias_input_switch_general input_switch" type="checkbox" onclick="switchProduct(this, 'producto5')">
                            <span class="slider round"></span>
                          </label><br>
                          <span class="switch_text">INCLUIR MEDIAS</span>
                        </div>
                      </div>
                  </div>

                  <div id="tabs" class="container-tabs">

                    <div id="tabsBotonera" style="text-align: center;background: #1d262c;height: 38px;padding: 3px;display: flex;justify-content: center;align-items: center;">
                        <button id="btnTab15" onclick="mostrarTabsDisenador(1)" class="btn-tab btn-tab-active">Colores</button>
                    </div>

                    <div id="contenidoTabs">
                        <div id="tab15">
                          <div id="options_colores_medias">
                            <div id="color_base_box_medias">
                              <p>Color</p>
                              <ul class="colores_list">
                                <li id="color_medias_1" class="sel_color_medias color_1">&nbsp;</li>
                                <li id="color_medias_2" class="sel_color_medias color_2">&nbsp;</li>
                                <li id="color_medias_4" class="sel_color_medias color_4">&nbsp;</li>
                                <li id="color_medias_5" class="sel_color_medias color_5">&nbsp;</li>
                                <li id="color_medias_7" class="sel_color_medias color_7">&nbsp;</li>
                                <li id="color_medias_10" class="sel_color_medias color_10">&nbsp;</li>
                                <li id="color_medias_12" class="sel_color_medias color_12">&nbsp;</li>
                                <li id="color_medias_13" class="sel_color_medias color_13">&nbsp;</li>
                                <li id="color_medias_14" class="sel_color_medias color_14">&nbsp;</li>
                                <li id="color_medias_15" class="sel_color_medias color_15">&nbsp;</li>
                                <li id="color_medias_17" class="sel_color_medias color_17">&nbsp;</li>
                                <li id="color_medias_19" class="sel_color_medias color_19">&nbsp;</li>
                                <li id="color_medias_20" class="sel_color_medias color_20">&nbsp;</li>
                              </ul>
                            </div>
                          </div>
                        </div><!--colores-->
                      </div>
                      <!-- <div style="width: -moz-available; width: fill-available; width: -webkit-fill-available; background: #1d262c; color:#fff; padding: 5px; text-align: right; position: absolute; bottom: 0;">SIGUIENTE PASO ></div> -->

                  </div><!-- end tabs -->
                </div>
            </div>

  </div>
  <div class="row footer-top-tit" style="display:flex; justify-content: space-between; padding-right: 100px;">
    <a href="#" style="cursor: pointer;" class="btn btn-ver-talles btn-mobile" onclick="verTalles('<?php echo $genero ?>')">Ver talles</a>
    <span id="modelo_selected"></span>
    <div style="display:flex; align-items: center; cursor: pointer;" onclick="mostrarDatosPedido()">
      <span style="font-size: 1.3em;">SIGUIENTE</span> <img style="margin-left:10px" src="./public/nueva/arrow-right.png" alt="">
    </div>
  </div>

<script src="./public/js/futbol.js" id="script_futbol_js" genero="<?php echo $genero; ?>" url_server="<?php echo $url_server; ?>"></script>

<?php if(!empty($pedido[0]['id'])){ ?>
  <script>
      $( document ).ready( function(){
          <?php if($pedido[0]['option_medias_on'] == 1){ ?>
              $('#option_switch_medias').click();
              $('#color_medias_<?php echo $pedido[0]['color_medias'] ?>').click();
          <?php } ?>

          <?php if($pedido[0]['option_short_on'] == 1){  ?>
              $('#option_switch_short').click();
              $('#diseno_short_<?php echo $pedido[0]['diseno_short'] ?>').click();
              $('#color_base_short_<?php echo $pedido[0]['color_base_short'] ?>').click();
              $('#color_principal_short_<?php echo $pedido[0]['color_principal_short'] ?>').click();
              <?php if($pedido[0]['color_secundario_short'] != null){  ?>
                  $('#color_secundario_short_<?php echo $pedido[0]['color_secundario_short'] ?>').click();
              <?php } ?>

              <?php if($pedido[0]['option_arq_on'] == 1){  ?>
                  $('#diseno_short_arquero_<?php echo $pedido[0]['diseno_short_arquero'] ?>').click();
                  $('#color_base_short_arquero_<?php echo $pedido[0]['color_base_short_arquero'] ?>').click();
                  $('#color_principal_short_arquero_<?php echo $pedido[0]['color_principal_short_arquero'] ?>').click();
                  <?php if($pedido[0]['color_secundario_short_arquero'] != null){  ?>
                      $('#color_secundario_short_arquero_<?php echo $pedido[0]['color_secundario_short_arquero'] ?>').click();
                  <?php } ?>
              <?php } ?>
          <?php } ?>

          <?php if($pedido[0]['option_arq_on'] == 1){  ?>
              $('#option_switch_arquero').click();
              $('#formato_arq_<?php echo $pedido[0]['formato_arquero'] ?>').click();
              $('#color_text_arq_<?php echo $pedido[0]['color_nro_arquero'] ?>').click();
              $('#option_color_text_arq').val('<?php echo $pedido[0]['color_nro_arquero'] ?>');
              $('#option_formato_arq').val('<?php echo $pedido[0]['formato_arquero'] ?>');
              $('#diseno_arquero_<?php echo $pedido[0]['diseno_arquero'] ?>').click();
              $('#color_base_arquero_<?php echo $pedido[0]['color_base_arquero'] ?>').click();
              $('#color_principal_arquero_<?php echo $pedido[0]['color_principal_arquero'] ?>').click();
              <?php if($pedido[0]['color_secundario_arquero'] != null){  ?>
                  $('#color_secundario_arquero_<?php echo $pedido[0]['color_secundario_arquero'] ?>').click();
              <?php } ?>
          <?php } ?>
          
          $('#diseno_<?php echo $pedido[0]['diseno'] ?>').click();
          $('#formato_<?php echo $pedido[0]['formato'] ?>').click();
          $('#color_text_<?php echo $pedido[0]['color_nro'] ?>').click();
          $('#color_base_<?php echo $pedido[0]['color_base'] ?>').click();
          $('#color_principal_<?php echo $pedido[0]['color_principal'] ?>').click();
          <?php if($pedido[0]['color_secundario'] != null){  ?>
              $('#color_secundario_<?php echo $pedido[0]['color_secundario'] ?>').click();
          <?php } ?>
          $('#btn_modelo_jugador').click();
      });
  </script>
<?php } ?>

<?php
  if(!empty($pedido)){
    $switchCamiseta = false;
    $switchShort = false;
    $switchConjunto = false;
    foreach($jugadores as $jugador){
      if($jugador['tipo'] == 'conjunto' && !$switchConjunto){
        $switchConjunto = true;
      }else if($jugador['tipo'] == 'short' && !$switchShort){
        $switchShort = true;
      }else if($jugador['tipo'] == 'camiseta' && !$switchCamiseta){
        $switchCamiseta = true;

      }
    }
    if($switchCamiseta){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.camiseta_jugador_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }
    if($switchShort){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.short_jugador_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }
    if($switchConjunto){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.short_jugador_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
          jQuery.each($('.camiseta_jugador_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }

    $switchCamisetaArquero = false;
    $switchShortArquero = false;
    $switchConjuntoArquero = false;
    foreach($arqueros as $jugador){
      if($jugador['tipo'] == 'conjunto' && !$switchConjuntoArquero){
        $switchConjuntoArquero = true;
      }else if($jugador['tipo'] == 'short' && !$switchShortArquero){
        $switchShortArquero = true;
      }else if($jugador['tipo'] == 'camiseta' && !$switchCamisetaArquero){
        $switchCamisetaArquero = true;

      }
    }
    if($switchCamisetaArquero){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.camiseta_arquero_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }
    if($switchShortArquero){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.short_arquero_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }
    if($switchConjuntoArquero){
      ?>
      <script>
        $( document ).ready( function(){
          jQuery.each($('.short_arquero_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
          jQuery.each($('.camiseta_arquero_input_switch_general'), function() {
            if(!$(this).is(':checked')){
              $(this).click()
            }
          });
        })
      </script>
      <?php
    }
  }
?>