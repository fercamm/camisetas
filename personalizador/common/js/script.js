var genero = null;
var cantidadDeArqueros = null;
var precioArquero = null;
var esConjunto = null;
var precioShort = null;
var cantidadDeShorts = null;
var costoTotal = null;
var d1 = null;
var d1c = null;
var d2 = null;
var d2c = null;

var avanzaPrimeraVez = false;
var preguntasFrecuentesVista = false;

$( document ).ready( function(){
	genero = document.getElementById('script_js').getAttribute("genero");

	$('.precioCamiseta').html($('#precio_camiseta').val());
	$('.precioShort').html($('#precio_short').val());
	$('.precioMedia').html($('#precio_media').val());

	d1 = parseInt($('#d1').val());
	d1c = parseInt($('#d1c').val());
	d2 = parseInt($('#d2').val());
	d2c = parseInt($('#d2c').val());

	calcularPrecio()
	updateTotalBox();

	setTimeout(function () {
		if(!preguntasFrecuentesVista){
			preguntasFrecuentes();
		}
	 }, 15000);

	 $('.box_precio_shorts').css('display', 'none');
	 $('.box_precio_medias').css('display', 'none');

	 //inicializo los colores:
	 $('#option_color_base').val(4)
	 $('#option_color_principal').val(14)
	//  $('#option_color_secundario').val(9)
	 $('#color_principal_'+$('#option_color_base').val()).css('visibility', 'hidden');
	 $('#color_secundario_'+$('#option_color_base').val()).css('visibility', 'hidden');
	 $('#color_base_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	 $('#color_secundario_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	//  $('#color_base_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
	//  $('#color_principal_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

	 $('#option_color_base_arq').val(4)
	 $('#option_color_principal_arq').val(14)
	//  $('#option_color_secundario_arq').val(9)
	 $('#color_principal_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	 $('#color_secundario_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	 $('#color_base_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
	 $('#color_secundario_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
	//  $('#color_base_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
	//  $('#color_principal_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
});

function calcularPrecio() {
	var precio;

	if($('#settings').is(':visible')){
		precio = $('#precio_camiseta').val()
	}else if($('#settings_arquero').is(':visible')){
		precio = $('#precio_camiseta').val()
	}else if($('#settings_shorts').is(':visible')){
		precio = $('#precio_short').val()
	}else if($('#settings_shorts_arquero').is(':visible')){
		precio = $('#precio_short').val()
	}else if($('#settings_medias').is(':visible')){
		precio = $('#precio_media').val()
	}

	$('.cantCamisetas').html(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val()));
	$('.cantShort').html(parseInt($('#hCantShorts').val()) + parseInt($('#hCantShortsArqueros').val()));

	$('#tabPrecio').html("$ "+ precio);

	$('#btn_precio').css('display', 'block');
	$('#btn_precio').addClass('option_select');
	$('#btn_precio').removeClass('option_disable');

	updateTotalBox();
}


$('#btn_diseno').click( function(){

	$('#options_diseno').css('display', 'block');
	$('#paginador_diseno').css('display', 'flex');

	$('#options_colores').css('display', 'none');

	$('#options_texto').css('display', 'none');

	$('#btn_diseno').removeClass().addClass('option_select');
	$('#btn_colores').removeClass().addClass('option_disable');
	$('#btn_numeros').removeClass().addClass('option_disable');

	(pageActual === 1) ? $('.new_models_ads').css('visibility', 'visible') : $('.new_models_ads').css('visibility', 'hidden');

});

$('#btn_diseno_arquero').click( function(){

	$('#options_diseno_arquero').css('display', 'block');
	$('#paginador_diseno_arquero').css('display', 'flex');

	$('#options_colores_arquero').css('display', 'none');

	$('#options_texto_arquero').css('display', 'none');

	$('#btn_diseno_arquero').removeClass().addClass('option_select');
	$('#btn_colores_arquero').removeClass().addClass('option_disable');
	$('#btn_numeros_arquero').removeClass().addClass('option_disable');

	(pageActual === 1) ? $('.new_models_ads').css('visibility', 'visible') : $('.new_models_ads').css('visibility', 'hidden');

});

$('#btn_colores').click( function(){

	$('#options_diseno').css('display', 'none');
	$('#paginador_diseno').css('display', 'none');

	$('#options_colores').css('display', 'block');

	$('#options_texto').css('display', 'none');

	$('#btn_diseno').removeClass().addClass('option_disable');
	$('#btn_colores').removeClass().addClass('option_select');
	$('#btn_numeros').removeClass().addClass('option_disable');

	$('.new_models_ads').css('visibility', 'hidden');
});

$('#btn_colores_arquero').click( function(){

	$('#options_diseno_arquero').css('display', 'none');
	$('#paginador_diseno_arquero').css('display', 'none');

	$('#options_colores_arquero').css('display', 'block');

	$('#options_texto_arquero').css('display', 'none');

	$('#btn_diseno_arquero').removeClass().addClass('option_disable');
	$('#btn_colores_arquero').removeClass().addClass('option_select');
	$('#btn_numeros_arquero').removeClass().addClass('option_disable');

	$('.new_models_ads').css('visibility', 'hidden');
});

$('#btn_numeros').click( function(){

	$('#options_diseno').css('display', 'none');
	$('#paginador_diseno').css('display', 'none');

	$('#options_colores').css('display', 'none');

	$('#options_texto').css('display', 'block');

	$('#btn_diseno').removeClass().addClass('option_disable');
	$('#btn_colores').removeClass().addClass('option_disable');
	$('#btn_numeros').removeClass().addClass('option_select');

	$('.new_models_ads').css('visibility', 'hidden');

});

$('#btn_numeros_arquero').click( function(){

	$('#options_diseno_arquero').css('display', 'none');
	$('#paginador_diseno_arquero').css('display', 'none');

	$('#options_colores_arquero').css('display', 'none');

	$('#options_texto_arquero').css('display', 'block');

	$('#btn_diseno_arquero').removeClass().addClass('option_disable');
	$('#btn_colores_arquero').removeClass().addClass('option_disable');
	$('#btn_numeros_arquero').removeClass().addClass('option_select');

	$('.new_models_ads').css('visibility', 'hidden');

});


/* NAV JUGADOR - ARQUERO - SHORT - MEDIA */
// JUGADOR
$('#btn_modelo_jugador').click( function(){

	// all off
	$('#preview nav ul li img').css('display', 'none');

	// over on
	$('.img_jugador_over').css('display', 'inline');

	// normal on
	$('.img_arquero').css('display', 'inline');
	$('.img_short').css('display', 'inline');
	$('.img_media').css('display', 'inline');
	$('.img_short_arquero').css('display', 'inline');

	// change clases others
	$('#preview nav ul li').removeClass('option_select');
	$('#preview nav ul li').addClass('option_disable');

	if(genero != 'chombas'){
		$('#btn_precio').addClass('option_select');
		$('#btn_precio').removeClass('option_disable');

		// $('#tabPrecio').html("$ "+ precioCamiseta);
		$('#btn_precio').css('display', 'block');
		// change clases selected
		$(this).addClass('option_select');
		$(this).removeClass('option_disable');
	}

	$('.formato_jugador').css('display', 'inline-block');
	$('.formato_arquero').css('display', 'none');

	vistaArquero = false;
	
	updateVista("jugador", secundario, secundario_no_espalda);
	
	// Update settings
	$('#settings').css('display', 'block');
	
	if(genero != 'chombas'){
		$('#settings_arquero').css('display', 'none');
		$('#settings_shorts').css('display', 'none');
		$('#settings_medias').css('display', 'none');
		$('#settings_shorts_arquero').css('display', 'none');
	}
	
	// switch
	if(genero != 'chombas'){
		$('#switch_si_no_arquero').css('display', 'none');
	}
	$('#settings .overlay').css('display', 'none');
	
	// Marcar el modelo seleccionado (cuando cambio de arquero a jugador)
	$('.sel_diseno').removeClass("selected");
	
	var opt_actual = $('#option_diseno').val();
	$('#diseno_'+opt_actual).addClass("selected");

	calcularPrecio();
});

// ARQUERO
$('#btn_modelo_arquero').click( function(){
	// all of
	$('#preview nav ul li img').css('display', 'none');

	// over on
	$('.img_arquero_over').css('display', 'inline');

	// normal on
	$('.img_jugador').css('display', 'inline');
	$('.img_short').css('display', 'inline');
	$('.img_media').css('display', 'inline');
	$('.img_short_arquero').css('display', 'inline');

	// change clases others
	$('#preview nav ul li').removeClass('option_select');
	$('#preview nav ul li').addClass('option_disable');

	// change clases selected
	$(this).addClass('option_select');
	$(this).removeClass('option_disable');

	$('#btn_precio').addClass('option_select');
	$('#btn_precio').removeClass('option_disable');

	$('#btn_precio').css('display', 'block');
	// change clases selected
	$(this).addClass('option_select');
	$(this).removeClass('option_disable');

	$('.formato_jugador').css('display', 'inline-block');
	$('.formato_arquero').css('display', 'none');

	$('.formato_jugador').css('display', 'none');
	$('.formato_arquero').css('display', 'inline-block');

	vistaArquero = true;
	
	updateVista("arquero", secundario, secundario_no_espalda);
	
	// Update settings
	$('#settings').css('display', 'none');
	$('#settings_arquero').css('display', 'block');
	$('#settings_shorts').css('display', 'none');
	$('#settings_medias').css('display', 'none');
	$('#settings_shorts_arquero').css('display', 'none');
	
	// switch
	$('#switch_si_no_arquero').css('display', 'block');
	
	$('#settings_arquero .overlay').css('display', 'none');
	
	// Marcar el modelo seleccionado (cuando cambio de arquero a jugador)
	$('.sel_diseno').removeClass("selected");
	
	var opt_actual = $('#option_diseno_arq').val();
	$('#diseno_'+opt_actual).addClass("selected");

	calcularPrecio();
});

// SHORT
$('#btn_modelo_short').click( function(){
	// all of
	$('#preview nav ul li img').css('display', 'none');

	// over on
	$('.img_short_over').css('display', 'inline');

	// normal on
	$('.img_jugador').css('display', 'inline');
	$('.img_arquero').css('display', 'inline');
	$('.img_media').css('display', 'inline');
	$('.img_short_arquero').css('display', 'inline');

	// change clases others
	$('#preview nav ul li').removeClass('option_select');
	$('#preview nav ul li').addClass('option_disable');

	// change clases selected
	$(this).addClass('option_select');
	$(this).removeClass('option_disable');
	
	updateVistaShort();
	
	// Update settings
	$('#settings').css('display', 'none');
	$('#settings_arquero').css('display', 'none');
	$('#settings_medias').css('display', 'none');
	$('#settings_shorts').css('display', 'block');
	$('#settings_shorts_arquero').css('display', 'none');

	calcularPrecio();
});

// SHORT ARQUERO
$('#btn_modelo_short_arquero').click( function(){
	// all of
	$('#preview nav ul li img').css('display', 'none');

	// over on
	$('.img_short_over_arquero').css('display', 'inline');

	// normal on
	$('.img_jugador').css('display', 'inline');
	$('.img_arquero').css('display', 'inline');
	$('.img_media').css('display', 'inline');
	$('.img_short').css('display', 'inline');

	// change clases others
	$('#preview nav ul li').removeClass('option_select');
	$('#preview nav ul li').addClass('option_disable');
	
	// change clases selected
	$(this).addClass('option_select');
	$(this).removeClass('option_disable');
	
	updateVistaShortArquero();
	
	// Update settings
	$('#settings').css('display', 'none');
	$('#settings_arquero').css('display', 'none');
	$('#settings_medias').css('display', 'none');
	$('#settings_shorts').css('display', 'none');
	$('#settings_shorts_arquero').css('display', 'block');

	calcularPrecio();
});

// MEDIAS
$('#btn_modelo_media').click( function(){
	// all of
	$('#preview nav ul li img').css('display', 'none');

	// over on
	$('.img_media_over').css('display', 'inline');

	// normal on
	$('.img_jugador').css('display', 'inline');
	$('.img_arquero').css('display', 'inline');
	$('.img_short').css('display', 'inline');
	$('.img_short_arquero').css('display', 'inline');

	// change clases others
	$('#preview nav ul li').removeClass('option_select');
	$('#preview nav ul li').addClass('option_disable');
	
	$('.formato_jugador').css('display', 'inline-block');
	$('.formato_arquero').css('display', 'none');
	
	// change clases selected
	$(this).addClass('option_select');
	$(this).removeClass('option_disable');
	
	updateVistaMedias();
	
	// Update settings
	$('#settings').css('display', 'none');
	$('#settings_arquero').css('display', 'none');
	$('#settings_shorts').css('display', 'none');
	$('#settings_medias').css('display', 'block');
	$('#settings_shorts_arquero').css('display', 'none');

	calcularPrecio();
});


/* SWITCH INCLUIR DISEÑO SI / NO */

$('#option_switch_arquero').change(function(){
	if(this.checked) { // habilito opcion
		$('#option_arq_on').val(1);

		$('.preview_content_arquero .preview_front').css('opacity', 1);
		$('.preview_content_arquero .preview_back').css('opacity', 1);
		$('#settings .overlay').css('display', 'none');

		$('#arqueros').css('display', 'block');

		$('.vista_modelo_arquero').css('display', 'inline');
		
		if($('#option_camiseta_on').val() == 0){
			$('#hCantArqueros').val($('#minCamisetas').html());
		}
	}else{  // deshabilito opcion

		$('#option_arq_on').val(0);

		$('.preview_content_arquero .preview_front').css('opacity', 0.4);
		$('.preview_content_arquero .preview_back').css('opacity', 0.4);
		$('#settings .overlay').css('display', 'block');

		if($('#option_short_arquero_on').val() == 0){
			$('#arqueros').css('display', 'none');
		}

		$('.vista_modelo_arquero').css('display', 'none');

		$('#hCantArqueros').val(0);
	}
	calcularPrecio();
});

$('#option_switch_camiseta').change(function(){
	if(this.checked) { // habilito opcion
		$('#option_camiseta_on').val(1);

		$('.preview_content .preview_front').css('opacity', 1);
		$('.preview_content .preview_back').css('opacity', 1);
		$('#settings .overlay').css('display', 'none');
		
		$('.vista_modelo_jugador').css('display', 'inline');

		$('#hCantCamisetas').val($('#minCamisetas').html());
		if($('#option_arq_on').val() == 1){
			$('#hCantArqueros').val(0);
		}
	}else{  // deshabilito opcion

		$('#option_camiseta_on').val(0);

		$('.preview_content .preview_front').css('opacity', 0.4);
		$('.preview_content .preview_back').css('opacity', 0.4);
		$('#settings .overlay').css('display', 'block');
		
		$('.vista_modelo_jugador').css('display', 'none');

		$('#hCantCamisetas').val(0);
	}
	calcularPrecio();
});

$('#option_switch_short_arquero').change(function(){
	if(this.checked) {
		$('#option_short_arquero_on').val(1);

		$('.preview_content_short_arquero_content').css('opacity', 1);
		$('#settings_shorts_arquero .overlay').css('display', 'none');
		$('.box_precio_shorts').css('display', 'table-row');

		$('#arqueros').css('display', 'block');
		
		if($('#option_medias_on').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}

		$('.vista_modelo_short_arquero').css('display', 'inline');

		if($('#option_short_on').val() == 0){
			$('#hCantShortsArqueros').val($('#minShorts').html());
		}
	}else{
		$('#option_short_arquero_on').val(0);
		
		$('.preview_content_short_arquero_content').css('opacity', 0.4);
		$('#settings_shorts_arquero .overlay').css('display', 'block');
		$('.box_precio_shorts').css('display', 'none');
		$('.box_precio_medias').css('display', 'none');

		if($('#option_arq_on').val() == 0){
			$('#arqueros').css('display', 'none');
		}

		$('.vista_modelo_short_arquero').css('display', 'none');

		$('#hCantShortsArqueros').val(0);
	}
	calcularPrecio();
});

$('#option_switch_short').change(function(){
	if(this.checked) {
		$('#option_short_on').val(1);

		$('.preview_content_short_content').css('opacity', 1);
		$('#settings_shorts .overlay').css('display', 'none');
		$('.vista_modelo_short').css('display', 'inline');
		$('.box_precio_shorts').css('display', 'table-row');

		if($('#option_medias_on').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}

		$('#camisetas').css('display', 'block');

		$('#hCantShorts').val($('#minShorts').html());
		
		if($('#option_short_arquero_on').val() == 1){
			$('#hCantShortsArqueros').val(0);
		}
	}else{
		$('#option_short_on').val(0);
		
		$('.preview_content_short_content').css('opacity', 0.4);
		$('#settings_shorts .overlay').css('display', 'block');
		$('.vista_modelo_short').css('display', 'none');
		$('.box_precio_shorts').css('display', 'none');
		$('.box_precio_medias').css('display', 'none');

		$('#hCantShorts').val(0);
	}
	calcularPrecio();
});

$('#option_switch_medias').change(function(){
	if(this.checked) {
		$('#option_medias_on').val(1);
		$('.preview_content_medias_content').css('opacity', 1);
		$('#settings_medias .overlay').css('display', 'none');
		$('.vista_modelo_medias').css('display', 'block');
		
		if($('#option_short_on').val() == 1 || $('#option_short_arquero_on').val() == 1){
			$('.box_precio_medias').css('display', 'table-row');
		}
	}else{
		$('#option_medias_on').val(0);
		$('.preview_content_medias_content').css('opacity', 0.4);
		$('#settings_medias .overlay').css('display', 'block');
		$('.vista_modelo_medias').css('display', 'none');
		$('.box_precio_medias').css('display', 'none');
	}
	calcularPrecio();
});


/* SELECT DISENO */
$('.sel_diseno').click( function(){
	/* SELECT DISENO */
	var option = this.id.split("diseno_");
	var opt_diseno = option[1];
	updateDiseno("jugador", opt_diseno, secundario, secundario_no_espalda);
	
	// Pintar borde del seleccionado
	$('.sel_diseno').removeClass("selected");
	$(this).addClass("selected");
	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo
	if( principal[opt_diseno] ){
		$('#color_principal_box').css('display', 'block');
	}else{
		 $('#color_principal_box').css('display', 'none');
	}

	if( secundario[opt_diseno] ){
		$('#color_secundario_box').css('display', 'block');
	}else{
		 $('#color_secundario_box').css('display', 'none');
	}

});

$('.sel_diseno_arquero').click( function(){
	/* SELECT DISENO */
	var option = this.id.split("diseno_arquero_");
	var opt_diseno = option[1];
	updateDiseno("arquero", opt_diseno, secundario, secundario_no_espalda);
	
	// Pintar borde del seleccionado
	$('.sel_diseno_arquero').removeClass("selected");
	$(this).addClass("selected");
	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo
	if( principal[opt_diseno] ){
		$('#color_principal_box_arquero').css('display', 'block');
	}else{
		 $('#color_principal_box_arquero').css('display', 'none');
	}

	if( secundario[opt_diseno] ){
		$('#color_secundario_box_arquero').css('display', 'block');
	}else{
		 $('#color_secundario_box_arquero').css('display', 'none');
	}

});

	/* SELECT DISENO - paginador */

	var pageActual = 1;

	function showPage(number){

		$('.sel_diseno').css("display", "none");
		$('.sel_diseno_page_'+number).css("display", "inline");

		$('#paginador_diseno span').removeClass('selected_page');
		$('#btn_pg_diseno_'+number).addClass('selected_page');

		(number === 1) ? $('.new_models_ads').css('visibility', 'visible') : $('.new_models_ads').css('visibility', 'hidden');

		pageActual = number;

	}

	function showPageArq(number){

		$('.sel_diseno_arquero').css("display", "none");
		$('.sel_diseno_page_arquero_'+number).css("display", "inline");

		$('#paginador_diseno_arquero span').removeClass('selected_page');
		$('#btn_pg_diseno_arquero_'+number).addClass('selected_page');

		(number === 1) ? $('.new_models_ads').css('visibility', 'visible') : $('.new_models_ads').css('visibility', 'hidden');

		pageActual = number;

	}

	$('#btn_pg_diseno_1').click( function(){
		showPage(1);
	});

	$('#btn_pg_diseno_2').click( function(){
		showPage(2);
	});

	$('#btn_pg_diseno_3').click( function(){
		showPage(3);
	});

	$('#btn_pg_diseno_4').click( function(){
		showPage(4);
	});

	$('#btn_pg_prev').click( function(){
		if( parseInt(pageActual) > 1 ){
			var num = parseInt(pageActual)-1;
			showPage(num);
			pageActual = num;
		}
	});

	$('#btn_pg_next').click( function(){
		if( parseInt(pageActual) < 4 ){
			var num = parseInt(pageActual)+1;
			showPage(num);
			pageActual = num;
		}
	});

	$('#btn_pg_diseno_arquero_1').click( function(){
		showPageArq(1);
	});

	$('#btn_pg_diseno_arquero_2').click( function(){
		showPageArq(2);
	});

	$('#btn_pg_diseno_arquero_3').click( function(){
		showPageArq(3);
	});

	$('#btn_pg_diseno_arquero_4').click( function(){
		showPageArq(4);
	});

	$('#btn_pg_prev_arquero').click( function(){
		if( parseInt(pageActual) > 1 ){
			var num = parseInt(pageActual)-1;
			showPageArq(num);
			pageActual = num;
		}
	});

	$('#btn_pg_next_arquero').click( function(){
		if( parseInt(pageActual) < 4 ){
			var num = parseInt(pageActual)+1;
			showPageArq(num);
			pageActual = num;
		}
	});


/* SELECT COLOR BASE */

$('.sel_color_base').click( function(){
	var option = this.id.split("color_base_");

	//volvemos visibles todos los colores de todas las opciones:
	$('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
	$('#color_principal_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_'+option[1]).css('visibility', 'hidden');

	//del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
	$('#color_base_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	$('#color_secundario_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	$('#color_base_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
	$('#color_principal_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

	var nro_modelo;
	if( genero != 'chombas'){ // Configuracion arquero
		nro_modelo = $('#option_diseno').val();
		$('#option_color_base').val(option[1]);
	}
	$('.preview_front .img_base').attr('src', 'img/modelos/modelo_base/frente/'+option[1]+'.png');
	$('.preview_back .img_base').attr('src', 'img/modelos/modelo_base/espalda/'+option[1]+'.png');

});

$('.sel_color_base_arquero').click( function(){
	var option = this.id.split("color_base_arquero_");

	//volvemos visibles todos los colores de todas las opciones:
	$('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
	$('#color_principal_arquero_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+option[1]).css('visibility', 'hidden');

	//del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
	$('#color_base_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
	$('#color_base_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
	$('#color_principal_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');

	var nro_modelo;
	if( genero != 'chombas'){ // Configuracion arquero

		nro_modelo = $('#option_diseno_arq').val();
		$('#option_color_base_arq').val(option[1]);

	}

	$('.preview_front .img_base').attr('src', 'img/modelos/modelo_base/frente/'+option[1]+'.png');
	$('.preview_back .img_base').attr('src', 'img/modelos/modelo_base/espalda/'+option[1]+'.png');

});

/* SELECT COLOR PRINCIPAL */

$('.sel_color_principal').click( function(){

	var option = this.id.split("color_principal_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_secundario_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_base_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
	$('#color_principal_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

	var nro_modelo;

	if( genero != 'chombas'){ // Configuracion arquero
		nro_modelo = $('#option_diseno').val();
		$('#option_color_principal').val(option[1]);
	}

	$('.preview_front .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
	$('.preview_back .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');

});

$('.sel_color_principal_arquero').click( function(){

	var option = this.id.split("color_principal_arquero_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_arquero_'+option[1]).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	$('#color_base_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
	$('#color_principal_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');

	var nro_modelo;

	if( genero != 'chombas'){ // Configuracion arquero
		nro_modelo = $('#option_diseno_arq').val();
		$('#option_color_principal_arq').val(option[1]);
	}

	$('.preview_front .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
	$('.preview_back .img_principal').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');

});

/* SELECT COLOR SECUNDARIO */

$('.sel_color_secundario').click( function(){
	var option = this.id.split("color_secundario_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_'+option[1]).css('visibility', 'hidden');
	$('#color_principal_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_secundario_'+$('#option_color_base').val()).css('visibility', 'hidden');
	$('#color_base_'+$('#option_color_principal').val()).css('visibility', 'hidden');
	$('#color_secundario_'+$('#option_color_principal').val()).css('visibility', 'hidden');

	var nro_modelo;
	if( vistaArquero && genero != 'chombas'){ // Configuracion arquero
		nro_modelo = $('#option_diseno_arq').val();
		$('#option_color_secundario_arq').val(option[1]);
	}else{ // Configuracion jugador
		nro_modelo = $('#option_diseno').val();
		$('#option_color_secundario').val(option[1]);
	}

	$('.preview_front .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
	if( secundario_no_espalda[nro_modelo] ){
		$('.preview_back .img_secundaria').attr('src', 'img/transparent.png');
	}else{
		$('.preview_back .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
	}
});

$('.sel_color_secundario_arquero').click( function(){
	var option = this.id.split("color_secundario_arquero_");

	//volvemos visibles todos los colores de todas las partes:
	$('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
	$('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');

	//volvemos invisible el color de las otras partes para que no se repita el seleccionado
	$('#color_base_arquero_'+option[1]).css('visibility', 'hidden');
	$('#color_principal_arquero_'+option[1]).css('visibility', 'hidden');

	//de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
	$('#color_principal_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
	$('#color_base_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
	$('#color_secundario_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');

	var nro_modelo;
	if( vistaArquero && genero != 'chombas'){ // Configuracion arquero
		nro_modelo = $('#option_diseno_arq').val();
		$('#option_color_secundario_arq').val(option[1]);
	}else{ // Configuracion jugador
		nro_modelo = $('#option_diseno').val();
		$('#option_color_secundario').val(option[1]);
	}

	$('.preview_front .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
	if( secundario_no_espalda[nro_modelo] ){
		$('.preview_back .img_secundaria').attr('src', 'img/transparent.png');
	}else{
		$('.preview_back .img_secundaria').attr('src', 'img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
	}
});

/* SELECT FORMATO */

$('.sel_formato').click( function(){
	var option;
	var opt;
	var opt_color;
	if( vistaArquero && genero != 'chombas'){ // Configuracion arquero
		option = this.id.split("formato_arq_");
		opt = option[1];
		$('#option_formato_arq').val(opt);
		opt_color = $('#option_color_text_arq').val();
		$('.formato_nro_back img').attr('src', 'img/numeros_arq/'+opt+'/'+opt_color+'.png');
	}else{ // Configuracion jugador
		option = this.id.split("formato_");
		opt = option[1];
		$('#option_formato').val(opt);
		opt_color = $('#option_color_text').val();
		$('.formato_nro_back img').attr('src', 'img/numeros/'+opt+'/'+opt_color+'.png');
	}

	// Pintar borde del seleccionado
	$('.sel_formato').removeClass("selected");

	$(this).addClass("selected");

});

/* SELECT COLOR TEXT */

$('.sel_color_text').click( function(){
	var option = this.id.split("color_text_");
	var opt;
	if( vistaArquero && genero != 'chombas'){ // Configuracion arquero
		$('#option_color_text_arq').val(option[1]);
		opt = $('#option_formato_arq').val();
		$('.formato_nro_back img').attr('src', 'img/numeros_arq/'+opt+'/'+option[1]+'.png');
	}else{ // Configuracion jugador
		$('#option_color_text').val(option[1]);
		opt = $('#option_formato').val();
		$('.formato_nro_back img').attr('src', 'img/numeros/'+opt+'/'+option[1]+'.png');
	}
});


//////////////////////////////////////////////
/* INICIO SHORTS Y MEDIAS */
//////////////////////////////////////////////

$('#btn_diseno_short').click( function(){

	$('#options_diseno_short').css('display', 'block');
	$('#options_colores_short').css('display', 'none');
	$('#btn_diseno_short').removeClass().addClass('option_select');
	$('#btn_colores_short').removeClass().addClass('option_disable');

});

$('#btn_colores_short').click( function(){

	$('#options_diseno_short').css('display', 'none');
	$('#paginador_diseno_short').css('display', 'none');
	$('#options_colores_short').css('display', 'block');
	$('#btn_diseno_short').removeClass().addClass('option_disable');
	$('#btn_colores_short').removeClass().addClass('option_select');

});

$('#btn_diseno_short_arquero').click( function(){

	$('#options_diseno_short_arquero').css('display', 'block');
	$('#options_colores_short_arquero').css('display', 'none');
	$('#btn_diseno_short_arquero').removeClass().addClass('option_select');
	$('#btn_colores_short_arquero').removeClass().addClass('option_disable');

});

$('#btn_colores_short_arquero').click( function(){

	$('#options_diseno_short_arquero').css('display', 'none');
	$('#paginador_diseno_short_arquero').css('display', 'none');
	$('#options_colores_short_arquero').css('display', 'block');
	$('#btn_diseno_short_arquero').removeClass().addClass('option_disable');
	$('#btn_colores_short_arquero').removeClass().addClass('option_select');

});

/* SELECT DISENO SHORT */

$('.sel_diseno_short').click( function(){
	var option = this.id.split("diseno_short_");
	var opt_diseno = option[1];
	// Pintar borde del seleccionado
	$('.sel_diseno_short').removeClass("selected");
	$(this).addClass("selected");
	$('#option_diseno_short').val(opt_diseno);
	var c_base = $('#option_color_base_short').val();
	var c_prin = $('#option_color_principal_short').val();
	var c_secu = $('#option_color_secundario_short').val();

	$('.preview_content_short_content .img_base').attr('src', 'img/shorts/base/'+c_base+'.png');
	$('.preview_content_short_content .img_principal').attr('src', 'img/shorts/short_'+opt_diseno+'/color_principal/'+c_prin+'.png');

	if(opt_diseno == 3 ){ // Solo el diseno 3 tiene color secundario
		$('.preview_content_short_content .img_secundaria').attr('src', 'img/shorts/short_'+opt_diseno+'/color_secundario/'+c_secu+'.png');
	}else{
		$('.preview_content_short_content .img_secundaria').attr('src', 'img/transparent.png');
	}


	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo

	if(opt_diseno == 3 ){
		$('#color_secundario_box_short').css('display', 'block');
	}else{
		$('#color_secundario_box_short').css('display', 'none');
	}

});

/* SELECT COLOR BASE SHORT */

$('.sel_color_base_short').click( function(){

	var option = this.id.split("color_base_short_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short').val();
	$('#option_color_base_short').val(option[1]);

	$('.preview_content_short_content .img_base').attr('src', 'img/shorts/base/'+option[1]+'.png');

});

/* SELECT COLOR PRINCIPAL SHORT */

$('.sel_color_principal_short').click( function(){

	var option = this.id.split("color_principal_short_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short').val();
	$('#option_color_principal_short').val(option[1]);

	$('.preview_content_short_content .img_principal').attr('src', 'img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

});

/* SELECT COLOR SECUNDARIO SHORT */

$('.sel_color_secundario_short').click( function(){

	var option = this.id.split("color_secundario_short_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short').val();
	$('#option_color_secundario_short').val(option[1]);

	$('.preview_content_short_content .img_secundaria').attr('src', 'img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

});

/* SELECT DISENO SHORT ARQUERO */

$('.sel_diseno_short_arquero').click( function(){
	var option = this.id.split("diseno_short_arquero_");
	var opt_diseno = option[1];
	// Pintar borde del seleccionado
	$('.sel_diseno_short_arquero').removeClass("selected");
	$(this).addClass("selected");
	$('#option_diseno_short_arquero').val(opt_diseno);
	var c_base = $('#option_color_base_short_arquero').val();
	var c_prin = $('#option_color_principal_short_arquero').val();
	var c_secu = $('#option_color_secundario_short_arquero').val();

	$('.preview_content_short_arquero_content .img_base').attr('src', 'img/shorts/base/'+c_base+'.png');
	$('.preview_content_short_arquero_content .img_principal').attr('src', 'img/shorts/short_'+opt_diseno+'/color_principal/'+c_prin+'.png');

	if(opt_diseno == 3 ){ // Solo el diseno 3 tiene color secundario
		$('.preview_content_short_arquero_content .img_secundaria').attr('src', 'img/shorts/short_'+opt_diseno+'/color_secundario/'+c_secu+'.png');
	}else{
		$('.preview_content_short_arquero_content .img_secundaria').attr('src', 'img/transparent.png');
	}


	// Ocultar o mostrar opciones de colores principales y secundarios si estan disponibles en el modelo

	if(opt_diseno == 3 ){
		$('#color_secundario_box_short_arquero').css('display', 'block');
	}else{
		$('#color_secundario_box_short_arquero').css('display', 'none');
	}

});

/* SELECT COLOR BASE SHORT ARQUERO */

$('.sel_color_base_short_arquero').click( function(){

	var option = this.id.split("color_base_short_arquero_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short_arquero').val();
	$('#option_color_base_short_arquero').val(option[1]);

	$('.preview_content_short_arquero_content .img_base').attr('src', 'img/shorts/base/'+option[1]+'.png');

});

/* SELECT COLOR PRINCIPAL SHORT ARQUERO */

$('.sel_color_principal_short_arquero').click( function(){

	var option = this.id.split("color_principal_short_arquero_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short_arquero').val();
	$('#option_color_principal_short_arquero').val(option[1]);

	$('.preview_content_short_arquero_content .img_principal').attr('src', 'img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

});

/* SELECT COLOR SECUNDARIO SHORT ARQUERO */

$('.sel_color_secundario_short_arquero').click( function(){

	var option = this.id.split("color_secundario_short_arquero_");

	var nro_modelo;

	nro_modelo = $('#option_diseno_short_arquero').val();
	$('#option_color_secundario_short_arquero').val(option[1]);

	$('.preview_content_short_arquero_content .img_secundaria').attr('src', 'img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

});

// MEDIAS

/* SELECT COLOR MEDIAS */

$('.sel_color_medias').click( function(){

	var option = this.id.split("color_medias_");

	$('#option_color_medias').val(option[1]);

	$('.preview_content_medias_content .img_medias_frente').attr('src', 'img/medias/frente/'+option[1]+'.png');
	$('.preview_content_medias_content .img_medias_perfil').attr('src', 'img/medias/perfil/'+option[1]+'.png');

});

//////////////////////////////////////////////
/* FIN SHORTS Y MEDIAS */
//////////////////////////////////////////////

/* BTN CONFIRMAR DISENO */

$('#btn_confirmar').click( function(){
	if(parseInt($('#hCantShorts').val()) && parseInt($('#hCantCamisetas').val())){//conjunto habilitado
		const shortsActuales = parseInt($('#hCantShorts').val())
		const camisetasActuales = parseInt($('#hCantCamisetas').val())
		let conjuntosMostrados = $('.conjunto_jugador').children().length
		const camisetasMostradas = $('.camiseta_jugador').children().length
		const shortsMostrados = $('.short_jugador').children().length
		const conjuntosAgregar = camisetasActuales - camisetasMostradas - conjuntosMostrados;
		for(let i = 0; i < conjuntosAgregar; i++){
			$('#add_conjunto_jugador').click();
		}
		conjuntosMostrados = $('.conjunto_jugador').children().length
		$('#hCantCamisetas').val(camisetasMostradas + conjuntosMostrados)
		$('#hCantShorts').val(shortsMostrados + conjuntosMostrados)
	}else{
		//Como no están seleccionados los conjuntos, se eliminan:
		jQuery.each($('.conjunto_jugador').children(), function() {
			$(this).remove();
		});

		if(parseInt($('#hCantCamisetas').val())){//solamente camisetas
			const camisetasActuales = parseInt($('#hCantCamisetas').val())
			const camisetasMostradas = $('.camiseta_jugador').children().length
			const camisetasAgregar = camisetasActuales - camisetasMostradas;
			for(let i = 0; i < camisetasAgregar; i++){
				$('#add_jugador').click();
			}
			$('#hCantCamisetas').val(camisetasActuales)

			jQuery.each($('.short_jugador').children(), function() {
				$(this).remove();
			});
		}else if(parseInt($('#hCantShorts').val())){//solamente shorts (no deberia existir este caso actualmente)
			const shortsActuales = parseInt($('#hCantShorts').val())
			const shortsMostrados = $('.short_jugador').children().length
			const shortsAgregar = shortsActuales - shortsMostrados;
			for(let i = 0; i < shortsAgregar; i++){
				$('#add_short_jugador').click();
			}
			$('#hCantShorts').val(shortsActuales)

			jQuery.each($('.camiseta_jugador').children(), function() {
				$(this).remove();
			});
		}
	}

	if(parseInt($('#hCantShortsArqueros').val()) && parseInt($('#hCantArqueros').val())){//conjunto habilitado
		const shortsActuales = parseInt($('#hCantShortsArqueros').val())
		const camisetasActuales = parseInt($('#hCantArqueros').val())
		let conjuntosMostrados = $('.conjunto_arquero').children().length
		const camisetasMostradas = $('.camiseta_arquero').children().length
		const shortsMostrados = $('.short_arquero').children().length
		const conjuntosAgregar = camisetasActuales - camisetasMostradas - conjuntosMostrados;
		for(let i = 0; i < conjuntosAgregar; i++){
			$('#add_conjunto_arquero').click();
		}
		conjuntosMostrados = $('.conjunto_arquero').children().length
		$('#hCantArqueros').val(camisetasMostradas + conjuntosMostrados)
		$('#hCantShortsArqueros').val(shortsMostrados + conjuntosMostrados)
	}else{
		//Como no están seleccionados los conjuntos, se eliminan:
		jQuery.each($('.conjunto_arquero').children(), function() {
			$(this).remove();
		});

		if(parseInt($('#hCantArqueros').val())){//solamente camisetas
			const camisetasActuales = parseInt($('#hCantArqueros').val())
			const camisetasMostradas = $('.camiseta_jugador').children().length
			const camisetasAgregar = camisetasActuales - camisetasMostradas;
			for(let i = 0; i < camisetasAgregar; i++){
				$('#add_arquero').click();
			}
			$('#hCantArqueros').val(camisetasActuales)

			jQuery.each($('.short_arquero').children(), function() {
				$(this).remove();
			});
		}else if(parseInt($('#hCantShortsArqueros').val())){//solamente shorts (no deberia existir este caso actualmente)
			const shortsActuales = parseInt($('#hCantShortsArqueros').val())
			const shortsMostrados = $('.short_arquero').children().length
			const shortsAgregar = shortsActuales - shortsMostrados;
			for(let i = 0; i < shortsAgregar; i++){
				$('#add_short_arquero').click();
			}
			$('#hCantShortsArqueros').val(shortsActuales)

			jQuery.each($('.camiseta_arquero').children(), function() {
				$(this).remove();
			});
		}
	}

	$('#camisetas').css('display', 'none');
	$('#add_jugador').css('display', 'none');
	$('#add_short_jugador').css('display', 'none');
	$('#add_conjunto_jugador').css('display', 'none');
	if($('#option_short_on').val() != 0 || $('#option_camiseta_on').val() != 0){
		$('#camisetas').css('display', 'block');
		if($('#option_camiseta_on').val() != 0){
			$('#add_jugador').css('display', 'inline');
		}
		if($('#option_short_on').val() != 0){
			$('#add_short_jugador').css('display', 'inline');
		}
		if($('#option_short_on').val() != 0 && $('#option_camiseta_on').val() != 0){
			$('#add_conjunto_jugador').css('display', 'inline');
		}
	}

	$('#arqueros').css('display', 'none');
	$('#add_arquero').css('display', 'none');
	$('#add_short_arquero').css('display', 'none');
	$('#add_conjunto_arquero').css('display', 'none');
	if($('#option_short_arquero_on').val() != 0 || $('#option_arq_on').val() != 0){
		$('#arqueros').css('display', 'block');
		if($('#option_arq_on').val() != 0){
			$('#add_arquero').css('display', 'inline');
		}
		if($('#option_short_arquero_on').val() != 0){
			$('#add_short_arquero').css('display', 'inline');
		}
		if($('#option_short_arquero_on').val() != 0 && $('#option_arq_on').val() != 0){
			$('#add_conjunto_arquero').css('display', 'inline');
		}
	}
	
	updateTotalBox();

	calcularPrecio();
	
	$('#disenador').fadeOut( "slow", function() {
		updateVistaFinal(secundario, secundario_no_espalda);
		
		$('#formulario').fadeIn();
	});
	
	if(!preguntasFrecuentesVista){
		preguntasFrecuentes();
	}
});

/* BTN CONFIRMAR DISENO */

$('#btn_modificar').click( function(){
	$('#formulario').fadeOut( "fast", function() {
		$('#disenador').fadeIn();
		calcularPrecio();
		updateTotalBox();
	});
});

/* FORMULARIO */
/* Agregar Jugador */

$('#add_jugador').click(function(){
	var row_jugador = '<div class="row_jugador camiseta_jugador" name="row_camiseta_jugador"><div><label>NOMBRE: <input type="text" name="nombre_jugador[]" class="nombre_jugador" /></label><label>N&ordm;: <input type="number" min="0" name="numero_jugador[]" class="numero_jugador" maxlength="3" /></label><label>TALLE: <select name="talle_jugador[]" class="talle_jugador"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete">X</span></div></div>';
	$('#list_jugadores').append(row_jugador);

	$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) + 1);

	calcularPrecio();
	updateTotalBox();
});

$('#add_short_jugador').click(function(){
	var row_jugador = '<div class="row_jugador short_jugador" name="row_short_jugador"><div><label>TALLE SHORT: <select name="talle_short_jugador[]" class="talle_short_jugador"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete_short">X</span></div></div>';
	$('#list_jugadores').append(row_jugador);

	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecio();
	updateTotalBox();
});

$('#add_conjunto_jugador').click(function(){
	var row_jugador = '<div class="row_jugador conjunto_jugador" name="row_conjunto_jugador"><div><label>NOMBRE: <input type="text" name="nombre_jugador[]" class="nombre_jugador" /></label><label>N&ordm;: <input type="number" min="0" name="numero_jugador[]" class="numero_jugador" maxlength="3" /></label><label>TALLE: <select name="talle_jugador[]" class="talle_jugador"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><label>TALLE SHORT: <select name="talle_short_jugador[]" class="talle_short_jugador"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete_conjunto_jugador">X</span></div></div>';
	$('#list_jugadores').append(row_jugador);

	$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) + 1);
	$('#hCantShorts').val(parseInt($('#hCantShorts').val()) + 1);

	calcularPrecio();
	updateTotalBox();
});

/* Agregar Arquero */
$('#add_arquero').click(function(){
	var row_arquero = '<div class="row_arquero camiseta_arquero" name="row_camiseta_arquero"><div><label>NOMBRE: <input type="text" name="nombre_arquero[]" class="nombre_arquero" /></label><label>N&ordm;: <input type="number" min="0" name="numero_arquero[]" class="numero_arquero" maxlength="3" /></label><label>TALLE: <select name="talle_arquero[]" class="talle_arquero"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete">X</span></div></div>';
	$('#list_arqueros').append(row_arquero);

	$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) + 1);

	calcularPrecio();
	updateTotalBox();
});

$('#add_short_arquero').click(function(){
	let widthTalleShort = '';
	if($('#option_switch_short').is(':checked')){
		widthTalleShort = ' display: inline;';
	}

	var row_arquero = '<div class="row_arquero short_arquero" name="row_short_arquero"><div><label>TALLE SHORT: <select name="talle_short_arquero[]" class="talle_short_arquero"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete_short">X</span></div></div>';
	$('#list_arqueros').append(row_arquero);

	$('#hCantShortsArqueros').val(parseInt($('#hCantShortsArqueros').val()) + 1);

	calcularPrecio();
	updateTotalBox();
});

$('#add_conjunto_arquero').click(function(){
	let widthTalleShort = '';
	if($('#option_switch_short').is(':checked')){
		widthTalleShort = ' display: inline;';
	}

	var row_arquero = '<div class="row_arquero conjunto_arquero" name="row_conjunto_arquero"><div><label>NOMBRE: <input type="text" name="nombre_arquero[]" class="nombre_arquero" /></label><label>N&ordm;: <input type="number" min="0" name="numero_arquero[]" class="numero_arquero" maxlength="3" /></label><label>TALLE: <select name="talle_arquero[]" class="talle_arquero"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><label>TALLE SHORT: <select name="talle_short_arquero[]" class="talle_short_arquero"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></label><span class="btn_delete_conjunto_jugador">X</span></div></div>';
	$('#list_arqueros').append(row_arquero);

	$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) + 1);
	$('#hCantShortsArqueros').val(parseInt($('#hCantShortsArqueros').val()) + 1);


	calcularPrecio();
	updateTotalBox();
});

/* Delete Jugador / Arquero */
$(document).on('click','.btn_delete',function() {
	if ($(this).parent().parent().hasClass("row_arquero") && genero != 'chombas') {
		//estoy borrando un arquero
		$(this).parent().parent().remove();
		
		$('#hCantArqueros').val(parseInt($('#hCantArqueros').val()) - 1);
	} else {
		//estoy borrando un jugador
		$(this).parent().parent().remove();
		
		$('#hCantCamisetas').val(parseInt($('#hCantCamisetas').val()) - 1);
	}

	calcularPrecio();
	updateTotalBox();
});

$(document).on('click','.btn_delete_conjunto_jugador',function() {
	if ($(this).parent().parent().hasClass("row_arquero") && genero != 'chombas') {
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

	calcularPrecio();
	updateTotalBox();
});

/* Delete Short Jugador / Short Arquero */
$(document).on('click','.btn_delete_short',function() {
	if ($(this).parent().parent().hasClass("row_arquero") && genero != 'chombas') {
		//estoy borrando un arquero
		$(this).parent().parent().remove();
		
		$('#hCantShortsArqueros').val(parseInt($('#hCantShortsArqueros').val()) - 1);
	} else {
		//estoy borrando un jugador
		$(this).parent().parent().remove();
		
		$('#hCantShorts').val(parseInt($('#hCantShorts').val()) - 1);
	}

	calcularPrecio();
	updateTotalBox();
});

/* ENVIAR PEDIDO */
$("form#formulario").submit(function(event){
	event.preventDefault();
	enviar(true);
});

function enviar(enviaEmail, metodosPago = false){
	// ga('send', 'event', 'Diseñador', 'confirmar diseno');
	gtag('event', 'Diseñador', { 'event_category': ' Diseñador ', 'event_action': ' enviar pedido '});

	var nombre_apellido = $('#nombre_apellido').val();
	var email = $('#email').val().trim();
	var telefono = $('#telefono').val().trim();
	var codigo_postal_envio = $('#codigo_postal_envio').val();
	var zona_envio = $('#zona_envio').val();

	/* Verificacion jugadores */
	var numero_jugador = $('.numero_jugador');
	var errorJugadores = true;
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
		var numero_arquero = $('.numero_arquero');
		for( var i = 0; i < parseInt($('#hCantArqueros').val()); i++ ){
			var numero_arq = numero_arquero[i].value;
			if( numero_arq == "" ){
				numero_arquero[i].style.border = "1px solid #f51a1a";
				errorJugadores = false;
			}else{
				numero_arquero[i].style.border = "1px solid #afafaf";
			}
		}

		if($('#arqueros').is(':visible') && $('#list_arqueros').children().length == 0){
			faltaSolicitarArquero = true;
			Swal.fire(
				'Arquero',
				'Debe completar los detalles de arquero.',
				'info'
			);
			$('html, body').animate({scrollTop: $('#arqueros').offset().top}, "slow");
		}
	}

	/* Verificaciones */
	if( nombre_apellido == '' ){
		$('#nombre_apellido').css("border", "1px solid #f51a1a");
	}else{
		$('#nombre_apellido').css("border", "1px solid #bdc4c9");
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

	var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var test = ( emailRegExp.test(email) );
	if( email == '' || !test ){
		$('#email').css("border", "1px solid #f51a1a");
	}else{
		$('#email').css("border", "1px solid #bdc4c9");
	}

	var telefonoRegExp = /^[\+]{0,1}[0-9-]+$/;
	var testTelefono = ( telefonoRegExp.test(telefono) );
	if( telefono == '' || !testTelefono ){
		$('#telefono').css("border", "1px solid #f51a1a");
	}else{
		$('#telefono').css("border", "1px solid #bdc4c9");
	}

	let camisetasJugadores = [];
	jQuery.each(document.getElementsByName("row_camiseta_jugador"), function() {
		let row_camiseta_jugador = this.getElementsByTagName('*');
		let camiseta = {};
		jQuery.each(row_camiseta_jugador, function() {
			if(this.name == 'nombre_jugador[]'){
				camiseta.nombre_jugador = this.value;
			} else if(this.name == 'numero_jugador[]'){
				camiseta.numero_jugador = this.value;
			} else if(this.name == 'talle_jugador[]'){
				camiseta.talle_jugador = this.value;
			}
		});
		camisetasJugadores.push(camiseta);
	});
	console.log(camisetasJugadores);

	let shortsJugadores = [];
	jQuery.each(document.getElementsByName("row_short_jugador"), function() {
		let row_short_jugador = this.getElementsByTagName('*');
		let short = {};
		jQuery.each(row_short_jugador, function() {
			if(this.name == 'talle_short_jugador[]'){
				short.talle_short_jugador = this.value;
			}
		});
		shortsJugadores.push(short);
	});
	console.log(shortsJugadores);

	let conjuntosJugadores = [];
	jQuery.each(document.getElementsByName("row_conjunto_jugador"), function() {
		let row_conjunto_jugador = this.getElementsByTagName('*');
		let conjunto = {};
		jQuery.each(row_conjunto_jugador, function() {
			if(this.name == 'nombre_jugador[]'){
				conjunto.nombre_jugador = this.value;
			} else if(this.name == 'numero_jugador[]'){
				conjunto.numero_jugador = this.value;
			} else if(this.name == 'talle_jugador[]'){
				conjunto.talle_jugador = this.value;
			} else if(this.name == 'talle_short_jugador[]'){
				conjunto.talle_short_jugador = this.value;
			}
		});
		conjuntosJugadores.push(conjunto);
	});
	console.log(conjuntosJugadores);

	let camisetasArqueros = [];
	jQuery.each(document.getElementsByName("row_camiseta_arquero"), function() {
		let row_camiseta_arquero = this.getElementsByTagName('*');
		let camiseta = {};
		jQuery.each(row_camiseta_arquero, function() {
			if(this.name == 'nombre_arquero[]'){
				camiseta.nombre_arquero = this.value;
			} else if(this.name == 'numero_arquero[]'){
				camiseta.numero_arquero = this.value;
			} else if(this.name == 'talle_arquero[]'){
				camiseta.talle_arquero = this.value;
			}
		});
		camisetasArqueros.push(camiseta);
	});
	console.log(camisetasArqueros);

	let shortsArqueros = [];
	jQuery.each(document.getElementsByName("row_short_arquero"), function() {
		let row_short_arquero = this.getElementsByTagName('*');
		let short = {};
		jQuery.each(row_short_arquero, function() {
			if(this.name == 'talle_short_arquero[]'){
				short.talle_short_arquero = this.value;
			}
		});
		shortsArqueros.push(short);
	});
	console.log(shortsArqueros);

	let conjuntosArqueros = [];
	jQuery.each(document.getElementsByName("row_conjunto_arquero"), function() {
		let row_conjunto_arquero = this.getElementsByTagName('*');
		let conjunto = {};
		jQuery.each(row_conjunto_arquero, function() {
			if(this.name == 'nombre_arquero[]'){
				conjunto.nombre_arquero = this.value;
			} else if(this.name == 'numero_arquero[]'){
				conjunto.numero_arquero = this.value;
			} else if(this.name == 'talle_arquero[]'){
				conjunto.talle_arquero = this.value;
			} else if(this.name == 'talle_short_arquero[]'){
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
		$('#formulario .top .alert_min').css('color', 'rgb(245, 26, 26)');
		$('html, body').animate({scrollTop: $('#formulario .top .alert_min').offset().top}, "slow");
		superaMinimo = false;
	}else{
		$('#formulario .top .alert_min').css('color', '#afafaf');
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
		$('#btn_mp').css("visibility", "hidden");
		$('#btn_enviar').css("visibility", "hidden");
		$('#loading_btn_enviar').css("visibility", "visible");
		var pedidoUuid = $('#pedidoUuid').val();
		var formData = new FormData($('#formulario')[0]);
		formData.append('genero', genero);
		formData.append('pedidoUuid', pedidoUuid);
		formData.append('camisetasJugadores', JSON.stringify(camisetasJugadores));
		formData.append('shortsJugadores', JSON.stringify(shortsJugadores));
		formData.append('conjuntosJugadores', JSON.stringify(conjuntosJugadores));
		formData.append('camisetasArqueros', JSON.stringify(camisetasArqueros));
		formData.append('shortsArqueros', JSON.stringify(shortsArqueros));
		formData.append('conjuntosArqueros', JSON.stringify(conjuntosArqueros));
		formData.append('precio', parseInt($('.precioTotalD').html()));

		$.ajax({
			url: '../common/includes/inc.form.php',
			type: 'POST',
			data: formData,
			mimeType: 'multipart/form-data',
			async: false,
			cache: false,
			contentType: false,
			scriptCharset: "utf-8" ,
			encoding:"UTF-8",
			processData: false,
			error: function (jqXHR, textStatus, errorThrown ) {
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
				$('#btn_mp').css("visibility", "visible");
				$('#btn_enviar').css("visibility", "visible");
				$('#loading_btn_enviar').css("visibility", "hidden");
				Swal.fire(
					'Oooops',
					'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
					'error'
				);
			},
			success: function (html) {
				var obj = null;
				var returndata = null;
				try {
					obj = JSON.parse(html);
					returndata = obj.message;
					pedidoUuid = obj.pedidoUuid;
					
					$('#pedidoUuid').val(pedidoUuid);

					if(metodosPago){
						$('#metodos_pago').css({'display': 'block'});
						$('#btn_metodos_pago').remove();
						$('#btn_enviar').remove();
						$('#loading_btn_enviar').css("visibility", "hidden");
						$('#btn_mp').css("visibility", "visible");
					}else{
						var href_face = 'https://www.facebook.com/sharer/sharer.php?u=http://yakka.com.ar/personalizador/'+genero+'/pedido-'+pedidoUuid;
						var href_tw = 'https://twitter.com/share?url=http%3A%2F%2Fyakka.com.ar%2Fpersonalizador%2F'+genero+'%2Fpedido-'+pedidoUuid;
						$('#share_face_desk').attr("href", href_face);
						$('#twitter_btn').attr("href", href_tw);
						$('#finalizado').html(returndata);
		
						if(!enviaEmail){
							iniciarMercadoPago(pedidoUuid, genero)
						}else{
							$('#formulario').fadeOut( "fast", function() {
								$('#finalizado').fadeIn();
							});
			
							$('#btn_mp').css("visibility", "visible");
							$('#btn_enviar').css("visibility", "visible");
							$('#loading_btn_enviar').css("visibility", "hidden");
						}
					}
				} catch (err) {
					console.log(err);
					$('#btn_mp').css("visibility", "visible");
					$('#btn_enviar').css("visibility", "visible");
					$('#loading_btn_enviar').css("visibility", "hidden");
					Swal.fire(
						'Oooops',
						'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
						'error'
					);
				}
			}
		});
	}
}

function updateTotalBox() {
	$('.precioConjunto').html(precioConjunto);

	costoTotal = parseInt($('#hCantShorts').val()) * parseInt($('#precio_short').val()) + 
				parseInt($('#hCantShortsArqueros').val()) * parseInt($('#precio_short').val()) + 
				(parseInt($('#hCantShortsArqueros').val()) + parseInt($('#hCantShorts').val())) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()) + 
				(parseInt($('#hCantCamisetas').val()) + parseInt($('#hCantArqueros').val())) * parseInt($('#precio_camiseta').val());

	//DESCUENTO:
	if(costoTotal >= d2c) {
		costoTotalDesc = costoTotal * (1 - (d2/100));
		$('.descuentoAplic').html(d2 + "%");
		$('.costoConDescuento').css("visibility", "visible");
	} else if(costoTotal >= d1c && costoTotal < d2c) {
		costoTotalDesc = costoTotal * (1 - (d1/100));
		$('.descuentoAplic').html(d1 + "%");
		$('.costoConDescuento').css("visibility", "visible");
	} else {
		costoTotalDesc = costoTotal;
		$('.descuentoAplic').html(0);
		$('.costoConDescuento').css("visibility", "hidden");
	}

	$('.precioTotal').html(parseFloat(costoTotal.toFixed(2)));
	$('.precioTotalD').html(parseFloat(costoTotalDesc.toFixed(2)));
	$('#hTotal').val(parseFloat(costoTotal.toFixed(2)));
}

$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = 300;

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".scrollingBox" ).css({
				"position": "fixed",
				"top": "15px"
			});
		} else {
			$( ".scrollingBox" ).css({
				"position": "static"
			});
		}
	});

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
		} else {
			$( ".scrollingBoxFixed" ).css({
				"position": "static"
			});
		}
	});
});

function solicitarMercadoPago() {
	enviar(false);
}

function iniciarMercadoPago(pedidoUuid, genero) {

	let datos = 'precio='+parseInt($('.precioTotalD').html())+'&genero='+genero+'&pedido_id='+pedidoUuid;
	$.ajax({
		type: 'POST',
		url: "../common/includes/mercadopago.php",
		cache: false,
		data: datos,
		success: function (html) {
			$('#btn_mp').css("visibility", "visible");
			$('#btn_enviar').css("visibility", "visible");
			$('#loading_btn_enviar').css("visibility", "hidden");
			var obj = null;
			try {
				obj = JSON.parse(html);
			} catch (err) {
			}
			if (obj) {
				redirigirMercadoPago(obj.preference);
			} else {
				alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			$('#btn_mp').css("visibility", "visible");
			$('#btn_enviar').css("visibility", "visible");
			$('#loading_btn_enviar').css("visibility", "hidden");
			alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
		},
	});
}

function redirigirMercadoPago(urlMercadoPago) {
	$MPC.openCheckout ({
		url: urlMercadoPago,
		mode: "modal",
		onreturn: execute_my_onreturn
	});
}

function execute_my_onreturn(json) {
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

$('#zona_envio').bind('change', function () {
	if($('#zona_envio').val() == 'CABA' || $('#zona_envio').val() == 'GBA'){
		$( "#tipo_envio" ).find('option[value="moto"]').prop('disabled', false);
		$( "#tipo_envio" ).find('option[value="correo"]').prop('disabled', true);
		if($( "#tipo_envio" ).find('option[value="correo"]').is(':selected')){
			$( "#tipo_envio" ).val('moto');
		}
	}else{
		$( "#tipo_envio" ).find('option[value="moto"]').prop('disabled', true);
		$( "#tipo_envio" ).find('option[value="correo"]').prop('disabled', false);
		if($( "#tipo_envio" ).find('option[value="moto"]').is(':selected')){
			$( "#tipo_envio" ).val('correo');
		}
	}
});
$('#zona_envio').trigger('change');

function preguntasFrecuentes(){
	preguntasFrecuentesVista = true;
	
	Swal.fire({
		title: '<strong>Preguntas frecuentes</strong>',
		icon: 'info',
		html:
		  '<b>¿De qué tela son  las Camisetas y shorts?</b><BR>' + 

		  'La tela que utilizamos es Dri Fit Antitranspirante, tela totalmente apta para deportes-<BR><BR>' + 
		 
		 
		  '<b>¿Cómo las hacemos?</b><BR>' + 
		 
		  'Las camisetas son 100% sublimadas,  con diseños personalizados tal cual figuran en las imágenes, en las que se pueden seleccionar las diferentes opciones.<BR><BR>' + 
		 
		 
		  '<b>-Cómo diseñó la camiseta del arquero?</b><BR>' + 
		 
		  'Ingresando a nuestra página Web en el Diseñador de camisetas YAKKA, ir a  la solapa MODELO DE ARQUERO, luego seleccionar botón sombreado para indicar que querés agregar el mismo. Allí podrás elegir también el diseño, color y formato del Nº de jugador. Luego seleccionar la opción SIGUIENTE PASO para completar los datos: nombre, Nº jugador y talle. Si necesitás agregar otra camiseta seleccionar +AGREGAR ARQUERO.<BR><BR>' + 
		 
		 
		  '<b>-Cómo sé el precio del short y las medias?</b><BR>' + 
		 
		  'En  la solapa MEDIAS o SHORTS seleccionar EL botón sombreado QUIERO MEDIAS, para indicar que queres agregarlas. Elegís un color de las opciones y podras visualizar el precio dependiendo de la cantidad de camisetas o conjuntos que hayas agregado a tu pedido.<BR><BR>' + 
		 
		 
		  '<b>-Se puede modificar algo del diseño que elijo?</b> (ej.: forma de cuello, poner otras tipografías, Modificar o agregar un color que no está en el diseñador)<BR>' + 
		 
		  'Todos los artículos figuran tal cual las imágenes y NO podrán ser modificados.<BR><BR>' + 
		 
		 
		  '<b>-Los modelos se pueden hacer sin mangas (musculosas)?</b><BR>' + 
		 
		  'Si, se puede.<BR>' + 
		 
		  'Realizas tu pedido siguiendo todos los pasos y al completar tus datos personales podrás especificar  en el cuadro de COMENTARIO  tu pedido de las camisetas sin mangas.Luego un asesor se pondrá en contacto para confirmar tu solicitud.<BR><BR>' + 
		 
		 
		  '<b>-Le quiero agregar escudo y/o publicidad a mi diseño, ¿Por dónde lo envió?</b><BR>' + 
		 
		  'Luego de haber completado los datos de los jugadores: nombre, Nº de jugador y talle, en la sección ESCUDO   lo podrás adjuntar el el Clickeando SELECCIONAR ARCHIVO . Luego elegir posición: CENTRO o CORAZON<BR>' + 
		 
		  'Si querés, podrás agregar una imagen extra ( Logo o publicidad), siguiendo los mismos pasos pero eligiendo como posición: frente, espalda, manga izquierda, manga derecha.<BR><BR>' + 
		 
		 
		  '<b>-Se puede hacer un pedido mixto? Ej.: Mitad del pedido corte femenino y el otra mitad masculino.</b><BR>' + 
		 
		  'No, no se puede realizar un pedido mixto. En este caso deberás realizarlo por separado.<BR><BR>' + 
		 
		 
		  '<b>- El diseño que quiero no está en el diseñador. Se puede hacer igual?</b><BR>' + 
		 
		  'Se puede realizar 100 % personalizado, para la fabricación del mismo es necesario que te comuniques con nosotros para confirmar si es posible la realización.<BR><BR>'
	}).then((result) => {
		$('.swal2-content').css('text-align', 'center');
		$('.swal2-popup').css('width', '32em');
	})
	$('.swal2-content').css('text-align', 'left');
	$('.swal2-popup').css('width', '80%');
}

function guiaDeCompras(){
	Swal.fire({
		title: '<strong>Guía de compras</strong>',
		icon: 'info',
		html:
		  'Acá pronto encontrarás una guía de compras.'
	}).then((result) => {
		$('.swal2-content').css('text-align', 'center');
		$('.swal2-popup').css('width', '32em');
	})
	$('.swal2-content').css('text-align', 'left');
	$('.swal2-popup').css('width', '80%');
}