import Splide from '@splidejs/splide';

// function for photo carousel on AGENCY page (--> see photo-slider-homepag.js for the other photos carousel)

	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#image-slideragency', {
			'cover'      : true,
			'heightRatio': 0.5,
			'height' : '200px',
			'width' : '100%',
			perPage: 4,
			perMove: 1,
			'gap' : '1rem',
			autoplay : 'true',
			type   : 'loop',
		} ).mount();
	} );
	


