var preguntasFrecuentesVista = false;
var current = 0;
var precioConjunto = null;

var enviaEmail = false
var metodosPago = false

var url_server = null;
var genero = null;
$( document ).ready( function(){
	genero = document.getElementById('script_futbol_js').getAttribute("genero");
  url_server = document.getElementById('script_futbol_js').getAttribute("url_server");

  $('.precio_total').html(0)

  precioConjunto = parseFloat( $('#precio_camiseta').val() );

  setTimeout(function () {
		if(!preguntasFrecuentesVista){
			preguntasFrecuentes();
		}
	 }, 15000);

  d1 = parseInt($('#d1').val());
  d1c = parseInt($('#d1c').val());
  d2 = parseInt($('#d2').val());
  d2c = parseInt($('#d2c').val());

  updateTotalBox();
});

/* OPTIONS */

	/* Colores disponibles por modelo */

	var principal = [];
	var secundario = [];
	var secundario_no_espalda = [];
	var formato = [];
	var vistaArquero = false;
	
	principal[1] = true;
	secundario[1] = false;

	principal[2] = true;
	secundario[2] = false;

	principal[3] = true;
	secundario[3] = true;

	principal[4] = true;
	secundario[4] = true;
	// secundario_no_espalda[4] = true; // true si no tiene secundario en espalda

	principal[5] = true;
	secundario[5] = true;
	secundario_no_espalda[5] = true;

	principal[6] = true;
	secundario[6] = true;

	principal[7] = true;
	secundario[7] = false;

	principal[8] = true;
	secundario[8] = true;

	principal[9] = true;
	secundario[9] = true;

	principal[10] = true;
	secundario[10] = true;

	principal[11] = true;
	secundario[11] = false;

	principal[12] = true;
	secundario[12] = false;

	principal[13] = true;
	secundario[13] = true;

	principal[14] = true;
	secundario[14] = false;

	principal[15] = true;
	secundario[15] = false;

	principal[16] = true;
	secundario[16] = false;

	principal[17] = true;
	secundario[17] = false;

	principal[18] = true;
	secundario[18] = true;

	principal[19] = true;
	secundario[19] = false;

	principal[20] = true;
	secundario[20] = true;

	principal[21] = true;
	secundario[21] = false;

	principal[22] = true;
	secundario[22] = true;

	principal[23] = true;
	secundario[23] = true;

	principal[24] = true;
	secundario[24] = true;

	principal[25] = true;
	secundario[25] = false;

	principal[26] = true;
	secundario[26] = false;

	principal[27] = true;
	secundario[27] = false;

	principal[28] = true;
	secundario[28] = false;

	principal[29] = true;
	secundario[29] = false;

	principal[30] = true;
	secundario[30] = false;

	principal[31] = true;
	secundario[31] = false;

	principal[32] = true;
	secundario[32] = false;

	principal[33] = true;
	secundario[33] = true;

	principal[34] = true;
	secundario[34] = false;

	principal[35] = true;
	secundario[35] = true;

	principal[36] = true;
	secundario[36] = false;

	principal[37] = true;
	secundario[37] = false;

$(document).ready(function() {
    $('#btn_modelo_jugador').click();
    $('#btn_diseno_jugador').click();
    $('#btn_diseno_arquero').click();
    $('#btn_diseno_shorts').click();
    $('#btn_diseno_shorts_arquero').click();
    $('#btn_colores_medias').click();
    $('#btn_colores_medias_arquero').click();
    $('#diseno_28').click();
    $('#diseno_arquero_28').click();
    $('#diseno_short_1').click();
    $('#diseno_short_arquero_1').click();
    $('#color_base_4').click();
    $('#color_principal_14').click();
    $('#color_text_9').click();
    $('#color_base_arquero_4').click();
    $('#color_principal_arquero_14').click();
    $('#color_text_arq_9').click();
    vistaArquero = false;
  });

  $('#btn_pg_next').click( function(){
    if( parseInt(pageActual) < 4 ){
      var num = parseInt(pageActual)+1;
      showPage(num);
      pageActual = num;
    }
  });

  $('#btn_pg_prev').click( function(){
    if( parseInt(pageActual) > 1 ){
      var num = parseInt(pageActual)-1;
      showPage(num);
      pageActual = num;
    }
  });

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
    if( parseInt(pageArqueroActual) > 1 ){
      var num = parseInt(pageArqueroActual)-1;
      showPageArq(num);
      pageArqueroActual = num;
    }
  });

  $('#btn_pg_next_arquero').click( function(){
    if( parseInt(pageArqueroActual) < 4 ){
      var num = parseInt(pageArqueroActual)+1;
      showPageArq(num);
      pageArqueroActual = num;
    }
  });

  var pageActual = 1;
  var pageArqueroActual = 1;
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

    pageArqueroActual = number;

    }

    $('.sel_diseno').click( function(){
      /* SELECT DISENO */
      var option = this.id.split("diseno_");
      var opt_diseno = option[1];
      $('#modelo_selected').html('Modelo '+opt_diseno)
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

    function updateDiseno(vista, opt_diseno, secundario, secundario_no_espalda){

      var c_base;
      var c_prin;
      var c_secu;

      if( vista == "arquero" ){ // Configuracion arquero

        c_base = $('#option_color_base_arq').val();
        c_prin = $('#option_color_principal_arq').val();
        c_secu = $('#option_color_secundario_arq').val();
        
        $('#option_diseno_arq').val(opt_diseno);

        $('.preview_front_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+c_base+'.png');
        $('.preview_back_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+c_base+'.png');
        $('.preview_front_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_principal/frente/'+c_prin+'.png');
        $('.preview_back_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_principal/espalda/'+c_prin+'.png');

        if( secundario[opt_diseno] ){
          if( c_secu == 0 ){
            c_secu = 9;
          }

          $('.preview_front_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_secundario/frente/'+c_secu+'.png');
            
          if( secundario_no_espalda[opt_diseno] ){
            $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          }else{
            $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_secundario/espalda/'+c_secu+'.png');
          }
          // $('#option_color_secundario').val(9);
        }else{
          $('.preview_front_arquero .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          $('#option_color_secundario').val(0);
        }
      }else{ // Configuracion jugador

        c_base = $('#option_color_base').val();
        c_prin = $('#option_color_principal').val();
        c_secu = $('#option_color_secundario').val();
        
        $('#option_diseno').val(opt_diseno);

        $('.preview_front .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+c_base+'.png');
        $('.preview_back .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+c_base+'.png');
        $('.preview_front .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_principal/frente/'+c_prin+'.png');
        $('.preview_back .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_principal/espalda/'+c_prin+'.png');

        if( secundario[opt_diseno] ){
          if( c_secu == 0 ){
            c_secu = 9;
          }

          $('.preview_front .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_secundario/frente/'+c_secu+'.png');
            
          if( secundario_no_espalda[opt_diseno] ){
            $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          }else{
            $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+opt_diseno+'/color_secundario/espalda/'+c_secu+'.png');
          }
          // $('#option_color_secundario').val(9);
        }else{
          $('.preview_front .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
          $('#option_color_secundario').val(0);
        }
      }

    }

    $('.sel_formato').click( function(){
      var option;
      var opt;
      var opt_color;
      // if( vistaArquero ){ // Configuracion arquero
      //   option = this.id.split("formato_arq_");
      //   opt = option[1];
      //   $('#option_formato_arq').val(opt);
      //   opt_color = $('#option_color_text_arq').val();
      //   $('.formato_nro_back_arquero img').attr('src', './' + genero + '/img/numeros_arq/'+opt+'/'+opt_color+'.png');
      // }else{ // Configuracion jugador
        option = this.id.split("formato_");
        opt = option[1];
        $('#option_formato').val(opt);
        opt_color = $('#option_color_text').val();
        $('.formato_nro_back img').attr('src', './' + genero + '/img/numeros/'+opt+'/'+opt_color+'.png');
      // }

      // Pintar borde del seleccionado
      $('.sel_formato').removeClass("selected");

      $(this).addClass("selected");

    });

    $('.sel_formato_arq').click( function(){
      var option;
      var opt;
      var opt_color;
      // if( vistaArquero ){ // Configuracion arquero
        option = this.id.split("formato_arq_");
        opt = option[1];
        $('#option_formato_arq').val(opt);
        opt_color = $('#option_color_text_arq').val();
        $('.formato_nro_back_arquero img').attr('src', './' + genero + '/img/numeros_arq/'+opt+'/'+opt_color+'.png');
      // }else{ // Configuracion jugador
      //   option = this.id.split("formato_");
      //   opt = option[1];
      //   $('#option_formato').val(opt);
      //   opt_color = $('#option_color_text').val();
      //   $('.formato_nro_back img').attr('src', './' + genero + '/img/numeros/'+opt+'/'+opt_color+'.png');
      // }

      // Pintar borde del seleccionado
      $('.sel_formato').removeClass("selected");

      $(this).addClass("selected");

    });

    $('.sel_color_text').click( function(){
      var opt;
      // if( vistaArquero ){ // Configuracion arquero
      //   var option = this.id.split("color_text_arq_");
      //   $('#option_color_text_arq').val(option[1]);
      //   opt = $('#option_formato_arq').val();
      //   $('.formato_nro_back_arquero img').attr('src', './' + genero + '/img/numeros_arq/'+opt+'/'+option[1]+'.png');
      // }else{ // Configuracion jugador
        var option = this.id.split("color_text_");
        $('#option_color_text').val(option[1]);
        opt = $('#option_formato').val();
        $('.formato_nro_back img').attr('src', './' + genero + '/img/numeros/'+opt+'/'+option[1]+'.png');
      // }
    });

    $('.sel_color_text_arq').click( function(){
      var opt;
      // if( vistaArquero ){ // Configuracion arquero
        var option = this.id.split("color_text_arq_");
        $('#option_color_text_arq').val(option[1]);
        opt = $('#option_formato_arq').val();
        $('.formato_nro_back_arquero img').attr('src', './' + genero + '/img/numeros_arq/'+opt+'/'+option[1]+'.png');
      // }else{ // Configuracion jugador
      //   var option = this.id.split("color_text_");
      //   $('#option_color_text').val(option[1]);
      //   opt = $('#option_formato').val();
      //   $('.formato_nro_back img').attr('src', './' + genero + '/img/numeros/'+opt+'/'+option[1]+'.png');
      // }
    });

    /* SELECT COLOR BASE */

    $('.sel_color_base').click( function(){
      var option = this.id.split("color_base_");

      //Elimino la clase selected de todos
      $('#color_base_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_base_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las opciones:
      $('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
      $('#color_principal_'+option[1]).css('visibility', 'hidden');
      $('#color_secundario_'+option[1]).css('visibility', 'hidden');
      $('#color_text_'+option[1]).css('visibility', 'hidden');

      //del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
      $('#color_base_'+$('#option_color_principal').val()).css('visibility', 'hidden');
      $('#color_secundario_'+$('#option_color_principal').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_principal').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
      $('#color_base_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
      $('#color_principal_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_'+i).css('visibility') != 'hidden'){
            $('#color_text_'+i).click();
          }
        }
      }

      var nro_modelo;
      nro_modelo = $('#option_diseno').val();
      $('#option_color_base').val(option[1]);
      
      // if( vistaArquero ){ // Configuracion arquero
      //   $('.preview_front_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+option[1]+'.png');
      //   $('.preview_back_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+option[1]+'.png');
      // }else{
        $('.preview_front .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+option[1]+'.png');
        $('.preview_back .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+option[1]+'.png');
      // }
    });

    $('.sel_color_base_arquero').click( function(){
      var option = this.id.split("color_base_arquero_");

      //Elimino la clase selected de todos
      $('#color_base_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_base_arquero_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las opciones:
      $('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_arq_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras opciones, para que no se repita el seleccionado
      $('#color_principal_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_text_arq_'+option[1]).css('visibility', 'hidden');

      //del color de cada una de las otras opciones seleccionadas, volvemos invisible el color de las demas opciones:
      $('#color_base_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
      $('#color_base_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
      $('#color_principal_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');

      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text_arq').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_arq_'+i).css('visibility') != 'hidden'){
            $('#color_text_arq_'+i).click();
          }
        }
      }

      var nro_modelo;
      nro_modelo = $('#option_diseno_arq').val();
      $('#option_color_base_arq').val(option[1]);

      // if( vistaArquero ){ // Configuracion arquero
        $('.preview_front_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+option[1]+'.png');
        $('.preview_back_arquero .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+option[1]+'.png');
      // }else{
      //   $('.preview_front .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/frente/'+option[1]+'.png');
      //   $('.preview_back .img_base').attr('src', './' + genero + '/img/modelos/modelo_base/espalda/'+option[1]+'.png');
      // }

    });

    /* SELECT COLOR PRINCIPAL */

    $('.sel_color_principal').click( function(){

      var option = this.id.split("color_principal_");

      //Elimino la clase selected de todos
      $('#color_principal_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_principal_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las partes:
      $('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras partes para que no se repita el seleccionado
      $('#color_base_'+option[1]).css('visibility', 'hidden');
      $('#color_secundario_'+option[1]).css('visibility', 'hidden');
      $('#color_text_'+option[1]).css('visibility', 'hidden');

      //de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
      $('#color_principal_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_secundario_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_base_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
      $('#color_principal_'+$('#option_color_secundario').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_secundario').val()).css('visibility', 'hidden');

      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_'+i).css('visibility') != 'hidden'){
            $('#color_text_'+i).click();
          }
        }
      }

      var nro_modelo;

      nro_modelo = $('#option_diseno').val();
      $('#option_color_principal').val(option[1]);

      // if( vistaArquero ){ // Configuracion arquero
      //   $('.preview_front_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
      //   $('.preview_back_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
      // }else{
        $('.preview_front .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
        $('.preview_back .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
      // }

    });

    $('.sel_color_principal_arquero').click( function(){

      var option = this.id.split("color_principal_arquero_");

      //Elimino la clase selected de todos
      $('#color_principal_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_principal_arquero_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las partes:
      $('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_arq_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras partes para que no se repita el seleccionado
      $('#color_base_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_text_arq_'+option[1]).css('visibility', 'hidden');

      //de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
      $('#color_principal_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_base_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
      $('#color_principal_arquero_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_secundario_arq').val()).css('visibility', 'hidden');
      
      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text_arq').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_arq_'+i).css('visibility') != 'hidden'){
            $('#color_text_arq_'+i).click();
          }
        }
      }
      
      var nro_modelo;

      nro_modelo = $('#option_diseno_arq').val();
      $('#option_color_principal_arq').val(option[1]);

      // if( vistaArquero ){ // Configuracion arquero
        $('.preview_front_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
        $('.preview_back_arquero .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
      // }else{
      //   $('.preview_front .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/frente/'+option[1]+'.png');
      //   $('.preview_back .img_principal').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_principal/espalda/'+option[1]+'.png');
      // }

    });

    /* SELECT COLOR SECUNDARIO */

    $('.sel_color_secundario').click( function(){
      var option = this.id.split("color_secundario_");

      //Elimino la clase selected de todos
      $('#color_secundario_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_secundario_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las partes:
      $('#color_base_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras partes para que no se repita el seleccionado
      $('#color_base_'+option[1]).css('visibility', 'hidden');
      $('#color_principal_'+option[1]).css('visibility', 'hidden');
      $('#color_text_'+option[1]).css('visibility', 'hidden');

      //de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
      $('#color_principal_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_secundario_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_base').val()).css('visibility', 'hidden');
      $('#color_base_'+$('#option_color_principal').val()).css('visibility', 'hidden');
      $('#color_secundario_'+$('#option_color_principal').val()).css('visibility', 'hidden');
      $('#color_text_'+$('#option_color_principal').val()).css('visibility', 'hidden');

      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_'+i).css('visibility') != 'hidden'){
            $('#color_text_'+i).click();
          }
        }
      }

      var nro_modelo;
      // if( vistaArquero ){ // Configuracion arquero
      //   nro_modelo = $('#option_diseno_arq').val();
      //   $('#option_color_secundario_arq').val(option[1]);

      //   $('.preview_front_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
      //   if( secundario_no_espalda[nro_modelo] ){
      //     $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
      //   }else{
      //     $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
      //   }
      // }else{ // Configuracion jugador
        nro_modelo = $('#option_diseno').val();
        $('#option_color_secundario').val(option[1]);
        
        $('.preview_front .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
        if( secundario_no_espalda[nro_modelo] ){
          $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
        }else{
          $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
        }
      // }

    });

    $('.sel_color_secundario_arquero').click( function(){
      var option = this.id.split("color_secundario_arquero_");

      //Elimino la clase selected de todos
      $('#color_secundario_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_secundario_arquero_'+option[1]).addClass('selected')

      //volvemos visibles todos los colores de todas las partes:
      $('#color_base_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_principal_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_secundario_arquero_'+option[1]).parent().children().css('visibility', 'visible');
      $('#color_text_arq_'+option[1]).parent().children().css('visibility', 'visible');

      //volvemos invisible el color de las otras partes para que no se repita el seleccionado
      $('#color_base_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_principal_arquero_'+option[1]).css('visibility', 'hidden');
      $('#color_text_arq_'+option[1]).css('visibility', 'hidden');

      //de las otra opciones seleccionadas, volvemos invisible el color de esta opcion:
      $('#color_principal_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_base_arq').val()).css('visibility', 'hidden');
      $('#color_text_arq_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
      $('#color_base_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');
      $('#color_secundario_arquero_'+$('#option_color_principal_arq').val()).css('visibility', 'hidden');

      //Si el color del numero/nombre coincide con el seleccionado, cambiar
      if($('#option_color_text_arq').val() == option[1]){
        for(let i=20; i>=1; i--){
          if($('#color_text_arq_'+i).css('visibility') != 'hidden'){
            $('#color_text_arq_'+i).click();
          }
        }
      }

      var nro_modelo;
      // if( vistaArquero ){ // Configuracion arquero
        nro_modelo = $('#option_diseno_arq').val();
        $('#option_color_secundario_arq').val(option[1]);

        $('.preview_front_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
        if( secundario_no_espalda[nro_modelo] ){
          $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
        }else{
          $('.preview_back_arquero .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
        }
      // }else{ // Configuracion jugador
      //   nro_modelo = $('#option_diseno').val();
      //   $('#option_color_secundario').val(option[1]);
        
      //   $('.preview_front .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/frente/'+option[1]+'.png');
      //   if( secundario_no_espalda[nro_modelo] ){
      //     $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/transparent.png');
      //   }else{
      //     $('.preview_back .img_secundaria').attr('src', './' + genero + '/img/modelos/modelo_'+nro_modelo+'/color_secundario/espalda/'+option[1]+'.png');
      //   }
      // }

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

      $('.preview_content_short_content .img_base_short').attr('src', './' + genero + '/img/shorts/base/'+c_base+'.png');
      $('.preview_content_short_content .img_principal_short').attr('src', './' + genero + '/img/shorts/short_'+opt_diseno+'/color_principal/'+c_prin+'.png');

      if(opt_diseno == 3 ){ // Solo el diseno 3 tiene color secundario
        $('.preview_content_short_content .img_secundaria_short').attr('src', './' + genero + '/img/shorts/short_'+opt_diseno+'/color_secundario/'+c_secu+'.png');
      }else{
        $('.preview_content_short_content .img_secundaria_short').attr('src', './' + genero + '/img/transparent.png');
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

      //Elimino la clase selected de todos
      $('#color_base_short_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_base_short_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short').val();
      $('#option_color_base_short').val(option[1]);

      $('.preview_content_short_content .img_base_short').attr('src', './' + genero + '/img/shorts/base/'+option[1]+'.png');

    });

    /* SELECT COLOR PRINCIPAL SHORT */

    $('.sel_color_principal_short').click( function(){

      var option = this.id.split("color_principal_short_");

      //Elimino la clase selected de todos
      $('#color_principal_short_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_principal_short_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short').val();
      $('#option_color_principal_short').val(option[1]);

      $('.preview_content_short_content .img_principal_short').attr('src', './' + genero + '/img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

    });

    /* SELECT COLOR SECUNDARIO SHORT */

    $('.sel_color_secundario_short').click( function(){

      var option = this.id.split("color_secundario_short_");

      //Elimino la clase selected de todos
      $('#color_secundario_short_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_secundario_short_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short').val();
      $('#option_color_secundario_short').val(option[1]);

      $('.preview_content_short_content .img_secundaria_short').attr('src', './' + genero + '/img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

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

      $('.preview_content_short_arquero_content .img_base_short_arquero').attr('src', './' + genero + '/img/shorts/base/'+c_base+'.png');
      $('.preview_content_short_arquero_content .img_principal_short_arquero').attr('src', './' + genero + '/img/shorts/short_'+opt_diseno+'/color_principal/'+c_prin+'.png');

      if(opt_diseno == 3 ){ // Solo el diseno 3 tiene color secundario
        $('.preview_content_short_arquero_content .img_secundaria_short_arquero').attr('src', './' + genero + '/img/shorts/short_'+opt_diseno+'/color_secundario/'+c_secu+'.png');
      }else{
        $('.preview_content_short_arquero_content .img_secundaria_short_arquero').attr('src', './' + genero + '/img/transparent.png');
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

      //Elimino la clase selected de todos
      $('#color_base_short_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_base_short_arquero_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short_arquero').val();
      $('#option_color_base_short_arquero').val(option[1]);

      $('.preview_content_short_arquero_content .img_base_short_arquero').attr('src', './' + genero + '/img/shorts/base/'+option[1]+'.png');

    });

    /* SELECT COLOR PRINCIPAL SHORT ARQUERO */

    $('.sel_color_principal_short_arquero').click( function(){

      var option = this.id.split("color_principal_short_arquero_");

      //Elimino la clase selected de todos
      $('#color_principal_short_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_principal_short_arquero_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short_arquero').val();
      $('#option_color_principal_short_arquero').val(option[1]);

      $('.preview_content_short_arquero_content .img_principal_short_arquero').attr('src', './' + genero + '/img/shorts/short_'+nro_modelo+'/color_principal/'+option[1]+'.png');

    });

    /* SELECT COLOR SECUNDARIO SHORT ARQUERO */

    $('.sel_color_secundario_short_arquero').click( function(){

      var option = this.id.split("color_secundario_short_arquero_");

      //Elimino la clase selected de todos
      $('#color_secundario_short_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_secundario_short_arquero_'+option[1]).addClass('selected')

      var nro_modelo;

      nro_modelo = $('#option_diseno_short_arquero').val();
      $('#option_color_secundario_short_arquero').val(option[1]);

      $('.preview_content_short_arquero_content .img_secundaria_short_arquero').attr('src', './' + genero + '/img/shorts/short_'+nro_modelo+'/color_secundario/'+option[1]+'.png');

    });

    // MEDIAS

    /* SELECT COLOR MEDIAS */

    $('.sel_color_medias').click( function(){

      var option = this.id.split("color_medias_");

      //Elimino la clase selected de todos
      $('#color_medias_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_medias_'+option[1]).addClass('selected')

      $('#option_color_medias').val(option[1]);

      $('.preview_content_medias_content .img_medias_frente').attr('src', './' + genero + '/img/medias/frente/'+option[1]+'.png');
      $('.preview_content_medias_content .img_medias_perfil').attr('src', './' + genero + '/img/medias/perfil/'+option[1]+'.png');

    });

    /* SELECT COLOR MEDIAS ARQUERO */

    $('.sel_color_medias_arquero').click( function(){

      var option = this.id.split("color_medias_arquero_");

      //Elimino la clase selected de todos
      $('#color_medias_arquero_'+option[1]).parent().children().removeClass('selected');

      //Agrego la clase selected solamente para el seleccionado
      $('#color_medias_arquero_'+option[1]).addClass('selected')

      $('#option_color_medias_arquero').val(option[1]);

      $('.preview_content_medias_arquero_content .img_medias_frente').attr('src', './' + genero + '/img/medias/frente/'+option[1]+'.png');
      $('.preview_content_medias_arquero_content .img_medias_perfil').attr('src', './' + genero + '/img/medias/perfil/'+option[1]+'.png');

    });







let producto = 5;
let screenMobile = 767;
let grilla = 4;
let tab = 3;
let paginado = 4;
let paginadoON = 0;
let productON;







function mostrarModelosDesk(num){
    //if ($(document).width() > screenMobile){
        for (i=1; i<=grilla; i++){
            let idGrilla = document.querySelector('#grilla'+i+productON);

            if(idGrilla){
              idGrilla.classList.add('ocultar');
            }
        }
        let idGrilla = document.querySelector('#grilla'+num+productON);

        if(idGrilla){
          idGrilla.classList.remove('ocultar');
        }

        if(paginadoON > 0){
            let idBtnPaginado = document.querySelector('#btnPaginado'+productON+paginadoON);

            if(idBtnPaginado){
              idBtnPaginado.classList.remove('btn-paginado-active');
            }
        }
        

        for(i=1; i<=paginado; i++){
            let idBtnPaginado = document.querySelector('#btnPaginado'+productON+i);

            if(idBtnPaginado){
              idBtnPaginado.classList.add('btn-paginado');
            }
        }
        let idBtnPaginado = document.querySelector('#btnPaginado'+productON+num);

        if(idBtnPaginado){
          idBtnPaginado.classList.remove('btn-paginado');
          idBtnPaginado.classList.add('btn-paginado-active');
        }
        paginadoON = num
    //}
}
 



function mostrarTabsDisenador(num){
    for (i=1; i<=tab; i++){
        let idTab = document.querySelector('#tab'+i+productON);
        if(idTab){
          idTab.classList.add('ocultar');
        }

        let idBtnTab = document.querySelector('#btnTab'+i+productON);
        if(idBtnTab){
          idBtnTab.classList.remove('btn-tab-active');
        }
    }
    let idTab = document.querySelector('#tab'+num+productON);
    idTab.classList.remove('ocultar');

    let idBtnTab = document.querySelector('#btnTab'+num+productON);
    idBtnTab.classList.add('btn-tab-active');

    if ($(document).width() > screenMobile){
        if(num==1){
            mostrarModelosDesk(1);
        }
    }
}



function viewProducts(num){
    if ($(document).width() < screenMobile){
        for(i=1; i<=2; i++){
            let idVwProduct = document.querySelector('#vwProduct'+i+productON);
            if(idVwProduct){
              idVwProduct.classList.add('ocultar');
            }
        }
        let idVwProduct = document.querySelector('#vwProduct'+num+productON);
        idVwProduct.classList.remove('ocultar');
    }
}

var imagenes = new Array();
var numImages = $('[id^=product_'+1+'_]').length;
    
$(document).ready(function() {
    const product = 1;
    const numImages = $('[id^=product_'+product+'_]').length;
    loadCarrousel(numImages, product)
});

  const loadCarrousel = (numImages, producto) => {
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
  }

function mostrarProducto(num){
    for (i=1; i<=producto; i++){
        let idGProducto = document.querySelector('#producto'+i);

        if(idGProducto){
          idGProducto.classList.add('ocultar');
        }
    }
    let idGProducto = document.querySelector('#producto'+num);

    $($('#btn_modelo_jugador').children()[0]).attr('src', './public/img/camiseta-jugador-icon.png')
    $($('#btn_modelo_jugador').children()[1]).removeClass('btn-active')
    $($('#btn_modelo_arquero').children()[0]).attr('src', './public/img/camiseta-arquero-icon.png')
    $($('#btn_modelo_arquero').children()[1]).removeClass('btn-active')
    $($('#btn_short_jugador').children()[0]).attr('src', './public/img/short-jugador-icon.png')
    $($('#btn_short_jugador').children()[1]).removeClass('btn-active')
    $($('#btn_short_arquero').children()[0]).attr('src', './public/img/short-arquero-icon.png')
    $($('#btn_short_arquero').children()[1]).removeClass('btn-active')
    $($('#btn_medias').children()[0]).attr('src', './public/img/medias-icon.png')
    $($('#btn_medias').children()[1]).removeClass('btn-active')

    switch(num){
      case 1:
        $('.header-top-tit').html('PERSONALIZADOR - CAMISETAS JUGADORES')
        $($('#btn_modelo_jugador').children()[0]).attr('src', './public/img/camiseta-jugador-icon-on.png')
        $($('#btn_modelo_jugador').children()[1]).addClass('btn-active')
        break;
      case 2:
        $('.header-top-tit').html('PERSONALIZADOR - CAMISETAS ARQUEROS')
        $($('#btn_modelo_arquero').children()[0]).attr('src', './public/img/camiseta-arquero-icon-on.png')
        $($('#btn_modelo_arquero').children()[1]).addClass('btn-active')
        break;
      case 3:
        $('.header-top-tit').html('PERSONALIZADOR - SHORT JUGADORES')
        $($('#btn_short_jugador').children()[0]).attr('src', './public/img/short-jugador-icon-on.png')
        $($('#btn_short_jugador').children()[1]).addClass('btn-active')
        break;
      case 4:
        $('.header-top-tit').html('PERSONALIZADOR - SHORT ARQUEROS')
        $($('#btn_short_arquero').children()[0]).attr('src', './public/img/short-arquero-icon-on.png')
        $($('#btn_short_arquero').children()[1]).addClass('btn-active')
        break;
      case 5:
        $('.header-top-tit').html('PERSONALIZADOR - MEDIAS')
        $($('#btn_medias').children()[0]).attr('src', './public/img/medias-icon-on.png')
        $($('#btn_medias').children()[1]).addClass('btn-active')
        break;
    }

    if(idGProducto){
      idGProducto.classList.remove('ocultar');
    }

    productON = num
    // alert(productON)
    mostrarModelosDesk(1);
    mostrarTabsDisenador(1);
    viewProducts(1)
    
    const numImages = $('[id^=product_'+productON+'_]').length;
    current = 0;
    loadCarrousel(numImages, productON)
    $(".carrusel").animate({"left": -($('#product_'+productON+'_'+current).position().left)}, 600);
}
mostrarProducto(1)

$(document).ready(function() {
  $('.left-arrow').on('click',function() {
    if (current > 0) {
        current = current - 1;
    } else {
        current = numImages - 3;
    }

    $(".carrusel").animate({"left": -($('#product_'+productON+'_'+current).position().left)}, 600);

    return false;
  });

  $('.left-arrow').on('hover', function() {
    $(this).css('opacity','0.5');
  }, function() {
    $(this).css('opacity','1');
  });

  $('.right-arrow').on('hover', function() {
    $(this).css('opacity','0.5');
  }, function() {
    $(this).css('opacity','1');
  });

  $('.right-arrow').on('click', function() {
    if (numImages > current + 3) {
        current = current+1;
    } else {
        current = 0;
    }

    $(".carrusel").animate({"left": -($('#product_'+productON+'_'+current).position().left)}, 600);
    console.log('carrusel')
    return false;
  });

  for(let i = 1; i <= 5;i++){
    $($('#producto'+i).children()[1]).addClass('transparente')
    $($('#producto'+i).children()[2]).addClass('transparente')
  }
  
  mostrarPersonalizador();

  $($('.camiseta_jugador_input_switch_general')[0]).click()
});

const mostrarDatosPedido = () => {
  if(!hayProductosSeleccionados()){
    Swal.fire({
      title: 'Debe incluir algún producto (shorts o camisetas)',
      icon: 'warning',
    })
    return false;
  }

  if(!preguntasFrecuentesVista){
		preguntasFrecuentes();
	}

  $('#datos_pedido').css({'display': 'block'});
  $('#personalizador').css({'display': 'none'});
  $('.btn-anterior').css({'display': 'block'});

  // if($('#pedido_id').val() == ''){
    visualizacionProductos()

    mostrarMinimos()
  // }
}

const mostrarMinimos = () => {
  let camisetaVisible = false
  let shortVisible = false
  jQuery.each($('.camiseta_jugador_input_switch_general'), function() {
    if($(this).is(':checked')){
      camisetaVisible = true
    }
  });

  jQuery.each($('.short_jugador_input_switch_general'), function() {
    if($(this).is(':checked')){
      shortVisible = true
    }
  });

  $('#option_medias_on').val(0)
  jQuery.each($('.medias_input_switch_general'), function() {
    if($(this).is(':checked')){
      $('#option_medias_on').val(1)
    }
  });


  if(camisetaVisible && shortVisible){
    if(!$('#listado_conjuntos').is(':visible')){
      for(let i = 0; i < parseInt($('#minimo_conjuntos').val()); i++){
        addConjunto()
      }
    }
  }else if(camisetaVisible){
      if(!$('#listado_camisetas').is(':visible')){
        for(let i = 0; i < parseInt($('#minimo_camisetas').val()); i++){
          addCamiseta()
        }
      }
      //Si no hay shorts seleccionados, selecciona 0 medias
      $('.cantidad_medias').html(0)
  }else{
      if(!$('#listado_shorts').is(':visible')){
        for(let i = 0; i < parseInt($('#minimo_shorts').val()); i++){
          addShort()
        }
      }
  }

  let camisetaArqueroVisible = false
  let shortArqueroVisible = false
  jQuery.each($('.camiseta_jugador_input_switch_general'), function() {
    if($(this).is(':checked')){
      camisetaArqueroVisible = true
    }
  });

  jQuery.each($('.short_jugador_input_switch_general'), function() {
    if($(this).is(':checked')){
      shortArqueroVisible = true
    }
  });

  if(camisetaArqueroVisible && shortArqueroVisible){
    if(!$('#listado_conjuntos').is(':visible')){
      for(let i = 0; i < parseInt($('#minimo_conjuntos').val()); i++){
        addConjunto()
      }
    }
  }else if(camisetaArqueroVisible){
      if(!$('#listado_camisetas').is(':visible')){
        for(let i = 0; i < parseInt($('#minimo_camisetas').val()); i++){
          addCamiseta()
        }
      }
  }else{
      if(!$('#listado_shorts').is(':visible')){
        for(let i = 0; i < parseInt($('#minimo_shorts').val()); i++){
          addShort()
        }
      }
  }
}

const hayProductosSeleccionados = () => {
  let hayProductosSeleccionados = false
  jQuery.each($('.input_switch'), function() {
    if($(this).is(':checked') && !$(this).hasClass('medias_input_switch_general')){
      hayProductosSeleccionados = true
    }
  });
  return hayProductosSeleccionados
}

const mostrarPersonalizador = () => {
  $('#datos_pedido').css({'display': 'none'});
  $('#personalizador').css({'display': 'block'});
  $('.btn-anterior').css({'display': 'none'});

  $('html, body').animate({scrollTop: $('.header-top-tit').offset().top}, "slow");
}

const visualizacionProductos = () => {
  //Primero se hace visible el conjunto. Luego se hara invisible si no se seleccionan camisetas y shorts
  $('.btn-agregar-conjunto').removeClass('hidden')

  //Lo propio se hacen con los switches de arqueros para conjuntos, camisetas y shorts
  jQuery.each($('.conjunto'), function() {
    jQuery.each($(this).children(), function() {
        if($($(this).children()[0]).hasClass('switch_arquero')){
          $($(this).children()[0]).removeClass('transparente')
          $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).removeAttr('disabled')
        }
    });
  });

  jQuery.each($('.short'), function() {
    jQuery.each($(this).children(), function() {
        if($($(this).children()[0]).hasClass('switch_arquero')){
          $($(this).children()[0]).removeClass('transparente')
          $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).removeAttr('disabled')
        }
    });
  });

  jQuery.each($('.camiseta'), function() {
    jQuery.each($(this).children(), function() {
        if($($(this).children()[0]).hasClass('switch_arquero')){
          $($(this).children()[0]).removeClass('transparente')
          $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).removeAttr('disabled')
        }
    });
  });

  //Si no se selecciono camiseta de jugador ni de arquero
  if(!$('.camiseta_jugador_input_switch_general').is(':checked') && 
      !$('.camiseta_arquero_input_switch_general').is(':checked')){
        //Oculto el boton de "agregar conjunto" y "agregar camiseta" y vacio el listado_conjuntos y listado_camisetas
        jQuery.each($('#listado_conjuntos').children(), function() {
          if($(this).hasClass('conjunto')){
            $(this).remove()
            $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) - 1);
            $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) - 1);
            $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) - 1) * parseInt($('#option_medias_on').val()));
            $('.precio_total').html(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
            $('#precio_total').val(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
          }
        });
        jQuery.each($('#listado_camisetas').children(), function() {
          if($(this).hasClass('camiseta')){
            $(this).remove()
            $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) - 1);
            $('.precio_total').html(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
            $('#precio_total').val(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
          }
        });
        $('.btn-agregar-conjunto').addClass('hidden')
        $('.btn-agregar-camiseta').addClass('hidden')
  }else{
    $('.btn-agregar-camiseta').removeClass('hidden')

    if(!$('.camiseta_arquero_input_switch_general').is(':checked')){
      //Si no se selecciono camiseta de arquero pero si de jugador:
      //Se oculta el switch de arquero para el listado de conjuntos y de camisetas
      //Se pone en off a dicho switch, para no enviar el dato (ya que estaria oculto igualmente)
      jQuery.each($('.conjunto'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if($($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });

      jQuery.each($('.camiseta'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if($($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });
    }else if(!$('.camiseta_jugador_input_switch_general').is(':checked')){
      //Si no se selecciono camiseta de jugador pero si de arquero:
      //Se oculta el switch de arquero para el listado de conjuntos y de camisetas
      //Se pone en on a dicho switch, para no enviar el dato (ya que estaria oculto igualmente)

      jQuery.each($('.conjunto'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if(!$($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });

      jQuery.each($('.camiseta'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if(!$($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });
    }
  }

  //Si no se selecciono short de jugador ni de arquero
  if(!$('.short_jugador_input_switch_general').is(':checked') && 
      !$('.short_arquero_input_switch_general').is(':checked')){
      //Oculto el boton de "agregar conjunto" y "agregar shorts y medias" y vacio el listado_conjuntos y listado_shorts
      jQuery.each($('#listado_conjuntos').children(), function() {
        if($(this).hasClass('conjunto')){
          $(this).remove()
          $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) - 1);
          $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) - 1);
          $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) - 1) * parseInt($('#option_medias_on').val()));
          $('.precio_total').html(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
          $('#precio_total').val(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
        }
      });
      jQuery.each($('#listado_shorts').children(), function() {
        if($(this).hasClass('short')){
          $(this).remove()
          $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) - 1);
          $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) - 1) * parseInt($('#option_medias_on').val()));
          $('.precio_total').html(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
          $('#precio_total').val(parseInt($('.cantidad_camisetas').html())* parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html()) * parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
        }
      });
      $('.btn-agregar-conjunto').addClass('hidden')
      $('.btn-agregar-short').addClass('hidden')
  }else{
    $('.btn-agregar-short').removeClass('hidden')

    if(!$('.short_arquero_input_switch_general').is(':checked')){
      //Si no se selecciono short de arquero pero si de jugador:
      //Se oculta el switch de arquero para el listado de conjuntos y de shorts
      //Se pone en off a dicho switch, para no enviar el dato (ya que estaria oculto igualmente)
      jQuery.each($('.conjunto'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if($($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });

      jQuery.each($('.short'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if($($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });
    }else if(!$('.short_jugador_input_switch_general').is(':checked')){
      //Si no se selecciono short de jugador pero si de arquero:
      //Se oculta el switch de arquero para el listado de conjuntos y de shorts
      //Se pone en on a dicho switch, para no enviar el dato (ya que estaria oculto igualmente)

      jQuery.each($('.conjunto'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')
                if(!$($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });

      jQuery.each($('.short'), function() {
        jQuery.each($(this).children(), function() {
            if($($(this).children()[0]).hasClass('switch_arquero')){
                $($(this).children()[0]).addClass('transparente')

                if(!$($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).is(':checked')){
                  $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).click()
                }
                $($($($($($(this).children()[0]).children()[0])).children()[0]).children()[0]).attr('disabled', 'disabled')
            }
        });
      });
    }
  }

  //Si no se selecciono medias
  if(!$('.medias_input_switch_general').is(':checked')){
    $('.cantidad_medias').html(0)
  }else{
    $('.cantidad_medias').html($('.cantidad_shorts').html())
  }

  if($('#listado_conjuntos').children().length < 2){
    $('#listado_conjuntos').css({'display': 'none'});
  }else{
    $('#listado_conjuntos').css({'display': 'block'});
  }

  if($('#listado_camisetas').children().length < 2){
    $('#listado_camisetas').css({'display': 'none'});
  }else{
    $('#listado_camisetas').css({'display': 'block'});
  }

  if($('#listado_shorts').children().length < 2){
    $('#listado_shorts').css({'display': 'none'});
  }else{
    $('#listado_shorts').css({'display': 'block'});
  }
}

const verTalles = (genero) => {
  Swal.fire({
    imageUrl: './'+genero+'/img/tabla_'+genero+'.jpg',
    confirmButtonText: `Cerrar`
  })
}

const switchProduct = (switchElem, productName) => {
  if($(switchElem).is(':checked')){
    $($('#'+productName).children()[1]).removeClass('transparente')
    $($('#'+productName).children()[2]).removeClass('transparente')

    if(productName == 'producto3' || productName == 'producto4'){
      $($('#producto5').children()[1]).removeClass('transparente')
      $($('#producto5').children()[2]).removeClass('transparente')
    }

    //Hacemos click en el otro (si ingresamos por desktop, hacemos click en mobile)
    for(let i = 0; i < $(switchElem).attr('class').split(/\s+/).length; i++){
      if($(switchElem).attr('class').split(/\s+/)[i].includes("_input_switch_general")){
        jQuery.each($('.'+$(switchElem).attr('class').split(/\s+/)[i]), function() {
          if(!$(this).is(':checked')){
            $(this).click()
          }
        });
      }
    }
  }else{
    $($('#'+productName).children()[1]).addClass('transparente')
    $($('#'+productName).children()[2]).addClass('transparente')

    if(productName == 'producto3' || productName == 'producto4'){
      $($('#producto5').children()[1]).addClass('transparente')
      $($('#producto5').children()[2]).addClass('transparente')
    }

    //Hacemos click en el otro (si ingresamos por desktop, hacemos click en mobile)
    for(let i = 0; i < $(switchElem).attr('class').split(/\s+/).length; i++){
      if($(switchElem).attr('class').split(/\s+/)[i].includes("_input_switch_general")){
        jQuery.each($('.'+$(switchElem).attr('class').split(/\s+/)[i]), function() {
          if($(this).is(':checked')){
            $(this).click()
          }
        });
      }
    }
  }
}

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

function updateTotalBox() {
	$('#precio_conjunto').val(precioConjunto);

  costoTotal = ($('#listado_shorts').children().length - 1 + $('#listado_conjuntos').children().length - 1) * (parseInt($('#precio_short').val()) + parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val())) +
               ($('#listado_camisetas').children().length - 1 + $('#listado_conjuntos').children().length - 1) * parseInt($('#precio_camiseta').val())
                  
	//DESCUENTO:
	if(costoTotal >= d2c) {
		costoTotalDesc = costoTotal * (1 - (d2/100));
		$('.descuentoAplic').html(d2 + "%");
		$('.costoConDescuento').removeClass("hidden");
	} else if(costoTotal >= d1c && costoTotal < d2c) {
		costoTotalDesc = costoTotal * (1 - (d1/100));
		$('.descuentoAplic').html(d1 + "%");
		$('.costoConDescuento').removeClass("hidden");
	} else {
		costoTotalDesc = costoTotal;
		$('.descuentoAplic').html(0);
		$('.costoConDescuento').addClass("hidden");
	}

	$('.precioTotal').html(parseFloat(costoTotal.toFixed(2)));
	$('.precioTotalD').html(parseFloat(costoTotalDesc.toFixed(2)));
	$('#hTotal').val(parseFloat(costoTotal.toFixed(2)));
}

const completarCamisetas = () => {
  const camisetas = [];

  //Obtengo todos los atributos visibles que componen una camiseta:
  jQuery.each(document.getElementsByClassName("camiseta"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('representante_input')){
          conjunto.representante = this.value;
        } else if(this.classList.contains('nombre_input')){
          conjunto.nombre = this.value;
        } else if(this.classList.contains('numero_input')){
          conjunto.numero = this.value;
        } else if(this.classList.contains('talle_camiseta_input')){
          conjunto.talle_camiseta = this.value;
        } else if(this.classList.contains('id_input')){
          conjunto.id = this.value;
        } else if(this.classList.contains('arquero_input')){
          conjunto.arquero = $(this).is(':checked')
        }
      });

      camisetas.push(conjunto);
    }
  });

  return camisetas;
}

const completarConjuntos = () => {
  const conjuntos = [];

  //Obtengo todos los atributos visibles que componen un conjunto:
  jQuery.each(document.getElementsByClassName("conjunto"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('representante_input')){
          conjunto.representante = this.value;
        } else if(this.classList.contains('nombre_input')){
          conjunto.nombre = this.value;
        } else if(this.classList.contains('numero_input')){
          conjunto.numero = this.value;
        } else if(this.classList.contains('talle_short_input')){
          conjunto.talle_short = this.value;
        } else if(this.classList.contains('talle_camiseta_input')){
          conjunto.talle_camiseta = this.value;
        } else if(this.classList.contains('id_input')){
          conjunto.id = this.value;
        } else if(this.classList.contains('arquero_input')){
          conjunto.arquero = $(this).is(':checked')
        }
      });

      conjuntos.push(conjunto);
    }
  });

  return conjuntos;
}

const completarShorts = () => {
  const shorts = [];

  //Obtengo todos los atributos visibles que componen un short:
  jQuery.each(document.getElementsByClassName("short"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('representante_input')){
          conjunto.representante = this.value;
        } else if(this.classList.contains('nombre_input')){
          conjunto.nombre = this.value;
        } else if(this.classList.contains('numero_input')){
          conjunto.numero = this.value;
        } else if(this.classList.contains('talle_short_input')){
          conjunto.talle_short = this.value;
        } else if(this.classList.contains('id_input')){
          conjunto.id = this.value;
        } else if(this.classList.contains('arquero_input')){
          conjunto.arquero = $(this).is(':checked')
        }
      });

      shorts.push(conjunto);
    }
  });

  return shorts;
}

function enviar(){
	// gtag('event', 'Diseñador', { 'event_category': ' Diseñador ', 'event_action': ' enviar pedido '});

  //Si se selecciono un archivo (escudo o publicidad) se valida que se seleccione una posicion:
  if($('#escudo').get(0).files.length > 0 && $('#posicion_escudo').val() == ''){
    Swal.fire(
        'Debe seleccionar la posición de la imagen del escudo',
        '',
        'warning'
      );
    return false;
  }
  if($('#extra').get(0).files.length > 0 && $('#posicion_extra').val() == ''){
    Swal.fire(
        'Debe seleccionar la posición de la imagen de la publicidad',
        '',
        'warning'
      );
    return false;
  }

  let camisetas = completarCamisetas();
  let shorts = completarShorts();
  let conjuntos = completarConjuntos();

  opcionesSeleccionadas(camisetas, shorts, conjuntos)

  if(!superaCantidadesMinimas(conjuntos, camisetas, shorts)){
    return false;
  }

  $('#btn_mp').addClass("hidden");
  $('#btn_enviar').addClass("hidden");
  $('#loading_btn_enviar').removeClass("hidden");
  var pedidoUuid = $('#pedidoUuid').val();
  var formData = new FormData($('#formulario')[0]);
  formData.append('genero', genero);
  formData.append('pedidoUuid', pedidoUuid);
  formData.append('camisetas', JSON.stringify(camisetas));
  formData.append('shorts', JSON.stringify(shorts));
  formData.append('conjuntos', JSON.stringify(conjuntos));
  formData.append('precio', parseInt($('.precioTotalD').html()));

  $.ajax({
    url: './common/includes/guardar_pedido.php',
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
      $('#btn_mp').removeClass("hidden");
      $('#btn_enviar').removeClass("hidden");
      $('#loading_btn_enviar').addClass("hidden");
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
          $('#metodos_pago').removeClass("hidden");
          $('#btn_metodos_pago').remove();
          $('#btn_enviar').remove();
          $('#loading_btn_enviar').addClass("hidden");
          $('#btn_mp').removeClass("hidden");
        }else{
          var href_face = 'https://www.facebook.com/sharer/sharer.php?u=http://pedido.'+url_server+'/'+genero+'/pedido-'+pedidoUuid;
          var href_tw = 'https://twitter.com/share?url=http%3A%2F%2Fyakka.com.ar%2Fpersonalizador%2F'+genero+'%2Fpedido-'+pedidoUuid;
          $('#share_face_desk').attr("href", href_face);
          $('#twitter_btn').attr("href", href_tw);
  
          if(!enviaEmail){
            iniciarMercadoPago(pedidoUuid, genero)
          }else{
            $('#formulario').fadeOut( "fast", function() {
              $('#finalizado').fadeIn();
              $('.link_pedido_enviado').attr('href', 'https://pedido.'+url_server+'/pedido-' + pedidoUuid);
              $('#respuesta_gral').removeClass('hidden');
              $('html, body').animate({scrollTop: $('.header-top-tit').offset().top}, "slow");
            });
    
            $('#btn_mp').removeClass("hidden");
            $('#btn_enviar').removeClass("hidden");
            $('#loading_btn_enviar').addClass("hidden");
          }
        }
      } catch (err) {
        console.log(err);
        $('#btn_mp').removeClass("hidden");
        $('#btn_enviar').removeClass("hidden");
        $('#loading_btn_enviar').addClass("hidden");
        Swal.fire(
          'Oooops',
          'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
          'error'
        );
      }
    }
  });
  return false;
}

const superaCantidadesMinimas = (conjuntos, camisetas, shorts) => {
  const totalCamisetas = conjuntos.length + camisetas.length;
  const totaShorts = conjuntos.length + shorts.length;
  if( 
    (//No avanza si se piden menos camisetas y menos shorts de los minimos establecidos
      (totalCamisetas) < $('#minimo_camisetas').val()
      &&
      (totaShorts) < $('#minimo_shorts').val()
    )
    ||
    (//Tampoco se avanza si alguna tiene por lo menos 1 pero no supera la cantidad minima
      (
        (totalCamisetas) > 0 
        &&
        (totalCamisetas) < $('#minimo_camisetas').val()
      )
      ||
      (
        (totaShorts) > 0
        &&
        (totaShorts) < $('#minimo_camisetas').val()//en el caso de los shorts no puede pasar que haya por lo menos 1 pero no se supere la cantidad minima de las camisetas
      )
    )
  ){
    Swal.fire(
        'Debe completar el pedido mínimo',
        'Para realizar el pedido debe alcanzar la cantidad mínima de camisetas ('+$('#minimo_camisetas').val()+') y la cantidad mínima de shorts+medias ('+$('#minimo_shorts').val()+')',
        'warning'
      );
    return false;
  }
  return true;
}

function solicitarMercadoPago() {
  enviaEmail = false
  metodosPago = false
	enviar();
}

function iniciarMercadoPago(pedidoUuid, genero) {
  $('html, body').animate({scrollTop: $('.header-top-tit').offset().top}, "slow");
	let datos = 'precio='+parseInt($('.precioTotalD').html())+'&genero='+genero+'&pedido_id='+pedidoUuid;
	$.ajax({
		type: 'POST',
		url: "./common/includes/mercadopago.php",
		cache: false,
		data: datos,
		success: function (html) {
			$('#btn_mp').removeClass('hidden');
      $('#btn_enviar').removeClass('hidden');
      $('#loading_btn_enviar').addClass('hidden');
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
			$('#btn_mp').removeClass('hidden');
      $('#btn_enviar').removeClass('hidden');
      $('#loading_btn_enviar').addClass('hidden');
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
		url: "./common/includes/mercadopago_estado.php",
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
          $('.link_pedido_enviado').attr('href', 'https://pedido.'+url_server+'/pedido-' + pedidoUuid);
          $('#respuesta_gral').removeClass('hidden');
          $('html, body').animate({scrollTop: $('.header-top-tit').offset().top}, "slow");
				});
			}else{
        $('#btn_mp').removeClass('hidden');
      }
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
		},
	});
}

const addCamiseta = (delete_btn_visibility = true, representante = null, nombre = null, numero = null, talle_camiseta = null, id = null, arquero = false, estado = null) => {
  const itm = document.getElementById("divCamiseta").children[0];
  let cln = itm.cloneNode(true);
  if(!delete_btn_visibility){
    let boton = cln.children[cln.children.length-1].children[0];
    $(boton).css({'display': 'none'});
    var pagado = document.createElement("span")
    $(pagado).attr('class', 'badge bg-success')
    $(pagado).html('Pagado')
    $(pagado).insertAfter(boton);
  }
  if(id != null){
    jQuery.each(cln.querySelectorAll('[class$="_input"]'), function() {
      if(this.classList.contains('representante_input')){
        $(this).val(representante);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('nombre_input')){
        $(this).val(nombre);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('numero_input')){
        $(this).val(numero);
      } else if(this.classList.contains('talle_camiseta_input')){
        $(this).val(talle_camiseta);
        if(estado != null && estado != 0){
          $(this).attr('disabled', 'disabled');
        }
      } else if(this.classList.contains('id_input')){
        $(this).val(id);
      } else if(this.classList.contains('arquero_input')){
        if(arquero){
          $(this).click()
        }
      }
    });
  }
  document.getElementById("listado_camisetas").appendChild(cln);
  $(document.getElementById("listado_camisetas")).css({'display': 'block'});
  $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) + 1);
  $('.precio_total').html(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  $('#precio_total').val(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  updateTotalBox();
}

const addShort = (delete_btn_visibility = true, representante = null, nombre = null, numero = null, talle_short = null, id = null, arquero = false, estado = null) => {
  const itm = document.getElementById("divShort").children[0];
  let cln = itm.cloneNode(true);
  if(!delete_btn_visibility){
    let boton = cln.children[cln.children.length-1].children[0];
    $(boton).css({'display': 'none'});
    var pagado = document.createElement("span")
    $(pagado).attr('class', 'badge bg-success')
    $(pagado).html('Pagado')
    $(pagado).insertAfter(boton);
  }
  if(id != null){
    jQuery.each(cln.querySelectorAll('[class$="_input"]'), function() {
      if(this.classList.contains('representante_input')){
        $(this).val(representante);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('nombre_input')){
        $(this).val(nombre);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('numero_input')){
        $(this).val(numero);
      } else if(this.classList.contains('talle_short_input')){
        $(this).val(talle_short);
        if(estado != null && estado != 0){
          $(this).attr('disabled', 'disabled');
        }
      } else if(this.classList.contains('id_input')){
        $(this).val(id);
      } else if(this.classList.contains('arquero_input')){
        if(arquero){
          $(this).click()
        }
      }
    });
  }
  document.getElementById("listado_shorts").appendChild(cln);
  $(document.getElementById("listado_shorts")).css({'display': 'block'});
  $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) + 1);
  $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) + 1) * parseInt($('#option_medias_on').val()));
  $('.precio_total').html(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  $('#precio_total').val(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  updateTotalBox();
}

const addConjunto = (delete_btn_visibility = true, representante = null, nombre = null, numero = null, talle_camiseta = null, talle_short = null, id = null, arquero = false, estado = null) => {
  const itm = document.getElementById("divConjunto").children[0];
  let cln = itm.cloneNode(true);
  if(!delete_btn_visibility){
    let boton = cln.children[cln.children.length-1].children[0];
    $(boton).css({'display': 'none'});
    var pagado = document.createElement("span")
    $(pagado).attr('class', 'badge bg-success')
    $(pagado).html('Pagado')
    $(pagado).insertAfter(boton);
  }
  if(id != null){
    jQuery.each(cln.querySelectorAll('[class$="_input"]'), function() {
      if(this.classList.contains('representante_input')){
        $(this).val(representante);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('nombre_input')){
        $(this).val(nombre);
        if(estado != null && estado != 0){
          $(this).attr('readonly', 'readonly');
        }
      } else if(this.classList.contains('numero_input')){
        $(this).val(numero);
      } else if(this.classList.contains('talle_camiseta_input')){
        $(this).val(talle_camiseta);
        if(estado != null && estado != 0){
          $(this).attr('disabled', 'disabled');
        }
      } else if(this.classList.contains('talle_short_input')){
        $(this).val(talle_short);
        if(estado != null && estado != 0){
          $(this).attr('disabled', 'disabled');
        }
      } else if(this.classList.contains('id_input')){
        $(this).val(id);
      } else if(this.classList.contains('arquero_input')){
        if(arquero){
          $(this).click()
        }
      }
    });
  }
  document.getElementById("listado_conjuntos").appendChild(cln);
  $(document.getElementById("listado_conjuntos")).css({'display': 'block'});
  $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) + 1);
  $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) + 1);
  $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) + 1) * parseInt($('#option_medias_on').val()));
  $('.precio_total').html(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  $('#precio_total').val(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  updateTotalBox();
}

const guardarConjuntos = (conjuntos) => {
  let i = 0;
  //Obtengo todos los atributos visibles que componen un conjunto:
  jQuery.each(document.getElementsByClassName("conjunto"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('id_input')){
          this.value = conjuntos[i].id
        }
      });

      i++
    }
  });
}

const guardarCamisetas = (camisetas) => {
  let i = 0;
  //Obtengo todos los atributos visibles que componen una camiseta:
  jQuery.each(document.getElementsByClassName("camiseta"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('id_input')){
          this.value = camisetas[i].id
        }
      });

      i++
    }
  });
}

const guardarShorts = (shorts) => {
  let i = 0;
  //Obtengo todos los atributos visibles que componen un short:
  jQuery.each(document.getElementsByClassName("short"), function() {
    if($(this.parentElement).is(':visible')){
      let conjunto = {};

      jQuery.each(this.querySelectorAll('[class$="_input"]'), function() {
        if(this.classList.contains('id_input')){
          this.value = shorts[i].id
        }
      });

      i++
    }
  });
}

const opcionesSeleccionadas = (camisetas, shorts, conjuntos) => {
  $('#option_short_on').val(0)
  $('#option_short_arquero_on').val(0)
  $('#option_medias_on').val(0)
  $('#option_medias_arquero_on').val(0)
  $('#option_camiseta_on').val(0)
  $('#option_arq_on').val(0)
  
  if(camisetas.length > 0 || conjuntos.length > 0){
    camisetas.forEach(camiseta => {
      if(camiseta.arquero){
        $('#option_arq_on').val(1)
      }
    })
    conjuntos.forEach(conjunto => {
      if(conjunto.arquero){
        $('#option_arq_on').val(1)
      }
    })
    $('#option_camiseta_on').val(1)
  }

  if(shorts.length > 0 || conjuntos.length > 0){
    conjuntos.forEach(conjunto => {
      if(conjunto.arquero){
        $('#option_short_arquero_on').val(1)
        $('#option_medias_arquero_on').val(1)
      }
    })
    shorts.forEach(short => {
      if(short.arquero){
        $('#option_short_arquero_on').val(1)
        $('#option_medias_arquero_on').val(1)
      }
    })
    $('#option_short_on').val(1)
    $('#option_medias_on').val(1)
  }
}

const deleteElement = (elem, tipo) => {
  console.log(elem)
  jQuery.each(elem.parentElement.parentElement.parentElement.querySelectorAll('[class$="id_input"]'), function() {
      if(this.classList.contains('id_input')){
        if($(this).val()!=''){
          Swal.fire({
            title: 'Eliminar item',
            text: '(El item será eliminado sin requerir presionar el botón de guardado)',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Confirmo la eliminación del item`,
            cancelButtonText: `Cancelar`,
          }).then((result) => {
              if (result.isConfirmed) {
                let data = 'id='+$(this).val();
                $.ajax({
                  url: 'eliminar_jugador.php',
                  type: 'GET',
                  data: data,
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
                    Swal.fire(
                      'Oooops',
                      'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
                      'error'
                    );
                  },
                  success: function (html) {
                    confirmDeleteElement(elem, tipo);
                  }
                });
              }
          })
        }else{
          confirmDeleteElement(elem, tipo);
        }
      }
  });
}

const confirmDeleteElement = (elem, tipo) => {
  if(elem.parentElement.parentElement.parentElement.children.length == 2){
    $(elem.parentElement.parentElement.parentElement).css({'display': 'none'});
  }
  elem.parentElement.parentElement.parentElement.remove();
  if(tipo == 'conjunto'){
    $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) - 1);
    $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) - 1);
    $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) - 1) * parseInt($('#option_medias_on').val()));
  } else if(tipo == 'camiseta'){
    $('.cantidad_camisetas').html(parseInt($('.cantidad_camisetas').html()) - 1);
  } else if(tipo == 'shorts'){
    $('.cantidad_shorts').html(parseInt($('.cantidad_shorts').html()) - 1);
    $('.cantidad_medias').html((parseInt($('.cantidad_medias').html()) - 1) * parseInt($('#option_medias_on').val()));
  }
  $('.precio_total').html(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  $('#precio_total').val(parseInt($('.cantidad_camisetas').html())*parseInt($('#precio_camiseta').val()) + parseInt($('.cantidad_shorts').html())*parseInt($('#precio_short').val()) + parseInt($('.cantidad_medias').html()) * parseInt($('#precio_media').val()) * parseInt($('#option_medias_on').val()));
  updateTotalBox();
}

var fileReader = new FileReader();
  var filterType = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

function fileSize(elemId) {
      var img = document.getElementById(elemId);
      if (!img.value == "") {
          var imgSize = img.files[0].size;
          return imgSize;
      }

      return false;
  }

  var loadImageFile = function (uploadImage) {
      var fileInputName = uploadImage.name;

      //check and retuns the length of uploded file.
      if (uploadImage.files.length === 0) {
          return;
      }

      //Is Used for validate a valid file.
      var uploadFile = uploadImage.files[0];

      fileReader.onload = (function (event) {
          if (filterType.test(uploadFile.type)) {
              var previewImageName = "preview_" + fileInputName;
              var image = new Image();

              image.onload=function(){
                  var canvas=document.createElement("canvas");
                  var context=canvas.getContext("2d");

                  document.getElementById('preview_' + fileInputName).style.display = 'inline';
        // document.getElementById('save_' + fileInputName).style.display = 'inline';
        // document.getElementById('div_posicion_' + fileInputName).style.display = 'inline';
        
                  var divisor = 1;
                  var size = fileSize(fileInputName);
                  if (size > 1000000) {
                      divisor = Math.round(size / 2000000);
                  }else{
                      document.getElementById('preview_' + fileInputName).src = event.target.result;
                      return;
                  }

                  canvas.width=image.width/divisor;
                  canvas.height=image.height/divisor;
                  context.drawImage(image,
                      0,
                      0,
                      image.width,
                      image.height,
                      0,
                      0,
                      canvas.width,
                      canvas.height
                  );

                  document.getElementById(previewImageName).src = canvas.toDataURL();

                  var head = 'data:image/jpeg;base64,';
                  var imgFileSize = Math.round((document.getElementById(previewImageName).src.length - head.length)*3/4) ;

                  var divisorNuevo = 1;
                  if(imgFileSize > 1000000){
                      divisorNuevo = Math.round(imgFileSize / 2000000);
                  }

                  canvas.width=image.width/divisor/divisorNuevo;
                  canvas.height=image.height/divisor/divisorNuevo;
                  context.drawImage(image,
                      0,
                      0,
                      image.width,
                      image.height,
                      0,
                      0,
                      canvas.width,
                      canvas.height
                  );

                  document.getElementById(previewImageName).src = canvas.toDataURL();

                  head = 'data:image/jpeg;base64,';
                  imgFileSize = Math.round((document.getElementById(previewImageName).src.length - head.length)*3/4) ;
              };
              image.src=event.target.result;
          }else{
              var filterTypePDF = /^(?:application\/pdf)$/i;
              if (!filterTypePDF.test(uploadFile.type)) {
                  alert("Por favor, ingresa una imagen válida.");
                  return;
              }

              document.getElementById('preview_' + fileInputName).style.display = 'inline';
              document.getElementById('preview_' + fileInputName).src = event.target.result;
              return;
          } 
      });

      fileReader.readAsDataURL(uploadFile);
  };

  function deleteImage(idImage, tipo){
    Swal.fire({
      title: 'Eliminar imagen',
      text: 'Desea eliminar la imagen?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: `Confirmo la eliminación de la imagen`,
      cancelButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
          let data = 'imagen_id='+idImage;
          $.ajax({
            url: "eliminar_imagen.php",
            type: 'GET',
            data: data,
            async: false,
            cache: false,
            contentType: false,
            scriptCharset: "utf-8" ,
            encoding:"UTF-8",
            processData: false,
            success: function (data) {
              if (data == 'ok') {
                Swal.fire(
                  'Excelente!',
                  'La imagen ha sido eliminada.',
                  'success'
                );
                $('.div-img-'+idImage).remove();
                if(tipo == 'escudo'){
                  tieneImagenEscudo = false;
                }
                if(tipo == 'extra'){
                  tieneImagenExtra = false;
                }
              } else {
                Swal.fire(
                  'Oooops',
                  'No se pudo eliminar la imagen. Por favor, intente nuevamente o póngase en contacto con Yakka.',
                  'error'
                );
              }
            },
            error: function (xhr, textStatus, errorThrown) {
              console.log("Error: " + errorThrown);
              Swal.fire(
                'Oooops',
                'Ocurrió un error inesperado. No se pudo eliminar la imagen. Por favor, intente nuevamente o póngase en contacto con Yakka.',
                'error'
              );
            }
          });
        }
    })
  }
