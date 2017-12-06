/*!
 * MUSEO DE LA ESTAMPA WEBSITE
 * Version - 1.0
 * Author: Vannelo

 * - RESOURCES -
 * COLORS
 * ACCENT: #;
 * ACCENT: #;

*/

	// MATERIALIZE LIGHTBOX
		$(document).ready(function(){
		    $('.materialboxed').materialbox();
		  });
		        

	// BOTONES HEADER 
		var $contador_exposicion = 1;
		$('.exposicion-siguiente').click(function() {
			if ($contador_exposicion == 1) {
				$('#exposicion-imagen-01').fadeOut().promise().done(function() {
					$('#exposicion-imagen-02').fadeIn();
				});
				$('#exposicion-info-01').fadeOut().promise().done(function() {
					$('#exposicion-info-02').fadeIn();
					$contador_exposicion++;
				});
			}
			else if ($contador_exposicion == 2) {
				$('#exposicion-imagen-02').fadeOut().promise().done(function() {
					$('#exposicion-imagen-03').fadeIn();
				});
				$('#exposicion-info-02').fadeOut().promise().done(function() {
					$('#exposicion-info-03').fadeIn();
					$contador_exposicion++;
				});
			}
			else if ($contador_exposicion == 3) {
				$('#exposicion-imagen-03').fadeOut().promise().done(function() {
					$('#exposicion-imagen-01').fadeIn();
				});
				$('#exposicion-info-03').fadeOut().promise().done(function() {
					$('#exposicion-info-01').fadeIn();
					$contador_exposicion = 1;
				});
			}
		});
		$('.exposicion-anterior').click(function() {
			if ($contador_exposicion == 1) {
				$('#exposicion-imagen-01').fadeOut().promise().done(function() {
					$('#exposicion-imagen-03').fadeIn();
				});
				$('#exposicion-info-01').fadeOut().promise().done(function() {
					$('#exposicion-info-03').fadeIn();
					$contador_exposicion = 2;
				});
			}
			else if ($contador_exposicion == 2) {
				$('#exposicion-imagen-02').fadeOut().promise().done(function() {
					$('#exposicion-imagen-01').fadeIn();
				});
				$('#exposicion-info-02').fadeOut().promise().done(function() {
					$('#exposicion-info-01').fadeIn();
					$contador_exposicion--;
				});
			}
			else if ($contador_exposicion == 3) {
				$('#exposicion-imagen-03').fadeOut().promise().done(function() {
					$('#exposicion-imagen-02').fadeIn();
				});
				$('#exposicion-info-03').fadeOut().promise().done(function() {
					$('#exposicion-info-02').fadeIn();
					$contador_exposicion--;
				});
			}
		});

	// TOGGLE MENU MOBILE
		$('.abrir-menu').click(function() {
			$('.barra-05').slideToggle('slow');
		});







