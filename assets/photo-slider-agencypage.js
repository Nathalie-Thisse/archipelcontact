import Splide from '@splidejs/splide';

// function for photo carousel on AGENCY page (--> see photo-slider-homepag.js for the other photos carousel)

	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#secondary-slider', {
			fixedWidth  : 100,
			height      : 60,
			gap         : 10,
			cover       : true,
			isNavigation: true,
			focus       : 'center',
			breakpoints : {
				'600': {
					fixedWidth: 66,
					height    : 40,
				}
			},
		} ).mount();
	} );



