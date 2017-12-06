/* ========================================================================

Material: theme.js
Main Theme JS file

@Author: Andrew ch 
@URL: http://andrewch.eu
 
=========================================================================
 */

'use strict';

jQuery(document).ready(function( $ ) {

	// Navbar Effect
	$(window).scroll(function() {
		if ($(this).scrollTop() > 40) {
			$( "nav").removeClass("no-color navbar-padding");
			 } else {
			$( "nav").addClass("no-color navbar-padding");
		}
		if ($(this).scrollTop() > 40) {
			$( ".button-collapse").css("padding-top", "0px");
			 } else {
			$( ".button-collapse").css("padding-top", "10px");
		}
		if ($(this).scrollTop() > 40) {
			$( ".hide-on-med-and-down .dropdown-button i ").css("padding-top", "0px");
			 } else {
			$( ".hide-on-med-and-down .dropdown-button i ").css("padding-top", "4px");
		}
		if ($(this).scrollTop() > 40) {
			$( ".side-nav header").css("padding", "0px 0px");
			 } else {
			$( ".side-nav header").css("padding", "9px 0px");
		}
	});

	// Navbar Mobile Sidemenu Init

	$(".button-collapse").sideNav();

	// Dropdown Trigger

	$(".dropdown-button").dropdown();

	// Dropdown Trigger

	$(".dropdown-button-mobile").dropdown();

	// Magnific Image Popup

	$('.magnific').magnificPopup({
	    type:'image',
	    removalDelay: 300,
	    mainClass: 'mfp-fade'
	});

	// Magnific Video Popup

	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	    disableOn: 700,
	    type: 'iframe',
	    mainClass: 'mfp-fade',
	    removalDelay: 160,
	    preloader: false,
	    fixedContentPos: false
	});

	// Magnific Gallery Popup

	$('.popup-gallery').magnificPopup({
	    delegate: 'a',
	    type: 'image',
	    tLoading: 'Loading image #%curr%...',
	    mainClass: 'mfp-img-mobile',
	    gallery: {
	        enabled: true,
	        navigateByImgClick: true,
	        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	    },
	    image: {
	        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	        titleSrc: function(item) {
	            return item.el.attr('title') + '<small>Another gallery example.</small>';
	        }
	    }
	});

	// Price Range

	$(function() {
	    $( "#price-range" ).slider({
	        range: true,
	        min: 0,
	        max: 1000,
	        values: [ 50, 500 ],
	    slide: function( event, ui ) {
	    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	    }
	        });
	        $( "#amount" ).val( "$" + $( "#price-range" ).slider( "values", 0 ) +
	        " - $" + $( "#price-range" ).slider( "values", 1 ) );
	});

	// Sliders

	// Blockquote Slider

	var mySwiper = new Swiper('.swiper-container-blockquote', {
		speed: 400,
		spaceBetween: 100,
		pagination: '.swiper-pagination',
		paginationClickable: true
	});   

	// Blockquote Slider

	var mySwiper = new Swiper('.swiper-container-blockquote-app', {
		speed: 400,
		spaceBetween: 100,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		loop: true,
		autoplay: "5000"
	});   

	// Splash Slider

	var mySwiper = new Swiper('.swiper-container-splash', {
		speed: 400,
		pagination: '.swiper-pagination-white',
		paginationClickable: true
	});   

	// App Gallery Slider

	var setSwiper = function(swiper) {
		if (window.matchMedia('(max-width: 480px)').matches) {
			swiper.params.slidesPerView = 1;
		}
		if (window.matchMedia('(min-width: 481px) and (max-width: 800px)').matches) {
			swiper.params.slidesPerView = 2;
		}
		if (window.matchMedia('(min-width: 801px)').matches) {
			swiper.params.slidesPerView = 4;
		}
	};

	var mySwiper = new Swiper('.swiper-container-app', {
		speed: 400,
		centeredSlides: true,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		onInit: function(swiper) {
			setSwiper(swiper);
			swiper.update();
		}
	});

	window.addEventListener('resize', function() {
		setSwiper(mySwiper);
	});

	// Portfolio Share Modal

	$('.modal-trigger').leanModal({
		dismissible: true, 	// Modal can be dismissed by clicking outside of the modal
		opacity: .1,       		// Opacity of modal background
		in_duration: 300,  	// Transition in duration
		out_duration: 200, 	// Transition out duration
	});

	//Portfolio

	$(function(){
		var $container = $('.portfolio .masonry');
			$container.imagesLoaded( function(){
			$container.masonry({
			itemSelector : '.portfolio ul li'
			});
		});
	});


	$(window).load(function(){
		var $container = $('.portfolio ul');
	$container.isotope({
		filter: '*',
		animationOptions: {
		duration: 750,
		easing: 'linear',
		queue: false
	   }
	});
 	
	$('.portfolio-filter a').click(function(){
		$('.portfolio-filter .active').removeClass('active');
		$(this).addClass('active');
		var item = $(this).attr('data-filter');
		$container.isotope({
			filter: item,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
			}
		});
			return false;
		}); 
	});
 	// Stellar Parallax Init

 	$.stellar();

	// Init On scroll animations
	    
	function onScrollInit( items, trigger ) {
	    items.each( function() {
	        var osElement = $(this),
	            osAnimationClass = osElement.attr('data-os-animation'),
	            osAnimationDelay = osElement.attr('data-os-animation-delay');

	        osElement.css({
	            '-webkit-animation-delay':  osAnimationDelay,
	            '-moz-animation-delay':     osAnimationDelay,
	            'animation-delay':          osAnimationDelay
	        });

	        var osTrigger = ( trigger ) ? trigger : osElement;

	        osTrigger.waypoint(function() {
	            osElement.addClass('animated').addClass(osAnimationClass);
	        },{
	            triggerOnce: true,
	            offset: '90%'
	        });
	    });
	}

	Pace.on('done', function() {
	    setTimeout(function() {
	      onScrollInit( $('.os-animation') );
	      onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
	    }, 500);
	});

	// FAB 

	// Blog Share dropdown
	$('.dropdown-share-button').dropdown({
	  inDuration: 300,
	  outDuration: 225,
	  constrain_width: false, // Does not change width of dropdown to that of the activator
	  hover: false, // Activate on hover
	  gutter: 0, // Spacing from edge
	  belowOrigin: false // Displays dropdown below the button
	}
	);

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$( ".dropdown-share-button").css("opacity", "0", "-webkit-animation", "zoomIn");
			 } else {
			$( ".dropdown-share-button").css("opacity", "1", "-webkit-animation", "zoomIn");
		}
	});

	// Countdown

	$('.counter').each(function() {
	    var $counter = $(this);
	    var $odometer = $counter.find('.odometer-counter');
	    if($odometer.length > 0 ) {
	        var od = new Odometer({
	            el: $odometer[0],
	            value: $odometer.text(),
	            format: $counter.attr('data-format')
	        });
	        $counter.waypoint(function() {
	            window.setTimeout(function() {
	                $odometer.html( $counter.attr( 'data-count' ) );
	            }, 500);
	        },{
	            triggerOnce: true,
	            offset: 'bottom-in-view'
	        });
	    }
	});

             // Goto top button

	// Animate the scroll to top
	$('.go-top').click(function(event) {
	    event.preventDefault();
	    $('html, body').animate({scrollTop: 0}, 300);
	});

	//Slideshow gallery

	$('.popup-gallery').magnificPopup({
	        delegate: '.magnific-item a',
	        type: 'image',
	        tLoading: 'Loading image #%curr%...',
	        mainClass: 'magnific',
	        gallery: {
	        enabled: true,
	        navigateByImgClick: true,
	        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	    },
	        image: {
	            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	            titleSrc: function(item) {
	            return item.el.attr('title') + '<small>Material Template</small>';
	        }
	    }
	});

});
