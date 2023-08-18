var cantidadDeArqueros = null;
var precioArquero = null;
var esConjunto = null;
var cantidadDeJugadores = null;
var precioConjunto = null;
var costoTotal = null;
var d1 = null;
var d1c = null;
var d2 = null;
var d2c = null;
var genero = null;
var medias_on = null;
var short_on = null;
var relative_path = null;

$( document ).ready( function(){
	genero = document.getElementById('pedido_js').getAttribute("genero");
	medias_on = document.getElementById('pedido_js').getAttribute("medias_on");
	short_on = document.getElementById('pedido_js').getAttribute("short_on");
	relative_path = document.getElementById('pedido_js').getAttribute("relative_path");

	 /* NAV OPTIONS */
	 if(genero != 'chombas'){
		 cantidadDeArqueros = 0;
		 precioArquero = parseFloat( $('#precio_arquero').val() );
		 esConjunto = false;
	 }
	cantidadDeJugadores =  parseInt($('#hCantCamisetas').val() );
	precioConjunto = parseFloat( $('#precio_camiseta').val() );
	costoTotal = 0;

	d1 = parseInt($('#d1').val());
	d1c = parseInt($('#d1c').val());
	d2 = parseInt($('#d2').val());
	d2c = parseInt($('#d2c').val());

	cantidadDeArqueros = $('#list_players_arq tbody tr').length;
	cantidadDeJugadores = $('#list_players tbody tr').length;

	if(medias_on){
		if(!$('#option_switch_medias').is(':checked')){
			$('#option_switch_medias').click();
			updateMedias();
		}
	}

	if(short_on){
		if(!$('#option_switch_short').is(':checked')){
			$('#option_switch_short').click();
			updateShort();
		}
	}else{
		$('.talle_short').prop( "disabled", true );
		$('.talle_short_arquero').prop( "disabled", true );
	}

	updateTotalBox();

	if($('.precioTotalD').html() > pagado){
		$('#btn_mp').css({"display": "block"});
		$('.restante').val(parseFloat($('.precioTotalD').html()) - pagado);
		$('.restante').html(parseFloat($('.precioTotalD').html()) - pagado);
		$('.pagado').html(pagado);
		$('.pagado').val(pagado);
	}
});

var cantMinCamisetas;
$( document ).ready( function(){
	cantMinCamisetas = document.getElementById('pedido_js').getAttribute("cantMinCamisetas");

	if($('#list_players_arq tbody tr').length == 0){
		$('#list_players_arq').css({"display": "none"});
	}
});

$(document).on('click','.btn_delete',function() {
	if(($('#list_players_arq tbody tr').length + $('#list_players tbody tr').length) <= cantMinCamisetas){
		Swal.fire(
			'Oooops',
			'La cantidad mínima de conjuntos es ' + cantMinCamisetas,
			'warning'
		);
		return false;
	}

	if($(this).parent().parent().parent().parent().attr('id')=='list_players_arq'){//arquero
		$(this).parent().parent().remove();
		if($('#list_players_arq tbody tr').length == 0){
			$('#list_players_arq').css({"display": "none"});
		}

		cantidadDeArqueros = $('#list_players_arq tbody tr').length;
		updateTotalBox();
	}

	if($(this).parent().parent().parent().parent().attr('id')=='list_players'){//jugador
		$(this).parent().parent().remove();
		if($('#list_players tbody tr').length == 0){
			$('#list_players').css({"display": "none"});
		}

		cantidadDeJugadores = $('#list_players tbody tr').length;
		updateTotalBox();
	}
});

$(document).on('click','.btn_add',function() {
	if($(this).parent().parent().attr('id')=='add_arquero'){//arquero
		// $('#list_players_arq').css({"display": "block"});
		let tbody = $('#list_players_arq tbody').first();
		var tr = $('<tr height="22"><td class="data_jugador"><div class="row"><input type="text" name="nombre_arquero[]" class="nombre_arquero form-control" value="" style="width: 80%;" required/></div></td><td class="data_jugador"><input type="number" min="0" name="numero_arquero[]" class="numero_arquero form-control" maxlength="3" value="" style="width: 75px;" required/></td><td class="data_jugador"><select name="talle_arquero[]" class="talle_arquero form-control" style="width: 80%;"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></td><td><span class="btn_delete">X</span></td></tr>');
		tbody.append(tr);

		cantidadDeArqueros = $('#list_players_arq tbody tr').length;
		updateTotalBox();
	}

	if($(this).parent().parent().attr('id')=='add_jugador'){//jugador
		// $('#list_players').css({"display": "block"});
		let tbody = $('#list_players tbody').first();
		var tr = $('<tr height="22"><td class="data_jugador"><div class="row"><input type="text" name="nombre_jugador[]" class="nombre_jugador form-control" value="" style="width: 80%;" required/></div></td><td class="data_jugador"><input type="number" min="0" name="numero_jugador[]" class="numero_jugador form-control" maxlength="3" value="" style="width: 75px;" required/></td><td class="data_jugador"><select name="talle_jugador[]" class="talle_jugador form-control" style="width: 80%;"><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="XXXL">XXXL</option></select></td><td><span class="btn_delete">X</span></td></tr>');
		tbody.append(tr);

		cantidadDeJugadores = $('#list_players tbody tr').length;
		updateTotalBox();
	}
});

function updateTotalBox() {
	$('.precioConjunto').html(precioConjunto);
	$('.cantConjunto').html(cantidadDeJugadores);

	costoTotal = $('.precioTotal').html();

	if(genero != 'chombas'){//HOMBRE y MUJER:
		$('.cantArqueros').html(cantidadDeArqueros);

		$('#hPConj').val(precioConjunto);
		$('#hPArquero').val(precioArquero);
		if (esConjunto) {
			$('.precioArqueros').html(precioConjunto);
		} else {
			$('.precioArqueros').html(precioArquero);
		}
		cantidadDeConjuntos = (parseInt(cantidadDeJugadores)+parseInt(cantidadDeArqueros));
		
		if(costoTotal >= d2c) {
			costoTotalDesc = costoTotal * (1 - (d2/100));
			$('.descuentoAplic').html(d2 + "%");
			$('.costoConDescuento').css("display", "table-row");
		} else if(costoTotal >= d1c && costoTotal < d2c) {
			costoTotalDesc = costoTotal * (1 - (d1/100));
			$('.descuentoAplic').html(d1 + "%");
			$('.costoConDescuento').css("display", "table-row");
		} else {
			costoTotalDesc = costoTotal;
			$('.descuentoAplic').html(0);
			$('.costoConDescuento').css("display", "none");
		}
	}else{//CHOMBAS:
		$('#hPConj').val(precioConjunto);
		
		cantidadDeConjuntos = parseInt(cantidadDeJugadores);
		if(costoTotal >= d2c) {
			costoTotalDesc = costoTotal * (1 - (d2/100));
			$('.descuentoAplic').html(d2 + "%");
			$('.costoConDescuento').css("display", "table-row");
		} else if(costoTotal >= d1c && costoTotal < d2c) {
			costoTotalDesc = costoTotal * (1 - (d1/100));
			$('.descuentoAplic').html(d1 + "%");
			$('.costoConDescuento').css("display", "table-row");
		} else {
			costoTotalDesc = costoTotal;
			$('.descuentoAplic').html(0);
			$('.costoConDescuento').css("display", "none");
		}
	}

	$('.precioTotalD').html(parseFloat(costoTotalDesc).toFixed(2));
	$('#hTotal').val(parseFloat(costoTotal).toFixed(2));
}

$(document).ready(function() {
	$('#btn_pdf').click(function() {       
		html2canvas(document.body, {
			onrendered: function(canvas) {
				var imgData = canvas.toDataURL('image/png');

				// if ($(document).width() > $(document).height()) {
				// var doc = new jsPDF('l', 'pt', [$(document).width(), $(document).height()]); //
				// }
				// else {
				// var doc = new jsPDF('p', 'pt', [$(document).height(), $(document).width()]); //
				// }

				// var doc = new jsPDF('l', 'pt', [$(document).width(), $(document).height()]);
				   var id = $('#id_pedido').val();

					var doc = new jsPDF('', 'mm', [canvas.width, canvas.height]);
				doc.addImage(imgData, 'png', 10, 10, canvas.width, canvas.height);


				doc.addImage(imgData, 'JPEG', 10, 10, 180, 150);
				doc.save('pedido'+id+'.pdf');
			}
		});
	});

	$('#option_switch_medias').change(function() {
		updateMedias();
		updateTotalBox();
	});

	$('#option_switch_short').change(function() {
		if(this.checked){
			$('.talle_short').prop( "disabled", false );
			$('.talle_short_arquero').prop( "disabled", false );
		}else{
			$('.talle_short').prop( "disabled", true );
			$('.talle_short_arquero').prop( "disabled", true );
		}
		updateShort();
		updateTotalBox();
	});

	$('#btn_enviar_edit').click(function() {
		var email = $('#email_owner').val();

		if (email == '' || !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
			Swal.fire(
				'Oooops',
				'Debe ingresar un email valido',
				'error'
			);
			return (false)
		}

		var errorValidacion = false;
		$('.data_jugador').each( function() {
			if($( this ).find('div').find('input').val() == '' && $( this ).find('div').find('input').attr('name') != 'nombre_jugador[]' && $( this ).find('div').find('input').attr('name') != 'nombre_arquero[]'){
				errorValidacion = true;
				$( this ).find('div').find('input').css("border", "1px solid #f51a1a");
			}else{
				$( this ).find('div').find('input').css("border", "");
			}

			if($( this ).find('input').val() == '' && $( this ).find('input').attr('name') != 'nombre_jugador[]' && $( this ).find('input').attr('name') != 'nombre_arquero[]'){
				errorValidacion = true;
				$( this ).find('input').css("border", "1px solid #f51a1a");
			}else{
				$( this ).find('input').css("border", "");
			}
		} );
		if(errorValidacion){
			Swal.fire(
				'Oooops',
				'Complete todos los datos requeridos',
				'warning'
			);
			return false;
		}

		$('#btn_enviar_edit').css({"display": "none"});
		$('#loading').css({"display": "inline-block"});

		// console.log("valido");
		// console.log($("#form_id_prod").serialize());
		// $("#form_id_prod").serialize()
		var formData = new FormData($('#form_id_prod')[0]);
		// formData.append('genero', genero);
		$.ajax({
			url: relative_path+'/common/includes/editar_pedido.php',
			type: 'POST',
			data: formData,
			mimeType: 'multipart/form-data',
			async: false,
			cache: false,
			contentType: false,
			scriptCharset: "utf-8" ,
			encoding:"UTF-8",
			processData: false,
			success: function (data) {
				// data = $.parseJSON(data);
				console.log(data);
				// alert(data.message);
				if (data == 'ok') {
					Swal.fire(
						'Excelente!',
						'Los cambios fueron enviados.',
						'success'
					);
					$('.restante').val(parseFloat($('.precioTotalD').html()) - pagado);
					$('.restante').html(parseFloat($('.precioTotalD').html()) - pagado);
				} else {
					Swal.fire(
						'Oooops',
						'Los datos no coinciden. Por favor, intente nuevamente o póngase en contacto con Yakka.',
						'error'
					);
				}
				$('#btn_enviar_edit').css({"display": "inline-block"});
				$('#loading').css({"display": "none"});
			},
			error: function (xhr, textStatus, errorThrown) {
				console.log("Error: " + errorThrown);
				Swal.fire(
					'Oooops',
					'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
					'error'
				);
				$('#btn_enviar_edit').css({"display": "inline-block"});
				$('#loading').css({"display": "none"});
			}
		});

		return (true)
	});

});

function updateShort(){
	if($('#option_switch_short').is(':checked')){
		$('#option_short').val(1);
	}else{
		$('#option_short').val(0);
	}
}

function updateMedias(){
	if($('#option_switch_medias').is(':checked')){
		$('#option_medias').val(1);
	}else{
		$('#option_medias').val(0);
	}
}

(function($, viewport){
	$(window).on('load', 
		viewport.changed(function() {
			if( viewport.is('<md')) {
			}else{
				var offsetPixels = 300;

				$(window).on('scroll', function() {
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
			}
		})
	);
})(jQuery, ResponsiveBootstrapToolkit);

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

function solicitarMercadoPago() {
	let datos = 'precio='+parseInt($('#restante').html())+'&genero='+genero+'&pedido_id='+pedidoUuid;
	$('#btn_mp').css("visibility", "hidden");
	$('#loading_btn_enviar').css("display", "block");
	$.ajax({
		type: 'POST',
		url: relative_path+"/common/includes/mercadopago.php",
		cache: false,
		data: datos,
		success: function (html) {
			$('#btn_mp').css("visibility", "visible");
			$('#loading_btn_enviar').css("display", "none");
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
			$('#loading_btn_enviar').css("display", "none");
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
		url: relative_path+"/common/includes/mercadopago_estado.php",
		cache: false,
		data: datos,
		success: function (html) {
			var obj = null;
			try {
				obj = JSON.parse(html);
			} catch (err) {
			}
			if(json.collection_status != undefined){
				Swal.fire(
					'Enviado!',
					'Gracias! Verificaremos el pago.',
					'success'
				);
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			alert('Se ha producido un error. Vuelve a intentarlo, por favor. Gracias!');
		},
	});
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
					document.getElementById('save_' + fileInputName).style.display = 'inline';
					document.getElementById('div_posicion_' + fileInputName).style.display = 'inline';
					
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

	function deleteImage(idImage){
		if(confirm('Desea eliminar la imagen?')){
			var formData = new FormData($('#form_id_prod')[0]);
			formData.append('imagen_id', idImage);
			$.ajax({
				url: relative_path+'/common/includes/eliminar_imagen_pedido.php',
				type: 'POST',
				data: formData,
				mimeType: 'multipart/form-data',
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
	}

	function guardarImagen(fileInputName){
        var dataURL = document.getElementById('preview_' + fileInputName).src;
        var blobBin = atob(dataURL.split(',')[1]);
        var array = [];
        for(var i = 0; i < blobBin.length; i++) {
            array.push(blobBin.charCodeAt(i));
        }

        var tipoArchivo = 'image/jpeg';

        var file = new Blob([new Uint8Array(array)], {type: tipoArchivo});

		document.getElementById('save_' + fileInputName).style.display = 'none';
        $('.loading_'+fileInputName).show();

		var formData = new FormData($('#form_id_prod')[0]);
        formData.append(fileInputName, file);
		$.ajax({
			url: relative_path+'/common/includes/guardar_imagen_pedido.php',
			type: 'POST',
			data: formData,
			mimeType: 'multipart/form-data',
			async: false,
			cache: false,
			contentType: false,
			scriptCharset: "utf-8" ,
			encoding:"UTF-8",
			processData: false,
			success: function (html) {
				let obj = JSON.parse(html);
				let data = obj.data;
				let image_id = obj.image_id;
				let posicion = obj.posicion;
				let nombreArchivo = obj.nombreArchivo;
				
				if (data) {
					Swal.fire(
						'Excelente!',
						'Los cambios fueron guardados.',
						'success'
					);
					$('#rows_'+fileInputName).append('<div class="col-xs-6"><div class="img-thumbnail img-upload div-img-'+image_id+'"><a download="'+nombreArchivo+'" href="'+data+'"><img height="200px" width="200px" src="data:image;base64, '+data+'"></a><div class="img-trash"><i class="fa fa-trash-o" style="color:#000; cursor: pointer;" onclick="deleteImage('+image_id+')" aria-hidden="true"></i><span style="margin-left: 5px">Posición: '+posicion+'</span></div></div></div>');
				} else {
					Swal.fire(
						'Oooops',
						'Los cambios no fueron guardados. Por favor, intente nuevamente o póngase en contacto con Yakka.',
						'error'
					);
				}
				$('.loading_'+fileInputName).hide();
				$('#preview_'+fileInputName).hide();
				$('#'+fileInputName).val('');
				$('#div_posicion_'+fileInputName).hide();

			},
			error: function (xhr, textStatus, errorThrown) {
				console.log("Error: " + errorThrown);
				Swal.fire(
					'Oooops',
					'Ocurrió un error inesperado. Por favor, intente nuevamente o póngase en contacto con Yakka.',
					'error'
				);
				$('.loading_'+fileInputName).hide();
				$('#preview_'+fileInputName).hide();
				$('#'+fileInputName).val('');
				$('#div_posicion_'+fileInputName).hide();
			}
		});
    }