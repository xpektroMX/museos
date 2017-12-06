var rz = aRaiz();

$.fn.serializeObject = function(){
	var o = {};
	var a = this.serializeArray();
	$.each(a, function() {
	if (o[this.name] !== undefined) {
		if (!o[this.name].push) {
		o[this.name] = [o[this.name]];
		}
		o[this.name].push(this.value || '');
	} else {
		o[this.name] = this.value || '';
	}
	});
	return o;
};


/**
 * Provides more features for the widget module...
 *
 * @module Generales
 * @main Generales
 */

/**
* Funciones generales que serán utilizadas en los módulos específicos
*
* @class Funciones generales
*/

/**
* Este método arroja busca el archivo raiz ubicado en el directorio raiz del proyecto y arroja la
* ruta de acceso al directorio raiz
*
* @method aRaiz
* @return {String} Devuelve la ruta del directorio Raiz a partir del directorio de llamada.
*/
function aRaiz(){

	var path = document.location.pathname;
	var dirs = path.split('/');
	var dRaiz = 'NO';

	$.ajax({
		url:'./raiz',
		async:false,
		success: function(){
			dRaiz = './';
		}
	});
	busq:{
		for(var i = 0;i<dirs.length;i++){
			if(dRaiz != 'NO'){
				break busq;
			}
			var dir = '';
			for(var j = 0; j<i;j++){
				dir += '../';
			}
			$.ajax({
				url:dir+'raiz',
				type:'HEAD',
				async:false,
				success: function(){
					dRaiz = dir;
				}
			});
		}

	}

	if(dRaiz == 'NO'){
		return 'Raiz no encontrado';
	}else{
		return dRaiz;       
	}
}



function jsonF(archivo,datos){
	with ((console && console._commandLineAPI) || {}) {
	  r = '';
	}
	var r = '';
	$.ajax({
		url: rz+archivo,
		type: 'POST',
		data: datos,
		async:false
	})
	.done(function(data) {
		r = data
	})
	.fail(function() {
		console.log("error");
	});
	
	return r;
}
