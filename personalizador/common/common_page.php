<?php 
	include_once('includes/inc.funciones.php');
	require_once('includes/getData.php');
	$minCamisetas = $config->valor;
	$minShorts = $configShort->valor;
	traerPrecios();
	traerParametros();
	$url_server = substr_count($_SERVER['HTTP_HOST'], '.') >= 2 ? substr($_SERVER['HTTP_HOST'], strpos($_SERVER['HTTP_HOST'], '.') + 1) : $_SERVER['HTTP_HOST'];
?>

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5FQGX6Z');</script>
  <!-- End Google Tag Manager -->

  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '182905309114130');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=182905309114130&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code --> 
</head>

<script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FQGX6Z"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<?php
	include('menu.php');
?>

<style>
  #listado_conjuntos{
    border: 1px solid lightblue;
    padding-left: 10px;
    padding-right: 5px;
  }

  #listado_camisetas{
    border: 1px solid lightgreen;
    padding-left: 10px;
    padding-right: 5px;
  }

  #listado_shorts{
    border: 1px solid lightgrey;
    padding-left: 10px;
    padding-right: 5px;
  }

  legend{
    float: none;
    padding: inherit;
    width: 10%;
    margin-left: 2%;
  }

  /* .conjunto{
    box-shadow: rgb(0 0 0 / 45%) 0px 25px 20px -20px;
  }

  .camiseta{
    box-shadow: rgb(0 0 0 / 45%) 0px 25px 20px -20px;
  }

  .short{
    box-shadow: rgb(0 0 0 / 45%) 0px 25px 20px -20px;
  } */

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

  .btn-volver{
    color: #ff5b1e !important;
    background-color: #fff !important;
    border-color: #ff5b1e !important;
  }

  .btn-volver:hover{
    color: #fff !important;
    background-color: #ff5b1e !important;
    border-color: #ff5b1e !important;
    cursor: pointer;
  }

  .btn-ver-talles{
    color: #fff !important;
    /* background-color: #fff !important; */
    border-color: #fff !important;
  }

  .btn-ver-talles:hover{
    color: #fff !important;
    background-color: #f7885e !important;
    border-color: #fff !important;
    cursor: pointer;
  }
</style>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;800&family=Roboto:wght@100;400;900&display=swap');
        button{
            background: none;
            border: none;
            cursor: pointer;
        }
        .content-form{
            display: flex;
        }
        .content-form div{
            margin-right: 10px;
        }

        .form-floating>label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity .1s ease-in-out,transform .1s ease-in-out;
        }

        .form-floating>.form-control {
            padding: 1rem 0.75rem;
        }

        .form-floating>.form-control, .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-control {
            display: block;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            width: -moz-available;          /* WebKit-based browsers will ignore this. */
            width: -webkit-fill-available;  /* Mozilla-based browsers will ignore this. */
            width: fill-available;
        }
        .form-control:focus, input[type]:focus {
            border-color: rgb(255, 144, 0);
            box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
            outline: 0 none;
        }




        .form-select {
            display: block;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            /* -webkit-appearance: none; */
            /* -moz-appearance: none; */
            /* appearance: none; */
            width: -moz-available;          /* WebKit-based browsers will ignore this. */
            width: -webkit-fill-available;  /* Mozilla-based browsers will ignore this. */
            width: fill-available;
            -webkit-appearance: menulist-button;
            -moz-appearance: menulist-button;
            appearance: menulist-button;
        }
        .form-select:focus, input[type]:focus {
            border-color: rgb(255, 144, 0);
            box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
            outline: 0 none;
        }




        .btn-xxl{
            font-size: 23px;
        }
        .btn-trash{
            color: #ccc;
        }
        .btn-trash:hover{
            color: #ff5b1e;
        }


        /* switch */
        .switch {
            position: relative;
            display: inline-block;
            width: 70px;
            height: 31px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ff5b1e;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 2px;
            bottom: 3px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: green;
        }

        input:focus + .slider {
            /* box-shadow: 0 0 1px #2196F3; */
            border-color: rgb(255, 144, 0);
            box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
            outline: 0 none;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(40px);
            -ms-transform: translateX(40px);
            transform: translateX(40px);
        }



        /* Rounded sliders */
        .slider.round {
            border-radius: 15px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .add_images{
          display: flex;
          width: 90%;
          justify-content: space-between;
          margin: 20px auto;
        }

        .add_images_box{
          width: 45%;
        }

        /* MOBILE VIEW */
        @media (max-width: 767px) {

          .content-form{
              display: block;
              border-bottom: 1px solid #ccc;
              padding: 15px;
          }

          .content-form div{
                margin-right: 0px;
                margin-bottom:  10px;
          }
  
          .legend-title {
            width: 35%
          }

          .add_images{
            display: block;
          }

          .add_images_box{
            width: 100%;
            border: 1px solid rgb(204, 204, 204);
            padding: 20px;
            margin-top: 30px;
          }

          .title-mobile {
            font-size: 20px !important;
          }

        }

        
    </style>
<div class="container mt-5 hidden" id="respuesta_gral" style="margin-top: 33px;">
	<div style="margin-bottom: 5%; margin-left: 10%; margin-right: 10%; border: 1px solid #ccc; padding-bottom: 20px;">
		<p style="font-size:30px;padding: 20px 10px;text-transform: uppercase;font-weight:700;color: #494949; text-align: center;">
			¡TU CONSULTA FUE ENVIADA CON ÉXITO!
		</p>
		<p style="font-size: 18px;padding: 10px 30px 0px 30px;line-height:21px;text-align: center;">
			A la brevedad un asesor se va a comunicar y enviarte el presupuesto.
		</p>
		<p style="font-size: 18px;padding: 10px 30px 0px 30px;line-height:21px;text-align: center;">
			Pod&eacute;s ver tu pedido haciendo <a href="" class="link_pedido_enviado" target="_blank" title="Ver pedido" style="color:#3096fe;">click aquí</a>
		</p>
		<p style="padding: 10px 30px 0px 30px;line-height:21px;text-align: center;">
			Cualquier consulta pod&eacute;s comunicarte con nosotros al <a href="tel:011 4709 9453">011 4709 9453</a> o por mail al <a href="mailto:info@yakka.com.ar">info@yakka.com.ar</a>
		</p>
		<p style="padding: 10px 30px 0px 30px;line-height:21px;text-align: center;">
			<a href="#" class="link_pedido_enviado" target="_blank"><img src="https://hombre.yakka.com.ar/hombre/img/boton_mailing.jpg" alt="Ver Pedido"></a>
		</p>
	</div>
</div>

<div class="container mt-5" style="margin-top: 33px;">

  <form id="formulario" onsubmit="return enviar();">
    <div id="personalizador">
      <input type="hidden" name="pedidoUuid" id="pedidoUuid">
      <input type="hidden" id="precio_total" name="precio_total" value="">
      <input type="hidden" id="pedido_id" name="pedido_id" value="">

      <input type="hidden" name="zona_envio" value="">
      <input type="hidden" name="localidad_envio" value="">
      <input type="hidden" name="codigo_postal_envio" value="">
      <input type="hidden" name="tipo_envio" value="">

      <input type="hidden" id="minimo_camisetas" value="<?php echo $minCamisetas ?>">
      <input type="hidden" id="minimo_shorts" value="<?php echo $minShorts ?>">
      <input type="hidden" id="minimo_conjuntos" value="<?php echo $minCamisetas ?>">

      <div style="text-align: center; margin: 0px 30px 30px 30px"><h3 class="title-mobile">Personalizador de camisetas</h3></div>

      <?php
		    include('futbol.php');
      ?>
    </div>

    <div style="width: 100%; display: flex; justify-content: center;">
      <input type="button" style="display: none;" onclick="return mostrarPersonalizador()" class="btn btn-volver btn-anterior" value="Volver al personalizador"></input>
    </div>
      
    <div style="width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto; margin-top: 50px !important;">
        <table class="table table-success" style="border: none;">
          <thead style="background: rgb(36, 37, 38); color: #fff;">
            <tr style="border: none;">
              <td>
                Item
              </td>
              <td>
                Precio unitario
              </td>
              <td>
                Cantidad
              </td>
            </tr>
          </thead>
          <tbody class="table-info">
            <tr>
              <td>
                Shorts
              </td>
              <td>
                $<?php echo intval($precios->cam_short - $precios->cam) ?>
              </td>
              <td class="cantidad_shorts">0</td>
            </tr>
			<tr>
              <td>
                Medias
              </td>
              <td>
                $<?php echo intval($precios->cam_media - $precios->cam) ?>
              </td>
              <td class="cantidad_medias">0</td>
            </tr>
            <tr style="background: rgb(245, 245, 245);">
              <td>
                Camisetas
              </td>
              <td>
                $<?php echo intval($precios->cam) ?>
              </td>
              <td class="cantidad_camisetas">0</td>
            </tr>
          </tbody>
          <tfoot class="table-secondary">
            <tr>
              <td style="text-align: right; font-weight: bold;">Precio total</td>
              <td style="font-weight: bold;">$<span class="precio_total"></span></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
    </div>

  <div style="text-align: center; margin-bottom: 0px; padding: 0px 30px;"><p>Se debe cumplir por lo menos alguna de las condiciones mínimas: <BR>Mínimo de camisetas (<?php echo $minCamisetas ?>). Mínimo de shorts+medias (<?php echo $minShorts ?>).</p></div>
	<div style="text-align: center; margin-bottom: 0px; padding: 0px 30px;"><p><?=$precios->descuento?>% de descuento superando $<?=$precios->desc_cantidad?></p></div>
	<div style="text-align: center; margin-bottom: 0px; padding: 0px 30px;"><p><?=$precios->descuento2?>% de descuento superando $<?=$precios->desc_cantidad2?></p></div>
	<div style="text-align: center; margin-bottom: 0px; padding: 0px 30px;" class="costoConDescuento hidden">
		<p>Descuento por cantidad:</td><td style="padding-left: 20px;"><span class="descuentoAplic"></span></p>
		<p><b>Precio c/Descuento:</b></td><td><b>$ <span class="precioTotalD"></span></b></p>
	</div>
	<div style="text-align: center; margin-bottom: 40px; padding: 0px 30px;"><p>Tiempo de entrega: <?=$param_tiempo_entrega->valor + $param_demora->valor?> días</p></div>

    <div id="datos_pedido">
      <div style="width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto; margin-top: 50px;">
        <div>
			<label for="nombre_apellido">Nombre y apellido</label>
			<input type="text" id="nombre_apellido" name="nombre_apellido" class="form-control mb-3" placeholder="Ej: Juan Pérez" required>
		
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control mb-3" placeholder="Ej: usuario@email.com" required>

          <label for="telefono_pedido">Teléfono de contacto</label>
          <input type="text" id="telefono_pedido" name="telefono_pedido" class="form-control" placeholder="Ej: 1122223333" required>
        </div>

        <div>
          <label for="comentarios">Comentarios</label>
          <textarea type="textarea" rows="4" id="comentarios" name="comentarios" class="form-control" placeholder="Comentarios importantes sobre el pedido"></textarea>
        </div>
      </div>

      <div style="display: flex;align-items: center; flex-direction: column; justify-content: space-between;">
        <a href="#" style="cursor: pointer;" class="btn btn-mobile btn-volver btn-anterior" onclick="verTalles('<?php echo $genero ?>')">Ver talles</a>
      </div>

      <fieldset id="listado_conjuntos" class="col-sm-12" style="display: none; width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;">
        <legend class="small legend-title">Conjuntos</legend>
      </fieldset>
      <fieldset id="listado_camisetas" class="col-sm-12" style="display: none; width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;">
        <legend class="small">Camisetas</legend>
      </fieldset>
      <fieldset id="listado_shorts" class="col-sm-12" style="display: none; width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;">
        <legend class="small">Shorts + Medias</legend>
      </fieldset>

		<div style="width: 90%; margin: 10px auto;">
			<button type="button" class="col-auto btn btn-iniciado btn-agregar-conjunto" onclick="addConjunto()">+ Agregar conjunto</button>
			<button type="button" class="col-auto btn btn-iniciado btn-agregar-camiseta" onclick="addCamiseta()">+ Agregar camiseta</button>
			<button type="button" class="col-auto btn btn-iniciado btn-agregar-short" onclick="addShort()">+ Agregar short+medias</button>
		</div>
      
      <div style="text-align: center; margin: 40px 30px 0px 30px">
        <h3>Imágenes para agregar sobre las camisetas:</h3>
      </div>
      <div class="add_images">
        <div class="add_images_box">
          
          <div class="col-xs-12">
            <div class="row" id="rows_escudo">
              <script>var tieneImagenEscudo = false;</script>
              <?php
              if(!empty($imagenes)){
                foreach($imagenes as $imagen){
                  if($imagen['tipo'] == 'escudo' && $imagen['active'] == 1){
                ?>
                  <script>tieneImagenEscudo = true;</script>
                  <div class="col-xs-6 imagen_escudo div-img-<?php echo $imagen['id'] ?>">
                    <div class="img-thumbnail img-upload">
                      <a download="<?php echo $imagen['nombre_archivo'] ?>" href="data:image/png;base64, <?php echo $imagen['archivo'] ?>">
                        <img height="200px" width="200px" src="data:image;base64, <?php echo $imagen['archivo'] ?>"/>
                      </a>
                      <div class="img-trash">
                        <i class="bi bi-trash" style="color:#000; cursor: pointer;" onclick="deleteImage(<?php echo $imagen['id'] ?>, 'escudo')"></i>
                        <span>Posición: <?php echo $imagen['posicion'] ?></span>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                }
              }
              ?>
            </div>
          </div>

          <div class="card-body">
            <h5 class="card-title">Escudo</h5>
            <p class="card-text">Puede adjuntar un archivo de imagen del escudo para colocar en las camisetas.</p>
            
            <div class="row">
              <label class="input-group-text" for="escudo">Escudo</label>
              <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg" name="escudo" id="escudo" onchange="loadImageFile(this);">
            </div>

            <center><img style="display: none;" id="preview_escudo" width="100" height="100"/></center>
            
            <div class="form-floating mt-1">
              <select class="form-select" id="posicion_escudo" name="posicion_escudo" aria-label="talle">
                <option value="" selected>Posición</option>
                <option value="centro">Centro</option>
                <option value="izquierda">Corazón</option>
              </select>
            </div>

          </div>
        </div>

        <div class="add_images_box">
          
          <div class="col-xs-12">
            <div class="row" id="rows_extra">
              <script>var tieneImagenExtra = false;</script>
              <?php
              if(!empty($imagenes)){
                foreach($imagenes as $imagen){
                  if($imagen['tipo'] == 'extra' && $imagen['active'] == 1){
                ?>
                  <script>tieneImagenExtra = true;</script>
                  <div class="col-xs-6 imagen_extra div-img-<?php echo $imagen['id'] ?>">
                    <div class="img-thumbnail img-upload">
                      <a download="<?php echo $imagen['nombre_archivo'] ?>" href="data:image/png;base64, <?php echo $imagen['archivo'] ?>">
                        <img height="200px" width="200px" src="data:image;base64, <?php echo $imagen['archivo'] ?>"/>
                      </a>
                      <div class="img-trash">
                        <i class="bi bi-trash" style="color:#000; cursor: pointer;" onclick="deleteImage(<?php echo $imagen['id'] ?>, 'extra')"></i>
                        <span>Posición: <?php echo $imagen['posicion'] ?></span>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                }
              }
              ?>
            </div>
          </div>
          
          <div class="card-body">
            <h5 class="card-title">Publicidad</h5>
            <p class="card-text">Puede adjuntar un archivo de imagen de publicidad para colocar en las camisetas.</p>
            
            <div class="row">
              <label class="input-group-text" for="extra">Publicidad</label>
              <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg" name="extra" id="extra" onchange="loadImageFile(this);">
            </div>

            <center><img style="display: none;" id="preview_extra" width="100" height="100"/></center>
            
            <div class="form-floating mt-1">
              <select class="form-select" id="posicion_extra" name="posicion_extra" aria-label="talle">
                <option value="" selected>Posición</option>
                <option value="frente">Frente</option>
                <option value="espalda">Espalda</option>
                <option value="manga_izquierda">Manga izquierda</option>
                <option value="manga_derecha">Manga derecha</option>
              </select>
            </div>

          </div>
        </div>

      </div>

		<div style="width: 90%; margin: 10px auto; display: flex;">
			<button id="btn_metodos_pago" type="submit" class="col-auto btn btn-primary btn-iniciado" style="margin-right: 15px;" onclick="javascript:enviaEmail = true; metodosPago = true;">Comprar</button>
			<div id="loading_btn_enviar" class="hidden"><i class="fa fa-spinner fa-spin"></i> procesando...</div>
			<button id="btn_enviar" type="submit" class="col-auto btn btn-info btn-iniciado" style="margin-right: 15px;" onclick="javascript:enviaEmail = true; metodosPago = false;">Enviar consulta</button>
			<button type="button" onclick="return mostrarPersonalizador()" class="btn btn-volver btn-anterior">Volver al personalizador</button>
		</div>

		<div style="display: flex; flex-wrap: wrap; margin-top: 50px;" id="metodos_pago" class="hidden">
			<p id="btn_mp" style="width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;" onclick="$('#metodo_pago_acordar').css({'display': 'none'}); $('#metodo_pago_transferencia').css({'display': 'none'}); solicitarMercadoPago();" style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: flex; align-items: center; visibility: visible;">
				<img src="./common/img/logomercadopago.jpg" alt="MercadoPago" style="width: 150px; height: 70px;">
				<span style="margin-left: 5px;">Tarjetas de crédito, débito y otros medios</span>
			</p>
			<p style="width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;" onclick="$('#metodo_pago_acordar').css({'display': 'none'}); $('#metodo_pago_transferencia').css({'display': 'block'});" style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
				<img src="./common/img/logotransferenciabancaria.png" alt="" style="width: 150px; height: 70px;">
				<span style="margin-left: 5px;">Transferencia bancaria (10% de descuento)</span>
			</p>
			<div id="metodo_pago_transferencia" style="display: none; text-align: left; padding: 10px; margin: 0px 10% 20px;">
				<p>BANCO GALICIA</p>
				<p>CAJA DE AHORRO</p>
				<p>Cuenta Nro.: 4022203-8 056-1</p>
				<p>CBU: 0070056630004022203815</p>
				<p>Nombre: REDONDO LISANDRO SEBASTIAN</p>
				<p>CUIT: 20-27746296-7</p>
			</div>
			<p></p>
			<p style="width: 90%; border: 1px solid #ccc; padding: 10px; margin: 10px auto;" onclick="$('#metodo_pago_transferencia').css({'display': 'none'}); $('#metodo_pago_acordar').css({'display': 'block'});" style="cursor: pointer; text-align: left; border: 1px solid; padding: 5px; display: -webkit-flex; display: flex; align-items: center;">
				<img src="./common/img/logootraformadepago.png" alt="" style="margin-right: 50px; width: 100px; height: 70px;">
				<span style="margin-left: 5px;">Consultar por otros descuentos y formas de pago</span>
			</p>
			<div id="metodo_pago_acordar" style="display: none; text-align: left; padding: 10px; margin: 10px auto;">
					Nos estaremos contactando.
			</div>
			<p></p>
		</div>

    </div>    
  </form>
</div>

<div style="display: none" id="divConjunto">
  <div class="content-form conjunto">
    <input type="hidden" class="id_input">
    <div>
      <input type="text" class="form-control representante_input hidden" placeholder="Representante" >
    </div>
    <div>
      <input type="text" class="form-control nombre_input" placeholder="Nombre">
    </div>
    <div>
      <input type="number" class="form-control numero_input" placeholder="Nro." required>
    </div>
    
    <div>
      <select class="form-select talle_camiseta_input" aria-label="talle" required>
        <option value="" selected>Talle camiseta</option>
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        <option value="XXXL">XXXL</option>
      </select>
    </div>
    
    <div>
      <select class="form-select talle_short_input" aria-label="talle" required>
        <option value="" selected>Talle short</option>
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        <option value="XXXL">XXXL</option>
      </select>
    </div>

    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
        <div style="display: flex; justify-content: center; align-items: center;" class="switch_arquero">
          <div>
            <label class="switch">
              <input class="form-check-input arquero_input" type="checkbox">
              <span class="slider round"></span>
            </label><br>
            <span style="font-family: 'Montserrat'; font-size:11px;">arquero</span>
          </div>
        </div>

      <div style="display: flex; justify-content: center; align-items: center;">
        <i class="fas fa-trash-alt" style="cursor: pointer; color: darkred; margin-top: 4%;" onclick="deleteElement(this, 'conjunto')"></i>
      </div>
    </div>

  </div>
</div>

<div style="display: none" id="divCamiseta">
  <div class="content-form camiseta">
    <input type="hidden" class="id_input">
    <div>
      <input type="text" class="form-control representante_input hidden" placeholder="Representante" >
    </div>
    <div>
      <input type="text" class="form-control nombre_input" placeholder="Nombre">
    </div>
    <div>
      <input type="number" class="form-control numero_input" placeholder="Nro." required>
    </div>
    
    <div>
      <select class="form-select talle_camiseta_input" aria-label="talle" required>
        <option value="" selected>Talle</option>
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        <option value="XXXL">XXXL</option>
      </select>
    </div>
    
    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
        <div style="display: flex; justify-content: center; align-items: center;" class="switch_arquero">
          <div>
            <label class="switch">
              <input class="form-check-input arquero_input" type="checkbox">
              <span class="slider round"></span>
            </label><br>
            <span style="font-family: 'Montserrat'; font-size:11px;">arquero</span>
          </div>
        </div>

      <div style="display: flex; justify-content: center; align-items: center;">
        <i class="fas fa-trash-alt col-sm-1 text-center" style="cursor: pointer; color: darkred; margin-top: 4%;" onclick="deleteElement(this, 'camiseta')"></i>
      </div>
    </div>

  </div>
</div>

<div style="display: none" id="divShort">
  <div class="content-form short">
    <input type="hidden" class="id_input">
    <div>
      <input type="text" class="form-control representante_input hidden" placeholder="Representante" >
    </div>
    <div>
      <input type="text" class="form-control nombre_input" placeholder="Nombre">
    </div>
    <div>
      <input type="number" class="form-control numero_input" placeholder="Nro." required>
    </div>
    
    <div>
      <select class="form-select talle_short_input" aria-label="talle" required>
        <option value="" selected>Talle</option>
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        <option value="XXXL">XXXL</option>
      </select>
    </div>

    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
        <div style="display: flex; justify-content: center; align-items: center;" class="switch_arquero">
          <div>
            <label class="switch">
              <input class="form-check-input arquero_input" type="checkbox">
              <span class="slider round"></span>
            </label><br>
            <span style="font-family: 'Montserrat'; font-size:11px;">arquero</span>
          </div>
        </div>

      <div style="display: flex; justify-content: center; align-items: center;">
        <i class="fas fa-trash-alt" style="cursor: pointer; color: darkred; margin-top: 4%;" onclick="deleteElement(this, 'shorts')"></i>
      </div>
    </div>

  </div>
</div>

<?php
	include('footer.php');
?>

<script>
window.addEventListener('popstate', function(event) {
  if(!$('#personalizador').is(":visible"))
    return mostrarPersonalizador()
  history.back()
});
history.pushState({ page: 1 }, "", "");
</script>