/*
* Author: ArtStyles Brands (ArtTemplate / ArtIcons)
* URL: http://themeforest.net/user/artstyles
* Template Name: FORZO
* Version: 1.0
*/

(function($) {
	"use strict";


	/*-----------------------------------------------------------------
	Detect device mobile
	-------------------------------------------------------------------*/


	var isMobile = false;

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('html').addClass('touch');
		isMobile = true;
	}
	else{
		$('html').addClass('no-touch');
		isMobile = false;
	}


	/*-----------------------------------------------------------------
	event for menu mobile behabior
	-------------------------------------------------------------------*/

	$('.hamburger').on('click', function(){
		$('body').addClass('menu-mobile-active');
	});

	$('.closebtn').on('click', function(){
		$('body').removeClass('menu-mobile-active');
	});


	/*-----------------------------------------------------------------
	Init MFP
	-------------------------------------------------------------------*/
	$('.open-popup-link').magnificPopup({
		type:'inline',
		removalDelay: 500,
		mainClass: 'mfp-zoom-in',
		midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		callbacks: {
			beforeClose: function() {
				$('.mfp-bg').addClass('mfp-removing');
			}
		}
	});


	/*-----------------------------------------------------------------
	Fixed header
	-------------------------------------------------------------------*/


	// var header=$('.top:not(.navbar-fixed)');
	//
	// $('.top').affix({
	// 	offset: {
	// 		top: 1
	// 	}
	// });
	//
	// $('.top').on('affix.bs.affix', function() {
	// 	if (!header.hasClass('affix')){
	// 		header.addClass('animated slideInDown');
	// 	}
	// });
	//
	// $('.top').on('affix-top.bs.affix', function() {
	// 	header.removeClass('animated slideInDown');
	// });


})(jQuery);

//--------------------------------------
// Menu item active behavior
//--------------------------------------
(function($)
{
	$(document).ready(function()
	{
		// ------------------------
		// init
		// ------------------------
		var target = $('.main-menu .menu');
		if(!target.length) return;

		setNavigation();

		// ------------------------
		// functions
		// ------------------------
		function setNavigation() {
			var getUrl = window.location;
			// var baseurl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]+'/';
			var path = getUrl.pathname.split('/')[2];

			target.find('.item').each(function () {
				var href = $(this).attr('href');
				if (path === href) {
					target.find('li').removeClass('current active');
					target.find('li.lies').addClass('active');
					$(this).closest('li').addClass('current active');
				}
			});
		}


	});

})(jQuery);

//--------------------------------------
// Menu mobile item active behavior
//--------------------------------------
(function($)
{
	$(document).ready(function()
	{
		// ------------------------
		// init
		// ------------------------
		var target = $('.main-menu-mobile .menu');
		if(!target.length) return;

		setNavigation();

		// ------------------------
		// functions
		// ------------------------
		function setNavigation() {
			var getUrl = window.location;
			// var baseurl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]+'/';
			var path = getUrl.pathname.split('/')[2];

			target.find('.item').each(function () {
				var href = $(this).attr('href');
				if (path === href) {
					target.find('li').removeClass('current active');
					$(this).closest('li').addClass('current active');
				}
			});
		}


	});

})(jQuery);
