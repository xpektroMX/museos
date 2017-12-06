function pintaObj(objId){

		var rj = jsonF("/lib/infoObra.php",{objId:objId});
		// console.log(rj);
		var r = $.parseJSON(rj);
		console.log(r);


		for(var i in r){
			if( typeof(r[i]) == 'string' ){
				$('#nl_objeto_'+i).text(r[i]);
			}
			if( typeof(r[i]) == 'object' ){
				// console.log(i,r[i])
				// $('#nl_objeto_'+i).text(typeof(rj)+" - "+r[i]);
				if(i == 'fecha' || i == 'creador'){
					for(var j in r[i]){
						var entrada = r[i][j];
						for(var e in entrada){
							console.log(e,entrada);
							$('#nl_objeto_'+e).text(entrada[e]);
							// console.log(e);
						}
					}
				}
				if(i == 'dimensiones'){
					var html = "";
					for(var j in r[i]){
						var entrada = r[i][j];
						// console.log(entrada);
						html += "<span>"+entrada.dimensionTipo+": "+entrada.dimensionValor+" "+entrada.dimensionUnidad+  "</span><br/>";
						// console.log(html)
						$("#nl_objeto_dimensiones").html(html);
					}

				}
			}
		}

		$('#nl_objeto_imagen').attr({
			src: 'img/coleccion/'+r.multimedia
		});

		$.each($('[id^=nl_objeto]'), function(index, val) {
			var ele = this.id.split('_')[2];
			if(ele != 'cont'){
				if(!$('#nl_objeto_'+ele).text()){
					$('#nl_objeto_cont_'+ele).remove();
					// $('#nl_objeto_cont_'+ele).css({backgroundColor:"#F00"});						
				}
			}
		});
}