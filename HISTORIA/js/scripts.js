/*!
 * MUSEO DE HISTORIA WEBSITE
 * Version - 1.0
 * Author: Vannelo

 * - RESOURCES -
 * COLORS
 * ACCENT: #696866;
 * ACCENT: #81233e;

*/


// SLIDER
	$(document).ready(function(){
 
        $('#slider-header').layerSlider({

        	skinsPath: 'layerslider/skins/',
        	navButtons: true,
        	navStartStop: false,
        	showCircleTimer: false,
        	navPrevNext: true,
            pauseOnHover: false
 
        });
    });

// MENU
	$('.boton-menu').click(function() {
		$('.contenedor-mobile').fadeToggle();
	});	