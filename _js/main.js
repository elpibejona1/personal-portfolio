var global = {
	init: function() {
		global.skip();
		global.browserDetect();
		global.detectTouch();
		global.statusIndicator();
		global.nav();
		
		setTimeout(function(){
			if (window.location.hash !== "") {
				var hash = window.location.hash;
				
				global.hashNavigation(hash);
			} else {
				window.scrollTo(0,0);
			}
		}, 500)
	},
	controller: new ScrollMagic.Controller({}),
	skip: function() {
		$('.header__skip').on('click',function(e){
			e.preventDefault();
			$('main').focus();
		});
	},

	check: function(el) {
		var check = $(el).length;

		if ( check > 0 ) {
			return true;
		} else {
			return false;
		}
	},
	browserDetect: function(){
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf('MSIE ');
		var trident = ua.indexOf('Trident/');
		var edge = ua.indexOf('Edg/');
		var ff = ua.indexOf("Firefox");
		var safari = ua.indexOf('Safari');
		var chrome = ua.indexOf('Chrome')

		if (msie > 0) {
			$('html').addClass('ie11');
			global.ieSplash();
		} else if (trident > 0) {
			$('html').addClass('ie11');
			global.ieSplash();
		} else if (edge > 0) {
			$('html').addClass('edge');
		} else if (ff > -1){
			$('html').addClass('ff');
		} else if (safari > 0 && chrome < 0) {
			$('html').addClass('safari');
		} else if (chrome > 0) {
			$('html').addClass('chrome');
		}
	},
	ieSplash: function(){
		var firstFocusableElement = document.querySelector('#ieSplashFirstLink');
		var lastFocusableElement = document.querySelector('#ieSplashButton');

		$('.ieSplash').css('display', 'flex');

		setTimeout(function(){
			$('.ieSplashContent').focus();
		},250)
		
		$('#ieSplashButton').on('click', function(){
			$('.ieSplash').hide();
		})

		// Handle Focus Within Lightbox
		$(document).on('keydown', function(e) {

			if ($('.ieSplash').hasClass('open')) {
				var isTabPressed = e.key === 'Tab' || e.which === 9;

				if (!isTabPressed) {
					return;
				}

				if (e.shiftKey) { // if shift key pressed for shift + tab combination
					if (document.activeElement === firstFocusableElement) {
					$('#ieSplashButton').focus(); // add focus for the last focusable element
					e.preventDefault();
					}
				} else { // if tab key is pressed
					if (document.activeElement === lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
					$('#ieSplashFirstLink').focus(); // add focus for the first focusable element
					e.preventDefault();
					}
				}
			}
		});
	},
	detectTouch: function(){
		if ("ontouchstart" in document.documentElement) {
	
			$('html').addClass('touch');
		}
	},
	statusIndicator: function() {
		
	},
	nav: function(){
		var navShrinkTl = gsap.timeline({});

		navShrinkTl
			.to('.header__logo', 1, { width: 50 })
			.to('.container--header', 1, { paddingTop: 10, paddingBottom: 10 }, '-=1');

		var scene = new ScrollMagic.Scene({
			duration: $('header').outerHeight()
		})
		.setTween(navShrinkTl)
		.addTo(global.controller);

		$(window).on('hashchange', function(){
			var hash = window.location.hash;
			
			global.hashNavigation(hash);
		})
	},
	hashNavigation: function(hash) {
		var modifier = hash.slice(1);
		var $section = $('.homeScreen--' + modifier);

		if ($section.length > 0) {
			var position = $section.offset().top;
			var offset = 92;

			if (modifier === 'contact') {
				offset = 0;
			}

			gsap.to(window, 0.5, { scrollTo: { y: position, offsetY: offset } });
		}
	}
}
global.init();


var animations = {
	init: function() {
		animations.intro();
		animations.about();
		animations.samples();
		animations.contact();
	},
	intro: function() {
		var circle = document.getElementById('logoCircle');
		var length = circle.getTotalLength() + 10;

		gsap.set('.header__logo__circle', { strokeDasharray: length, strokeDashoffset: 0 })

		var introTl = gsap.timeline({ delay: 1 });

		introTl
			.set('.homeIntro__logo', { opacity: 1 })
			.from('.header__logo__letters', 0.25, { scale: 0, transformOrigin: 'center center' })
			.from('.header__logo__circle', 0.5, { strokeDashoffset: length })
			.to('.homeIntro', 0.5, { autoAlpha: 0 }, '+=1')
			.from('.header__logo', 0.25, { scale: 0 })
			.from('.header__primaryNav a', 0.25, { y: -50, opacity: 0, stagger: 0.125 })
			.from('.header__download', 0.25, { y: -50, opacity: 0 }, '-=0.125')
			.from('.heading--first', 0.25, { x: -100, opacity: 0 })
			.from('.homeScreen--1 p', 0.25, { y: 50, opacity: 0, stagger: 0.125 })
			.to('.homeBotContent', 0.25, { opacity: 1 });
	},
	about: function(){
		var aboutTl = gsap.timeline({});

		aboutTl
			.from('.heading--about', 0.25, { x: -100, opacity: 0 })
			.from('.homeAboutImage', 0.25, { x: '100%', opacity: 0 })
			.from('.homeAboutCopy__section', 0.25, { y: 50, opacity: 0, stagger: 0.125 });

		var scene = new ScrollMagic.Scene({
			triggerElement: '.heading--about',
			triggerHook: 'onCenter',
			reverse: false,
		})
		.setTween(aboutTl)
		.addTo(global.controller);
	},
	samples: function(){
		var headingScene = new ScrollMagic.Scene({
			triggerElement: '.heading--samples',
			triggerHook: 'onCenter',
			reverse: false,
		})
		.setTween(
			gsap.from('.heading--samples', 0.25, { x: -100, opacity: 0 })
		)
		.addTo(global.controller);

		$('.sample').each(function(){
			var $this = $(this);
			var $copy = $this.find('.sample__copy');
			var $img = $this.find('.sample__img');
			var sampleTl = gsap.timeline({});

			sampleTl.from($copy, 0.5, { y: '100%', opacity: 0 });

			if ($img.hasClass('sample__img--odd')) {
				sampleTl.from($img, 0.5, { x: '100%', opacity: 0 }, '-=0.5');
			} else {
				sampleTl.from($img, 0.5, { x: '-100%', opacity: 0 }, '-=0.5');
			}

			var scene = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.75,
				reverse: false
			})
			.setTween(sampleTl)
			.addTo(global.controller);
		})
	},
	contact: function(){
		var contactTl = gsap.timeline({});

		contactTl
			.from('.heading--contact', 0.25, { x: -100, opacity: 0 })
			.from('.homeScreen--4 p', 0.25, { y: 50, opacity: 0 });

		var scene = new ScrollMagic.Scene({
			triggerElement: '.heading--contact',
			triggerHook: 'onCenter',
			reverse: false,
		})
		.setTween(contactTl)
		.addTo(global.controller);
	}
}
animations.init();


var components = {
	init: function() {

	}
}
components.init();