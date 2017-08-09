// Scroll Arrows

var scrollArrows = function(){
	var arrow1 = $('.nameSquare__scroll i:first-child');
	var arrow2 = $('.nameSquare__scroll i:nth-child(3)');
	var arrow3 = $('.nameSquare__scroll i:nth-child(5)');

	TweenMax.staggerFrom([arrow3, arrow2, arrow1], 0.25, { visibility: 'hidden', repeatDelay: 1.5, repeat: -1 }, 0.35 );
};
scrollArrows();

// Menu Functionality

var menu = {
	init: function(){
		menu.toggle();
		menu.overlayClose();
		menu.navigate();
	},

	menuOpen: false,

	ran: false,

	toggle: function(){

		$('.menu__button').on('click', function(){
			if ( menu.menuOpen ) {
				menu.close();
			} else {
				menu.open();
			}
		})
	},

	// Open Menu
	open: function(){
		$('html, body').css('overflow-y', 'hidden');

		var openTL = new TimelineMax();

		openTL.set('.menu__overlay', { display: 'block' });

		// Desktop and iPad
		if ( $(window).width() > 530 ) { 
			openTL.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: '+=300px'});
		// Mobile
		} else {
			openTL.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: '+=250px'});
		}
		
		openTL.to('.menu__hamburger__top', 0.25, { y: '+=12.5px' })
			.to('.menu__hamburger__middle', 0.25, { opacity: 0 }, '-=0.25')
			.to('.menu__hamburger__bottom', 0.25, { y: '-=12.5px' }, '-=0.25')
			.to('.menu__hamburger__top', 0.25, { rotation: '+=45', transformOrigin: 'center center' })
			.to('.menu__hamburger__bottom', 0.25, { rotation: '-=45', transformOrigin: 'center center' }, '-=0.25');

		menu.menuOpen = true;
	},

	// Close Menu
	close: function(){
		$('html, body').css('overflow-y', 'scroll');

		var closeTL = new TimelineMax();
		closeTL.to('.menu__hamburger__top', 0.25, { rotation: '-=45', transformOrigin: 'center center' })
			.to('.menu__hamburger__bottom', 0.25, { rotation: '+=45', transformOrigin: 'center center' }, '-=0.25')
			.to('.menu__hamburger__top', 0.25, { y: '-=12.5px' })
			.to('.menu__hamburger__middle', 0.25, { opacity: 1 }, '-=0.25')
			.to('.menu__hamburger__bottom', 0.25, { y: '+=12.5px' }, '-=0.25').set('.menu__overlay', { display: 'none' })
			.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: 0 });
		
		menu.menuOpen = false;
	},

	overlayClose: function(){
		$('.menu__overlay').on('click', function(){
			menu.close();
		})
	},

	// Menu Navigation Functionality
	navigate: function(){
		$('.header__nav__link a').on('click', function(e){
			e.preventDefault();

	  		menu.close();
			
			var section = $(this).parent().attr('data-link');
			var position = $('.screen--' + section).offset().top;
			console.log(section + ' ,' + position);

			setTimeout(function(){
				$('body, html').animate({ scrollTop: position });
			}, 1000);
		});
	}
};
menu.init();

// Screen Tweens

var controller = new ScrollMagic.Controller();

var screen2TL = new TimelineMax();

var skillBoxes = [ '.box--skills--1', '.box--skills--2', '.box--skills--3', '.box--skills--4', '.box--skills--8', '.box--skills--12', '.box--skills--11', '.box--skills--10', '.box--skills--9', '.box--skills--5', ];

screen2TL.staggerTo(skillBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var scene2 = new ScrollMagic.Scene({
	triggerElement: '.screen--2',
	triggerHook: 'onCenter'
})
	.setTween(screen2TL)
	.addTo(controller);

var screen3TL = new TimelineMax();

var workBoxes = [ '.box--work--1', '.box--work--5', '.box--work--9', '.box--work--2', '.box--work--10', '.box--work--3', '.box--work--11', '.box--work--4', '.box--work--8', '.box--work--12', ];

screen3TL.staggerTo(workBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var scene3 = new ScrollMagic.Scene({
	triggerElement: '.screen--3',
	triggerHook: 'onCenter'
})
	.setTween(screen3TL)
	.addTo(controller);

/*var screen4TL = new TimelineMax();

var personalBoxes = [ '.box--personal--1', '.box--personal--12', '.box--personal--9', '.box--personal--4', '.box--personal--2', '.box--personal--11', '.box--personal--10', '.box--personal--3', '.box--personal--8', '.box--personal--5', ];

screen4TL.to('.screen--4', 0, { visibility: 'visible' })
		.to('.screen--4', 0.5, { y: 0 })
		.staggerTo(personalBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var scene4 = new ScrollMagic.Scene({
	triggerElement: '.screen--4',
	triggerHook: 'onCenter'
})
	.setTween(screen4TL)
	.addTo(controller);*/

var screen5TL = new TimelineMax()

if ($(window).width() > 767) {

	screen5TL.to('.scroll', 0, { visibility: 'none', opacity: 0 }, '-=0.5')
			.to('.nameSquare--wide', 0.5, { y:0, x:0, top: '2vh', left: '10vw', padding: 15 })
			.to('.nameSquare--wide', 0.5, { width: '80vw', height: 150 })
			.to('.row--about', 0.25, { height: '65vh', opacity: 1 })
			.to('.about__button', 0.25, { visibility: 'visible', opacity: 1 });


	var scene5 = new ScrollMagic.Scene({
		triggerElement: '.screen--5',
		triggerHook: 'onCenter'
	})
		.setTween(screen5TL)
		.addTo(controller);
}



// Form Functionality

var formPlaceholder = {
	init: function(){
		formPlaceholder.focus();
		formPlaceholder.blur();
	},
	focus: function(){
		$('.form__input').on('keyup', function(){
			var placeholder = $(this).prev('.form__label');

			if ($(this).val() != "" ) {
				$(this).next('.form__label').hide();
				TweenMax.to(placeholder, 0.25, { visibility: 'visible', opacity: 1, top: 30 });
			} else {
				TweenMax.set(placeholder, { visibility: 'hidden', color:' #fff', top: 45 });
			}
		})
	},
	blur: function(){
		$('.form__input').on('blur', function(){
			var placeholder = $(this).prev('.form__label');

			if ($(this).val() === "" ) {
				TweenMax.set(placeholder, { visibility: 'hidden', color:' #c63417', top: 45 });
			} else {
				TweenMax.set(placeholder, { color: '#999999', fontWeight: 400 });
			}
		})
	}
};
formPlaceholder.init();


// Show / Hide Contact Form

var toggleForm = {
	init: function(){
		toggleForm.open();
		toggleForm.close();
	},
	open: function(){
		$('.about__button--contact a').on('click', function(e){
			e.preventDefault();
			TweenMax.to($('.formContainer, .contactForm'), 0.25, { display: 'block'});
			TweenMax.to($('.contactForm'), 0.25, { top: '50%'});
			TweenMax.to('.menu__button', 0.25, { opacity: 0, visibility: 'hidden'});
		})
	},
	close: function(){
		$('.form__close, .form__close svg').on('click', function(){
			TweenMax.to($('.formContainer, .contactForm'), 0.25, { display: 'none'});
			TweenMax.to($('.contactForm'), 0.25, { top: '150%'});
			TweenMax.to('.menu__button', 0.25, { opacity: 1, visibility: 'visible'});
			TweenMax.set('.form', { opacity: 1, visibility: 'visible' })
			$('.form__success').hide();
			$('.form__input').val('');
			TweenMax.set('.form__label--label', { visibility: 'hidden', color:' #fff', top: 45 });
		})
	}
};
toggleForm.init();


$(function() {
	$(".form").submit(function() {

	// Form Error Handling
	
		var name = $("input#name").val();
		if (name == "") {
			$(this).prev('.form__label').css({
				'visibility': 'hidden',
				'opacity': '0'
			});
			$("label#nameError").show();
			$("input#name").focus();
			return false;
		}
		var email = $("input#email").val();
		if (email == "") {
			$(this).prev('.form__label').css({
				'visibility': 'hidden',
				'opacity': '0'
			});
			$("label#emailError").show();
			$("input#email").focus();
			return false;
		}
		var message = $("textarea#message").val();
		if (message == "") {
			$(this).prev('.form__label').css({
				'visibility': 'hidden',
				'opacity': '0'
			});
			$("label#messageError").show();
			$("input#message").focus();
			return false;
		}

	// Form Submission
		var dataString = 'name='+ name + '&email=' + email + '&message=' + message;
		//alert (dataString);return false;
		$.ajax({
			type: "POST",
			url: "post.php",
			data: $(this).serialize(),
			success: function() {
				TweenMax.to('.form', 0.25, { opacity: 0, visibility: 'hidden'});
				TweenMax.to('.form__success', 0.25, { display: 'block' });
			}
		});
  		return false;
	});
});