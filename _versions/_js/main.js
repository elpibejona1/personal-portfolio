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
		var openTL = new TimelineMax();

		openTL.set('.menu__overlay', { display: 'block' });

		// Desktop and iPad
		if ( $(window).width() > 530 ) { 
			openTL.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: '+=300px'})
				.to('.nameSquare', 0.25, { x: '+=300px'}, '-=0.25');
		// Mobile
		} else {
			openTL.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: '+=250px'})
				.to('.nameSquare', 0.25, { x: '+=250px'}, '-=0.25');
		}
		
		openTL.to('.menu__hamburger__top', 0.25, { y: '+=12.5px' })
			.to('.menu__hamburger__middle', 0.25, { opacity: 0 }, '-=0.25')
			.to('.menu__hamburger__bottom', 0.25, { y: '-=12.5px' }, '-=0.25')
			.to('.menu__hamburger__top', 0.25, { rotation: '+=45', transformOrigin: 'center center' })
			.to('.menu__hamburger__bottom', 0.25, { rotation: '-=45', transformOrigin: 'center center' }, '-=0.25');

		$('body').css('overflow-y', 'hidden');

		menu.menuOpen = true;
	},

	// Close Menu
	close: function(){
		var closeTL = new TimelineMax();
		closeTL.to('.menu__hamburger__top', 0.25, { rotation: '-=45', transformOrigin: 'center center' })
			.to('.menu__hamburger__bottom', 0.25, { rotation: '+=45', transformOrigin: 'center center' }, '-=0.25')
			.to('.menu__hamburger__top', 0.25, { y: '-=12.5px' })
			.to('.menu__hamburger__middle', 0.25, { opacity: 1 }, '-=0.25')
			.to('.menu__hamburger__bottom', 0.25, { y: '+=12.5px' }, '-=0.25').set('.menu__overlay', { display: 'none' })
			.to($('.screen, .menu__overlay, .menu__button, .screen--1__content, .header'), 0.25, { x: 0 });

			if ( $(window).width() > 767 ){
				closeTL.to('.nameSquare', 0.25, { x: '-=300px'}, '-=0.25');
			} else {
				closeTL.to('.nameSquare', 0.25, { x: '-=250px'}, '-=0.25');
			}

		$('body').css('overflow-y', 'scroll');
		
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

			// Target Tweens for Desktop / iPad
			if ( $(window).width() > 767 ) {
				e.preventDefault();

				var current = $('.screen.active').attr('data-screen');

				var section = $(this).parent().attr('data-link');

	  			console.log(current + ', ' + section)
				
				menu.close();

	  			if ( parseInt(section) > parseInt(current) ){
	  				setTimeout(function(){ menu.navigateDown(section); }, 750);
	  			} else if ( parseInt(section) < parseInt(current) )
	  				setTimeout(function(){ menu.navigateUp(section, current); }, 750);
	  		// Use Hash functionality for mobile
	  		} else {

	  			menu.close();

	  			var hash = window.location.hash;

	  			switch(hash) {
	  				case '#home':
	  					$('.nameSquare__tagLine').html('Front-End Web Developer');
	  					break;
	  				case '#skills':
						$('.nameSquare__tagLine').html('Developer Skills');
						break;
					case '#work':
						$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
						break;
					/*case '#personal':
						$('.nameSquare__tagLine').html('Personal Projects');
						break;*/
					case '#about':
						$('.nameSquare__tagLine').html('About / Contact');
						break;
			  	}
			}
		})
	},

	navigateDown: function(section, current){
		menu.ran = true;
		
		$('.screen').removeClass('active');

		var nextScreen =  $('.screen.screen--' + section);
		nextScreen.addClass('active');

		if ( $(window).width() > 767 ) {

			switch(section) {
				case '1':
					$('.nameSquare__tagLine').html('Front-End Web Developer');
					break;
				case '2':
					screen2TL.progress(0).pause();
					screen2TL.play();
					$('.nameSquare__tagLine').html('Developer Skills');
					break;
				case '3':
					screen3TL.progress(0).pause();
					screen3TL.play();
					$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
					break;
				/*case '4':
					screen4TL.progress(0).pause();
					screen4TL.play();
					$('.nameSquare__tagLine').html('Personal Projects');
					break;*/
				case '5':
					screen5TL.progress(0).pause();
					screen5TL.play();
					$('.nameSquare__tagLine').html('About / Contact');
					break;
			}

			setTimeout(function(){
				menu.ran = false;
			},1000);

		} else {
			switch(section) {
				case '1':
					$('.nameSquare__tagLine').html('Front-End Web Developer');
					break;
				case '2':
					$('.nameSquare__tagLine').html('Developer Skills');
					break;
				case '3':
					$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
					break;
				/*case '4':
					$('.nameSquare__tagLine').html('Personal Projects');
					break;*/
				case '5':
					$('.nameSquare__tagLine').html('About / Contact');
					break;
			}
		}
	},
// If I scroll and then click, the screens activated on scroll are still visible when the click action takes place.
	navigateUp: function(section, current){
		menu.ran = true;
		
		$('.screen').removeClass('active');

		var nextScreen =  $('.screen.screen--' + section);
		nextScreen.addClass('active');

		if ( $(window).width() > 767 ) { 

			switch(current) {
				case '2':
					screen2TL.reverse();
				case '3':
					screen3TL.reverse();
				/*case '4':
					screen4TL.reverse();*/
				case '5':
					screen5TL.reverse();
			}
		}

		switch(section) {
			case '1':
				$('.nameSquare__tagLine').html('Front-End Web Developer');
				screen2TL.progress(0).pause();
				screen3TL.progress(0).pause();
				screen5TL.progress(0).pause();
				break;
			case '2':
				screen2TL.progress(1).pause();
				screen3TL.progress(0).pause();
				screen5TL.progress(0).pause();
				$('.nameSquare__tagLine').html('Developer Skills');
				break;
			case '3':
				screen3TL.progress(1).pause();
				screen2TL.progress(0).pause();
				screen5TL.progress(0).pause();
				$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
				break;
			/*case '4':
				screen4TL.progress(1).pause();
				$('.nameSquare__tagLine').html('Personal Projects');
				break;*/
			case '5':
				screen5TL.progress(1).pause();
				screen2TL.progress(0).pause();
				screen3TL.progress(0).pause();
				$('.nameSquare__tagLine').html('About / Contact');
				break;
		}

		setTimeout(function(){
			menu.ran = false;
		},1000);
	},
};
menu.init();

// Screen Tweens

var screen2TL = new TimelineMax({ paused: 'true' })

var skillBoxes = [ '.box--skills--1', '.box--skills--2', '.box--skills--3', '.box--skills--4', '.box--skills--8', '.box--skills--12', '.box--skills--11', '.box--skills--10', '.box--skills--9', '.box--skills--5', ];

screen2TL.to('.screen--2', 0, { visibility: 'visible' })
		.to('.screen--2', 0.5, { y: 0 })
		.staggerTo(skillBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var screen3TL = new TimelineMax({ paused: 'true' })

var workBoxes = [ '.box--work--1', '.box--work--5', '.box--work--9', '.box--work--2', '.box--work--10', '.box--work--3', '.box--work--11', '.box--work--4', '.box--work--8', '.box--work--12', ];

screen3TL.to('.screen--3', 0, { visibility: 'visible' })
		.to('.screen--3', 0.5, { y: 0 })
		.staggerTo(workBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var screen4TL = new TimelineMax({ paused: 'true' })

var personalBoxes = [ '.box--personal--1', '.box--personal--12', '.box--personal--9', '.box--personal--4', '.box--personal--2', '.box--personal--11', '.box--personal--10', '.box--personal--3', '.box--personal--8', '.box--personal--5', ];

screen4TL.to('.screen--4', 0, { visibility: 'visible' })
		.to('.screen--4', 0.5, { y: 0 })
		.staggerTo(personalBoxes, 0.5, { scale: 1, ease: Back.easeOut.config(1.7) }, 0.25 );

var screen5TL = new TimelineMax({ paused: 'true' })

if ($(window).width() > 767) {

	screen5TL.to('.screen--5', 0, { visibility: 'visible' })
			.to('.screen--5', 0.5, { y: 0 })
			.to('.scroll', 0, { visibility: 'none', opacity: 0 }, '-=0.5')
			.to('.nameSquare', 0.5, { y:0, x:0, top: '2vh', left: '10vw', padding: 15 })
			.to('.nameSquare', 0.5, { width: '80vw', height: 150 })
			.to('.row--about', 0.25, { height: '65vh', opacity: 1 })
			.to('.about__button', 0.25, { visibility: 'visible', opacity: 1 });
} else {
	screen5TL.to('.screen--5', 0, { visibility: 'visible' })
			.to('.screen--5', 0.5, { y: 0 })
			.to('.scroll', 0, { visibility: 'none', opacity: 0 }, '-=0.5')
			.to('.row--about', 0.25, { height: '65vh', opacity: 1 })
			.to('.about__button', 0.25, { visibility: 'visible', opacity: 1 });
}



// Full Page Scrolling Functionality

var scrolling = {
	init: function(){
		scrolling.scroll();
	},

	ran: false,

	scroll: function(){
		if ( $(window).width() > 767 ) {
			$(window).on('mousewheel', function(event){
				var delta = event.deltaY * event.deltaFactor;
				// ANIMATIONS ON SCROLL DOWN
				if ( $(window).width() > 767 && delta < -5 && scrolling.ran == false) {
					scrolling.scrollDown();
				}

				// ANIMATIONS ON SCROLL UP
				if ( $(window).width() > 767 && delta > 5 && scrolling.ran == false) {
					scrolling.scrollUp();
				}
			});
		} else {

			$(document).on('scroll', function(){
			    $('.screen').each(function(e){
			        if ( $(this).offset().top < window.pageYOffset + 10
			        	&& $(this).offset().top + $(this).height() > window.pageYOffset + 10 ){
			        		var hash = '#' + $(this).attr('id')
			           		if(history.pushState) {
							    history.pushState(null, null, hash);
							}
							else {
							    location.hash = hash;
							}
			        }

		  			var hash = window.location.hash;

		  			switch(hash) {
		  				case '#home':
		  					$('.nameSquare__tagLine').html('Front-End Web Developer');
		  					break;
		  				case '#skills':
							$('.nameSquare__tagLine').html('Developer Skills');
							break;
						case '#work':
							$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
							break;
						/*case '#personal':
							$('.nameSquare__tagLine').html('Personal Projects');
							break;*/
						case '#about':
							$('.nameSquare__tagLine').html('About / Contact');
							break;
				  	}
			    });
			});
		}
	},



	scrollDown: function(dataScreen){
		scrolling.ran = true;
		console.log('down');

		var current = $('.active').attr('data-screen');
		var currentScreen = $('.active');
	
		if ( currentScreen.next().hasClass('screen') ) {
			currentScreen.removeClass('active');
			currentScreen.next('.screen').addClass('active');
		}

		switch(current) {
			case '1':
				screen2TL.play();
				$('.nameSquare__tagLine').html('Developer Skills');
				break;
			case '2':
				screen3TL.play();
				$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
				break;
			case '3':
				/*screen4TL.play();
				$('.nameSquare__tagLine').html('Personal Projects');
				break;
			case '4':*/
				screen5TL.play();
				$('.nameSquare__tagLine').html('About / Contact');
				break;
		}

		setTimeout(function(){
			scrolling.ran = false;
		},1000);
	},

	scrollUp: function(dataScreen){
		scrolling.ran = true;

		var current = $('.active').attr('data-screen');
		var currentScreen = $('.active');	
	
		if (currentScreen.prev().hasClass('screen')) {
			currentScreen.removeClass('active');
			currentScreen.prev().addClass('active');
		}
		

		switch(current) {
			case '2':
				screen2TL.reverse();
				$('.nameSquare__tagLine').html('Front-End Web Developer');
				break;
			case '3':
				screen2TL.progress(1, true).pause();
				screen3TL.reverse();
				$('.nameSquare__tagLine').html('Developer Skills');
				break;
			/*case '4':*/
			case '5':
				screen3TL.progress(1, true).pause();
				/*screen4TL.reverse();*/
				screen5TL.reverse();
				$('.nameSquare__tagLine').html('Work Samples - CRI Communications');
				break;
			/*case '5':
				screen4TL.progress(1, true).pause();
				screen5TL.reverse();
				$('.nameSquare__tagLine').html('Personal Projects');
				break;*/
		}

		setTimeout(function(){
			scrolling.ran = false;
		},1000);
	}
}
scrolling.init();

var formPlaceholder = {
	init: function(){
		formPlaceholder.focus();
		formPlaceholder.blur();
	},
	focus: function(){
		$('.form__input').on('keyup', function(){
			var placeholder = $(this).next('.form__label');

			if ($(this).val() != "" ) {
				TweenMax.to(placeholder, 0.25, { visibility: 'visible', opacity: 1, top: 30 });
			} else {
				TweenMax.set(placeholder, { visibility: 'hidden', color:' #fff', top: 45 });
			}
		})
	},
	blur: function(){
		$('.form__input').on('blur', function(){
			var placeholder = $(this).next('.form__label');

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
			TweenMax.to($('.formContainer, .form'), 0.25, { display: 'block'});
			TweenMax.to($('.form'), 0.25, { top: '50%'});
			TweenMax.to('.menu__button', 0.25, { opacity: 0, visibility: 'hidden'});
		})
	},
	close: function(){
		$('.form__close, .form__close svg').on('click', function(){
			TweenMax.to($('.formContainer, .form'), 0.25, { display: 'none'});
			TweenMax.to($('.form'), 0.25, { top: '150%'});
			TweenMax.to('.menu__button', 0.25, { opacity: 1, visibility: 'visible'});
			console.log('close');
		})
	}
};
toggleForm.init();

