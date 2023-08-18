var genero = null;
var cantidadDeJugadoresMb = null;
var precioConjunto = null;
var costoTotal = null;
var cantidadDeArquerosMb = null;
var precioArquero = null;
var esConjunto = null;
var d1 = null;
var d1c = null;
var d2 = null;
var d2c = null;
var mostrarListaDeArqueros = null;

$( document ).ready( function(){
/* MOBILE */
	genero = document.getElementById('script_mobile_js').getAttribute("genero");
	
	$('.precioCamiseta').html($('#precio_camiseta').val());
	$('.precioShort').html($('#precio_short').val());
	$('.precioMedia').html($('#precio_media').val());

	d1 = parseInt($('#d1').val());
	d1c = parseInt($('#d1c').val());
	d2 = parseInt($('#d2').val());
	d2c = parseInt($('#d2c').val());

	calcularPrecioMobile()
	updateTotalBoxMb();

	mostrarListaDeArqueros = false;

	$('.box_precio_shorts').css('display', 'none');
	$('.box_precio_medias').css('display', 'none');

	//inicializo los colores mobile:
	$('#option_color_base_mb').val(4)
	$('#option_color_principal_mb').val(14)
	// $('#option_color_secundario_mb').val(9)
	$('#color_principal_mb_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_base_mb_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	// $('#color_base_mb_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
	// $('#color_principal_mb_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

	$('#option_color_base_arq_mb').val(4)
	$('#option_color_principal_arq_mb').val(14)
	// $('#option_color_secundario_arq_mb').val(9)
	$('#color_principal_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_base_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');
	// $('#color_base_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');
	// $('#color_principal_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');
});

function calcularPrecioMobile() {
	var precio;

	if($('#nav_options_camisetas').is(':visible')){
		precio = $('#precio_camiseta').val()
	}else if($('#nav_options_camisetas_arquero').is(':visible')){
		precio = $('#precio_camiseta').val()
	}else if($('#nav_options_short').is(':visible')){
		precio = $('#precio_short').val()
	}else if($('#nav_options_short_arquero').is(':visible')){
		precio = $('#precio_short').val()
	}else if($('#nav_options_medias').is(':visible')){
		precio = $('#precio_media').val()
	}

	$('.cantCamisetas').html(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val()));
	$('.cantShort').html(parseInt($('#hCantShorts').val()) + parseInt($('#hCantShortsArqueros').val()));

	$('#btn_precio_mb').removeClass('option_disable_mb');
	$('#btn_precio_mb').addClass('option_select_mb');
	$('#hPrecio').val(precio);
	$('#tabPrecioMobile').html("$ "+ precio);
	precioConjunto = precio;
}


function updateTotalBoxMb() {
	$('#precioConjuntoMb').html(precioConjunto);
	
	costoTotal = parseInt($('#hCantShorts').val()) * parseInt($('#precio_short').val()) + 
				parseInt($('#hCantShortsArqueros').val()) * parseInt($('#precio_short').val()) + 
				(parseInt($('#hCantShortsArqueros').val()) + parseInt($('#hCantShorts').val())) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on_mb').val()) + 
				(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val())) * parseInt($('#precio_camiseta').val());

	//DESCUENTO:
	if(costoTotal >= d2c) {
		costoTotalDesc = costoTotal * (1 - (d2/100));
		$('.descuentoAplicMb').html(d2 + "%");
		$('.costoConDescuentoMb').css("visibility", "visible");
	} else if(costoTotal >= d1c && costoTotal < d2c) {
		costoTotalDesc = costoTotal * (1 - (d1/100));
		$('.descuentoAplicMb').html(d1 + "%");
		$('.costoConDescuentoMb').css("visibility", "visible");
	} else {
		costoTotalDesc = costoTotal;
		$('.descuentoAplicMb').html(0);
		$('.costoConDescuentoMb').css("visibility", "hidden");
	}

	$('#precioTotalMb').html(parseFloat(costoTotal.toFixed(2)));
	$('#precioTotalDMb').html(parseFloat(costoTotalDesc.toFixed(2)));
	$('#hTotal').val(parseFloat(costoTotal.toFixed(2)));
}

/* CAMISETAS */
$('#btn_estampado_mb').click( function(){

	volverDefault();

	$('#option_estampados').css('display', 'block');

	$(this).find(".txt_btn_mb").css('color', '#3096fe');

	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');

});

$('#btn_estampado_arquero_mb').click( function(){

	volverDefault();

	$('#option_estampados_arquero').css('display', 'block');

	$(this).find(".txt_btn_mb").css('color', '#3096fe');

	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');

});

$('#btn_colores_mb').click( function(){
	volverDefault();
	$('#option_colores').css('display', 'block');
	$(this).find(".txt_btn_mb").css('color', '#3096fe');
	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');
});

$('#btn_colores_arquero_mb').click( function(){
	volverDefault();
	$('#option_colores_arquero').css('display', 'block');
	$(this).find(".txt_btn_mb").css('color', '#3096fe');
	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');
});

$('#btn_numeros_mb').click( function(){
	volverDefault();
	$('#option_numeros').css('display', 'block');
	$(this).find(".txt_btn_mb").css('color', '#3096fe');
	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');
});

$('#btn_numeros_arquero_mb').click( function(){
	volverDefault();
	$('#option_numeros_arquero').css('display', 'block');
	$(this).find(".txt_btn_mb").css('color', '#3096fe');
	$(this).find(".img_default").css('display', 'none');
	$(this).find(".img_hover").css('display', 'inline');
});

$('.btn_close').click( function(){
	volverDefault();
});

function volverDefault(){
	$('#option_estampados').css('display', 'none');
	$('#option_colores').css('display', 'none');
	$('#option_numeros').css('display', 'none');
	$('#option_estampados_arquero').css('display', 'none');
	$('#option_colores_arquero').css('display', 'none');
	$('#option_numeros_arquero').css('display', 'none');
	$('.img_default').css('display', 'inline');
	$('.img_hover').css('display', 'none');		
	$('.txt_btn_mb').css('color', '#a9a9a9');
}

/* SHORTS */

$('#btn_estampado_short_mb').click( function(){

	volverDefaultShort();

	$('#option_estampados_short').css('display', 'block');

	$(this).find(".txt_btn_short_mb").css('color', '#3096fe');

	$(this).find(".img_default_short").css('display', 'none');
	$(this).find(".img_hover_short").css('display', 'inline');

});

$('#btn_colores_short_mb').click( function(){

	volverDefaultShort();

	$('#option_colores_short').css('display', 'block');

	$(this).find(".txt_btn_short_mb").css('color', '#3096fe');

	$(this).find(".img_default_short").css('display', 'none');
	$(this).find(".img_hover_short").css('display', 'inline');

});

$('.btn_close_short').click( function(){

	volverDefaultShort();

});

function volverDefaultShort(){
	$('#option_estampados_short').css('display', 'none');
	$('#option_estampados_short_arquero').css('display', 'none');
	$('#option_colores_short_arquero').css('display', 'none');
	$('#option_colores_short').css('display', 'none');
	$('.img_default_short').css('display', 'inline');
	$('.img_hover_short').css('display', 'none');		
	$('.txt_btn_short_mb').css('color', '#a9a9a9');
}

/* SHORTS ARQUERO */

$('#btn_estampado_short_arquero_mb').click( function(){

	volverDefaultShortArquero();

	$('#option_estampados_short_arquero').css('display', 'block');

	$(this).find(".txt_btn_short_arquero_mb").css('color', '#3096fe');

	$(this).find(".img_default_short_arquero").css('display', 'none');
	$(this).find(".img_hover_short_arquero").css('display', 'inline');

});

$('#btn_colores_short_arquero_mb').click( function(){

	volverDefaultShortArquero();

	$('#option_colores_short_arquero').css('display', 'block');

	$(this).find(".txt_btn_short_arquero_mb").css('color', '#3096fe');

	$(this).find(".img_default_short_arquero").css('display', 'none');
	$(this).find(".img_hover_short_arquero").css('display', 'inline');

});

$('.btn_close_short_arquero').click( function(){

	volverDefaultShortArquero();

});

function volverDefaultShortArquero(){
	$('#option_estampados_short').css('display', 'none');
	$('#option_estampados_short_arquero').css('display', 'none');
	$('#option_colores_short').css('display', 'none');
	$('#option_colores_short_arquero').css('display', 'none');
	$('.img_default_short').css('display', 'inline');
	$('.img_hover_short').css('display', 'none');		
	$('.txt_btn_short_mb').css('color', '#a9a9a9');
}

/* MEDIAS */
$('#btn_colores_medias_mb').click( function(){
	volverDefaultMedias();
	$('#option_colores_medias').css('display', 'block');
	$(this).find(".txt_btn_medias_mb").css('color', '#3096fe');
	$(this).find(".img_default_medias").css('display', 'none');
	$(this).find(".img_hover_medias").css('display', 'inline');
});

$('.btn_close_medias').click( function(){
	volverDefaultMedias();
});

function volverDefaultMedias(){
	$('#option_colores_medias').css('display', 'none');
	$('.img_default_medias').css('display', 'inline');
	$('.img_hover_medias').css('display', 'none');		
	$('.txt_btn_medias_mb').css('color', '#a9a9a9');
}


/* BTN VER BACK MOBILE */

var frente = true;

$('#btn_mb_back').click( function(){

	$(this).toggleClass( 'btn_mb_back_sel' );
	$('.preview_front_mb').toggle();
	$('.preview_back_mb').toggle();

});

/* BTN PRECIO Y ENTREGA */

$('#btn_mb_precio').click( function(){

	$('#content_base_mb').fadeOut( "fast", function() {
		   $('#precio_entrega').fadeIn();
	 });		

});

/* BTN CLOSE PRECIO Y ENTREGA */

$('.btn_close_precio_entrega').click( function(){

	$('#precio_entrega').fadeOut( "fast", function() {
		   $('#content_base_mb').fadeIn();
	 });	

});


/* NAV JUGADOR - ARQUERO - SHORTS - MEDIAS MOBILE */
// JUGADOR
$('#btn_modelo_jugador_mb').click( function(){

	$('.titular_mb ul li img').css('display', 'none');
	$('.img_jugador_over_mb').css('display', 'inline');
	$('.img_arquero_mb').css('display', 'inline');
	$('.img_short_mb').css('display', 'inline');
	$('.img_medias_mb').css('display', 'inline');
	$('.img_short_arquero_mb').css('display', 'inline');

	$('.nav_jug_arq_mb li').removeClass('option_select_mb');
	$('.nav_jug_arq_mb li').addClass('option_disable_mb');
	$(this).removeClass('option_disable_mb');
	$(this).addClass('option_select_mb');

	var precioCamiseta = $('#precio_camiseta').val();
	// $('#tabPrecioMobile').html("$ "+ precioCamiseta);
	$('#btn_precio_mb').css('display', 'block');
	$('#btn_precio_mb').css('visibility', 'visible');
	$('#btn_precio_mb').addClass('option_select_mb');
	$('#btn_precio_mb').removeClass('option_disable_mb');


	$('#nav_options_camisetas').css('display', 'block');
	$('#nav_options_camisetas_arquero').css('display', 'none');
	$('#nav_options_short').css('display', 'none');
	$('#nav_options_medias').css('display', 'none');
	$('#nav_options_short_arquero').css('display', 'none');

	vistaArquero = false;

	updateVistaMb("jugador", secundario, secundario_no_espalda);

	volverDefault();

	// switch
	$('#switch_si_no_arquero_mb').css('display', 'none');
	$('.preview_arquero_mb .preview_front_mb').removeClass('preview_arquero_mb');
	$('.preview_arquero_mb .preview_back_mb').removeClass('preview_arquero_mb');
	$('.overlay_mb').css('display', 'none');

	calcularPrecioMobile();
});

$('#btn_modelo_arquero_mb').click( function(){

	$('.titular_mb ul li img').css('display', 'none');
	$('.img_arquero_over_mb').css('display', 'inline');
	$('.img_jugador_mb').css('display', 'inline');
	$('.img_short_mb').css('display', 'inline');
	$('.img_medias_mb').css('display', 'inline');
	$('.img_short_arquero_mb').css('display', 'inline');

	$('.nav_jug_arq_mb li').removeClass('option_select_mb');
	$('.nav_jug_arq_mb li').addClass('option_disable_mb');
	$(this).removeClass('option_disable_mb');
	$(this).addClass('option_select_mb');

	$('#btn_precio_mb').addClass('option_select_mb');
	$('#btn_precio_mb').removeClass('option_disable_mb');
	$('#btn_precio_mb').css('visibility', 'visible');

	var precioArquero = $('#precio_arquero').val();
	// $('#tabPrecioMobile').html("$ "+ precioArquero);
	$('#btn_precio_mb').css('display', 'block');


	$('#nav_options_camisetas_arquero').css('display', 'block');
	$('#nav_options_camisetas').css('display', 'none');
	$('#nav_options_short').css('display', 'none');
	$('#nav_options_medias').css('display', 'none');
	$('#nav_options_short_arquero').css('display', 'none');

	vistaArquero = true;

	updateVistaMb("arquero", secundario, secundario_no_espalda);

	volverDefault();

	// switch
	$('#switch_si_no_arquero_mb').css('display', 'block');
	$('.preview_arquero_mb .preview_front_mb').addClass('preview_arquero_mb');
	$('.preview_arquero_mb .preview_back_mb').addClass('preview_arquero_mb');
	if( $('#option_arq_on_mb').val() == 1 ){
		$('.overlay_mb').css('display', 'none');
	}else{
		$('.overlay_mb').css('display', 'block');
	}

	calcularPrecioMobile();
});

$('#btn_short_mb').click( function(){

	$('.titular_mb ul li img').css('display', 'none');
	$('.img_short_over_mb').css('display', 'inline');
	$('.img_arquero_mb').css('display', 'inline');
	$('.img_jugador_mb').css('display', 'inline');
	$('.img_medias_mb').css('display', 'inline');
	$('.img_short_arquero_mb').css('display', 'inline');

	$('.nav_jug_arq_mb li').removeClass('option_select_mb');
	$('.nav_jug_arq_mb li').addClass('option_disable_mb');
	$(this).removeClass('option_disable_mb');
	$(this).addClass('option_select_mb');

	$('#nav_options_camisetas_arquero').css('display', 'none');
	$('#nav_options_camisetas').css('display', 'none');
	$('#nav_options_short').css('display', 'block');
	$('#nav_options_medias').css('display', 'none');
	$('#nav_options_short_arquero').css('display', 'none');

	if(genero != 'chombas'){
		calcularPrecioMobile();
	}

	updateVistaShortMb();

	volverDefault();

	// swtich
	$('#switch_si_no_arquero_mb').css('display', 'none');
	if( $('#option_short_on_mb').val() == 1 ){
		$('.overlay_mb').css('display', 'none');
	}else{
		$('.overlay_mb').css('display', 'block');
	}

	calcularPrecioMobile();
});

$('#btn_short_arquero_mb').click( function(){

	$('.titular_mb ul li img').css('display', 'none');
	$('.img_short_mb').css('display', 'inline');
	$('.img_arquero_mb').css('display', 'inline');
	$('.img_jugador_mb').css('display', 'inline');
	$('.img_medias_mb').css('display', 'inline');
	$('.img_short_arquero_over_mb').css('display', 'inline');
	
	$('.nav_jug_arq_mb li').removeClass('option_select_mb');
	$('.nav_jug_arq_mb li').addClass('option_disable_mb');
	$(this).removeClass('option_disable_mb');
	$(this).addClass('option_select_mb');

	$('#nav_options_camisetas_arquero').css('display', 'none');
	$('#nav_options_camisetas').css('display', 'none');
	$('#nav_options_short').css('display', 'none');
	$('#nav_options_short_arquero').css('display', 'block');
	$('#nav_options_medias').css('display', 'none');

	if(genero != 'chombas'){
		calcularPrecioMobile();
	}

	updateVistaShortArqueroMb();

	volverDefault();

	// swtich
	$('#switch_si_no_arquero_mb').css('display', 'none');
	if( $('#option_short_on_mb').val() == 1 ){
		$('.overlay_mb').css('display', 'none');
	}else{
		$('.overlay_mb').css('display', 'block');
	}

	calcularPrecioMobile();
});

$('#btn_medias_mb').click( function(){

	$('.titular_mb ul li img').css('display', 'none');
	$('.img_medias_over_mb').css('display', 'inline');
	$('.img_arquero_mb').css('display', 'inline');
	$('.img_jugador_mb').css('display', 'inline');
	$('.img_short_mb').css('display', 'inline');
	$('.img_short_arquero_mb').css('display', 'inline');

	$('.nav_jug_arq_mb li').removeClass('option_select_mb');
	$('.nav_jug_arq_mb li').addClass('option_disable_mb');
	$(this).removeClass('option_disable_mb');
	$(this).addClass('option_select_mb');

	$('#nav_options_camisetas').css('display', 'none');
	$('#nav_options_camisetas_arquero').css('display', 'none');
	$('#nav_options_short_arquero').css('display', 'none');
	$('#nav_options_short').css('display', 'none');
	$('#nav_options_medias').css('display', 'block');

	updateVistaMediasMb();

	volverDefault();

	// swtich
	$('#switch_si_no_arquero_mb').css('display', 'none');
	if( $('#option_medias_on_mb').val() == 1 ){
		$('.overlay_mb').css('display', 'none');
	}else{
		$('.overlay_mb').css('display', 'block');
	}
	calcularPrecioMobile();
});


/* SWITCH INCLUIR DISEÑO SI / NO */

$('#option_switch_arquero_mb').change(function(){
	if(this.checked) { // habilito opcion
		$('#option_arq_on_mb').val(1);
		$('.preview_arquero_mb .preview_front_mb').css('opacity', 1);
		$('.preview_arquero_mb img').css('opacity', 1);
		$('.overlay_mb').css('display', 'none');

		//$('#box_box_arqueros_mb').css('display', 'block !important');
		mostrarListaDeArqueros = true;
		
		if($('#option_camiseta_on').val() == 0){
			$('#hCantArqueros').val($('#minCamisetas').html());
			cantidadDeArquerosMb = $('#minCamisetas').html();
		}
	} else {  // deshabilito opcion

		$('#option_arq_on_mb').val(0);
		// $('.preview_arquero_mb .preview_front_mb').css('opacity', 0.4);
		$('.preview_arquero_mb img').css('opacity', 0.4);
		$('.overlay_mb').css('display', 'block');
		volverDefault();

		// $('#box_box_arqueros_mb').css('display', 'none');
		mostrarListaDeArqueros = false;
		$('#hCantArqueros').val(0);
		cantidadDeArquerosMb = 0;
	}
	calcularPrecioMobile();
});

$('#option_switch_camiseta_mb').change(function(){
	if(this.checked) { // habilito opcion
		$('#option_camiseta_on_mb').val(1);
		$('.preview_mb img').css('opacity', 1);
		$('.overlay_mb').css('display', 'none');

		$('#hCantCamisetas').val($('#minCamisetas').html());
		if($('#option_arq_on_mb').val() == 1){
			$('#hCantArqueros').val(0);
		}
	} else {  // deshabilito opcion

		$('#option_camiseta_on_mb').val(0);

		$('.preview_mb img').css('opacity', 0.4);
		$('.overlay_mb').css('display', 'block');
		volverDefault();

		$('#hCantCamisetas').val(0);
	}
	calcularPrecioMobile();
});

$('#option_switch_short_arquero_mb').change(function(){
	if(this.checked) {
		$('#option_short_arquero_on_mb').val(1);

		$('.preview_short_arquero_mb img').css('opacity', 1);
		$('.overlay_mb').css('display', 'none');
		$('.vista_modelo_short_arquero_mb').css('display', 'inline');
		$(".vista_nombre").css("width", "135px");
		$('.box_precio_shorts').css('display', 'table-row');
		$('.box_arqueros_mb').css('display', 'block');
		
		if($('#option_medias_on_mb').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}

		$('.vista_modelo_short_arquero').css('display', 'inline');

		if($('#option_short_on_mb').val() == 0){
			$('#hCantShortsArqueros').val($('#minShorts').html());
		}
	} else {
		$('#option_short_arquero_on_mb').val(0);

		$('.preview_short_arquero_mb img').css('opacity', 0.4);
		$('.overlay_mb').css('display', 'block');
		$('.vista_modelo_short_arquero_mb').css('display', 'none');
		$(".vista_nombre").css("width", "210px");
		$('.box_precio_shorts').css('display', 'none');
		$('.box_precio_medias').css('display', 'none');
		
		if($('#option_arq_on_mb').val() == 0){
			$('.box_arqueros_mb').css('display', 'none');
		}

		$('.vista_modelo_short_arquero').css('display', 'none');
		
		$('#hCantShortsArqueros').val(0);

		volverDefault();
	}
	calcularPrecioMobile();
});

$('#option_switch_short_mb').change(function(){
	if(this.checked) {
		$('#option_short_on_mb').val(1);

		$('.preview_short_mb img').css('opacity', 1);
		$('.overlay_mb').css('display', 'none');
		$('.vista_modelo_short_mb').css('display', 'inline');
		$(".vista_nombre").css("width", "135px");
		$('.box_precio_shorts').css('display', 'table-row');

		if($('#option_medias_on_mb').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}

		$('.box_jugadores_mb').css('display', 'block');

		$('#hCantShorts').val($('#minShorts').html());

		if($('#option_short_arquero_on_mb').val() == 1){
			$('#hCantShortsArqueros').val(0);
		}
	} else {
		$('#option_short_on_mb').val(0);

		$('.preview_short_mb img').css('opacity', 0.4);
		$('.overlay_mb').css('display', 'block');
		$('.vista_modelo_short_mb').css('display', 'none');
		$(".vista_nombre").css("width", "210px");
		$('.box_precio_medias').css('display', 'none');
		$('.box_precio_shorts').css('display', 'none');

		$('#hCantShorts').val(0);

		volverDefault();
	}
	calcularPrecioMobile();
});

$('#option_switch_medias_mb').change(function(){

	if(this.checked) {
		$('#option_medias_on_mb').val(1);
		$('.preview_medias_mb img').css('opacity', 1);
		$('.overlay_mb').css('display', 'none');
		
		if($('#option_short_on_mb').val() == 1 || $('#option_short_arquero_on_mb').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}
	} else {
		$('#option_medias_on_mb').val(0);
		$('.preview_medias_mb img').css('opacity', 0.4);
		$('.overlay_mb').css('display', 'block');
		$('.box_precio_medias').css('display', 'none');

		volverDefault();
	}
	calcularPrecioMobile();
});


/* SELECT DISENO MOBILE - CAMISETAS */
$('.sel_diseno_mb').click( function(){
	var option = this.id.split("diseno_mb_");
	var opt_diseno = option[1];

	updateDisenoMb("jugador", opt_diseno, secundario, secundario_no_espalda);

	// Pintar borde del seleccionado
	$('.sel_diseno_mb').removeClass("selected_mb");

	$(this).addClass("selected_mb");

	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo
	if( principal[opt_diseno] ){
		$('#color_principal_tit_mb').css('display', 'block');

	}else{
		 $('#color_principal_tit_mb').css('display', 'none');
	}

	if( secundario[opt_diseno] ){
		$('#color_secundario_tit_mb').css('display', 'block');
	}else{
		 $('#color_secundario_tit_mb').css('display', 'none');
	}

	// Oculto todos los paneles de colores y vuelvo todos los colores a deseleccionado
	$('.panel').css('display', 'none');
	$('#accordion span').css('color', '#8a8a8a');
});

$('.sel_diseno_arquero_mb').click( function(){
	var option = this.id.split("diseno_arquero_mb_");
	var opt_diseno = option[1];

	updateDisenoMb("arquero", opt_diseno, secundario, secundario_no_espalda);

	// Pintar borde del seleccionado
	$('.sel_diseno_arquero_mb').removeClass("selected_mb");

	$(this).addClass("selected_mb");

	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo
	if( principal[opt_diseno] ){
		$('#color_principal_tit_arquero_mb').css('display', 'block');

	}else{
		 $('#color_principal_tit_arquero_mb').css('display', 'none');
	}

	if( secundario[opt_diseno] ){
		$('#color_secundario_tit_arquero_mb').css('display', 'block');
	}else{
		 $('#color_secundario_tit_arquero_mb').css('display', 'none');
	}

	// Oculto todos los paneles de colores y vuelvo todos los colores a deseleccionado
	$('.panel').css('display', 'none');
	$('#accordion span').css('color', '#8a8a8a');
});


/* SELECT COLOR BASE MOBILE - CAMISETAS */
$('.sel_color_base_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_base_mb_");

	//volvemos visibles todos los colores de todas las opciones:
	$('#color_base_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
	$('#color_principal_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_mb_'+option[1]).css('visibility', 'hidden');

	//del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
	$('#color_base_mb_'+$('#option_color_principal_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_principal_mb').val()).css('visibility', 'hidden');
	$('#color_base_mb_'+$('#option_color_secundario_mb').val()).css('visibility', 'hidden');
	$('#color_principal_mb_'+$('#option_color_secundario_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_mb').val();
	$('#option_color_base_mb').val(option[1]);

	$('.preview_front_mb .img_base').attr('src', 'img/modelos/modelo_base/frente/'+option[1]+'.png');
	$('.preview_back_mb .img_base').attr('src', 'img/modelos/modelo_base/espalda/'+option[1]+'.png');
});

$('.sel_color_base_arquero_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_base_arquero_mb_");

	//volvemos visibles todos los colores de todas las opciones:
	$('#color_base_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
	$('#color_principal_arquero_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+option[1]).css('visibility', 'hidden');

	//del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
	$('#color_base_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');
	$('#color_base_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');
	$('#color_principal_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_arq_mb').val();
	$('#option_color_base_arq_mb').val(option[1]);

	$('.preview_front_mb .img_base').attr('src', 'img/modelos/modelo_base/frente/'+option[1]+'.png');
	$('.preview_back_mb .img_base').attr('src', 'img/modelos/modelo_base/espalda/'+option[1]+'.png');
});

/* SELECT COLOR PRINCIPAL MOBILE - CAMISETAS */
$('.sel_color_principal_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_principal_mb_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_mb_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_mb_'+$('#option_color_base_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_base_mb').val()).css('visibility', 'hidden');
	$('#color_base_mb_'+$('#option_color_secundario_mb').val()).css('visibility', 'hidden');
	$('#color_principal_mb_'+$('#option_color_secundario_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_mb').val();
	$('#option_color_principal_mb').val(option[1]);

	$('.preview_front_mb .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
	$('.preview_back_mb .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
});

$('.sel_color_principal_arquero_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_principal_arquero_mb_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_arquero_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_base_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');
	$('#color_principal_arquero_mb_'+$('#option_color_secundario_arq_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_arq_mb').val();
	$('#option_color_principal_arq_mb').val(option[1]);

	$('.preview_front_mb .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
	$('.preview_back_mb .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
});

/* SELECT COLOR SECUNDARIO MOBILE - CAMISETAS */
$('.sel_color_secundario_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_secundario_mb_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_principal_mb_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_mb_'+$('#option_color_base_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_base_mb').val()).css('visibility', 'hidden');
	$('#color_base_mb_'+$('#option_color_principal_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_mb_'+$('#option_color_principal_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_mb').val();
	$('#option_color_secundario_mb').val(option[1]);

	$('.preview_front_mb .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
	if( secundario_no_espalda[nro_modelo] ){
		$('.preview_back_mb .img_secundaria').attr('src', 'img/transparent.png');
	}else{
		$('.preview_back_mb .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
	}
});

$('.sel_color_secundario_arquero_mb').click( function(){
	var nro_modelo;
	var option = this.id.split("color_secundario_arquero_mb_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_mb_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_arquero_mb_'+option[1]).css('visibility', 'hidden');
	$('#color_principal_arquero_mb_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_base_arq_mb').val()).css('visibility', 'hidden');
	$('#color_base_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_mb_'+$('#option_color_principal_arq_mb').val()).css('visibility', 'hidden');

	nro_modelo = $('#option_diseno_arq_mb').val();
	$('#option_color_secundario_arq_mb').val(option[1]);

	$('.preview_front_mb .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
	if( secundario_no_espalda[nro_modelo] ){
		$('.preview_back_mb .img_secundaria').attr('src', 'img/transparent.png');
	}else{
		$('.preview_back_mb .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
	}
});

/* SELECT FORMATO MOBILE - CAMISETAS */

$('.sel_formato_mb').click( function(){

	var option;
	var opt;
	var opt_color;

	if( vistaArquero ){ // Configuracion arquero

		option = this.id.split("formato_arq_mb_");
		opt = option[1];

		$('#option_formato_arq_mb').val(opt);
		opt_color = $('#option_color_text_arq_mb').val();

		$('.formato_nro_back_mb img').attr('src', 'img/numeros_arq/'+opt+'/'+opt_color+'.png');

	}else{ // Configuracion jugador

		option = this.id.split("formato_mb_");
		opt = option[1];

		$('#option_formato_mb').val(opt);
		opt_color = $('#option_color_text_mb').val();

		$('.formato_nro_back_mb img').attr('src', 'img/numeros/'+opt+'/'+opt_color+'.png');
	
	}

	// Pintar borde del seleccionado
	$('.sel_formato_mb').removeClass("selected_mb");
	$(this).addClass("selected_mb");

	// Muestro vista de espalda

	$('#btn_mb_back').addClass('btn_mb_back_sel');
	$('.preview_front_mb').css('display', 'none');
	$('.preview_back_mb').css('display', 'block');

});


/* SELECT COLOR TEXT MOBILE - CAMISETAS */

$('.sel_color_text_mb').click( function(){

	var opt;

	var option = this.id.split("color_text_mb_");

	if( vistaArquero ){ // Configuracion arquero

		$('#option_color_text_arq_mb').val(option[1]);
		opt = $('#option_formato_arq_mb').val();

		$('.formato_nro_back_mb img').attr('src', 'img/numeros_arq/'+opt+'/'+option[1]+'.png');

	}else{ // Configuracion jugador

		$('#option_color_text_mb').val(option[1]);
		opt = $('#option_formato_mb').val();

		$('.formato_nro_back_mb img').attr('src', 'img/numeros/'+opt+'/'+option[1]+'.png');

	}

	// Muestro vista de espalda

	$('#btn_mb_back').addClass('btn_mb_back_sel');
	$('.preview_front_mb').css('display', 'none');
	$('.preview_back_mb').css('display', 'block');

});

/* SELECT DISENO MOBILE - SHORT */

$('.sel_diseno_short_mb').click( function(){


	var option = this.id.split("diseno_short_mb_");

	var opt_diseno = option[1];

	updateDisenoShortMb(opt_diseno);

	// Pintar borde del seleccionado
	$('.sel_diseno_short_mb').removeClass("selected_mb");

	$(this).addClass("selected_mb");


	
	if( opt_diseno == 3 ){ // diseno 3 solo tiene color secundario

		$('#color_secundario_tit_short_mb').css('display', 'block');

	}else{
 
		 $('#color_secundario_tit_short_mb').css('display', 'none');

	}

	// Oculto todos los paneles de colores y vuelvo todos los colores a deseleccionado

	$('.panel_short').css('display', 'none');
	$('#accordion_short span').css('color', '#8a8a8a');

});

/* SELECT COLOR BASE MOBILE - SHORT */

$('.sel_color_base_short_mb').click( function(){

	var option = this.id.split("color_base_short_mb_");

	$('#option_color_base_short_mb').val(option[1]);

	$('.preview_short_mb .img_base').attr('src', 'img/shorts/base/'+option[1]+'.png');

});

/* SELECT COLOR PRINCIPAL MOBILE - SHORT */

$('.sel_color_principal_short_mb').click( function(){

	var option = this.id.split("color_principal_short_mb_");

	var nro_modelo = $('#option_diseno_short_mb').val();

	$('#option_color_principal_short_mb').val(option[1]);

	$('.preview_short_mb .img_principal').attr('src', 'img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

});

/* SELECT COLOR SECUNDARIO MOBILE - SHORT */

$('.sel_color_secundario_short_mb').click( function(){

	var option = this.id.split("color_secundario_short_mb_");

	var nro_modelo = $('#option_diseno_short_mb').val();

	$('#option_color_secundario_short_mb').val(option[1]);

	$('.preview_short_mb .img_secundaria').attr('src', 'img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

});

/* SELECT DISENO MOBILE - SHORT ARQUERO */

$('.sel_diseno_short_arquero_mb').click( function(){

	var option = this.id.split("diseno_short_arquero_mb_");

	var opt_diseno = option[1];

	updateDisenoShortArqueroMb(opt_diseno);

	// Pintar borde del seleccionado
	$('.sel_diseno_short_arquero_mb').removeClass("selected_mb");

	$(this).addClass("selected_mb");


	
	if( opt_diseno == 3 ){ // diseno 3 solo tiene color secundario

		$('#color_secundario_tit_short_arquero_mb').css('display', 'block');

	}else{
 
		 $('#color_secundario_tit_short_arquero_mb').css('display', 'none');

	}

	// Oculto todos los paneles de colores y vuelvo todos los colores a deseleccionado

	$('.panel_short_arquero').css('display', 'none');
	$('#accordion_short_arquero span').css('color', '#8a8a8a');

});

/* SELECT COLOR BASE MOBILE - SHORT ARQUERO */

$('.sel_color_base_short_arquero_mb').click( function(){

	var option = this.id.split("color_base_short_arquero_mb_");
	console.log(option)
	console.log(option[1])
	$('#option_color_base_short_arquero_mb').val(option[1]);

	$('.preview_short_arquero_mb .img_base').attr('src', 'img/shorts/base/'+option[1]+'.png');

});

/* SELECT COLOR PRINCIPAL MOBILE - SHORT ARQUERO */

$('.sel_color_principal_short_arquero_mb').click( function(){

	var option = this.id.split("color_principal_short_arquero_mb_");

	var nro_modelo = $('#option_diseno_short_arquero_mb').val();

	$('#option_color_principal_short_arquero_mb').val(option[1]);

	$('.preview_short_arquero_mb .img_principal').attr('src', 'img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

});

/* SELECT COLOR SECUNDARIO MOBILE - SHORT ARQUERO */

$('.sel_color_secundario_short_arquero_mb').click( function(){

	var option = this.id.split("color_secundario_short_arquero_mb_");

	var nro_modelo = $('#option_diseno_short_arquero_mb').val();

	$('#option_color_secundario_short_arquero_mb').val(option[1]);

	$('.preview_short_arquero_mb .img_secundaria').attr('src', 'img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

});

/* SELECT COLOR MOBILE - MEDIAS */

$('.sel_color_medias_mb').click( function(){

	var option = this.id.split("color_medias_mb_");

	$('#option_color_medias_mb').val(option[1]);

	$('.preview_medias_mb .img_medias_frente').attr('src', 'img/medias/frente/'+option[1]+'.png');
	$('.preview_medias_mb .img_medias_perfil').attr('src', 'img/medias/perfil/'+option[1]+'.png');

});

/* BTN PEDIR MOBILE */

$('.btn_pedir_mb, .btn_pedir_arquero_mb').click( function(){
	if(parseInt($('#hCantShorts').val()) && parseInt($('#hCantCamisetas').val())){//conjunto habilitado
		const shortsActuales = parseInt($('#hCantShorts').val())
		const camisetasActuales = parseInt($('#hCantCamisetas').val())
		let conjuntosMostrados = $('.conjunto_jugador_mb').children().length
		const camisetasMostradas = $('.camiseta_jugador_mb').children().length
		const shortsMostrados = $('.short_jugador_mb').children().length
		const conjuntosAgregar = camisetasActuales - camisetasMostradas - conjuntosMostrados;
		for(let i = 0; i < conjuntosAgregar; i++){
			$('#add_conjunto_jugador_mb').click();
		}
		conjuntosMostrados = $('.conjunto_jugador_mb').children().length
		$('#hCantCamisetas').val(camisetasMostradas + conjuntosMostrados)
		$('#hCantShorts').val(shortsMostrados + conjuntosMostrados)
	}else{
		//Como no están seleccionados los conjuntos, se eliminan:
		jQuery.each($('.conjunto_jugador_mb').children(), function() {
			$(this).remove();
		});

		if(parseInt($('#hCantCamisetas').val())){//solamente camisetas
			const camisetasActuales = parseInt($('#hCantCamisetas').val())
			const camisetasMostradas = $('.camiseta_jugador_mb').children().length
			const camisetasAgregar = camisetasActuales - camisetasMostradas;
			for(let i = 0; i < camisetasAgregar; i++){
				$('#add_jugador_mb').click();
			}
			$('#hCantCamisetas').val(camisetasActuales)

			jQuery.each($('.short_jugador_mb').children(), function() {
				$(this).remove();
			});
		}else if(parseInt($('#hCantShorts').val())){//solamente shorts (no deberia existir este caso actualmente)
			const shortsActuales = parseInt($('#hCantShorts').val())
			const shortsMostrados = $('.short_jugador_mb').children().length
			const shortsAgregar = shortsActuales - shortsMostrados;
			for(let i = 0; i < shortsAgregar; i++){
				$('#add_short_jugador_mb').click();
			}
			$('#hCantShorts').val(shortsActuales)

			jQuery.each($('.camiseta_jugador_mb').children(), function() {
				$(this).remove();
			});
		}
	}

	if(parseInt($('#hCantShortsArqueros').val()) && parseInt($('#hCantArqueros').val())){//conjunto habilitado
		const shortsActuales = parseInt($('#hCantShortsArqueros').val())
		const camisetasActuales = parseInt($('#hCantArqueros').val())
		let conjuntosMostrados = $('.conjunto_arquero_mb').children().length
		const camisetasMostradas = $('.camiseta_arquero_mb').children().length
		const shortsMostrados = $('.short_arquero_mb').children().length
		const conjuntosAgregar = camisetasActuales - camisetasMostradas - conjuntosMostrados;
		for(let i = 0; i < conjuntosAgregar; i++){
			$('#add_conjunto_arquero_mb').click();
		}
		conjuntosMostrados = $('.conjunto_arquero_mb').children().length
		$('#hCantArqueros').val(camisetasMostradas + conjuntosMostrados)
		$('#hCantShortsArqueros').val(shortsMostrados + conjuntosMostrados)
	}else{
		//Como no están seleccionados los conjuntos, se eliminan:
		jQuery.each($('.conjunto_arquero_mb').children(), function() {
			$(this).remove();
		});

		if(parseInt($('#hCantArqueros').val())){//solamente camisetas
			const camisetasActuales = parseInt($('#hCantArqueros').val())
			const camisetasMostradas = $('.camiseta_jugador_mb').children().length
			const camisetasAgregar = camisetasActuales - camisetasMostradas;
			for(let i = 0; i < camisetasAgregar; i++){
				$('#add_arquero_mb').click();
			}
			$('#hCantArqueros').val(camisetasActuales)

			jQuery.each($('.short_arquero_mb').children(), function() {
				$(this).remove();
			});
		}else if(parseInt($('#hCantShortsArqueros').val())){//solamente shorts (no deberia existir este caso actualmente)
			const shortsActuales = parseInt($('#hCantShortsArqueros').val())
			const shortsMostrados = $('.short_arquero_mb').children().length
			const shortsAgregar = shortsActuales - shortsMostrados;
			for(let i = 0; i < shortsAgregar; i++){
				$('#add_short_arquero_mb').click();
			}
			$('#hCantShortsArqueros').val(shortsActuales)

			jQuery.each($('.camiseta_arquero_mb').children(), function() {
				$(this).remove();
			});
		}
	}

	$('.box_jugadores_mb').css('display', 'none');
	$('#add_jugador_mb').css('display', 'none');
	$('#add_short_jugador_mb').css('display', 'none');
	$('#add_conjunto_jugador_mb').css('display', 'none');
	if($('#option_short_on_mb').val() != 0 || $('#option_camiseta_on_mb').val() != 0){
		$('.box_jugadores_mb').css('display', 'block');
		if($('#option_camiseta_on_mb').val() != 0){
			$('#add_jugador_mb').css('display', 'inline');
		}
		if($('#option_short_on_mb').val() != 0){
			$('#add_short_jugador_mb').css('display', 'inline');
		}
		if($('#option_short_on_mb').val() != 0 && $('#option_camiseta_on_mb').val() != 0){
			$('#add_conjunto_jugador_mb').css('display', 'inline');
		}
	}

	$('.box_arqueros_mb').css('display', 'none');
	$('#add_arquero_mb').css('display', 'none');
	$('#add_short_arquero_mb').css('display', 'none');
	$('#add_conjunto_arquero_mb').css('display', 'none');
	if($('#option_short_arquero_on_mb').val() != 0 || $('#option_arq_on_mb').val() != 0){
		$('.box_arqueros_mb').css('display', 'block');
		if($('#option_arq_on_mb').val() != 0){
			$('#add_arquero_mb').css('display', 'inline');
		}
		if($('#option_short_arquero_on_mb').val() != 0){
			$('#add_short_arquero_mb').css('display', 'inline');
		}
		if($('#option_short_arquero_on_mb').val() != 0 && $('#option_arq_on_mb').val() != 0){
			$('#add_conjunto_arquero_mb').css('display', 'inline');
		}
	}
	
	updateTotalBoxMb();

	calcularPrecioMobile();

	$('#content_base_mb').fadeOut( "fast", function() {
		$('.nav_jug_arq_mb').css('display', 'none');
		$('#formulario_mb').fadeIn();

		if($('#option_switch_short_mb').is(':checked') && $('#option_switch_arquero_mb').is(':checked')){
			$('.vista_modelo_short_arquero_mb').css('display', 'inline');
		}else{
			$('.vista_modelo_short_arquero_mb').css('display', 'none');
		}
	 });

	if(!preguntasFrecuentesVista){
		preguntasFrecuentes();
	}
});

/* BTN CLOSE FORMULARIO MOBILE */

$('.btn_close_form_mb').click( function(){

	$('#formulario_mb').fadeOut( "fast", function() {
		$('.nav_jug_arq_mb').css('display', 'block');
		   $('#content_base_mb').fadeIn();
	 });

});

/* BTN ADD JUGADOR */
$('#add_jugador_mb').click( function(){
	var row_jugador_mb = '<div class="box_jugador_mb camiseta_jugador_mb" name="row_camiseta_jugador_mb"><div><div class="numero" style="width: 35px; height: 60px;"><span>N&ordm;</span><input type="number" min="0" name="numero_jugador_mb[]" class="numero_jugador_mb" maxlength="3" style="width: 30px;"></div><div class="talle" style="width: 50px; height: 60px;"><span>Talle</span><select name="talle_jugador_mb[]" class="talle_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="nombre vista_nombre"><span>Nombre</span> <span class="opcional">(opcional)</span><input type="text" name="nombre_jugador_mb[]" class="nombre_jugador_mb" /></div><div class="btn_delete_mb" style="padding-left: 260px; padding-top: 20px;">X</div></div></div>';
	$('#list_jugadores_mb').append(row_jugador_mb);
	
	$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

$('#add_short_jugador_mb').click(function(){
	var row_jugador_mb = '<div class="box_jugador_mb short_jugador_mb" name="row_short_jugador_mb"><div><div class="talle" style="margin-left: 274px;"><span style="font-size: 13px">Talle Short</span><select name="talle_short_jugador_mb[]" class="talle_short_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="btn_delete_short_mb" style="margin-left: 345px; font-size: 26px; padding-top: 20px;">X</div></div></div>';
	$('#list_jugadores_mb').append(row_jugador_mb);

	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

$('#add_conjunto_jugador_mb').click(function(){
	var row_jugador_mb = '<div class="box_jugador_mb conjunto_jugador_mb" name="row_conjunto_jugador_mb"><div><div class="numero" style="width: 35px; height: 60px;"><span>N&ordm;</span><input type="number" min="0" name="numero_jugador_mb[]" class="numero_jugador_mb" maxlength="3" style="width: 30px;"></div><div class="talle" style="width: 50px; height: 60px;"><span>Talle</span><select name="talle_jugador_mb[]" class="talle_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="nombre vista_nombre"><span>Nombre</span> <span class="opcional">(opcional)</span><input type="text" name="nombre_jugador_mb[]" class="nombre_jugador_mb" /></div><div class="talle"><span style="font-size: 13px;">Talle Short</span><select name="talle_short_jugador_mb[]" class="talle_short_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="btn_delete_conjunto_jugador_mb" style="margin-left: 345px; padding-top: 20px; font-size: 26px;">X</div></div></div>';
	$('#list_jugadores_mb').append(row_jugador_mb);

	$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) + 1);
	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

/* BTN ADD ARQUERO */
$('#add_arquero_mb').click( function(){
	var row_arquero_mb = '<div class="box_arquero_mb camiseta_arquero_mb" name="row_camiseta_arquero_mb"><div><div class="numero" style="width: 35px; height: 60px;"><span>N&ordm;</span><input type="number" min="0" name="numero_arquero_mb[]" class="numero_arquero_mb" maxlength="3" style="width: 30px;"></div><div class="talle" style="width: 50px; height: 60px;"><span>Talle</span><select name="talle_jugador_mb[]" class="talle_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="nombre vista_nombre"><span>Nombre</span> <span class="opcional">(opcional)</span><input type="text" name="nombre_jugador_mb[]" class="nombre_jugador_mb" /></div><div class="btn_delete_mb" style="padding-left: 260px; padding-top: 20px;">X</div></div></div>';
	$('#list_arqueros_mb').append(row_arquero_mb);
	
	$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

$('#add_short_arquero_mb').click( function(){
	var row_arquero_mb = '<div class="box_arquero_mb short_arquero_mb" name="row_short_arquero_mb"><div><div class="talle" style="margin-left: 274px;"><span style="font-size: 13px">Talle Short</span><select name="talle_short_jugador_mb[]" class="talle_short_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="btn_delete_short_mb" style="margin-left: 345px; font-size: 26px; padding-top: 20px;">X</div></div></div>';
	$('#list_arqueros_mb').append(row_arquero_mb);
	
	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

$('#add_conjunto_arquero_mb').click( function(){
	var row_arquero_mb = '<div class="box_arquero_mb conjunto_arquero_mb" name="row_conjunto_arquero_mb"><div><div class="numero" style="width: 35px; height: 60px;"><span>N&ordm;</span><input type="number" min="0" name="numero_arquero_mb[]" class="numero_arquero_mb" maxlength="3" style="width: 30px;"></div><div class="talle" style="width: 50px; height: 60px;"><span>Talle</span><select name="talle_jugador_mb[]" class="talle_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="nombre vista_nombre"><span>Nombre</span> <span class="opcional">(opcional)</span><input type="text" name="nombre_jugador_mb[]" class="nombre_jugador_mb" /></div><div class="talle"><span style="font-size: 13px;">Talle Short</span><select name="talle_short_jugador_mb[]" class="talle_short_jugador_mb"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></div><div class="btn_delete_conjunto_jugador_mb" style="padding-top: 20px; font-size: 26px;">X</div></div></div>';
	$('#list_arqueros_mb').append(row_arquero_mb);
	
	$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) + 1);
	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecioMobile();
	updateTotalBoxMb();
});

/* Delete Jugador */
$(document).on('click','.btn_delete_mb',function() {
	if ($(this).parent().parent().hasClass("box_arquero_mb") && genero != 'chombas') {
		//estoy borrando un arquero
		$(this).parent().parent().remove();
		
		$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) - 1); 
	} else {
		//estoy borrando un jugador
		$(this).parent().parent().remove();
		
		$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) - 1);
	}

	calcularPrecioMobile();
	updateTotalBoxMb();
});

$(document).on('click','.btn_delete_conjunto_jugador_mb',function() {
	if ($(this).parent().parent().hasClass("box_arquero_mb") && genero != 'chombas') {
		//estoy borrando un arquero
		$(this).parent().parent().remove();
		
		$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) - 1);
		$('#hCantShortsArqueros').val(parseInt($('#hCantShortsArqueros').val()) - 1);
	} else {
		//estoy borrando un jugador
		$(this).parent().parent().remove();
		
		$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) - 1);
		$('#hCantShorts').val(parseInt($('#hCantShorts').val()) - 1);
	}

	calcularPrecioMobile();
	updateTotalBoxMb();
});

/* Delete Short Jugador / Short Arquero */
$(document).on('click','.btn_delete_short_mb',function() {
	if ($(this).parent().parent().hasClass("box_arquero_mb") && genero != 'chombas') {
		//estoy borrando un arquero
		$(this).parent().parent().remove();
		
		$('#hCantShortsArqueros').val(parseInt($('#hCantShortsArqueros').val()) - 1);
	} else {
		//estoy borrando un jugador
		$(this).parent().parent().remove();
		
		$('#hCantShorts').val(parseInt($('#hCantShorts').val()) - 1);
	}

	calcularPrecioMobile();
	updateTotalBoxMb();
});

/* BTN VOLVER A MODIFICAR */

$('#btn_volver_mb').click( function(){

	$('#formulario_mb').fadeOut( "fast", function() {
		$('.nav_jug_arq_mb').css('display', 'block');
		   $('#content_base_mb').fadeIn();
	 });

});


/* ACCORDION MOBILE */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].onclick = function(){
		/* Toggle between adding and removing the "active" class,
		to highlight the button that controls the panel */
		this.classList.toggle("active");

		var paneles = document.getElementsByClassName("panel");

		for(var j = 0; j < paneles.length; j++){
			paneles[j].style.display = 'none';
			if( j != i ){
				acc[j].style.color = '#8a8a8a';
			}
		}

		this.style.color = '#3096fe';

		/* Toggle between hiding and showing the active panel */
		var panel = this.nextElementSibling;
		if (panel.style.display === "inline-block") {
			panel.style.display = "none";
		} else {
			panel.style.display = "inline-block";
		}
	}
}

var acc_s = document.getElementsByClassName("accordion_short");
var s;

for (s = 0; s < acc_s.length; s++) {
	acc_s[s].onclick = function(){
		/* Toggle between adding and removing the "active" class,
		to highlight the button that controls the panel */
		this.classList.toggle("active");

		var paneles_s = document.getElementsByClassName("panel_short");

		for(var h = 0; h < paneles_s.length; h++){
			paneles_s[h].style.display = 'none';
			console.log(paneles_s[h])
			if( h != s ){
				acc_s[h].style.color = '#8a8a8a';
			}
		}

		this.style.color = '#3096fe';

		/* Toggle between hiding and showing the active panel */
		var panel_s = this.nextElementSibling;
		if (panel_s.style.display === "inline-block") {
			panel_s.style.display = "none";
		} else {
			panel_s.style.display = "inline-block";
		}
	}
}

var acc_sa = document.getElementsByClassName("accordion_short_arquero");
for (s = 0; s < acc_sa.length; s++) {
	acc_sa[s].onclick = function(){
		/* Toggle between adding and removing the "active" class,
		to highlight the button that controls the panel */
		this.classList.toggle("active");

		var paneles_s_a = document.getElementsByClassName("panel_short_arquero");
		for(var h = 0; h < paneles_s_a.length; h++){
			paneles_s_a[h].style.display = 'none';
			console.log(paneles_s_a[h])
			console.log('oculta algo')
			if( h != s ){
				acc_sa[h].style.color = '#8a8a8a';
			}
		}

		this.style.color = '#3096fe';

		/* Toggle between hiding and showing the active panel */
		var panel_sa = this.nextElementSibling;
		console.log(panel_sa.style.display)
		if (panel_sa.style.display === "inline-block") {
			panel_sa.style.display = "none";
			console.log('oculta')
		} else {
			console.log('muestra')
			panel_sa.style.display = "inline-block";
		}
	}
}

/* BTN HACER PEDIDO MOBILE */

$("form#formulario_mb").submit(function(event){
	event.preventDefault();
	enviar_mb(true);
});

function solicitarMercadoPagoMb() {
	enviar_mb(false);
}

function enviar_mb(enviaEmail, metodosPago = false){
	gtag('event', 'Diseñador', { 'event_category': ' Diseñador ', 'event_action': ' enviar pedido '});

	var email = $('#email_mb').val().trim();
	var row_jugador = $('.box_jugador_mb');
	var telefono = $('#telefono_mb').val().trim();
	var codigo_postal_envio = $('#codigo_postal_envio_mb').val();
	var zona_envio = $('#zona_envio_mb').val();
	
	var errorJugadores = true;
	var numero_jugador = $('.numero_jugador_mb');
	for( var i = 0; i < parseInt($('#hCantCamisetas').val()); i++ ){
		var numero = numero_jugador[i].value;
		if( numero == "" ){
			numero_jugador[i].style.border = "1px solid #f51a1a";
			errorJugadores = false;
		}else{
			numero_jugador[i].style.border = "1px solid #afafaf";
		}
	}

	/* Verificacion arqueros */
	let faltaSolicitarArquero = false;
	if(genero != 'chombas'){
		var numero_arquero = $('.numero_arquero_mb');
		for( var i = 0; i < parseInt($('#hCantArqueros').val()); i++ ){
			var numero_arq = numero_arquero[i].value;
			if( numero_arq == "" ){
				numero_arquero[i].style.border = "1px solid #f51a1a";
				errorJugadores = false;
			}else{
				numero_arquero[i].style.border = "1px solid #afafaf";
			}
		}

		if($('.box_arqueros_mb').is(':visible') && $('#list_arqueros_mb').children().length == 0){
			faltaSolicitarArquero = true;
			Swal.fire(
				'Arquero',
				'Debe completar los detalles de arquero.',
				'info'
			);
			$('html, body').animate({scrollTop: $('.box_arqueros_mb').offset().top}, "slow");
		}
	}

	/* Verificaciones */ 
	var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var test = ( emailRegExp.test(email) );
	if( email == '' || !test ){
		$('#email_mb').css("border", "1px solid #f51a1a");
	}else{
		$('#email_mb').css("border", "1px solid #bdc4c9");
	}

	var telefonoRegExp = /^[\+]{0,1}[0-9-]+$/;
	var testTelefono = ( telefonoRegExp.test(telefono) );
	if( telefono == '' || !testTelefono ){
		$('#telefono_mb').css("border", "1px solid #f51a1a");
	}else{
		$('#telefono_mb').css("border", "1px solid #bdc4c9");
	}

	if( zona_envio == '' ){
		$('#zona_envio').css("border", "1px solid #f51a1a");
	}else{
		$('#zona_envio').css("border", "1px solid #bdc4c9");
	}

	if( codigo_postal_envio == '' ){
		$('#codigo_postal_envio').css("border", "1px solid #f51a1a");
	}else{
		$('#codigo_postal_envio').css("border", "1px solid #bdc4c9");
	}

	let camisetasJugadores = [];
	jQuery.each(document.getElementsByName("row_camiseta_jugador_mb"), function() {
		let row_camiseta_jugador = this.getElementsByTagName('*');
		let camiseta = {};
		jQuery.each(row_camiseta_jugador, function() {
			if(this.name == 'nombre_jugador_mb[]'){
				camiseta.nombre_jugador = this.value;
			} else if(this.name == 'numero_jugador_mb[]'){
				camiseta.numero_jugador = this.value;
			} else if(this.name == 'talle_jugador_mb[]'){
				camiseta.talle_jugador = this.value;
			}
		});
		camisetasJugadores.push(camiseta);
	});
	console.log(camisetasJugadores);

	let shortsJugadores = [];
	jQuery.each(document.getElementsByName("row_short_jugador_mb"), function() {
		let row_short_jugador = this.getElementsByTagName('*');
		let short = {};
		jQuery.each(row_short_jugador, function() {
			if(this.name == 'talle_short_jugador_mb[]'){
				short.talle_short_jugador = this.value;
			}
		});
		shortsJugadores.push(short);
	});
	console.log(shortsJugadores);

	let conjuntosJugadores = [];
	jQuery.each(document.getElementsByName("row_conjunto_jugador_mb"), function() {
		let row_conjunto_jugador = this.getElementsByTagName('*');
		let conjunto = {};
		jQuery.each(row_conjunto_jugador, function() {
			if(this.name == 'nombre_jugador_mb[]'){
				conjunto.nombre_jugador = this.value;
			} else if(this.name == 'numero_jugador_mb[]'){
				conjunto.numero_jugador = this.value;
			} else if(this.name == 'talle_jugador_mb[]'){
				conjunto.talle_jugador = this.value;
			} else if(this.name == 'talle_short_jugador_mb[]'){
				conjunto.talle_short_jugador = this.value;
			}
		});
		conjuntosJugadores.push(conjunto);
	});
	console.log(conjuntosJugadores);

	let camisetasArqueros = [];
	jQuery.each(document.getElementsByName("row_camiseta_arquero_mb"), function() {
		let row_camiseta_arquero = this.getElementsByTagName('*');
		let camiseta = {};
		jQuery.each(row_camiseta_arquero, function() {
			if(this.name == 'nombre_arquero_mb[]'){
				camiseta.nombre_arquero = this.value;
			} else if(this.name == 'numero_arquero_mb[]'){
				camiseta.numero_arquero = this.value;
			} else if(this.name == 'talle_arquero_mb[]'){
				camiseta.talle_arquero = this.value;
			}
		});
		camisetasArqueros.push(camiseta);
	});
	console.log(camisetasArqueros);

	let shortsArqueros = [];
	jQuery.each(document.getElementsByName("row_short_arquero_mb"), function() {
		let row_short_arquero = this.getElementsByTagName('*');
		let short = {};
		jQuery.each(row_short_arquero, function() {
			if(this.name == 'talle_short_arquero_mb[]'){
				short.talle_short_arquero = this.value;
			}
		});
		shortsArqueros.push(short);
	});
	console.log(shortsArqueros);

	let conjuntosArqueros = [];
	jQuery.each(document.getElementsByName("row_conjunto_arquero_mb"), function() {
		let row_conjunto_arquero = this.getElementsByTagName('*');
		let conjunto = {};
		jQuery.each(row_conjunto_arquero, function() {
			if(this.name == 'nombre_arquero_mb[]'){
				conjunto.nombre_arquero = this.value;
			} else if(this.name == 'numero_arquero_mb[]'){
				conjunto.numero_arquero = this.value;
			} else if(this.name == 'talle_arquero_mb[]'){
				conjunto.talle_arquero = this.value;
			} else if(this.name == 'talle_short_arquero_mb[]'){
				conjunto.talle_short_arquero = this.value;
			}
		});
		conjuntosArqueros.push(conjunto);
	});
	console.log(conjuntosArqueros);

	const totalCamisetas = camisetasJugadores.length + conjuntosJugadores.length + camisetasArqueros.length + conjuntosArqueros.length;
	const totaShorts = shortsJugadores.length + conjuntosJugadores.length + shortsArqueros.length + conjuntosArqueros.length;

	let superaMinimo = true;
	if( 
		(//No avanza si se piden menos camisetas y menos shorts de los minimos establecidos
			(totalCamisetas) < $('#minCamisetas').html()
			&&
			(totaShorts) < $('#minShorts').html()
	 	)
		 ||
		(//Tampoco se avanza si alguna tiene por lo menos 1 pero no supera la cantidad minima
			(
				(totalCamisetas) > 0 
				&&
				(totalCamisetas) < $('#minCamisetas').html()
			)
			||
			(
				(totaShorts) > 0
				&&
				(totaShorts) < $('#minCamisetas').html()//en el caso de los shorts no puede pasar que haya por lo menos 1 pero no se supere la cantidad minima de las camisetas
			)
		)
	){
		$('#formulario_mb .content_pedido_mb .alert_min').css('color', 'rgb(245, 26, 26)');
		$('html, body').animate({scrollTop: $('#formulario_mb .content_pedido_mb .alert_min').offset().top}, "slow");
		superaMinimo = false;
	}else{
		$('#formulario_mb .content_pedido_mb .alert_min').css('color', '#afafaf');
	}

	if( 
		(//No avanza si se piden menos camisetas y menos shorts de los minimos establecidos
			(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val())) < $('#minCamisetas').html()
			&&
			(parseInt($('#hCantShorts').val()) + parseInt($('#hCantShortsArqueros').val())) < $('#minShorts').html()
	 	)
		 ||
		(//Tampoco se avanza si alguna tiene por lo menos 1 pero no supera la cantidad minima
			(
				(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val())) > 0 
				&&
				(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val())) < $('#minCamisetas').html()
			)
			||
			(
				(parseInt($('#hCantShorts').val()) + parseInt($('#hCantShortsArqueros').val())) > 0
				&&
				(parseInt($('#hCantShorts').val()) + parseInt($('#hCantShortsArqueros').val())) < $('#minCamisetas').html()
			)
		)
	){
		if(superaMinimo){
			//error: es diferente a lo anterior
			let datos = 'email='+email;
			$.ajax({
				type: 'POST',
				url: "../common/includes/avisoError.php",
				cache: false,
				data: datos
			});
		}
	}else{
		if(!superaMinimo){
			//error: es diferente a lo anterior
			let datos = 'email='+email;
			$.ajax({
				type: 'POST',
				url: "../common/includes/avisoError.php",
				cache: false,
				data: datos
			});
		}
	}

	if( email != '' && /*zona_envio != '' && codigo_postal_envio != '' &&*/ test && testTelefono && nombre_apellido != '' && superaMinimo && errorJugadores && !faltaSolicitarArquero ){
		$('#btn_mp_mb').css("visibility", "hidden");
		$('#btn_hacer_pedido_mb').css("visibility", "hidden");
		$('#loading_btn_enviar_mb').css("visibility", "visible");
		var pedidoUuid = $('#pedidoUuid').val();
		var formData = new FormData($('#formulario_mb')[0]);
		formData.append('genero', genero);
		formData.append('pedidoUuid', pedidoUuid);
		formData.append('camisetasJugadores', JSON.stringify(camisetasJugadores));
		formData.append('shortsJugadores', JSON.stringify(shortsJugadores));
		formData.append('conjuntosJugadores', JSON.stringify(conjuntosJugadores));
		formData.append('camisetasArqueros', JSON.stringify(camisetasArqueros));
		formData.append('shortsArqueros', JSON.stringify(shortsArqueros));
		formData.append('conjuntosArqueros', JSON.stringify(conjuntosArqueros));
		formData.append('precio', parseInt($('#precioTotalDMb').html()));

		$.ajax({
			url: '../common/includes/inc.form_mb.php',
			type: 'POST',
			data: formData,
			mimeType: 'multipart/form-data',
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			scriptCharset: "utf-8" ,
			encoding:"UTF-8",
			processData: false,
			error: function (jqXHR, textStatus, errorThrown ) {
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
				$('#btn_mp_mb').css("visibility", "visible");
				$('#btn_hacer_pedido_mb').css("visibility", "visible");
				$('#loading_btn_enviar_mb').css("visibility", "hidden");
				Swal.fire(
					'Oooops',
					'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
					'error'
				);
			},
			success: function (html) {
				var obj = null;
				var returndata = null;
				var pedidoUuid = null;
				try {
					obj = JSON.parse(html);
					returndata = obj.message;
					pedidoUuid = obj.pedidoUuid;
					
					$('#pedidoUuid').val(pedidoUuid);

					if(metodosPago){
						$('#metodos_pago_mb').css({'display': 'block'});
						$('#btn_metodos_pago_mb').remove();
						$('#btn_hacer_pedido_mb').remove();
						$('#btn_hacer_pedido_mb').css("visibility", "visible");
						$('#loading_btn_enviar_mb').css("visibility", "hidden");
					}else{
						var href_wts = 'whatsapp://send?text=Yakka Personalizador de camisetas http://yakka.com.ar/personalizador/'+genero+'/pedido-'+pedidoUuid;
						var href_face = 'https://www.facebook.com/sharer/sharer.php?u=http://yakka.com.ar/personalizador/'+genero+'/pedido-'+pedidoUuid;
						$('#share_whatsapp').attr("href", href_wts);
						$('#share_face').attr("href", href_face);
		
						if(!enviaEmail){
							iniciarMercadoPagoMb(pedidoUuid, genero)
						}else{
							$('.content_pedido_mb').fadeOut( "fast", function() {
								$('.content_pedido_finalizado_mb').fadeIn();
							});
	
							$('#btn_mp_mb').css("visibility", "visible");
							$('#btn_hacer_pedido_mb').css("visibility", "visible");
							$('#loading_btn_enviar_mb').css("visibility", "hidden");
						}
					}
				} catch (err) {
					$('#btn_mp_mb').css("visibility", "visible");
					$('#btn_hacer_pedido_mb').css("visibility", "visible");
					$('#loading_btn_enviar_mb').css("visibility", "hidden");
					Swal.fire(
						'Oooops',
						'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
						'error'
					);
				}
			},
		});
	}
}

function iniciarMercadoPagoMb(pedidoUuid, genero) {
	let datos = 'precio='+parseInt($('#precioTotalDMb').html())+'&genero='+genero+'&pedido_id='+pedidoUuid;
	$.ajax({
		type: 'POST',
		url: "../common/includes/mercadopago.php",
		cache: false,
		data: datos,
		success: function (html) {
			$('#btn_mp_mb').css("visibility", "visible");
			$('#btn_hacer_pedido_mb').css("visibility", "visible");
			$('#loading_btn_enviar_mb').css("visibility", "hidden");
			var obj = null;
			try {
				obj = JSON.parse(html);
			} catch (err) {
			}
			if (obj) {
				redirigirMercadoPagoMb(obj.preference);
			} else {
				alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			$('#btn_mp_mb').css("visibility", "visible");
			$('#btn_hacer_pedido_mb').css("visibility", "visible");
			$('#loading_btn_enviar_mb').css("visibility", "hidden");
			alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
		},
	});
}

function redirigirMercadoPagoMb(urlMercadoPago) {
	$MPC.openCheckout ({
		url: urlMercadoPago,
		mode: "modal",
		onreturn: execute_my_onreturnMb
	});
}

function execute_my_onreturnMb(json) {
	let datos = 'payment_state='+json.collection_status+'&pedidoUuid='+json.external_reference;
	$.ajax({
		type: 'POST',
		url: "../common/includes/mercadopago_estado.php",
		cache: false,
		data: datos,
		success: function (html) {
			var obj = null;
			try {
				obj = JSON.parse(html);
			} catch (err) {
			}
			if(json.collection_status != undefined){
				$('#formulario').fadeOut( "fast", function() {
					$('#finalizado').fadeIn();
				});
				$('.content_pedido_mb').fadeOut( "fast", function() {
					$('.content_pedido_finalizado_mb').fadeIn();
			   	});
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
		},
	});
}

$('#zona_envio_mb').bind('change', function () {
	if($('#zona_envio_mb').val() == 'CABA' || $('#zona_envio_mb').val() == 'GBA'){
		$( "#tipo_envio_mb" ).find('option[value="moto"]').prop('disabled', false);
		$( "#tipo_envio_mb" ).find('option[value="correo"]').prop('disabled', true);
		if($( "#tipo_envio_mb" ).find('option[value="correo"]').is(':selected')){
			$( "#tipo_envio_mb" ).val('moto');
		}
	}else{
		$( "#tipo_envio_mb" ).find('option[value="moto"]').prop('disabled', true);
		$( "#tipo_envio_mb" ).find('option[value="correo"]').prop('disabled', false);
		if($( "#tipo_envio_mb" ).find('option[value="moto"]').is(':selected')){
			$( "#tipo_envio_mb" ).val('correo');
		}
	}
});
$('#zona_envio_mb').trigger('change');